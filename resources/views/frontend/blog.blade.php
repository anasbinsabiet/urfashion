@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')
<div id="indexc">
	<div class="container">
		<!-- <ul class="breadcrumb">
			<li><a href="{{url('/')}}" lang="en">Home</a></li>
			<li><a href="javascript:void(0);" lang="en">Blog</a></li>
		</ul> -->
		<div class="aboutprotext mt-5">
			<h1 lang="en">Blog</h1>
			<main id="main" class="site-main" role="main">
				<div class="row">
				@foreach($blog as $row)
					<div class="col-xs-12 col-sm-4 col-md-4">
						<article id="post-3431" class="genaral-post-item post-3431 post type-post status-publish format-standard has-post-thumbnail hentry category-business-appreciation-gifts category-business-giveaways tag-bamboo-promotional-products tag-eco-friendly-bamboo-promotional-items tag-sustainable-promotional-products">
							<figure class="genpost-featured-image">
								<a href="{{url(route('blog'))}}/{{$row->slug_en}}" title="{{$row->title_en}}"><img width="100%" height="220" @if($row->image) src="{{url($row->image)}}" @else src="{{url('defaults/noimage/no_img.jpg')}}" @endif sizes="(max-width: 388px) 100vw, 388px"></a>
							</figure>

							<header class="genpost-entry-header">
								<h2 class="genpost-entry-title entry-title"><a href="{{url(route('blog'))}}/{{$row->slug_en}}" rel="bookmark">{{$row->title_en}}</a></h2>
							</header><!-- .entry-header -->

							<div class="genpost-entry-content">
							{!! \Illuminate\Support\Str::words($row->description_en, 30)  !!}
								<a class="moretag" href="{{url(route('blog'))}}/{{$row->slug_en}}"> [...]</a>
							</div><!-- .entry-content -->
						</article><!-- #post-## -->
					</div>
					@endforeach
				</div>
			</main>
		</div>
	</div>
</div>
@endsection