@extends('layouts.master')

@section('content')
    <h1>All Posts</h1>

    @foreach($posts as $post)
        <div>
            <h2><a href="{{ url('/posts/'.$post->id) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach

    @if(count($posts) > 0)
        <p>There are {{ count($posts) }} posts.</p>
    @else
        <p>No posts available.</p>
    @endif
@endsection
