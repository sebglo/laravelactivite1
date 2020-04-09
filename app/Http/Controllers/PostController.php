<?php

namespace App\Http\Controllers;

use App\Post;
use App\Commentaire;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::latest()->paginate(5);
  
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'post_name' => 'required', 
            'post_content' => 'required',
            'post_title' => 'required',
        ]);
  
        Post::create($request->all());
   
        return redirect()->route('posts.index')
                        ->with('success','l article est creer avec succé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'post_name' => 'required', 
            'post_content' => 'required',
            'post_title' => 'required',
        ]);
  
        $post->update($request->all());
  
        return redirect()->route('posts.index')
                        ->with('success','l article est mis a jour avec succé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
  
        return redirect()->route('posts.index')
                        ->with('success','l article c est éffacé avec succé');
    }


    public function voir($post_title) {
        $post = \App\Post::where('post_title',$post_title)->first(); 
        //get first post with post_name == $post_name
        
        $comms = \App\Commentaire::all(); 
        
        
        return view('article_seul',array( //Pass the post to the view
        'post' => $post,
        'comms'=>$comms 
        ));
        }
        
        function articles()
        {
        //permet de prendre toutes les donnees pour les envoyer a la vue 
        $posts = \App\Post::all(); //get all posts
        return view('articles',array('posts' => $posts));
        }
        
        function modif()
        {
        //permet de prendre toutes les donnees pour les envoyer a la vue 
        $posts = \App\Post::all(); //get all posts
        return view('/posts/index',array('posts' => $posts));
        }
        
        public function commentaire($post_title) { //$post_title
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
        'comms'=>$comms 
        ));
        
        //return view('articles');
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
