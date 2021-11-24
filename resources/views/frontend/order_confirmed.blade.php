@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
@php
$orders = App\Models\Order::find(session('order_id'));
@endphp
<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider">
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-shopping-cart"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">1. My Cart</h3>
                        </div>
                    </div>
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">2. Checkout</h3>
                        </div>
                    </div>
                    <div class="col active">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2 las la-check-circle"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">5. Confirmation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container text-left">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="card shadow-sm border-0 rounded">
                    <div class="card-body">
                        <div class="text-center py-4 mb-4">
                            <i class="la la-check-circle la-3x text-success mb-3"></i>
                            <h1 class="h3 mb-3 fw-600">Thank You for Your Order!</h1>
                            <h2 class="h5">Order Code: <span class="fw-700 text-primary">{{session('order_id')}}</span></h2>
                            <p class="opacity-70 font-italic">A copy or your order summary has been sent to @isset($user->email){{$user->email}}@endisset</p>
                        </div>
                        <div class="mb-4">
                            <h5 class="fw-600 mb-3 fs-17 pb-2">Order Summary</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="w-50 fw-600">Order Code:</td>
                                                <td>{{session('order_id')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 fw-600">Customer Name:</td>
                                                <td>@isset($user->name){{$user->name}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 fw-600">Email:</td>
                                                <td>@isset($user->email){{$user->email}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 fw-600">Shipping Address:</td>
                                                <td>@isset($user->address){{$user->address}}@endisset</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="w-50 fw-600">Order Date:</td>
                                                <td>{{ \Carbon\Carbon::parse($orders->created_at)->format('d M Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 fw-600">Order Status:</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr>
                                                <td class="w-50 fw-600">Total order amount:</td>
                                                <td>৳{{$orders->order_total}}</td>
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
                                        $orders = App\Models\OrderDetail::where('order_id', session('order_id'))->get();
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
                            $order1 = App\Models\Order::find(session('order_id'));
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
                                                    <span class="fw-600">৳{{$order1->order_total_selling}}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Circle Shipping Charge</th>
                                                <td class="text-right">
                                                    <span class="fw-600">৳{{$order1->shipping_charge}}</span>
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
                                                    <strong><span>৳{{$order1->order_total_selling - ($order1->order_total + $order1->shipping_charge)}}</span></strong>
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
</section>
@endsection