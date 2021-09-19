@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="offset-2 col-8">
            <form class="container-form" action="{{ route('posts.update', $post)}}" method="POST">
            @csrf

            @method('PUT') <!-- richiamiamo la method giusta (update) -->

                <label for="title"></label>
                <input class="m-3" type="text" name="title" id="title" value="{{ $post->title }}">
                <br>
                <label for="content"></label>
                <textarea rows="8" class="m-3" type="text" name="content" id="content" value="{{ $post->content }}">{{ $post->content }}</textarea>
                <br>
                <label for="img"></label>
                <input class="m-3" type="text" name="img" id="img" value="{{ $post->image }}">
                <br>
                <label for="name"></label>
                <input class="m-3" type="text" name="name" id="name" value="{{ $post->author }}">
                <br>
                <input class="m-3" type="submit" value="Modifica">
            </form>

        </div>

    </div>
</div>
@endsection
