@extends('backend.layouts.master')
@section('title','Create Product')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
        <li class="breadcrumb-item active">Create Product</li>
    </ol>
    <h1 class="page-header">Products</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Create Product</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('product.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> Product list</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                @php

                /*Create UID*/

                $dataCount = App\Models\Product::withTrashed()->count();

                if($dataCount == null){

                    $firstReg = '2021';
                    $uid = $firstReg+1;

                }else{

                    $dataCount = App\Models\Product::withTrashed()->orderBy('id','desc')->first()->product_code;
                    $uid = $dataCount+1;

                }

                @endphp

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Product Name</label>
                                            <input type="text" class="form-control" placeholder="Product name" name="product_name" value="{{old('product_name')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_name'))?($errors->first('product_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Slogan</label>
                                            <input type="text" class="form-control" placeholder="Slogan" name="slogan" value="{{old('slogan')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('slogan'))?($errors->first('slogan')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Product Code</label>
                                            <input type="text" class="form-control" placeholder="Product code" name="product_code" value="{{$uid}}" readonly>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_code'))?($errors->first('product_code')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Product Quantity</label>
                                            <input type="number" class="form-control" placeholder="Product quantity" name="product_quantity" value="{{old('product_quantity')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_quantity'))?($errors->first('product_quantity')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select class="form-control myselect2" name="category_id" id="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
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
                                                <option value="{{$brand->id}}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('brand_id'))?($errors->first('brand_id')):''}}</div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Color</label>
                                            <select class="form-control myselect2" name="color_id">
                                                <option value="">Select Color</option>
                                                @foreach($colors as $color)
                                                <option value="{{$color->id}}" {{ old('color_id') == $color->id ? 'selected' : '' }}>{{$color->color_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('color_id'))?($errors->first('color_id')):''}}</div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Production Time</label>
                                            <select class="form-control myselect2" name="production_time">
                                                <option value="">Select</option>
                                                @foreach($production_times as $pt)
                                                <option value="{{$pt->id}}" {{ old('pt') == $pt->id ? 'selected' : '' }}>{{$pt->production_time}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('production_time'))?($errors->first('production_time')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Imprint Method</label>
                                            <select class="form-control myselect2" name="production_time">
                                                <option value="">Select</option>
                                                @foreach($imprint_methods as $im)
                                                <option value="{{$im->id}}" {{ old('imprint_method') == $im->id ? 'selected' : '' }}>{{$im->imprint_method}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('imprint_method'))?($errors->first('imprint_method')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Fit</label>
                                            <select class="form-control myselect2" name="fit_id">
                                                <option value="">Select Fit</option>
                                                @foreach($fits as $fit)
                                                <option value="{{$fit->id}}" {{ old('fit_id') == $fit->id ? 'selected' : '' }}>{{$fit->fit_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='fit:red; padding: 0 5px;'>{{($errors->has('fit_id'))?($errors->first('fit_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Style</label>
                                            <select class="form-control myselect2" name="style_id">
                                                <option value="">Select Style</option>
                                                @foreach($styles as $style)
                                                <option value="{{$style->id}}" {{ old('style_id') == $style->id ? 'selected' : '' }}>{{$style->style_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='style:red; padding: 0 5px;'>{{($errors->has('style_id'))?($errors->first('style_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Fabric</label>
                                            <select class="form-control myselect2" name="fabric_id">
                                                <option value="">Select Fabric</option>
                                                @foreach($fabrics as $fabric)
                                                <option value="{{$fabric->id}}" {{ old('fabric_id') == $fabric->id ? 'selected' : '' }}>{{$fabric->fabric_name}}</option>
                                                @endforeach
                                            </select>
                                            <div fabric='fabric:red; padding: 0 5px;'>{{($errors->has('fabric_id'))?($errors->first('fabric_id')):''}}</div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Generic</label>
                                            <select class="form-control myselect2" name="generic_id">
                                                <option value="">Select Generic</option>
                                                @foreach($generics as $generic)
                                                <option value="{{$generic->id}}" {{ old('generic_id') == $generic->id ? 'selected' : '' }}>{{$generic->generic_name}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('generic_id'))?($errors->first('generic_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Type Name</label>
                                            <select class="form-control myselect2" name="type_id[]" multiple="multiple">
                                                <option value="">Select Type</option>
                                                @foreach($types as $type)
                                                <option value="{{$type->id}}" {{ (collect(old('type_id'))->contains($type->id)) ? 'selected':'' }}>{{$type->type}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('type_id'))?($errors->first('type_id')):''}}</div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Size</label>
                                            <select class="form-control myselect2" name="size_id[]" multiple="multiple">
                                                <option value="">Select Size</option>
                                                @foreach($sizes as $size)
                                                <option value="{{$size->id}}" {{ (collect(old('size_id'))->contains($size->id)) ? 'selected':'' }}>{{$size->size}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('size_id'))?($errors->first('size_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Sleeve Length</label>
                                            <select class="form-control myselect2" name="sleeve_length">
                                                <option value="">Select</option>
                                                @foreach($sleeve_lengths as $pt)
                                                <option value="{{$pt->id}}" {{ old('pt') == $pt->id ? 'selected' : '' }}>{{$pt->sleeve_length}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('sleeve_length'))?($errors->first('sleeve_length')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Minimum Quantity</label>
                                            <input type="text" class="form-control" placeholder="Minimum Quantity" name="minimum_quantity" value="{{old('minimum_quantity')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('minimum_quantity'))?($errors->first('minimum_quantity')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Imprint Area</label>
                                            <input type="text" class="form-control" placeholder="Imprint Area" name="imprint_area" value="{{old('imprint_area')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('imprint_area'))?($errors->first('imprint_area')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Imprint Area 2</label>
                                            <input type="text" class="form-control" placeholder="Imprint Area 2" name="imprint_area_2" value="{{old('imprint_area_2')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('imprint_area_2'))?($errors->first('imprint_area_2')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Setup Fee</label>
                                            <input type="text" class="form-control" placeholder="Setup Fee" name="setup_fee" value="{{old('setup_fee')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('setup_fee'))?($errors->first('setup_fee')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Selling Price</label>
                                            <input type="number" step="any" name="selling_price" value="{{ old('selling_price') }}" id="selling_price" class="form-control" placeholder="Enter selling price">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('selling_price'))?($errors->first('selling_price')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Discount Type</label>
                                            <select name=" discount_type" id="discount_type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="1">Tk</option>
                                                <option value="2">Percentage (%)</option>
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('discount_type'))?($errors->first('discount_type')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Discount</label>
                                            <input type="number" name="discount" id="discount" value="0" min="0" class="form-control" placeholder="Enter Discount">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('discount'))?($errors->first('discount')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Discount Price</label>
                                            <input type="number" name="discount_price" value="0" id="discount_price" class="form-control" placeholder="Discount Price" readonly>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('discount_price'))?($errors->first('discount_price')):''}}</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Active Price</label>
                                            <select name="price_active" id="" class="form-control">
                                                <option value="1">Sell Price</option>
                                                <option value="2"> Discount Price</option>
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('price_active'))?($errors->first('price_active')):''}}</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Short Description</label>
                                            <textarea class="summernote" name="short_description">{{old('long_desc')}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('short_description'))?($errors->first('short_description')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Product Description</label>
                                            <textarea class="summernote" name="product_description">{{old('long_desc')}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_description'))?($errors->first('product_description')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    
                                </div> -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Video Link</label>
                                            <input type="text" placeholder="Enter link" class="form-control" name="video_link" value="{{old('video_link')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('video_link'))?($errors->first('video_link')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Default Image</label>
                                            <input id="defaultImage" type="file" name="default_image" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showDefaultImage" src="{{asset('defaults/noimage/no_img.jpg')}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('default_image'))?($errors->first('default_image')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Sub Image One</label>
                                            <input id="subImage1" type="file" name="sub_image_one" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showSubImage1" src="{{asset('defaults/noimage/no_img.jpg')}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('sub_image_one'))?($errors->first('sub_image_one')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Sub Image Two</label>
                                            <input id="subImage2" type="file" name="sub_image_two" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showSubImage2" src="{{asset('defaults/noimage/no_img.jpg')}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('sub_image_two'))?($errors->first('sub_image_two')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c1" name="main_slider">
                                                <label class="form-check-label" for="c1">Main Slider</label>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c2" name="trend_product">
                                                <label class="form-check-label" for="c2">On Sale</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c3" name="hot_deal">
                                                <label class="form-check-label" for="c3">Hot Deal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c4" name="mid_slider">
                                                <label class="form-check-label" for="c4">Mid Slider</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c5" name="best_rated">
                                                <label class="form-check-label" for="c5">Best Rated</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="c6" name="hot_new">
                                                <label class="form-check-label" for="c6">Hot New</label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="2"> Inactive</option>
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('status'))?($errors->first('status')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">  
                                            <table class="table table-bordered" id="dynamic_field"> 
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>Image</td>
                                                        <td>Action</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control myselect2" name="color_id[]">
                                                                <option value="">Select Color</option>
                                                                @foreach($colors as $color)
                                                                <option value="{{$color->id}}">{{$color->color_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="colorImage" type="file" name="color_image[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" id="submitBtn" value="Submit" class="btn btn-success">
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
        $(document).ready(function(){      
          var postURL = "<?php echo url('addmore'); ?>";
          var i=1;


          $('#add').click(function(){  
             i++;  
             $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><select class="form-control myselect2" name="color_id[]"><option value="">Select Color</option>@foreach($colors as $color)<option value="{{$color->id}}" >{{$color->color_name}}</option>@endforeach</select></td><td><input id="colorImage" type="file" name="color_image[]" class="form-control"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
         });  

          $(document).on('click', '.btn_remove', function(){  
             var button_id = $(this).attr("id");   
             $('#row'+button_id+'').remove();  
         });  


      // $.ajaxSetup({
      //     headers: {
      //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //     }
      // });


      // $('#submit').click(function(){            
      //      $.ajax({  
      //           url:postURL,  
      //           method:"POST",  
      //           data:$('#add_name').serialize(),
      //           type:'json',
      //           success:function(data)  
      //           {
      //               if(data.error){
      //                   printErrorMsg(data.error);
      //               }else{
      //                   i=1;
      //                   $('.dynamic-added').remove();
      //                   $('#add_name')[0].reset();
      //                   $(".print-success-msg").find("ul").html('');
      //                   $(".print-success-msg").css('display','block');
      //                   $(".print-error-msg").css('display','none');
      //                   $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
      //               }
      //           }  
      //      });  
      // });  

      // function printErrorMsg (msg) {
      //    $(".print-error-msg").find("ul").html('');
      //    $(".print-error-msg").css('display','block');
      //    $(".print-success-msg").css('display','none');
      //    $.each( msg, function( key, value ) {
      //       $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
      //    });
      // }
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

    function offer() {
        var selling_price = $('#selling_price').val();
        var discount_type = $('#discount_type').val();
        var discount = $('#discount').val();

        if (discount_type == 1) {
            var discount_price = selling_price - discount;
        } else if (discount_type == 2) {
            var price_cal = ((selling_price * discount) / 100);
            var discount_price = selling_price - price_cal;
        }else{
            var discount_price = 0;
        }

        if (!isNaN(discount_price)) {
            $('#discount_price').val(discount_price);
        }
    }

    $('#selling_price, #discount_type, #discount, #discount_price').on('keyup change', function() {
        offer();
    });
</script>

@endsection
@endsection