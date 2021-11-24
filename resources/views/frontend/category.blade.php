@extends('frontend.layouts.master')
@section('title','Category')
@section('content')
@php
if(!empty($current_cat)){
    $cat_type='subcategory';
}else{
    $cat_type='category';
}
$main_cat = App\Models\Category::where('parent_id','=', null)->get();
@endphp
<section class="mb-4 pt-3">
    <div class="container sm-px-0">
            <div class="row">
                <div class="col-xl-3">
                    <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        <div class="collapse-sidebar c-scrollbar-light text-left">
                            <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                <h3 class="h6 mb-0 fw-600">Filters</h3>
                                <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="las la-times la-2x"></i>
                                </button>
                            </div>
                            <div class="bg-white shadow-sm rounded mb-3">
                                <div class="fs-15 fw-600 p-3 border-bottom">
                                    Categories
                                </div>
                                <div class="p-3">
                                    <ul class="list-unstyled">
                                        @if(!empty($current_cat))
                                        <li class="mb-2">
                                            <a class="text-reset fs-14 fw-600" href="{{'products'}}">
                                                <i class="las la-angle-left"></i>
                                                All categories
                                            </a>
                                        </li>
                                        @if(!empty($parent_cat))
                                        <li class="mb-2">
                                            <a class="text-reset fs-14 fw-600" href="{{ url('category', $parent_cat[0]->slug) }}">
                                                <i class="las la-angle-left"></i>
                                                {{ $parent_cat[0]->category_name }}
                                            </a>
                                        </li>
                                        @endif
                                        <li class="mb-2">
                                            <a class="text-reset fs-14 fw-600" href="{{ url('category', $current_cat->slug) }}">
                                                <i class="las la-angle-left"></i>
                                                {{ $current_cat->category_name }}
                                            </a>
                                        </li>
                                        @endif
                                        @if(empty($current_cat))
                                            @foreach($main_cat as $cat)
                                            <li class="ml-4 mb-2">
                                                <a class="text-reset fs-14" href="{{ url('category', $cat->slug) }}">{{$cat->category_name}}</a>
                                            </li>
                                            @endforeach
                                        @else
                                            @foreach($categories_with_parents as $pcat)
                                            <li class="ml-4 mb-2">
                                                <a class="text-reset fs-14" href="{{ url('category', $pcat->slug) }}">{{$pcat->category_name}}</a>
                                            </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-white shadow-sm rounded mb-3">
                                <div class="fs-15 fw-600 p-3 border-bottom">
                                    Price range
                                </div>
                                <div class="p-3">
                                    <div class="aiz-range-slider">
                                    <div class="noUi-target noUi-ltr noUi-horizontal noUi-background" id="slider-range"></div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <span class="example-val" id="slider-range-lower"></span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="example-val" id="slider-range-upper"></span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">

                    <ul class="breadcrumb bg-transparent p-0">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{url('products')}}">All categories</a>
                        </li>
                        @if(!empty($current_cat))
                        <li class="text-dark fw-600 breadcrumb-item">
                            <a class="text-reset" href="javascript:;">"{{ $current_cat->category_name }}"</a>
                        </li>
                        @endif
                    </ul>

                    <div class="text-left">
                        <div class="d-flex align-items-center">
                            <div>
                                <h1 class="h6 fw-600 text-body">
                                    @if(!empty($current_cat))
                                    {{ $current_cat->category_name }}
                                    @else
                                        @if(!empty($keyword))
                                        Search result for "{{$keyword}}"
                                        @else
                                        All Products
                                        @endif
                                    @endif
                                </h1>
                            </div>
                            <div class="form-group ml-auto mr-0 w-200px d-none d-xl-block">
                                <label class="mb-0 opacity-50">Brands</label>
                                    <select class="form-control form-control-sm aiz-selectpicker" name="brand" onchange="ssort_by()" id="brand">
                                        <option value="">All Brands</option>
                                        @foreach($brand as $brnd)
                                        <option value="{{$brnd->brand_name}}">{{$brnd->brand_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group w-200px ml-0 ml-xl-3">
                                <label class="mb-0 opacity-50">Sort By</label>
                                <select class="form-control form-control-sm aiz-selectpicker" onchange="ssort_by()" name="sort_by" id="sort_by">
                                    <option value="">Select</option>
                                    <option value="name">Name</option>
                                    <option value="newest">Newest</option>
                                    <!-- <option value="oldest">Oldest</option> -->
                                    <option value="price-asc">Price low to high</option>
                                    <option value="price-desc">Price high to low</option>
                                </select>
                            </div>
                            <div class="d-xl-none ml-auto ml-xl-3 mr-0 form-group align-self-end">
                                <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="la la-filter la-2x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="min_price" value="">
                    <input type="hidden" name="max_price" value="">
                    @if(count($products) > 0)
					@else
					<center><h4 style="padding: 100px;width: 100%;">No Products Available!</h4></center>
					@endif

                    <div class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2">
                    @foreach($products as $row)
                    @php
                    $product_image = App\ColorImage::where('product_id', $row->id)->orderBy('color_id')->take(1)->first();
                    @endphp
                        <div class="col mb-3">
                            <div class="aiz-card-box h-100 border border-light rounded shadow-sm hov-shadow-md has-transition bg-white">
                                <div class="position-relative">
                                    <a href="{{ url('product') }}/{{ $row->product_slug }}" class="d-block">
                                        <img class="img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px lazyloaded" 
                                        src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" 
                                        data-src="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" 
                                        alt="{{ $row->product_name }}">
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a id="{{ $row->id }}" class="addToWishList" href="javascript:void(0)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" data-original-title="" title="">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(14695)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="@if($product_image){{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" data-toggle="tooltip" data-title="Download Image" data-placement="left">
                                            <i class="las la-download"></i>
                                        </a>
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
                                        <span class="fw-700 text-primary">{{ $row->selling_price }}৳</span>
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
            </div>
    </div>
    <form id="categoryFilter">
        <input type="hidden" id="sort" name="sort" />
        <input type="hidden" id="min" name="min" />
        <input type="hidden" id="max" name="max" />
        <input type="hidden" id="brand_input" name="brand" />
    </form>
    <input type="hidden" name="user_id" id="user_id" value="@if(!empty(Auth::user()->id)){{ Auth::user()->id }}@endif" />
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.2.1/nouislider.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.2.1/nouislider.js"></script>
@php
if(empty($min)){
$min = 100;
}
if(empty($max)){
$max = 5000;
}
@endphp
<script>
    var rangeSlider = document.getElementById('slider-range');
    noUiSlider.create(rangeSlider, {
    start: [{{$min}}, {{$max}}],
    connect: true,
    range: {
        'min': [100],
        'max': [5000]
    }
    });
    var stepSliderValueElement = [document.getElementById('slider-range-lower'),
    document.getElementById('slider-range-upper')
    ];

    rangeSlider.noUiSlider.on('update', function(values, handle) {
    stepSliderValueElement[0].textContent = values[0];
    stepSliderValueElement[1].textContent = values[1];
    });
</script>
<script>
    $(document).ready(function() {
        rangeSlider.noUiSlider.on('end', function(values, handle) {
            var smin1 = values[0];
            var smax1 = values[1];
            $('#min').val(smin1);
            $('#max').val(smax1);
            $('#categoryFilter').submit();
        });
    });
</script>
<script>
    function ssort_by(){
        var sort_by_value = $('#sort_by').val();
        var brand_value = $('#brand').val();
        $('#sort').val(sort_by_value);
        var brand_value = $('#brand').val();
        $('#brand_input').val(brand_value);
        $('#categoryFilter').submit();
    }
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
            alert('Login to continue!')
        }
    });
</script>
@endsection