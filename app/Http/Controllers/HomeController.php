<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    //
    function index()
    {   
        //permet de prendre toutes les donnees pour les envoyer a la vue 
        //$post = \App\Post::all(); //get all posts
        //return view('welcome',array('posts' => $post));

         //permet de prendre toutes les donnees pour les envoyer a la vue 
         //$posts = \App\Post::all(); //get all posts
         //return view('welcome',array('posts' => $posts));

         //permet de prendre les donnees concernant l'id 1
        //$test = \App\Post::find(1); //trouver le post avec l’id 1
        //return view('welcome',['test'=>$test]);

        //--------------ne fonctionne pas----------------
        //$post = \App\Post::find(1); //trouver le post avec l’id 1
        //echo $post->author->name; //affiche le nom de l’auteur
        //return view('welcome');

        //$post = \App\Post::select('post_name')->latest('post_name')->get();
        //return view('welcome',['post_name'=>$post]);


        //$tests = \App\Post::limit(3)->orderBy('post_date', 'DESC')->get();
        //$tests = \App\Post::orderBy('post_id', 'desc')->limit(5)->get();
        //return view('welcome',['tests'=>$tests]);
        //------------- fin de ne fonctionne pas----------------

        
        //permet de prendre toutes les donnees pour les envoyer a la vue 
        $posts = \App\Post::limit(3)->orderBy('post_date', 'DESC')->get();
        return view('welcome',array('posts' => $posts));
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
