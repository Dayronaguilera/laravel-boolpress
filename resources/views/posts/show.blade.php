@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="{{ route('posts.index')}}"><i class="bi bi-house"></i></a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        
                        <div class="cont-img col-4">
                            <img src="{{$Post->image}}" alt="">
                            <p>{{$Post->author}}</p>
                            
                        </div>
                        <div class="cont-text col-8">
                            <h1>{{$Post->title}}</h1>
                            <p>{{$Post->content}}</p>
                            <p>{{$Post->created_at}}</p> 
                            <p><a href="{{ route('posts.create')}}"><i class="bi bi-box-arrow-in-left"></i></a></p>
                        </div>
                        <hr>
                       

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
