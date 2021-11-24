@extends('backend.layouts.master')
@section('title','Edit Deliver Charge')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('shippingmethod.index')}}">Deliver Charge</a></li>
        <li class="breadcrumb-item active">Edit Deliver Charge</li>
    </ol>
    <h1 class="page-header">Deliver Charge</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Deliver Charge</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('shippingmethod.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-tags"></i> Deliver Charge List</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{route('shippingmethod.update',$data->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Quantity from</label>
                                    <select name="quantity_from" class="form-control">
                                        <option value="1" @isset($data->quantity){{$data->quantity == '1' ? 'selected' : ''}}@endisset>1</option>
                                        <option value="4" @isset($data->quantity){{$data->quantity == '4' ? 'selected' : ''}}@endisset>4</option>
                                        <option value="11" @isset($data->quantity){{$data->quantity == '11' ? 'selected' : ''}}@endisset>11</option>
                                        <option value="31" @isset($data->quantity){{$data->quantity == '31' ? 'selected' : ''}}@endisset>31</option>
                                        <option value="101" @isset($data->quantity){{$data->quantity == '101' ? 'selected' : ''}}@endisset>101</option>
                                    </select>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('quantity'))?($errors->first('quantity')):''}}</div>
                                </div>
                                <div class="form-group">
                                    <label for="">Quantity to</label>
                                    <select name="quantity_to" class="form-control">
                                        <option value="3" @isset($data->quantity){{$data->quantity == '3' ? 'selected' : ''}}@endisset>3</option>
                                        <option value="10" @isset($data->quantity){{$data->quantity == '10' ? 'selected' : ''}}@endisset>10</option>
                                        <option value="30" @isset($data->quantity){{$data->quantity == '30' ? 'selected' : ''}}@endisset>30</option>
                                        <option value="100" @isset($data->quantity){{$data->quantity == '100' ? 'selected' : ''}}@endisset>100</option>
                                        <option value="500" @isset($data->quantity){{$data->quantity == '500' ? 'selected' : ''}}@endisset>500</option>
                                    </select>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('quantity'))?($errors->first('quantity')):''}}</div>
                                </div>
                                <div class="form-group">
                                    <label for="">District Name</label>
                                    <select name="district_name" class="form-control">
                                        <option value="Dhaka" @isset($data->district_name){{$data->district_name == 'Dhaka' ? 'selected' : ''}}@endisset>Inside Dhaka</option>
                                        <option value="Out_of_Dhaka" @isset($data->district_name){{$data->district_name == 'Out_of_Dhaka' ? 'selected' : ''}}@endisset>Out of Dhaka</option>
                                    </select>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('district_name'))?($errors->first('district_name')):''}}</div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deliver Charge</label>
                                    <input type="text" name="delivery_charge" value="{{$data->delivery_charge}}" placeholder="Enter Deliver Charge" class="form-control">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('delivery_charge'))?($errors->first('delivery_charge')):''}}</div>
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