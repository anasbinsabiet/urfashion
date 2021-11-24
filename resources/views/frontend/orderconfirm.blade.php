@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div id="orderConfirm">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li><a href="" lang="en">Home</a></li><li><a href="javascript:void(0);" lang="en">Shopping Cart</a></li>
				</ul>
			</div>      
		</div>
	</div>
	<div class="container">
		<div class="col-sm-12"><div class="row">
			<div class="shoppingCartBlock">
				<div class="cartlogoBox" lang="en">
					<img src="{{ url('/staticfile/images/cartlogo.png')}}" alt="cart">
					Shopping Cart
				</div>
				<div class="scStepsBlock">
					<div class="col-sm-3 scStep">
						<p class="title" lang="en">Step 1</p>
						<p class="desc" lang="en">Configure Product</p>
					</div>
					<div class="col-sm-3 scStep">
						<p class="title" lang="en">Step 2</p>
						<p class="desc" lang="en">Confirm Options</p>
					</div>
					<div class="col-sm-3 scStep">
						<p class="title" lang="en">Step 3</p>
						<p class="desc" lang="en">Billing &amp; Payment</p>
					</div>
					<div class="col-sm-3 scStep active">
						<p class="title" lang="en">Step 4</p>
						<p class="desc" lang="en">Upload Art</p>
					</div>
				</div>
				<div class="billingPaymentBlock">
					<div class="tyTextBlock" lang="en">
						Thank You for your order! 
					</div>
					<div class="orderStatusBlock">
						<div class="col-sm-4 orderStatusBox" lang="en">
							Order # {{session('order_id')}}
						</div>
						<div class="col-sm-4 orderStatusBox" lang="en">
							Order Status - <span lang="en">Pending</span>
						</div>
						<div class="col-sm-4 orderStatusBox" lang="en">
							Order Date - <span lang="en">{{ $orders ? \Carbon\Carbon::parse($orders[0]->created_at)->format('d-m-Y') : ''}}</span>
						</div>
					</div>
					<div class="repTextBlock" lang="en">
						A representative will be in contact with you to finalize your order. 
						If you you have any questions, PLEASE CALL @if($data->header_phone1 != null)
                            {{ $data->header_phone1 }}
                        @endif
					</div>
					<div class="orderSummary">
						
						
						
						<input type="hidden" name="itemId" value="15660">
						
						
						
						@php
						$order_details = App\Models\OrderDetail::where('order_id', session('order_id'))->get();
						@endphp
						@foreach($order_details as $od)
						@php
						$product = App\Models\Product::where('id', $od->product_id)->get();
						$product_image = App\ColorImage::where('product_id', $product[0]->id)->orderBy('color_id')->take(1)->first();
						@endphp
						<div class="scDescriptions">
							<div class="col-sm-2 text-center" style="padding: 0;" lang="en">
								<p class="itemTitle" lang="en">
									Item {{ $loop->iteration }}
								</p>
								<img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="port &amp; company® - core blend tee (color)"> 
							</div>
							<div class="col-sm-10" style="padding: 0;">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scTable">
									<tbody><tr><td colspan="4" id="productcodeBox"><span class="productcodebtn" lang="en">ITEM CODE: {{ $product[0]->product_code }}</span></td></tr>
										<tr>
											<td valign="middle" class="productNameID"><b>
												<a href="{{ url('/product', $product[0]->product_slug) }}" lang="en">{{ $product[0]->product_name }}</a>
											</b></td>
											<td valign="middle"><b lang="en">Unit Price</b></td>
											<td valign="middle"><b lang="en">Quantity</b></td>
											<td valign="middle"><b lang="en">Amount</b></td>
										</tr>
										<tr>
											<td lang="en">@isset($product[0]->discount) {{$product[0]->discount}}% @endisset Savings has been applied</td>
											<td lang="en">{!!$product[0]->discount_price ? $product[0]->discount_price : $product[0]->selling_price!!}৳</td>
											<td lang="en">{{$od->total_items}}</td>
											<td lang="en">{!!$product[0]->discount_price ? $od->total_items * $product[0]->discount_price : total_items * $product[0]->selling_price!!}৳</td>
										</tr>
										
										<tr>
											
											
											<td lang="en">Setup Fee</td>
											<td lang="en">{!!$product[0]->setup_fee ? $product[0]->setup_fee : '0'!!}৳</td>
											<td lang="en">1</td>
											<td lang="en">{!!$product[0]->setup_fee ? $product[0]->setup_fee : '0'!!}৳</td>
											
										</tr>
										
										@if($od->item_color)
										@php
										$colors = App\Color::findOrFail($od->item_color);
										@endphp
										<tr>
											<td colspan="4" lang="en">Item Color - {{$colors->color_name}}</td>
										</tr>
										@endif
										
										@if($od->small)
										<tr>
											<td colspan="4" lang="en">Sizes - Small (qty: {{ $od->small}})</td>
										</tr>
										@endif
										@if($od->medium)
										<tr>
											<td colspan="4" lang="en">Sizes - Medium (qty: {{ $od->medium}})</td>
										</tr>
										@endif
										@if($od->large)
										<tr>
											<td colspan="4" lang="en">Sizes - Large (qty: {{ $od->large}})</td>
										</tr>
										@endif
										@if($od->axal)
										<tr>
											<td colspan="4" lang="en">Sizes - XL (qty: {{ $od->axal}})</td>
										</tr>
										@endif
										@if($od->twoxl)
										<tr>
											<td colspan="4" lang="en">Sizes - 2XL (qty: {{ $od->twoxl }})</td>
										</tr>
										@endif
										@if($od->threexl)
										<tr>
											<td colspan="4" lang="en">Sizes - 3XL (qty: {{ $od->threexl }})</td>
										</tr>
										@endif
										@if($od->fourxl)
										<tr>
											<td colspan="4" lang="en">Sizes - 4XL (qty: {{ $od->fourxl }})</td>
										</tr>
										@endif
										<!--///////////////////////////////////////////////////////////////////////////// left chest -->
										@if($od->left_chest)
										<tr>
											<td colspan="4" lang="en">Imprint Location - Left Chest</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_1)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_1)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_2)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_2)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_3)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_3)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_4)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_4)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_5)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_5)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_6)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_6)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_7)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_7)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->left_chest_imprint_color_8)
										@php $colors = App\Color::where('id', $od->left_chest_imprint_color_8)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif
										<!--///////////////////////////////////////////////////////////////////////////// left chest ends -->

										<!--///////////////////////////////////////////////////////////////////////////// full front -->
										@if($od->full_front)
										<tr>
											<td colspan="4" lang="en">Imprint Location - Full Front</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_1)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_1)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_2)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_2)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_3)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_3)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_4)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_4)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_5)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_5)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_6)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_6)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_7)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_7)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_front_imprint_color_8)
										@php $colors = App\Color::where('id', $od->full_front_imprint_color_8)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif
										<!--///////////////////////////////////////////////////////////////////////////// full front ends -->

										<!--///////////////////////////////////////////////////////////////////////////// full Back -->
										@if($od->full_back)
										<tr>
											<td colspan="4" lang="en">Imprint Location - Full Back</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_1)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_1)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_2)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_2)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_3)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_3)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_4)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_4)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_5)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_5)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_6)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_6)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_7)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_7)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->full_back_imprint_color_8)
										@php $colors = App\Color::where('id', $od->full_back_imprint_color_8)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif
										<!--///////////////////////////////////////////////////////////////////////////// full Back ends -->

										<!--///////////////////////////////////////////////////////////////////////////// full Back -->
										@if($od->right_sleeve)
										<tr>
											<td colspan="4" lang="en">Imprint Location - Right Sleeve</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_1)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_1)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_2)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_2)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_3)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_3)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_4)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_4)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_5)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_5)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_6)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_6)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_7)
										@php $colors = App\Color::where('id', $od->right_sleeve_imprint_color_7)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif

										@if($od->right_sleeve_imprint_color_8)
										@php $colors = App\Color::where('id',$od->right_sleeve_imprint_color_8)->firstOrFail(); 
										@endphp
										<tr>
											<td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
										</tr>
										@endif
										<!--///////////////////////////////////////////////////////////////////////////// full Back ends -->
										
										<tr><td colspan="4" style="height: 20px;"></td></tr>
									</tbody></table>
								</div>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="artTable table-responsive"><tbody><tr>
									<td valign="middle" style="width: 188px;">
										<div class="leftOptionBox">
											
											
										</div>
									</td>
									<td valign="middle">
										<a href="{{url('imprintoption')}}/{{session('order_id')}}/{{$product[0]->id}}" class="blueBtn" lang="en">
											Click Here to select Imprint/Artwork option
										</a>
									</td>
									<td align="right" valign="middle">
										<span lang="en">Product SubTotal<label lang="en">{{ ($product[0]->discount_price ? $od->total_items * $product[0]->discount_price : $od->total_items * $product[0]->selling_price) + $product[0]->setup_fee }}</label></span>
									</td>
								</tr></tbody></table>
								<script type="text/javascript">
									$(".artTable td:first-child").width($(".artTable td:first-child .leftOptionBox").width());
								</script>
							</div> 
							@endforeach
							<div class="scDescriptions table-responsive" id="frieghtBox">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scTable">
									<tbody><tr>
										<td rowspan="5" lang="en">If paying via credit card, you will not be charged until you approve the final artwork and order form showing all details and charges.</td>
										
										<td style="height: 0;padding: 0;"><label></label></td>
										
									</tr>
									<tr><td class="rightTitle" lang="en">Tax<label lang="en">0</label></td></tr>
									<tr><td class="rightTitle" lang="en">Shipping Cost<label lang="en">0</label></td></tr>
									<tr><td class="totalBox rightTitle" lang="en">Order Total<label lang="en">{{$orders[0]->order_total}}৳</label></td></tr>
									<tr><td colspan="2" class="lastFrieght rightTitle" lang="en">Freight will be added to your order.</td></tr>
								</tbody></table>
							</div>
						</div>
						<div class="bottom4GrayBlock">
							<div class="col-sm-4 bottomGrayBlock" lang="en">
								<h3 lang="en">Billing Address</h3>
								@isset($user->name)
                                <p lang="en">
                                    {{$user->name}}
                                </p>
                                @endisset 
                                @isset($user->mobile)
                                <p lang="en">
                                    {{$user->mobile}}
                                </p>
                                @endisset 
                                @isset($user->address)
                                <p lang="en">
                                    {{$user->address}}
                                </p>
                                @endisset
							</div>
							<div class="col-sm-4 bottomGrayBlock" lang="en">
								<h3 lang="en">Shipping Address</h3>
								@isset($user->name)
                                <p lang="en">
                                    {{$user->name}}
                                </p>
                                @endisset 
                                @isset($user->mobile)
                                <p lang="en">
                                    {{$user->mobile}}
                                </p>
                                @endisset 
                                @isset($user->address)
                                <p lang="en">
                                    {{$user->address}}
                                </p>
                                @endisset
							</div>
							@php
							$payment_methods = App\PaymentMethod::where('id', $orders[0]->payment_method)->first();
							@endphp
							<div class="col-sm-4 bottomGrayBlock" lang="en">
								<h3 lang="en">Payment Info</h3>
								
								{{$payment_methods->payment_method}}
								
							</div>
						</div>
					</div>
				</div>
			</div></div>
		</div> 
	</div>
	@endsection