@extends('backend.layouts.master')
@section('title','Help')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Help</li>
    </ol>
    <h1 class="page-header">Help</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Help List</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('help.create') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-plus-circle"></i> Add New</a>
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
                                <th class="text-nowrap">help Image</th>
                                <th class="text-nowrap">Title</th>
                                <!-- <th class="text-nowrap">Title (Bn)</th> -->
                                <th class="text-nowrap">Category</th>
                                <!-- <th class="text-nowrap">Category (Bn)</th> -->
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($helps as $help)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td><img width="50" src="{{asset($help->image)}}" alt=""></td>
                                <td>{{$help->title_en}}</td>
                                <!-- <td>{{$help->title_bn}}</td> -->
                                <td>{{$help->category->category_name_en}}</td>
                                <!-- <td>{{$help->category->category_name_bn}}</td> -->
                                <td>
                                    @if($help->status == 1)
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#help_status_{{$help->id}}"><i class="fa fa-check"></i> Active</a>
                                    @elseif($help->status == 2)
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#help_status_{{$help->id}}"><i class="fa fa-spinner"></i> Inactive</a>
                                    @endif
                                </td>

                                <td>
                                    <!-- <a href="{{route('help.show',$help->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a> -->
                                    <a href="{{route('help.edit',$help->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a id="delete" href="{{route('help.destroy',$help->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>

                            <!--Doctor Status -->
                            <div class="modal fade" id="help_status_{{$help->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">help Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('help.status', $help->id)}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" @if( $help->status == 1 ) selected @endif >Active</option>
                                                        <option value="2" @if( $help->status == 2 ) selected @endif >Inactive</option>
                                                    </select>

                                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('status'))?($errors->first('status')):''}}</div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection