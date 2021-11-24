@extends('backend.layouts.master')
@section('title','Edit Production Time')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('productiontime.index')}}">Production Time</a></li>
        <li class="breadcrumb-item active">Edit Production Time</li>
    </ol>
    <h1 class="page-header">Production Time</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Production Time</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('productiontime.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-tags"></i> Production Time</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{route('productiontime.update',$data->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Production Time</label>
                                    <input type="text" name="production_time" value="{{$data->production_time}}" placeholder="Brand name" class="form-control">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('production_time'))?($errors->first('production_time')):''}}</div>
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