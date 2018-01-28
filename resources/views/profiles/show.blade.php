@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h1>Profile Details</h1>
				<h3>Name : {{$profile->name}}</h3>
				<img src="{{asset($profile->image)}}" class="img-responsive" alt="">
				<p>Email : {{$profile->email}}</p>
				<p>Date Of Birth : {{$profile->date_of_birth}}</p>
				<p>Gender : {{$profile->gender}}</p>
				<p>Address : {{$profile->address}}</p>
				
			</div>
		</div>
	</div>
@endsection