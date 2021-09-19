@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} 
                    <a href="{{ route('posts.index')}}">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-house"></i></button>

                    </a> 
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        
                        <div class="cont-img col-4">
                            <img src="{{$post->image}}" alt="">
                            <p>{{$post->author}}</p>
                            
                        </div>
                        <div class="cont-text col-8">
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->content}}</p>
                            <p>{{$post->created_at}}</p> 
                            <a href="{{ route('posts.create')}}">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-left"></i></button>
                            </a>
                        </div>
                        <hr>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
