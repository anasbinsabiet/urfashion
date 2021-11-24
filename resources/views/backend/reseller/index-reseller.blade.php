@extends('backend.layouts.master')
@section('title','Reseller List')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">resellers</li>
    </ol>
    <h1 class="page-header">Reseller List</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-inverse">

                <div class="panel-heading">
                    <h4 class="panel-title">Reseller List</h4>
                    <div class="panel-heading-btn">
                    <a href="{{route('reseller.create')}}" class="btn btn-info btn-xs mr-2"><i class="fa  fa-plus-circle"></i> Add reseller</a>
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
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">Address</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->mobile}}</td>
                                <td>{{$row->address}}</td>
                                <td>
                                    <select class="btn btn-primary btn-xs user_status" name="user_status" style="margin-right: 10px;">
                                        <option value="0" @if( $row->status == 0 ) selected @endif>Pending</option>
                                        <option value="1" @if( $row->status == 1 ) selected @endif>Activate</option>
                                        <option value="2" @if( $row->status == 2 ) selected @endif>Block</option>
                                        <option value="3" @if( $row->status == 3 ) selected @endif>Cancel</option>
                                    </select>
                                    <input type="hidden" name="user_id" class="user_id" value="{{$row->id}}">
                                </td>
                                <td>
                                    <a href="{{route('reseller.edit',$row->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    @if($row->id != Auth::user()->id)
                                    <a id="delete" href="{{route('reseller.destroy',$row->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                    @endif
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
@endsection