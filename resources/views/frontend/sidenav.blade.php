@isset(Auth::user()->id)
@php
$user_id = Auth::user()->id;
$user = App\User::where('id', $user_id)->get();
@endphp
@endisset
<div class="aiz-user-sidenav-wrap pt-4 position-relative z-1 shadow-sm">
                <div class="absolute-top-right d-xl-none">
                    <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                    </button>
                </div>
                <div class="absolute-top-left d-xl-none">
                    <a class="btn btn-sm p-2" href="https://circle.com.bd/logout">
                        <i class="las la-sign-out-alt la-2x"></i>
                    </a>
                </div>
                <div class="aiz-user-sidenav rounded overflow-hidden  c-scrollbar-light">
                    <div class="px-4 text-center mb-4">
                        <span class="avatar avatar-md mb-3">
                            <img src="https://circle.com.bd/public/assets/img/avatar-place.png" class="image rounded-circle" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/avatar-place.png';">
                        </span>
                        <h4 class="h5 fw-600">{{$user[0]->shop_name}}
                            <span class="ml-2">
                                <i class="las la-check-circle" style="color:green"></i>
                            </span>
                        </h4>
                    </div>

                    <div class="sidemnenu mb-3">
                        <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu">
                            <li class="aiz-side-nav-item">
                                <a href="{{url('/')}}" class="aiz-side-nav-link ">
                                    <i class="las la-bullhorn aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Resell Products</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item mm-active">
                                <a href="{{url('dashboard')}}" class="aiz-side-nav-link active" aria-expanded="true">
                                    <i class="las la-home aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Dashboard</span>
                                </a>
                            </li>


                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/purchase_history" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-file-alt aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Order History</span>-->

                            <!--    </a>-->
                            <!--</li>-->

                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/digital_purchase_history" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-download aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Downloads</span>-->
                            <!--    </a>-->
                            <!--</li>-->


                            <li class="aiz-side-nav-item">
                                <a href="{{url('notification')}}" class="aiz-side-nav-link ">
                                    <i class="la la-bell-o aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Notification</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{url('wishlist')}}" class="aiz-side-nav-link ">
                                    <i class="la la-heart-o aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Wishlist</span>
                                </a>
                            </li>
                            <!---->
                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/seller/products" class="aiz-side-nav-link ">-->
                            <!--        <i class="lab la-sketch aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Products</span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/product-bulk-upload/index" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-upload aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Product Bulk Upload</span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <!--    <li class="aiz-side-nav-item">-->
                            <!--        <a href="https://circle.com.bd/seller/digitalproducts" class="aiz-side-nav-link ">-->
                            <!--            <i class="lab la-sketch aiz-side-nav-icon"></i>-->
                            <!--            <span class="aiz-side-nav-text">Digital Products</span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!---->



                            <li class="aiz-side-nav-item">
                                <a href="{{url('orderstatus')}}" class="aiz-side-nav-link ">
                                    <i class="las la-money-bill aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Order History</span>

                                </a>
                            </li>


                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/seller/reviews" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-star-half-alt aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Product Reviews</span>-->
                            <!--        -->
                            <!--    </a>-->
                            <!--</li>-->

                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/shops" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-cog aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Shop Setting</span>-->
                            <!--    </a>-->
                            <!--</li>-->

                            <!-- <li class="aiz-side-nav-item">
                                <a href="https://circle.com.bd/earning_history" class="aiz-side-nav-link ">
                                    <i class="las la-history aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Payment History</span>
                                </a>
                            </li> -->

                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/withdraw_requests" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-money-bill-wave-alt aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Money Withdraw</span>-->
                            <!--    </a>-->
                            <!--</li>-->

                            <!-- <li class="aiz-side-nav-item">
                                <a href="https://circle.com.bd/earning_history" class="aiz-side-nav-link ">
                                    <i class="las la-history aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Earning History</span>
                                </a>
                            </li> -->









                            <!--<li class="aiz-side-nav-item">-->
                            <!--    <a href="https://circle.com.bd/support_ticket" class="aiz-side-nav-link ">-->
                            <!--        <i class="las la-atom aiz-side-nav-icon"></i>-->
                            <!--        <span class="aiz-side-nav-text">Support Ticket</span>-->
                            <!--        -->
                            <!--    </a>-->
                            <!--</li>-->

                            <li class="aiz-side-nav-item">
                                <a href="{{url('notice-board')}}" class="aiz-side-nav-link ">
                                    <i class="las la-bullhorn aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Notice Board</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{url('myaccount')}}" class="aiz-side-nav-link ">
                                    <i class="las la-user aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Manage Profile</span>
                                </a>
                            </li>

                        </ul>
                    </div>




                </div>
            </div>