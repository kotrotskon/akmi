@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">{{ $post->user->name }}</div>
                    <div class="card-body">
                        <a href="{{ route('post.show', $post->id)}}">{{$post->body}}</a>
                    </div>
                    @if(auth()->user()->id == $post->user_id)
                        <a href="{{ route('post.edit', $post->id)}}">Edit</a>
                    @endif

                </div>
                <br/>
                @endforeach
            </div>
        </div>
    </div>
@endsection
