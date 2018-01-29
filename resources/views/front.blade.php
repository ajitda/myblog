@extends('layouts.app')
@section('content')
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		    	@foreach($slides as $slide)
		      <li data-target="#myCarousel" data-slide-to="{{$slide->id}}"></li>
		      @endforeach
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
			@foreach($slides as $slide)
		      <div class="item">
		        <img src="{{asset($slide->image)}}" alt="Los Angeles" style="width:100%;">
		        <div class="carousel-caption">
		          <h3>{{$slide->title}}</h3>
		          <p>{{$slide->description}}</p>
		        </div>
		      </div>
			@endforeach
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
						<p>{{$post->description}} <a href="{{route('showpost', $post->id)}}">View Details</a></p>

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
@section('scripts')
<script>
	jQuery(document).ready(function(){

		jQuery('.carousel-inner .item:first-child').addClass('active');
		jQuery('.carousel-indicators li:first-child').addClass('active');
	});
</script>
@endsection