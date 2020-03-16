<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    //
    function index()
    {   
        $posts = \App\Post::all(); //get all posts
        return view('welcome',array(
            'posts' => $posts
        ));
 
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
