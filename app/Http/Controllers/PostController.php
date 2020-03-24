<?php

namespace App\Http\Controllers;

use App\Commentaire;
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


    public function store($post_title) {
        $post = \App\Post::where('post_title',$post_title)->first(); 
        //get first post with post_name == $post_name

        $comms = \App\Commentaire::all(); 
        //get first post with post_name == $post_name


        $contact = new Commentaire(); //on instancie un nouveau projet
        
        $contact->com_name = request('name'); //on set le titre avec la donnée envoyée du formulaire
        $contact->com_message = request('message');

        $contact->save(); // on enregistre dans la base
       
        return view('article_seul',array( //Pass the post to the view
            'post' => $post,
            'comms' => $comms
        ));
     }



    /*public function store()
    {
        $contact = new Commentaire(); //on instancie un nouveau projet
        
        $contact->com_name = request('name'); //on set le titre avec la donnée envoyée du formulaire
        $contact->com_message = request('message');

        $contact->save(); // on enregistre dans la base

        return view('/welcome'); // méthode pour rediriger vers une autre url (en get par défaut)

    }*/
     
}
