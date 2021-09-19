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
                <td class="d-flex">
                    <a href="{{ route('posts.show', $post)}}"> <!-- linkiamo la nostra show da inviare l'id al controller-->
                        <button type="submit" class="btn btn-primary mr-1 p-1"><i class="bi bi-zoom-in"></i></button>
                    </a>
                    <a href="{{ route('posts.edit', $post)}}">
                        <button type="submit" class="btn btn-primary mr-1 p-1"><i class="bi bi-pen"></i></button>
                    </a>
                    <!-- <a href="{{ route('posts.destroy', $post)}}"><i class="bi bi-trash-fill"></i></a> -->
                    <button type="button"  class="btn btn-danger p-1" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-trash"></i></button>
            
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel">ATTENZIONE!!!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-danger">
                               <h3>Sei sicuro di volerlo cancellare?</h3> 
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('posts.destroy', $post)}}" method="post"> <!--facciamo una form altrimenti prende la stessa rottadella show -->
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </td>  
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
