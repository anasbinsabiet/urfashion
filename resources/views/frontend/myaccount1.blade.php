@extends('frontend.layouts.master')
@section('title','Checkout')
@section('content')
<div class="myaccount">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="{{url('/')}}" lang="en">Home</a></li>
			<li><a href="javascript:void(0);" lang="en">My Account</a></li>
		</ul>
	</div>
	<div class="container">
		<div class="myaccountBox" id="summaryBox">
			<p class="title" lang="en">My Account</p>
			<p class="subtitle" lang="en">Manage all your account information and preferences from this location</p>
			<p class="subtitle" lang="en">Please note that changes made to your account will not affect orders you have already placed</p>
			<div class="summaryInfoBox">
				<a href="{{ url('orderstatus') }}">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td lang="en"><img src="{{url('/staticfile/images/YourOrders.jpg')}}" alt="Your Orders" class="img-responsive"></td>
								<td>
									<p class="title" lang="en">Your Orders</p>
									<p class="stitle" lang="en">Track orders/Reorder</p>
								</td>
							</tr>
						</tbody>
					</table>
				</a>
			</div>
			<div class="summaryInfoBox">
				<a href="{{ url('wishlist') }}">
					<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
						<td lang="en"><img src="{{url('/staticfile/images/Favorites.jpg')}}" alt="Favorites" class="img-responsive"></td>
						<td>
							<p class="title" lang="en">Favorites</p>
							<p class="stitle" lang="en">Buy from your Favorites</p>
						</td>
					</tr></tbody></table>
				</a>
			</div>
			<div class="summaryInfoBox">
				<a href="{{url('/logininfo')}}">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td lang="en"><img src="{{url('/staticfile/images/LoginPasswords.jpg')}}" alt="Login Passwords" class="img-responsive"></td>
								<td>
									<p class="title" lang="en">Login &amp; Passwords</p>
									<p class="stitle" lang="en">Edit Login Information</p>
								</td>
							</tr>
						</tbody>
					</table>
				</a>
			</div>
		</div>
		<div class="myaccountBox" id="recentlyOrders">
			<p class="title" lang="en">Recently Ordered Items</p>
			@if(count($orders) > 0)
			@php
			$order_details = App\Models\OrderDetail::where('order_id', $orders[0]->id)->get();
			@endphp
			@foreach($order_details as $od)
			@php
			$products = App\Models\Product::findOrfail($od->product_id);
			$product_image = App\ColorImage::where('product_id', $od->product_id)->orderBy('color_id')->take(1)->first();
			$packaging_options = App\PackagingOption::where('id', $od->packaging_option)->take(1)->first();
			@endphp
			<div class="recentlyOrder">
				<div class="col-sm-3">
					<a href="{{ url('product') }}/{{ $products->product_slug }}" lang="en"><img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="port &amp; company® - core blend tee (color)"></a>
				</div>
				<div class="col-sm-9">
					<a href="{{ url('product') }}/{{ $products->product_slug }}">
						<p id="productcodeBox"><span class="productcodebtn" lang="en">ITEM CODE: {{$products->product_code}}</span></p>
					</a>
					<a href="{{ url('product') }}/{{ $products->product_slug }}">
						<p id="producttitleBox"><span class="productname" lang="en">{{$products->product_name}}</span></p>
					</a>
					<table width="100%">
						<tbody>
							<tr>
								<td align="left" lang="en">
									Quantity: {{$od->total_items}}<br>

									@if($od->item_color)
									@php
									$colors = App\Color::findOrFail($od->item_color);
									@endphp
									Item Color: {{$colors->color_name}}<br>
									@endif
									Packaging Option: {{$packaging_options->packaging_option}}<br>
								</td>
								<td align="left" lang="en">
									Order#: {{$od->order_id}}<br>
									Status:
									Pending
									<br>
									Order Date: {{ $orders ? \Carbon\Carbon::parse($orders[0]->created_at)->format('d-m-Y') : ''}}<br>
									Total: {{$od->grand_total}}
								</td>
								<!-- <td align="center"><a href="#" class="reorderbtn" lang="en">REORDER</a></td> -->
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			@endforeach
			@else
			<center>
				<h4>Your order list is empty.</h4><br />
				<a href="{{url('/product')}}" class="contShoppingBtn" lang="en" style="    background: red;color: #fff;padding: 5px 10px;">Continue Shopping</a>
			</center>
			@endif

		</div>

	</div>
</div>
@endsection