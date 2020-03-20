<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    /*function contact()
    {
        return view('contact');
    }*/


    public function store()
    {
        $contact = new Contact(); //on instancie un nouveau projet

        $contact->contact_name = request('name'); //on set le titre avec la donnée envoyée du formulaire
        $contact->contact_email = request('email');
        $contact->contact_message = request('message');
        $contact->contact_date = request('date');
        
        $contact->save(); // on enregistre dans la base
        
        return redirect('/contact'); // méthode pour rediriger vers une autre url (en get par défaut)

    }

    function contact()
    {
        //permet de prendre toutes les donnees pour les envoyer a la vue 
         $posts = \App\Contact::all(); //get all posts
         return view('/contact',array('posts' => $posts));
        
        //$posts = \App\Post::limit(3)->orderBy('post_date', 'DESC')->get();
        //return view('articles',array('posts' => $posts));
        //return view('articles');
    }
}
