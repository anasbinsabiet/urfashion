@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
<style>
    .col-lg-2.col-md-6 {
        padding-top: 30px;
        font-size: 18px;
        padding-bottom: 10px;
    }

    div#recipeCarousel .active {
        background: transparent;
    }
</style>

<section class="text-center mb-5 a">
    <!-- //////////////////////Slider starts -->
    <!-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"> -->
    <!-- Carousel indicators -->
    <!-- <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol> -->

    <!-- Wrapper for carousel items -->
    <!-- <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset($data->slider1)}}" class="d-block w-100" alt="Slide 1">
            </div> -->
    <!-- <div class="carousel-item">
                <img src="{{asset($data->slider2)}}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset($data->slider3)}}" class="d-block w-100" alt="Slide 3">
            </div> -->
    <!-- </div> -->

    <!-- Carousel controls -->
    <!-- <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div> -->
    <!-- //////////////////////Slider ends -->
    <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true" data-infinite="true">
        <div class="carousel-box">
            <a href="{{url('/')}}">
                @auth
                <img class="d-block w-100 img-fit rounded shadow-sm" src="{{asset($data->slider3)}}" alt="Ur Fashion Reseller promo">
                @else
                <img class="d-block w-100 img-fit rounded shadow-sm" src="{{asset($data->slider1)}}" alt="Ur Fashion Reseller promo">
                @endauth

            </a>
        </div>
        <!-- <div class="carousel-box">
            <a href="https://circle.com.bd/flash-deal/113">
                <img class="d-block w-100 img-fit rounded shadow-sm" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/H9q9uI7QwdiExVPyi2TZPLTG55ZKbItrABG31zhR.jpg" alt="Circle Reseller promo" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';">
            </a>
        </div>
        <div class="carousel-box">
            <a href="https://circle.com.bd/flash-deal/89">
                <img class="d-block w-100 img-fit rounded shadow-sm" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/Q6cdqsrf9TSl7SNBrtDjlwFUIoktOuU6PMJvZxMR.gif" alt="Circle Reseller promo" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';">
            </a>
        </div>
        <div class="carousel-box">
            <a href="https://circle.com.bd/flash-deal/139">
                <img class="d-block w-100 img-fit rounded shadow-sm" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/kXfGcEl4PStRT2VnDN4GZRaZ3p3sdWU4PYafCxlW.jpg" alt="Circle Reseller promo" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';">
            </a>
        </div>
        <div class="carousel-box">
            <a href="https://circle.com.bd/flash-deal/30">
                <img class="d-block w-100 img-fit rounded shadow-sm" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/aJYofijIWi52zHpBpWMOWKe2lm3S6Epoqek5atf1.png" alt="Circle Reseller promo" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';">
            </a>
        </div>
        <div class="carousel-box">
            <a href="https://circle.com.bd/flash-deal/66">
                <img class="d-block w-100 img-fit rounded shadow-sm" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/bdfCopQ39xDhUTdjil4DtcLZbV9G3BQSUoeq3i2N.gif" alt="Circle Reseller promo" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';">
            </a>
        </div>
        <div class="carousel-box">
            <a href="https://circle.com.bd/flash-deal/110">
                <img class="d-block w-100 img-fit rounded shadow-sm" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/ys1ySkoIuWd3It2GlAjuWWAUJVSBgKtvjd1eWMb9.jpg" alt="Circle Reseller promo" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';">
            </a>
        </div> -->
    </div>
</section>
@auth
<input type="hidden" name="user_id" id="user_id" value="@if(!empty(Auth::user()->id)){{ Auth::user()->id }}@endif" />
<section class="text-center mb-1">
    <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

        <div class="d-flex mb-3 align-items-baseline border-bottom">
            <h3 class="h5 fw-700 mb-0">
                <!--<span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Trending Categories</span>-->
            </h3>
        </div>

        <div class="aiz-carousel gutters-10 half-outside-arrow slick-initialized slick-slider" data-items="4" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-rows="2">
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 3310px; transform: translate3d(0px, 0px, 0px);">
                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 331px;">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/women-fashion" class="d-block p-3" tabindex="0">
                                            <img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/pml3TJFFlUAeU7FRSHf6GfevexPzyQ1XRW3KHFEe.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/pml3TJFFlUAeU7FRSHf6GfevexPzyQ1XRW3KHFEe.jpg" alt="Women Clothing &amp; Fashion" class="img-fluid lazyloaded" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="{{url('/')}}/category/women-clothing-fashions" class="text-reset" tabindex="0">Women Clothing &amp; Fashion</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="{{url('/')}}/category/women-clothing-fashions" class="btn btn-soft-primary btn-sm" tabindex="0">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/women-fashion" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/pml3TJFFlUAeU7FRSHf6GfevexPzyQ1XRW3KHFEe.jpg"-->
                                    <!--            alt="Women Clothing &amp; Fashion"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/women-fashion" class="text-reset">Women Clothing &amp; Fashion</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/women-fashion" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 331px;">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/men-fashion" class="d-block p-3" tabindex="0">
                                            <img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/1tnSXbYTxzmj2HkDZmyZfCqAoZdsQQDsfhNKI96d.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/1tnSXbYTxzmj2HkDZmyZfCqAoZdsQQDsfhNKI96d.jpg" alt="Men Clothing &amp; Fashion" class="img-fluid lazyloaded" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/men-fashion" class="text-reset" tabindex="0">Men Clothing &amp; Fashion</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/men-fashion" class="btn btn-soft-primary btn-sm" tabindex="0">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/men-fashion" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/1tnSXbYTxzmj2HkDZmyZfCqAoZdsQQDsfhNKI96d.jpg"-->
                                    <!--            alt="Men Clothing &amp; Fashion"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/men-fashion" class="text-reset">Men Clothing &amp; Fashion</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/men-fashion" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 331px;">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/kids-toys" class="d-block p-3" tabindex="0">
                                            <img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/4LuwTyjE4q7wjrjlbBexO1DoH5QYjBWq62rA5ter.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/4LuwTyjE4q7wjrjlbBexO1DoH5QYjBWq62rA5ter.jpg" alt="Kids" class="img-fluid lazyloaded" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/kids-toys" class="text-reset" tabindex="0">Kids</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/kids-toys" class="btn btn-soft-primary btn-sm" tabindex="0">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/kids-toys" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/4LuwTyjE4q7wjrjlbBexO1DoH5QYjBWq62rA5ter.jpg"-->
                                    <!--            alt="Kids"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/kids-toys" class="text-reset">Kids</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/kids-toys" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 331px;">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="d-block p-3" tabindex="0">
                                            <img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/GeS5aX99DMDFnzV73grEFjaAw4cFAANfIcDK5CGk.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/GeS5aX99DMDFnzV73grEFjaAw4cFAANfIcDK5CGk.jpg" alt="Purse &amp; Jewelry" class="img-fluid lazyloaded" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="text-reset" tabindex="0">Purse &amp; Jewelry</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="btn btn-soft-primary btn-sm" tabindex="0">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/GeS5aX99DMDFnzV73grEFjaAw4cFAANfIcDK5CGk.jpg"-->
                                    <!--            alt="Purse &amp; Jewelry"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="text-reset">Purse &amp; Jewelry</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 331px;" tabindex="-1">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/home-decor-zeqkk" class="d-block p-3" tabindex="-1">
                                            <img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/Yqs0HAlZoD6ujb2mVjPWcs6D0bhTa0sGPZj4CsQ8.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/Yqs0HAlZoD6ujb2mVjPWcs6D0bhTa0sGPZj4CsQ8.jpg" alt="Home Decor" class="img-fluid lazyloaded" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/home-decor-zeqkk" class="text-reset" tabindex="-1">Home Decor</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/home-decor-zeqkk" class="btn btn-soft-primary btn-sm" tabindex="-1">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/home-decor-zeqkk" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/Yqs0HAlZoD6ujb2mVjPWcs6D0bhTa0sGPZj4CsQ8.jpg"-->
                                    <!--            alt="Home Decor"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/home-decor-zeqkk" class="text-reset">Home Decor</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/home-decor-zeqkk" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 331px;" tabindex="-1">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/essential-products-dwsa3" class="d-block p-3" tabindex="-1">
                                            <img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/34jHB20gcl17vGmrhx7g8U2A3JGvqvnY4vOCsM76.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/34jHB20gcl17vGmrhx7g8U2A3JGvqvnY4vOCsM76.jpg" alt="Essential products" class="img-fluid lazyloaded" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/essential-products-dwsa3" class="text-reset" tabindex="-1">Essential products</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/essential-products-dwsa3" class="btn btn-soft-primary btn-sm" tabindex="-1">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/essential-products-dwsa3" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/34jHB20gcl17vGmrhx7g8U2A3JGvqvnY4vOCsM76.jpg"-->
                                    <!--            alt="Essential products"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/essential-products-dwsa3" class="text-reset">Essential products</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/essential-products-dwsa3" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 331px;" tabindex="-1">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="d-block p-3" tabindex="-1">
                                            <img src="https://circle.com.bd/public/assets/img/placeholder.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/bUuZd4TsLeNHWmB5urYBq87XmfUMgXEX7eNcScSE.jpg" alt="Islamic Items" class="img-fluid lazyload" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="text-reset" tabindex="-1">Islamic Items</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="btn btn-soft-primary btn-sm" tabindex="-1">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/bUuZd4TsLeNHWmB5urYBq87XmfUMgXEX7eNcScSE.jpg"-->
                                    <!--            alt="Islamic Items"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="text-reset">Islamic Items</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 331px;" tabindex="-1">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/beauty-products-munzb" class="d-block p-3" tabindex="-1">
                                            <img src="https://circle.com.bd/public/assets/img/placeholder.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/A0WLM2nQ7tBSIMWC9dG20EWuhZpysn90MRXANN0R.jpg" alt="Beauty Products" class="img-fluid lazyload" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/beauty-products-munzb" class="text-reset" tabindex="-1">Beauty Products</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/beauty-products-munzb" class="btn btn-soft-primary btn-sm" tabindex="-1">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/beauty-products-munzb" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/A0WLM2nQ7tBSIMWC9dG20EWuhZpysn90MRXANN0R.jpg"-->
                                    <!--            alt="Beauty Products"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/beauty-products-munzb" class="text-reset">Beauty Products</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/beauty-products-munzb" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 331px;" tabindex="-1">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="d-block p-3" tabindex="-1">
                                            <img src="https://circle.com.bd/public/assets/img/placeholder.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/38Gp5D55ShxKbk8AKdJkzWdOE2bXUG2LVJU23KAu.jpg" alt="Gadget &amp; Electronics" class="img-fluid lazyload" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="text-reset" tabindex="-1">Gadget &amp; Electronics</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="btn btn-soft-primary btn-sm" tabindex="-1">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/38Gp5D55ShxKbk8AKdJkzWdOE2bXUG2LVJU23KAu.jpg"-->
                                    <!--            alt="Gadget &amp; Electronics"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="text-reset">Gadget &amp; Electronics</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 331px;" tabindex="-1">
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="https://circle.com.bd/category/personal-care-gmp2m" class="d-block p-3" tabindex="-1">
                                            <img src="https://circle.com.bd/public/assets/img/placeholder.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/EtkjPPzQXtiQvUhmKnx6MoBlyDXjxVbnxWuy5zci.jpg" alt="Personal Care" class="img-fluid lazyload" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="https://circle.com.bd/category/personal-care-gmp2m" class="text-reset" tabindex="-1">Personal Care</a>
                                            </h2>
                                            <!--<div class="rating rating-sm mb-2">-->

                                            <!--        <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                            <!--</div>-->
                                            <a href="https://circle.com.bd/category/personal-care-gmp2m" class="btn btn-soft-primary btn-sm" tabindex="-1">
                                                View All Products <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="carousel-box" style="width: 100%; display: inline-block;">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <!--<div class="col-4">-->
                                    <!--    <a href="https://circle.com.bd/category/personal-care-gmp2m" class="d-block p-3">-->
                                    <!--        <img-->
                                    <!--            src="https://circle.com.bd/public/assets/img/placeholder.jpg"-->
                                    <!--            data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/EtkjPPzQXtiQvUhmKnx6MoBlyDXjxVbnxWuy5zci.jpg"-->
                                    <!--            alt="Personal Care"-->
                                    <!--            class="img-fluid lazyload"-->
                                    <!--            onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder-rect.jpg';"-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-8 border-left border-light">-->
                                    <!--    <div class="p-3 text-left">-->
                                    <!--        <h2 class="h6 fw-600 text-truncate">-->
                                    <!--            <a href="https://circle.com.bd/category/personal-care-gmp2m" class="text-reset">Personal Care</a>-->
                                    <!--        </h2>-->
                                    <!--        <div class="rating rating-sm mb-2">-->

                                    <!--                <i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i><i class = 'las la-star active'></i>-->

                                    <!--        </div>-->
                                    <!--        <a href="https://circle.com.bd/category/personal-care-gmp2m" class="btn btn-soft-primary btn-sm">-->
                                    <!--            View Details <i class="las la-angle-right"></i>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<section class="text-center">
    <div class="text-center mb-5">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="row gutters-12">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <a href="{{url('offer')}}/women-clothing-fashions" class="d-block text-reset">
                            <img src="{{asset('frontend/images/b2.png')}}" alt="More Profitable Products" class="img-fit w-100 ls-is-cached lazyloaded">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center">
    <div class="text-center mb-5">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="row no-gutters">
                <div class="col-md-6 pr-3">
                    <a href="{{url('offer')}}/men-clothing-fashion"><img width="100%" height="300" src="frontend/images/hb1.jpg"></a>
                </div>
                <div class="col-md-6 pl-3">
                    <a href="{{url('offer')}}/beauty-products"><img width="100%" height="300" src="frontend/images/hb2.jpg"></a>
                </div>
            </div>
            <div class="row no-gutters pt-4">
                <div class="col-md-6 pr-3">
                    <a href="{{url('offer')}}/home-decor"><img width="100%" height="300" src="frontend/images/hb3.jpg"></a>
                </div>
                <div class="col-md-6 pl-3">
                    <a href="{{url('offer')}}/kids-toys"><img width="100%" height="300" src="frontend/images/hb4.jpg"></a>
                </div>
            </div>
            <div class="row no-gutters pt-4">
                <div class="col-md-6 pr-3">
                    <a href="{{url('offer')}}/gadget-electronics"><img width="100%" height="300" src="frontend/images/hb3.jpg"></a>
                </div>
                <div class="col-md-6 pl-3">
                    <a href="{{url('offer')}}/purse-jewelry"><img width="100%" height="300" src="frontend/images/hb4.jpg"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="section_featured">
    <section class="text-center mb-5">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Trending Now</span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow slick-initialized slick-slider" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows="true" data-infinite="true">
                    <div class="row">
                        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        @foreach($trendings as $row)
                                        @php
                                        $product_image = App\ColorImage::where('product_id', $row->id)->orderBy('color_id')->take(1)->first();
                                        @endphp
                                        <div class="col-sm-2">
                                            <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                                <div class="position-relative">
                                                    <a href="{{ url('product') }}/{{ $row->product_slug }}" class="d-block" tabindex="0">
                                                        <img class="img-fit mx-auto h-140px h-md-210px lazyloaded" src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif">
                                                    </a>
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" id="{{ $row->id }}" class="addToWishList" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                            <i class="la la-heart-o"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" onclick="addToCompare(17190)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0">
                                                            <i class="las la-sync"></i>
                                                        </a>
                                                        <!--<a href="javascript:void(0)" onclick="showAddToCartModal(17190)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">-->
                                                        <!--    <i class="las la-shopping-cart"></i>-->
                                                        <!--</a>-->
                                                    </div>
                                                    @php
                                                    $product_sizes = App\Models\ProductSize::where('product_id', $row->id)->take(1)->select('quantity')->first();
                                                    @endphp
                                                    @isset($product_sizes->quantity)
                                                    <div class="absolute-top-left">
                                                        <span class="badge badge-md badge-inline badge-pill badge-success">In stock</span>
                                                    </div>
                                                    @endisset
                                                    @if(!empty($row->discount))
                                                    <div class="absolute-top-left" @isset($product_sizes->quantity) style="top: 30px;"  @endisset>
                                                        <span class="badge badge-md badge-inline badge-pill badge-success">{{ $row->discount }}% off</span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="p-md-3 p-2 text-left">
                                                    <div class="fs-15">
                                                        <del class="fw-600 opacity-50 mr-1">???{{ $row->selling_price }}</del>
                                                        <span class="fw-700 text-primary">???{{ $row->discount_price }}</span>
                                                    </div>
                                                    <div class="rating rating-sm mt-1">
                                                        <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                                                    </div>
                                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                        <a href="{{ url('product') }}/{{ $row->product_slug }}" class="d-block text-reset" tabindex="0">{{ $row->product_name }}</a>
                                                    </h3>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h5>
                                                                Product with Variants</h5>
                                                            <h5 class="price-text-color">
                                                                $199.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-6">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                                        </p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                                        </p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h5>
                                                                Grouped Product</h5>
                                                            <h5 class="price-text-color">
                                                                $249.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-6">
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                                        </p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                                        </p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h5>
                                                                Product with Variants</h5>
                                                            <h5 class="price-text-color">
                                                                $149.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-6">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                                        </p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                                        </p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h5>
                                                                Product with Variants</h5>
                                                            <h5 class="price-text-color">
                                                                $199.99</h5>
                                                        </div>
                                                        <div class="rating hidden-sm col-md-6">
                                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                            </i><i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="separator clear-left">
                                                        <p class="btn-add">
                                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                                        </p>
                                                        <p class="btn-details">
                                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                                        </p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@else
<section class="bg-white text-center mt-auto pb-5 pt-2">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12 col-md-12 text-center">
                <h4 style="line-height: 46px;font-size: 36px;color: #f38234;font-weight: bold;">Benefit of a Reseller</h4>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="rounded-background">
                    <img src="{{asset('staticfile/images/phone.png')}}" />
                </div <h4 class="h4 pt-3">Browse</h4>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="rounded-background">
                    <img src="{{asset('staticfile/images/tshirt.png')}}" />
                </div <h4 class="h4 pt-3">Share & Sell</h4>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="rounded-background">
                    <img src="{{asset('staticfile/images/delivery.png')}}" />
                </div <h4 class="h4 pt-3">Earn</h4>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="rounded-background">
                    <img src="{{asset('staticfile/images/profit.png')}}" />
                </div <h4 class="h4 pt-3">Browse</h4>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="rounded-background">
                    <img src="{{asset('staticfile/images/dm.png')}}" />
                </div <h4 class="h4 pt-3">Share & Sell</h4>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="rounded-background">
                    <img src="{{asset('staticfile/images/free.png')}}" />
                </div <h4 class="h4 pt-3">Earn</h4>
            </div>
        </div>
    </div>
</section>
<section class="bg-white mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <iframe width="100%" height="330" src="https://www.youtube.com/embed/YVjpvEmEcuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <h4 style="line-height: 52px;font-size: 35px;font-weight:bold;">Welcome to Circle Reseller</h4>
                <p>Gives the opportunity of additional income generation using technology and mobile app based marketplace or social-commerce platform for you as the Reseller, to sell products online through social media (e.g., Facebook, WhatsApp, Viber, Instagram, Imo etc.).
                </p>
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="{{asset('staticfile/images/clipboard.png')}}" />
                        <p class="font-weight-bold pt-2">Simple Registration</p>
                        <p>Simple Registration/Engagement</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('staticfile/images/work-from-home.png')}}" />
                        <p class="font-weight-bold pt-2">Working from Home</p>
                        <p>Working from home or in flexible hour</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('staticfile/images/money.png')}}" />
                        <p class="font-weight-bold pt-2">Good Earning</p>
                        <p>Good Earning (Not Limited)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white text-center mt-auto py-6">
    <div class="container">
        <h2 class="font-weight-bold">Frequently Asked Queries</h2>
        <p style="font-size: 18px;">Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless
            expertise whereas tactical relationships.Still have questions? Contact us</p>
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample" style="text-align: left;">
                    <div class="card">
                        <div class=" card-header headerColor " id="headingOne">
                            <h2 class="mb-0">
                                <button type="button" class="btn text-white button-width new-button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">???????????? ????????????????????????????????? ?????????????????????????????????</div>
                                        <div class="ml-auto p-2 bd-highlight"> <i class="fa fa-angle-down"></i></div>
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <p>
                                </p>
                                <ul>
                                    <li>??????????????????????????? ??????????????????????????? ???????????? -</li>
                                    <li>????????????????????? ?????? ??????????????? ?????????????????? -</li>
                                    <li>???????????? ?????????????????? ??? ??????????????????????????? ???????????????????????? ???????????? ?????? ????????????-</li>
                                    <li>?????????????????? ???????????? ?????? ??????????????? ????????? ?????????????????? ??????-</li>
                                    <li>????????? ??????????????????????????? ??????????????? ???????????????????????? ???????????? ?????? ??????????????? </li>
                                    <li>????????? ????????????????????? ????????????????????? ?????????????????? ??????????????? ?????? ????????????- </li>
                                    <li>???????????? ??????????????? ???????????????????????? ??? ??????????????? ????????????????????? ???????????? ?????? ????????????- </li>
                                    <li>?????????????????????????????? ??????????????????????????? ???????????? ????????? ??????????????????</li>
                                    <li>????????????????????? ??????????????? ??????????????? ???????????? ??????????????????????????? ??? ???????????? ????????????????????????????????? ?????????????????? ??????????????? </li>
                                </ul>
                                ???UR Fashion ??????????????? ?????? ????????? ????????????????????? ?????????????????? ????????? ?????????????????? ????????? ??????????????????
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header headerColor" id="headingTwo">
                            <h2 class="mb-0">
                                <button type="button" class="btn text-white button-width new-button" data-toggle="collapse" data-target="#collapseOne">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">???????????? ?????? ?????????????????? ??????????????????- </div>
                                        <div class="ml-auto p-2 bd-highlight"> <i class="fa fa-angle-down"></i></div>
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                </p>
                                <ul>
                                    <li>????????????????????? ?????? ??????- ???????????? ????????????????????? ????????????????????????</li>
                                    <li>????????????????????? ?????? ???????????? ???????????? ????????? ?????????????????? ????????? ????????????????????? ????????????????????? ??????????????? ?????????- ???????????? ?????????????????? ????????? ????????????
                                        ??????????????? ???????????? ??????????????????</li>
                                    <li>?????????????????? ??????????????????????????? ????????????????????? ??????????????? ????????????</li>
                                    <li>????????? ?????? ???????????????????????? ???????????????????????? ??? ??????????????????????????? ????????????????????? ????????????????????? ??????????????? ????????????</li>
                                    <li>????????????????????? ?????????????????????????????? ????????????????????? ????????? ???????????? ???????????? ????????? ???????????? ????????????????????? (?????? % ???????????? ??????% ?????????????????????)
                                        ????????????????????? ??????????????????</li>
                                    <li>????????????????????? ????????????????????? ??????????????? ??? ?????????????????? ???????????? ????????????????????? ??? ???????????????????????????</li>
                                    <li>??????????????? Facebook page ??????????????? ????????? ??????????????? ??? ?????????????????? ?????????????????? ????????? ????????????(????????? ????????????????????? ??????) </li>
                                    <li>??????????????? Facebook page ?????? ????????????????????? ???????????? ???????????? (????????? ????????????????????? ??????)</li>
                                    <li>??????????????? ???????????? ???????????? ?????????????????? ??? ????????????????????????????????? ????????? ???????????? ????????? ????????????????????? ??????)</li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header headerColor" id="headingThree">
                            <h2 class="mb-0">
                                <button type="button" class="btn collapsed text-white button-width new-button" data-toggle="collapse" data-target="#collapseThree">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">?????????????????? ?????????????????????????????? ????????????????????? ?????????????????????-</div>
                                        <div class="ml-auto p-2 bd-highlight"> <i class="fa fa-angle-down"></i></div>
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                </p>
                                <ul>
                                    <li>?????????????????? ????????? ???????????????, ???????????????????????? ????????????????????? ??????????????? ????????????????????? ???????????????, ????????????????????? ??????????????? ??????????????? ???????????????,
                                        ?????????????????? ?????????????????? ??????????????????</li>
                                    <li>?????? ?????? ????????????- ???????????????, ??????????????? ????????????- ???????????????, ??????????????? ??? ????????? ??????- ???????????????,</li>
                                    <li>??????????????????????????? ???????????????????????? ??????????????? ?????????????????????, ??????????????? ??? ???????????????????????? ??????????????????????????? ??????????????? ?????????????????????,???</li>
                                    <li>???????????? ???????????????????????? ?????????????????????, ??????- ????????????????????? ????????????????????? ????????????- ?????????????????????, ??????????????? ??? ??????????????? ????????????????????????
                                    </li>
                                    <li>????????? ????????????????????????, ???????????????????????? ?????????????????????????????? ????????????????????????, ????????????????????? ??????????????????????????? ??????????????? ???????????????????????????</li>
                                    <li>?????????????????????, ???????????? ???????????????, ????????????????????????</li>
                                    <li>?????????????????? ??? ???????????? ???????????????, ????????????, ???????????????, ??????????????? ???</li>
                                    <li> ????????????- ?????????, ?????? ?????????, ?????????????????????, ?????????????????? ?????????????????????, ?????????,</li>
                                    <li>????????? ?????????????????? ????????????, ???????????????????????? ????????????, ?????????????????? ???????????????</li>
                                    <li>??????????????? ????????????????????? ?????????????????? ?????????????????? ?????????????????????????????????</li>
                                    <li>??????????????????????????? ????????????????????? ????????? ???????????????????????? ????????????????????????</li>
                                    <li>?????? ?????????????????? ???????????????????????? ???????????????????????? ????????????????????? ???</li>
                                </ul>
                                ????????? ???????????? ???????????????????????? ??????????????????????????? ?????????????????? ????????????????????? ??????????????????????????? ????????? ?????????????????? ???????????????????????? ???????????? ????????? ???????????????????????????
                                ?????? ??????????????? ??? ??????????????? ?????????????????????????????? ??????????????? ?????????% ?????? ???????????? ??? ?????????????????? ??????????????? ??????????????????
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header headerColor" id="headingFour">
                            <h2 class="mb-0">
                                <button type="button" class="btn collapsed text-white button-width new-button" data-toggle="collapse" data-target="#collapseFour">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">??????- ??????????????? ??????????????? ???????????????????????? / ???????????????????????? ???</div>
                                        <div class="ml-auto p-2 bd-highlight"> <i class="fa fa-angle-down"></i></div>
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                </p>
                                <ul>
                                    <li>Web site/Facebook page/50+ Business Group ??? ?????????????????? ??????????????? ????????????</li>
                                    <li>????????????????????? ?????????????????????????????? ????????????????????? ????????? ???????????? ???????????? ????????? ???????????? ????????????????????? (30% ?????????????????? ????????? ????????????????????????
                                        ?????????
                                        ??????????????? ????????? ???????????? ??????????????????????????? ???????????? ???????????? ???????????? ????????? ?????? ??????????????????????????? ?????? ?????????????????????????????? ???????????? ??????% ????????????
                                        ??????%
                                        ????????????????????? ?????????????????????????????? ??????????????? ????????????(Shirt Body Price TK.1000, 25% Off Sale Price TK.750
                                        Seller
                                        Commission 30% TK. 225, Company Price Tk. 525) ??? ??????????????? ??????????????? ??? ????????? ?????? ?????? , ????????????????????????
                                        ????????????
                                        ???????????????????????? ??????????????? ??????/????????? ???????????? ?????????????????? ??????????????? ?????????????????? ????????? ??????????????? ?????????????????? ????????? ?????????????????? ???????????? ??????-
                                        ??????????????? ????????????????????????????????? ????????? ??????????????????????????? ???????????????????????? ??????????????? ??????- ???????????????????????? ???????????? ?????????????????????????????? ???????????????
                                        ???????????????
                                        ????????? ??????????????????????????? ????????????????????? ???????????? ????????? ??????????????? ?????????????????? ?????????????????? ?????? ??????????????????????????? ????????????????????? ???????????????
                                        ?????????????????????
                                        ???????????? ????????? ???????????????????????? ??????????????? ???????????????</li>
                                    <li>????????? ??????-??????????????? ??????????????? ??? ???????????? ??????????????? ???????????? ???????????? ???????????? ???????????? ??????????????? ??????- ??????????????? ?????????????????? ???????????? ????????????
                                        ????????? ???????????????????????? ???% ??????????????? ?????????????????? ?????????????????? ??????????????? ???????????????????????? ?????????????????? ???????????? ?????????????????? ??????????????????????????????
                                        ??????????????????????????? ?????????????????? ????????? ????????? MRP ???????????? ?????? % ??????????????????????????????, ?????? ???????????????????????? ????????????????????? ?????????????????? ????????????
                                        ??????%
                                        ??????????????? ??????????????????</li>
                                    <li>??????????????? ??????-???????????????????????? ???????????????????????? ??????????????? ???????????????????????? ?????? ????????? ????????? ???????????? ????????????</li>
                                    <li>WhatsApp ??? Email address ??????????????? ???????????? ???????????????????????? ??????????????? ???-???????????? ??? ??? ?????? ???????????? ????????????????????????,
                                        ??????????????????????????? ?????? ????????? ??? ????????????????????? ????????????????????? ???????????? ?????????????????? ???????????? ???????????? ???????????? ??????????????????????????? ?????? ?????????,
                                        ??????????????????????????? ?????????, ?????????????????? ??? ??????????????????????????? ??????????????? ????????????????????? ?????? ????????? ????????? ??????????????? ??????????????? ?????????????????? ????????????,
                                        ?????????
                                        ??????????????? ??? ????????? ???????????? ?????????????????? ???????????? ??????????????? ??????????????? ?????? ?????? ?????? ????????????????????? ?????????????????? ????????????,</li>
                                    <li>??????????????????????????? ?????????????????? ???????????? ????????? ??????????????????????????? ???????????? ??? ?????????????????? ????????? ?????????????????????</li>
                                    <li>??????????????? ???????????? ??????- ??????????????? ??????????????? ????????? ???????????? ??????????????? ???????????? ????????????????????????</li>
                                    <li>????????????????????? ??????????????????????????? ??????????????????????????? ?????????????????????/ ???????????? ????????????????????? ?????????????????? ?????????????????? ?????????????????? ???????????? ????????? ????????????
                                        ??????????????? ??? ???????????? ?????? % ????????????????????? ??????????????????????????? ??????????????????????????? ?????????????????? ???????????? ????????????????????? ??????% ?????? ????????????
                                        ??????????????????????????????
                                        ???????????? ??????????????? ?????????????????? ???????????? ??? ?????????????????? ???????????? ?????????????????? ???????????? ??? ???????????? ???????????? ??????????????????</li>
                                    <li>?????????????????? ???????????? ?????????????????? ??????????????? ?????? ?????????????????? ???????????? ??????????????? ???- ???????????? ??? ???????????? ??? ??????????????????????????? ?????????????????????
                                        ???????????????????????? ????????? ??????????????? ???????????????????????? ???????????? ????????? ????????? ???????????? ????????????????????? ??? ??????????????? ???????????? ???????????? ????????? ????????????
                                        ??????????????????</li>
                                    <li>??????????????? ????????? ????????? ???????????? ???????????? ???/?????? ?????? ??????????????? ?????? ????????????????????? ??? ???????????????????????? ???????????? ??????????????????????????? ????????????
                                        ????????????</li>
                                    <li>?????????????????? ??????- ????????????????????? ???????????? ??? ????????? ????????????????????? ???????????? ???????????? ?????? ??????????????? ????????????????????? ???????????? ????????? ???????????????</li>
                                    <li>??????????????? ??????????????? ???????????? ???????????? ???????????? ????????? ?????? ????????? ????????? ??? ??? ????????? ????????? ???????????? ????????????</li>
                                    <li>????????? ??????????????????????????? ???????????????????????? ??? ????????? ?????????????????? ???????????? ??????????????? ???????????? ????????????????????? ????????? ?????????????????? ???????????? ??????????????????
                                        ??????????????? ???????????? ????????? ??????????????? ???????????? ????????? ????????? ????????????????????????</li>
                                    <li>????????? ??????????????? ???????????? ??????????????? ????????????????????? ????????? ?????????????????? ????????????????????? ????????????????????? ??????????????? ????????? ?????????????????? Group ??????
                                        ???????????? ?????? ????????? ?????????????????? ?????????????????? ??????????????? ??????????????? ???????????? ??????????????????</li>
                                </ul>
                                ????????? ?????????????????? ???????????? ??? ?????????????????? ???????????? ?????????????????? ?????????????????? ???????????? ???????????? ???????????? ????????????????????????????????? ???????????? ????????? ??????????????????
                                ?????????????????????????????? ??? ?????? ????????? ???????????? <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white text-center mt-auto py-6">
    <div class="container">
        <h2 class="font-weight-bold">WHAT OUR RESELLER SAY</h2>
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4">
                <img class="py-3" src="{{asset('staticfile/images/t1.png')}}" />
                <p>Great collection at Dhaka.</p>
                <strong>Hiiraan Axmed</strong>
            </div>
            <div class="col-lg-4 col-md-4">
                <img class="py-3" src="{{asset('staticfile/images/t2.png')}}" />
                <p>Ready to get started.</p>
                <strong>Faruque Mia</strong>
            </div>
            <div class="col-lg-4 col-md-4">
                <img class="py-3" src="{{asset('staticfile/images/t3.jpg')}}" />
                <p>Great for self business.</p>
                <strong>Razaul Hoque</strong>
            </div>
        </div>
    </div>
</section>
@endauth
<!-- <section class="bg-white text-center mt-auto py-6">
    <div class="container">
        <div class="row mx-auto my-auto justify-content-center">
        <div class="col-12 text-center mb-4"><h1 class="text-upperrcase">Featured Products</h1></div>
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <a href="#">
                                <div class="card">
                                    <a href="#" class="card-img">
                                        <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                                    </a>
                                    <div class="card-img-overlay">Slide 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 2</div>
                            </div>
                </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <a href="#">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                                </div>
                </a>
                                <div class="card-img-overlay">Slide 3</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 4</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 5</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 6</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</section> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* Custom style to prevent carousel from being distorted 
   if for some reason image doesn't load */
    #myCarousel .carousel-item {
        min-height: 280px;
    }

    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(25%);
        }

        .carousel-inner .carousel-item-start.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }
</style>
<script type="text/javascript">
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    });

    $(".addToWishList").click(function() {
        var product_id = this.id;
        var user_id = $('#user_id').val();
        if (user_id) {
            $.ajax({
                url: "{{ route('wishlist.store') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    product_id: product_id,
                },
                success: function(response) {
                    if(response == 'exists'){
                        toastr["warning"]("Already Exists!");
                    }else if(response == 'success'){
                        toastr["success"]("Success!");
                    }else{
                        toastr["error"]("failed!");
                    }
                }
            });
        } else {
            toastr["warning"]("Login to continue!");
        }
    });
</script>
@endsection