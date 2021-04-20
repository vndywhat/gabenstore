<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    public function index()
    {
        return view('document.index');
    }

    public function agreement()
    {
        return view('document.agreement');
    }

    public function privacy()
    {
        return view('document.privacy-policy');
    }

    public function offer()
    {
        return view('document.offer');
    }

    public function services()
    {
        return view('document.services');
    }
}
