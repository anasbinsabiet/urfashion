@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div class="artworkPage" id="orderConfirm">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li><a href="/" lang="en">Home</a></li>
					<li><a href="/transaction/order/orderconfirm.jsp?order_id=224901" lang="en">Shopping Cart</a></li>
					<li><a href="javascript:void(0);" lang="en">Upload Artwork</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-12 shoppingCartArtBlock">
			<div class="row">
				<div class="col-sm-7 scArtleftBlock">
					@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
					@endif
					<form method="post" action="{{ route('imprintoption.store') }}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" value="@if(!empty(Auth::user()->id)){{Auth::user()->id}}@endif" name="user_id" />
						<input type="hidden" value="{{$order_id}}" name="order_id" />

						<div class="formTitle" lang="en">
							1. Select Imprint / Artwork Option
						</div>
						<div class="formBox opn1" lang="en">
							<div class="radioBox" lang="en">
								<input type="radio" name="imprint_artwork_option" value="1" id="radio1">
								<span lang="en">Option 1</span> - Text Imprint
							</div>
							<p lang="en">
								Enter your text in the fields exactly as you want it to
								read, including all upper and lower cases, punctuation, etc.
							</p>
							<input type="text" name="imprintline1" placeholder="Enter imprint line 1" aria-label="Enter imprint line 1">
							<input type="text" name="imprintline2" placeholder="Enter imprint line 2" aria-label="Enter imprint line 1">
							<input type="text" name="imprintline3" placeholder="Enter imprint line 3" aria-label="Enter imprint line 1">
							<input type="text" name="imprintline4" placeholder="Enter imprint line 4" aria-label="Enter imprint line 1">
						</div>
						<div class="formBox opn2">
							<div class="radioBox" lang="en">
								<input type="radio" name="imprint_artwork_option" value="2" id="radio2" checked="checked">
								<span lang="en">Option 2</span> - Upload Artwork
							</div>
							<div class="uploadLeftBlock">
								<a class="" href="javascript:void(0);" lang="en">
									<input id="defaultImage" type="file" name="default_image" class="btn_addPic">
								</a>
								<span id="fname" lang="en">No file chosen</span>
								<p class="fileType" lang="en">Files we accept: jpg, jpeg, png, gif, svg</p>
							</div>
							<!-- <div class="uploadRightBlock">
								<div class="uploadBox" id="uploadBox">

									<p style="margin-top: 27px;" lang="en">Image Display Here</p>

								</div>
							</div> -->
						</div>
						<div class="formBox opn3">
							<div class="radioBox" lang="en">
								<input type="radio" name="imprint_artwork_option" value="3" id="radio3">
								<span lang="en">Option 3</span> - I will email my artwork to: <a href="mailto:artwork@iconshopbd.com" target="_blank" lang="en">artwork@iconshopbd.com</a>
							</div>
							<p lang="en">When sending artwork, please reference your sales order number which is provided below.</p>
							<input type="text" class="promo" name="order_id" id="{{$order_id}}" value="{{$order_id}}" aria-label="{{$order_id}}" disabled>
							<input type="hidden" name="product_id" value="{{$product_id}}">
						</div>
						<div class="formBox opn4">
							<div class="radioBox" lang="en">
								<input type="radio" name="imprint_artwork_option" value="4" id="radio4">
								<span lang="en">Option 4</span> - Use my logo/artwork on file
							</div>
						</div>
						<div class="formTitle formTitle2" lang="en">
							2. Your Imprint Comments
						</div>
						<div class="imprintsCommentsBlock">
							<p lang="en">If you have a special request regarding your imprint, please let us know and we will do our best to accommodate.</p>
							<textarea name="imprint_comment" id="textarea" aria-label="special request"></textarea>
							<input type="submit" id="submita" class="sendArtBtn" lang="en" value="SEND ART/COMMENTS" />
						</div>
					</form>
				</div>
				<div class="col-sm-5 scArtleftBlock">
					<span class="scArtRightTitle" lang="en">
						@php
						$product = App\Models\Product::where('id', $product_id)->take(1)->first();
						@endphp
						{{$product->product_name}} / <span lang="en">{{$product->product_code}}</span>
					</span>
					<div class="scArtRightImgBlock" lang="en">
						@php
						$product_image = App\ColorImage::where('product_id', $product_id)->orderBy('color_id')->take(1)->first();
						@endphp
						<img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="Port &amp; Company® - Core Blend Tee (Color)">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection