@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>All Slides <a href="{{route('slides.create')}}" class="btn btn-success pull-right">Create</a></h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th width="500">Description</th>
						<th>Image</th>
						<th>Created at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($slides as $slide)
					<tr>
						<td>{{$slide->id}}</td>
						<td>{{$slide->title}}</td>
						<td width="500">{{$slide->description}}</td>
						<td><img src="{{asset($slide->image)}}" alt="" width="100"></td>
						<td>{{$slide->created_at}}</td>
						<td><a href="{{route('slides.edit', $slide->id)}}" class="btn btn-warning">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection