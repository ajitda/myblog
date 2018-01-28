@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-7 col-sm-offset-2">
			<h3>Edit Profile</h3>
			<form action="{{route('profiles.update', $profile->id)}}" enctype="multipart/form-data" method="POST">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" value="{{$profile->name}}" id="name" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" value="{{$profile->email}}" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="date_of_birth">Date of Birth</label>
					<input type="date" id="date_of_birth" name="date_of_birth"  value="{{$profile->date_of_birth}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Select Your Profile Image</label>
					<input type="file" id="image" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="gender">Select Your Gender</label>
					<input type="radio" name="gender" value="male" {{($profile->gender == 'male') ? 'checked' : ''}}> Male
					<input type="radio" name="gender" value="female" {{ ($profile->gender == 'female') ? 'checked' : ''}}> Female
					<input type="radio" name="gender" value="others" {{($profile->gender == 'others') ? 'checked' : ''}}> Others
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<textarea name="address" id="address" class="form-control" cols="30" rows="5">{{$profile->address}}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">update</button>
			</form>
		</div>
		<div class="col-sm-3">
			<img src="{{asset($profile->image)}}" class="img-responsive" alt="">
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection