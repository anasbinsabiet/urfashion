@extends('frontend.layouts.master')
@section('title','Gallery')
@section('content')
<div id="indexc">
	<div class="container">
		<div class="lightbox_banner" lang="en">
			<img src="{{ url('/staticfile/images/PD_banner_lightbox.jpg')}}" class="img-responsive" alt="Gallerys">
			<a href="https://www.facebook.com/" target="_blank" alt="Facebook" id="ibbfa"></a>
			<a href="https://twitter.com/" target="_blank" alt="Twitter" id="ibbtt"></a>
			<a href="https://www.instagram.com/" target="_blank" alt="Instagram" id="ibbig"></a>
		</div>
		<div class="lightbox col-sm-12"><div class="row">
			<div class="section-lightbox text-center">
				<h1 lang="en">Check Out Our Customer Photos</h1>
				<h2 lang="en">Real-life examples of how our promotional products can help your branding needs shine</h2>

			@foreach($galleries as $row)
			<a href="/objects/catalog/gallery/1499414632940.jpg" data-toggle="lightbox" data-gallery="lightbox-gallery" data-title="<span class='dtitle'>Photo posted by Susan Smith<br>Domino's Pizza</span>" data-footer="<span class='dfooter'>Universal Air Vent Phone Holder<span>Item #23949</span><a href='http://www.promodirect.com/Promotional-universal-air-vent-phone-holder-23949-ccp37023.htm' target='_blank'><button type='button' class='btn btn-info'>VIEW PRODUCT</button></a></span>" class="col-sm-3 col-xs-12 img-lightbox" lang="en">
				<img src="@if(!empty($row->default_image)) {{asset($row->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="{{$row->product_id}}">
			</a>
			@endforeach

</div>
</div></div>
<div class="poststeps col-sm-12" id="galleryBox"><div class="row">
	<div class="section-step text-center">
		<p class="title" lang="en">Post a Picture of Your Promo Direct Product!</p>
		<h4 lang="en">Show off your brand and be featured in our gallery. Receive a gift and be entered to win prizes.</h4>
		<div id="gallerystep" lang="en">
			<img src="{{ url('/staticfile/images/gallerystep.png')}}" class="img-responsive" alt="gallery steps">
		</div>
	</div>
</div></div>
</div>		
</div>
@endsection