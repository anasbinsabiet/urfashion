@extends('backend.layouts.master')
@section('title','New Order')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Order</li>
    </ol>
    <h1 class="page-header">Order</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">New Order</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body table-responsive">
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <!-- <th>SL</th> -->
                                <th class="text-nowrap">Order No.</th>
                                <th class="text-nowrap">Date</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Address</th>
                                <th class="text-nowrap">Amount</th>
                                
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            @php
                            $payment_methods = App\PaymentMethod::where('id', $row->payment_method)->take(1)->first();
                            @endphp
                            <tr class="odd gradeX">
                                <!-- <td>{{$loop->iteration}}</td> -->
                                <td>{{$row->id}}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d M Y')}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->mobile}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->order_total}}</td>
                                
                                <td>
                                <select class="btn btn-primary btn-xs" name="o_status" id="o_status" style="margin-right: 10px;">
                                    <option value="0" @if( $row->status == 0 ) selected @endif>Pending</option>
                                    <option value="1" @if( $row->status == 1 ) selected @endif>Payment Accept</option>
                                    <option value="2" @if( $row->status == 2 ) selected @endif>Progress Delivery</option>
                                    <option value="3" @if( $row->status == 3 ) selected @endif>Delivered</option>
                                    <option value="4" @if( $row->status == 4 ) selected @endif>Cancel</option>
                                </select>
                                <input type="hidden" name="order_id" class="order_id" value="{{$row->id}}">
                                    <!-- @if($row->status == 0)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($row->status == 1)
                                    <span class="badge badge-info">Payment Accept</span>
                                    @elseif($row->status == 2)
                                    <span class="badge badge-info">Progress Delivery</span>
                                    @elseif($row->status == 3)
                                    <span class="badge badge-success">Delivered</span>
                                    @elseif($row->status == 4)
                                    <span class="badge badge-danger">Cancel</span>
                                    @endif -->
                                </td>
                                <td>
                                    <a href="{{route('order.details',$row->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
                                    <a href="{{url('admin/order/invoice')}}/{{$row->id}}" class="btn btn-success btn-xs"><i class="fa fa-download"></i> Invoice</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection