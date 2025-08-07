<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $message = "Welcome to the Blog!";
        return view('home', compact('message'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function posts()
    {
        $posts = [
            ['title' => 'Post One', 'body' => 'This is the first post.'],
            ['title' => 'Post Two', 'body' => 'This is the second post.'],
        ];
        return view('posts', compact('posts'));
    }

}
