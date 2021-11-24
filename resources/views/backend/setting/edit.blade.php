@extends('backend.layouts.master')
@section('title','Edit SettingSetting')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('setting.index')}}">settings</a></li>
        <li class="breadcrumb-item active">Edit Setting</li>
    </ol>
    <h1 class="page-header">Setting</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Setting</h4>
                    <div class="panel-heading-btn">
                        {{-- <a href="{{ route('setting.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-tags"></i> Setting</a> --}}
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('setting.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Site Name</label>
                                            <input type="text" name="setting_name" value="{{$data->setting_name}}" placeholder="Setting name" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('setting_name'))?($errors->first('setting_name')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Site Logo</label>
                                            <input id="noImage" type="file" name="setting_logo" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->setting_logo)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('setting_logo'))?($errors->first('setting_logo')):''}}</div>
                                        </div>
                                    </div>


                                    <!-- <div class="form-group">
                                    <label for="">Header Title</label>
                                    <input type="text" name="header_title" value="{{$data->header_title}}" class="form-control">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('header_title'))?($errors->first('header_title')):''}}</div>
                                </div> -->

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="header_phone1" value="{{$data->header_phone1}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('header_phone1'))?($errors->first('header_phone1')):''}}</div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Delivery Charge Within Dhaka</label>
                                            <input type="text" name="inside_dhaka_charge" value="{{$data->inside_dhaka_charge}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('inside_dhaka_charge'))?($errors->first('inside_dhaka_charge')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Delivery Charge Outside Dhaka</label>
                                            <input type="text" name="outside_dhaka_charge" value="{{$data->outside_dhaka_charge}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('outside_dhaka_charge'))?($errors->first('outside_dhaka_charge')):''}}</div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Header Right Image</label>
                                            <input id="header_right_image" type="file" name="header_right_image" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->header_right_image)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('header_right_image'))?($errors->first('header_right_image')):''}}</div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group">
                                    <label for="">Header Phone 2</label>
                                    <input type="text" name="header_phone2" value="{{$data->header_phone2}}" placeholder="header_phone2" class="form-control">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('header_phone2'))?($errors->first('header_phone2')):''}}</div>
                                </div> -->
                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Slider 1</label>
                                            <input id="slider1" type="file" name="slider1" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->slider1)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('slider1'))?($errors->first('slider1')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Slider 2</label>
                                            <input id="slider2" type="file" name="slider2" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->slider2)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('slider2'))?($errors->first('slider2')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Slider 3</label>
                                            <input id="slider3" type="file" name="slider3" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->slider3)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('slider3'))?($errors->first('slider3')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Home Banner 1</label>
                                            <input id="home_banner1" type="file" name="home_banner1" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->home_banner1)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('home_banner1'))?($errors->first('home_banner1')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Home Banner 2</label>
                                            <input id="home_banner2" type="file" name="home_banner2" class="form-control">
                                            <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->home_banner2)}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('home_banner2'))?($errors->first('home_banner2')):''}}</div>
                                        </div>
                                    </div>

                                    <!-- 
                                <div class="form-group">
                                    <label for="">Home Banner 2</label>
                                    <input id="home_banner_2" type="file" name="home_banner_2" class="form-control">
                                    <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->home_banner_2)}}" alt="image">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('home_banner_2'))?($errors->first('home_banner_2')):''}}</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Home Banner 3</label>
                                    <input id="home_banner_3" type="file" name="home_banner_3" class="form-control">
                                    <img style="padding:4px;border:1px solid #ddd; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset($data->home_banner_3)}}" alt="image">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('home_banner_3'))?($errors->first('home_banner_3')):''}}</div>
                                </div> -->

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <textarea class="form-control" name="working_hour">{{$data->working_hour}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('working_hour'))?($errors->first('working_hour')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Footer Social Link 1 (Facebook)</label>
                                            <input type="text" name="footer_social_link1" value="{{$data->footer_social_link1}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('footer_social_link1'))?($errors->first('footer_social_link1')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Footer Social Link 2 (Linkedin)</label>
                                            <input type="text" name="footer_social_link2" value="{{$data->footer_social_link2}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('footer_social_link2'))?($errors->first('footer_social_link2')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Footer Social Link 3 (Youtube)</label>
                                            <input type="text" name="footer_social_link3" value="{{$data->footer_social_link3}}" class="form-control">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('footer_social_link3'))?($errors->first('footer_social_link3')):''}}</div>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                    <label for="">How To Order</label>
                                    <textarea class="summernote" name="how_to_order">{{$data->how_to_order}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('how_to_order'))?($errors->first('how_to_order')):''}}</div>
                                </div>

                                <div class="form-group">
                                    <label for="">Policy</label>
                                    <textarea class="summernote" name="policy">{{$data->policy}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('policy'))?($errors->first('policy')):''}}</div>
                                </div>

                                <div class="form-group">
                                    <label for="">About Us</label>
                                    <textarea class="summernote" name="about_us">{{$data->about_us}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('about_us'))?($errors->first('about_us')):''}}</div>
                                </div> -->

                                    <div class="col-md-4 pr-5">
                                        <div class="form-group">
                                            <label for="">Footer Copyright</label>
                                            <textarea class="form-control" name="footer_copyright">{{$data->footer_copyright}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('footer_copyright'))?($errors->first('footer_copyright')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Save</button>
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
@endsection