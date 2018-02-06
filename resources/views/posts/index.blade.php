@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			<h2>All posts <a href="{{route('posts.create')}}" class="btn btn-success pull-right">Create</a></h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Thumbnail</th>
						<th>Category</th>
						<th>Created at</th>
						<th>Created By</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
					<tr>
						<td>{{__($post->id)}}</td>
						<td>{{__($post->title)}}</td>
						<td><img class="img-responsive" src="{{asset($post->image)}}" alt="" width="100px"></td>
						<td>{{$post->post_category->name}}</td>
						<td>{{$post->created_at->toFormattedDateString()}}</td>
						<td>{{$post->user->name}}</td>
						<td>
							<a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning btn-sm">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		
			
			

			</div>		
		</div>
	</div>
@endsection