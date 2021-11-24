@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
<div id="indexc">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="homeslider">
					<ul class="slider">
						<li>
							<a href="{{url('product')}}" id="slick-slide00">
							<img @if($data->slider1 != null) src="{{asset($data->slider1)}}" @else src="{{ asset('staticfile/images/slide10ca0.png?v=20210813')}}" @endif class="img-responsive" alt="20% Off"/>
							</a>
						</li>
					</ul>
				</div> 
			</div> 
		</div>
	</div>

	<section class="product-section">
		<div class="container">
			<div class="section-title text-center">
				<h1 class="title">Best Selling Promotional Products</h1>

				<div id="productcatBox">

					<div class="productcat">
						<a href="{{url('promotional-on-sale')}}">
							<img src="staticfile/images/pc-onsale3ed0.png?v=20200908" class="img-responsive" alt="promotional On Sale">
						</a>    
						<div class="catDetailBox">
							<p class="title">On Sale</p>
							<p class="desc">We have slashed the prices on hundreds of promotional items in every category</p>
							<a href="{{url('promotional-on-sale')}}">
								Shop On Sale
							</a>
						</div>
					</div>
					@foreach($childless_categories as $cc)
					<div class="productcat">
						<a href="{{ url('page') }}/{{ $cc->slug }}">
							<img src="@if($cc->default_image){{asset($cc->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="promotional On Sale">
						</a>    
						<div class="catDetailBox">
							<p class="title">{{$cc->category_name}}</p>
							<p class="desc">We have slashed the prices on hundreds of promotional items in every category</p>
							<a href="{{ url('page') }}/{{ $cc->slug }}">
								Shop {{$cc->category_name}}
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>	
		</div>
	</section>

	<hr />

	<section class="Today_deals">
		<div class="container">
			<div class="section-deals text-center">
				<h2 class="title">Today's Deals</h2>
				<p class="deals_redBox"><span>00h</span>:<span>00m</span><span>00s</span></p>
			</div>



			<div class="dealItemsBox">
				@foreach($hot_deals as $hd)
				@php
				$product_image = App\ColorImage::where('product_id', $hd->id)->orderBy('color_id')->take(1)->first();
				@endphp
				<div class="dealItemBox">

					<a href="{{ url('product') }}/{{ $hd->product_slug }}">

						<img src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="promotional gildan® - heavy cotton™ 100% cotton t-shirt (color)">

						<p class="diname">{{$hd->product_name}}</p>
					</a>
					<p class="diprice">{{$hd->discount_price ? $hd->discount_price : $hd->selling_price}}৳</p>
					<a class="dibuy" href="{{ url('product') }}/{{ $hd->product_slug }}">Buy Now</a>
				</div>
				@endforeach
			</div>


		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				setInterval(function () {
					$(".section-deals .deals_redBox").html(countdown())	
				}, 1000)
			});
		</script>
	</section>
	<hr />
	
	<section class="orgBrandBlock">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<a href="#">
						<img @if($data->home_banner1 != null) src="{{asset($data->home_banner1)}}" @else src="{{ asset('staticfile/images/homeexpress.png')}}" @endif alt="iconshop banner" class="img-responsive obb-bannerimg"/>
					</a>
				</div>
				<div class="col-sm-6">
					<a href="#">
						<img @if($data->home_banner2 != null) src="{{asset($data->home_banner2)}}" @else src="{{ asset('staticfile/images/homeexpress.png')}}" @endif alt="iconshop banner" class="img-responsive obb-bannerimg"/>
					</a>
				</div>
			</div>
		</div>
	</section>
	<hr />

	<!-- <section class="orgBrandBlock">
		<div class="container text-center">
			<h2 class="title">Over 1000 Satisfied Customers</h2>
			<div class="OrganizationLogoBlock col-xs-12">
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-01.jpg" alt="Pepsi" class="img-responsive" id="ol1">
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-02.jpg" alt="Hertz" class="img-responsive" id="ol2">
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-03.jpg" alt="Raytheon" class="img-responsive" id="ol3">
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-04.jpg" alt="United Way" class="img-responsive" id="ol4">
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-05.jpg" alt="Walmart" class="img-responsive" id="ol5">
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-06.jpg" alt="Walls Fargo" class="img-responsive" id="ol6"> 
				</div>
			</div>
			<div class="pics-hidden" style="display: none;">
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-07.jpg" alt="Microsoft" class="img-responsive" id="ol7"> 
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-08.jpg" alt="Goodwill" class="img-responsive" id="ol8"> 
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-09.jpg" alt="Forever 21" class="img-responsive" id="ol9"> 
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-10.jpg" alt="Owens Corning" class="img-responsive" id="ol10"> 
				</div>
				<div class="col-sm-2 brandBox">
					<img src="staticfile/images/brand-11.jpg" alt="Treasure Islead Las Vegas" class="img-responsive" id="ol11"> 
				</div>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				window.logoSwapPosition = 0;
				setInterval(function() {
					var swapImage = jQuery(".pics-hidden .brandBox")[0];
					var targetImage = jQuery(".OrganizationLogoBlock .brandBox")[logoSwapPosition];
					window.logoSwapPosition = logoSwapPosition < jQuery(".OrganizationLogoBlock .brandBox").length ? logoSwapPosition += 1 : 0;

					jQuery(swapImage).insertBefore(targetImage).hide().fadeIn("slow");
					jQuery(targetImage).appendTo(jQuery(".pics-hidden"));
				}, 1000)
			});
		</script>
	</section> -->


	<!--	<hr />
	 <section class="customer-review">
		<div class="container">
			<div class="section-review  text-center">
				<h2 class="title">Customer Reviews</h2>
				<div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="4d9132a700006400050f4273" data-style-height="130px" data-style-width="100%" data-theme="light" data-stars="5">
					<a href="https://www.trustpilot.com/review/www.promodirect.com" target="_blank" rel="noopener">Trustpilot</a>
				</div>
			</div>  
		</div>        
	</section> 
