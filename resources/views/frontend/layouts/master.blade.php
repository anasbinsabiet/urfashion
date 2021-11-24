@php
$data = App\Models\Setting::find(4);
$menus = App\Menu::where('parent_id', '=', 0)->get();
@endphp
@include('sweetalert::alert')
<!DOCTYPE html>

<head>
    <meta name="csrf-token" content="jP7f4uMI3cVhjRcLLMhAgHq9Yy2oeI1DiVf0xzJt">
    <meta name="app-url" content="{{ url('/') }}">
    <meta name="file-base-url" content="{{ url('/') }}">
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Circle a social commerce platform based in Dhaka, Bangladesh. It helps small business owners and individuals to start their online store with zero investment and little efforts." />
    <meta name="keywords" content="circle, CIRCLE, circle bd, circlebd, reseller platform, circle reseller, reseller Bangladesh, reseller bd, circle network">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ env('APP_NAME') }}">
    <meta itemprop="description" content="Circle a social commerce platform based in Dhaka, Bangladesh. It helps small business owners and individuals to start their online store with zero investment and little efforts.">
    <meta itemprop="image" content="">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ env('APP_NAME') }}">
    <meta name="twitter:description" content="Circle a social commerce platform based in Dhaka, Bangladesh. It helps small business owners and individuals to start their online store with zero investment and little efforts.">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="">
    <!-- Open Graph data -->
    <meta property="og:title" content="Circle" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Circle a social commerce platform based in Dhaka, Bangladesh. It helps small business owners and individuals to start their online store with zero investment and little efforts." />
    <meta property="og:site_name" content="Circle Reseller" />
    <meta property="fb:app_id" content="815025652488599">
    <!-- Favicon -->
    <link href="{{ asset('staticfile/images/favicon.ico')}}" mce_href="{{ asset('/staticfile/images/favicon.ico')}}" rel="icon" type="image/x-icon" />
    <link href="{{ asset('staticfile/images/favicon.ico')}}" mce_href="{{ asset('/staticfile/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('staticfile/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticfile/css/vendors.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/styles/reseller_style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticfile/css/aiz-core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staticfile/css/custom-style')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://circle.com.bd/public/assets/js/vendors.js"></script>
    <script src="https://circle.com.bd/public/assets/js/aiz-core.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <!-- <link href="{{ asset('staticfile/css/line-awesome.min.css')}}" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="{{ asset('staticfile/js/fontawesome.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style type="text/css">
        span#cart_subtotal:after, span#cart_page_subtotal:after, span#selling_subtotal:after {
            content: "৳";
        }
        button.dropbtn.rounded {
            padding: 7px 20px 7px 7px;
            background: transparent;
            border: 1px solid #e2e5ec;
        }
        div#accordionExample li {
            font-size: 16px;
        }
        div#accordionExample .card {
            margin-bottom: 0px;
        }
        button.dropbtn.rounded i,
        .dropdown-toggle {
            color: #78797b;
        }
        .rating {
    display: none;
}

        .noUi-connect {
            background: #eb0462 !important;
        }
    </style>
    <style type="text/css">
        .gallery {
            display: inline-block;
            margin-top: 20px;
        }

        .close-icon {
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }

        .form-image-upload {
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }

        ul.list-unstyled.categories a {
            padding: 2px 16px !important;
        }
    </style>
</head>

