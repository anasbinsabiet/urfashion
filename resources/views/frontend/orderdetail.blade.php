@extends('frontend.layouts.master')
@section('title','My Order List')
@section('content')
<section class="py-5">
	<div class="container">
		<div class="d-flex align-items-start">
			@include('frontend.sidenav')
			<div class="aiz-user-panel">

				<div class="card">
					<div class="card-body p-3">
						<div class="mb-4">
							<h5 class="fw-600 mb-3 fs-17 pb-2">Order Summary</h5>
							<div class="row">
								<div class="col-md-6">
									<table class="table">
										<tbody>
											<tr>
												<td class="w-50 fw-600">Order Code:</td>
												<td>{{$orders[0]->id}}</td>
											</tr>
											<tr>
												<td class="w-50 fw-600">Customer Name:</td>
												<td>{{$orders[0]->name}}</td>
											</tr>
											<tr>
												<td class="w-50 fw-600">Email:</td>
												<td>{{$orders[0]->email}}</td>
											</tr>
											<tr>
												<td class="w-50 fw-600">Shipping Address:</td>
												<td>{{$orders[0]->address}}</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-md-6">
									<table class="table">
										<tbody>
											<tr>
												<td class="w-50 fw-600">Order Date:</td>
												<td>{{ \Carbon\Carbon::parse($orders[0]->created_at)->format('d M Y')}}</td>
											</tr>
											<tr>
												<td class="w-50 fw-600">Order Status:</td>
												<td>Pending</td>
											</tr>
											<tr>
												<td class="w-50 fw-600">Total order amount:</td>
												<td>৳{{$orders[0]->order_total}}</td>
											</tr>
											<!-- <tr>
                                                <td class="w-50 fw-600">Shipping:</td>
                                                <td>Flat shipping rate</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 fw-600">Payment method:</td>
                                                <td>Cash on delivery</td>
                                            </tr> -->
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div>
                            <h5 class="fw-600 mb-3 fs-17 pb-2">Order Details</h5>
                            <div>
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="30%">Product</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Circle Price</th>
                                            <th class="text-right">Selling Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $orders = App\Models\OrderDetail::where('order_id', $orders[0]->id)->get();
                                        @endphp
                                        @foreach($orders as $row)
                                        @php
                                        $product_image = App\ColorImage::where('product_id', $row->product_id)->orderBy('color_id')->take(1)->first();
                                        @endphp
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="https://circle.com.bd/product/Screen-Print-Saree-SAR646" target="_blank" class="text-reset">
                                                {{$row->product->product_name}}
                                                </a>
                                            </td>
                                            <td>
                                            {{$row->size}}
                                            </td>
                                            <td>
                                            {{$row->quantity}}
                                            </td>
                                            <td>
                                                {{$row->product->discount_price ? $row->product->discount_price : $row->product->selling_price}}৳
                                            </td>
                                            <td class="text-right">{{$row->selling_price}}৳</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                            @php
                            $order1 = App\Models\Order::find($order_id);
                            @endphp
                                <div class="col-xl-5 col-md-6 ml-auto mr-0">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Total Circle Price</th>
                                                <td class="text-right">
                                                    <span class="fw-600">৳{{$order1->order_total}}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Total Selling Price</th>
                                                <td class="text-right">
                                                    <span class="fw-600">৳{{$order1->order_total_selling}}
													</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Delivery Charge</th>
                                                <td class="text-right">
                                                    <span class="fw-600">৳{{$order1->shipping_charge}}
													</span>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <th>Customer Shipping Charge</th>
                                                <td class="text-right">
                                                    <span class="fw-600">৳150</span>
                                                </td>
                                            </tr> -->
                                            <tr>
                                                <th><span class="fw-600">Your Earnings</span></th>
                                                <td class="text-right">
                                                    <strong><span>৳{{ $order1->order_total_selling - ($order1->order_total + $order1->shipping_charge)}}
													</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</section>
@endsection