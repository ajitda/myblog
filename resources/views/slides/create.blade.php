@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">

		<div class="col-sm-8 col-sm-offset-2">
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
			<form action="{{route('slides.store')}}" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="title">Slide Title</label>
					<input type="text" id="title" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Select a post Thumbnail</label>
					<input type="file" id="image" name="image" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="description">description</label>
					<textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection