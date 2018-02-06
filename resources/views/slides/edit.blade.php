@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">

		<div class="col-sm-7 col-sm-offset-2">
			<h2>Create Post <a href="{{url('slides')}}" class="btn btn-primary pull-right">Back</a></h2>
			@if(count($errors->all()) > 0)
			<div class="alert alert-warning">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{route('slides.update')}}" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<div class="form-group">
					<label for="title">Slide Title</label>
					<input type="text" value="{{$slide->title}}" id="title" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Select a post Thumbnail</label>
					<input type="file" id="image" name="image" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="description">description</label>
					<textarea name="description" id="description" class="form-control" cols="30" rows="5">{{$slide->description}}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
		<div class="col-sm-3">
			<img src="{{asset($slide->image)}}" alt="" class="img-responsive">
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection