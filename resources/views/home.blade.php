@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the home page of the blog.</p>
    <p>{{ $message }}</p>
@endsection
