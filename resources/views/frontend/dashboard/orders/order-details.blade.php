@extends('frontend.dashboard.dashboard-master')
@section('title','Order Details')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Order Details <a href="{{route('user.orders')}}" class="btn btn-primary btn-sm float-right">My Orders</a></h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <table class="table table-bordered table-striped table-sm">
                    <tr>
                        <th colspan="1" class="text-center p-3">
                            <h5>Billing Information</h5>
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th width="25">Name</th>
                        <td>{{$order->name}}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{$order->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$order->address}}</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>{{$order->payment_method}}</td>
                    </tr>
                </table>

                <table class="table table-bordered table-striped table-sm">
                    <tr>
                        <th colspan="2" class="p-3">
                            <h5>Order Details</h5>
                        </th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SL</th>
                        {{-- <th>Image</th> --}}
                        <th>Product</th>
                        <th>Qty & Price</th>
                    </tr>
                    @foreach($order->orderDetails as $orderDetail)
                    @php
                        $subtotal = $orderDetail->qty * $orderDetail->singleprice;
                    @endphp
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{asset($orderDetail->product_image)}}" alt="image" width="30"> {{$orderDetail->product_name}}</td>
                        {{-- <td>{{$orderDetail->product_name}} </td> --}}
                        <td>{{$orderDetail->qty}} x {{$orderDetail->singleprice}} = {{$subtotal}} Tk</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Grand Total</th>
                        <td>{{$order->total}} Tk</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection