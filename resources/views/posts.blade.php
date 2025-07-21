@extends('layouts.master')

@section('title', 'Posts')

@section('content')
    <h2>All Posts</h2>
    @foreach($posts as $post)
        <div class="mb-3">
            <h4>{{ $post['title'] }}</h4>
            <p>{{ $post['body'] }}</p>
        </div>
    @endforeach                
@if(count($posts) > 0)
    <p>There are {{ count($posts) }} posts.</p>
@else
    <p>No posts available.</p>
@endif

@endsection
