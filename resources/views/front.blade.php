@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">

		      <div class="item">
		        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
		        <div class="carousel-caption">
		          <h3>Los Angeles</h3>
		          <p>LA is always so much fun!</p>
		        </div>
		      </div>
		      
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	</div>
	<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				
			<h2>All posts </h2>
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
			<ul class="pagination">
				{{$posts->links()}}
			</ul>
			</div>	

		</div>
	</div>
@endsection