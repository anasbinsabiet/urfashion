@extends('backend.layouts.master')
@section('title','Order Details')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item">Order</li>
        <li class="breadcrumb-item active">Order Details</li>
    </ol>
    <h1 class="page-header">Order</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Order Details</h4>
                    <div class="panel-heading-btn">
                        <select class="btn btn-primary" name="o_status" id="o_status" style="margin-right: 10px;">
                            <option value="0" @if( $order->status == 0 ) selected @endif>Status - Pending</option>
                            <option value="1" @if( $order->status == 1 ) selected @endif>Status - Payment Accept</option>
                            <option value="2" @if( $order->status == 2 ) selected @endif>Status - Progress Delivery</option>
                            <option value="3" @if( $order->status == 3 ) selected @endif>Status - Delivered</option>
                            <option value="4" @if( $order->status == 4 ) selected @endif>Status - Cancel</option>
                        </select>
                        <input type="hidden" name="order_id" id="order_id" value="{{$order->id}}">
                        <a href="{{url('admin/order/invoice')}}/{{$order->id}}" class="btn btn-success"><i class="fa fa-pdf"></i> Generate Invoice</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-3">Billing Information :</h4>
                            <table class="table borderless table-striped">
                                <tr>
                                    <th style="width: 30%;">Name</th>
                                    <td>{{$order->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$order->email}}</td>
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
                                    <th>District</th>
                                    <td>{{$order->district}}</td>
                                </tr>
                                <tr>
                                    <th>Division</th>
                                    <td>{{$order->Division}}</td>
                                </tr>
                                <tr>
                                    <th>order_note</th>
                                    <td>{{$order->order_note}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-3">Payment Details :</h4>
                            <table class="table borderless table-striped">
                                <tr>
                                    <th>Date</th>
                                    <td> {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y')}}</td>
                                </tr>
                                <tr>
                                    <th>Circle Price</th>
                                    <td>{{$order->order_total}} ({{$order->order_charge_status}} - {{$order->paid_amount}})</td>
                                </tr>
                                <tr>
                                    <th>Selling Price</th>
                                    <td>{{$order->order_total_selling}}</td>
                                </tr>
                                <tr>
                                    <th>Shipping Charge</th>
                                    <td>{{$order->shipping_charge}} ({{$order->delivery_charge_status}})</td>
                                </tr>
                                <tr>
                                    <th>Quantity Total</th>
                                    <td>{{$order->quantity_total}}</td>
                                </tr>
                                <tr>
                                    <th>Grand Total</th>
                                    <td>{{$order->order_total}}</td>
                                </tr>
                                
                                <!-- <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($order->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                        @elseif($order->status == 1)
                                        <span class="badge badge-info">Payment Accept</span>
                                        @elseif($order->status == 2)
                                        <span class="badge badge-info">Progress Delivery</span>
                                        @elseif($order->status == 3)
                                        <span class="badge badge-success">Delivered</span>
                                        @elseif($order->status == 4)
                                        <span class="badge badge-danger">Cancel</span>
                                        @endif
                                    </td>
                                </tr> -->
                            </table>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">

                            <h4 class="mb-3">Products :</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-td-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th class="text-nowrap">SKU</th>
                                            <th class="text-nowrap">Image</th>
                                            <th class="text-nowrap">Name</th>
                                            <th class="text-nowrap">Size</th>
                                            <th class="text-nowrap">Unit Cost</th>
                                            <th class="text-nowrap">Quantity</th>
                                            <th class="text-nowrap">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $row)
                                        @php
                                        $product_image = App\ColorImage::where('product_id', $row->product_id)->orderBy('color_id')->take(1)->first();
                                        @endphp
                                        <tr class="odd gradeX">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$row->product->product_code}}</td>
                                            <td><img style="width: 100px;" src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image"></td>
                                            <td>{{$row->product->product_name}}</td>
                                            <td>{{$row->size}}</td>
                                            <td>{{$row->product->discount_price}}</td>
                                            <td>{{$row->quantity}}</td>
                                            <td>{{$row->product->discount_price * $row->quantity}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row my-4">
                        @if($order->status == 0)
                        <div class="col-md-6">
                            <a id="order_status" href="{{route('order.payment.cancel',$order->id)}}" class="btn btn-danger btn-block"><i class="fa fa-times"></i> Cancel</a>
                        </div>
                        <div class="col-md-6">
                            <a id="order_status" href="{{route('order.payment.accept',$order->id)}}" class="btn btn-info btn-block"><i class="fa fa-check"></i> Payment Accept</a>
                        </div>
                        @elseif($order->status == 1)
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <a id="order_status" href="{{route('order.delivery.progress',$order->id)}}" class="btn btn-primary btn-block"><i class="fa fa-check"></i> Progress Delivery</a>
                        </div>
                        @elseif($order->status == 2)
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <a id="order_status" href="{{route('order.delivery.done',$order->id)}}" class="btn btn-success btn-block"><i class="fa fa-check"></i> Delivery Done</a>
                        </div>
                        @elseif($order->status == 3)
                        <div class="col">
                            <div class="alert alert-success  text-center" style="font-size: 16px;">This Product are successfully Delivered</div>
                        </div>
                        @elseif($order->status == 4)
                        <div class="alert alert-danger">This product are not valid, It's Canceled !</div>
                        @endif
                    </div> -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection