<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Requests\Request;
use App\Contact;
use App\Http\Requests\Request;

class ContactController extends Controller
{
    //
    /*function contact()
    {
        return view('contact');
    }*/


   /* public function store(Request $request)
    {
        $validator = Contact::make($request->all(), [
            'name' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:250',
            'date' => 'required'
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
 
        return view('/contact');
    }*/

    /*public function store(Request $request)
    {
        $validator = Contact::make($request->all(), [
            'name' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:250',
            'date' => 'bail|required|date'
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $contact = new Contact(); //on instancie un nouveau projet
        
        $contact->contact_name = request('name'); //on set le titre avec la donnée envoyée du formulaire
        $contact->contact_email = request('email');
        $contact->contact_message = request('message');
        $contact->contact_date = request('date');

        $contact->save(); // on enregistre dans la base

        return redirect('/contact');
 
        //return view('contact');
    }*/


    public function store()
    {
        
        /*$request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'date' => 'required'
        ]);*/

        
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
        return view('/contact', array('posts' => $posts));
    }
}
