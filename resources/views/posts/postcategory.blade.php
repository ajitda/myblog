@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Post Category List <a href="{{url('postcategory/create')}}" class="btn btn-success pull-right" data-toggle="modal" data-target="#createForm">Create</a></h3>
				<div class="modal fade" id="createForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Post Category Create Form</h4>
				      </div>
				      <div class="modal-body">
				       <form action="{{route('postcategory.store')}}" method="POST">
				       	{{csrf_field()}}
				       	<div class="form-group">
				       		<label for="name">Category Name</label>
				       		<input type="text" name="name" id="name" class="form-control">
				       	</div>
				       	<div class="form-group">
				       		<label for="slug">Category Slug</label>
				       		<input type="text" name="slug" id="slug" class="form-control">
				       	</div>
				       	<div class="form-group">
				       		<label for="description">Category Description</label>
				       		<textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
				       	</div>
				       	<button class="btn btn-primary">Create</button>
				       </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				       
				      </div>
				    </div>
				  </div>
				</div>
				<ul>
					@foreach($postcategories as $postcategory)
					<li class="btn btn-default"><a href="{{route('postcategory.show', $postcategory->id)}}">{{$postcategory->name}}</a></li>
					@endforeach
				</ul>
				@if(isset($posts))
				@foreach($posts as $post)
				<div class="single-post" style="margin-bottom: 20px">
					<div class="row">
						<div class="col-sm-5">
							<img class="img-responsive" src="{{asset($post->image)}}" alt="">
						</div>	
						<div class="col-sm-7">
							<h4>{{$post->post_category->name}}</h4>
							<h3>{{$post->title}}</h3>
							<p>{{$post->description}}</p>

							<p><span>Created By : {{$post->user->name}}</span> <span class="pull-right">Created at: {{$post->created_at->toFormattedDateString()}}</span></p>
						</div>	
						
					</div>
				</div>
				@endforeach
				@endif

			</div>
		</div>
	</div>
@endsection