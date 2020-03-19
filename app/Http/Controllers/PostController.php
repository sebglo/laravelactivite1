<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($post_title) {
        $post = \App\Post::where('post_title',$post_title)->first(); 
        //get first post with post_name == $post_name
       
        return view('article_seul',array( //Pass the post to the view
            'post' => $post
        ));
     }

     function articles()
    {
        //permet de prendre toutes les donnees pour les envoyer a la vue 
         $posts = \App\Post::all(); //get all posts
         return view('articles',array('posts' => $posts));
        
        //$posts = \App\Post::limit(3)->orderBy('post_date', 'DESC')->get();
        //return view('articles',array('posts' => $posts));
        //return view('articles');
    }

    /*function articles()
    {
        $post = \App\Post::where('post_title',$post_title)->first();
        return view('articles',array('post' => $post));
    }*/
    
    /*function articles()
    {
        return view('articles');
    }*/
     
}
