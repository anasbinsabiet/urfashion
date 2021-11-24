@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div class="myaccount">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				 <ul class="breadcrumb">
	             	<li><a href="{{url('/')}}" lang="en">Home</a></li>
	             	<li><a href="{{url('/myaccount')}}" lang="en">My Account</a></li>
					<li><a href="javascript:void(0);" lang="en">Order History</a></li>
	             </ul>
			 </div>      
		</div>
	</div>	
	<div class="container">
		<div class="col-sm-12"><div class="row">
			<div class="order_status">
				<h1 lang="en">Order History</h1>
					@if(count($orders) > 0)
					<table border="0" cellspacing="0" cellpadding="0" width="100%">
						<tbody><tr>
							<td align="center" lang="en">Order#</td>
							<td align="center" lang="en">Order Date</td>
							<td align="center" lang="en"># of Items</td>
							<td align="right" lang="en">Order Total</td>
							<td></td>
						</tr>
							@foreach($orders as $order)
							<tr>
								<td align="center">
									<a href="{{url('orderdetail', $order->id)}}" lang="en">{{$order->id}}</a>
								</td>
								<td align="center" lang="en">{{ \Carbon\Carbon::parse($order->created_at)->format('d-M-Y')}}</td>
								<td align="center" lang="en">{{$order->quantity_total}}</td>
								<td align="right" lang="en">{{$order->order_total}}৳</td>

								<td align="center">
									<a href="{{url('orderdetail', $order->id)}}" lang="en">View Details/Track Your Order</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@else
					<center><h4>Your order list is empty.</h4><br/>
						<a href="{{url('/product')}}" class="contShoppingBtn" lang="en" style="    background: red;color: #fff;padding: 5px 10px;">Continue Shopping</a></center> 
					@endif
			</div>
		</div>
	</div></div>
</div>
@endsection