<body>
    <div class="aiz-main-wrapper d-flex flex-column">
        <div class="top-navbar bg-white border-bottom border-soft-secondary z-1035">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                            <li class="list-inline-item dropdown mr-3" id="lang-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-3" data-toggle="dropdown" data-display="static">
                                    <img src="{{url('staticfile/images/bd.png')}}" class="mr-2 lazyload" alt="Bangla" height="11">
                                    <span class="opacity-60">Bangla</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                            <img src="{{url('staticfile/images/placeholder.jpg')}}" data-src="{{url('staticfile/images/en.png')}}" class="mr-1 lazyload" alt="English" height="11">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="{{url('staticfile/images/placeholder.jpg')}}" data-src="{{url('staticfile/images/bd.png')}}" class="mr-1 lazyload" alt="Bangla" height="11">
                                            <span class="language">Bangla</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="sa" class="dropdown-item ">
                                            <img src="{{url('staticfile/images/placeholder.jpg')}}" data-src="{{url('staticfile/images/sa.png')}}" class="mr-1 lazyload" alt="Arabic" height="11">
                                            <span class="language">Arabic</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-inline-item dropdown" id="currency-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-3 opacity-60" data-toggle="dropdown" data-display="static">
                                    Taka ৳
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="USD">U.S. Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="AUD">Australian Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="BRL">Brazilian Real (R$)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CAD">Canadian Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CZK">Czech Koruna (Kč)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="DKK">Danish Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="EUR">Euro (€)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="HKD">Hong Kong Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="HUF">Hungarian Forint (Ft)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="ILS">Israeli New Sheqel (₪)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="JPY">Japanese Yen (¥)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="MYR">Malaysian Ringgit (RM)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="MXN">Mexican Peso ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="NOK">Norwegian Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="NZD">New Zealand Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="PHP">Philippine Peso (₱)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="PLN">Polish Zloty (zł)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="GBP">Pound Sterling (£)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="RUB">Russian Ruble (руб)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="SGD">Singapore Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="SEK">Swedish Krona (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CHF">Swiss Franc (CHF)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="THB">Thai Baht (฿)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  active " href="javascript:void(0)" data-currency="BDT">Taka (৳)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="Rupee">Indian Rupee (Rs)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-7 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 py-1">
                            @guest
                            <li class="list-inline-item">
                                <a href="{{ route('user.login') }}" class="btn btn-info" role="button" aria-pressed="true">Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('user.register') }}" class="btn btn-primary" role="button" aria-pressed="true">Become A Reseller</a>
                            </li>
                            <!-- <li class="list-inline-item">
                                <a href="#" class="btn btn-outline-primary " role="button" aria-pressed="true">Tutorial</a>
                            </li> -->
                            <li class="list-inline-item">
                                <a href="{{ url('help') }}" class="btn btn-outline-info " role="button" aria-pressed="true" target="_blank">Tutorial</a>
                            </li>
                            @else
                            @if(Auth::user()->role == 1)
                            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                            @endif
                            <li class="list-inline-item">
                                <a href="{{ url('myaccount') }}">My Panel</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('track-order') }}" class="text-reset py-2 d-inline-block opacity-100">Track Orders</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ url('help') }}" class="text-reset py-2 d-inline-block opacity-100" target="_blank">Tutorial</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="text-reset py-2 d-inline-block opacity-100"><i class="fa fa-sign-out"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
            <div class="position-relative logo-bar-area z-1">
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block py-20px mr-3 ml-0" href="{{url('/')}}">
                                <img @if($data->setting_logo != null) src="{{asset($data->setting_logo)}}" @else src="{{asset('staticfile/images/urlogo.png')}}" @endif alt="UR Fashion" class="mw-100 h-30px h-md-40px" height="40">
                            </a>
                            <div class="dropdown">
                                <button class="dropbtn rounded"><i class="las la-bars" style="font-size: 21px;line-height: 27px;"></i><i class="las la-angle-down" style="font-size:13px;top:15px;position: absolute;"></i>
                                </button>
                                <div class="dropdown-content">
                                    <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
                                        @php
                                        $cats = App\Models\Category::where('parent_id','=', null)->get();
                                        @endphp
                                        <span class="fw-600 fs-16 mr-3">Categories</span>
                                        <a href="{{url('categories')}}" style="padding:0px;" class="text-reset">
                                            <span class="d-none d-lg-inline-block">See All ></span>
                                        </a>
                                    </div>
                                    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                                        @foreach($cats as $cs)
                                        <li class="category-nav-element" data-id="1">
                                            <a href="{{url('category', $cs->slug)}}" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Women Clothing &amp; Fashion" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">{{$cs->category_name}}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                        <!-- <li class="category-nav-element" data-id="2">
                                            <a href="https://circle.com.bd/category/men-fashion" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Men Clothing &amp; Fashion" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Men Clothing &amp; Fashion</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="3">
                                            <a href="https://circle.com.bd/category/kids-toys" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Kids" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Kids</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="5">
                                            <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Purse &amp; Jewelry" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Purse &amp; Jewelry</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="9">
                                            <a href="https://circle.com.bd/category/home-decor-zeqkk" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Home Decor" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Home Decor</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="10">
                                            <a href="https://circle.com.bd/category/essential-products-dwsa3" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Essential products" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Essential products</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="11">
                                            <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Islamic Items" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Islamic Items</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="12">
                                            <a href="https://circle.com.bd/category/offer-products-re5kf" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Offer Products" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Offer Products</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="13">
                                            <a href="https://circle.com.bd/category/winter-collection-wq7tm" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Winter Collection" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Winter Collection</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="14">
                                            <a href="https://circle.com.bd/category/beauty-products-munzb" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Beauty Products" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Beauty Products</span>
                                            </a>
                                            
                                        </li>
                                        <li class="category-nav-element" data-id="17">
                                            <a href="https://circle.com.bd/category/foods-smfa6" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Foods" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Foods</span>
                                            </a>
                                            
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <style>
                                .dropbtn {
                                    color: white;
                                    padding: 16px;
                                    font-size: 16px;
                                    border: none;
                                }

                                .dropdown {
                                    position: relative;
                                    display: inline-block;
                                }

                                .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    min-width: 160px;
                                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                    z-index: 1;
                                }

                                .dropdown-content a {
                                    color: black;
                                    padding: 12px 16px;
                                    text-decoration: none;
                                    /*display: block;*/
                                }

                                /*.dropdown-content a:hover {background-color: #ddd;}*/
                                .dropdown:hover .dropdown-content {
                                    display: block;
                                    background: #fff;
                                }

                                /*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/
                            </style>
                        </div>
                        <div class="d-lg-none ml-auto mr-0">
                            <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a>
                        </div>
                        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                            <div class="position-relative flex-grow-1">
                                <form action="{{url('products')}}" method="GET" class="stop-propagation">
                                    <div class="d-flex position-relative align-items-center">
                                        <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                            <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="border-0 border-lg form-control" id="search" name="q" placeholder="I am shopping for..." autocomplete="off">
                                            <div class="input-group-append d-none d-lg-block">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="la la-search la-flip-horizontal fs-18"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                                    <div class="search-preloader absolute-top-center">
                                        <div class="dot-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none p-3 text-center fs-16">
                                    </div>
                                    <div id="search-content" class="text-left">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-none ml-3 mr-0">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="https://circle.com.bd/compare" class="d-flex align-items-center text-reset">
                                    <i class="la la-refresh la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Compare</span>
                                    </span>
                                </a>
                            </div>
                        </div> -->
                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="wishlist">
                                <a href="{{url('notification')}}" class="d-flex align-items-center text-reset">
                                    <i class="la la-bell la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill nn_count">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Notification</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="wishlist">
                                <a href="{{url('wishlist')}}" class="d-flex align-items-center text-reset">
                                    <i class="la la-heart-o la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill w-count">0</span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Wishlist</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                            <div class="nav-cart-box dropdown h-100" id="cart_items">
                                <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
                                    <i class="la la-shopping-cart la-2x opacity-80"></i>
                                    <span class="flex-grow-1 ml-1">
                                        <span class="badge badge-primary badge-inline badge-pill" id="cart_count">
                                            @if(session('cart'))
                                            {{ count((array) session('cart')) }}
                                            @else
                                            0
                                            @endif
                                        </span>
                                        <span class="nav-box-text d-none d-xl-block opacity-70">Cart</span>
                                    </span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">
                                    <div id="has_cart">
                                        <div class="p-3 fs-15 fw-600 p-3 border-bottom has_cart_1">
                                            Cart Items
                                        </div>
                                        <ul class="h-250px overflow-auto c-scrollbar-light list-group list-group-flush has_cart_2">
                                        </ul>
                                        <div class="px-3 py-2 fs-15 border-top d-flex justify-content-between has_cart_3">
                                            <span class="opacity-60">Subtotal</span>
                                            <span class="fw-600" id="cart_subtotal">0</span>
                                        </div>
                                        <div class="px-3 py-2 text-center border-top has_cart_4">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="{{url('cart')}}" class="btn btn-soft-primary btn-sm">
                                                        View cart
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-sm">
                                                        Checkout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="empty_cart" style="display: none;">
                                        <div class="text-center p-3">
                                            <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                            <h3 class="h6 fw-700">Your Cart is empty</h3>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
                    <div class="container-fluid">
                        <div class="row gutters-10 position-relative">
                            <div class="col-lg-3 position-static">
                                <div class="aiz-category-menu bg-white rounded  shadow-sm">
                                    <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
                                        <span class="fw-600 fs-16 mr-3">Categories</span>
                                        <a href="{{url('categories')}}" class="text-reset">
                                            <span class="d-none d-lg-inline-block">See All ></span>
                                        </a>
                                    </div>
                                    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                                        <li class="category-nav-element" data-id="1">
                                            <a href="https://circle.com.bd/category/women-fashion" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Women Clothing &amp; Fashion" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Women Clothing &amp; Fashion</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="2">
                                            <a href="https://circle.com.bd/category/men-fashion" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Men Clothing &amp; Fashion" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Men Clothing &amp; Fashion</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="3">
                                            <a href="https://circle.com.bd/category/kids-toys" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Kids" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Kids</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="5">
                                            <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Purse &amp; Jewelry" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Purse &amp; Jewelry</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="9">
                                            <a href="https://circle.com.bd/category/home-decor-zeqkk" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Home Decor" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Home Decor</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="10">
                                            <a href="https://circle.com.bd/category/essential-products-dwsa3" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Essential products" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Essential products</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="11">
                                            <a href="https://circle.com.bd/category/islamic-items-jbpm8" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Islamic Items" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Islamic Items</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="12">
                                            <a href="https://circle.com.bd/category/offer-products-re5kf" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Offer Products" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Offer Products</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="13">
                                            <a href="https://circle.com.bd/category/winter-collection-wq7tm" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Winter Collection" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Winter Collection</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="14">
                                            <a href="https://circle.com.bd/category/beauty-products-munzb" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Beauty Products" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Beauty Products</span>
                                            </a>

                                        </li>
                                        <li class="category-nav-element" data-id="17">
                                            <a href="https://circle.com.bd/category/foods-smfa6" class="text-truncate text-reset py-2 px-3 d-block">
                                                <img class="cat-image lazyload mr-2 opacity-60" src="{{asset('staticfile/images/placeholder.jpg')}}" data-src="" width="16" alt="Foods" onerror="this.onerror=null;this.src='{{asset('staticfile/images/placeholder.jpg')}}';">
                                                <span class="cat-name">Foods</span>
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white border-top border-gray-200 py-1">
                <div class="container-fluid">
                    <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                        @foreach($menus as $menu)
                        <li class="list-inline-item mr-0">
                            <a href="{{ url('/') }}/{{ $menu->slug }}" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                                {{ $menu->title }}
                            </a>
                        </li>
                        @endforeach
                        <!-- <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/flash-deals" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Collections
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/women-fashion" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Women Fashion
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/men-fashion" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Men Fashion
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/Beauty-Products-MUNZb" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Beauty Products
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/Home-Decor-ZeQKK" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Home Decor
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/kids-toys" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Kids
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/Gadget-and-Electronics-gJnbc" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Gadget &amp; Electronics
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="https://circle.com.bd/category/jewelry--watches-x5uju" class="opacity-60 fs-14 px-2 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Purse &amp; Jewelry
                        </a>
                    </li> -->
                    </ul>
                </div>
            </div>
        </header>
        @yield('content')
        <section class="bg-white border-top mt-auto">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block" href="{{url('accessibility')}}">
                            <i class="la la-file-text la-3x text-primary mb-2"></i>
                            <h4 class="h6">Terms &amp; conditions</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block" href="{{url('return')}}">
                            <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                            <h4 class="h6">Return Policy</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block" href="{{url('aboutus')}}">
                            <i class="la la-comment-alt la-3x text-primary mb-2"></i>
                            <h4 class="h6">About Us</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left border-right text-center p-4 d-block" href="{{url('privacy')}}">
                            <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                            <h4 class="h6">Privacy Policy</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark py-5 text-light footer-widget">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 text-center text-md-left">
                        <div class="mt-4">
                            <div class="my-3">
                                <p>UR Fashion is committed to provide best quality product for customers and keep fast delivery service.</p>
                            </div>
                            <div class="d-inline-block d-md-block mb-4">
                                <form class="form-inline" method="POST" action="https://circle.com.bd/subscribers">
                                    <input type="hidden" name="_token" value="jP7f4uMI3cVhjRcLLMhAgHq9Yy2oeI1DiVf0xzJt">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                            <div class="w-300px mw-100 mx-auto mx-md-0">
                                <a href="https://play.google.com/store/apps/details?id=bd.com.circle" target="_blank" class="d-inline-block mr-3 ml-0">
                                    <img src="https://circle.com.bd/public/assets/img/play.png" class="mx-100 h-40px">
                                </a>
                                <a href="#" target="_blank" class="d-inline-block">
                                    <img src="https://circle.com.bd/public/assets/img/app.png" class="mx-100 h-40px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Contact Info
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Address:</span>
                                    <span class="d-block opacity-70">{{$data->working_hour}}</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Phone:</span>
                                    <span class="d-block opacity-70">{{$data->header_phone1}}</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Email:</span>
                                    <span class="d-block opacity-70">
                                        <a href="mailto:{{$data->email}}" class="text-reset">{{$data->email}}</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                QUICK LINKS
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="{{url('help')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        Tutorial
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('accessibility')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        FAQs
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('aboutus')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('privacy')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        Return Policy
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('accessibility')}}" class="opacity-50 hov-opacity-100 text-reset">
                                        Terms &amp; Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                My Account
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="https://circle.com.bd/logout">
                                        Logout
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="https://circle.com.bd/purchase_history">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="https://circle.com.bd/wishlists">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset" href="https://circle.com.bd/track-your-order">
                                        Track Order
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section>
        <footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="text-center text-md-left" current-verison="4.6">
                        {!! $data->footer_copyright !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline my-3 my-md-0 social colored text-center">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/urfashion21" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <!-- <li class="list-inline-item">
                                <a href="#" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                            </li> -->
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/urfasshion21" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCZWHl6KhHgQSHKP35SeUfBg" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <img src="{{asset('staticfile/images/footer_payment.png')}}" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            function confirm_modal(delete_url) {
                jQuery('#confirm-delete').modal('show', {
                    backdrop: 'static'
                });
                document.getElementById('delete_link').setAttribute('href', delete_url);
            }
        </script>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p>Delete confirmation message</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script type="text/javascript" src="{{ asset('staticfile/js/vendors.js')}}"></script>
        <script type="text/javascript" src="{{ asset('staticfile/js/aiz-core.js')}}"></script>
        <script type="text/javascript" src="{{ asset('staticfile/js/bootstrap.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('.category-nav-element').each(function(i, el) {
                    $(el).on('mouseover', function() {
                        if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                            $.post('https://circle.com.bd/category/nav-element-list', {
                                _token: AIZ.data.csrf,
                                id: $(el).data('id')
                            }, function(data) {
                                $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                            });
                        }
                    });
                });
            });
            //     if ($('#lang-change').length > 0) {
            //         $('#lang-change .dropdown-menu a').each(function() {
            //             $(this).on('click', function(e) {
            //                 e.preventDefault();
            //                 var $this = $(this);
            //                 var locale = $this.data('flag');
            //                 $.post('https://circle.com.bd/language', {
            //                     _token: AIZ.data.csrf,
            //                     locale: locale
            //                 }, function(data) {
            //                     location.reload();
            //                 });

            //             });
            //         });
            //     }

            //     if ($('#currency-change').length > 0) {
            //         $('#currency-change .dropdown-menu a').each(function() {
            //             $(this).on('click', function(e) {
            //                 e.preventDefault();
            //                 var $this = $(this);
            //                 var currency_code = $this.data('currency');
            //                 $.post('https://circle.com.bd/currency', {
            //                     _token: AIZ.data.csrf,
            //                     currency_code: currency_code
            //                 }, function(data) {
            //                     location.reload();
            //                 });

            //             });
            //         });
            //     }
            // });

            // $('#search').on('keyup', function() {
            //     search();
            // });

            // $('#search').on('focus', function() {
            //     search();
            // });

            // function search() {
            //     var searchKey = $('#search').val();
            //     if (searchKey.length > 0) {
            //         $('body').addClass("typed-search-box-shown");

            //         $('.typed-search-box').removeClass('d-none');
            //         $('.search-preloader').removeClass('d-none');
            //         $.post('https://circle.com.bd/ajax-search', {
            //             _token: AIZ.data.csrf,
            //             search: searchKey
            //         }, function(data) {
            //             if (data == '0') {
            //                     // $('.typed-search-box').addClass('d-none');
            //                     $('#search-content').html(null);
            //                     $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
            //                     $('.search-preloader').addClass('d-none');

            //                 } else {
            //                     $('.typed-search-box .search-nothing').addClass('d-none').html(null);
            //                     $('#search-content').html(data);
            //                     $('.search-preloader').addClass('d-none');
            //                 }
            //             });
            //     } else {
            //         $('.typed-search-box').addClass('d-none');
            //         $('body').removeClass("typed-search-box-shown");
            //     }
            // }

            // function updateNavCart() {
            //     $.post('https://circle.com.bd/cart/nav-cart-items', {
            //         _token: AIZ.data.csrf
            //     }, function(data) {
            //         $('#cart_items').html(data);
            //     });
            // }

            function removeFromCart(key) {
                // alert(key);
                if(confirm("Are you sure want to remove?")) {
                    $.ajax({
                        url: '{{ route('remove.from.cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            id: key
                        },
                        success: function (response) {
                            // cartTotal();
                            cartCount();
                            cartData();
                            cartItemTotal();
                            if ($.isEmptyObject(response.error)) {
                                toastr.success(response.success, 'Success', {
                                    timeOut: 3000
                                });
                            } else {
                                toastr.error(response.error, {
                                    timeOut: 3000
                                });
                            }
                        }
                    });
                }
            }

            // function addToCompare(id) {
            //     $.post('https://circle.com.bd/compare/addToCompare', {
            //         _token: AIZ.data.csrf,
            //         id: id
            //     }, function(data) {
            //         $('#compare').html(data);
            //         AIZ.plugins.notify('success', "Item has been added to compare list");
            //         $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            //     });
            // }

            // function addToWishList(id) {
            //     $.post('https://circle.com.bd/wishlists', {
            //         _token: AIZ.data.csrf,
            //         id: id
            //     }, function(data) {
            //         if (data != 0) {
            //             $('#wishlist').html(data);
            //             AIZ.plugins.notify('success', "Item has been added to wishlist");
            //         } else {
            //             AIZ.plugins.notify('warning', "Please login first");
            //         }
            //     });
            // }

            // function showAddToCartModal(id) {
            //     if (!$('#modal-size').hasClass('modal-lg')) {
            //         $('#modal-size').addClass('modal-lg');
            //     }
            //     $('#addToCart-modal-body').html(null);
            //     $('#addToCart').modal();
            //     $('.c-preloader').show();
            //     $.post('https://circle.com.bd/cart/show-cart-modal', {
            //         _token: AIZ.data.csrf,
            //         id: id
            //     }, function(data) {
            //         $('.c-preloader').hide();
            //         $('#addToCart-modal-body').html(data);
            //         AIZ.plugins.slickCarousel();
            //         AIZ.plugins.zoom();
            //         AIZ.extra.plusMinus();
            //         getVariantPrice();
            //     });
            // }

            // $('#option-choice-form input').on('change', function() {
            //     getVariantPrice();
            // });

            // function getVariantPrice() {
            //     if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
            //         $.ajax({
            //             type: "POST",
            //             url: 'https://circle.com.bd/product/variant_price',
            //             data: $('#option-choice-form').serializeArray(),
            //             success: function(data) {

            //                 $('.product-gallery-thumb .carousel-box').each(function(i) {
            //                     if ($(this).data('variation') && data.variation == $(this).data('variation')) {
            //                         $('.product-gallery-thumb').slick('slickGoTo', i);
            //                     }
            //                 })

            //                 $('#option-choice-form #chosen_price_div').removeClass('d-none');
            //                 $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
            //                 $('#available-quantity').html(data.quantity);
            //                 $('.input-number').prop('max', data.quantity);
            //                 if (parseInt(data.quantity) < 1 && data.digital == 0) {
            //                     $('.buy-now').hide();
            //                     $('.add-to-cart').hide();
            //                 } else {
            //                     $('.buy-now').show();
            //                     $('.add-to-cart').show();
            //                 }
            //             }
            //         });
            //     }
            // }

            // function checkAddToCartValidity() {
            //     var names = {};
            //         $('#option-choice-form input:radio').each(function() { // find unique names
            //             names[$(this).attr('name')] = true;
            //         });
            //         var count = 0;
            //         $.each(names, function() { // then count them
            //             count++;
            //         });

            //         if ($('#option-choice-form input:radio:checked').length == count) {
            //             return true;
            //         }

            //         return false;
            //     }

            //     function addToCart() {
            //         if (checkAddToCartValidity()) {
            //             $('#addToCart').modal();
            //             $('.c-preloader').show();
            //             $.ajax({
            //                 type: "POST",
            //                 url: 'https://circle.com.bd/cart/addtocart',
            //                 data: $('#option-choice-form').serializeArray(),
            //                 success: function(data) {
            //                     $('#addToCart-modal-body').html(null);
            //                     $('.c-preloader').hide();
            //                     $('#modal-size').removeClass('modal-lg');
            //                     $('#addToCart-modal-body').html(data.view);
            //                     updateNavCart();
            //                     $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
            //                 }
            //             });
            //         } else {
            //             AIZ.plugins.notify('warning', 'Please choose all the options');
            //         }
            //     }

            //     function buyNow() {
            //         if (checkAddToCartValidity()) {
            //             $('#addToCart-modal-body').html(null);
            //             $('#addToCart').modal();
            //             $('.c-preloader').show();
            //             $.ajax({
            //                 type: "POST",
            //                 url: 'https://circle.com.bd/cart/addtocart',
            //                 data: $('#option-choice-form').serializeArray(),
            //                 success: function(data) {
            //                     if (data.status == 1) {
            //                         updateNavCart();
            //                         $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
            //                         window.location.replace("https://circle.com.bd/cart");
            //                     } else {
            //                         $('#addToCart-modal-body').html(null);
            //                         $('.c-preloader').hide();
            //                         $('#modal-size').removeClass('modal-lg');
            //                         $('#addToCart-modal-body').html(data.view);
            //                     }
            //                 }
            //             });
            //         } else {
            //             AIZ.plugins.notify('warning', 'Please choose all the options');
            //         }
            //     }
            // 
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });
            });
        </script>
        @push('scripts')
        <script>
            <link rel = "stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" >
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
        </script>
        <script>
            @if(Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
            @endif
        </script>
        <script>
            //Cart Qty
            cartCount();
            function cartCount() {
                $.ajax({
                    url: "{{ url('cart-count') }}",
                    success: function(data) {
                        // alert(data);
                        $('#cart_count').html(data);
                        if(data==0||null){
                            $('#empty_cart').show();
                            $('#empty_cart_page').show();
                            $('#has_cart_page').hide();
                            $('#has_cart').hide();
                        } else {
                            $('#empty_cart').hide();
                            $('#has_cart').show();
                            $('#has_cart_page').show();
                            $('#empty_cart_page').hide();
                        }
                    }
                })
            }
            
            ntCount();
            function ntCount() {
                $.ajax({
                    url: "{{ url('nt-count') }}",
                    success: function(data) {
                        $('.nn_count').html(data);
                    }
                })
            }
            
            wishlistCount();
            function wishlistCount() {
                $.ajax({
                    url: "{{ url('wishlist-count') }}",
                    success: function(data) {
                        // alert(data);
                        $('.w-count').html(data);
                        if(data==0||null){
                            $('.cart-empty').show();
                            $('.cart-full').hide();
                        } else {
                            $('.cart-empty').hide();
                            $('.cart-full').show();
                        }
                    }
                })
            }
            cartData();
            function cartData() {
                // alert('HI');
                $.ajax({
                    url: "{{ url('/cart-data') }}",
                    success: function(response) {
                        console.log(response);
                        var name = response;
                        var APP_URL = {!! json_encode(url('/')) !!};
                        table = ""; 
                        jQuery.each(name, function(i,data) {
                            table += ('<li class="list-group-item"><span class="d-flex align-items-center"><a href="'+ APP_URL + '/product/' + data.slug +'" class="text-reset d-flex align-items-center flex-grow-1"><img src="'+ APP_URL + data.product_image +'" class="img-fit size-60px rounded lazyloaded" alt="Half Silk Saree SAR698"><span class="minw-0 pl-2 flex-grow-1"><span class="fw-600 mb-1 text-truncate-2">'+ data.product_name +'</span><span class="">'+ data.qty +'x</span><span class="">'+ data.product_price +'৳</span></span></a><span class=""><button onclick="removeFromCart('+ data.product_id +')" class="btn btn-sm btn-icon stop-propagation"><i class="la la-close"></i></button></span></span></li>');
                        });
                        $(".has_cart_2").html(table);
                    }
                })
            }
            //Wishlist
            // function wishlistCount() {
            //     $.ajax({
            //         url: "{{ url('/wishlist/count') }}",
            //         success: function(data) {
            //             $('.wishlistCount').html(data);
            //         }
            //     })
            // }
            cartTotal();
            function cartTotal() {
                $.ajax({
                    url: "{{ url('cart-total') }}",
                    success: function(data) {
                        $('#cart_subtotal').html(data);
                        $('#paid_amount').prop('max',data);
                        $('#cart_page_subtotal').html(data);
                        $('.grand-total').html(data);
                    }
                })
            }
            sellingTotal();
            function sellingTotal() {
                $.ajax({
                    url: "{{ url('selling-total') }}",
                    success: function(data) {
                        $('#selling_subtotal').html(data);
                    }
                })
            }
            cartItemTotal();
            function cartItemTotal() {
                $.ajax({
                    url: "{{ url('cart-item-total') }}",
                    success: function(data) {
                        $('#quantity_total').val(data);
                    }
                })
            }
        </script>
        
</body>
</html>