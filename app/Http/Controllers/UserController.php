<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->middleware('complete')->except(['update', 'complete']);
        parent::__construct();
    }

    public function index()
    {
        return view('user.index');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function complete()
    {
        return view('user.complete');
    }

    public function update(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
        ]);

        $user = User::where('id', Auth::id())->first();
        if (request('firstname') != $user->firstname) $user->firstname = request('firstname');
        if (request('lastname') != $user->lastname) $user->lastname = request('lastname');
        if (request('phone') != $user->phone) $user->phone = request('phone');
        $user->save();

        return redirect()->route('user.index')->with('success', 'Vos informations on bien été mise à jour !');
    }
}
