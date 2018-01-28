<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCategory;
use App\Post;

class PostCategoryController extends Controller
{
	public function __construct()
	{
		return $this->middleware('auth');
	}

    public function index()
    {
    	$postcategories = PostCategory::all();
    	return view('posts.postcategory', compact('postcategories'));
    }

    public function store(Request $request)
    {
    	$postcategory = new PostCategory();
    	$postcategory->name = $request->name;
    	$postcategory->slug = $request->slug;
    	$postcategory->description = $request->description;
    	$postcategory->save();

    	return redirect('postcategory');
    }

    public function show($id)
    {
        $postcategory = PostCategory::findOrFail($id);
        $posts = $postcategory->posts;
        //$posts = Post::where('post_category_id', $id)->get();
        $postcategories = PostCategory::all();
        return view('posts.postcategory', compact('posts', 'postcategories'));
    }
}
