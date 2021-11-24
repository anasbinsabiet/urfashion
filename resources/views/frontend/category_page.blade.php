@extends('frontend.layouts.master')
@section('title','{{$category_name}}')
@section('content')
@php
$data = App\Models\Setting::find(4);
@endphp
<div id="category" class="container">
		<ul class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="javascript:void(0);">{{$category_name}}</a></li>
		</ul>
		<div class="col-sm-6 onsaleCattitle" id="cattitleLeft">
			<div class="cattitle">
				<h1>Promotional {{$category_name}}</h1>
				<span>Extra Savings On Best Selling Items!</span>
			</div>
		</div>
		<div class="col-sm-6 onsaleCattitle" id="cattitleRight">
			<div class="col-lg-6 col-sm-12" id="cattitleTop">
				
				<img src="{{url('/')}}/staticfile/images/saveupto30.png" alt="save up to 30" class="img-responsive"/>
				
			</div>
			<div class="col-lg-6 col-sm-12" id="cattitleBot">
				<div class="cattitleright">
					<span>
						Lowest Prices Guaranteed&nbsp;-&nbsp;100% Satisfaction Guarantee<br>
						FREE Artwork &amp; Email Proof of Your Imprint & Savings
					</span>
				</div>	
		</div>
	</div>
	
	@if(count($featured_products) > 0)
	<div id="featuredbox" class="container">
		<div class="titlebg col-sm-3">
			
			<img class="img-responsive" src="{{url('/')}}/staticfile/images/titlebg.png" alt="featured products"/>
			
		</div>
		<div class="productwrap col-sm-9">
			
			@foreach($featured_products as $fp)
			@php
			$product_image = App\ColorImage::where('product_id', $fp->id)->orderBy('color_id')->take(1)->first();
			@endphp
			<div class="box col-sm-4">
				<table width="100%">
					<tr>
						<td valign="middle"><div class="thumbnails">
							<img class="icon img-responsive" src="{{url('/')}}/staticfile/images/7.png" alt="Product Condition Icon">
							<a href="{{ url('product') }}/{{ $fp->product_slug }}">
								<img src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="14239R - Classic Cinch Up Backpack">
							</a>
						</div></td>
						<td valign="middle" align="left">
							<div class="catprodetail">
								<div class="caption">
									<a href="{{ url('product') }}/{{ $fp->product_slug }}">
										<p>{{$fp->product_code}}</p>
										<h2>{{$fp->product_name}}</h2>
										<span>as low as {{$fp->discount_price ? $fp->discount_price : $fp->selling_price}}৳</span>
									</a>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			@endforeach
			
		</div>
	</div>
	@endif
	
	<div id="category-product" class="container">
		@if(count($categories) > 0)
		@foreach($categories as $category)
		<div class="col-md-3 col-sm-4"> 
			<div class="category-box">
				<a href="{{ url('category',$category->slug) }}">
					<img src="{{asset($category->default_image)}}" class="img-responsive" alt="promotional on sale apparel">
					<h2>On sale {{$category->category_name}}</h2>
				</a>
			</div>
		</div>
		@endforeach
		@else
		<center style="padding: 100px;"><h4>No Category Available Under {{$category_name}}</h4></center>
		@endif
	</div>
	
</div>


<div class="col-sm-12" id="catbottom">
	
	<h2>ON-SALE PROMOTIONAL ITEMS FOR A MEMORABLE MARKETING CAMPAIGN</h2>
	<p>On-sale promotional items rank among the most sought after products in the gifting industry. At Promo Direct, the products we have on sale are among the best in our inventory. We offer these products on sale because we want our buyers to make full use of our inventory while enjoying low prices.
	Candy, electronics, apparel and much more – our wide-ranging variety of discount promotional products aim to surprise buyers! Choose any of the products featured in this section and get in touch with us if you have any questions.</p>

</div>

<script type="text/javascript">
	$(function() {
		var clientWidth = document.documentElement.clientWidth;
		if(clientWidth >= 1200){
			$("#cattitleLeft").width($("#cattitleLeft .cattitle").width());
			$("#cattitleRight").width($("#category").width()-$("#cattitleLeft").width());
			$("#cattitleTop").width($("#cattitleRight").width()-$("#cattitleBot").width());
		} 
		$("#cattitleRight").show();
	});
</script>
@endsection