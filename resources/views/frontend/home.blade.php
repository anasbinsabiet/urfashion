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
                                                        <del class="fw-600 opacity-50 mr-1">৳{{ $row->selling_price }}</del>
                                                        <span class="fw-700 text-primary">৳{{ $row->discount_price }}</span>
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
                                        <div class="p-2 bd-highlight">নতুন উদ্যক্তাদের সমস্যাসমুহঃ</div>
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
                                    <li>ব্যবসায়িক অভিজ্ঞতার অভাব -</li>
                                    <li>ইনভেস্ট বা টাকার সমস্যা -</li>
                                    <li>সঠিক ব্যবসা ও প্রোডাক্ট নির্বাচন করতে না পারা-</li>
                                    <li>ব্যবসা করতে ভয় পাওয়া যদি লোকসান হয়-</li>
                                    <li>ভাল ব্যবসায়িক স্থান নির্বাচন করতে না পারা। </li>
                                    <li>সময় অনুযায়ী ক্রেতার চাহিদা বুজতে না পারা- </li>
                                    <li>পন্য দ্রুত ডেলিভারি ও উন্নত প্যাকেট করতে না পারা- </li>
                                    <li>অপ্রয়োজনীয় প্রোডাক্ট স্টক হয়ে যাওয়া।</li>
                                    <li>মার্কেট প্লেস গুলোর কাছে প্রোডাক্ট ও টাকা দীর্ঘমেয়াদি আটকিয়ে থাকা। </li>
                                </ul>
                                ‘UR Fashion আপনার এই সকল সমস্যার সমাধান করে দিচ্ছে খুব সহজেই।
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header headerColor" id="headingTwo">
                            <h2 class="mb-0">
                                <button type="button" class="btn text-white button-width new-button" data-toggle="collapse" data-target="#collapseOne">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">আমরা যা দিচ্ছি আপনাকে- </div>
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
                                    <li>অনলাইনে বা শো- রুমে ব্যবসার অভিজ্ঞতা</li>
                                    <li>ইনভেস্ট বা টাকা নিয়ে কোন চিন্তা নেই ব্যবসায় ইনভেস্ট আমরাই করব- আপনি ব্যবসা করে শুধু
                                        ইনকাম নিয়ে যাবেন।</li>
                                    <li>যাবতীয় প্রোডাক্ট সার্ভিস আমরাই দেব।</li>
                                    <li>এমন কি সারাদেশে ডেলিভারি ও প্রোডাক্ট পাকেজিং সার্ভিস আমরাই দেব।</li>
                                    <li>প্রতিটি প্রোডাক্টে পাচ্ছেন ১০০ টাকা থেকে ৫০০ টাকা পর্যন্ত (২৫ % থেকে ৫৫% পর্যন্ত)
                                        মুনাফার সুযোগ।</li>
                                    <li>বিভিন্ন মার্কেট প্লেস এ বিক্রয় করার পরামর্শ ও সহযোগিতা।</li>
                                    <li>আপনার Facebook page সেটআপ করে দেওয়া ও বিক্রয় উপযোগী করে দেব।(যদি প্রয়োজন হয়) </li>
                                    <li>আপনার Facebook page এর প্রমোশন দিয়ে দেব। (যদি প্রয়োজন হয়)</li>
                                    <li>আপনার ওয়েব সাইট ডিজাইন ও ডেভেলপমেন্ট করে দেব। যদি প্রয়োজন হয়)</li>
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
                                        <div class="p-2 bd-highlight">আমাদের প্রোডাক্টস অ্যান্ড সার্ভিস-</div>
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
                                    <li>ফর্মাল কটন শার্ট, ইন্ডিয়ান অ্যান্ড চায়না প্রিন্ট শার্ট, কেজুয়াল স্লিম ফিটিং শার্ট,
                                        পার্টি ডিজাইন শার্ট।</li>
                                    <li>পি কে পোলো- শার্ট, স্টেপ পোলো- শার্ট, লেকরা ও কটন টি- শার্ট,</li>
                                    <li>এক্সপোর্ট কুয়ালিটি জিন্স প্যান্ট, চায়না ও ইন্ডিয়ান ফেব্রিক্স জিন্স প্যান্ট,।</li>
                                    <li>টুইল গেবারডিন প্যান্ট, টু- কুয়াটার অ্যান্ড থ্রি- কুয়াটার, জগারস ও কারগো প্যান্ট।
                                    </li>
                                    <li>কটন পাঞ্জাবী, ইন্ডিয়ান ফেব্রিক্সস পাঞ্জাবী, প্রিন্ট পাঞ্জাবী। কাবলি পাঞ্জাবী।</li>
                                    <li>সোয়েটার, সুফট শার্ট, জ্যাকেট।</li>
                                    <li>ডিজাইন ও সলিড বোরকা, গাউন, হিজাব, আবেয়া ।</li>
                                    <li> থ্রি- পিস, অন পিস, পালাজ্জ, স্কারট পালাজ্জ, টপস,</li>
                                    <li>কটন তাঁতের শাড়ি, ইন্ডিয়ান শাড়ি, পার্টি শাড়ি।</li>
                                    <li>লেডিস অ্যান্ড জেন্টস আন্ডার গার্মেন্টস।</li>
                                    <li>বাচ্চাদের বিভিন্ন রকম ডিজাইনের কালেকশন।</li>
                                    <li>২৪ ঘন্টায় সারাদেশে ডেলিভারি সার্ভিস ।</li>
                                </ul>
                                বিঃ দ্রঃ বেশিরভাগ প্রোডাক্ট আমাদের নিজেস্য ব্রান্ডের এবং আমাদের ফেক্টরির তৈরি তাই প্রোডাক্ট
                                এর কালার ও ফিটিং গ্যারান্টি রয়েছে ১০০% আর সাইজ ও ডিজাইন রয়েছে ভরপুর।
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header headerColor" id="headingFour">
                            <h2 class="mb-0">
                                <button type="button" class="btn collapsed text-white button-width new-button" data-toggle="collapse" data-target="#collapseFour">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">রি- সেলার হওয়ার শর্তাবলী / কন্ডিশনস —</div>
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
                                    <li>Web site/Facebook page/50+ Business Group এ জয়েন্ট থাকতে হবে।</li>
                                    <li>প্রতিটি প্রোডাক্টে পাচ্ছেন ১০০ টাকা থেকে ৫০০ টাকা পর্যন্ত (30% মুনাফা এবং কাস্টমার
                                        যেন
                                        আপনার কাছ থেকে প্রোডাক্ট ক্রয় করতে পারে তাই সব প্রোডাক্ট এই কাস্টমারের জন্য ১৫% থেকে
                                        ৩০%
                                        পর্যন্ত ডিস্কাউন্ট থাকছে যেমন(Shirt Body Price TK.1000, 25% Off Sale Price TK.750
                                        Seller
                                        Commission 30% TK. 225, Company Price Tk. 525) । কমিশন পাবেন ৭ দিন পর পর , কাস্টমার
                                        থেকে
                                        ডেলিভারি চার্জ ৬০/১২০ টাকা অগ্রিম নিবেন বিকাশে এবং মেমতে উল্লেখ করে দিবেন। অথবা রি-
                                        সেলার গ্যারান্টার হয়ে প্রোডাক্ট ডেলিভারি যাবে। রি- সেলারদের অথবা কাস্টমারের ভুলের
                                        কারণে
                                        কোন প্রোডাক্ট রিপ্লেস করতে হলে চার্জ আপনারা দিবেন। আর কোম্পানির সমস্যার কারণে
                                        রিপ্লেস
                                        করতে হলে কোম্পানি চার্জ দিবে।</li>
                                    <li>কোন রি-সেলার মাসিক ৫ লক্ষ টাকার বেশি সেলস করলে তিনি সুপার রি- সেলার হিসেবে গণ্য হবেন
                                        এবং অতিরিক্ত ৫% বোনাস পাবেন। আপনারা চাইলে পাইকারিও বিক্রয় করতে পারবেন সেক্ষেত্রে
                                        প্রোডাক্ট প্রাইস হবে মূল MRP থেকে ৫০ % ডিস্কাউন্ট, আর রিসেলারা পাইকারি বিক্রয় থেকে
                                        ১০%
                                        কমিশন পাবেন।</li>
                                    <li>সুপার রি-সেলারদের ক্ষেত্রে ট্রেড লাইসেন্স এর ফটো কপি দিতে হবে।</li>
                                    <li>WhatsApp ও Email address থাকতে হবে। কোম্পানি আপনার ই-মেইল এ ৩ টি সেলস ট্রাইনিং,
                                        প্রোডাক্ট এর ছবি ও কনটেন্ট পাঠাবে। অথবা আমাদের ওয়েব সাইট থেকে প্রোডাক্ট এর ছবি,
                                        প্রোডাক্ট কোড, প্রাইস ও প্রোডাক্ট বিবরণ ডাউনলোড বা কপি করে আপনার সাইটে বিক্রয় করুন,
                                        এবং
                                        বিকাল ৫ টার মধ্য আমাদের ওয়েব সাইটে আপনার আই ডি এর মাধ্যমে অর্ডার করুন,</li>
                                    <li>কোম্পানির অনুমতি ছাড়া কোন প্রোডাক্ট আপলড ও বিক্রয় করা যাবেনা।</li>
                                    <li>মাসিক একটি রি- সেলার মিটিং হবে ঢাকা অফিসে অথবা অনলাইনে।</li>
                                    <li>প্রতিটা প্রোডাক্ট কোম্পানির রিটেইলস/ অফার প্রাইসে বিক্রয় করবেন। আমাদের পেইজ এবং ওয়েব
                                        সাইটে ০ থেকে ৩০ % পর্যন্ত ডিসকাউন্ট প্রোডাক্ট বিক্রয় করতে পারবেন। ৩০% এর বেশি
                                        ডিস্কাউন্ট
                                        অফার থাকলে সেগুলো আপলড ও অর্ডার নেয়া যাবেনা কারন এ গুলর সাইজ হবেনা।</li>
                                    <li>আমাদের সাথে জয়েন্ট হওয়ার ৭২ ঘণ্টার মধ্য আপনার ই- মেইল এ সেলস ও প্রোডাক্ট ডিটেইলস
                                        ট্রেইনিং চলে যাবে। ট্রেইনিং গুলো ভাল করে জেনে পরবর্তী ৩ দিনের মধ্য সেলস করা শুরু
                                        করবেন।</li>
                                    <li>প্রতি দুই মাস পরপর সেরা ৫/১০ জন সেলার কে ক্রেস্ট ও আকর্ষণীয় গিফট পুরুস্কার দেয়া
                                        হবে।</li>
                                    <li>সাধারণ রি- সেলারগন পরপর ৩ মাস মিনিমাম সেলস দিতে না পারলে আকাউন্ট হল্ড হয়ে যাবে।</li>
                                    <li>জাতীয় পরিচয় পত্র অথবা জন্ম সনদ এর ফটো কপি ও ১ কপি ছবি দিতে হবে।</li>
                                    <li>কোন অবস্থাতেই কোম্পানি ও দেশ বিরোধী কাজে লিপ্ত হওয়া যাবেনা। যদি আমাদের সাথে চুক্তি
                                        ত্যাগ করতে চান তাহলে পনের দিন আগে জানাবেন।</li>
                                    <li>কোন ধরনের তথ্য জানার প্রয়োজন হলে আমাদের হটলাইনে যোগাযোগ করবেন এবং আমাদের Group এর
                                        সাথে সব সময় জয়েন্ট থাকবেন এখানে আপডেট দেয়া থাকবে।</li>
                                </ul>
                                মনে রাখবেন আমরা ও আপনারা শুধু ব্যবসা করছিনা দেশে নতুন নতুন কর্মসংস্থান করছি তাই অবশ্যই
                                দায়িত্ববান ও সৎ হতে হবে। <p></p>
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