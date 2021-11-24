@extends('frontend.layouts.master')
@section('title','Wishlist')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.sidenav')
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <b class="h4">Wishlist</b>
                        </div>
                    </div>
                </div>
                <div class="row gutters-5 cart-full">
                @if(!empty(Auth::user()->id))
                <input type="hidden" name="user_id" id="user_id" value="@if(!empty(Auth::user()->id)){{ Auth::user()->id }}@endif" />
                @foreach($wishlist as $product_id)
                @php
                $product = App\Models\Product::where('id', $product_id)->first();
                $product_image = App\ColorImage::where('product_id', $product_id)->orderBy('color_id')->take(1)->first();
                @endphp
                    <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_6276">
                        <div class="card mb-2 shadow-sm">
                            <div class="card-body">
                                <a href="{{url('product', $product->product_slug)}}" class="d-block mb-3">
                                    <img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-fit h-140px h-md-200px">
                                </a>

                                <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                    <a href="{{url('product', $product->product_slug)}}" class="text-reset">{{$product->product_name}}</a>
                                </h5>
                                <div class="rating rating-sm mb-1">
                                    <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                                </div>
                                <div class=" fs-14">
                                    <del class="opacity-60 mr-1">৳{{$product->selling_price}}</del>
                                    <span class="fw-600 text-primary">৳{{$product->discount_price}}</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="link link--style-3 delwatchbtn" id="{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(6276)">
                                    <i class="la la-trash la-2x"></i>
                                </a>
                                <a href="{{url('product', $product->product_slug)}}" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(13623)">
                                    <i class="la la-shopping-cart mr-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>              
                @endforeach
                @endif
                </div>
                <div class="row gutters-5 cart-empty" style="display: none;">
                    <div class="col">
                        <div class="text-center bg-white p-4 rounded shadow">
                            <img class="mw-100 h-200px" src="https://circle.com.bd/public/assets/img/nothing.svg" alt="Image">
                            <h5 class="mb-0 h5 mt-3">There isn't anything added yet</h5>
                        </div>
                    </div>
                </div>
                <div class="aiz-pagination">

                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$(".delwatchbtn").click(function(e) {
			var product_id = this.id;
			var user_id = $('#user_id').val();
			if (confirm('Are you sure to remove from wishlist?')) {
				$.ajax({
					url: "{{ route('wishlist.delete') }}",
					type: "POST",
					data: {
						"_token": "{{ csrf_token() }}",
						user_id: user_id,
						product_id: product_id,
					},
					success: function(response) {
						if (response == 'success') {
							location.reload();
						}
					},
				});
			}
		});
	});
</script>
@endsection