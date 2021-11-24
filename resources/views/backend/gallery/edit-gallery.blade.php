@extends('backend.layouts.master')
@section('title','Edit gallery')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Gallery</a></li>
        <li class="breadcrumb-item active">Edit Gallery</li>
    </ol>
    <h1 class="page-header">Gallery</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Gallery</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('gallery.index') }}" class="btn btn-info btn-sm mr-2"><i class="fa fa-tags"></i> gallery</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                <div class="row">
                <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form action="{{route('gallery.update',$galleries[0]->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <select class="form-control" name="product_id">
                                    <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" 
                                        @if ( $product->id == $galleries[0]->product_id)
                                        selected
                                        @endif
                                         >{{ $product->product_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label>Default Image</label>
                                    <input id="defaultImage" type="file" name="default_image" class="form-control">
                                    <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showDefaultImage" src="@if(!empty($galleries[0]->default_image)) {{asset($galleries[0]->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('default_image'))?($errors->first('default_image')):''}}</div>
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