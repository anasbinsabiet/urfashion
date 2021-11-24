@extends('frontend.layouts.master')
@section('title','Checkout')
@section('content')
<div id="orderConfirm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}" lang="en">Home</a></li><li><a href="javascript:void(0);" lang="en">Shopping Cart</a></li>
                </ul>
            </div>      
        </div>
    </div>
    <div class="errorMessage"></div>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12"><div class="row">
            <div class="shoppingCartBlock">
                <div class="cartlogoBox" lang="en">
                    <img src="{{asset('/staticfile/images/cartlogo.png')}}" alt="cart">
                    Shopping Cart
                </div>
                <div class="scStepsBlock">
                    <div class="col-sm-3 col-xs-6 scStep">
                        <p class="title" lang="en">Step 1</p>
                        <p class="desc" lang="en">Configure Product</p>
                    </div>
                    <div class="col-sm-3 col-xs-6 scStep">
                        <p class="title" lang="en">Step 2</p>
                        <p class="desc" lang="en">Confirm Options</p>
                    </div>
                    <div class="col-sm-3 col-xs-6 scStep active">
                        <p class="title" lang="en">Step 3</p>
                        <p class="desc" lang="en">Billing &amp; Payment</p>
                    </div>
                    <div class="col-sm-3 col-xs-6 scStep">
                        <p class="title" lang="en">Step 4</p>
                        <p class="desc" lang="en">Upload Art</p>
                    </div>
                </div>
                <div class="billingPaymentBlock">
                    <ol type="1">
                        <li id="billingAddressLi">
                            <div class="col-sm-4 col-xs-12 scAddTitle" lang="en">
                                1. Billing Address
                                <input type="hidden" name="billingId" id="billingId" value="651002">
                            </div>
                            <div class="col-sm-5 col-xs-12 scAddress">
                                <div id="billingdetaildiv">
                                    @isset($user->name)
                                    <p lang="en">
                                        {{$user->name}}
                                    </p>
                                    @endisset 
                                    @isset($user->mobile)
                                    <p lang="en">
                                        {{$user->mobile}}
                                    </p>
                                    @endisset 
                                    @isset($user->email)
                                    <p lang="en">
                                        {{$user->email}}
                                    </p>
                                    @endisset                                       
                                    @isset($user->address)
                                    <p lang="en">
                                        {{$user->address}}
                                    </p>
                                    @endisset                                       
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 scOpBox">

                                <a href="javascript:displayformwithid('updatebilling')" class="changeBtn" lang="en">Change</a>

                                <a href="javascript:displayformwithid('newbilling')" class="changeBtn" lang="en">Add New</a>
                                <div class="existAddress" id="updatebilling" style="display: none;">

                                    <p onclick="changeAddress('updateBillingAddress','billingId','651002')" lang="en">
                                        @isset($user->address)
                                        {{$user->address}}
                                        @endisset
                                    </p>

                                </div>
                                <div class="addressbox" id="newbilling" style="display: none;">
                                    <p lang="en"><img src="{{url('/staticfile/images/x1.png')}}" alt="close" onclick="displayformwithid('newbilling')"></p>
                                    <h2 lang="en">Add Billing Address</h2>
                                    <form id="addressform">
                                        <div class="card-body" style="padding: 15px;">
                                            <div>
                                                <input type="text" placeholder="Full Name" id="name" name="name" style="height: 30px; width: 100%;">
                                            </div>
                                            <div style="margin-top: 15px;display: flex;">
                                                <span style="border-left: 1px solid darkgrey;color:red;border-top: 1px solid darkgrey;border-bottom: 1px solid darkgrey;">*</span>
                                                <input type="text" placeholder="Phone Number" id="mobile" name="mobile" style="height: 30px; width: 100%;" required>
                                            </div>
                                            <div style="margin-top: 15px;display: flex;">
                                                <input type="text" placeholder="Email Address" id="email" name="email" style="height: 30px; width: 100%;">
                                            </div>
                                            <div style="margin-top: 15px;display: flex;">
                                                <span style="border-left: 1px solid darkgrey;color:red;border-top: 1px solid darkgrey;border-bottom: 1px solid darkgrey;">*</span>
                                                <input type="text" placeholder="Address" id="address" name="address" style="height: 30px; width: 100%;" required>
                                            </div>
                                            <div style="margin-top: 15px;text-align: center;">
                                                <span style="color: #105a9f;font-size: 16px;line-height: 1;" lang="en">*&nbsp;Required information</span>
                                            </div>
                                            <div style="margin-top: 15px;text-align: center;">
                                                <a class="addressbut" lang="en"><input type="submit" value="Submit" style="background: #157bea;color:#fff;border:none;" /></a>
                                            </div>                                            
                                            <!-- <div style="margin-top: 15px;text-align: center;">
                                                <input type="checkbox" name="basDefault" style="margin: 0" aria-label="Set this as my default Billing Address">
                                                <span style="color: #105a9f;font-size: 12px;" lang="en">Set this as my default Billing Address</span> 
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li id="shippingAddressLi">
                            <div class="col-sm-4 col-xs-12 scAddTitle" lang="en">
                                2. Shipping Address
                            </div>
                            <div class="col-sm-5 col-xs-12 scAddress">
                                <div id="shippingdetaildiv"> 
                                    @isset($user->name)
                                    <p lang="en">
                                        {{$user->name}}
                                    </p>
                                    @endisset 
                                    @isset($user->mobile)
                                    <p lang="en">
                                        {{$user->mobile}}
                                    </p>
                                    @endisset 
                                    @isset($user->email)
                                    <p lang="en">
                                        {{$user->email}}
                                    </p>
                                    @endisset 
                                    @isset($user->address)
                                    <p lang="en">
                                        {{$user->address}}
                                    </p>
                                    @endisset 
                                </div>
                                <div id="shippingdetaildiv_two" style="display: none;"> 
                                    @isset($user->shipping_name)
                                    <p lang="en">
                                        {{$user->shipping_name}}
                                    </p>
                                    @endisset 
                                    @isset($user->shipping_mobile)
                                    <p lang="en">
                                        {{$user->shipping_mobile}}
                                    </p>
                                    @endisset 
                                    @isset($user->shipping_email)
                                    <p lang="en">
                                        {{$user->shipping_email}}
                                    </p>
                                    @endisset 
                                    @isset($user->shipping_address)
                                    <p lang="en">
                                        {{$user->shipping_address}}
                                    </p>
                                    @endisset 
                                </div>
                                <div class="sbaBox" lang="en">
                                    <input type="checkbox" id="shippingType" checked="checked" aria-label="Same as billing address">
                                    &nbsp;Same as billing address 
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 scOpBox"> 

                                <a href="javascript:void();" class="changeBtn" style="cursor: not-allowed;" lang="en">Change</a>

                                <a href="javascript:displayformwithid('newshipping');" class="changeBtn" lang="en">Add New</a>
                                <div class="existAddress" id="updateshipping" style="display: none;">

                                </div>
                                <div class="addressbox" id="newshipping" style="display: none;">
                                    <p lang="en"><img src="{{url('/staticfile/images/x1.png')}}" alt="close" onclick="displayformwithid('newshipping')"></p>
                                    <h2 lang="en">Add Shipping Address</h2>
                                    <form id="shippingaddress">
                                        <div class="card-body" style="padding: 15px;">
                                            <div>
                                                <input type="text" placeholder="Full Name" id="name" name="name" style="height: 30px; width: 100%;">
                                            </div>
                                            <div style="margin-top: 15px;display: flex;">
                                                <span style="border-left: 1px solid darkgrey;color:red;border-top: 1px solid darkgrey;border-bottom: 1px solid darkgrey;">*</span>
                                                <input type="text" placeholder="Phone Number" id="mobile" name="mobile" style="height: 30px; width: 100%;" required>
                                            </div>
                                            <div style="margin-top: 15px;display: flex;">
                                                <input type="text" placeholder="Email Address" id="shipping_email" name="shipping_email" style="height: 30px; width: 100%;">
                                            </div>
                                            <div style="margin-top: 15px;display: flex;">
                                                <span style="border-left: 1px solid darkgrey;color:red;border-top: 1px solid darkgrey;border-bottom: 1px solid darkgrey;">*</span>
                                                <input type="text" placeholder="Address" id="address" name="address" style="height: 30px; width: 100%;" required>
                                            </div>
                                            <div style="margin-top: 15px;text-align: center;">
                                                <span style="color: #105a9f;font-size: 16px;line-height: 1;" lang="en">*&nbsp;Required information</span>
                                            </div>
                                            <div style="margin-top: 15px;text-align: center;">
                                                <a class="addressbut" lang="en"><input type="submit" value="Submit" style="background: #157bea;color:#fff;border:none;" /></a>
                                            </div>                                            
                                            <!-- <div style="margin-top: 15px;text-align: center;">
                                                <input type="checkbox" name="basDefault" style="margin: 0" aria-label="Set this as my default Billing Address">
                                                <span style="color: #105a9f;font-size: 12px;" lang="en">Set this as my default Billing Address</span> 
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <form id="checkoutForm">
                            <input type="hidden" id="same_billing_shipping" name="same_billing_shipping" aria-label="Same as billing address" value="1">
                            <li class="shippingInfo">
                                <div class="col-sm-4 col-xs-12 scAddTitle" lang="en">
                                    3. Shipping Information
                                </div>
                                <div class="col-sm-4 col-xs-12 scAddress">
                                    <span class="grayText" lang="en">Choose your Shipping Method</span>
                                    <select name="shipping_method" aria-label="Shipping Method">
                                        <option value="" lang="en">Select One</option>
                                        @foreach($shippingmethod as $sm)
                                        <option value="{{$sm->id}}" lang="en">{{$sm->shipping_method}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12 scOpBox">
                                    <span class="grayText" lang="en">I will use my own shipping account number</span>
                                    <input type="text" name="shipping_account_number" maxlength="100" aria-label="my own shipping account number">
                                </div>
                            </li>
                            <li class="payMode">
                                <div class="col-sm-4 col-xs-12 scAddTitle" lang="en">
                                    4. Payment Method
                                </div>
                                <div class="col-xs-12" id="newpayment" style="">
                                    <div class="payInfo col-sm-6 col-xs-12">
                                        <span class="payTitle" lang="en">Payment Information </span>
                                        <div class="formBlock">
                                            <ul>
                                                <li>
                                                    <label lang="en">Payment Methods</label> 
                                                    <select name="payment_method" id="paymentMethod">
                                                        @foreach($paymentmethod as $pm)
                                                        <option value="{{$pm->id}}" lang="en">{{$pm->payment_method}}</option>
                                                        @endforeach
                                                    </select>
                                                </li>
                                                <li class="isCreditCard" style="display: none;">
                                                    <label lang="en">Credit Card Type *</label> 
                                                    <select name="card_type" id="paymentType"><option value="" lang="en">Please Select</option>
                                                        @foreach($cardtype as $ct)
                                                        <option value="{{$ct->id}}" lang="en">{{$ct->card_type}}</option>
                                                        @endforeach
                                                    </select>
                                                </li>
                                                <li class="isCreditCard" style="display: none;">
                                                    <label lang="en">Credit Card Number *</label> 
                                                    <input type="text" name="card_no" maxlength="16" id="cardNo" aria-label="Credit Card Number">
                                                </li>
                                                <li class="isMobileBanking" style="display: none;">
                                                    <label lang="en">From Number *</label> 
                                                    <input type="text" name="from_number" maxlength="16" id="from_number" aria-label="From Number">
                                                </li>
                                                <li class="isMobileBanking" style="display: none;">
                                                    <label lang="en">Transaction ID *</label> 
                                                    <input type="text" name="transaction_id" maxlength="16" id="transaction_id" aria-label="Transaction ID">
                                                </li>
                                                <li class="date isCreditCard" style="display: none;">
                                                    <label lang="en">Expiration Date *</label> 
                                                    <select name="expire_month" id="expireMonth"><option value="" lang="en">Month</option>

                                                        <option value="1" lang="en">Jan</option>

                                                        <option value="2" lang="en">Feb</option>

                                                        <option value="3" lang="en">Mar</option>

                                                        <option value="4" lang="en">Apr</option>

                                                        <option value="5" lang="en">May</option>

                                                        <option value="6" lang="en">Jun</option>

                                                        <option value="7" lang="en">Jul</option>

                                                        <option value="8" lang="en">Aug</option>

                                                        <option value="9" lang="en">Sep</option>

                                                        <option value="10" lang="en">Oct</option>

                                                        <option value="11" lang="en">Nov</option>

                                                        <option value="12" lang="en">Dec</option></select>
                                                        <select name="expire_year" id="expireYear"><option value="" lang="en">Year</option>


                                                            <option value="2021" lang="en">2021</option>

                                                            <option value="2022" lang="en">2022</option>

                                                            <option value="2023" lang="en">2023</option>

                                                            <option value="2024" lang="en">2024</option>

                                                            <option value="2025" lang="en">2025</option>

                                                            <option value="2026" lang="en">2026</option>

                                                            <option value="2027" lang="en">2027</option>

                                                            <option value="2028" lang="en">2028</option>

                                                            <option value="2029" lang="en">2029</option>

                                                            <option value="2030" lang="en">2030</option>

                                                            <option value="2031" lang="en">2031</option>

                                                            <option value="2032" lang="en">2032</option>

                                                            <option value="2033" lang="en">2033</option>

                                                            <option value="2034" lang="en">2034</option>

                                                            <option value="2035" lang="en">2035</option>

                                                            <option value="2036" lang="en">2036</option>

                                                            <option value="2037" lang="en">2037</option>

                                                            <option value="2038" lang="en">2038</option>

                                                            <option value="2039" lang="en">2039</option>

                                                            <option value="2040" lang="en">2040</option>

                                                            <option value="2041" lang="en">2041</option>

                                                            <option value="2042" lang="en">2042</option>

                                                            <option value="2043" lang="en">2043</option>

                                                            <option value="2044" lang="en">2044</option>

                                                            <option value="2045" lang="en">2045</option>

                                                            <option value="2046" lang="en">2046</option>

                                                            <option value="2047" lang="en">2047</option>

                                                            <option value="2048" lang="en">2048</option>

                                                            <option value="2049" lang="en">2049</option>

                                                            <option value="2050" lang="en">2050</option></select>
                                                        </li>
                                                        <li class="securityCode isCreditCard" style="display: none;">
                                                            <label lang="en">Security Code *</label> 
                                                            <input type="text" name="card_secret_code" maxlength="20" id="cardCode" aria-label="Security Code">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="billingInstruction" lang="en" style="display: none;">*&nbsp;Net 30 Terms available upon credit approval</span>
                                        </div>
                                        <div class="billingInfo col-sm-6 col-xs-12">
                                            <span class="payTitle" lang="en">Billing Information</span>
                                            <div class="formBlock">
                                                <ul>
                                                    <li class="isCreditCard" style="display: none;">
                                                     <label lang="en">Name On Card *</label> 
                                                     <input type="text" name="name_on_card" maxlength="50" id="payerName" aria-label="Name On Card">
                                                 </li>
                                                 <li>
                                                     <input type="hidden" name="billing_name" value="@isset($user->name){{$user->name}}@endisset">
                                                     <input type="hidden" name="billing_mobile" value="@isset($user->mobile){{$user->mobile}}@endisset">
                                                     <input type="hidden" name="billing_email" value="@isset($user->email){{$user->email}}@endisset">
                                                     <label lang="en">Billing Address *</label> 
                                                     <input type="text" name="billing_address" maxlength="100" id="paddress" value="@isset($user->address){{$user->address}}@endisset" aria-label="Billing Address">
                                                 
                                                     <input type="hidden" name="shipping_name" value="@isset($user->shipping_name){{$user->shipping_name}}@endisset">
                                                     <input type="hidden" name="shipping_mobile" value="@isset($user->shipping_mobile){{$user->shipping_mobile}}@endisset">
                                                     <input type="hidden" name="shipping_email" value="@isset($user->shipping_email){{$user->shipping_email}}@endisset">
                                                     <input type="hidden" name="shipping_address" maxlength="100" value="@isset($user->shipping_address){{$user->shipping_address}}@endisset">
                                                </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                            </li>
                            <li class="orderSummary">
                                <div class="col-md-12 scAddTitle" lang="en">
                                    5. Order Summary
                                </div>
                                @php 
                                $gtotal = 0;
                                $qtotal = 0;
                                @endphp
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                @php
                                $product = App\Models\Product::findOrFail($id);
                                $product_image = App\ColorImage::where('product_id', $id)->orderBy('color_id')->take(1)->first();
                                @endphp
                                <div class="scDescriptions">
                                    <div class="col-sm-2 text-center" style="padding: 0;" lang="en">
                                        <p class="itemTitle" lang="en">
                                            Item {{ $loop->iteration }}
                                        </p>
                                        <img src="@if($product_image) {{asset($product_image->color_image)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" class="img-responsive" alt="port &amp; company® - core blend tee (color)">
                                    </div>
                                    <div class="col-sm-10" style="padding: 0;">
                                        <table border="0" cellspacing="0" cellpadding="0" class="scTable" width="100%">
                                            <tbody><tr><td colspan="4" id="productcodeBox"><span class="productcodebtn" lang="en">ITEM CODE: {{ $product->product_code }}</span></td></tr>
                                                <tr>
                                                    <td valign="middle" class="productNameID"><b>
                                                        <a href="{{ url('/product', $product->product_slug) }}" lang="en">{{ $product->product_name }}</a>
                                                    </b></td>
                                                    <td valign="middle"><b lang="en">Unit Price</b></td>
                                                    <td valign="middle"><b lang="en">Quantity</b></td>
                                                    <td valign="middle"><b lang="en">Amount</b></td>
                                                </tr>
                                                <tr>
                                                    <td lang="en">@if($product->discount > 0) Your {{ $product['discount'] }}% OFF @endisset Savings has been applied</td>
                                                    <td lang="en">{!!$product->discount_price ? $product->discount_price : $product->selling_price!!}৳</td>
                                                    <td lang="en">{{ $details['total_items'] }}৳</td>
                                                    <td lang="en">{{ $product->discount_price ? $details['total_items'] * $product->discount_price : $details['total_items'] * $product->selling_price }}৳</td>
                                                </tr>

                                                <tr>


                                                    <td lang="en">Setup Fee</td>
                                                    <td lang="en">{!!$product->setup_fee!!}৳</td>
                                                    <td lang="en">1</td>
                                                    <td lang="en">{!!$product->setup_fee!!}৳</td>

                                                </tr>


                                                @if($details['item_color'])
                                                @php
                                                $colors = App\Color::where('id', $details['item_color'])->first();
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Item Color - {{$colors->color_name}}</td>
                                                </tr>
                                                @endif
                                                @if($details['small'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - Small (qty: {{ $details['small'] }})</td>
                                                </tr>
                                                @endif
                                                @if($details['medium'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - Medium (qty: {{ $details['medium'] }})</td>
                                                </tr>
                                                @endif
                                                @if($details['large'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - Large (qty: {{ $details['large'] }})</td>
                                                </tr>
                                                @endif
                                                @if($details['axal'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - XL (qty: {{ $details['axal'] }})</td>
                                                </tr>
                                                @endif
                                                @if($details['twoxl'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - 2XL (qty: {{ $details['twoxl'] }})</td>
                                                </tr>
                                                @endif
                                                @if($details['threexl'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - 3XL (qty: {{ $details['threexl'] }})</td>
                                                </tr>
                                                @endif
                                                @if($details['fourxl'])
                                                <tr>
                                                    <td colspan="4" lang="en">Sizes - 4XL (qty: {{ $details['fourxl'] }})</td>
                                                </tr>
                                                @endif
                                                <!--///////////////////////////////////////////////////////////////////////////// left chest -->
                                                @if($details['left_chest'])
                                                <tr>
                                                    <td colspan="4" lang="en">Imprint Location - Left Chest</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_1'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_1'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_2'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_2'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_3'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_3'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_4'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_4'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_5'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_5'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_6'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_6'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_7'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_7'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['left_chest_imprint_color_8'])
                                                @php $colors = App\Color::where('id', $details['left_chest_imprint_color_8'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Left Chest Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif
                                                <!--///////////////////////////////////////////////////////////////////////////// left chest ends -->

                                                <!--///////////////////////////////////////////////////////////////////////////// full front -->
                                                @if($details['full_front'])
                                                <tr>
                                                    <td colspan="4" lang="en">Imprint Location - Full Front</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_1'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_1'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_2'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_2'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_3'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_3'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_4'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_4'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_5'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_5'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_6'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_6'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_7'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_7'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_front_imprint_color_8'])
                                                @php $colors = App\Color::where('id', $details['full_front_imprint_color_8'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Front Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif
                                                <!--///////////////////////////////////////////////////////////////////////////// full front ends -->

                                                <!--///////////////////////////////////////////////////////////////////////////// full Back -->
                                                @if($details['full_back'])
                                                <tr>
                                                    <td colspan="4" lang="en">Imprint Location - Full Back</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_1'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_1'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_2'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_2'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_3'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_3'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_4'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_4'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_5'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_5'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_6'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_6'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_7'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_7'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['full_back_imprint_color_8'])
                                                @php $colors = App\Color::where('id', $details['full_back_imprint_color_8'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Full Back Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif
                                                <!--///////////////////////////////////////////////////////////////////////////// full Back ends -->

                                                <!--///////////////////////////////////////////////////////////////////////////// full Back -->
                                                @if($details['right_sleeve'])
                                                <tr>
                                                    <td colspan="4" lang="en">Imprint Location - Right Sleeve</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_1'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_1'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_2'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_2'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_3'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_3'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_4'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_4'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_5'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_5'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_6'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_6'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_7'])
                                                @php $colors = App\Color::where('id', $details['right_sleeve_imprint_color_7'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif

                                                @if($details['right_sleeve_imprint_color_8'])
                                                @php $colors = App\Color::where('id',$details['right_sleeve_imprint_color_8'])->firstOrFail(); 
                                                @endphp
                                                <tr>
                                                    <td colspan="4" lang="en">Right Sleeve Imprint Colors - {{ $colors->color_name }}</td>
                                                </tr>
                                                @endif
                                                <!--///////////////////////////////////////////////////////////////////////////// full Back ends -->

                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td colspan="3" align="right" valign="middle">
                                                        <span lang="en">Product SubTotal<label lang="en">{{ $details['total_items'] * ($product->discount_price ? $product->discount_price : $product->selling_price) + $product->setup_fee }}</label></span>
                                                        <span lang="en">(Your Savings: {!!$product->discount_price ? $product->selling_price - $product->discount_price : 0 !!}৳)</span>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    </div>
                                    @php
                                    $gtotal += $details['total_items'] * ($product->discount_price ? $product->discount_price : $product->selling_price) + $product->setup_fee;
                                    $qtotal += $details['total_items'];
                                    @endphp
                                    @endforeach
                                    @endif
                            </li>
                            </ol>
                            <div class="scBottomBlock sc3BottomBlock">
                                <div class="col-sm-5"><div class="row">
                                    <p lang="en">
                                        Freight charges will be added to order. 
                                        A representative will contact you with a complete order form that includes freight charges. 
                                        You will not be billed until you approve all charges.
                                        If paying via credit card, you will not be charged until you approve the final artwork and order form showing all details and charges.
                                    </p>
                                    <div class="callHelpBlock" lang="en">
                                        <h3><center>Have questions or need healp?<br>Give us a call<br><span style="color:red;font-size: 1.5rem;">01700-112233</span><br><br>Safe &amp; Secure Shopping<br>We Guard Informatiion with Advance Technology</center></h3>
                                    </div>
                                </div></div>
                                <div class="col-sm-6 col-sm-offset-1"><div class="row">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="scCheckoutTable">

                                        <tbody><tr>
                                           <td class="text-left" lang="en">Tax</td>
                                           <td class="text-right" lang="en">0</td>
                                       </tr>
                                       <tr class="totalBox">
                                        <td class="text-left" lang="en">Order Total</td>
                                        <td class="text-right" lang="en">{{$gtotal}}৳<input type="hidden" name="order_total" value="{{$gtotal}}" /><input type="hidden" name="quantity_total" value="{{$qtotal}}" /></td>
                                    </tr>
                                    <tr><td colspan="2" class="checkOutBox">
                                        <input type="submit" id="submita" class="placeOrderBtn" lang="en" value="PLACE ORDER" />
                                    </td></tr>
                                    <tr><td colspan="2" class="text-center" lang="en">
                                        Upload your artwork after you complete your order<br>
                                        or email artwork to <a target="_blank" href="mailto:info@iconshopbd.com" lang="en">info@iconshopbd.com</a><br>
                                        You will receive a FREE email proof<br>of your imprint for approval.
                                    </td>
                                </tr>
                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
        </div>        
    </div>                            
</div>
</div>
</div>
<script type="text/javascript">
    updateshippingdiv();
    changePaymentMethod();
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#addressform").submit(function (e) {
            e.preventDefault();
            let name = this.elements.name.value;
            let address = this.elements.address.value;
            let email = this.elements.email.value;
            let mobile = this.elements.mobile.value;
            $.ajax({
                url:"{{ route('billing.store') }}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    mobile : mobile,
                    email : email,
                    address : address,
                },
                success:function(response)
                {
                    if(response == 'success')
                    {   
                        location.reload();
                    }
                },
            });
        });

        $("#shippingaddress").submit(function (e) {
            e.preventDefault();
            let name = this.elements.name.value;
            let address = this.elements.address.value;
            let shipping_email = this.elements.shipping_email.value;
            let mobile = this.elements.mobile.value;
            $.ajax({
                url:"{{ route('shipping.store') }}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    mobile : mobile,
                    shipping_email : shipping_email,
                    address : address,
                },
                success:function(response)
                {
                    if(response == 'success')
                    {   
                        location.reload();
                    }
                },
            });
        });

        $("#shippingType").change(function(event){
            if (this.checked){
                $("#shippingdetaildiv").css({"display": "block"});
                $("#same_billing_shipping").val('1');
                $("#shippingdetaildiv_two").css({"display": "none"});
            }else{
                $("#shippingdetaildiv").css({"display": "none"});
                $("#same_billing_shipping").val('0');
                $("#shippingdetaildiv_two").css({"display": "block"});
            }
        });

        $("#checkoutForm").submit(function (e) {
            e.preventDefault();
                    let shipping_method = this.elements.shipping_method.value;
                    let shipping_account_number = this.elements.shipping_account_number.value;
                    let payment_method = this.elements.payment_method.value;
                    let same_billing_shipping = this.elements.same_billing_shipping.value;
                    let transaction_id = this.elements.transaction_id.value;

                    let name_on_card = this.elements.name_on_card.value;
                    let billing_name = this.elements.billing_name.value;
                    let billing_mobile = this.elements.billing_mobile.value;
                    let billing_email = this.elements.billing_email.value;
                    let billing_address = this.elements.billing_address.value;
                    let shipping_name = this.elements.shipping_name.value;
                    let shipping_mobile = this.elements.shipping_mobile.value;
                    let shipping_email = this.elements.shipping_email.value;
                    let shipping_address = this.elements.shipping_address.value;

                    let card_type = this.elements.card_type.value;
                    let card_no = this.elements.card_no.value;
                    let card_secret_code = this.elements.card_secret_code.value;
                    let from_number = this.elements.from_number.value;
                    let expire_month = this.elements.expire_month.value;
                    let expire_year = this.elements.expire_year.value;
                    let quantity_total = this.elements.quantity_total.value;
                    let order_total = this.elements.order_total.value;

                    $.ajax({
                        url:"{{ route('order.store') }}",
                        type:"POST",
                        data:{
                            "_token": "{{ csrf_token() }}",
                            shipping_method:shipping_method,
                            shipping_account_number:shipping_account_number,
                            payment_method:payment_method,
                            same_billing_shipping:same_billing_shipping,
                            name_on_card : name_on_card,
                            billing_name : billing_name,
                            billing_mobile : billing_mobile,
                            billing_email : billing_email,
                            billing_address : billing_address,
                            shipping_name : shipping_name,
                            shipping_mobile : shipping_mobile,
                            shipping_email : shipping_email,
                            shipping_address : shipping_address,
                            card_type : card_type,
                            card_no : card_no,
                            card_secret_code : card_secret_code,
                            from_number : from_number,
                            transaction_id : transaction_id,
                            expire_month : expire_month,
                            expire_year : expire_year,
                            quantity_total : quantity_total,
                            order_total : order_total,
                        },
                        success:function(response)
                        {   
                            console.log(response);
                            if(response == 'success')
                            {   
                                window.location.href = "{{ route('orderconfirm')}}";
                            }
                        },
                    });
                });
    });
</script>
</div>
@endsection