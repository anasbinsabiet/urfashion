@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<section class="pt-5 mb-4">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 mx-auto">
				<div class="row aiz-steps arrow-divider">
					<div class="col active">
						<div class="text-center text-primary">
							<i class="la-3x mb-2 las la-shopping-cart"></i>
							<h3 class="fs-14 fw-600 d-none d-lg-block">1. My Cart</h3>
						</div>
					</div>
					<div class="col">
						<div class="text-center">
							<i class="la-3x mb-2 opacity-50 las la-map"></i>
							<h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">2. Shipping info</h3>
						</div>
					</div>
					<div class="col">
						<div class="text-center">
							<i class="la-3x mb-2 opacity-50 las la-truck"></i>
							<h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">3. Delivery info</h3>
						</div>
					</div>
					<div class="col">
						<div class="text-center">
							<i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
							<h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">4. Payment</h3>
						</div>
					</div>
					<div class="col">
						<div class="text-center">
							<i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
							<h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">5. Confirmation</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mb-4" id="cart-summary">
	<div class="container">

		<div class="row">
			<div class="col-xxl-8 col-xl-10 mx-auto">
				<div class="shadow-sm bg-white p-3 p-lg-4 rounded text-left">
					@if(session('cart'))
					<div id="has_cart_page" style="display: none;">
						<div class="mb-4">
							<div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 pb-3">
								<div class="col-md-5 fw-600">Product</div>
								<div class="col fw-600">Circle Price</div>
								<div class="col fw-600">Selling Price</div>
								<!--<div class="col fw-600">tax</div>-->
								<div class="col fw-600">Quantity</div>

								<div class="col-auto fw-600">Remove</div>
							</div>
							<ul class="list-group list-group-flush" id="cart_page_list">
								@php
								$gtotal = 0;
								$qtotal = 0;
								@endphp
								@if(session('cart'))
								@foreach(session('cart') as $id => $details)
								@php
								$product = App\Models\Product::findOrFail($id);
								$product_image = App\ColorImage::where('product_id', $id)->orderBy('color_id')->take(1)->first();
								@endphp
								<li class="list-group-item px-0 px-lg-3 cartpage" id="{{$product->id}}">
									<div class="row gutters-5">
										<div class="col-lg-5 d-flex">
											<span class="mr-2 ml-0">
												<img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-fit size-60px rounded" alt="{{ $product->product_name }}">
											</span>
											<span class="fs-14 opacity-100">{{ $product->product_name }}</span>
										</div>

										<div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
											<span class="opacity-100 fs-12 d-block d-lg-none">Circle Price</span>
											<span class="fw-600 fs-16">{{ $product->discount_price ? $product->discount_price : $product->selling_price }}৳</span>
										</div>

										<div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
											<span class="opacity-100 fs-12 d-block d-lg-none">Selling Price</span>
											<span class="fw-600 fs-16">{{$details['selling_price']}}৳</span>
										</div>
										<!-- <div class="col-lg col-4 order-2 order-lg-0 my-3 my-lg-0">-->
										<!--    <span class="opacity-60 fs-12 d-block d-lg-none">tax</span>-->
										<!--    <span class="fw-600 fs-16">৳0</span>-->
										<!--</div>-->

										<div class="col-lg col-6 order-4 order-lg-0">
											<div class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
												<div class="input-group quantity">
													<div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
														<span class="input-group-text">-</span>
													</div>
													<input type="hidden" class="product_id" value="{{$product->id}}" >
													<input type="number" onchange="updateCart({{ $product->id }})" class="qty-input form-control" max="{{$product->product_quantity}}" value="{{$details['qty']}}">
													<div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
														<span class="input-group-text">+</span>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
										    <span class="opacity-60 fs-12 d-block d-lg-none">TOTAL</span>
										    <span class="fw-600 fs-16 text-primary">৳850</span>
										</div> -->
										<div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
											<a href="javascript:void(0)" onclick="removeFromCartPage({{ $product->id }})" class="btn btn-icon btn-sm btn-soft-primary btn-circle">
												<i class="las la-trash"></i>
											</a>
										</div>
									</div>
								</li>
								@php
								@endphp
								@endforeach
								@endif
							</ul>
						</div>
						<div class="px-3 py-2 mb-4 border-top d-flex justify-content-between">
							<span class="opacity-100 fs-15">Total Circle Price</span>
							<span class="fw-600 fs-17">৳5,350</span>
						</div>
						<div class="px-3 py-2 mb-4 border-top d-flex justify-content-between">
							<span class="opacity-100 fs-15">Total Selling Price</span>
							<span class="fw-600 fs-17">৳10,900</span>
						</div>
					</div>
					@endif
					<div id="empty_cart_page" style="display: none;">
						<center>
							<h4>Your Cart is Empty!</h4>
						</center>
					</div>
					<div class="row align-items-center">
						<div class="col-md-6 text-center text-md-left order-1 order-md-0">
							<a href="{{url('/')}}" class="btn btn-link">
								<i class="las la-arrow-left"></i>
								Return to shop
							</a>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<a href="{{url('checkout')}}" class="btn btn-primary fw-600">
								Continue to Shipping
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function removeFromCartPage(key) {
			// alert(key);
			if (confirm("Are you sure want to remove?")) {
				$.ajax({
					url: '{{ route('remove.from.cart') }}',
					method: "DELETE",
					data: {
						_token: '{{ csrf_token() }}',
						id: key
					},
					success: function(response) {
						// cartData();
						// cartTotal();
						cartCount();
						if ($.isEmptyObject(response.error)) {
							location.reload();
							toastr.success(response.success, 'Success', {
								timeOut: 3000
							});
						} else {
							toastr.error(response.error, {
								timeOut: 3000
							});
						}
					}
				});
			}
		};
		$(document).ready(function () {
			
			$('.increment-btn').click(function (e) {
				e.preventDefault();
				var incre_value = $(this).parents('.quantity').find('.qty-input').val();
				var smax = $(this).parents('.quantity').find('.qty-input').attr("max");
				var value = parseInt(incre_value, 10);
				value = isNaN(value) ? 0 : value;
				if(value<smax){
					value++;
					$(this).parents('.quantity').find('.qty-input').val(value);
				}
			});
			$('.decrement-btn').click(function (e) {
				e.preventDefault();
				var decre_value = $(this).parents('.quantity').find('.qty-input').val();
				var value = parseInt(decre_value, 10);
				value = isNaN(value) ? 0 : value;
				if(value>1){
					value--;
					$(this).parents('.quantity').find('.qty-input').val(value);
				}
			});

			$('.changeQuantity').click(function (e) {
				e.preventDefault();
				var quantity = $(this).closest(".cartpage").find('.qty-input').val();
				var product_id = $(this).closest(".cartpage").find('.product_id').val();
				$.ajax({
					url: '{{ route('update.cart') }}',
					method: "patch",
					data: {
						_token: '{{ csrf_token() }}',
						id: product_id,
						quantity: quantity
					},
					success: function(response) {
						cartData();
						cartCount();
						if ($.isEmptyObject(response.error)) {
							toastr.success(response.success, 'Success', {
								timeOut: 3000
							});
						} else {
							toastr.error(response.error, {
								timeOut: 3000
							});
						}
					}
				});
			});
		});
	</script>
</section>
@endsection