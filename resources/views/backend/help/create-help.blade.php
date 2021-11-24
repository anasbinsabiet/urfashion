@extends('backend.layouts.master')
@section('title','Create Help')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('help.index')}}">Help</a></li>
        <li class="breadcrumb-item active">Create Help</li>
    </ol>
    <h1 class="page-header">Help</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Create Help</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('help.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> Help list</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('help.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" class="form-control" placeholder="Title (en)" name="title_en" value="{{old('title_en')}}" required>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('title_en'))?($errors->first('title_en')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Youtube Video Link</label>
                                            <input type="text" class="form-control" placeholder="Enter Youtube Video Link" name="title_bn" value="{{old('title_bn')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('title_bn'))?($errors->first('title_bn')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select class="form-control myselect2" name="category_id" id="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->category_name_en}} - {{$category->category_name_bn}}</option>
                                                @endforeach
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('category_id'))?($errors->first('category_id')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="2">In Active</option>
                                            </select>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('status'))?($errors->first('status')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea class="summernote" name="description_en" required>{{old('description_en')}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('description_en'))?($errors->first('description_en')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Description (Bn)</label>
                                            <textarea class="summernote" name="description_bn">{{old('description_bn')}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('description_bn'))?($errors->first('description_bn')):''}}</div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- <div class="form-group">
                                            <label for="">Image</label>
                                            <input id="noImage" type="file" name="image" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset('defaults/noimage/no_img.jpg')}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>
                                        </div> -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dynamic_field">
                                                <tr>
                                                    <td>Image</td>
                                                    <td>Action</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input id="helpImage" type="file" name="help_image[]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
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
@section('customjs')
<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input id="helpImage" type="file" name="help_image[]" class="form-control"></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>
@endsection
@endsection