@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<style>
    .container h1 {
        margin-top: 0px;
    }
</style>
<div style="background-color:white">
    <section class="text-center mb-5">
        <img src="{{asset('frontend/images/b2.png')}}" alt="More Profitable Products" class="img-fit w-100 ls-is-cached lazyloaded">
    </section>
    <section class="mb-4">
        <div class="container">
            <div class="text-center text-dark">
                <h1 class="h2 fw-600">More Profitable Products</h1>
                <!-- <div class="aiz-count-down aiz-count-down-lg ml-3 align-items-center justify-content-center" data-date="2021/11/11 23:59:00">
                    <div class="countdown-item"><span class="countdown-digit">3</span></div><span class="countdown-separator">:</span>
                    <div class="countdown-item"><span class="countdown-digit">04</span></div><span class="countdown-separator">:</span>
                    <div class="countdown-item"><span class="countdown-digit">06</span></div><span class="countdown-separator">:</span>
                    <div class="countdown-item"><span class="countdown-digit">22</span></div>
                </div> -->
            </div>
            @if(count($products) > 0)
            @else
            <center>
                <h4 style="padding: 100px;width: 100%;">No Products Available!</h4>
            </center>
            @endif
            <div class="row gutters-5 row-cols-xxl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                @foreach($products as $row)
                @php
                $product_image = App\ColorImage::where('product_id', $row->id)->orderBy('color_id')->take(1)->first();
                @endphp
                <div class="col mb-2">
                    <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md h-100 has-transition bg-white">
                        <div class="position-relative">
                            <a href="{{ url('product') }}/{{ $row->product_slug }}" class="d-block">
                                <img class="img-fit mx-auto h-160px h-sm-200px h-md-220px h-xl-270px lazyloaded" src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="{{ $row->product_name }}" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                            </a>
                            <div class="absolute-top-right aiz-p-hov-icon">

                                <a href="javascript:void(0)" onclick="addToCompare(828)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                    <i class="las la-sync"></i>
                                </a>

                                <a href="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" data-toggle="tooltip" data-title="Download Image" data-placement="left">
                                    <i class="las la-download"></i>
                                </a>
                            </div>
                        </div>
                        @php
                        $product_sizes = App\Models\ProductSize::where('product_id', $row->id)->take(1)->select('quantity')->first();
                        @endphp
                        @isset($product_sizes->quantity)
                        <div class="absolute-top-left"> 
                            <span class="badge badge-md badge-inline badge-pill badge-success">In Stock</span>
                        </div>
                        @endisset
                        @if(!empty($row->discount))
                        <div class="absolute-top-left" @isset($product_sizes->quantity) style="top: 30px;"  @endisset>
                            <span class="badge badge-md badge-inline badge-pill badge-success">{{ $row->discount }}% off</span>
                        </div>
                        @endif
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                <span class="fw-700 text-primary">৳{{ $row->discount_price ? $row->discount_price : $row->selling_price }}</span>
                            </div>
                            <div class="rating rating-sm mt-1">
                                <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                <a href="{{ url('product') }}/{{ $row->product_slug }}" class="d-block text-reset">{{ $row->product_name }}</a>
                            </h3>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="aiz-pagination aiz-pagination-center mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </section>
</div>
@endsection