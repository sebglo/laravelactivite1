<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        return view('welcome');
    }

    function article()
    {
        return view('article');
    }

    function contact()
    {
        return view('contact');
    }
}
