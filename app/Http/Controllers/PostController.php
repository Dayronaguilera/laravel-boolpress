<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ // mandiamo i dati alla index ps:visualizza i dati del db

        $Posts = Post::all(); // creiamo una variabile che prenda tutti i post nel db
        return view('posts.index', compact('Posts')); // e inviamo i dati presi nel db al tamplate.blade
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // prendiamo i dati inseriti dall'utente ps: prende i dati inseriti dall'utente e li crea
    {
       return view('posts.create'); // colleghiamo il nostro templates.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // prendiamo i dati inseriti dall'utente e li salviamo nel db ps: invia i dati dell'utente del db
    {
        //dd($request);
        $data = $request->all(); // ritorna tutti i valori del form in un array associativo

        $post = new Post(); // ridefiniamo le tabelle nel nostro db 
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->image = $data['img'];
        $post->author = $data['name'];
        $post->save(); // salva tutto nel db

        // dd('fatto');
        return redirect()->route('posts.show', $post->id); // ci riporta al post appena inserito
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // riceviamo id dal index / create template
    {
        $post = Post::find($id); // creiamo una variabile per l'id che riceviamo dal template
        return view('posts.show', compact('post')); // e la mandiamo al nostro show (single post)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) // si collega in modo automatico e prende l'id ps:visualiziamo dei dati gia esistenti nel db
    {
        return view('posts.edit', compact('post')); // invio l'ogetto gia  popolato
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post){
        
        $data = $request->all(); // prendiamo tutti i dati del db

        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->image = $data['img'];
        $post->author = $data['name'];
        $post->save(); // ridefiniamo le modifiche che andranno nel db

        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
