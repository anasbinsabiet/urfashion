@extends('frontend.layouts.master')
@section('title','Wishlist')
@section('content')
<div id="indexc">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li><a href="/" lang="en">Home</a></li>
					<li><a href="/customer/myaccount.jsp" lang="en">My Account</a></li>
					<li><a href="javascript:void(0);" lang="en">Favorites</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div id="watchList">
					<div class="watchTopBox">
						<h1 lang="en">Wishlist</h1>
					</div>
					@if(!empty(Auth::user()->id))
					@foreach($wishlist as $product_id)
					@php
					$product = App\Models\Product::where('id', $product_id)->first();
					$product_image = App\ColorImage::where('product_id', $product_id)->orderBy('color_id')->take(1)->first();
					@endphp
					<div class="col-md-3 col-sm-4 watchBox">
						<div class="watchItemBox">
							<a href="{{url('product', $product->product_slug)}}" class="productImgA" lang="en">
								<img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="port authority®&nbsp;silk touch™ performance polo">
							</a>
							<p class="watchname" lang="en">{{$product->product_name}} / Item# 19642</p>
							<!-- <p lang="en">Added 09-26-2021</p> -->
							<a href="{{url('product', $product->product_slug)}}" class="watchbtn addwatchbtn" lang="en">
								Buy Now
							</a>
							<a href="javascript:;" class="watchbtn delwatchbtn" lang="en">Delete</a>
						</div>
					</div>
					@endforeach
					@else
					<br />
					<center>
						<h4 style="magin:20px;">Login to show the content!</h4>
					</center>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".delwatchbtn").click(function(e) {
			alert('Login to continue!');
			// var product_id = $('#product_id').val();
			// var user_id = $('#user_id').val();
			// if (user_id) {
			// 	$.ajax({
			// 		url: "{{ route('wishlist.store') }}",
			// 		type: "POST",
			// 		data: {
			// 			"_token": "{{ csrf_token() }}",
			// 			user_id: user_id,
			// 			product_id: product_id,
			// 		},
			// 		success: function(response) {
			// 			if (response == 'success') {
			// 				alert("Wishlist Added successfully!");
			// 			}
			// 		},
			// 	});
			// } else {
			// 	alert('Login to continue!')
			// }
		});
	});
</script>
@endsection