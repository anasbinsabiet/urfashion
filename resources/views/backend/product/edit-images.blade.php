@extends('backend.layouts.master')
@section('title','Edit Product')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
        <li class="breadcrumb-item active">Edit Product</li>
    </ol>
    <h1 class="page-header">Products</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Product</h4>
                    <div class="panel-heading-btn">
                        <a href="{{route('product.show',$color_image->product_id)}}" class="btn btn-info btn-xs mr-2"><i class="fa fa-arrow-left"></i> Back to Product View</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('product.images_update',$color_image->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Color Image</label>
                                            <input id="colorImage" type="file" name="color_image" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showColorImage" src="@if(!empty($color_image->color_image)) {{asset($color_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('color_image'))?($errors->first('color_image')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row mt-4">
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