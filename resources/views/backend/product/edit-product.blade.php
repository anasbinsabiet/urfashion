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
                            <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Product Name <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="Product name" name="product_name" value="{{$product->product_name}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_name'))?($errors->first('product_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Product Code</label>
                                            <input type="text" class="form-control" placeholder="Product code" name="product_code" value="{{$product->product_code}}" readonly>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_code'))?($errors->first('product_code')):''}}</div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Product Quantity <span style="color:red;">*</span></label>
                                            <input type="number" class="form-control" placeholder="Product quantity" name="product_quantity" value="{{$product->product_quantity}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_quantity'))?($errors->first('product_quantity')):''}}</div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Category <span style="color:red;">*</span></label>
                                            <select class="form-control myselect2" name="category_id" id="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if( $category->id == $product->category_id ) selected @endif >{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('category_id'))?($errors->first('category_id')):''}}</div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Sub Category</label>
                                            <select class="form-control myselect2" name="subcategory_id" id="subcategory_id">
                                                <option value="">Select Subcategory</option>
                                                @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}" @if( $product->subcategory_id == $subcategory->id ) selected @endif >{{$subcategory->subcategory_name}}</option>
                                    @endforeach

                                    </select>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('subcategory_id'))?($errors->first('subcategory_id')):''}}</div>
                                </div>
                        </div> --}}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Brand</label>
                                <select class="form-control myselect2" name="brand_id">
                                    <option value="">Select Brand</option>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" @if( $brand->id == $product->brand_id ) selected @endif >{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('brand_id'))?($errors->first('brand_id')):''}}</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Color</label>
                                <select class="form-control myselect2" name="color_id[]" multiple="multiple">
                                    <option value="">Select Color</option>
                                    @foreach($colors as $color)
                                    <option value="{{$color->id}}" @if (@in_array(['color_id'=> $color->id], $selectColor)) selected @endif >{{$color->color_name}}</option>
                                    @endforeach
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('color_id'))?($errors->first('color_id')):''}}</div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Production Time</label>
                                            <select class="form-control myselect2" name="production_time">
                                                <option value="">Select</option>
                                                @foreach($production_times as $pt)
                                                <option value="{{$pt->id}}" @if( $pt->id == $product->production_time ) selected @endif >{{$pt->production_time}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('production_time'))?($errors->first('production_time')):''}}</div>
                                        </div>
                                    </div> -->
                        <!-- <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Design</label>
                                <select class="form-control myselect2" name="imprint_method">
                                    <option value="">Select</option>
                                    @foreach($imprint_methods as $im)
                                    <option value="{{$im->id}}" @if( $im->id == $product->imprint_method ) selected @endif >{{$im->imprint_method}}</option>
                                    @endforeach
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('imprint_method'))?($errors->first('imprint_method')):''}}</div>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Fit</label>
                                            <select class="form-control myselect2" name="fit_id">
                                                <option value="">Select Fit</option>
                                                @foreach($fits as $fit)
                                                <option value="{{$fit->id}}" @if( $fit->id == $product->fit_id ) selected @endif >{{$fit->fit_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('fit_id'))?($errors->first('fit_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Style</label>
                                            <select class="form-control myselect2" name="style_id">
                                                <option value="">Select style</option>
                                                @foreach($styles as $style)
                                                <option value="{{$style->id}}" @if( $style->id == $product->style_id ) selected @endif >{{$style->style_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('style_id'))?($errors->first('style_id')):''}}</div>
                                        </div>
                                    </div> -->
                        <!-- <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Fabric</label>
                                <select class="form-control myselect2" name="fabric_id">
                                    <option value="">Select fabric</option>
                                    @foreach($fabrics as $fabric)
                                    <option value="{{$fabric->id}}" @if( $fabric->id == $product->fabric_id ) selected @endif >{{$fabric->fabric_name}}</option>
                                    @endforeach
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('fabric_id'))?($errors->first('fabric_id')):''}}</div>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Generic</label>
                                            <select class="form-control myselect2" name="generic_id">
                                                <option value="">Select Generic</option>
                                                @foreach($generics as $generic)
                                                <option value="{{$generic->id}}" @if( $generic->id == $product->generic_id ) selected @endif >{{$generic->generic_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('generic_id'))?($errors->first('generic_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <select class="form-control myselect2" name="type_id[]" multiple="multiple">
                                            <option value="">Select Type</option>
                                                @foreach($types as $type)
                                                <option value="{{$type->id}}"  @if (@in_array(['type_id' => $type->id], $selectType)) selected @endif >{{$type->type}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('type_id'))?($errors->first('type_id')):''}}</div>
                                        </div>
                                    </div> -->
                        <!-- <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Size</label>
                                <select class="form-control myselect2" name="size_id[]" multiple="multiple">
                                    <option value="">Select Size</option>
                                    @foreach($sizes as $size)
                                    <option value="{{$size->id}}" @if (@in_array(['size_id'=> $size->id], $selectSize)) selected @endif >{{$size->size}}</option>
                                    @endforeach
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('size_id'))?($errors->first('size_id')):''}}</div>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Length</label>
                                <select class="form-control myselect2" name="sleeve_length">
                                    <option value="">Select</option>
                                    @foreach($sleeve_lengths as $sl)
                                    <option value="{{$sl->id}}" @if( $sl->id == $product->sleeve_length ) selected @endif >{{$sl->sleeve_length}}</option>
                                    @endforeach
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('sleeve_length'))?($errors->first('sleeve_length')):''}}</div>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Minimum Quantity</label>
                                            <input type="text" class="form-control" placeholder="Minimum Quantity" name="minimum_quantity" value="{{$product->minimum_quantity}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('minimum_quantity'))?($errors->first('minimum_quantity')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Imprint Area</label>
                                            <input type="text" class="form-control" placeholder="Imprint Area" name="imprint_area" value="{{$product->imprint_area}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('imprint_area'))?($errors->first('imprint_area')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Imprint Area 2</label>
                                            <input type="text" class="form-control" placeholder="Imprint Area 2" name="imprint_area_2" value="{{$product->imprint_area_2}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('imprint_area_2'))?($errors->first('imprint_area_2')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Estimated Ship Date</label>
                                            <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" name="estimated_ship_date" value="{{$product->estimated_ship_date}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('estimated_ship_date'))?($errors->first('estimated_ship_date')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Setup Fee</label>
                                            <input type="text" class="form-control" placeholder="Setup Fee" name="setup_fee" value="{{$product->setup_fee}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('setup_fee'))?($errors->first('setup_fee')):''}}</div>
                                        </div>
                                    </div> -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Given Price <span style="color:red;">*</span></label>
                                <input type="number" step="any" name="selling_price" value="{{$product->selling_price}}" id="selling_price" class="form-control" placeholder="Enter given price" required>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('selling_price'))?($errors->first('selling_price')):''}}</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Discount (%)</label>
                                <input type="number" name="discount" id="discount" value="{{$product->discount}}" class="form-control" min="0" placeholder="Enter Discount">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('discount'))?($errors->first('discount')):''}}</div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Discount Price</label>
                                <input type="number" name="discount_price" value="{{$product->discount_price}}" id="discount_price" class="form-control" placeholder="Discount Price" readonly>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('discount_price'))?($errors->first('discount_price')):''}}</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Suggested Minimum Price</label>
                                <input type="number" step="any" name="sminprice" value="{{$product->sminprice}}" id="sminprice" class="form-control" placeholder="Enter minimum price">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('sminprice'))?($errors->first('sminprice')):''}}</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Suggested Maximum Price</label>
                                <input type="number" step="any" name="smaxprice" value="{{$product->smaxprice}}" id="smaxprice" class="form-control" placeholder="Enter maximum price">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('smaxprice'))?($errors->first('smaxprice')):''}}</div>
                            </div>
                        </div>

                        <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Discount Type</label>
                                            <select name=" discount_type" id="discount_type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="1" @if($product->discount_type == 1) selected @endif >Tk</option>
                                                <option value="2" @if($product->discount_type == 2) selected @endif >Percentage (%)</option>
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('discount_type'))?($errors->first('discount_type')):''}}</div>
                                        </div>
                                    </div> -->

                        

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1" @if($product->status == 1 ) selected @endif >Active</option>
                                    <option value="2" @if($product->status == 2 ) selected @endif> Inactive</option>
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('status'))?($errors->first('status')):''}}</div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Active Price</label>
                                            <select name="price_active" id="" class="form-control">
                                                <option value="1" @if($product->price_active == 1) selected @endif >Sell Price</option>
                                                <option value="2" @if($product->price_active == 2) selected @endif > Discount Price</option>
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('price_active'))?($errors->first('price_active')):''}}</div>
                                        </div>
                                    </div>
                                </div> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Short Description</label>
                                <textarea class="summernote" name="short_description">{{$product->short_description}}</textarea>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('short_description'))?($errors->first('short_description')):''}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Product Description</label>
                                <textarea class="summernote" name="product_description">{{$product->product_description}}</textarea>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('product_description'))?($errors->first('product_description')):''}}</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Video Link</label>
                                            <input type="text" placeholder="Enter link" class="form-control" name="video_link" value="{{$product->video_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('video_link'))?($errors->first('video_link')):''}}</div>
                                        </div>
                                    </div>
                                </div> -->
                    <!-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Default Image</label>
                                            <input id="defaultImage" type="file" name="default_image" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showDefaultImage" src="@if(!empty($product->default_image)) {{asset($product->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('default_image'))?($errors->first('default_image')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Sub Image One</label>
                                            <input id="subImage1" type="file" name="sub_image_one" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showSubImage1" src="@if(!empty($product->sub_image_one)) {{asset($product->sub_image_one)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('sub_image_one'))?($errors->first('sub_image_one')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Sub Image Two</label>
                                            <input id="subImage2" type="file" name="sub_image_two" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showSubImage2" src="@if(!empty($product->sub_image_two)) {{asset($product->sub_image_two)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('sub_image_two'))?($errors->first('sub_image_two')):''}}</div>
                                        </div>
                                    </div>
                                </div> -->
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="c2" name="trend_product" @if($product->trend_product == 1) checked @endif>
                                    <label class="form-check-label" for="c2">On Sale / Trending</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="c3" name="hot_deal" @if($product->hot_deal == 1) checked @endif>
                                    <label class="form-check-label" for="c3">Hot Deal</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c4" name="mid_slider" @if($product->mid_slider == 1) checked @endif>
                                                <label class="form-check-label" for="c4">Mid Slider</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c5" name="best_rated" @if($product->best_rated == 1) checked @endif>
                                                <label class="form-check-label" for="c5">Best Rated</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c6" name="hot_new" @if($product->hot_new == 1) checked @endif>
                                                <label class="form-check-label" for="c6">Hot New</label>
                                            </div>
                                        </div>
                                    </div> -->
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td>Image</td>
                                        <td>Action</td>
                                    </tr>
                                    @foreach($color_images as $color_image)
                                    <tr>
                                        <td>
                                            <input id="colorImage" type="file" name="color_image[]" value="{{asset($color_image->color_image)}}" class="form-control">

                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showColorImage" src="@if(!empty($color_image->color_image)) {{asset($color_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                        </td>
                                        <td>
                                            <button type="button" name="add" id="add" class="btn btn-success {{ $loop->first ? '' : 'd-none' }}">Add More</button>
                                            <button type="button" name="remove" id="{{$color_image->id}}" class="btn btn-danger btn_remove">X</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="col-6">
                            <table class="table table-bordered" id="multiForm">
                                <tr>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                    $ssize1 = App\Models\ProductSize::where('product_id', $product->id)->get();
                                @endphp
                                
                                @foreach($ssize1 as $ssize)
                                @php
                                    $dsize = App\Models\Size::where('id', $ssize->size_id)->first();
                                @endphp
                                <tr>
                                    <td><select class="form-control" name="size_id[]">
                                        <option value="">Select Size</option>
                                        @foreach($sizes as $size)
                                        <option value="{{$size->id}}" {{ $dsize->size == $size->size ? 'selected':'' }}>{{$size->size}}</option>
                                        @endforeach
                                    </select></td>
                                    <td><input type="number" name="quantity[]" value="{{$ssize->quantity}}" class="form-control"/></td>
                                    <td><input type="button" name="add" value="Add More" id="addRemoveIp" class="btn btn-primary mr-1 {{ $loop->first ? '' : 'd-none' }}"><button type="button" class="remove-item btn btn-danger {{ $loop->first ? 'd-none' : '' }}">X</button></td>
                                </tr>
                                @endforeach
                            </table>
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

@section('customjs')
<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input id="colorImage" type="file" name="color_image[]" class="form-control"></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var ciid = $(this).attr("id");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: "get",
                    url: "{{url('admin/product/cimage_delete')}}/" + ciid,
                    dataType: "json",
                    success: function(data) {
                        if (data == 'success') {
                            alert('Deleted Successfully!');
                        }
                    },
                });
                $(this).closest("tr").remove();
            } else {
                return false;
            }
        });
        $('#selling_price, #discount, #discount_price').on('keyup change', function() {
            var selling_price = $('#selling_price').val();
            var discount = $('#discount').val();

            if (discount) {
                var price_cal = ((selling_price * discount) / 100);
                var discount_price = selling_price - price_cal;
            } else {
                var discount_price = 0;
            }

            if (!isNaN(discount_price)) {
                $('#discount_price').val(discount_price);
            }
        });
    });
</script>
<script>
    $(function() {
        $(document).on('change', '#category_id', function() {
            var category_id = $(this).val();
            $.ajax({
                type: "Get",
                url: "{{url('/get/subcategory/')}}/" + category_id,
                dataType: "json",
                success: function(data) {
                    var html = '<option value="">Select Subcategory</option>';
                    $.each(data, function(key, val) {
                        html += '<option value="' + val.id + '">' + val.subcategory_name + '</option>';
                    });
                    $('#subcategory_id').html(html);
                },

            });
        });
    });
</script>
<script>
    var i = 0;
    $("#addRemoveIp").click(function () {
        ++i;
        $("#multiForm").append('<tr><td><select class="form-control" name="size_id[]"><option value="">Select Size</option>@foreach($sizes as $size)<option value="{{$size->id}}" {{ (collect(old('size_id'))->contains($size->id)) ? 'selected':'' }}>{{$size->size}}</option>@endforeach</select><td><input type="number" name="quantity[]" class="form-control" /></td><td><button type="button" class="remove-item btn btn-danger">X</button></td></tr>');
    });
    $(document).on('click', '.remove-item', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection
@endsection