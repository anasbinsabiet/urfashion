@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<style type="text/css">
    div#exampleModalLong,
    div#exampleModalCenter {
        opacity: 1;
    }

    div#exampleModalCenter,
    div#exampleModalCenter .modal-content {
        margin-top: 20px;
    }

    .modal-content .modal-body {
        padding: 0px 25px;
    }
</style>
<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider">
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-shopping-cart"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">1. My Cart</h3>
                        </div>
                    </div>
                    <div class="col active">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">2. Checkout</h3>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">3. Delivery info</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">4. Payment</h3>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">3. Confirmation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-4 gry-bg">
    <div class="container">
        <div class="row cols-xs-space cols-sm-space cols-md-space">
            <div class="col-xxl-8 col-xl-10 mx-auto">
                <input type="hidden" name="_token" value="WoV2moQvXeSHEDK7UF28b4k8ZPLvMImTvE6d2v8w">
                <div class="shadow-sm bg-white p-4 rounded mb-4">
                    <div class="row gutters-5">
                        <div class="col-md-6 mx-auto mb-3">
                            <div class="border p-3 rounded mb-3 c-pointer text-center bg-white h-100 d-flex flex-column justify-content-center" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="las la-plus la-2x mb-3"></i>
                                <div class="alpha-7">Add Customer Details</div>
                            </div>
                        </div>

                        <!-- ////////////////////////////////////////////modal starts -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">New Customer Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="new_address_form">
                                        <div class="modal-body">
                                            <div class="p-3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Customer Name <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="hidden" name="user_id" id="customer_user_id" value="@isset($user->id){{$user->id}}@endisset" required>
                                                        <input type="text" class="form-control mb-2" id="customer_name_new" placeholder="Your Customer Name" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Division</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-control mb-2" name="division" id="customer_division" required="" onchange="changeDivision1()">
                                                            <option value="Dhaka" @isset($user->city){{$user->city == 'Dhaka' ? 'selected' : ''}}@endisset>Dhaka</option>
                                                            <option value="Chittagang" @isset($user->city){{$user->city == 'Chittagang' ? 'selected' : ''}}@endisset>Chittagang</option>
                                                            <option value="Khulna" @isset($user->city){{$user->city == 'Khulna' ? 'selected' : ''}}@endisset>Khulna</option>
                                                            <option value="Sylhet" @isset($user->city){{$user->city == 'Sylhet' ? 'selected' : ''}}@endisset>Sylhet</option>
                                                            <option value="Barisal" @isset($user->city){{$user->city == 'Barisal' ? 'selected' : ''}}@endisset>Barisal</option>
                                                            <option value="Rajshahi" @isset($user->city){{$user->city == 'Rajshahi' ? 'selected' : ''}}@endisset>Rajshahi</option>
                                                            <option value="Rangpur" @isset($user->city){{$user->city == 'Rangpur' ? 'selected' : ''}}@endisset>Rangpur</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>District</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-control mb-2" name="district" id="customer_district" required="">
                                                            <option class="dhaka" value="Dhaka">Dhaka</option>
                                                            <option class="dhaka" value="Faridpur">Faridpur</option>
                                                            <option class="dhaka" value="Gazipur">Gazipur</option>
                                                            <option class="dhaka" value="Gopalganj">Gopalganj</option>
                                                            <option class="dhaka" value="Jamalpur">Jamalpur</option>
                                                            <option class="dhaka" value="Kishoreganj">Kishoreganj</option>
                                                            <option class="dhaka" value="Madaripur">Madaripur</option>
                                                            <option class="dhaka" value="Manikganj">Manikganj</option>
                                                            <option class="dhaka" value="Munshiganj">Munshiganj</option>
                                                            <option class="dhaka" value="Mymensingh">Mymensingh</option>
                                                            <option class="dhaka" value="Narayanganj">Narayanganj</option>
                                                            <option class="dhaka" value="Narsingdi">Narsingdi</option>
                                                            <option class="dhaka" value="Netrokona">Netrokona</option>
                                                            <option class="dhaka" value="Rajbari">Rajbari</option>
                                                            <option class="dhaka" value="Shariatpur">Shariatpur</option>
                                                            <option class="dhaka" value="Sherpur">Sherpur</option>
                                                            <option class="dhaka" value="Tangail">Tangail</option>

                                                            <option class="chittagang" value="Bandarban">Bandarban</option>
                                                            <option class="chittagang" value="Brahmanbaria">Brahmanbaria</option>
                                                            <option class="chittagang" value="Chandpur">Chandpur</option>
                                                            <option class="chittagang" value="Chittagang">Chittagang</option>
                                                            <option class="chittagang" value="Comilla">Comilla</option>
                                                            <option class="chittagang" value="Cox's Bazar">Cox's Bazar</option>
                                                            <option class="chittagang" value="Feni">Feni</option>
                                                            <option class="chittagang" value="Khagrachhari">Khagrachhari</option>
                                                            <option class="chittagang" value="Lakshmipur">Lakshmipur</option>
                                                            <option class="chittagang" value="Noakhali">Noakhali</option>
                                                            <option class="chittagang" value="Rangamati">Rangamati</option>

                                                            <option class="khulna" value="Bagerhat">Bagerhat</option>
                                                            <option class="khulna" value="Chuadanga">Chuadanga</option>
                                                            <option class="khulna" value="jessore">jessore</option>
                                                            <option class="khulna" value="Jhenaidaha">Jhenaidaha</option>
                                                            <option class="khulna" value="Khulna">Khulna</option>
                                                            <option class="khulna" value="Kushtia">Kushtia</option>
                                                            <option class="khulna" value="Magura">Magura</option>
                                                            <option class="khulna" value="Meherpur">Meherpur</option>
                                                            <option class="khulna" value="Narail">Narail</option>
                                                            <option class="khulna" value="Satkhira">Satkhira</option>

                                                            <option class="sylhet" value="Habiganj">Habiganj</option>
                                                            <option class="sylhet" value="Maulvi Bazar">Maulvi Bazar</option>
                                                            <option class="sylhet" value="Sunamganj">Sunamganj</option>
                                                            <option class="sylhet" value="Sylhet">Sylhet</option>

                                                            <option class="barisal" value="Barguna">Barguna</option>
                                                            <option class="barisal" value="Barisal">Barisal</option>
                                                            <option class="barisal" value="Bhola">Bhola</option>
                                                            <option class="barisal" value="Jhalokati">Jhalokati</option>
                                                            <option class="barisal" value="Patuakhali">Patuakhali</option>
                                                            <option class="barisal" value="Pirojpur">Pirojpur</option>

                                                            <option class="rajshahi" value="Bogra">Bogra</option>
                                                            <option class="rajshahi" value="Bogra">Bogra</option>
                                                            <option class="rajshahi" value="Naogaon">Naogaon</option>
                                                            <option class="rajshahi" value="Natore">Natore</option>
                                                            <option class="rajshahi" value="Nawabganj">Nawabganj</option>
                                                            <option class="rajshahi" value="Pabna">Pabna</option>
                                                            <option class="rajshahi" value="Rajshahi">Rajshahi</option>
                                                            <option class="rajshahi" value="Sirajganj">Sirajganj</option>

                                                            <option class="rangpur" value="Dinajpur">Dinajpur</option>
                                                            <option class="rangpur" value="Gaibandha">Gaibandha</option>
                                                            <option class="rangpur" value="Kurigram">Kurigram</option>
                                                            <option class="rangpur" value="Lalmonirhat">Lalmonirhat</option>
                                                            <option class="rangpur" value="Nilphamari">Nilphamari</option>
                                                            <option class="rangpur" value="Panchagarh">Panchagarh</option>
                                                            <option class="rangpur" value="Rangpur">Rangpur</option>
                                                            <option class="rangpur" value="Thakurgaon">Thakurgaon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Address <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input class="form-control mb-2" placeholder="Your Address" id="customer_address" required />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Courier</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-control mb-2" name="courier" id="customer_courier">
                                                            <option value="">Select Prefered Courier</option>
                                                            <option value="CDS">CDS</option>
                                                            <option value="Pathao">Pathao</option>
                                                            <option value="Sundorbon">Sundorbon</option>
                                                            <option value="Jononi">Jononi</option>
                                                            <option value="Paperfly">Paperfly</option>
                                                            <option value="Karatoa">Karatoa</option>
                                                            <option value="Continental">Continental</option>
                                                            <option value="RedEx">RedEx</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="alert alert-primary">
                                                        <strong>Note:</strong> Circle Delivery Service (CDS) Only Applicable for Dhaka City
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Customer Phone <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-2" placeholder="01700000000" name="phone" id="customer_phone" required>
                                                    </div>
                                                </div>

                                                <!-- <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Shipping Charge</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control mb-2" placeholder="Customer Shipping Charge" id="customer_shipping_charge" required disabled>
                                                        </div>
                                                    </div> -->
                                                <div class="row">
                                                    <div class="alert alert-primary">
                                                        <strong>Note:</strong> Circle Delivery Charge Inside Dhaka Tk.70 &amp; Outside of Dhaka Tk.130
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Order Note</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input class="form-control mb-2" placeholder="Describe if you have any instruction" id="customer_order_note" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- ////////////////////////////////////////////modal starts -->

                        <!-- Modal -->
                        <div class="col-md-6 mb-3">
                            <label class="aiz-megabox d-block bg-white mb-0">
                                <input type="radio" name="address_id" value="20500" required="">
                                <span class="d-flex p-3 aiz-megabox-elem">
                                    <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                    <span class="flex-grow-1 pl-3 text-left">
                                        <div>
                                            <span class="opacity-60">Customer Name:</span>
                                            <input type="hidden" id="customer_name_input" value="@isset($user->name){{$user->name}}@endisset">
                                            <span class="fw-600 ml-2">@isset($user->name){{$user->name}}@endisset</span>
                                        </div>

                                        <div>
                                            <span class="opacity-60">Prefered Courier:</span>
                                            <span class="fw-600 ml-2">@isset($user->preferred_courier){{$user->preferred_courier}}@endisset</span>
                                        </div>

                                        <div>
                                            <span class="opacity-60">Customer Address:</span>
                                            <span class="fw-600 ml-2">@isset($user->address){{$user->address}}@endisset</span>
                                        </div>

                                        <div>
                                            <span class="opacity-60">District:</span>
                                            <span class="fw-600 ml-2">@isset($user->district){{$user->district}}@endisset</span>
                                        </div>

                                        <div>
                                            <span class="opacity-60">Division:</span>
                                            <span class="fw-600 ml-2">@isset($user->city){{$user->city}}@endisset</span>
                                        </div>

                                        <div>
                                            <span class="opacity-60">Customer Phone:</span>
                                            <span class="fw-600 ml-2">@isset($user->mobile){{$user->mobile}}@endisset</span>
                                        </div>
                                        <div>
                                            <span class="opacity-60">Delivery Charge:</span>
                                            <span class="fw-600 ml-2">@isset($user->shipping_charge){{$user->shipping_charge}}@endisset</span>
                                        </div>
                                        <div>
                                            <span class="opacity-60">Order Note:</span>
                                            <span class="fw-600 ml-2">@isset($user->order_note){{$user->order_note}}@endisset</span>
                                        </div>
                                    </span>
                                </span>
                            </label>
                            <div class="dropdown position-absolute right-0 top-0">
                                <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                                    <i class="la la-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" id="edit_address">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="checkout_type" value="logged">

                    </div>
                </div>
                <div class="card shadow-sm border-0 rounded">
                    <div class="card-header p-3">
                        <h3 class="fs-16 fw-600 mb-0">
                            Select payment status
                        </h3>
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-md-6 mx-auto mb-3">
                                <form id="checkout_payment_form">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Delivery Charge</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control mb-2" name="delivery_charge" id="delivery_charge">
                                            <option value="Due">Due</option>
                                            <option value="Paid">Paid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Order Charge</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control mb-2" name="order_charge" id="order_charge" onchange="oc(this.value)">
                                            <option value="Due">Due</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Partial">Partial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row paid_amount_row" style="display: block;">
                                    <div class="col-md-5">
                                        <label>Paid Amount</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control mb-2" name="paid_amount" id="paid_amount" min="0">
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="pt-3">
                    <label class="aiz-checkbox">
                        <input type="checkbox" required="" id="agree_checkbox" checked="">
                        <span class="aiz-square-check"></span>
                        <span>I agree to the</span>
                    </label>
                    <a href="https://circle.com.bd/terms">Terms and Conditions</a>,
                    <a href="https://circle.com.bd/returnpolicy">Return Policy</a> &amp;
                    <a href="https://circle.com.bd/privacypolicy">Privacy Policy</a>
                </div>
                <div class="row align-items-center container">
                    <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                        <a href="https://circle.com.bd" class="btn btn-link">
                            <i class="las la-arrow-left"></i>
                            Return to shop
                        </a>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <button onclick="javascript:$('#checkout_payment_form').submit();" class="btn btn-primary fw-600">Complete Order</button>
                        <!-- <button href="{{url('order-confirmed')}}" class="btn btn-primary fw-600">Complete Order</button> -->
                    </div>
                </div>
            </div>
            <input type="hidden" name="quantity_total" id="quantity_total">
        </div>
    </div>
    </div>
</section>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">New Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-default" role="form" id="address_edit_form">
                @csrf
                <div class="modal-body" id="edit_modal_body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Customer Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-2" value="@isset($user->name){{$user->name}}@endisset" placeholder="Your Name" name="name" id="customer_name_input" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Division</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control mb-2" name="city" id="city_input" required="" onchange="changeDivision()">
                                    <option value="Dhaka" @isset($user->city){{$user->city == 'Dhaka' ? 'selected' : ''}}@endisset>Dhaka</option>
                                    <option value="Chittagang" @isset($user->city){{$user->city == 'Chittagang' ? 'selected' : ''}}@endisset>Chittagang</option>
                                    <option value="Khulna" @isset($user->city){{$user->city == 'Khulna' ? 'selected' : ''}}@endisset>Khulna</option>
                                    <option value="Sylhet" @isset($user->city){{$user->city == 'Sylhet' ? 'selected' : ''}}@endisset>Sylhet</option>
                                    <option value="Barisal" @isset($user->city){{$user->city == 'Barisal' ? 'selected' : ''}}@endisset>Barisal</option>
                                    <option value="Rajshahi" @isset($user->city){{$user->city == 'Rajshahi' ? 'selected' : ''}}@endisset>Rajshahi</option>
                                    <option value="Rangpur" @isset($user->city){{$user->city == 'Rangpur' ? 'selected' : ''}}@endisset>Rangpur</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>District</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control mb-2" name="district" id="district_input" required="">
                                    <option class="dhaka" value="Dhaka">Dhaka</option>
                                    <option class="dhaka" value="Faridpur">Faridpur</option>
                                    <option class="dhaka" value="Gazipur">Gazipur</option>
                                    <option class="dhaka" value="Gopalganj">Gopalganj</option>
                                    <option class="dhaka" value="Jamalpur">Jamalpur</option>
                                    <option class="dhaka" value="Kishoreganj">Kishoreganj</option>
                                    <option class="dhaka" value="Madaripur">Madaripur</option>
                                    <option class="dhaka" value="Manikganj">Manikganj</option>
                                    <option class="dhaka" value="Munshiganj">Munshiganj</option>
                                    <option class="dhaka" value="Mymensingh">Mymensingh</option>
                                    <option class="dhaka" value="Narayanganj">Narayanganj</option>
                                    <option class="dhaka" value="Narsingdi">Narsingdi</option>
                                    <option class="dhaka" value="Netrokona">Netrokona</option>
                                    <option class="dhaka" value="Rajbari">Rajbari</option>
                                    <option class="dhaka" value="Shariatpur">Shariatpur</option>
                                    <option class="dhaka" value="Sherpur">Sherpur</option>
                                    <option class="dhaka" value="Tangail">Tangail</option>

                                    <option class="chittagang" value="Bandarban">Bandarban</option>
                                    <option class="chittagang" value="Brahmanbaria">Brahmanbaria</option>
                                    <option class="chittagang" value="Chandpur">Chandpur</option>
                                    <option class="chittagang" value="Chittagang">Chittagang</option>
                                    <option class="chittagang" value="Comilla">Comilla</option>
                                    <option class="chittagang" value="Cox's Bazar">Cox's Bazar</option>
                                    <option class="chittagang" value="Feni">Feni</option>
                                    <option class="chittagang" value="Khagrachhari">Khagrachhari</option>
                                    <option class="chittagang" value="Lakshmipur">Lakshmipur</option>
                                    <option class="chittagang" value="Noakhali">Noakhali</option>
                                    <option class="chittagang" value="Rangamati">Rangamati</option>

                                    <option class="khulna" value="Bagerhat">Bagerhat</option>
                                    <option class="khulna" value="Chuadanga">Chuadanga</option>
                                    <option class="khulna" value="jessore">jessore</option>
                                    <option class="khulna" value="Jhenaidaha">Jhenaidaha</option>
                                    <option class="khulna" value="Khulna">Khulna</option>
                                    <option class="khulna" value="Kushtia">Kushtia</option>
                                    <option class="khulna" value="Magura">Magura</option>
                                    <option class="khulna" value="Meherpur">Meherpur</option>
                                    <option class="khulna" value="Narail">Narail</option>
                                    <option class="khulna" value="Satkhira">Satkhira</option>

                                    <option class="sylhet" value="Habiganj">Habiganj</option>
                                    <option class="sylhet" value="Maulvi Bazar">Maulvi Bazar</option>
                                    <option class="sylhet" value="Sunamganj">Sunamganj</option>
                                    <option class="sylhet" value="Sylhet">Sylhet</option>

                                    <option class="barisal" value="Barguna">Barguna</option>
                                    <option class="barisal" value="Barisal">Barisal</option>
                                    <option class="barisal" value="Bhola">Bhola</option>
                                    <option class="barisal" value="Jhalokati">Jhalokati</option>
                                    <option class="barisal" value="Patuakhali">Patuakhali</option>
                                    <option class="barisal" value="Pirojpur">Pirojpur</option>

                                    <option class="rajshahi" value="Bogra">Bogra</option>
                                    <option class="rajshahi" value="Bogra">Bogra</option>
                                    <option class="rajshahi" value="Naogaon">Naogaon</option>
                                    <option class="rajshahi" value="Natore">Natore</option>
                                    <option class="rajshahi" value="Nawabganj">Nawabganj</option>
                                    <option class="rajshahi" value="Pabna">Pabna</option>
                                    <option class="rajshahi" value="Rajshahi">Rajshahi</option>
                                    <option class="rajshahi" value="Sirajganj">Sirajganj</option>

                                    <option class="rangpur" value="Dinajpur">Dinajpur</option>
                                    <option class="rangpur" value="Gaibandha">Gaibandha</option>
                                    <option class="rangpur" value="Kurigram">Kurigram</option>
                                    <option class="rangpur" value="Lalmonirhat">Lalmonirhat</option>
                                    <option class="rangpur" value="Nilphamari">Nilphamari</option>
                                    <option class="rangpur" value="Panchagarh">Panchagarh</option>
                                    <option class="rangpur" value="Rangpur">Rangpur</option>
                                    <option class="rangpur" value="Thakurgaon">Thakurgaon</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Address</label>
                            </div>
                            <div class="col-md-10">
                                <input type="hidden" name="user_id" id="user_id_input" value="@isset($user->id){{$user->id}}@endisset">
                                <input class="form-control mb-2" type="text" value="@isset($user->address){{$user->address}}@endisset" placeholder="Your Address" rows="2" name="address" id="address_input" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-2" value="@isset($user->mobile){{$user->mobile}}@endisset" placeholder="+880" name="phone" id="phone_input" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Courier</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control mb-2 aiz-selectpicker" data-live-search="true" id="courier_input">
                                    <option value="">Select Prefered Courier</option>
                                    @isset($user->preferred_courier)
                                    <option value="CDS" {{$user->preferred_courier == 'CDS' ? 'selected' : ''}}>CDS</option>
                                    <option value="Pathao" {{$user->preferred_courier == 'Pathao' ? 'selected' : ''}}>Pathao</option>
                                    <option value="Sundorbon" {{$user->preferred_courier == 'Sundorbon' ? 'selected' : ''}}>Sundorbon</option>
                                    <option value="Jononi" {{$user->preferred_courier == 'Jononi' ? 'selected' : ''}}>Jononi</option>
                                    <option value="Paperfly" {{$user->preferred_courier == 'Paperfly' ? 'selected' : ''}}>Paperfly</option>
                                    <option value="Karatoa" {{$user->preferred_courier == 'Karatoa' ? 'selected' : ''}}>Karatoa</option>
                                    <option value="Continental" {{$user->preferred_courier == 'Continental' ? 'selected' : ''}}>Continental</option>
                                    <option value="RedEx" {{$user->preferred_courier == 'RedEx' ? 'selected' : ''}}>RedEx</option>
                                    <option value="Others" {{$user->preferred_courier == 'Others' ? 'selected' : ''}}>Others</option>
                                    @endisset
                                </select>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-md-2">
                                <label>Shipping Charge</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-2" value="@isset($user->shipping_charge){{$user->shipping_charge}}@endisset" placeholder="Enter Shipping Charge Amount" name="shipping_charge" id="shipping_charge_input" required="" disabled>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-2">
                                <label>Order Note</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-2" value="@isset($user->order_note){{$user->order_note}}@endisset" placeholder="Enter Order Note" name="order_note" id="order_note_input" required="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <input type="hidden" name="user_id" id="user_id" value="@isset($user->id){{$user->id}}@endisset">

</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#edit_address').click(function(e) {
            $('#exampleModalCenter').modal('toggle');
        });
        $("#address_edit_form").submit(function(e) {
            e.preventDefault();
            let quantity_total = $('#quantity_total').val();
            let user_id = $('#user_id_input').val();
            let customer_name = $('#customer_name_input').val();
            let address = $('#address_input').val();
            let city = $('#city_input').val();
            let district = $('#district_input').val();
            let mobile = $('#phone_input').val();
            let preferred_courier = $('#courier_input').val();
            let order_note = $('#order_note_input').val();
            $.ajax({
                url: "{{ route('address.store') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    customer_name: customer_name,
                    address: address,
                    district: district,
                    city: city,
                    mobile: mobile,
                    preferred_courier: preferred_courier,
                    order_note: order_note,
                    quantity_total: quantity_total,
                },
                success: function(data) {
                    // console.log(data);
                    toastr.success(data.message, data.title);
                    setTimeout(function() {
                        location.reload();
                    }, 4000);
                },
            });
        });
        $("#new_address_form").submit(function(e) {
            e.preventDefault();
            let quantity_total = $('#quantity_total').val();
            let user_id = $('#customer_user_id').val();
            let customer_name = $('#customer_name_new').val();
            let address = $('#customer_address').val();
            let district = $('#customer_district').val();
            let division = $('#customer_division').val();
            let mobile = $('#customer_phone').val();
            let preferred_courier = $('#customer_courier').val();
            let order_note = $('#customer_order_note').val();
            $.ajax({
                url: "{{ route('newaddress.store') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    customer_name: customer_name,
                    address: address,
                    district: district,
                    division: division,
                    mobile: mobile,
                    preferred_courier: preferred_courier,
                    quantity_total: quantity_total,
                    order_note: order_note,
                },
                success: function(data) {
                    // console.log($data);
                    toastr.success(data.message, data.title);
                    setTimeout(function() {
                        location.reload();
                    }, 4000);
                },
            });
        });
        $("#checkout_payment_form").submit(function(e) {
            e.preventDefault();
            let delivery_charge = $('#delivery_charge').val();
            let order_charge = $('#order_charge').val();
            let paid_amount = $('#paid_amount').val();
                    $.ajax({
                        url:"{{ route('order.store') }}",
                        type:"POST",
                        data:{
                            "_token": "{{ csrf_token() }}",
                            delivery_charge:delivery_charge,
                            order_charge:order_charge,
                            paid_amount:paid_amount,
                        },
                        success:function(response)
                        {   
                            console.log(response);
                            if(response == 'success')
                            {   
                                setTimeout(function() {
                                    window.location.href = "{{ route('orderconfirm')}}";
                                }, 4000);
                            }
                            
                        },
                    });
        });
    });
    changeDivision();

    function changeDivision() {
        var division = $("#city_input").val();
        if (division == 'Dhaka') {
            $(".dhaka").show();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Chittagang') {
            $(".dhaka").hide();
            $(".chittagang").show();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Khulna') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").show();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Sylhet') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").show();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Barisal') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").show();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Rajshahi') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").show();
            $(".rangpur").hide();
        } else if (division == 'Rangpur') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").show();
        }
    }
    changeDivision1();

    function changeDivision1() {
        var division = $("#customer_division").val();
        if (division == 'Dhaka') {
            $(".dhaka").show();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Chittagang') {
            $(".dhaka").hide();
            $(".chittagang").show();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Khulna') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").show();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Sylhet') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").show();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Barisal') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").show();
            $(".rajshahi").hide();
            $(".rangpur").hide();
        } else if (division == 'Rajshahi') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").show();
            $(".rangpur").hide();
        } else if (division == 'Rangpur') {
            $(".dhaka").hide();
            $(".chittagang").hide();
            $(".khulna").hide();
            $(".sylhet").hide();
            $(".barisal").hide();
            $(".rajshahi").hide();
            $(".rangpur").show();
        }
    }
    oc();
    function oc() {
        var order_charge = $("#order_charge").val();
        if(order_charge == 'Partial'){
            $('.paid_amount_row').show();
        }else{
            $('.paid_amount_row').hide();
        }
    }
    $('#paid_amount').on('input', function () {
        var value = $(this).val();
        var max_value = $(this).attr('max');
        if ((value !== '') && (value.indexOf('.') === -1)) {
            $(this).val(Math.max(Math.min(value, max_value), 0));
        }
    });

</script>
@endsection