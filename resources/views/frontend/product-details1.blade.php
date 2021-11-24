@extends('frontend.layouts.master')
@section('title','Product Details')
@section('content')
@php
$cart = session()->get('cart');

if (isset($populate)) { 
	$populates = $populate;
}else{
	$populates = null;
};
@endphp
@empty($product->discount_price)
<style type="text/css">
#quantityprice table tr:nth-child(2) td {
    text-decoration: none;
}
</style>
@endempty

<div id="detailpage">
	<div class="col-sm-12">
		<ul class="breadcrumb">
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/product',$product->category->slug) }}">{{$product->category->category_name}}</a></li>
			<li><a href="javascript:void()">{{$product->product_name}}</a></li>
		</ul>
	</div>
	<div class="col-sm-12">
		<form id="cart_form">
			<input type="hidden" name="product_id" id="product_id" value="{{$product->id}}" />
			<input type="hidden" id="total_items" name="total_items" />
			<div class="container" style="padding: 0;">
				<div class="col-md-5 col-sm-12" style="padding-left: 0;">
					<div class="detailleft">
						<div id="itemImagesBox">
							<div id="bigImageBox">
								<img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" id="preview" style="width: 400px;" />
								@if($product->trend_product == 1)
								<img class="absolutelefttop" src="{{ asset('staticfile/images/7.png') }}" alt="Product Condition Icon">
								@endif
							</div>
							<div class="thumb-imagebox">
								<section class="regular slider" style="width:100%;">
									@foreach($product_images as $pimage)
									@php
									$color = App\Color::where('id', $pimage->color_id)->first();
									@endphp
									<div>
										<img src="{{asset($pimage->color_image)}}" id="{{$pimage->color_id}}" class="overout" />
										<center style="font-size: 12px;">{{$color->color_name}}</center>
									</div>
									@endforeach
								</section>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
								<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
								<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
								
							</div>
						</div>
						<div class="buttonBlockZoomPrint">
							<a href="javascript:showhideLayer('SampleRequestPopup', 'block');">Request Sample</a>
							<a href="https://www.promodirect.com/catalog/imprintarea.jsp?product_id=52957">Imprint Area</a> 
							<a href="https://www.promodirect.com/catalog/showpic.jsp?product_id=52957">Zoom Image</a> 
						</div>
						<div class="productDetailsBlock">
							<h1>{{$product->slogan}}</h1>
							<span class="pdTitle">Product Details:</span>
							{!!$product->product_description!!}
							<br/>
							@php
							$pt = App\ProductionTime::where('id', $product->production_time)->first();
							$im = App\ImprintMethod::where('id', $product->imprint_method)->first();
							@endphp
							<table border="0" cellspacing="0" cellpadding="0" id="imprintBox">
								@if(!empty($pt->production_time))
								<tr>
									<td align="left">Production Time:</td>
									<td>{{$pt->production_time}}</td>
								</tr>
								@endif
								@if(!empty($product->imprint_area))
								<tr>
									<td>Imprint Area:</td>
									<td>{{$product->imprint_area}}</td>
								</tr>
								@endif
								@if(!empty($product->imprint_area_2))
								<tr>
									<td>Imprint Area:</td>
									<td>{{$product->imprint_area_2}}</td>
								</tr>
								@endif
								@if(!empty($im->imprint_method))
								<tr>
									<td>Imprint Method:</td>
									<td>{{$im->imprint_method}}</td>
								</tr>
								@endif
								@if(!empty($product->setup_fee))
								<tr>
									<td>Set-Up Fee:</td>
									<td>{{$product->setup_fee}}</td>
								</tr>
								@endif
							</table>
						</div>
						<div class="detailsPageTabs">
							<div id="tabs">
								<ul id="tabul">
									<li><a href="#tab-1" class="active">Secure ORDERing</a></li>
									<li><a href="#tab-2">How to Order</a></li>
									<li><a href="#tab-3">Artwork FAQs</a></li>
									<li><a href="#tab-4">REVIEW/DETAILS</a></li>
								</ul>
								<div style="display: block;" id="tab-1" class="tabContent">
									<span class="soHead">Safe &amp; Secure Online Ordering</span>
									<div class="col-sm-4">
										<a href="{{ url('/')}}" target="_blank" rel="nofollow"> 
											<img src="{{ url('staticfile/images/soImg-01.jpg')}}" class="img-responsive" alt="VerySign Secured Logo">
										</a>
									</div>
									<div class="col-sm-4"> 
										<a href="{{ url('/')}}"> 
											<img src="{{ url('staticfile/images/soImg-02.jpg')}}" class="img-responsive" alt="Verfied Merchant Logo">
										</a> 
									</div>
									<div class="col-sm-4">
										<a href="{{ url('/')}}" target="_blank" rel="nofollow"> 
											<img src="{{ url('staticfile/images/soImg-03.jpg')}}" class="img-responsive" alt="Accredited Business Logo">
										</a>
									</div>
									<div class="promoBottomText"><img src="https://www.promodirect.com/staticfile/images/Trustpilot.png" alt="Trustpilot"></div>
								</div>
								<div style="display: none;" id="tab-2" class="tabContent">
									<div class="col-lg-4 col-md-12 col-sm-4" id="htoBox1">
										<span class="htoHead">Online</span> 
										<img src="https://www.promodirect.com/staticfile/images/htoTV.jpg" alt="online www.promodirect.com">
										<p><strong>www.iconshopbd.com</strong></p>
										<p>24 hours a day</p>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-4" id="htoBox2">
										<span class="htoHead">Phone</span> 
										<img src="https://www.promodirect.com/staticfile/images/htoPhone.jpg" alt="Phone 800-748-6150">
										<p><strong>800-748-6150</strong></p>
										<p>Monday-Friday: 6:30 am - 4:30 pm PST</p>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-4" id="htoBox3">
										<span class="htoHead">Email</span>
										<img src="https://www.promodirect.com/staticfile/images/htoMail.jpg" alt="Email order@promodirect.com">
										<p><strong>info@iconshopbd.com</strong></p>
										<p>A representative will be in contact with you within 2 hours during normal business hours.</p>
									</div>
								</div>
								<div style="display: none;" id="tab-3" class="tabContent">
									<div class="artWorkTab">
										<p>
											<strong>FREE Artwork:</strong> 
											After placing your order, simply e-mail your artwork and we will create print-ready art on your logo for FREE! 
											Most competitors charge up to $50 for this service.
										</p>
										<p>
											<strong>FREE Email Proof:</strong> 
											Before we place your order into production, you will receive a FREE e-mail proof of your imprint for final approval. 
											This step in our ordering process ensures that your order will be produced accurately.
										</p>
										<p>
											<strong>How Do I Send Artwork:</strong> 
											If ordering online, you may upload your artwork to your order or email your artwork to info@iconshopbd.com after placing your order.
											If ordering by phone, you may email your artwork to your representative or to info@iconshopbd.com.
										</p>
										<p>
											<strong>What Artwork Do I Send:</strong> 
											You can send us vector art or we will produce vector art from your letterhead, business card or website logo.
										</p>
									</div>
								</div>
								<div style="display: none;" id="tab-4" class="tabContent">
									<div class="review_div">
										<div class="product_detail_why">
											<p>Why buy this product?</p>
											<p>The custom promotional Unisex Jogger Sweatpants comes in a quality cotton stretch fabrication that allows greater mobility in any direction. It comes with an elastic waistband and white cord drawstring. It has side pockets for extra convenience. Shop in bulk!</p>
										</div>
										<a href="https://www.promodirect.com/catalog/writereview.jsp?product_id=52957">Rate this item</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12" style="padding-right: 0;" id="detailright">
					<div class="detailright">
						<div class="detailrightTop">
							<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6ffb0d04a076446a9af" data-theme="light" 
							data-businessunit-id="4d9132a700006400050f4273" data-style-height="20px" data-style-width="100%" align="left">
							<a href="https://www.trustpilot.com/review/www.promodirect.com" target="_blank">&nbsp;</a>
						</div>
					</div>
					<img src="{{ asset('staticfile/images/code.png')}}" alt="save up to 20" class="img-responsive" style="margin: 0 0 10px 0">
					<table width="100%" id="productcodeBox">
						<tr>
							<td align="left"><span class="productcodebtn">ITEM CODE: {{$product->product_code}}</span></td>
							<td align="right">
								<a href="javascript:$('#emailUsForm').show();" class="emailusbtn">Need help?</a>
								
								<a href="javascript:addToWishList('52957');" class="favoritebtn">ADD TO FAVORITES </a>
							</td>
						</tr>
					</table>
					<table width="100%" id="producttitleBox">
						<tr>
							<td align="left" valign="middle"><span class="productname">{{$product->product_name}}</span></td>
							@php
							$brand = App\Models\Brand::where('id', $product->brand_id)->first();
							@endphp
							@if(!empty($brand->brand_logo))
							<td align="right" valign="middle"><img src="{{asset($brand->brand_logo)}}" alt="Product Logo Image"></td>
							@endif
						</tr>
					</table>
					<table width="100%" id="buyLineBox">
						<tr>
							<td align="left" valign="middle"><span class="buyLine">{!!$product->short_description!!}</span></td>
							<td align="right" valign="middle" nowrap="nowrap"><img src="https://www.promodirect.com/staticfile/images/5star.jpg" alt="5star"/></td>
						</tr>
					</table>
					<p class="aslowtext">As low as: {!!$product->discount_price - $product->selling_price * 0.4 !!}৳</p>
					<div id="quantityprice" class="table-responsive">
						<table class="table" border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0">
							<tr class="headingRow">
								<td>QUANTITY</td>
								<td>{!!$product->minimum_quantity!!}</td>
								<td>{!!$product->minimum_quantity*2!!}</td>
								<td>{!!$product->minimum_quantity*3!!}</td>
								<td>{!!$product->minimum_quantity*4!!}</td>
								<td>{!!$product->minimum_quantity*5!!}</td>
								<td>{!!$product->minimum_quantity*6!!}</td>
								<td>{!!$product->minimum_quantity*7!!}</td>
								<td>{!!$product->minimum_quantity*8!!}</td>
							</tr>
							<tr class="contentRow">
								<td>PRICE EACH</td>
								<td>{!!$product->selling_price!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.01!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.015!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.02!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.025!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.03!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.035!!}৳</td>
								<td>{!!$product->selling_price - $product->selling_price * 0.04!!}৳</td>
							</tr>
							<tr class="contentRow">
								<td nowrap="nowrap">PRICE - {!!$product->discount!!}% OFF</td>
								<td>{!!$product->discount_price!!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.01 !!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.015 !!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.02 !!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.025 !!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.03 !!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.035 !!}৳</td>
								<td>{!!$product->discount_price - $product->selling_price * 0.04 !!}৳</td>
							</tr>
							<tr class="contentRow">
								<td>YOUR SAVINGS</td>
								<td>0৳</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*2;
									$off = $product->discount_price - $product->selling_price * 0.01;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.01) * ($product->minimum_quantity*2);
										$off_quan = ($product->discount_price - $product->selling_price * 0.01) * ($product->minimum_quantity*2);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*3;
									$off = $product->discount_price - $product->selling_price * 0.015;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.015) * ($product->minimum_quantity*3);
										$off_quan = ($product->discount_price - $product->selling_price * 0.015) * ($product->minimum_quantity*3);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*4;
									$off = $product->discount_price - $product->selling_price * 0.02;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.02) * ($product->minimum_quantity*4);
										$off_quan = ($product->discount_price - $product->selling_price * 0.02) * ($product->minimum_quantity*4);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*5;
									$off = $product->discount_price - $product->selling_price * 0.025;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.025) * ($product->minimum_quantity*5);
										$off_quan = ($product->discount_price - $product->selling_price * 0.025) * ($product->minimum_quantity*5);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*6;
									$off = $product->discount_price - $product->selling_price * 0.03;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.03) * ($product->minimum_quantity*6);
										$off_quan = ($product->discount_price - $product->selling_price * 0.03) * ($product->minimum_quantity*6);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
								</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*7;
									$off = $product->discount_price - $product->selling_price * 0.035;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.035) * ($product->minimum_quantity*7);
										$off_quan = ($product->discount_price - $product->selling_price * 0.035) * ($product->minimum_quantity*7);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
								<td>
									@empty($product->discount_price)
									@php
									$tquantity = $product->minimum_quantity*8;
									$off = $product->discount_price - $product->selling_price * 0.04;
									@endphp
										{!!$tquantity * abs($off)!!}৳
									@else
									@php
										$each_quan = ($product->selling_price - $product->selling_price * 0.04) * ($product->minimum_quantity*8);
										$off_quan = ($product->discount_price - $product->selling_price * 0.04) * ($product->minimum_quantity*8);
									@endphp
										{{ $each_quan - $off_quan }}৳
									@endempty
								</td>
							</tr>
						</table>
					</div>
					<span class="priceline">Price includes one color imprint, one location, full front or left chest</span>
					<div id="formwrap">
						@if($product->estimated_ship_date)
						<div class="attriTitle">Estimated Ship Date: <span>{{date("F d", strtotime($product->estimated_ship_date))}}</span></div>
						@endif
						<div class="startOrderTitle">Start Your Order</div>
						<div class="steps">
							<div id="attrOptionsBox">
								<div id="prodetailtips" lang="en">
									<span lang="en">Questions?</span>We are here to help<br>Call 1-800-748-6150
									<a href="javascript:$('#liveChat').show();" class="liveChatbtn" lang="en">Live Chat</a>
								</div>
								<div class="option appareloptionsize">
									<input type="hidden" id="apparelAttrId" value="38318">
									<input type="hidden" id="apparelOptionIds" value="264713_264712_264711_264714_264715_264716_264717">
									<input type="hidden" name="attrnameNum" value="Sizes" id="attrnameNum_38318">
									<input type="hidden" id="colordiv_maxnum38318" value="8">
									<p class="optionTitle" lang="en">How many would you like?</p>
									<div class="stepContent">
										<div class="selqtysBox">
											<div class="selqtyBox" lang="en">
												<span lang="en">Small</span> 
												<input id="small" name="small" type="text"
												@isset( $cart[$product->id]['small'] )
												value="{{ $cart[$product->id]['small'] && $populates ? $cart[$product->id]['small'] : $product->minimum_quantity }}" 
												@else
												value="{{ $product->minimum_quantity }}" 
												@endisset
												/>
											</div>
											<div class="selqtyBox" lang="en">
												<span lang="en">Medium</span> 
												<input id="medium" name="medium" type="text"
												@isset( $cart[$product->id]['medium'] )
												value="{{ $cart[$product->id]['medium'] && $populates ? $cart[$product->id]['medium'] : '0' }}" 
												@endisset
												/>
											</div>
											<div class="selqtyBox" lang="en">
												<span lang="en">Large</span> 
												<input id="large" name="large" type="text"
												@isset( $cart[$product->id]['large'] )
												value="{{ $cart[$product->id]['large'] && $populates ? $cart[$product->id]['large'] : '0' }}" 
												@endisset
												/>
											</div>
											<div class="selqtyBox" lang="en">
												<span lang="en">XL</span> 
												<input id="axal" name="axal" type="text"
												@isset( $cart[$product->id]['axal'] )
												value="{{ $cart[$product->id]['axal'] && $populates ? $cart[$product->id]['axal'] : '0' }}" 
												@endisset
												/>
											</div>
											<div class="selqtyBox" lang="en">
												<span lang="en">2XL</span> 
												<input id="twoxl" name="twoxl" type="text"
												@isset( $cart[$product->id]['twoxl'] )
												value="{{ $cart[$product->id]['twoxl'] && $populates ? $cart[$product->id]['twoxl'] : '0' }}" 
												@endisset
												/>
											</div>
											<div class="selqtyBox" lang="en">
												<span lang="en">3XL</span> 
												<input id="threexl" name="threexl" type="text"
												@isset( $cart[$product->id]['threexl'] )
												value="{{ $cart[$product->id]['threexl'] && $populates ? $cart[$product->id]['threexl'] : '0' }}" 
												@endisset
												/>
											</div>
											<div class="selqtyBox" lang="en">
												<span lang="en">4XL</span> 
												<input id="fourxl" name="fourxl" type="text"
												@isset( $cart[$product->id]['fourxl'] )
												value="{{ $cart[$product->id]['fourxl'] && $populates ? $cart[$product->id]['fourxl'] : '0' }}" 
												@endisset
												/>
											</div>
										</div>
										<div class="totalqtyBox" lang="en">
											<input type="hidden" name="quantity" id="quantitybox" value="24">
											Total Quantity: <span id="quantityspan" lang="en">0</span>
										</div>
									</div>
									<div style="display: none">
										<input type="hidden" value="24" id="miniSoQty"> 
										<span id="unitpricetd" lang="en">$164.16</span> 
										<input type="hidden" id="unitpricetdpure" value="6.84"> 
										<input type="hidden" id="totalsavings" value="41.04"> 
										<span class="priceline" id="optprice38318" lang="en">$0.00</span>
										<input type="hidden" name="optpriceline" id="optpriceline38318" value="0.00"> 
										<input type="hidden" name="optpricelineqty" id="optpricelineqty38318" value="0">
									</div>
								</div>
								<div class="option">
									<p class="optionTitle" lang="en">
										Item Color<small lang="en"> </small>
									</p>
									<select name="item_color" id="item_color">
										<option value="" lang="en">Please Select</option>
										@foreach($product_images as $pimages)
										@php
										$colors = App\Color::where('id', $pimages->color_id)->first();
										@endphp
										<option value="{{$pimages->color_id}}" id="{{$pimages->color_id}}">{{$colors->color_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="option">
									<p class="optionTitle" lang="en">
										Imprint Location<small lang="en"> - Maximum 3</small>
									</p>
									@php
									$colors = App\Color::all();
									@endphp
									<table width="100%">
										<tbody>
											<tr>
												<td valign="top" align="left" width="50%" nowrap="nowrap">
													<div class="imprintLocationItem">
														<p class="imprintTitle" lang="en">
															Left Chest&nbsp;&nbsp;
															<input type="checkbox" name="left_chest" id="left_chest"
															@isset($cart[$product->id]['left_chest'] )
															@isset($populates)
															checked="checked" 
															@endisset 
															@endisset 
															/>
														</p>
														<div id="left_chest_no_of_imprint_colors"/>
														<select id="left_chest_no_of_imprint_color" name="left_chest_no_of_imprint_color" class="snum display-none">
															<option value="0" lang="en">No. of Imprint Colors</option>
															<option value="1" lang="en">1</option>
															<option value="2" lang="en">2</option>
															<option value="3" lang="en">3</option>
															<option value="4" lang="en">4</option>
															<option value="5" lang="en">5</option>
															<option value="6" lang="en">6</option>
															<option value="7" lang="en">7</option>
															<option value="8" lang="en">8</option>
														</select>

														<div id="left_chest_imprint_color_1s" class="sd_264720" style="display: none;">
															<select id="left_chest_imprint_color_1" class="so_264720" name="left_chest_imprint_color_1">
																<option value="" lang="en">Imprint Colors 1</option>
																@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach
															</select>
														</div>
														<div id="left_chest_imprint_color_2s" class="sd_264720" style="display: none;">
															<select id="left_chest_imprint_color_2" name="left_chest_imprint_color_2" class="so_264720">
																<option value="" lang="en">Imprint Colors 2</option>
																@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach
															</select>
														</div>
														<div id="left_chest_imprint_color_3s" class="sd_264720" style="display: none;">
															<select id="left_chest_imprint_color_3" name="left_chest_imprint_color_3" class="so_264720">
																<option value="" lang="en">Imprint Colors 3</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="left_chest_imprint_color_4s" class="sd_264720" style="display: none;">
															<select id="left_chest_imprint_color_4" name="left_chest_imprint_color_4" class="so_264720">
																<option value="" lang="en">Imprint Colors 4</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="left_chest_imprint_color_5s" class="sd_265720" style="display: none;">
															<select id="left_chest_imprint_color_5" name="left_chest_imprint_color_5" class="so_265720">
																<option value="" lang="en">Imprint Colors 5</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="left_chest_imprint_color_6s" class="sd_266720" style="display: none;">
															<select id="left_chest_imprint_color_6" name="left_chest_imprint_color_6" class="so_266720">
																<option value="" lang="en">Imprint Colors 6</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="left_chest_imprint_color_7s" class="sd_277720" style="display: none;">
															<select id="left_chest_imprint_color_7" name="left_chest_imprint_color_7" class="so_277720">
																<option value="" lang="en">Imprint Colors 7</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="left_chest_imprint_color_8s" class="sd_288820" style="display: none;">
															<select id="left_chest_imprint_color_8" name="left_chest_imprint_color_8" class="so_288820">
																<option value="" lang="en">Imprint Colors 8</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                            
															</div>
														</div>
													</div>
												</td>
												<td valign="top" align="left" width="50%" nowrap="nowrap">
													<div class="imprintLocationItem">
														<p class="imprintTitle" lang="en">
															Full Front&nbsp;&nbsp;
															<input type="checkbox" name="full_front" id="full_front" 
															@isset($cart[$product->id]['full_front'])
															@isset($populates)
															checked="checked" 
															@endisset 
															@endisset
															/>
														</p>
														<div id="full_front_no_of_imprint_colors" 
														@empty($cart[$product->id]['full_front'])
														class="display-none"
														@endempty
														/>
														<select id="full_front_no_of_imprint_color" class="snum">
															<option value="0" lang="en">No. of Imprint Colors</option>
															<option value="1" lang="en">1</option>
															<option value="2" lang="en">2</option>
															<option value="3" lang="en">3</option>
															<option value="4" lang="en">4</option>
															<option value="5" lang="en">5</option>
															<option value="6" lang="en">6</option>
															<option value="7" lang="en">7</option>
															<option value="8" lang="en">8</option>
														</select>
														<input type="hidden" 
														@isset($cart[$product->id]['full_front_no_of_imprint_color'])
														value="{{$cart[$product->id]['full_front_no_of_imprint_color']}}"
														@endisset 
														name="full_front_no_of_imprint_color_text" id="full_front_no_of_imprint_color_text">

														<div id="full_front_imprint_color_1s" class="sd_264720" style="display: none;">
															<select id="full_front_imprint_color_1" class="so_264720" name="full_front_imprint_color_1">
																<option value="" lang="en">Imprint Colors 1</option>
																@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach
															</select>
														</div>
														<div id="full_front_imprint_color_2s" class="sd_264720" style="display: none;">
															<select id="full_front_imprint_color_2" name="full_front_imprint_color_2" class="so_264720">
																<option value="" lang="en">Imprint Colors 2</option>
																@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach
															</select>
														</div>
														<div id="full_front_imprint_color_3s" class="sd_264720" style="display: none;">
															<select id="full_front_imprint_color_3" name="full_front_imprint_color_3" class="so_264720">
																<option value="" lang="en">Imprint Colors 3</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="full_front_imprint_color_4s" class="sd_264720" style="display: none;">
															<select id="full_front_imprint_color_4" name="full_front_imprint_color_4" class="so_264720">
																<option value="" lang="en">Imprint Colors 4</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="full_front_imprint_color_5s" class="sd_265720" style="display: none;">
															<select id="full_front_imprint_color_5" name="full_front_imprint_color_5" class="so_265720">
																<option value="" lang="en">Imprint Colors 5</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="full_front_imprint_color_6s" class="sd_266720" style="display: none;">
															<select id="full_front_imprint_color_6" name="full_front_imprint_color_6" class="so_266720">
																<option value="" lang="en">Imprint Colors 6</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="full_front_imprint_color_7s" class="sd_277720" style="display: none;">
															<select id="full_front_imprint_color_7" name="full_front_imprint_color_7" class="so_277720">
																<option value="" lang="en">Imprint Colors 7</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                        
															</select>
														</div>
														<div id="full_front_imprint_color_8s" class="sd_288820" style="display: none;">
															<select id="full_front_imprint_color_8" name="full_front_imprint_color_8" class="so_288820">
																<option value="" lang="en">Imprint Colors 8</option>@foreach($colors as $color)
																<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
																@endforeach                                     
															</select>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td valign="top" align="left" width="50%" nowrap="nowrap">
												<div class="imprintLocationItem">
													<p class="imprintTitle" lang="en">
														Full Back&nbsp;&nbsp;
														<input type="checkbox" name="full_back" id="full_back"
														@isset($cart[$product->id]['full_back'] )
														@isset($populates)
														checked="checked" 
														@endisset 
														@endisset 
														/>
													</p>
													<div id="full_back_no_of_imprint_colors" 
													@empty($cart[$product->id]['full_back'])
													class="display-none";
													@endempty
													/>
													<select id="full_back_no_of_imprint_color" class="snum">
														<option value="0" lang="en">No. of Imprint Colors</option>
														<option value="1" lang="en">1</option>
														<option value="2" lang="en">2</option>
														<option value="3" lang="en">3</option>
														<option value="4" lang="en">4</option>
														<option value="5" lang="en">5</option>
														<option value="6" lang="en">6</option>
														<option value="7" lang="en">7</option>
														<option value="8" lang="en">8</option>
													</select>
													<input type="hidden" 
													@isset($cart[$product->id]['full_back_no_of_imprint_color'])
													value="$cart[$product->id]['full_back_no_of_imprint_color']";
													@endisset
													name="full_back_no_of_imprint_color_text" id="full_back_no_of_imprint_color_text">

													<div id="full_back_imprint_color_1s" class="sd_264720" style="display: none;">
														<select id="full_back_imprint_color_1" class="so_264720" name="full_back_imprint_color_1">
															<option value="" lang="en">Imprint Colors 1</option>
															@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach
														</select>
													</div>
													<div id="full_back_imprint_color_2s" class="sd_264720" style="display: none;">
														<select id="full_back_imprint_color_2" name="full_back_imprint_color_2" class="so_264720">
															<option value="" lang="en">Imprint Colors 2</option>
															@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach
														</select>
													</div>
													<div id="full_back_imprint_color_3s" class="sd_264720" style="display: none;">
														<select id="full_back_imprint_color_3" name="full_back_imprint_color_3" class="so_264720">
															<option value="" lang="en">Imprint Colors 3</option>@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach                                        
														</select>
													</div>
													<div id="full_back_imprint_color_4s" class="sd_264720" style="display: none;">
														<select id="full_back_imprint_color_4" name="full_back_imprint_color_4" class="so_264720">
															<option value="" lang="en">Imprint Colors 4</option>@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach                                        
														</select>
													</div>
													<div id="full_back_imprint_color_5s" class="sd_265720" style="display: none;">
														<select id="full_back_imprint_color_5" name="full_back_imprint_color_5" class="so_265720">
															<option value="" lang="en">Imprint Colors 5</option>@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach                                        
														</select>
													</div>
													<div id="full_back_imprint_color_6s" class="sd_266720" style="display: none;">
														<select id="full_back_imprint_color_6" name="full_back_imprint_color_6" class="so_266720">
															<option value="" lang="en">Imprint Colors 6</option>@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach                                        
														</select>
													</div>
													<div id="full_back_imprint_color_7s" class="sd_277720" style="display: none;">
														<select id="full_back_imprint_color_7" name="full_back_imprint_color_7" class="so_277720">
															<option value="" lang="en">Imprint Colors 7</option>@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach                                        
														</select>
													</div>
													<div id="full_back_imprint_color_8s" class="sd_288820" style="display: none;">
														<select id="full_back_imprint_color_8" name="full_back_imprint_color_8" class="so_288820">
															<option value="" lang="en">Imprint Colors 8</option>@foreach($colors as $color)
															<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
															@endforeach            
														</select>
													</div>
												</div>
											</div>
										</td>
										<td valign="top" align="left" width="50%" nowrap="nowrap">
											<div class="imprintLocationItem">
												<p class="imprintTitle" lang="en">
													Right Sleeve&nbsp;&nbsp;
													<input type="checkbox" name="right_sleeve" id="right_sleeve" 
													@isset($cart[$product->id]['right_sleeve'] )
													@isset($populates)
														checked="checked" 
													@endisset 
													@endisset 
													/>
												</p>
												<div id="right_sleeve_no_of_imprint_colors" 
												@empty($cart[$product->id]['right_sleeve'])
												class="display-none";
												@endempty
												/>
												<select id="right_sleeve_no_of_imprint_color" name="right_sleeve_no_of_imprint_color" class="snum">
													<option value="0" lang="en">No. of Imprint Colors</option>
													<option value="1" lang="en">1</option>
													<option value="2" lang="en">2</option>
													<option value="3" lang="en">3</option>
													<option value="4" lang="en">4</option>
													<option value="5" lang="en">5</option>
													<option value="6" lang="en">6</option>
													<option value="7" lang="en">7</option>
													<option value="8" lang="en">8</option>
												</select>
												<input type="hidden"
												@isset($cart[$product->id]['right_sleeve_no_of_imprint_color'] )
												value="right_sleeve_no_of_imprint_color" 
												@endisset
												name="right_sleeve_no_of_imprint_color_text" 
												id="right_sleeve_no_of_imprint_color_text">

												<div id="right_sleeve_imprint_color_1s" class="sd_264720" style="display: none;">
													<select id="right_sleeve_imprint_color_1" class="so_264720" name="right_sleeve_imprint_color_1">
														<option value="" lang="en">Imprint Colors 1</option>
														@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach
													</select>
												</div>
												<div id="right_sleeve_imprint_color_2s" class="sd_264720" style="display: none;">
													<select id="right_sleeve_imprint_color_2" name="right_sleeve_imprint_color_2" class="so_264720">
														<option value="" lang="en">Imprint Colors 2</option>
														@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach
													</select>
												</div>
												<div id="right_sleeve_imprint_color_3s" class="sd_264720" style="display: none;">
													<select id="right_sleeve_imprint_color_3" name="right_sleeve_imprint_color_3" class="so_264720">
														<option value="" lang="en">Imprint Colors 3</option>@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach                                        
													</select>
												</div>
												<div id="right_sleeve_imprint_color_4s" class="sd_264720" style="display: none;">
													<select id="right_sleeve_imprint_color_4" name="right_sleeve_imprint_color_4" class="so_264720">
														<option value="" lang="en">Imprint Colors 4</option>@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach                                        
													</select>
												</div>
												<div id="right_sleeve_imprint_color_5s" class="sd_265720" style="display: none;">
													<select id="right_sleeve_imprint_color_5" name="right_sleeve_imprint_color_5" class="so_265720">
														<option value="" lang="en">Imprint Colors 5</option>@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach                                        
													</select>
												</div>
												<div id="right_sleeve_imprint_color_6s" class="sd_266720" style="display: none;">
													<select id="right_sleeve_imprint_color_6" name="right_sleeve_imprint_color_6" class="so_266720">
														<option value="" lang="en">Imprint Colors 6</option>@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach                                        
													</select>
												</div>
												<div id="right_sleeve_imprint_color_7s" class="sd_277720" style="display: none;">
													<select id="right_sleeve_imprint_color_7" name="right_sleeve_imprint_color_7" class="so_277720">
														<option value="" lang="en">Imprint Colors 7</option>@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach                                        
													</select>
												</div>
												<div id="right_sleeve_imprint_color_8s" class="sd_288820" style="display: none;">
													<select id="right_sleeve_imprint_color_8" name="right_sleeve_imprint_color_8" class="so_288820">
														<option value="" lang="en">Imprint Colors 8</option>@foreach($colors as $color)
														<option value="{{$color->id}}" id="{{$color->id}}"lang="en">{{$color->color_name}}</option>
														@endforeach                                     
													</select>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="option">
						<p class="optionTitle" lang="en">Packaging Option<small lang="en"> - Optional</small></p>
						<select name="packaging_option" id="packaging_option">
							<option value="" lang="en">Please Select</option>
							@foreach($packaging_options as $po)
							<option value="{{$po->id}}">{{$po->packaging_option}}</option>
							@endforeach  
						</select>
					</div>
					<div class="option" id="pdemail1" lang="en">
						<p class="optionTitle" lang="en">Email Address *</p>
						<input type="text" class="email" aria-label="email" name="email_address" id="email_address" placeholder="Enter Email Address" 
						@isset($cart[$product->id]['email_address'])
						value="{{$cart[$product->id]['email_address']}}" 
						@endisset
						/>
					</div>
				</div>
				<input type="hidden" name="discount_price" id="discount_price" value="{{$product->discount_price}}" />
				<input type="hidden" name="selling_price" id="selling_price" value="{{$product->selling_price}}" />
				<input type="hidden" name="setup_fee" id="setup_fee" value="{{$product->setup_fee}}" />
				<input type="hidden" name="subtotal_input" id="subtotal_input" />
				<input type="hidden" name="grandtotal_input" id="grandtotal_input" />
				<div class="totaloption option">
					<p class="optionTitle">Product Total</p>
					<div class="col-lg-7 col-md-12 col-sm-7">
						<table border="0" cellspacing="0" cellpadding="0" id="totalTa" width="100%">
							<tr class="tr_3" id="ftr_3">
								<td nowrap="nowrap"><span id="quantityspan1">0</span> qty x <span id="uprice">{!!$product->discount_price ? $product->discount_price : $product->selling_price!!}৳</span></td>
								<td align="center" nowrap="nowrap" class="greenSaving">20% Savings Applied</td>
								<td nowrap="nowrap"><span id="subtotal">0</span>৳</td>
							</tr>
							<tr class="tr_3">
								<td>Setup:</td>
								<td></td>
								<td>
									<span id="setupfeediv">{!!$product->setup_fee ? $product->setup_fee : '0'!!}৳</span> 
								</td>
							</tr>
							<tr class="tr_3">
								<td>Artwork & Email Proof:</td>
								<td align="center" nowrap="nowrap" class="greenSaving">Additional Savings</td>
								<td><span>FREE</span></td>
							</tr>
							<tr class="tr_3" id="additonalTr" style="display: none;">
								<td>Additional Charges</td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</div>
					<div class="col-lg-7 col-md-12 col-sm-7">
						<table border="0" cellspacing="0" cellpadding="0" id="totalamt" width="100%">
							<tr>
								<td>TOTAL:</td>
								<td>
									<span id="grandtotal">0</span>
									<span id="saveTotal">(Your Savings: <span id="total_savings" style="display: contents;">৳</span>)</span>
								</td>
							</tr>
							<tr>
								<td colspan="2">
								Estimated shipping date depends on completion of order form & artwork approval today.</br>
								Estimated ship date August 31
							</td>
						</tr>
					</table>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-5">
					<table border="0" cellspacing="0" cellpadding="0" id="proceedBox">
						<tr>
							<td>
								<input type="submit" id="btncart" value="NEXT" />
							</td>
						</tr>
						<tr>
							<td>
								<p>You may submit your artwork during or after placing your order.</p>
								<a href="#" rel="nofollow">How do I send my artwork?</a> 
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</form>
<form id="chatform">
	<div id="liveChat" style="display: none;">
		<div class="row card-header" style="padding: 10px 30px;background: #e60f21;"><span style="color:white;">Live Chat Offline</span><span style="float:right;"><a href="javascript:$('#liveChat').hide();" id="close" style="color: #fff;">X</a></span>
		</div>
		<div class="card-body" style="padding: 15px;">
			<center style="padding-bottom: 5px;">Please leave a message. We will contact you during normal business hours.</center>
			<div>
				<span>Name</span> 
				<input type="text" aria-label="Name" id="name" name="name" style="height: 30px; width: 100%;">
			</div>
			<div style="margin-top: 15px;">
				<span>Email Address *</span> 
				<input type="text" aria-label="Email Address" id="email_address" name="email_address" style="height: 30px; width: 100%;">
			</div>
			<div style="margin-top: 15px;">
				<span>Phone Number *</span> 
				<input type="text" aria-label="Phone" id="phone" name="phone" style="height: 30px; width: 100%;">
			</div>
			<div style="margin-top: 15px;">
				<span>Question *</span> 
				<input type="text" aria-label="question" id="question" name="question" style="height: 30px; width: 100%;">
			</div>
			<input type="submit" value="Submit" style="margin: 15px 0px 0px 0px;padding: 5px 10px;" />
		</div>
	</div>
</form>
<div id="emailUsForm">
	<a href="javascript:$('#emailUsForm').hide();" id="close">
		<img src="https://www.promodirect.com/staticfile/images/close.png" alt="close"/>
	</a>
	<p class="help">How can we help?</p>
	<span>Please complete the form below for product related questions, including ordering information.</span>
	<form id="mail_us">
		<div style="margin-top: 15px;">
			<span style="font-size: 13px;">Required*</span> 
			<span>Your Email Address*</span> 
			<input type="text" aria-label='Email Address' id="email_address" name="email_address" style="height: 30px; width: 100%;" />
		</div>
		<div style="margin-top: 15px;">
			<span>Questions/Comments*</span>
			<textarea name="questions" id="questions" style="width: 100%; height: 100px; resize: none;"></textarea>
		</div>
		<input type="submit" class="aemailus btn" value="Email Us" />
		<a href="javascript:$('#emailUsForm').hide()">Cancel</a>
	</form>
	<hr>
	<p class="help">Helpful Links</p>
	<a href="https://www.promodirect.com/info/contactinfo.jsp" style="display: block; text-decoration: underline !important;">Contact Us</a> 
	<a href="https://www.promodirect.com/info/help.jsp" style="display: block; text-decoration: underline !important;">FAQs</a>
</div>
</div>
<div class="col-sm-12">
	<div id="botwrap-product">
		<div class="titlebg">You may also like</div>
		<div class="productwrap">
		{{$product->product_name}}
			<div class="box">
				<div class="thumbnails"><a href='https://www.promodirect.com/Personalized-sport-tek--v-neck-raglan-wind-shirt-16696-ccp15815.htm'>
						<img src="https://www.promodirect.com/cgi-bin/showproductimg.pl?url=/objects/catalog/product/multiimages/15815/Burgundy_Maroon/400_400.jpg&amp;size=205x205" class="img-responsive" alt="16696 - Sport-Tek® V-Neck Raglan Wind Shirt">
					</a>
				</div>
				<div class="catprodetail">
					<div class="caption">
						<p>16696</p>
						<a href='https://www.promodirect.com/Personalized-sport-tek--v-neck-raglan-wind-shirt-16696-ccp15815.htm'>
							<h2>Sport-Tek® V-Neck Raglan Wind Shirt</h2>
						</a>
						<span>As low as: {!!$product->discount_price - $product->selling_price * 0.4 !!}৳</span>
					</div>
				</div>
			</div>
			
	</div>
	</div>
</div>
</div>
<div id="print">
	<table width="100%" class="printDetailBox">
		<tr>
			<td><img src="https://www.promodirect.com/staticfile/images/pdlogo_top.png"></td>
		</tr>
		<tr>
			<td id="contact">
				<p>Order Online Or Call 1-800-748-6150.</p>
				<p>Talk to an expert in 45 seconds! Mon.-Fri., 6:30 am - 4:30 pm PST.</p>
				<p>You can write to us at <span>order@promodirect.com</span></p>
			</td>
		</tr>
		<tr>
			<td align="left">
				<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6ffb0d04a076446a9af" data-theme="light" 
				data-businessunit-id="4d9132a700006400050f4273" data-style-height="20px" data-style-width="425px" align="left">
				<a href="https://www.trustpilot.com/review/www.promodirect.com" target="_blank">&nbsp;</a>
			</div>
		</td>
	</tr>
	<tr>
		<td id="productcodeBox"><span class="productcodebtn">ITEM CODE: 31522</span></td>
	</tr>
	<tr>
		<td id="producttitleBox"><span class="productname">{{$product->product_name}}</span></td>
	</tr>
	<tr>
		<td id="buyLineBox"><span class="buyLine">Stylish sweatpants with an elastic waistband and side pockets! </span></td>
	</tr>
	<tr>
		<td class="aslowtext">As low as: $32.74</td>
	</tr>
</table>
<div id="quantityprice"></div>
<div class="productDetailsBlock"></div>
<div id="bigImageBox"><img src="" class="img-responsive" alt="31522 - {{$product->product_name}}"/></div>
<div class="thumb-imagebox">
	<div class="thumb-images">
		<ul>
			<li><img src="https://www.promodirect.com//objects/catalog/product/multiimages/52957/Grey_Athletic_Heather/1_Unisex-Jogger-Sweatpants-Athletic-heather-31522.jpg" alt="Athletic Heather"/></li>
			<li><img src="https://www.promodirect.com//objects/catalog/product/multiimages/52957/Black_Black/1_Unisex-Jogger-Sweatpants-black-31522.jpg" alt="Black"/></li>
			<li><img src="https://www.promodirect.com//objects/catalog/product/multiimages/52957/Grey_Dark_Grey_Heather/1_Unisex-Jogger-Sweatpants-dark-grey-heather-31522.jpg" alt="Dark Grey Heather"/></li>
			<li><img src="https://www.promodirect.com//objects/catalog/product/multiimages/52957/Blue_Heather_Navy/1_Unisex-Jogger-Sweatpants-heather-navy-31522.jpg" alt="Heather Navy"/></li>
			<li><img src="https://www.promodirect.com//objects/catalog/product/multiimages/52957/_Gallery/1_Promotional-Unisex-Jogger-Sweatpants-gallery-31522.jpg" alt="Gallery"/></li>
		</ul>
	</div>
</div>
<div class="detailsPageTabs"><img src="https://www.promodirect.com/staticfile/images/tabs.png" class="img-responsive" alt="Secure ORDERing"/></div>
<!-- //////////////////Custom css -->
<link rel="stylesheet" type="text/css" href="{{ asset('staticfile/css/p_slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('staticfile/css/slick-theme.css')}}">
<style type="text/css">
.slick-dotted.slick-slider {
	margin: 0px;
}
.slick-prev {
	left: -15px;
}
.slick-next {
	right: 0px;
}
.slider {
	width: 50%;
	margin: 100px auto;
}
.slick-slide {
	margin: 0px 20px;
}
.slick-slide img {
	width: 100%;
}
.slick-prev:before,
.slick-next:before {
	color: black;
}
.slick-slide {
	transition: all ease-in-out .3s;
	opacity: 1;
}
.slick-slide img {
	cursor: pointer;
}
.slick-current, .slick-active {
	opacity: 1;
}
.slick-slide {
	margin: 0px 20px;
}
</style>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{ asset('staticfile/css/p_slick.js')}}" type="text/javascript" charset="utf-8"></script>
<!-- //////////////////////////////////////////////////////////custom js ends -->
<script type="text/javascript">
	$(document).on('ready', function () {
		$(".regular").slick({
			dots: true,
			infinite: false,
			slidesToShow: 5,
			slidesToScroll: 3
		});

		$("img.overout").mouseover(function() {
			var APP_URL = {!! json_encode(url('/')) !!};
			var color_id = $(this).attr("id");
			if (color_id) {
				$.ajax({
					type:'POST',
					url:"{{ route('changeImage.post') }}",
					data:{
						color_id:color_id,
						"_token": "{{ csrf_token() }}",
					},
					success:function(data){
						$("#preview").attr("src",APP_URL + data);
					}
				});
			}
		});
                           	// $("#item_color").change(function(){
                           	//     alert($(this).val());
                           	// });
                           	$("#item_color").change(function() {
                           		var APP_URL = {!! json_encode(url('/')) !!};
                           		var color_id = $(this).val();
                           		if (color_id) {
                           			$.ajax({
                           				type:'POST',
                           				url:"{{ route('changeImage.post') }}",
                           				data:{
                           					color_id:color_id,
                           					"_token": "{{ csrf_token() }}",
                           				},
                           				success:function(data){
                           					$("#preview").attr("src",APP_URL + data);
                           				}
                           			});
                           		}
                           	});

                           	$("#left_chest").change(function(event){
                           		if (this.checked){
                           			$("#left_chest_no_of_imprint_colors").css({"display": "block"});
                           		}else{
                           			$("#left_chest_no_of_imprint_colors").css({"display": "none"});
                           		}
                           	});

                           	$("#left_chest_no_of_imprint_color").change(function(event){
                           		if (this.value == 1){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "none"});
                           			$("#left_chest_imprint_color_3s").css({"display": "none"});
                           			$("#left_chest_imprint_color_4s").css({"display": "none"});
                           			$("#left_chest_imprint_color_5s").css({"display": "none"});
                           			$("#left_chest_imprint_color_6s").css({"display": "none"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 2){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "none"});
                           			$("#left_chest_imprint_color_4s").css({"display": "none"});
                           			$("#left_chest_imprint_color_5s").css({"display": "none"});
                           			$("#left_chest_imprint_color_6s").css({"display": "none"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 3){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "block"});
                           			$("#left_chest_imprint_color_4s").css({"display": "none"});
                           			$("#left_chest_imprint_color_5s").css({"display": "none"});
                           			$("#left_chest_imprint_color_6s").css({"display": "none"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 4){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "block"});
                           			$("#left_chest_imprint_color_4s").css({"display": "block"});
                           			$("#left_chest_imprint_color_5s").css({"display": "none"});
                           			$("#left_chest_imprint_color_6s").css({"display": "none"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 5){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "block"});
                           			$("#left_chest_imprint_color_4s").css({"display": "block"});
                           			$("#left_chest_imprint_color_5s").css({"display": "block"});
                           			$("#left_chest_imprint_color_6s").css({"display": "none"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 6){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "block"});
                           			$("#left_chest_imprint_color_4s").css({"display": "block"});
                           			$("#left_chest_imprint_color_5s").css({"display": "block"});
                           			$("#left_chest_imprint_color_6s").css({"display": "block"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 7){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "block"});
                           			$("#left_chest_imprint_color_4s").css({"display": "block"});
                           			$("#left_chest_imprint_color_5s").css({"display": "block"});
                           			$("#left_chest_imprint_color_6s").css({"display": "block"});
                           			$("#left_chest_imprint_color_7s").css({"display": "block"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		}else if(this.value == 8){
                           			$("#left_chest_imprint_color_1s").css({"display": "block"});
                           			$("#left_chest_imprint_color_2s").css({"display": "block"});
                           			$("#left_chest_imprint_color_3s").css({"display": "block"});
                           			$("#left_chest_imprint_color_4s").css({"display": "block"});
                           			$("#left_chest_imprint_color_5s").css({"display": "block"});
                           			$("#left_chest_imprint_color_6s").css({"display": "block"});
                           			$("#left_chest_imprint_color_7s").css({"display": "block"});
                           			$("#left_chest_imprint_color_8s").css({"display": "block"});
                           		}else{
                           			$("#left_chest_imprint_color_1s").css({"display": "none"});
                           			$("#left_chest_imprint_color_2s").css({"display": "none"});
                           			$("#left_chest_imprint_color_3s").css({"display": "none"});
                           			$("#left_chest_imprint_color_4s").css({"display": "none"});
                           			$("#left_chest_imprint_color_5s").css({"display": "none"});
                           			$("#left_chest_imprint_color_6s").css({"display": "none"});
                           			$("#left_chest_imprint_color_7s").css({"display": "none"});
                           			$("#left_chest_imprint_color_8s").css({"display": "none"});
                           		};
                           	});

$("#full_front").change(function(event){
	if (this.checked){
		$("#full_front_no_of_imprint_colors").css({"display": "block"});
	}else{
		$("#full_front_no_of_imprint_colors").css({"display": "none"});
	}
});

$("#full_front_no_of_imprint_color").change(function(event){
	if (this.value == 1){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "none"});
		$("#full_front_imprint_color_3s").css({"display": "none"});
		$("#full_front_imprint_color_4s").css({"display": "none"});
		$("#full_front_imprint_color_5s").css({"display": "none"});
		$("#full_front_imprint_color_6s").css({"display": "none"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 2){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "none"});
		$("#full_front_imprint_color_4s").css({"display": "none"});
		$("#full_front_imprint_color_5s").css({"display": "none"});
		$("#full_front_imprint_color_6s").css({"display": "none"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 3){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "block"});
		$("#full_front_imprint_color_4s").css({"display": "none"});
		$("#full_front_imprint_color_5s").css({"display": "none"});
		$("#full_front_imprint_color_6s").css({"display": "none"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 4){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "block"});
		$("#full_front_imprint_color_4s").css({"display": "block"});
		$("#full_front_imprint_color_5s").css({"display": "none"});
		$("#full_front_imprint_color_6s").css({"display": "none"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 5){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "block"});
		$("#full_front_imprint_color_4s").css({"display": "block"});
		$("#full_front_imprint_color_5s").css({"display": "block"});
		$("#full_front_imprint_color_6s").css({"display": "none"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 6){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "block"});
		$("#full_front_imprint_color_4s").css({"display": "block"});
		$("#full_front_imprint_color_5s").css({"display": "block"});
		$("#full_front_imprint_color_6s").css({"display": "block"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 7){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "block"});
		$("#full_front_imprint_color_4s").css({"display": "block"});
		$("#full_front_imprint_color_5s").css({"display": "block"});
		$("#full_front_imprint_color_6s").css({"display": "block"});
		$("#full_front_imprint_color_7s").css({"display": "block"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 8){
		$("#full_front_imprint_color_1s").css({"display": "block"});
		$("#full_front_imprint_color_2s").css({"display": "block"});
		$("#full_front_imprint_color_3s").css({"display": "block"});
		$("#full_front_imprint_color_4s").css({"display": "block"});
		$("#full_front_imprint_color_5s").css({"display": "block"});
		$("#full_front_imprint_color_6s").css({"display": "block"});
		$("#full_front_imprint_color_7s").css({"display": "block"});
		$("#full_front_imprint_color_8s").css({"display": "block"});
	}else{
		$("#full_front_imprint_color_1s").css({"display": "none"});
		$("#full_front_imprint_color_2s").css({"display": "none"});
		$("#full_front_imprint_color_3s").css({"display": "none"});
		$("#full_front_imprint_color_4s").css({"display": "none"});
		$("#full_front_imprint_color_5s").css({"display": "none"});
		$("#full_front_imprint_color_6s").css({"display": "none"});
		$("#full_front_imprint_color_7s").css({"display": "none"});
		$("#full_front_imprint_color_8s").css({"display": "none"});
	};
});

$("#full_back").change(function(event){
	if (this.checked){
		$("#full_back_no_of_imprint_colors").css({"display": "block"});
	}else{
		$("#full_back_no_of_imprint_colors").css({"display": "none"});
	}
});

$("#full_back_no_of_imprint_color").change(function(event){
	if (this.value == 1){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "none"});
		$("#full_back_imprint_color_3s").css({"display": "none"});
		$("#full_back_imprint_color_4s").css({"display": "none"});
		$("#full_back_imprint_color_5s").css({"display": "none"});
		$("#full_back_imprint_color_6s").css({"display": "none"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 2){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "none"});
		$("#full_back_imprint_color_4s").css({"display": "none"});
		$("#full_back_imprint_color_5s").css({"display": "none"});
		$("#full_back_imprint_color_6s").css({"display": "none"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 3){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "block"});
		$("#full_back_imprint_color_4s").css({"display": "none"});
		$("#full_back_imprint_color_5s").css({"display": "none"});
		$("#full_back_imprint_color_6s").css({"display": "none"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 4){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "block"});
		$("#full_back_imprint_color_4s").css({"display": "block"});
		$("#full_back_imprint_color_5s").css({"display": "none"});
		$("#full_back_imprint_color_6s").css({"display": "none"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 5){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "block"});
		$("#full_back_imprint_color_4s").css({"display": "block"});
		$("#full_back_imprint_color_5s").css({"display": "block"});
		$("#full_back_imprint_color_6s").css({"display": "none"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 6){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "block"});
		$("#full_back_imprint_color_4s").css({"display": "block"});
		$("#full_back_imprint_color_5s").css({"display": "block"});
		$("#full_back_imprint_color_6s").css({"display": "block"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 7){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "block"});
		$("#full_back_imprint_color_4s").css({"display": "block"});
		$("#full_back_imprint_color_5s").css({"display": "block"});
		$("#full_back_imprint_color_6s").css({"display": "block"});
		$("#full_back_imprint_color_7s").css({"display": "block"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 8){
		$("#full_back_imprint_color_1s").css({"display": "block"});
		$("#full_back_imprint_color_2s").css({"display": "block"});
		$("#full_back_imprint_color_3s").css({"display": "block"});
		$("#full_back_imprint_color_4s").css({"display": "block"});
		$("#full_back_imprint_color_5s").css({"display": "block"});
		$("#full_back_imprint_color_6s").css({"display": "block"});
		$("#full_back_imprint_color_7s").css({"display": "block"});
		$("#full_back_imprint_color_8s").css({"display": "block"});
	}else{
		$("#full_back_imprint_color_1s").css({"display": "none"});
		$("#full_back_imprint_color_2s").css({"display": "none"});
		$("#full_back_imprint_color_3s").css({"display": "none"});
		$("#full_back_imprint_color_4s").css({"display": "none"});
		$("#full_back_imprint_color_5s").css({"display": "none"});
		$("#full_back_imprint_color_6s").css({"display": "none"});
		$("#full_back_imprint_color_7s").css({"display": "none"});
		$("#full_back_imprint_color_8s").css({"display": "none"});
	};
});

$("#right_sleeve").change(function(event){
	if (this.checked){
		$("#right_sleeve_no_of_imprint_colors").css({"display": "block"});
	}else{
		$("#right_sleeve_no_of_imprint_colors").css({"display": "none"});
	}
});

$("#right_sleeve_no_of_imprint_color").change(function(event){
	if (this.value == 1){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "none"});
		$("#right_sleeve_imprint_color_3s").css({"display": "none"});
		$("#right_sleeve_imprint_color_4s").css({"display": "none"});
		$("#right_sleeve_imprint_color_5s").css({"display": "none"});
		$("#right_sleeve_imprint_color_6s").css({"display": "none"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 2){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "none"});
		$("#right_sleeve_imprint_color_4s").css({"display": "none"});
		$("#right_sleeve_imprint_color_5s").css({"display": "none"});
		$("#right_sleeve_imprint_color_6s").css({"display": "none"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 3){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "block"});
		$("#right_sleeve_imprint_color_4s").css({"display": "none"});
		$("#right_sleeve_imprint_color_5s").css({"display": "none"});
		$("#right_sleeve_imprint_color_6s").css({"display": "none"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 4){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "block"});
		$("#right_sleeve_imprint_color_4s").css({"display": "block"});
		$("#right_sleeve_imprint_color_5s").css({"display": "none"});
		$("#right_sleeve_imprint_color_6s").css({"display": "none"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 5){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "block"});
		$("#right_sleeve_imprint_color_4s").css({"display": "block"});
		$("#right_sleeve_imprint_color_5s").css({"display": "block"});
		$("#right_sleeve_imprint_color_6s").css({"display": "none"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 6){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "block"});
		$("#right_sleeve_imprint_color_4s").css({"display": "block"});
		$("#right_sleeve_imprint_color_5s").css({"display": "block"});
		$("#right_sleeve_imprint_color_6s").css({"display": "block"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 7){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "block"});
		$("#right_sleeve_imprint_color_4s").css({"display": "block"});
		$("#right_sleeve_imprint_color_5s").css({"display": "block"});
		$("#right_sleeve_imprint_color_6s").css({"display": "block"});
		$("#right_sleeve_imprint_color_7s").css({"display": "block"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	}else if(this.value == 8){
		$("#right_sleeve_imprint_color_1s").css({"display": "block"});
		$("#right_sleeve_imprint_color_2s").css({"display": "block"});
		$("#right_sleeve_imprint_color_3s").css({"display": "block"});
		$("#right_sleeve_imprint_color_4s").css({"display": "block"});
		$("#right_sleeve_imprint_color_5s").css({"display": "block"});
		$("#right_sleeve_imprint_color_6s").css({"display": "block"});
		$("#right_sleeve_imprint_color_7s").css({"display": "block"});
		$("#right_sleeve_imprint_color_8s").css({"display": "block"});
	}else{
		$("#right_sleeve_imprint_color_1s").css({"display": "none"});
		$("#right_sleeve_imprint_color_2s").css({"display": "none"});
		$("#right_sleeve_imprint_color_3s").css({"display": "none"});
		$("#right_sleeve_imprint_color_4s").css({"display": "none"});
		$("#right_sleeve_imprint_color_5s").css({"display": "none"});
		$("#right_sleeve_imprint_color_6s").css({"display": "none"});
		$("#right_sleeve_imprint_color_7s").css({"display": "none"});
		$("#right_sleeve_imprint_color_8s").css({"display": "none"});
	};
});	
	// $('#liveChat').hide();

	var setup_fee = document.getElementById("setup_fee").value || 0;
	var discount_price = document.getElementById("discount_price").value|| 0;
	var selling_price = document.getElementById("selling_price").value|| 0;
	var small = document.getElementById("small").value|| 0;
	var medium = document.getElementById("medium").value|| 0;
	// alert(medium);
	var large = document.getElementById("large").value|| 0;
	var axal = document.getElementById("axal").value|| 0;
	var twoxl = document.getElementById("twoxl").value|| 0;
	var threexl = document.getElementById("threexl").value|| 0;
	var fourxl = document.getElementById("fourxl").value|| 0;
	var total_items = parseInt(small) + parseInt(medium) + parseInt(large) + parseInt(axal) + parseInt(twoxl) + parseInt(threexl) + parseInt(fourxl);
	$("#quantityspan").html(total_items);
	$("#quantityspan1").html(total_items);
	$("#total_items").val(total_items);

	if(discount_price == 0){
		var subtotal = total_items * selling_price;
		$("#subtotal").html(subtotal);
		$("#subtotal_input").val(subtotal);
		$("#total_savings").html('0');
	}else{
		var subtotal = total_items * discount_price;
		$("#subtotal").html(subtotal);
		$("#subtotal_input").val(subtotal);
		var total_savings = (selling_price - discount_price) * total_items;
		$("#total_savings").html(total_savings);
	}
	

	var grandtotal = parseInt(subtotal) + parseInt(setup_fee);
	$("#grandtotal").html(grandtotal);
	$("#grandtotal_input").val(grandtotal);
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#small, #medium, #large, #axal, #twoxl, #threexl, #fourxl").blur(function() {
			var setup_fee = document.getElementById("setup_fee").value;
			var discount_price = document.getElementById("discount_price").value;
			var selling_price = document.getElementById("selling_price").value;
			var small = document.getElementById("small").value|| 0;
			var medium = document.getElementById("medium").value|| 0;
			// alert(medium);
			var large = document.getElementById("large").value|| 0;
			var axal = document.getElementById("axal").value|| 0;
			var twoxl = document.getElementById("twoxl").value|| 0;
			var threexl = document.getElementById("threexl").value|| 0;
			var fourxl = document.getElementById("fourxl").value|| 0;
			var total_items = parseInt(small) + parseInt(medium) + parseInt(large) + parseInt(axal) + parseInt(twoxl) + parseInt(threexl) + parseInt(fourxl);
			$("#quantityspan").html(total_items);
			$("#quantityspan1").html(total_items);
			$("#total_items").val(total_items);

			if(discount_price == 0){
				var subtotal = total_items * selling_price;
				$("#subtotal").html(subtotal);
				$("#subtotal_input").val(subtotal);
				$("#total_savings").html('0');
			}else{
				var subtotal = total_items * discount_price;
				$("#subtotal").html(subtotal);
				$("#subtotal_input").val(subtotal);
				var total_savings = (selling_price - discount_price) * total_items;
				$("#total_savings").html(total_savings);
			}

			var grandtotal = parseInt(subtotal) + parseInt(setup_fee);
			$("#grandtotal").html(grandtotal);
			$("#grandtotal_input").val(grandtotal);
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabs ul li:first').addClass('active');
		$('#tabs ul li a').click(function(){ 
			$('#tabs ul li').removeClass('active');
			$(this).parent().addClass('active'); 
			var currentTab = $(this).attr('href'); 
			$('#tabs .tabContent').hide();
			$(currentTab).show();
			return false;
		});

		document.getElementById('mail_us').onsubmit = function () {
			var frmData = new FormData(this);
			alert(frmData);
		};

		document.getElementById('chatform').onsubmit = function () {
			var frmDatas = new FormData(this);
			alert(frmDatas);
		};
		document.querySelector('#cart_form').addEventListener('submit', function() {
			event.preventDefault();
			let email_address = this.elements.email_address.value;
			if(email_address == ''){
				alert("Email Address is required");
			}else{
				let product_id = this.elements.product_id.value;
				let item_color = this.elements.item_color.value;
				let total_items = this.elements.total_items.value;
				let small = this.elements.small.value;
				let medium = this.elements.medium.value;
				let large = this.elements.large.value;
				let axal = this.elements.axal.value;
				let twoxl = this.elements.twoxl.value;
				let threexl = this.elements.threexl.value;
				let fourxl = this.elements.fourxl.value;

				let left_chest = this.elements.left_chest.value;
				let left_chest_no_of_imprint_color = this.elements.left_chest_no_of_imprint_color.value;
				let left_chest_imprint_color_1 = this.elements.left_chest_imprint_color_1.value;
				let left_chest_imprint_color_2 = this.elements.left_chest_imprint_color_2.value;
				let left_chest_imprint_color_3 = this.elements.left_chest_imprint_color_3.value;
				let left_chest_imprint_color_4 = this.elements.left_chest_imprint_color_4.value;
				let left_chest_imprint_color_5 = this.elements.left_chest_imprint_color_5.value;
				let left_chest_imprint_color_6 = this.elements.left_chest_imprint_color_6.value;
				let left_chest_imprint_color_7 = this.elements.left_chest_imprint_color_7.value;
				let left_chest_imprint_color_8 = this.elements.left_chest_imprint_color_8.value;

				let full_front = this.elements.full_front.value;
				let full_front_no_of_imprint_color = this.elements.full_front_no_of_imprint_color.value;
				let full_front_imprint_color_1 = this.elements.full_front_imprint_color_1.value;
				let full_front_imprint_color_2 = this.elements.full_front_imprint_color_2.value;
				let full_front_imprint_color_3 = this.elements.full_front_imprint_color_3.value;
				let full_front_imprint_color_4 = this.elements.full_front_imprint_color_4.value;
				let full_front_imprint_color_5 = this.elements.full_front_imprint_color_5.value;
				let full_front_imprint_color_6 = this.elements.full_front_imprint_color_6.value;
				let full_front_imprint_color_7 = this.elements.full_front_imprint_color_7.value;
				let full_front_imprint_color_8 = this.elements.full_front_imprint_color_8.value;

				let full_back = this.elements.full_back.value;
				let full_back_no_of_imprint_color = this.elements.full_back_no_of_imprint_color.value;
				let full_back_imprint_color_1 = this.elements.full_back_imprint_color_1.value;
				let full_back_imprint_color_2 = this.elements.full_back_imprint_color_2.value;
				let full_back_imprint_color_3 = this.elements.full_back_imprint_color_3.value;
				let full_back_imprint_color_4 = this.elements.full_back_imprint_color_4.value;
				let full_back_imprint_color_5 = this.elements.full_back_imprint_color_5.value;
				let full_back_imprint_color_6 = this.elements.full_back_imprint_color_6.value;
				let full_back_imprint_color_7 = this.elements.full_back_imprint_color_7.value;
				let full_back_imprint_color_8 = this.elements.full_back_imprint_color_8.value;

				let right_sleeve = this.elements.right_sleeve.value;
				let right_sleeve_no_of_imprint_color = this.elements.right_sleeve_no_of_imprint_color.value;
				let right_sleeve_imprint_color_1 = this.elements.right_sleeve_imprint_color_1.value;
				let right_sleeve_imprint_color_2 = this.elements.right_sleeve_imprint_color_2.value;
				let right_sleeve_imprint_color_3 = this.elements.right_sleeve_imprint_color_3.value;
				let right_sleeve_imprint_color_4 = this.elements.right_sleeve_imprint_color_4.value;
				let right_sleeve_imprint_color_5 = this.elements.right_sleeve_imprint_color_5.value;
				let right_sleeve_imprint_color_6 = this.elements.right_sleeve_imprint_color_6.value;
				let right_sleeve_imprint_color_7 = this.elements.right_sleeve_imprint_color_7.value;
				let right_sleeve_imprint_color_8 = this.elements.right_sleeve_imprint_color_8.value;

				let packaging_option = this.elements.packaging_option.value;

				$.ajax({
					url:"{{ route('cart.store') }}",
					type:"POST",
					data:{
						"_token": "{{ csrf_token() }}",
						product_id:product_id,
						item_color : item_color,
						total_items : total_items,
						small : small,
						medium : medium,
						large : large,
						axal : axal,
						twoxl : twoxl,
						threexl : threexl,
						fourxl : fourxl,

						left_chest : left_chest,
						left_chest_no_of_imprint_color : left_chest_no_of_imprint_color,
						left_chest_imprint_color_1 : left_chest_imprint_color_1,
						left_chest_imprint_color_2 : left_chest_imprint_color_2,
						left_chest_imprint_color_3 : left_chest_imprint_color_3,
						left_chest_imprint_color_4 : left_chest_imprint_color_4,
						left_chest_imprint_color_5 : left_chest_imprint_color_5,
						left_chest_imprint_color_6 : left_chest_imprint_color_6,
						left_chest_imprint_color_7 : left_chest_imprint_color_7,
						left_chest_imprint_color_8 : left_chest_imprint_color_8,

						full_front : full_front,
						full_front_no_of_imprint_color : full_front_no_of_imprint_color,
						full_front_imprint_color_1 : full_front_imprint_color_1,
						full_front_imprint_color_2 : full_front_imprint_color_2,
						full_front_imprint_color_3 : full_front_imprint_color_3,
						full_front_imprint_color_4 : full_front_imprint_color_4,
						full_front_imprint_color_5 : full_front_imprint_color_5,
						full_front_imprint_color_6 : full_front_imprint_color_6,
						full_front_imprint_color_7 : full_front_imprint_color_7,
						full_front_imprint_color_8 : full_front_imprint_color_8,

						full_back : full_back,
						full_back_no_of_imprint_color : full_back_no_of_imprint_color,
						full_back_imprint_color_1 : full_back_imprint_color_1,
						full_back_imprint_color_2 : full_back_imprint_color_2,
						full_back_imprint_color_3 : full_back_imprint_color_3,
						full_back_imprint_color_4 : full_back_imprint_color_4,
						full_back_imprint_color_5 : full_back_imprint_color_5,
						full_back_imprint_color_6 : full_back_imprint_color_6,
						full_back_imprint_color_7 : full_back_imprint_color_7,
						full_back_imprint_color_8 : full_back_imprint_color_8,

						right_sleeve : right_sleeve,
						right_sleeve_no_of_imprint_color : right_sleeve_no_of_imprint_color,
						right_sleeve_imprint_color_1 : right_sleeve_imprint_color_1,
						right_sleeve_imprint_color_2 : right_sleeve_imprint_color_2,
						right_sleeve_imprint_color_3 : right_sleeve_imprint_color_3,
						right_sleeve_imprint_color_4 : right_sleeve_imprint_color_4,
						right_sleeve_imprint_color_5 : right_sleeve_imprint_color_5,
						right_sleeve_imprint_color_6 : right_sleeve_imprint_color_6,
						right_sleeve_imprint_color_7 : right_sleeve_imprint_color_7,
						right_sleeve_imprint_color_8 : right_sleeve_imprint_color_8,

						packaging_option : packaging_option,
						email_address : email_address
					},
					success:function(response)
					{
						if(response == 'success')
						{
							window.location.href = "{{url('/cart')}}";
						}
					},
				});
			}
		});

});
</script>
<script>
	$(document).ready(function(){

		var populate = {{$populates}};

		@isset($cart[$product->id]['item_color'])
			$("#item_color").val({{$cart[$product->id]['item_color']}});
		@endisset

		@isset($cart[$product->id]['packaging_option'])
			$("#packaging_option").val({{$cart[$product->id]['packaging_option']}});
		@endisset

		///////////////////////////////////////////////////// Populate Left Chest
		@isset($cart[$product->id]['left_chest_no_of_imprint_color'])
			var left_chest_no_of_imprint_color = {{$cart[$product->id]['left_chest_no_of_imprint_color']}}
			$("#left_chest_no_of_imprint_color").val(left_chest_no_of_imprint_color);

			if (left_chest_no_of_imprint_color == 1){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "none"});
				$("#left_chest_imprint_color_3s").css({"display": "none"});
				$("#left_chest_imprint_color_4s").css({"display": "none"});
				$("#left_chest_imprint_color_5s").css({"display": "none"});
				$("#left_chest_imprint_color_6s").css({"display": "none"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 2){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "none"});
				$("#left_chest_imprint_color_4s").css({"display": "none"});
				$("#left_chest_imprint_color_5s").css({"display": "none"});
				$("#left_chest_imprint_color_6s").css({"display": "none"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 3){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "block"});
				$("#left_chest_imprint_color_4s").css({"display": "none"});
				$("#left_chest_imprint_color_5s").css({"display": "none"});
				$("#left_chest_imprint_color_6s").css({"display": "none"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 4){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "block"});
				$("#left_chest_imprint_color_4s").css({"display": "block"});
				$("#left_chest_imprint_color_5s").css({"display": "none"});
				$("#left_chest_imprint_color_6s").css({"display": "none"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 5){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "block"});
				$("#left_chest_imprint_color_4s").css({"display": "block"});
				$("#left_chest_imprint_color_5s").css({"display": "block"});
				$("#left_chest_imprint_color_6s").css({"display": "none"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 6){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "block"});
				$("#left_chest_imprint_color_4s").css({"display": "block"});
				$("#left_chest_imprint_color_5s").css({"display": "block"});
				$("#left_chest_imprint_color_6s").css({"display": "block"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 7){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "block"});
				$("#left_chest_imprint_color_4s").css({"display": "block"});
				$("#left_chest_imprint_color_5s").css({"display": "block"});
				$("#left_chest_imprint_color_6s").css({"display": "block"});
				$("#left_chest_imprint_color_7s").css({"display": "block"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}else if(left_chest_no_of_imprint_color == 8){
				$("#left_chest_imprint_color_1s").css({"display": "block"});
				$("#left_chest_imprint_color_2s").css({"display": "block"});
				$("#left_chest_imprint_color_3s").css({"display": "block"});
				$("#left_chest_imprint_color_4s").css({"display": "block"});
				$("#left_chest_imprint_color_5s").css({"display": "block"});
				$("#left_chest_imprint_color_6s").css({"display": "block"});
				$("#left_chest_imprint_color_7s").css({"display": "block"});
				$("#left_chest_imprint_color_8s").css({"display": "block"});
			}else {
				$("#left_chest_imprint_color_1s").css({"display": "none"});
				$("#left_chest_imprint_color_2s").css({"display": "none"});
				$("#left_chest_imprint_color_3s").css({"display": "none"});
				$("#left_chest_imprint_color_4s").css({"display": "none"});
				$("#left_chest_imprint_color_5s").css({"display": "none"});
				$("#left_chest_imprint_color_6s").css({"display": "none"});
				$("#left_chest_imprint_color_7s").css({"display": "none"});
				$("#left_chest_imprint_color_8s").css({"display": "none"});
			}
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_1'])
			$("#left_chest_imprint_color_1").val({{$cart[$product->id]['left_chest_imprint_color_1']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_2'])
			$("#left_chest_imprint_color_2").val({{$cart[$product->id]['left_chest_imprint_color_2']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_3'])
			$("#left_chest_imprint_color_3").val({{$cart[$product->id]['left_chest_imprint_color_3']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_4'])
			$("#left_chest_imprint_color_4").val({{$cart[$product->id]['left_chest_imprint_color_4']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_5'])
			$("#left_chest_imprint_color_5").val({{$cart[$product->id]['left_chest_imprint_color_5']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_6'])
			$("#left_chest_imprint_color_6").val({{$cart[$product->id]['left_chest_imprint_color_6']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_7'])
			$("#left_chest_imprint_color_7").val({{$cart[$product->id]['left_chest_imprint_color_7']}});
		@endisset

		@isset($cart[$product->id]['left_chest_imprint_color_8'])
			$("#left_chest_imprint_color_8").val({{$cart[$product->id]['left_chest_imprint_color_8']}});
		@endisset
		///////////////////////////////////////////////////// Populate Left Chest ends


		///////////////////////////////////////////////////// Populate Full Front
		@isset($cart[$product->id]['full_front_no_of_imprint_color'])
			var full_front_no_of_imprint_color = {{$cart[$product->id]['full_front_no_of_imprint_color']}}
			$("#full_front_no_of_imprint_color").val(full_front_no_of_imprint_color);

			if (full_front_no_of_imprint_color == 1){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "none"});
				$("#full_front_imprint_color_3s").css({"display": "none"});
				$("#full_front_imprint_color_4s").css({"display": "none"});
				$("#full_front_imprint_color_5s").css({"display": "none"});
				$("#full_front_imprint_color_6s").css({"display": "none"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 2){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "none"});
				$("#full_front_imprint_color_4s").css({"display": "none"});
				$("#full_front_imprint_color_5s").css({"display": "none"});
				$("#full_front_imprint_color_6s").css({"display": "none"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 3){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "block"});
				$("#full_front_imprint_color_4s").css({"display": "none"});
				$("#full_front_imprint_color_5s").css({"display": "none"});
				$("#full_front_imprint_color_6s").css({"display": "none"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 4){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "block"});
				$("#full_front_imprint_color_4s").css({"display": "block"});
				$("#full_front_imprint_color_5s").css({"display": "none"});
				$("#full_front_imprint_color_6s").css({"display": "none"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 5){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "block"});
				$("#full_front_imprint_color_4s").css({"display": "block"});
				$("#full_front_imprint_color_5s").css({"display": "block"});
				$("#full_front_imprint_color_6s").css({"display": "none"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 6){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "block"});
				$("#full_front_imprint_color_4s").css({"display": "block"});
				$("#full_front_imprint_color_5s").css({"display": "block"});
				$("#full_front_imprint_color_6s").css({"display": "block"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 7){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "block"});
				$("#full_front_imprint_color_4s").css({"display": "block"});
				$("#full_front_imprint_color_5s").css({"display": "block"});
				$("#full_front_imprint_color_6s").css({"display": "block"});
				$("#full_front_imprint_color_7s").css({"display": "block"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}else if(full_front_no_of_imprint_color == 8){
				$("#full_front_imprint_color_1s").css({"display": "block"});
				$("#full_front_imprint_color_2s").css({"display": "block"});
				$("#full_front_imprint_color_3s").css({"display": "block"});
				$("#full_front_imprint_color_4s").css({"display": "block"});
				$("#full_front_imprint_color_5s").css({"display": "block"});
				$("#full_front_imprint_color_6s").css({"display": "block"});
				$("#full_front_imprint_color_7s").css({"display": "block"});
				$("#full_front_imprint_color_8s").css({"display": "block"});
			}else {
				$("#full_front_imprint_color_1s").css({"display": "none"});
				$("#full_front_imprint_color_2s").css({"display": "none"});
				$("#full_front_imprint_color_3s").css({"display": "none"});
				$("#full_front_imprint_color_4s").css({"display": "none"});
				$("#full_front_imprint_color_5s").css({"display": "none"});
				$("#full_front_imprint_color_6s").css({"display": "none"});
				$("#full_front_imprint_color_7s").css({"display": "none"});
				$("#full_front_imprint_color_8s").css({"display": "none"});
			}
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_1'])
			$("#full_front_imprint_color_1").val({{$cart[$product->id]['full_front_imprint_color_1']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_2'])
			$("#full_front_imprint_color_2").val({{$cart[$product->id]['full_front_imprint_color_2']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_3'])
			$("#full_front_imprint_color_3").val({{$cart[$product->id]['full_front_imprint_color_3']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_4'])
			$("#full_front_imprint_color_4").val({{$cart[$product->id]['full_front_imprint_color_4']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_5'])
			$("#full_front_imprint_color_5").val({{$cart[$product->id]['full_front_imprint_color_5']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_6'])
			$("#full_front_imprint_color_6").val({{$cart[$product->id]['full_front_imprint_color_6']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_7'])
			$("#full_front_imprint_color_7").val({{$cart[$product->id]['full_front_imprint_color_7']}});
		@endisset

		@isset($cart[$product->id]['full_front_imprint_color_8'])
			$("#full_front_imprint_color_8").val({{$cart[$product->id]['full_front_imprint_color_8']}});
		@endisset
		///////////////////////////////////////////////////// Populate Full Front ends

		///////////////////////////////////////////////////// Populate Full back
		@isset($cart[$product->id]['full_back_no_of_imprint_color'])
			var full_back_no_of_imprint_color = {{$cart[$product->id]['full_back_no_of_imprint_color']}}
			$("#full_back_no_of_imprint_color").val(full_back_no_of_imprint_color);

			if (full_back_no_of_imprint_color == 1){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "none"});
				$("#full_back_imprint_color_3s").css({"display": "none"});
				$("#full_back_imprint_color_4s").css({"display": "none"});
				$("#full_back_imprint_color_5s").css({"display": "none"});
				$("#full_back_imprint_color_6s").css({"display": "none"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 2){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "none"});
				$("#full_back_imprint_color_4s").css({"display": "none"});
				$("#full_back_imprint_color_5s").css({"display": "none"});
				$("#full_back_imprint_color_6s").css({"display": "none"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 3){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "block"});
				$("#full_back_imprint_color_4s").css({"display": "none"});
				$("#full_back_imprint_color_5s").css({"display": "none"});
				$("#full_back_imprint_color_6s").css({"display": "none"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 4){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "block"});
				$("#full_back_imprint_color_4s").css({"display": "block"});
				$("#full_back_imprint_color_5s").css({"display": "none"});
				$("#full_back_imprint_color_6s").css({"display": "none"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 5){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "block"});
				$("#full_back_imprint_color_4s").css({"display": "block"});
				$("#full_back_imprint_color_5s").css({"display": "block"});
				$("#full_back_imprint_color_6s").css({"display": "none"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 6){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "block"});
				$("#full_back_imprint_color_4s").css({"display": "block"});
				$("#full_back_imprint_color_5s").css({"display": "block"});
				$("#full_back_imprint_color_6s").css({"display": "block"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 7){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "block"});
				$("#full_back_imprint_color_4s").css({"display": "block"});
				$("#full_back_imprint_color_5s").css({"display": "block"});
				$("#full_back_imprint_color_6s").css({"display": "block"});
				$("#full_back_imprint_color_7s").css({"display": "block"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}else if(full_back_no_of_imprint_color == 8){
				$("#full_back_imprint_color_1s").css({"display": "block"});
				$("#full_back_imprint_color_2s").css({"display": "block"});
				$("#full_back_imprint_color_3s").css({"display": "block"});
				$("#full_back_imprint_color_4s").css({"display": "block"});
				$("#full_back_imprint_color_5s").css({"display": "block"});
				$("#full_back_imprint_color_6s").css({"display": "block"});
				$("#full_back_imprint_color_7s").css({"display": "block"});
				$("#full_back_imprint_color_8s").css({"display": "block"});
			}else {
				$("#full_back_imprint_color_1s").css({"display": "none"});
				$("#full_back_imprint_color_2s").css({"display": "none"});
				$("#full_back_imprint_color_3s").css({"display": "none"});
				$("#full_back_imprint_color_4s").css({"display": "none"});
				$("#full_back_imprint_color_5s").css({"display": "none"});
				$("#full_back_imprint_color_6s").css({"display": "none"});
				$("#full_back_imprint_color_7s").css({"display": "none"});
				$("#full_back_imprint_color_8s").css({"display": "none"});
			}
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_1'])
			$("#full_back_imprint_color_1").val({{$cart[$product->id]['full_back_imprint_color_1']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_2'])
			$("#full_back_imprint_color_2").val({{$cart[$product->id]['full_back_imprint_color_2']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_3'])
			$("#full_back_imprint_color_3").val({{$cart[$product->id]['full_back_imprint_color_3']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_4'])
			$("#full_back_imprint_color_4").val({{$cart[$product->id]['full_back_imprint_color_4']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_5'])
			$("#full_back_imprint_color_5").val({{$cart[$product->id]['full_back_imprint_color_5']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_6'])
			$("#full_back_imprint_color_6").val({{$cart[$product->id]['full_back_imprint_color_6']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_7'])
			$("#full_back_imprint_color_7").val({{$cart[$product->id]['full_back_imprint_color_7']}});
		@endisset

		@isset($cart[$product->id]['full_back_imprint_color_8'])
			$("#full_back_imprint_color_8").val({{$cart[$product->id]['full_back_imprint_color_8']}});
		@endisset
		///////////////////////////////////////////////////// Populate Left Chest ends

		///////////////////////////////////////////////////// Populate Right Sleeve
		@isset($cart[$product->id]['right_sleeve_no_of_imprint_color'])
			var right_sleeve_no_of_imprint_color = {{$cart[$product->id]['right_sleeve_no_of_imprint_color']}}
			$("#right_sleeve_no_of_imprint_color").val(right_sleeve_no_of_imprint_color);

			if (right_sleeve_no_of_imprint_color == 1){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "none"});
				$("#right_sleeve_imprint_color_3s").css({"display": "none"});
				$("#right_sleeve_imprint_color_4s").css({"display": "none"});
				$("#right_sleeve_imprint_color_5s").css({"display": "none"});
				$("#right_sleeve_imprint_color_6s").css({"display": "none"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 2){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "none"});
				$("#right_sleeve_imprint_color_4s").css({"display": "none"});
				$("#right_sleeve_imprint_color_5s").css({"display": "none"});
				$("#right_sleeve_imprint_color_6s").css({"display": "none"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 3){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "block"});
				$("#right_sleeve_imprint_color_4s").css({"display": "none"});
				$("#right_sleeve_imprint_color_5s").css({"display": "none"});
				$("#right_sleeve_imprint_color_6s").css({"display": "none"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 4){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "block"});
				$("#right_sleeve_imprint_color_4s").css({"display": "block"});
				$("#right_sleeve_imprint_color_5s").css({"display": "none"});
				$("#right_sleeve_imprint_color_6s").css({"display": "none"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 5){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "block"});
				$("#right_sleeve_imprint_color_4s").css({"display": "block"});
				$("#right_sleeve_imprint_color_5s").css({"display": "block"});
				$("#right_sleeve_imprint_color_6s").css({"display": "none"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 6){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "block"});
				$("#right_sleeve_imprint_color_4s").css({"display": "block"});
				$("#right_sleeve_imprint_color_5s").css({"display": "block"});
				$("#right_sleeve_imprint_color_6s").css({"display": "block"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 7){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "block"});
				$("#right_sleeve_imprint_color_4s").css({"display": "block"});
				$("#right_sleeve_imprint_color_5s").css({"display": "block"});
				$("#right_sleeve_imprint_color_6s").css({"display": "block"});
				$("#right_sleeve_imprint_color_7s").css({"display": "block"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}else if(right_sleeve_no_of_imprint_color == 8){
				$("#right_sleeve_imprint_color_1s").css({"display": "block"});
				$("#right_sleeve_imprint_color_2s").css({"display": "block"});
				$("#right_sleeve_imprint_color_3s").css({"display": "block"});
				$("#right_sleeve_imprint_color_4s").css({"display": "block"});
				$("#right_sleeve_imprint_color_5s").css({"display": "block"});
				$("#right_sleeve_imprint_color_6s").css({"display": "block"});
				$("#right_sleeve_imprint_color_7s").css({"display": "block"});
				$("#right_sleeve_imprint_color_8s").css({"display": "block"});
			}else {
				$("#right_sleeve_imprint_color_1s").css({"display": "none"});
				$("#right_sleeve_imprint_color_2s").css({"display": "none"});
				$("#right_sleeve_imprint_color_3s").css({"display": "none"});
				$("#right_sleeve_imprint_color_4s").css({"display": "none"});
				$("#right_sleeve_imprint_color_5s").css({"display": "none"});
				$("#right_sleeve_imprint_color_6s").css({"display": "none"});
				$("#right_sleeve_imprint_color_7s").css({"display": "none"});
				$("#right_sleeve_imprint_color_8s").css({"display": "none"});
			}
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_1'])
			$("#right_sleeve_imprint_color_1").val({{$cart[$product->id]['right_sleeve_imprint_color_1']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_2'])
			$("#right_sleeve_imprint_color_2").val({{$cart[$product->id]['right_sleeve_imprint_color_2']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_3'])
			$("#right_sleeve_imprint_color_3").val({{$cart[$product->id]['right_sleeve_imprint_color_3']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_4'])
			$("#right_sleeve_imprint_color_4").val({{$cart[$product->id]['right_sleeve_imprint_color_4']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_5'])
			$("#right_sleeve_imprint_color_5").val({{$cart[$product->id]['right_sleeve_imprint_color_5']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_6'])
			$("#right_sleeve_imprint_color_6").val({{$cart[$product->id]['right_sleeve_imprint_color_6']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_7'])
			$("#right_sleeve_imprint_color_7").val({{$cart[$product->id]['right_sleeve_imprint_color_7']}});
		@endisset

		@isset($cart[$product->id]['right_sleeve_imprint_color_8'])
			$("#right_sleeve_imprint_color_8").val({{$cart[$product->id]['right_sleeve_imprint_color_8']}});
		@endisset
		///////////////////////////////////////////////////// Populate Right Sleeve ends

	});
</script>
@endsection