<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function company()
    {
        return view('home.company');
    }

    public function support()
    {
        return view('home.support');
    }
}
