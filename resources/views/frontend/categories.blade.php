@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">All categories</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{url('categories')}}">"All categories"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        @php
        $cats = App\Models\Category::where('parent_id','=', null)->get();
        @endphp
        @foreach($cats as $cs)
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="{{url('category', $cs->slug)}}" class="text-reset">{{$cs->category_name}}</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    @php
                    $ccats = App\Models\Category::where('parent_id', $cs->id)->get();
                    @endphp
                    @foreach($ccats as $ccs)
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="{{url('category', $ccs->slug)}}">{{$ccs->category_name}}</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            @php
                            $cccats = App\Models\Category::where('parent_id', $ccs->id)->get();
                            @endphp
                            @foreach($cccats as $cccs)
                            <li class="mb-2">
                                <a class="text-reset" href="{{url('category', $cccs->slug)}}">{{$cccs->category_name}}</a>
                            </li>
                            @endforeach
                            <!-- <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/winter-cap-tkfxw">Winter Cap</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/womens-blazer-5axfp">Women's Blazer</a>
                            </li> -->
                        </ul>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/kurti-nc31y">Kurti</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/denim-kurti-zmbo6">Denim Kurti</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/batik-kurti-2vd1d">Batik Kurti</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/saree-6m4ab">Saree</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/block-saree-a86kr">Block Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/tat-saree-rdx0z">Tat Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/half-silk-saree-wcrew">Half Silk Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/hand-paint-saree-halqn">Hand Paint Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/batik-saree-rkpjj">Batik Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/cunri-silk-saree-adnu6">Cunri Silk Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/georgette-saree-giqrg">Georgette Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/katan-saree-7w6cc">Katan Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/ready-saree-mk7xx">Ready Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/silk-saree-j3iil">SILK SAREE</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/jamdani-saree-lo70m">Jamdani Saree</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/tangail-saree-viqf7">Tangail Saree</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/salwar-kameez-ehrxj">Salwar Kameez</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/tat-salwar-kameez-uopaw">Tat Salwar Kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/jamdani-salwar-kameez-za5na">Jamdani Salwar Kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/batik-salwar-kameez-eeaph">Batik Salwar Kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/screen-print-salwar-kameez-vvdp5">Screen Print Salwar Kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/boutiques-salwar-kameez-ejsm2">Boutiques Salwar Kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/print-salwar-kameez-ewqj0">Print Salwar Kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/block-salwar-kameez-wfjrm">Block Salwar kameez</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/pakistani-catalogue-dress-vq7wf">Pakistani Catalogue Dress</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/party-dress-brplv">Party Dress</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/katan-dress-puxeq">Katan Dress</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/karchupi-dress-i2bot">Karchupi Dress</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/silk-dress-voee4">Silk Dress</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/tops-hnuiq">Tops</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/cape-gw8dy">Cape</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/skirt-7niec">Skirt</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/batik-skirt-cucil">Batik Skirt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/blouse-tziu5">Blouse</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/boishakhi-collection-4x3xh">Boishakhi Collection</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/mexi-coebe">Mexi</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/cotton-mexi-qg4cf">Cotton Mexi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/couple-collection-conv4">Couple Collection</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/family-combo-ijkux">Family Combo</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/hand-stitched-salwar-kameez-j3xf1">Hand Stitched Salwar Kameez</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/gown-uxilv">Gown</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/plazzo-4mx7c">Plazzo</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/koti-lei6e">Koti</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/laser-cut-mk8da">Laser Cut</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/gharara-p9mlt">Gharara</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/single-kameez-dwrdh">Single Kameez</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/lawn-drxxk">Lawn</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/hand-paint-dress-qtkep">Hand Paint Dress</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/women-t-shirt-ltksi">Women T-Shirt</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/nighty-lfv6k">Nighty</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/Women-pant-UJX6p">Women pant</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/yoga-pant-e1k5h">Yoga Pant</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/Women-Short-Pant-lAmp5">Women Short Pant</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/Women-Shirt-7XTXV">Women Shirt</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/men-fashion" class="text-reset">Men Clothing &amp; Fashion</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/lungi-0aiee">Lungi</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/shirt-vkeht">Shirt</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/full-sleeve-shirt-hsobe">Full Sleeve Shirt</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/half-sleeves-shirt-supsu">Half Sleeves Shirt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/trouser-htmvq">Trouser</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/pant-yl6hl">Pant</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/jeans-eyhgk">Jeans</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/gabardine-rckxz">Gabardine</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/punjabi-hytbh">Punjabi</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/punjabi-below-600-taka-f1bb9">Punjabi Below 600 Taka</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/Punjabi-Below-700-Taka-2Vn8W">Punjabi Below 700 Taka</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/punjabi-below-1200-taka-agtqe">Punjabi below 1200 Taka</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/punjabi-below-300-taka-xuvyz">Punjabi Below 300 Taka</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/kabli-punjabi-obclt">Kabli Punjabi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/t-shirt-lhzjq">T-Shirt</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/polo-t-shirt-gtpnt">Polo T-Shirt</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/Couple-T-Shirt-ypB2r">Couple T-Shirt</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/Half-Sleeve-T-Shirt-BAExx">Half Sleeve T-Shirt</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/Full-Sleeve-T-Shirt-jd3HD">Full Sleeve T Shirt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/cap-4r3hb">Cap</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/shorts-pant-0e91y">Shorts Pant</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/jacket-qhtkl">JACKET</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/kids-toys" class="text-reset">Kids</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/kids-item-fj2h3">Kids Item</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/kids-essential-mxlj5">Kids Essential</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/baby-katha-4tfoa">Baby Katha</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/kids-frock-lc6u0">Kids Frock</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/cotton-frock-pfnoa">Cotton Frock</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/baby-dress-huocz">Baby Dress</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/home-decor-zeqkk" class="text-reset">Home Decor</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/table-runner-0cgzf">Table Runner</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/shahi-dining-table-runner-y1mll">Shahi Dining Table Runner</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/cotton-runner-e7jnp">Cotton Runner</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/gorgeous-table-runner-ynxhw">Gorgeous Table Runner</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/bedcover-alboz">Bedcover</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/check-bedsheet-khjae">Check Bedsheet</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/print-bedsheet-g7a4p">Print Bedsheet</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/mattress-cover-pznoa">Mattress Cover</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/block-bedsheet-he1r7">Block Bedsheet</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/batik-bedsheet-acnfa">Batik Bedsheet</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/cushion-cover-rts7y">Cushion Cover</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/digital-print-cushion-cover-ca5dr">Digital Print Cushion Cover</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/applique-cushion-cover-gsj7o">Applique Cushion Cover</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/moshari-mosquito-net-vdwow">Moshari (Mosquito net)</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/magic-moshari-ksixt">Magic Moshari</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/moshari-cover-ja8z6">Moshari Cover</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/curtain-v40ad">Curtain</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/block-curtain-mpavn">Block Curtain</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/batik-curtain-gfx8b">Batik Curtain</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/table-cloth-d7z5t">Table cloth</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/Wall-Clock-qC8cB">Wall Clock</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/festive-2pevc">Festive</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/atoshbaji-hlial">Atoshbaji</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/essential-products-dwsa3" class="text-reset">Essential products</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/towel-uzpf6">Towel</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/umbrella-otkl2">Umbrella</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/chinese-umbrella-hiwzw">Chinese Umbrella</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/atlas-umbrella-dcpea">Atlas Umbrella</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/daily-use-fmauv">Daily Use</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/mask-esbl6">Mask</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/tuki-taki-dj9iz">Tuki Taki</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/baking-essential-prdi4">Baking Essential</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/kitchen-essential-58acf">Kitchen Essential</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/pitha-puli-0ucuw">Pitha Puli</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/house-hold-tools-ismdf">House Hold Tools</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/rainy-season-item-lwlfm">Rainy Season Item</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/gamsa-afzct">Gamsa</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="text-reset">Islamic Items</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/abaya-zvvhp">Abaya</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/khimar-omzqi">Khimar</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/hijab-cape-9zb5n">Hijab Cape</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/hijab-zerk3">Hijab</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/orna-hijab-jk1p6">Orna Hijab</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/offer-products-re5kf" class="text-reset">Offer Products</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/350-taka-qcrse">350 Taka</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/beauty-products-munzb" class="text-reset">Beauty Products</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/lipstick-3r7bx">Lipstick</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/eye-shadow-q4wbc">Eye Shadow</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/eyebrow-ezqp2">Eyebrow</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/eyeliner-yo8jo">Eyeliner</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/foundation-tmssz">Foundation</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/loose-powder-ermrn">Loose Powder</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/foods-smfa6" class="text-reset">Foods</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/dried-foods-g0r2d">Dried Foods</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/nuts--popcorn-bphet">Nuts &amp; Popcorn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/circle-wholesale-gzgeb" class="text-reset">Circle Wholesale</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/gadget-and-electronics-gjnbc" class="text-reset">Gadget &amp; Electronics</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/mobile-accessories-txj6n">Mobile Accessories</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/Computer-Accessories-5ZJyS">Computer Accessories</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/personal-care-gmp2m" class="text-reset">Personal Care</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/health-care-h3l6w">Health Care</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/skin-care-9seei">Skin Care</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/hair-care-wqtok">Hair Care</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/jewellery-e2z2d" class="text-reset">Jewellery</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/jewelry--watches-x5uju">Purse &amp; Jewelry</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/purse-frc34">Purse</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/jewelry-omsvc">Jewelry</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/kather-gohona-3c9e4">Kather Gohona</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 bg-white shadow-sm rounded">
            <div class="p-3 border-bottom fs-16 fw-600">
                <a href="https://circle.com.bd/category/Wallet--Accessories-rZM1e" class="text-reset">&nbsp;Wallet &amp; Accessories</a>
            </div>
            <div class="p-3 p-lg-4">
                <div class="row">
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/watches-and-accessories-vtwxg">Watches and Accessories</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/sunglass-czipq">Sunglass</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                        </ul>
                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <h6 class="mb-3"><a class="text-reset fw-600 fs-14" href="https://circle.com.bd/category/bag-pack-ngsff">Bag Pack</a></h6>
                        <ul class="mb-3 list-unstyled pl-2">
                            <li class="mb-2">
                                <a class="text-reset" href="https://circle.com.bd/category/school-bag-ekkui">School Bag</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
@endsection