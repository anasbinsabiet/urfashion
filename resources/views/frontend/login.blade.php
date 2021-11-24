@extends('frontend.layouts.master')
@section('title','Login')
@section('content')
<section class="gry-bg py-5">
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                    <div class="card">
                        <div class="text-center pt-4">
                            <h1 class="h4 fw-600">
                                Login to your account.
                            </h1>
                        </div>
                        <div class="px-4 py-3 py-lg-4">
                            <div class="">
                                @if(!empty($errors))
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @endif
                                <form class="form-default" role="form" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('username') is-invalid @enderror @error('email') is-invalid @enderror @error('mobile') is-invalid @enderror" value="" placeholder="Email or Phone" name="username" id="username">
                                        <span class="opacity-60">Use country code before number</span>
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('username'))?($errors->first('username')):''}}</div>
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" id="password">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="remember">
                                                <span class="opacity-60">Remember Me</span>
                                                <span class="aiz-square-check"></span>
                                            </label>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="https://circle.com.bd/password/reset" class="text-reset opacity-60 fs-14">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <button type="submit" class="btn btn-primary btn-block fw-600">Login</button>
                                    </div>
                                </form>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{route('login.google')}}" class="btn btn-danger btn-block">Login with Google</a>
                                        <a href="{{route('login.facebook')}}" class="btn btn-primary btn-block">Login with Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="text-center">-->
                                <!--    <p class="text-muted mb-0">Dont have an account?</p>-->
                                <!--    <a href="https://circle.com.bd/users/registration">Register Now</a>-->
                                <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection