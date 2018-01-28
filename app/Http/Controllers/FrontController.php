<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->paginate(3);
    	return view('front',  compact('posts'));
    }
}
