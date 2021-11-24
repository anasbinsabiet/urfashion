@extends('backend.layouts.master')
@section('title','Edit Payment Method')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('paymentmethod.index')}}">Payment Method</a></li>
        <li class="breadcrumb-item active">Edit Payment Method</li>
    </ol>
    <h1 class="page-header">Payment Method</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Payment Method</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('paymentmethod.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-tags"></i> Payment Method List</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{route('paymentmethod.update',$data->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Payment Method</label>
                                    <input type="text" name="payment_method" value="{{$data->payment_method}}" placeholder="Payment Method Name" class="form-control">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('payment_method'))?($errors->first('payment_method')):''}}</div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection