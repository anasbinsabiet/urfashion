@extends('frontend.layouts.master')
@section('title','Product Details')
@section('content')
<style type="text/css">
    .modal-open .modal {
        opacity: 1;
    }
    body.modal-open #root {
        -webkit-filter: blur(5px) grayscale(90%);
    }
</style>
<section class="mb-4 pt-3">
    <div class="container">
        <div class="bg-white shadow-sm rounded p-3">
            <div class="row">
                <div class="col-xl-5 col-lg-6 mb-4">
                    <div class="sticky-top z-3 row gutters-10">
                        <div class="col order-1 order-md-2">
                            <div class="aiz-carousel product-gallery slick-initialized slick-slider" data-nav-for=".product-gallery-thumb" data-fade="true" data-auto-height="true">
                                <div class="slick-list draggable" style="height: 357px;">
                                    <div class="slick-track" style="opacity: 1; width: 704px;">
                                        <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 352px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                            <div>
                                                <div id="imgdiv" class="carousel-box img-zoom rounded" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
                                                    <img class="img-fluid ls-is-cached lazyloaded" src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" id="preview">
                                                    <img role="presentation" alt="" src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="zoomImg" style="position: absolute; top: -539.636px; left: -254.159px; opacity: 0; width: 1200px; height: 1200px; border: none; max-width: none; max-height: none;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 352px; position: relative; left: -352px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                            <div>
                                                <div id="imgdiv" class="carousel-box img-zoom rounded" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
                                                    <img class="img-fluid ls-is-cached lazyloaded" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/02aUo0ShCQcmU7jzqWdD9LoR2eblovpmf0lIblFb.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/02aUo0ShCQcmU7jzqWdD9LoR2eblovpmf0lIblFb.jpg" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                                    <img role="presentation" alt="" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/02aUo0ShCQcmU7jzqWdD9LoR2eblovpmf0lIblFb.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1080px; height: 1920px; border: none; max-width: none; max-height: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align:right;margin: 2px 15px 1px 2px;">
                                <a href="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" id="dlsrc" class="float">
                                    Download Image
                                    <i class="las la-download la-2x"> </i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                            <div class="aiz-carousel product-gallery-thumb slick-vertical slick-initialized slick-slider" data-items="5" data-nav-for=".product-gallery" data-vertical="true" data-vertical-sm="false" data-focus-select="true" data-arrows="true">
                                <div class="slick-list draggable" style="height: 345px;">
                                    <div class="slick-track" style="opacity: 1; height: 138px; transform: translate3d(0px, 0px, 0px);">
                                        @foreach($product_images as $pimage)
                                        <div class="slick-slide slick-active" data-slick-index="0" aria-hidden="false" style="width: 60px;">
                                            <div>
                                                <div class="carousel-box c-pointer border p-1 rounded" style="width: 100%; display: inline-block;">
                                                    <img class="mw-100 size-50px mx-auto ls-is-cached lazyloaded overout" id="{{$pimage->id}}" src="{{asset($pimage->color_image)}}">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- <div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 60px;">
                                            <div>
                                                <div class="carousel-box c-pointer border p-1 rounded" style="width: 100%; display: inline-block;">
                                                    <img class="mw-100 size-50px mx-auto lazyloaded" src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/02aUo0ShCQcmU7jzqWdD9LoR2eblovpmf0lIblFb.jpg" data-src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/02aUo0ShCQcmU7jzqWdD9LoR2eblovpmf0lIblFb.jpg" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="text-left">
                        <h1 class="mb-2 fs-20 fw-600 text-left">
                            {{$product->product_name}}
                        </h1>
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="rating">
                                    <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                                </span>
                                <!-- <span class="ml-1 opacity-50">(Reviews)</span> -->
                            </div>
                            @if(!empty($product->product_quantity))
                            <div class="col-6 text-right">
                                <span class="badge badge-md badge-inline badge-pill badge-success">In stock</span>
                            </div>
                            @endif
                            <!--<div class="col-auto">-->
                            <!--    Suggested Retail Price: <span class="badge badge-md badge-inline badge-pill badge-primary">978 - 1105 </span>-->
                            <!--</div>-->
                        </div>
                        <!-- <hr>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <small class="mr-2 opacity-50">Sold By: </small><br>
                                Supplier Code
                            </div>
                            <div class="col-auto">
                                <a href="https://circle.com.bd/supplier/47" <button="" class="btn btn-sm btn-soft-primary">DRS
                                </a>
                            </div>
                        </div> -->
                        <hr>
                        <div class="row no-gutters mt-3">
                            <div class="col-sm-2">
                                <div class="opacity-100 my-2" style="color:blue; font-size:120%; font-weight:bold;">Circle Price:</div>
                            </div>
                            <div class="col-sm-10">
                                <input type="hidden" value="{{$product->selling_price}}" name="selling_price" id="selling_price" />
                                @if(!empty($product->discount_price))
                                <div class="fs-20 opacity-60">
                                    <del>{{$product->selling_price}}৳</del>
                                </div>
                                @else
                                <div class="">
                                    <strong class="h2 fw-600 text-primary">
                                        {{$product->selling_price}}৳
                                    </strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        @if(!empty($product->discount_price))
                        <hr>
                        <div class="row no-gutters my-2">
                            <div class="col-sm-2">
                                <div class="opacity-50">Discount Price:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="">
                                    <strong class="h2 fw-600 text-primary">
                                        {{$product->discount_price}}৳
                                    </strong>
                                    <!-- <span class="opacity-70">/0.5</span> -->
                                </div>
                            </div>
                        </div>
                        @endif
                        <hr>
                        <form id="option-choice-form">
                            <input type="hidden" name="_token" value="WoV2moQvXeSHEDK7UF28b4k8ZPLvMImTvE6d2v8w"> <input type="hidden" name="id" value="14699">
                            <div class="row no-gutters">
                                <div class="col-sm-2">
                                    <div class="opacity-100 my-2" style="color:blue; font-size:120%; font-weight:bold;">Size:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="aiz-radio-inline">
                                        @php
                                        $size_ids = App\Models\ProductSize::where('product_id',$product->id)->select('size_id')->get();
                                        @endphp
                                        @foreach($size_ids as $ps)
                                        @php
                                        $size_value = App\Models\Size::where('id',$ps->size_id)->get();
                                        @endphp
                                        <label class="aiz-megabox pl-0 mr-2">
                                            <input type="radio" name="attribute_id_1" value="{{$size_value[0]->size}}" checked="">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center py-2 px-3 mb-2">
                                                {{$size_value[0]->size}}
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Quantity + Add to cart -->
                            <div class="row no-gutters">
                                <div class="col-sm-2">
                                    <div class="opacity-100 my-2" style="color:blue; font-size:120%; font-weight:bold;">Quantity:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity" id="decrement">
                                                <i class="las la-minus"></i>
                                            </button>
                                            <input type="number" name="quantity" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" id="sell_qty" oninput="myFunction()" value="1" min="1" max="50" readonly="">
                                            <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light" type="button" onclick="myFunction()" data-type="plus" data-field="quantity" id="increment">
                                                <i class="las la-plus"></i>
                                            </button>
                                        </div>
                                        <div class="avialable-amount opacity-60">
                                            <input type="hidden" id="product_size">
                                            <input type="hidden" id="product_quantity">
                                            (<span id="available-quantity">0</span> available)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!--<div class="row no-gutters mt-3" >-->
                            <!--    <div class="col-2">-->
                            <!--        <div style="color:blue; font-size:120%; font-weight:bold;" class="product-description-label">Selling Price:</div>-->
                            <!--    </div>-->
                            <!--    <div class="col-10">-->
                            <!--        <div class="product-price">-->

                            <!--            <input type="number" name="selling_price" id="selling_price" class="form-control" placeholder="Your Selling Price" oninput="myFunction()"  required />-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="row no-gutters mt-3">
                                <div class="col-sm-2">
                                    <div class="opacity-100 my-2" style="color:blue; font-size:120%; font-weight:bold;">Selling Price (Unit):</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="fs-20 opacity-100">
                                        <input type="number" name="selling_price" id="selling_prices" class="form-control" placeholder="Your Selling Price" required="">
                                    </div>
                                    <span id="error"></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row no-gutters pb-3" id="chosen_price_div">
                                <div class="col-sm-2">
                                    <div class="opacity-100 my-2" style="color:blue; font-size:120%; font-weight:bold;">Total Price:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-price">
                                        <strong id="chosen_price" class="h4 fw-600 text-primary"><span id="tprice">{{$product->selling_price}}</span>৳</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters pb-3" id="chosen_price_div" style="display:none">
                            </div>
                        </form>
                        <div class="row no-gutters mt-3">
                            <div class="col-sm-2">
                                <div class="opacity-100 my-2" style="color:blue; font-size:120%; font-weight:bold;">Suggested price:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="product-price">
                                    <strong class="h4 fw-600 text-info">
                                        {{$product->sminprice}}-{{$product->smaxprice}}৳
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Modal -->
                        <div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <!-- <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> -->
                                    <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="la-2x">×</span>
                                    </button>
                                    <div class="modal-body p-4 added-to-cart">
                                        <div class="text-center text-success mb-4">
                                            <i class="las la-check-circle la-3x"></i>
                                            <h3>Item added to your cart!</h3>
                                        </div>
                                        <div class="media mb-4">
                                            <img id="modal_product_image" src="#" class="mr-3 size-100px img-fit rounded ls-is-cached lazyloaded" alt="Product Image">
                                            <div class="media-body pt-3 text-left">
                                                <h6 class="fw-600" id="modal_product_name"></h6>
                                                <div class="row mt-3">
                                                    <div class="col-sm-4 opacity-100">
                                                        <div>Circle Price:</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="h6 text-primary">
                                                            <strong id="modal_product_price"></strong><strong>৳</strong>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-sm-4 opacity-100">
                                                        <div>Selling Price:</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="h6 text-primary">
                                                            <strong id="modal_selling_price"></strong><strong>৳</strong>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-outline-primary mb-3 mb-sm-0" data-dismiss="modal">Back to shopping</button>
                                            <a href="{{url('cart')}}" class="btn btn-primary mb-3 mb-sm-0">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <input type="hidden" value="{{$product->id}}" id="product_id" name="product_id" />
                            <input type="hidden" value="{{$product->product_name}}" id="product_name" name="product_name" />
                            <input type="hidden" value="@if(!empty($product->discount_price)){{$product->discount_price}}@else{{$product->selling_price}}@endif" id="product_price" name="product_price" />
                            <input type="hidden" value="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" id="product_image" name="product_image" />
                            <button type="button" class="btn btn-soft-primary mr-2 add_to_cart fw-600">
                                <i class="las la-shopping-bag"></i>
                                Add to cart
                            </button>
                            <button type="button" class="btn btn-primary buy-now fw-600" onclick="return validateForm()">
                                <i class="la la-shopping-cart"></i> Buy Now
                            </button>
                        </div>
                        <div class="d-table width-100 mt-3">
                            <div class="d-table-cell">
                                <!-- Add to wishlist button -->
                                <input type="hidden" id="product_id" value="{{$product->id}}">
                                <input type="hidden" name="user_id" id="user_id" value="@if(!empty(Auth::user()->id)){{ Auth::user()->id }}@endif" />
                                <button type="button" class="btn pl-0 btn-link fw-600" id="wishlist_btn">
                                    Add to wishlist
                                </button>
                                <!-- Add to compare button -->
                                <!-- <button type="button" class="btn btn-link btn-icon-left fw-600" onclick="addToCompare(14699)">
                                    Add to compare
                                </button> -->
                            </div>
                        </div>
                        <!-- <div class="row no-gutters mt-4">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">Share:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="aiz-share jssocials">
                                    <div class="jssocials-shares">
                                        <div class="jssocials-share jssocials-share-email"><a target="_self" href="mailto:?subject=Screen%20print%20gownFabric%3A%20CottonWork%3A%20screen%20printFull%20stitched%20dressLength%3A%2048%22&amp;body=https%3A%2F%2Fcircle.com.bd%2Fproduct%2FScreen-print-gown-GWN130" class="jssocials-share-link"><i class="lar la-envelope jssocials-share-logo"></i></a></div>
                                        <div class="jssocials-share jssocials-share-twitter"><a target="_blank" href="https://twitter.com/share?url=https%3A%2F%2Fcircle.com.bd%2Fproduct%2FScreen-print-gown-GWN130&amp;text=Screen%20print%20gownFabric%3A%20CottonWork%3A%20screen%20printFull%20stitched%20dressLength%3A%2048%22" class="jssocials-share-link"><i class="lab la-twitter jssocials-share-logo"></i></a></div>
                                        <div class="jssocials-share jssocials-share-facebook"><a target="_blank" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcircle.com.bd%2Fproduct%2FScreen-print-gown-GWN130" class="jssocials-share-link"><i class="lab la-facebook-f jssocials-share-logo"></i></a></div>
                                        <div class="jssocials-share jssocials-share-linkedin"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fcircle.com.bd%2Fproduct%2FScreen-print-gown-GWN130" class="jssocials-share-link"><i class="lab la-linkedin-in jssocials-share-logo"></i></a></div>
                                        <div class="jssocials-share jssocials-share-whatsapp"><a target="_self" href="whatsapp://send?text=https%3A%2F%2Fcircle.com.bd%2Fproduct%2FScreen-print-gown-GWN130 Screen%20print%20gownFabric%3A%20CottonWork%3A%20screen%20printFull%20stitched%20dressLength%3A%2048%22" class="jssocials-share-link"><i class="lab la-whatsapp jssocials-share-logo"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        <div class="row gutters-12">
            <div class="col-xl-12 order-0 order-xl-1">
                <div class="bg-white mb-3 shadow-sm rounded">
                    <div class="nav border-bottom aiz-nav-tabs">
                        <a href="#tab_default_1" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset active show">Description</a>
                        <!-- <a href="#tab_default_2" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset">Reviews</a> -->
                    </div>
                    <div class="p-4">
                        <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                            {!!$product->product_description!!}
                            <!-- <p><b><span style="font-size: 12px;">Screen print gown</span></b></p>
                            <p><span style="font-size: 12px;">Fabric: Cotton</span></p>
                            <p><span style="font-size: 12px;">Work: screen print</span></p>
                            <p><span style="font-size: 12px;">Full stitched dress</span></p>
                            <p><span style="font-size: 12px;">Length: 48"</span></p> -->
                        </div>
                    </div>
                    <!-- <div class="tab-content pt-0">
                        <div class="tab-pane fade active show" id="tab_default_1">
                            <div class="p-4">
                                <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                                    {!!$product->product_description!!}
                                    <p><b><span style="font-size: 12px;">Screen print gown</span></b></p>
                                    <p><span style="font-size: 12px;">Fabric: Cotton</span></p>
                                    <p><span style="font-size: 12px;">Work: screen print</span></p>
                                    <p><span style="font-size: 12px;">Full stitched dress</span></p>
                                    <p><span style="font-size: 12px;">Length: 48"</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_default_2">
                            <div class="p-4">
                                <ul class="list-group list-group-flush">
                                </ul>
                                <div class="text-center fs-18 opacity-70">
                                    There have been no reviews for this product yet.
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
    };
