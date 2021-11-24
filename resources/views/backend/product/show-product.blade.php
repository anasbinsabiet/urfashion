@extends('backend.layouts.master')
@section('title','Show Product')
@section('content')
<style>
label {
    font-weight: bold;
    font-size: 14px;
}

p,
span {
    font-size: 14px;
}
</style>
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
        <li class="breadcrumb-item active">Show Product</li>
    </ol>
    <h1 class="page-header">Products</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Show Product</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('product.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> Product list</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                        <p>{{$product->product_name}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Product Code</label>
                                        <p>{{$product->product_code}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Slogan</label>
                                        <p>{{$product->slogan}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Product Quantity</label>
                                        <p>{{$product->product_quantity}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <p>{{$product->category->category_name}}</p>

                                    </div>
                                </div>
                                @php
                                $pt = App\ProductionTime::where('id',$product->production_time)->first();
                                @endphp
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Production Time</label>
                                        <p>{{$pt->production_time}}</p>
                                    </div>
                                </div>
                                @if(!empty($product->sleeve_length))
                                @php
                                $sl = App\SleeveLength::where('id',$product->sleeve_length)->first();
                                @endphp
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Length</label>
                                        <p>{{$sl->sleeve_length}}</p>
                                    </div>
                                </div>
                                @endif
                                @php
                                $fc = App\Fabric::where('id',$product->fabric_id)->first();
                                @endphp
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Fabric</label>
                                        <p>{{$fc->fabric_name}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Minimum Quantity</label>
                                        <p>{{$product->minimum_quantity}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Imprint Area</label>
                                        <p>{{$product->imprint_area}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Imprint Area 2</label>
                                        <p>{{$product->imprint_area_2}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Estimated Ship Date</label>
                                        <p>{{$product->estimated_ship_date}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Setup Fee</label>
                                        <p>{{$product->setup_fee}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Brand</label>
                                        @if($product->brand_id != null)
                                        <p>{{$product->brand->brand_name}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <p>
                                            @foreach($types as $type)
                                            <span class="badge badge-default">{{$type->type->type}}</span>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Size</label>
                                        <p>
                                            @foreach($sizes as $size)
                                            <span class="badge badge-default">{{$size->size->size}}</span>
                                            @endforeach
                                        </p>

                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Selling Price</label>
                                        <p>Tk {{$product->selling_price}}</p>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Discount Type</label>
                                        <p>
                                            @if($product->discount_type == 1)
                                            Tk
                                            @elseif($product->discount_type == 2)
                                            Percentage (%)
                                            @else
                                            N/A
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Discount</label>
                                        <p>
                                            {{$product->discount}}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Discount Price</label>
                                        <p>
                                            {{$product->discount_price}}
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Active Price</label>
                                        <p>
                                            @if($product->price_active == 1)
                                            Selling Price
                                            @else
                                            Discount Price
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Short Description</label>
                                        <div style="border: 1px solid #ddd; padding: 15px;">
                                            <p>{!!$product->short_description!!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Product Description</label>
                                        <div style="border: 1px solid #ddd; padding: 15px;">
                                            <p>{!!$product->product_description!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Video Link</label>
                                        <p><a href="{{$product->video_link}}" target="_blank">{{$product->video_link}}</a></p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="d-block">Default Image</label>
                                        <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showDefaultImage" src="@if(!empty($product->default_image)) {{asset($product->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('default_image'))?($errors->first('default_image')):''}}</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="d-block">Sub Image One</label>
                                        <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showSubImage1" src="@if(!empty($product->sub_image_one)) {{asset($product->sub_image_one)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('sub_image_one'))?($errors->first('sub_image_one')):''}}</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="d-block">Sub Image Two</label>
                                        <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showSubImage2" src="@if(!empty($product->sub_image_two)) {{asset($product->sub_image_two)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('sub_image_two'))?($errors->first('sub_image_two')):''}}</div>
                                    </div>
                                </div>
                            </div> -->
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label" for="c1">Main Slider</label> |
                                            @if($product->main_slider == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label" for="c2">On Sale / Trending</label> |
                                            @if($product->trend_product == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label" for="c3">Hot Deal</label>
                                            @if($product->hot_deal == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label" for="c4">Mid Slider</label>
                                            @if($product->mid_slider == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label" for="c5">Best Rated</label>
                                            @if($product->best_rated == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label" for="c6">Hot New</label>
                                            @if($product->hot_new == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="d-block" for="">Status</label>
                                        @if($product->status == 1)
                                        <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Active</button>
                                        @else
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Inactive</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                        <div class="table-responsive">  
                                            <table class="table table-bordered" id="dynamic_field"> 
                                                <tr>
                                                    <td>Color</td>
                                                    <td>Image</td>
                                                    <td>Action</td>
                                                </tr>
                                                @foreach($color_images as $color_image)
                                                <tr>
                                                    @php
                                                    $color = App\Color::where('id', $color_image->color_id)->first();
                                                    @endphp
                                                    <td>{{$color->color_name}}</td>
                                                    <td>
                                                        <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showColorImage" src="@if(!empty($color_image->color_image)) {{asset($color_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                                    </td>
                                                    <td>
                                                        <a href="{{route('product.images_edit',$color_image->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Change Image</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection