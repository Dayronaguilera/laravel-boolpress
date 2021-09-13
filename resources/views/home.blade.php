@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Welcome To Dayron Blog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        @foreach($allPosts as $post)
                        <div class="cont-img col-4">
                            <img src="{{$post->image}} " alt="">
                            <p>{{$post->author}}</p>
                            
                        </div>
                        <div class="cont-text col-8">
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->content}}</p>
                            <p>{{$post->author}}</p>
                            <p>{{$post->created_at}}</p> 
                        </div>
                        <hr>
                        @endforeach

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
