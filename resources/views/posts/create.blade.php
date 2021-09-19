@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="offset-2 col-8">
            <form class="container-form" action="{{ route('posts.store')}}" method="POST">
            @csrf
                <label for="title"></label>
                <input class="m-3" type="text" name="title" id="title" placeholder="Title">
                <br>
                <label for="content"></label>
                <textarea rows="5" class="m-3" type="text" name="content" id="content" placeholder="Text Area"></textarea>
                <br>
                <label for="img"></label>
                <input class="m-3" type="text" name="img" id="img" placeholder="Picture">
                <br>
                <label for="name"></label>
                <input class="m-3" type="text" name="name" id="name" placeholder="Name">
                <br>
                <input class="m-3" type="submit" value="Invia">
            </form>

        </div>

    </div>
</div>
@endsection