<hr />
-->
	
	<!-- <section class="helpBrandBlock">
		<div class="container text-center">
			<h2 class="title">Dedicated to Helping Others</h2>
			<p class="subtitle">We take pride in donating to those in need to help make our community a better place.</p>
			<div class="HelpLogoBlock">
				<div class="col-sm-2"><img src="staticfile/images/help-01.jpg" class="img-responsive" alt="safe house"></div>
				<div class="col-sm-2"><img src="staticfile/images/help-02.jpg" class="img-responsive" alt="st.jude children's research hospital"></div>
				<div class="col-sm-2"><img src="staticfile/images/help-03.jpg" class="img-responsive" alt="opportunity village"></div>
				<div class="col-sm-2"><img src="staticfile/images/help-04.jpg" class="img-responsive" alt="easterseals"></div>
				<div class="col-sm-2"><img src="staticfile/images/help-05.jpg" class="img-responsive" alt="heals"></div>
				<div class="col-sm-2"><img src="staticfile/images/help-06.jpg" class="img-responsive" alt="sunshine kids"></div>
			</div>
		</div>
	</section> -->
	<hr />

	<!-- <section class="orgBrandBlock">
		<div class="container">
			<div class="searchTermsBox text-center">
				<h2 class="title">Popular Search Terms</h2>



				<div class="searchTermBox">
					<a href="ccc1392-promotional-non-woven-totes.html">
						<span>Totes</span>
						<span>229 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="Promotional-clear-face-shield-protector-33309-ccp55467.html">
						<span>Clear Face Shield Protector</span>
						<span>18 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="ccc3467-promotional-sunglasses.html">
						<span>Sunglasses</span>
						<span>85 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="ccc3741-promotional-stylus-pens.html">
						<span>Stylus Pens</span>
						<span>197 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="ccc1423-promotional-business-gifts.html">
						<span>Business Gifts</span>
						<span>332 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="ccc1407-promotional-hand-sanitizers.html">
						<span>Hand Sanitizers</span>
						<span>88 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="index.html">
						<span>Stay Safe Kit</span>
						<span>32 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="ccc1365-promotional-t-shirts.html">
						<span>T-Shirts</span>
						<span>202 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="ccc3521-promotional-key-lights.html">
						<span>Key Lights</span>
						<span>64 products</span>
					</a>
				</div>

				<div class="searchTermBox">
					<a href="Promotional-the-bandana-headband-and-mask-27731-ccp48341.html">
						<span>Bandana</span>
						<span>125 products</span>
					</a>
				</div>


			</div>
		</div>
	</section>
	<hr /> -->

	<section class="poststeps">
		<div class="container">
			<div class="section-step text-center">
				<h2 class="title">Check Out Our Customer Photos</h2>
				<p class="stitle">Real-life examples of how our promotional products can help your branding needs shine</p>


				<div class="photosBox">
					@foreach($galleries as $row)
					<div class="photoBox">
						<img src="@if(!empty($row->default_image)) {{asset($row->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="{{$row->product_id}}" class="img-responsive"/>
					</div>
					@endforeach
				</div>
				<a href="{{url('gallery')}}" class="viewgallery">View Gallery</a>
			</div>
		</div>
	</section>
	<hr />

	<section class="promotips">
		<div class="container">
			<div class="row text-center">
				<h2>Business Tips, Promo Ideas & More</h2>
				@foreach($blogs as $blog)
				<div class="col-sm-6">
					<div class="promotip">
						<h3>{{$blog->title_en}}</h3>
						<p>
							<span class="tipdate">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</span>
							{!! \Illuminate\Support\Str::words($blog->description_en, 50)  !!}
						</p>
						<a href="blog/{{$blog->slug_en}}" target="_blank">Read More</a>
					</div>
				</div>
				@endforeach
			</div>
			<script type="text/javascript">
				$(function() {
					var tipPHeight1 = jQuery(".promotips .promotip:first p").height();
					var tipPHeight2 = jQuery(".promotips .promotip:last p").height();
					if(tipPHeight1 > tipPHeight2){
						jQuery(".promotips .promotip:last p").height(tipPHeight1);
					} else if(tipPHeight1 < tipPHeight2){
						jQuery(".promotips .promotip:first p").height(tipPHeight2);
					}

					var tipH3Height1 = jQuery(".promotips .promotip:first h3").height();
					var tipH3Height2 = jQuery(".promotips .promotip:last h3").height();
					if(tipH3Height1 > tipH3Height2){
						jQuery(".promotips .promotip:last h3").height(tipH3Height1);
					} else if(tipH3Height1 < tipH3Height2){
						jQuery(".promotips .promotip:first h3").height(tipH3Height2);
					}
				});
			</script>
		</div>        
	</section>
</div>
@endsection








