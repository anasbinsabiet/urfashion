@extends('backend.layouts.master')
@section('title','Shipping Method')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Delivery Charge</li>
    </ol>
    <h1 class="page-header">Delivery Charge</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Delivery Charge List</h4>
                    <div class="panel-heading-btn">
                        <a href="#" class="btn btn-info btn-sm mr-2" data-toggle="modal" data-target="#addmodal"><i class="fa fa-plus-circle"></i> Add New</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th class="text-nowrap">Quantity</th>
                                <th class="text-nowrap">District Name</th>
                                <th class="text-nowrap">Delivery Charge</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->quantity_from}} - {{$row->quantity_to}}</td>
                                <td>@isset($row->district_name){{$row->district_name == 'Dhaka' ? 'Inside Dhaka' : 'Out Of Dhaka'}}@endisset</td>
                                <td>{{$row->delivery_charge}}</td>
                                <td>
                                    <a href="{{route('shippingmethod.edit',$row->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a id="delete" href="{{route('shippingmethod.destroy',$row->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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

<!-- Add Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delivery Charge Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('shippingmethod.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Quantity From</label>
                        <select name="quantity_from" class="form-control">
                            <option value="1">1</option>
                            <option value="4">4</option>
                            <option value="11">11</option>
                            <option value="31">31</option>
                            <option value="101">101</option>
                        </select>
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('quantity'))?($errors->first('quantity')):''}}</div>
                    </div>  
                    <div class="form-group">
                        <label for="">Quantity To</label>
                        <select name="quantity_to" class="form-control">
                            <option value="3">3</option>
                            <option value="10">10</option>
                            <option value="30">30</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
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
                        <label for="">Delivery Charge</label>
                        <input type="number" name="delivery_charge" placeholder="Enter Delivery Charge" class="form-control">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('delivery_charge'))?($errors->first('delivery_charge')):''}}</div>
                    </div>                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection