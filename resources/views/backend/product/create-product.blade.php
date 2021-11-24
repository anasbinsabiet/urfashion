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
                                            <label for="">Product Name <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="Product name" name="product_name" value="{{old('product_name')}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('product_name'))?($errors->first('product_name')):''}}</div>
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
                                            <label for="">Category <span style="color:red;">*</span></label>
                                            <select class="form-control myselect2" name="category_id" id="category_id" required>
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
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('subcategory_id'))?($errors->first('subcategory_id')):''}}
                                </div>
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Color</label>
                            <select class="form-control myselect2" name="color_id[]" multiple="multiple">
                                <option value="">Select Color</option>
                                @foreach($colors as $color)
                                <option value="{{$color->id}}" {{ (collect(old('color_id'))->contains($color->id)) ? 'selected':'' }}>{{$color->color_name}}</option>
                                @endforeach
                            </select>
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('color_id'))?($errors->first('color_id')):''}}</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Given Price <span style="color:red;">*</span></label>
                            <input type="number" step="any" name="selling_price" value="{{ old('selling_price') }}" id="selling_price" class="form-control" placeholder="Enter selling price" required>
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('selling_price'))?($errors->first('selling_price')):''}}</div>
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
                            <input type="number" name="discount_price" value="0" id="discount_price" class="form-control" placeholder="Discount Price">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('discount_price'))?($errors->first('discount_price')):''}}</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Suggested Minimum Price</label>
                            <input type="number" step="any" name="sminprice" value="{{ old('sminprice') }}" id="sminprice" class="form-control" placeholder="Enter selling price">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('sminprice'))?($errors->first('sminprice')):''}}</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Suggested Maximum Price</label>
                            <input type="number" step="any" name="smaxprice" value="{{ old('smaxprice') }}" id="smaxprice" class="form-control" placeholder="Enter selling price">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('smaxprice'))?($errors->first('smaxprice')):''}}</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
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
                <hr>
                <div class="row">
                    <div class="col-md-4">
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
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td>Image</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
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
                    <div class="col-6">
                    <table class="table table-bordered" id="multiForm">
                        <tr>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><select class="form-control" name="size_id[]">
                                <option value="">Select Size</option>
                                @foreach($sizes as $size)
                                <option value="{{$size->id}}" {{ (collect(old('size_id'))->contains($size->id)) ? 'selected':'' }}>{{$size->size}}</option>
                                @endforeach
                            </select></td>
                            <td><input type="number" name="quantity[]" class="form-control"/></td>
                            <td><input type="button" name="add" value="Add More" id="addRemoveIp" class="btn btn-primary"></td>
                        </tr>
                    </table>
                    </div>
                </div>
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
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input id="colorImage" type="file" name="color_image[]" class="form-control"></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
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