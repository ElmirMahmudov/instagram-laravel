<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        
        // dd($user);
        
        return view('profiles.show', [
            'user' => $user,
            ]);
    }
}
