@extends('frontend.layouts.master')
@section('title','Category')
@section('content')
<div id="sub-category" class="container">
	
	<ul class="breadcrumb">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li><a href="javascript:void(0);">{{ $categories[0]->category_name }}</a></li>
	</ul>
		<div class="col-sm-6 " id="cattitleLeft" style="width: 239.531px;">
			<div class="cattitle">
				<h1 lang="en">{{ $categories[0]->category_name }}</h1>
				<span lang="en">Extra Savings On Best Selling Items!</span>
			</div>
		</div>
		<div class="col-sm-6 " id="cattitleRight" style="width: 1079.48px; display: block;">
			<div class="col-lg-6 col-sm-12" id="cattitleTop" style="width: 641.47px; padding-top: 0px;" lang="en">
				
				<img src="{{ asset('/staticfile/images/saveupto30.png') }}" class="img-responsive" alt="save up to 30">
				
			</div>
			<div class="col-lg-6 col-sm-12" id="cattitleBot">
				<div class="cattitleright">
					<span lang="en">Lowest Prices Guaranteed&nbsp;-&nbsp;100% Satisfaction Guarantee<br>
					FREE Artwork &amp; Email Proof of Your Imprint & Savings</span>
				</div>	
			</div>
		</div>
		<form action="#" method="post" id="categoryFilterform">
			<input type="hidden" name="pageNum" id="pageNum" value="1"/>
			<input type="hidden" name="subCateId" id="subCateId" value="0" />
			<input type="hidden" name="categoryId" id="categoryId" value="1365" />
			<input type="hidden" name="zipcode" id="zipcode" value="0"/>
			<input type="hidden" name="timeInTransit" id="timeInTransit" value="3" />

			<div id="printArea">
				<div class="col-sm-12"><div class="row">
					<div class="col-sm-3" id="filterbox"><div class="row">


						<div id="filterResultBox">
							<p class="title" id="filterTitle">Filter Your Results</p>


							<div class="filterBox">
								<p class="ftitle">
									Colors<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_color')"/></span>
								</p>
								<div class="filterItemBox" id="filterItemBox_color">
									@foreach($color as $colors)
									<table class="fitem">
										<tr>
											<td align="left">
												<span id="color_{{$colors->id}}" filterName="Color">{{$colors->color_name}}
												</span>
											</td>
											<td align="left">
												<input type="checkbox" class="filter_by_color" aria-label="color" name="color" id="color_{{$colors->id}}" value="{{$colors->id}}" />
											</td>
										</tr>
									</table>
									@endforeach
								</div>
							</div>


							<div class="filterBox">
								<p class="ftitle">
									Top Offers<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_topOffer')"/></span>
								</p>
								<div class="filterItemBox" id="filterItemBox_topOffer">


									<table class="fitem">
										<tr>
											<td align="left">
												<span id="topOffer_9_val" filterName="Top Offer">On-Sale
												</span>
											</td>
											<td align="left">
												<input type="checkbox" aria-label="offer On-Sale" class="on_sale" name="on_sale" id="on_sale" value="1" />
											</td>
										</tr>
									</table>

									<table class="fitem">
										<tr>
											<td align="left">
												<span id="topOffer_3649_val" filterName="Top Offer">Hot</span></td>
												<td align="left">
													<input type="checkbox" aria-label="offer Hot" name="hot_deal" id="hot_deal" class="hot_deal" value="1" />
												</td>
											</tr>
										</table>
									</div>
								</div>

								<div class="filterBox">
									<p class="ftitle">
										Production Time<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_productionTime')"/></span>
									</p>
									<div class="filterItemBox" id="filterItemBox_productionTime">
										@foreach($production_time as $pt)
										<table class="fitem">
											<tr>
												<td align="left"><span id="productionTime_{{$pt->id}}" filterName="Production Time">{{$pt->production_time}}</span>
												</td>
												<td align="left">
													<input class="try" type="checkbox" aria-label="production_time" name="production_time" id="production_time_{{$pt->id}}" value="{{$pt->id}}" />
												</td>
											</tr>
										</table>
										@endforeach
									</div>
								</div>

								<div class="filterBox">
									<p class="ftitle">
										Imprint Method<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_imprintMethod')"/></span>
									</p>
									<div class="filterItemBox" id="filterItemBox_imprintMethod">
										@foreach($imprint_method as $im)
										<table class="fitem">
											<tr>
												<td align="left">
													<span id="imprintMethod_Embroidery_val" filterName="Imprint Method">{{$im->imprint_method}}</span>
												</td>
												<td align="left">
													<input type="checkbox" class="imprint_method" aria-label="filter imprint method Embroidery" name="imprint_method" id="imprint_method_{{$im->id}}" value="{{$im->id}}"/>
												</td>
											</tr>
										</table>
										@endforeach
									</div>
								</div>


								<div class="filterBox">
									<p class="ftitle">
										Brand<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_brand')"/></span>
									</p>
									<div class="filterItemBox" id="filterItemBox_brand">
										@foreach($brand as $brands)
										<table class="fitem">
											<tr>
												<td align="left">
													<span id="brand_3070_val" filterName="Brand">{{$brands->brand_name}} </span></td>
													<td align="left">
														<input type="checkbox" aria-label="filter brand Alternative " name="brand" id="brand_{{$brands->id}}" class="brand" value="{{$brands->id}}" />
													</td>
												</tr>
											</table>
											@endforeach
										</div>
									</div>

									<div class="filterBox">
										<p class="ftitle">
											Fit
											<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_1')"/></span>
										</p>
										<div class="filterItemBox" id="filterItemBox_1">
											@foreach($fit as $fits)
											<table class="fitem">
												<tr>
													<td align="left">
														<span id="1_1_val" filterName="Fit">{{$fits->fit_name}}</span>
													</td>
													<td align="left">
														<input type="checkbox" aria-label="filter Fit Men's" name="fit" value="{{$fits->id}}" id="fit_{{$fits->id}}" class="fit">
													</td>
												</tr>
											</table>
											@endforeach
										</div>
									</div>


									<div class="filterBox">
										<p class="ftitle">
											Style
											<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_2')"/></span>
										</p>
										<div class="filterItemBox" id="filterItemBox_2">
											@foreach($style as $styles)
											<table class="fitem">
												<tr>
													<td align="left"><span id="2_7_val" filterName="Style">{{$styles->style_name}}</span>
													</td>
													<td align="left">
														<input type="checkbox" aria-label="filter Style Chest Pocket" name="pstyle" value="{{$styles->id}}" class="pstyle" id="pstyle_{{$styles->id}}">
													</td>
												</tr>
											</table>
											@endforeach
										</div>
									</div>


									<div class="filterBox">
										<p class="ftitle">
											Fabric
											<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_3')"/></span>
										</p>
										<div class="filterItemBox" id="filterItemBox_3">
											@foreach($fabric as $fabrics)
											<table class="fitem">
												<tr>
													<td align="left">
														<span id="3_12_val" filterName="Fabric">{{$fabrics->fabric_name}}</span>
													</td>
													<td align="left">
														<input type="checkbox" aria-label="filter Fabric Cotton" name="fabric" class="fabric" value="{{$fabrics->id}}" id="fabric_{{$fabrics->id}}">
													</td>
												</tr>
											</table>
											@endforeach
										</div>
									</div>


									<div class="filterBox">
										<p class="ftitle">
											Apparel Sizing
											<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_4')"/></span>
										</p>
										<div class="filterItemBox" id="filterItemBox_4">
											@foreach($size as $sizes)
											<table class="fitem">
												<tr>
													<td align="left">
														<span id="4_14_val" filterName="Size">{{$sizes->size}}</span>
													</td>
													<td align="left">
														<input type="checkbox" class="size" name="size" value="{{$sizes->id}}" id="size_{{$sizes->id}}">
													</td>
												</tr>
											</table>
											@endforeach
										</div>
									</div>

									<div class="filterBox">
										<p class="ftitle">
											Sleeve Length
											<span><img src="{{ asset('staticfile/images/arrow_up.png') }}" alt="arrow up" onclick="shrinkArrow(this,'filterItemBox_5')"/></span>
										</p>
										<div class="filterItemBox" id="filterItemBox_5">
											@foreach($sleeve_length as $sl)
											<table class="fitem">
												<tr>
													<td align="left">
														<span id="5_20_val" filterName="Sleeve Length">{{$sl->sleeve_length}}</span></td>
														<td align="left">
															<input type="checkbox" aria-label="filter Sleeve Length Long Sleeve" name="sleeve_length" value="{{$sl->id}}" id="sleeve_length_{{$sl->id}}" class="sleeve_length">
														</td>
													</tr>
												</table>
												@endforeach
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="col-sm-9" id="subcategory-productbox"><div class="row">
								<div class="pagingtop catpagingtop">
									<table width="100%" cellpadding=0 cellspacing=0><tr>
										<td align="left" nowrap="nowrap">Sort By</td>
										<td align="left">
											<select class="searchBox" aria-label="Sort By" id="sortBy">
												<option value="0">Sort By</option>
												<option value="best_selling">Best Selling</option>
												<option value="newest" >Newest</option>
												<option value="minimum_quantity" >Minimum Quantity</option>
												<option value="production_time" >Production Time</option>
												<option value="product_name" >Product Name</option>
											</select>
											<select class="searchBox" aria-label="Select Price" id="sortByPrice">
												<option value="0">Price</option>
												<option value="1">Low to High</option>
												<option value="2">High to Low</option>
											</select>
										</td>
										<td align="center">
											<div class="input-group" id="filtersearch">
												<input type="text" class="csearch" aria-label="Search within Results" id="filterkeyword" placeholder="Search within Results">
												<span class="input-group-btn" onclick="filterkeyword()">
													<img src="{{ asset('staticfile/images/filter_searchbtn.png') }}" alt="search">
												</span>
											</div>
										</td>
									<!-- <td align="right">
										<span id="items">Items per page</span>
										<select name="displayCount" aria-label="Select Display Count" id='displayCount' class="searchBox sort-item" onchange="submitSearchForm('','1','categoryFilterform')">
											<option value="52" selected >52</option>
											<option value="104"  >104</option>
											<option value="500" >See all</option>
										</select>
									</td> -->
								</tr></table>
							</div>
							<table width="100%"><tr>
								<td align="left" valign="middle">

								</td>
								<td align="right" valign="middle" nowrap="nowrap">

									<div class="shownpagetop" id="filterpagetop">
										{{ $products->links() }}
										<!-- <div class="link">
											<a href="javascript:void(0);">[</a>



											<a href="javascript:void();" class="active">1</a>



											<a href="javascript:submitSearchForm('','2','categoryFilterform')">2</a>



											<a href="javascript:submitSearchForm('','3','categoryFilterform')">3</a>



											<a href="javascript:submitSearchForm('','2','categoryFilterform')">&gt;&gt;</a>

											<a href="javascript:void(0);">]</a>
										</div> -->
									</div>

								</td>
							</tr></table>
							<div id="subcategory-product updateDiv">
								@foreach($products as $row)
								@php
								$brand = App\Models\Brand::where('id', $row->brand_id)->first();
								$imprint_method = App\ImprintMethod::where('id', $row->imprint_method)->first();
								$product_image = App\ColorImage::where('product_id', $row->id)->orderBy('color_id')->take(1)->first();
								@endphp
								<div class="col-lg-3 col-md-4 col-sm-6 subItemBox">
									<div class="subcategory-box subcategory-filter-box">
										@if($row->trend_product == 1)
										<img class="icon img-responsive" src="{{ asset('staticfile/images/7.png') }}" alt="Product Condition Icon">
										@endif
										<a href="{{ url('product') }}/{{ $row->product_slug }}" class="productImgA">
											<img src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="{{ $row->product_name }}">
										</a>

										@if(!empty($brand))
										<img src="{{asset($brand->brand_logo)}}" class="img-responsive valuemark" alt="Product Logo Img">
										@endif
										<a href="{{ url('/product') }}/{{ $row->product_slug }}">
											<p class="skup">#{{$row->id}}</p>
											<p class="detailp">{{$row->product_name}}</p>
											@if(!empty($imprint_method))
											<p class="apparelp">{{$imprint_method->imprint_method}}</p>
											@endif
										</a>
										<!-- <p class="low">As low as $3.71</p> -->
										<p class="low">{{$row->selling_price }}৳</p>
										<p class="minqtyp">

											Minimum Quantity: {{$row->minimum_quantity }}
										</p>
									</div>
								</div>
								@endforeach
							</div>

							<div class="shownpagetop" style="width:100%;">
								{{ $products->links() }}
								<!-- <label>Showing 1 - 52 of 153</label> -->

								<!-- <div class="link">
									<a href="javascript:void(0);">[</a>



									<a href="javascript:void();" class="active">1</a>



									<a href="javascript:submitSearchForm('','2','categoryFilterform')">2</a>



									<a href="javascript:submitSearchForm('','3','categoryFilterform')">3</a>



									<a href="javascript:submitSearchForm('','2','categoryFilterform')">&gt;&gt;</a>

									<a href="javascript:void(0);">]</a>
								</div> -->
							</div>

						</div></div>
					</div></div>
				</div>
			</form>
		</div>
		@endsection