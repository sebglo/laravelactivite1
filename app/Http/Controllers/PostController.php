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
    }
     
}
