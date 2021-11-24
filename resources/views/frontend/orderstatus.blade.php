@extends('frontend.layouts.master')
@section('title','My Order List')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.sidenav')
            <div class="aiz-user-panel">
                <div class="card">
                    <form id="sort_orders" action="" method="GET">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">Orders</h5>
                            </div>
                        </div>
                    </form>
                    <div class="card-body p-3">
                        @if(count($orders) > 0)
                        <table class="table aiz-table mb-0 footable footable-1 breakpoint breakpoint-lg" id="myTable">
                            <thead>
                                <tr class="footable-header">
                                    <!--<th data-breakpoints="lg">Num. of Products</th>-->
                                    <!-- <th class="footable-first-visible" style="display: table-cell;">#</th> -->
                                    <th style="display: table-cell;">Order Code</th>
                                    <th data-breakpoints="lg">Mobile No.</th>
                                    <th data-breakpoints="lg" style="display: none;">Courier</th>
                                    <th data-breakpoints="md" style="display: table-cell;">Circle Price</th>
                                    <th data-breakpoints="md" style="display: table-cell;">Selling Price</th>
                                    <th data-breakpoints="md" style="display: table-cell;">Earnings</th>
                                    <th style="display: table-cell;">Order Status</th>
                                    <th data-breakpoints="lg" style="display: none;">Payment Status</th>
                                    <th class="text-right footable-last-visible" style="display: table-cell;">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <!-- <td class="footable-first-visible" style="display: table-cell;">
                                    {{$loop->iteration}}
                                    </td> -->
                                    <td style="display: table-cell;">
                                        <a href="{{url('orderdetail', $order->id)}}">{{$order->id}}</a>
                                    </td>
                                    <td style="display: table-cell;">
                                    {{\Auth::user()->mobile}}
                                    </td>
                                    <td style="display: table-cell;">
                                        ৳{{$order->order_total ? $order->order_total : '0'}}
                                    </td>
                                    <td style="display: table-cell;">
                                        ৳{{$order->order_total_selling ? $order->order_total_selling : '0'}}
                                    </td>
                                    <td style="display: table-cell;">
                                        ৳{{$order->order_total_selling - $order->order_total}}
                                    </td>
                                    <td style="display: table-cell;">
                                        @if($order->status == 0)
                                        <span class="badge badge-warning w-auto">Pending</span>
                                        @elseif($order->status == 1)
                                        <span class="badge badge-info w-auto">Processing</span>
                                        @elseif($order->status == 2)
                                        <span class="badge badge-info w-auto">Incourier</span>
                                        @elseif($order->status == 3)
                                        <span class="badge badge-success w-auto">Delivered</span>
                                        @elseif($order->status == 4)
                                        <span class="badge badge-warning w-auto">Return</span>
                                        @elseif($order->status == 5)
                                        <span class="badge badge-danger w-auto">Cancel</span>
                                        @endif
                                    </td>
                                    <td style="display: none;">
                                        <span class="badge badge-inline badge-success">Paid</span>
                                    </td>
                                    <td class="text-right footable-last-visible" style="display: table-cell;">
                                        <a href="{{url('orderdetail', $order->id)}}" class="btn btn-soft-info btn-icon btn-circle btn-sm" target="_blank" title="Order Details">
                                            <i class="las la-eye"></i>
                                        </a>
                                        <a href="{{url('admin/order/invoice')}}/{{$order->id}}" class="btn btn-soft-warning btn-icon btn-circle btn-sm" title="Download Invoice">
                                            <i class="las la-download"></i>
                                        </a>
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

            </div>
        </div>
        <!-- /////////////////////////////////////////////test starts -->
        <!-- /////////////////////////////////////////////test ends -->
    </div>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</section>
@endsection