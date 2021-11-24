@extends('backend.layouts.master')
@section('title','Create Reseller')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('reseller.index')}}">Resellers</a></li>
        <li class="breadcrumb-item active">Create Reseller</li>
    </ol>
    <h1 class="page-header">Resellers</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-inverse">

                <div class="panel-heading">
                    <h4 class="panel-title">Create Reseller</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('reseller.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-user"></i> resellers</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('reseller.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Mobile <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="{{old('mobile')}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="#">Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="#">Confirm Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" placeholder="Address" name="address" value="{{old('address')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Shop Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Shop Name" name="shop_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Facebook Page Link</label>
                                            <input type="text" class="form-control" placeholder="Enter Facebook Page Link" name="facebook_page_link">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Whatsapp Or Imo (Optional)</label>
                                            <input type="number" class="form-control" placeholder="Enter Whatsapp Or Imo Number" name="whatsapp_imo">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control mb-3" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Bkash Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Bkash Number" name="bkash">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Nagad Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Nagad Number" name="nagad">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Bank Account Name</label>
                                            <input type="text" class="form-control" value="" placeholder="Enter Bank Account Name" name="bank_account_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Bank Account Number</label>
                                            <input type="number" class="form-control" placeholder="Enter Bank Account Number" name="bank_account_number">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                            <input type="text" class="form-control" value="" placeholder="Enter Bank Name" name="bank_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Bank Branch Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Bank Branch Name" name="bank_branch_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Routing Number</label>
                                            <input type="text" class="form-control" value="" placeholder="Enter Routing Number" name="routing_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-success">
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