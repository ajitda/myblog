<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostCategory;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postcategories = PostCategory::all();
        return view('posts.create', compact('postcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = $request->all();
         if($input['image']){
            $input['image'] = $this->upload($request->image);
         }else{
            $input['image'] = 'img/posts/default.jpg';
         }
         $input['user_id'] = Auth::user()->id;
         Post::create($input);
        return redirect('posts');    
    }
    public function upload($file)
        {
            //$extension = $file->getClientOriginalExtension();
            $name = time().$file->getClientOriginalName();
            $filename = $name;
            $current = public_path('img/posts/');
            $file->move($current, $filename);
            return 'img/posts/'.$filename;
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $postcategories = PostCategory::all();
        return view('posts.edit', compact('post', 'postcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $input = $request->all();
         if($input['image']){
            $input['image'] = $this->upload($request->image);
         }
        // $input['user_id'] = Auth::user()->id;
         $post->update($input);
        return redirect('posts');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
