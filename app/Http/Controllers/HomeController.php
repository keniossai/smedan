<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function index()
    {
        return view('pages.services');
    }
}
