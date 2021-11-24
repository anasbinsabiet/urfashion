@extends('backend.layouts.master')
@section('title','Gallery')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Gallery</li>
    </ol>
    <h1 class="page-header">Gallery</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Gallery List</h4>
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
                                <th class="text-nowrap">Image</th>
                                <th class="text-nowrap">Product</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $row)
                            @php
                            $products = App\Models\Product::where('id', $row->product_id)->get();
                            @endphp
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td><img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" src="@if(!empty($row->default_image)) {{asset($row->default_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image"></td>
                                <td>{{$products[0]->product_name}}</td>
                                <td>
                                    <a href="{{route('gallery.edit',$row->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a id="delete" href="{{route('gallery.destroy',$row->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Gallery Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Product</label>
                        <select class="form-control myselect2" name="product_id">
                          <option value="0">Select Product</option>
                          @foreach($products1 as $product2)
                          <option value="{{ $product2->id }}">{{ $product2->product_name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Default Image</label>
                      <input id="defaultImage" type="file" name="default_image" class="form-control">
                      <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showDefaultImage" src="{{asset('defaults/noimage/no_img.jpg')}}" alt="image">
                      <div style='color:red; padding: 0 5px;'>{{($errors->has('default_image'))?($errors->first('default_image')):''}}</div>
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