@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">

		<div class="col-sm-8 col-sm-offset-2">
			<h2>Edit Post <a href="{{url('posts')}}" class="btn btn-primary pull-right">Back</a></h2>
			@if(count($errors->all()) > 0)
			<div class="alert alert-warning">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{route('posts.update', $post->id)}}" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<div class="form-group">
					<label for="title">Post Title</label>
					<input type="text" id="title" name="title" value="{{$post->title}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Select a post Thumbnail</label>
					<input type="file" id="image" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="postcategory">Select A Post Category</label>
					<select name="post_category_id" id="postcategory">Select a Post Category
						@foreach($postcategories as $postcategory)
						<option value="{{$postcategory->id}}" @if($post->post_category->id == $postcategory->id) selected @endif>{{$postcategory->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="description">description</label>
					<textarea name="description" id="description" class="form-control" cols="30" rows="5">{{$post->description}}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
		<div class="col-sm-2" style="margin-top:50px">
			<img src="{{asset($post->image)}}" alt="" class="img-responsive">
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection