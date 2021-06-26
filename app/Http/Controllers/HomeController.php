<?php

namespace App\Http\Controllers;

use App\Models\Famillies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Array_;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $search = request('search');
        $origin_search = $search;
        $isEmpty = true;
        if ($isEmpty)
        {
            // Collection to array
            $famillies = Cache::store('redis')->get('famillies');
            foreach ($famillies as $familly) {
                $familly->categories = $familly-> categories->toArray();
            }
            $array = $famillies->toArray();

            // String to array separate by space
            $search = explode(" ", $search);

            // Removing connections words
            for ($i = 0; $i < count($search); $i++) if (strlen($search[$i]) <= 3) array_splice($search, $i, $i);

            $tryto = $this->match($search, $array, 'name', 5);
            for ($i = 0; $i < count($famillies); $i++) {
                $response = $this->match($search, $famillies[$i]['categories'], 'name_category', 5);
                if ($response != null) $tryto = array_merge($tryto, $response);
            }
        }
        return view('search', compact('origin_search', 'isEmpty', 'tryto'));
    }

    private function sanitizeString($str)
    {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        $str = preg_replace('/[^a-z0-9]/i', '_', $str);
        $str = preg_replace('/_+/', '_', $str);

        return $str;
    }

    private function match($array, $matchWith, $field, $length)
    {
        $result = null;
        for ($i = 0; $i < count($array); $i++) {
            $word = Str::lower($array[$i]);
            for ($j = 0; $j < count($matchWith); $j++) {
                $name = Str::lower($matchWith[$j][$field]);
                $name = $this->sanitizeString($name);
                $str1chars = str_split($word, $length);
                $str2chars = str_split($name, $length);
                $diff = array_diff($str1chars, $str2chars);
                if (strlen(implode($diff)) < strlen($word)) {
                    if ($result == null) $result = array();
                    array_push($result, str_replace('_', ' ', $name));
                }
            }
        }
        if ($result == null && $length > 3) {
            return $this->match($array, $matchWith, $field, $length - 1);
        } else {
            return $result;
        }
    }
}
