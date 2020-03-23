<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    //
    function index()
    {    
        //permet d'afficher les trois dernier article trier par date 
        //pour les envoyer a la vue 
        $posts = \App\Post::limit(3)->orderBy('post_date', 'DESC')->get();
        return view('welcome',array('posts' => $posts));
    }

    

    
    
}
