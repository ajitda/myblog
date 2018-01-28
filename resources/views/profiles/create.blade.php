@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			@if(count($errors->all()) > 0)
			<div class="alert alert-warning">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{route('profiles.store')}}" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="date_of_birth">Date of Birth</label>
					<input type="date" id="date_of_birth" name="date_of_birth" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Select Your Profile Image</label>
					<input type="file" id="image" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="gender">Select Your Gender</label>
					<input type="radio" name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="others"> Others
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<textarea name="address" id="address" class="form-control" cols="30" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection