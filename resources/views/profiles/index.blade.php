@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h1>Profile List <a href="{{url('profiles/create')}}" class="btn btn-success pull-right">Create</a></h1>
			@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
			@endif
			<div class="col-sm-12">
				<table id="profile" class="table table-bordered">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Birth Date</th>
							<th>Image</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Created By</th>
							<th width="180">Action</th>
						</tr>
					</thead>
					<tbody>
						<div style="display: none">{{$i= 1}}</div>
						@foreach($profiles as $profile)

						<tr>
							<td>{{ $i++ }}</td>
							<td>{{$profile->name}}</td>
							<td>{{$profile->email}}</td>
							<td>{{$profile->date_of_birth}}</td>
							<td><img src="{{$profile->image}}" alt="" class="img-responsive" width="120"></td>
							<td>{{$profile->gender}}</td>
							<td>{{$profile->address}}</td>
							<td>{{$profile->user->name}}</td>
							<td><a href="{{route('profiles.show', $profile->id)}}" class="btn btn-warning btn-sm">Show</a>
								<a href="{{route('profiles.edit', $profile->id)}}" class="btn btn-warning btn-sm">Edit</a>

								<a href="#" onclick="return confirm('are you sure')">
								<form class="pull-right" action="{{route('profiles.destroy', $profile->id)}}" method="POST">
									{{csrf_field()}}
									{{method_field('DELETE')}}
									<button class="btn btn-danger btn-sm" type="submit">Delete</button>
									
								</form>

								</a>

							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<!-- <ul class="pagination">
					
				</ul> -->
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script>
	$(document).ready(function() {
	    $('#profile').DataTable();
	} );
</script>
@endsection