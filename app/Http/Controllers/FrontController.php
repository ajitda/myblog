<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Slide;

class FrontController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->paginate(3);
    	$slides = Slide::all();
    	return view('front',  compact('posts', 'slides'));
    }

    public function showpost($id)
    {
    	$post = Post::findOrFail($id);
    	return view('posts.show', compact('post'));
    }
}
