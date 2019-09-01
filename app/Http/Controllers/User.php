<?php

namespace App\Http\Controllers;


class User extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
}
