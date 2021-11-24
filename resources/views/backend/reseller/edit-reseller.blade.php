@extends('backend.layouts.master')
@section('title','Edit Reseller')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('reseller.index')}}">Resellers</a></li>
        <li class="breadcrumb-item active">Edit Reseller</li>
    </ol>
    <h1 class="page-header">Resellers</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-inverse">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Reseller</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('reseller.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-user"></i> Resellers</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('reseller.update',$editData->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$editData->name}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$editData->email}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Mobile <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="{{$editData->mobile}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" placeholder="Address" name="address" value="{{$editData->address}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Shop Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Shop Name" name="shop_name" value="{{$editData->shop_name}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('shop_name'))?($errors->first('shop_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Facebook Page Link</label>
                                            <input type="text" class="form-control" placeholder="Enter Facebook Page Link" name="facebook_page_link" value="{{$editData->facebook_page_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('facebook_page_link'))?($errors->first('facebook_page_link')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Whatsapp Or Imo (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Enter Whatsapp Or Imo Number" name="whatsapp_imo" value="{{$editData->whatsapp_imo}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('whatsapp_imo'))?($errors->first('whatsapp_imo')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control mb-3" name="gender">
                                                <option value="Male" {{$editData->whatsapp_imo == 'Male' ? selected : ''}}>Male</option>
                                                <option value="Female" {{$editData->whatsapp_imo == 'Female' ? selected : ''}}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Bkash Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Bkash Number" name="bkash" value="{{$editData->bkash}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('bkash'))?($errors->first('bkash')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Nagad Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Nagad Number" name="nagad" value="{{$editData->nagad}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('nagad'))?($errors->first('nagad')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Bank Account Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Bank Account Name" name="bank_account_name" value="{{$editData->bank_account_name}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('bank_account_name'))?($errors->first('bank_account_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Bank Account Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Bank Account Number" name="bank_account_number" value="{{$editData->bank_account_number}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('bank_account_number'))?($errors->first('bank_account_number')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Bank Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Bank Name" name="bank_name" value="{{$editData->bank_name}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('bank_name'))?($errors->first('bank_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Bank Branch Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Bank Branch Name" name="bank_branch_name" value="{{$editData->bank_branch_name}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('bank_branch_name'))?($errors->first('bank_branch_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Routing Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Routing Number" name="routing_number" value="{{$editData->routing_number}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('routing_number'))?($errors->first('routing_number')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Update" class="btn btn-success">
                                        </div>
                                    </div>
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