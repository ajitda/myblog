@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h3>Name : {{$post->title}}</h3>
				<h4>Post Category : {{$post->post_category->name}}</h4>
				<img src="{{asset($post->image)}}" class="img-responsive" alt="">
				<p>Created By : {{$post->user->name}} <span class="pull-right">Publish Date: {{$post->created_at}}</span></p>
				<p>Email : {{$post->description}}</p>
				
			</div>
		</div>
	</div>
@endsection