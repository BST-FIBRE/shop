<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Famillies;
use App\Models\HoldOn;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $famillies = Cache::store('redis')->get('famillies');
        if ($famillies == null) {
            $famillies = Famillies::orderBy('index', 'ASC')
                ->get();
            foreach ($famillies as $familly) {
                $familly->categories = HoldOn::where('id_familly', $familly->id)->get();
                foreach ($familly->categories as $value) {
                    $value->sub = Categorie::where('sub_name', $value->name_category)->get();
                }
            }
            Cache::store('redis')->put('famillies', $famillies, now()->addMinutes(10));
        }
        view()->share(compact('famillies'));
    }
}
