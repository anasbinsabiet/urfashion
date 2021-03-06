@extends('backend.layouts.master')
@section('title','Help Details')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Help Details</li>
    </ol>
    <h1 class="page-header">Help</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Help Details</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('help.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> All Help</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-td-valign-middle">
                        <tr>
                            <th width="20%">Title (En)</th>
                            <td>{{$help->title_en}}</td>
                        </tr>
                        <tr>
                            <th width="20%">Title (Bn)</th>
                            <td>{{$help->title_bn}}</td>
                        </tr>
                        <tr>
                            <th>help Image</th>
                            <td><img width="50" src="@if(!empty($help->image)) {{asset( $help->image ) }} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt=""></td>
                        </tr>
                        <tr>
                            <th>Category (En)</th>
                            <td>{{$help->category->category_name_en}}</td>
                        </tr>

                        <tr>
                            <th>Category (Bn)</th>
                            <td>{{$help->category->category_name_bn}}</td>
                        </tr>

                        <tr>
                            <th>Description (En)</th>
                            <td>{!!$help->description_en!!}</td>
                        </tr>
                        <tr>
                            <th>Description (Bn)</th>
                            <td>{!!$help->description_bn!!}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if($help->status == 1)
                                    <button class="btn btn-success btn-sm"><i class="fa fa-check"></i> Active</button>
                                @else
                                <button class="btn btn-danger btn-sm"><i class="fa fa-spinner"></i> Inactive</button>
                                @endif
                            </td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection