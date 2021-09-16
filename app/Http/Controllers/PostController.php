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
    public function index(){ // mandiamo i dati alla index

        $Posts = Post::all(); // creiamo una variabile che prenda tutti i post nel db
        return view('posts.index', compact('Posts')); // e inviamo i dati presi nel db al tamplate.blade
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // prendiamo i dati inseriti dall'utente
    {
       return view('posts.create'); // colleghiamo il nostro templates.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // prendiamo i dati inseriti dall'utente e li salviamo nel db
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
        $Post = Post::find($id); // creiamo una variabile per l'id che riceviamo dal template
        return view('posts.show', compact('Post')); // e la mandiamo al nostro show (single post)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
