@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date</th>
        <th scope="col">Title</th>
        <th scope="col">Select</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->author}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->title}}</td>
            <td>
                <a href="{{ route('posts.show', $post)}}"> <!-- linkiamo la nostra show da inviare l'id al controller-->
                    <i class="bi bi-zoom-in"></i>

                </a>
            </td>
            
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection
