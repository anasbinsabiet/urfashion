@extends('frontend.layouts.master')
@section('title','Order Details')
@section('content')
<div class="myaccount" id="indexc">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				 <ul class="breadcrumb">
	             	<li><a href="/" lang="en">Home</a></li>
	             	<li><a href="/customer/myaccount.jsp" lang="en">My Account</a></li>
	             	<li><a href="/transaction/orderstatus.jsp" lang="en">Order History</a></li>
	             	<li><a href="javascript:void(0);" lang="en">Order Details</a></li>
	             </ul>
			 </div>      
		</div>
	</div>	
	<div class="container">
		<div class="col-sm-12"><div class="row">
			<div class="orderingDetailsBlock">
				<h1 lang="en">Order Details</h1>
				<ul>
					<li>
						<h3 lang="en">Order # <span lang="en">S224901</span></h3>
						<div class="innerBlock">
							<p lang="en">Order Date: <strong lang="en">09-16-2021</strong></p>
							<p lang="en">
								Order Status:
								<strong lang="en">
									
										Pending
										
										
										
										
									
								</strong>
							</p>
							<p lang="en">
								Paid By:
								<strong lang="en">
									
										NET30
									
								</strong>
							</p>
							<p lang="en">Shipping Method: <strong lang="en">UPS Ground</strong></p>
						</div>
					</li>
					<li>
						<h3 lang="en">Billing Address</h3>
						<div class="innerBlock">
							
								<p lang="en">Md Anisur Rahaman</p>
								<p lang="en">Biplob Digital</p>
								<p lang="en">Tejkunipara</p>
								
									<p lang="en">Farmgate</p>
								
								<p lang="en">
									Dhaka,
								   	IL,
								   	12151
								</p>
							
						</div>
					</li>
					<li>
						<h3 lang="en">Shipping Address</h3>
						<div class="innerBlock">
							
								<p lang="en">Md Anisur Rahaman</p>
								<p lang="en">Biplob Digital</p>
								<p lang="en">Tejkunipara</p>
								
									<p lang="en">Farmgate</p>
								
								<p lang="en">
									Dhaka,
									IL,
									12151
								</p>
							
						</div>
					</li>
				</ul>
				<div class="orderItems">
					
						<div style="border:1px solid #dcdbd9;margin:15px 0 0;">
							
							
								
								
								
								
		           				
								
								<table class="orderItem" border="0" cellspacing="0" cellpadding="0" width="100%">
									<tbody><tr>
										<th class="td164 td240"></th>
										<th class="td100" lang="en">Item #</th>
										<th lang="en">Item Name</th>
										<th class="td80" lang="en">Unit Price</th>
										<th class="td100 text-right" lang="en">Quantity</th>
										<th class="td120 paddingright10" lang="en">Total</th>
									</tr>
									<tr>	
										<td class="td164 td240 noboder" rowspan="11">
											
											
												<a href="/catalog/product.jsp?product_id=15660" lang="en"><img src="/objects/catalog/product/multiimages/15660/Grey_Charcoal/154_charcoal.jpg" alt="port &amp; company® - core blend tee (color)"></a>
											
											<div class="artworkBox" lang="en">
												
												
													
														<b lang="en">
															Imprint Options:&nbsp;&nbsp;
					                       			 		
																Text Imprint
																
																
																
															
														</b>
														 
															<br>Line 1 t1<br> 
														
													
													
												
												
													
														<a href="/misc/artwork.jsp?order_id=224901&amp;line_id=564900&amp;product_id=15660" target="_blank" class="artworkImg uploadArtLink" lang="en">Upload Artwork Here</a>
													
												
											</div>
										</td>
										<td class="td100">
											
												<a href="/catalog/product.jsp?product_id=15660" style="color: blue;font-size: 15px;font-family: OpenSansBold;" lang="en">16612C</a> 
											
										</td>
										<td class="value" lang="en">Port &amp; Company® - Core Blend Tee (Color)</td>
										<td class="td80" lang="en">$7.14</td>
										<td class="td100 text-right" lang="en">24</td>
										<td class="td120 paddingright10" lang="en">$171.36</td>
									</tr>
									
										<tr>
											
											
												<td colspan="2" lang="en">Setup Fee</td> 
												<td class="td80" lang="en">$30.00</td> 
												<td class="td100 text-right" lang="en">1</td>
												<td class="td120 paddingright10" lang="en">$30.00</td>
											
										</tr>
									
									
										<tr>
											
											
												
													<td colspan="5" lang="en">Item Color- <span style="font-family: SourceSansProItalic;" lang="en">Charcoal</span></td>
												
												
											
										</tr>
									
										<tr>
											
											
												
													<td colspan="5" lang="en">Sizes- <span style="font-family: SourceSansProItalic;" lang="en">Small (qty: 24)</span></td>
												
												
											
										</tr>
									
										<tr>
											
											
												
													<td colspan="5" lang="en">Imprint Location- <span style="font-family: SourceSansProItalic;" lang="en">Left Chest</span></td>
												
												
											
										</tr>
									
										<tr>
											
											
												
													<td colspan="5" lang="en">Left Chest Imprint Colors- <span style="font-family: SourceSansProItalic;" lang="en">Green PMS 355C</span></td>
												
												
											
										</tr>
									
										<tr>
											
											
												
												
													<td colspan="3" class="tdboder" lang="en">Packaging Option- <span style="font-family: SourceSansProItalic;" lang="en">Folding &amp; Polybag</span></td> 
													<td class="td100 text-right tdboder"></td> 
													<td class="td120 paddingright10 tdboder" lang="en">$24.00</td>
												
											
										</tr>
									
									<tr>
										<td colspan="3" rowspan="4" style="text-align: center;" class="noboder">
											
											
												<a href="javascript:reorder('1','564900','/transaction/order/orderdetail.jsp?order_id=9KAA519KA0KAD9K')" class="reorderbtn" lang="en">REORDER</a>
											
										</td>
										<td colspan="2" class="colspan paddingright10 noboder" lang="en">Sub Total:<span lang="en">$225.36</span></td>
									</tr>
									<tr><td colspan="2" class="colspan paddingright10 noboder" lang="en">Tax:<span lang="en">$.00</span></td></tr>
									<tr><td colspan="2" class="colspan paddingright10 noboder" lang="en">Shipping Cost:<span lang="en">$.00</span></td></tr>
									<tr><td colspan="2" class="colspan paddingright10 noboder" lang="en">Total:<span lang="en">$225.36</span></td></tr>
								</tbody></table>
							
						</div>
					
				</div>
			</div>
		</div></div>
	</div>
</div>
@endsection