</script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $("img.overout").mouseover(function() {
            var APP_URL = {!!json_encode(url('/')) !!};
            var color_id = $(this).attr("id");
            // alert(color_id);
            if (color_id) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('changeImage.post') }}",
                    data: {
                        color_id: color_id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(data) {
                        $("#preview").attr("src", APP_URL + data);
                        $("#dlsrc").attr("href", APP_URL + data);
                    }
                });
            }
        });
        $("#increment").click(function() {
            var inc = $('#increment').val();
            var qty = parseInt($('#product_quantity').val());
            alert
            var sell_qty = parseInt($('#sell_qty').val());
            if (sell_qty < qty) {
                var tsq = sell_qty + 1;
                $('#sell_qty').val(tsq);
            }
        });
        $("#decrement").click(function() {
            var sell_qty = parseInt($('#sell_qty').val());
            if (sell_qty > 1) {
                var dsq = sell_qty - 1;
                $('#sell_qty').val(dsq);
            }
        });
        $("#wishlist_btn").click(function() {
            var product_id = $('#product_id').val();
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
        $("#decrement, #increment").click(function() {
            var selling_price = parseInt($('#selling_price').val());
            var sell_qty = parseInt($('#sell_qty').val());
            var tval = selling_price * sell_qty;
            if (tval > 1) {
                $('#tprice').html(tval);
            }
        });
        $(".add_to_cart").click(function() {
            var selling_price = $('#selling_prices').val();
            var user_id = $('#user_id').val();
            if (selling_price) {
                if (user_id) {
                    var product_id = $('#product_id').val();
                    var product_name = $('#product_name').val();
                    var product_price = $('#product_price').val();
                    var product_image = $('#product_image').val();
                    var tsize = $('.aiz-megabox > input:checked ~ .aiz-megabox-elem, .aiz-megabox > input:checked ~ .aiz-megabox-elem').html();
                    var size = parseInt(tsize);
                    var qty = parseInt($('#sell_qty').val());
                    $.ajax({
                        url: "{{ route('cart.store') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            product_id: product_id,
                            product_price: product_price,
                            selling_price: selling_price,
                            size: size,
                            qty: qty,
                            user_id: user_id
                        },
                        success: function(response) {
                            if (response == 'success') {
                                cartCount();
                                cartData();
                                $('#modal_product_name').html(product_name);
                                $('#modal_product_price').html(product_price);
                                $('#modal_selling_price').html(selling_price);
                                $("#modal_product_image").attr('src',product_image);
                                $('#addToCart').modal('show');
                            }
                        },
                    });
                } else {
                    alert("Login to continue!");
                }
            } else {
                $("#selling_prices").addClass("border-danger");
                $("#selling_prices").attr("placeholder", "Enter Selling Price").val("").focus().blur();
            }
        });
        $(".buy-now").click(function() {
            var selling_price = $('#selling_prices').val();
            var user_id = $('#user_id').val();
            if (selling_price) {
                if (user_id) {
                    var product_id = $('#product_id').val();
                    var product_name = $('#product_name').val();
                    var product_price = $('#product_price').val();
                    var product_image = $('#product_image').val();
                    var tsize = $('.aiz-megabox > input:checked ~ .aiz-megabox-elem, .aiz-megabox > input:checked ~ .aiz-megabox-elem').html();
                    var size = parseInt(tsize);
                    var qty = parseInt($('#sell_qty').val());
                    $.ajax({
                        url: "{{ route('cart.store') }}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            product_id: product_id,
                            product_price: product_price,
                            selling_price: selling_price,
                            size: size,
                            qty: qty,
                            user_id: user_id
                        },
                        success: function(response) {
                            if (response == 'success') {
                                cartCount();
                                cartData();
                                window.location.href = "{{ url('checkout')}}";
                            }
                        },
                    });
                } else {
                    alert("Login to continue!");
                }
            } else {
                $("#selling_prices").addClass("border-danger");
                $("#selling_prices").attr("placeholder", "Enter Selling Price").val("").focus().blur();
            }
        });
        $('input[type="radio"]').change(function() {
            if ($(this).is(":checked")) {
                populateAvailable();
                // $('#product_size').val($(this).val());
            }
        });
        populateAvailable();
        function populateAvailable() {
            var product_id = $('#product_id').val();
            var tsize = $('.aiz-megabox > input:checked ~ .aiz-megabox-elem, .aiz-megabox > input:checked ~ .aiz-megabox-elem').html();
            var size = parseInt(tsize);
            $('#product_size').val(size);
            // alert(size);
            $.ajax({
                url: "{{ url('populate-available') }}",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                    product_id: product_id,
                    size: size,
                },
                success: function(data) {
                    // console.log(data);
                    $('#product_quantity').val(data);
                    $('#available-quantity').html(data);
                    // if(data==0||null){
                    // }else{
                    //     alert(data);
                    // }
                }
            })
        }
    });
</script>
@endsection