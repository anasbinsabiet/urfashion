@extends('frontend.layouts.master')
@section('title','Login')
@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">Become A Reseller With Circle</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="https://circle.com.bd/shops/create">"Register As Reseller"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                <div id="field_error"></div>
                @if(!empty($errors))
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
                @endforeach
                @endif
                <form id="registration_form"  method="post" action="{{route('user.store')}}">
                    @csrf
                    <div class="bg-white rounded shadow-sm mb-3">
                        <div class="fs-15 fw-600 p-3 border-bottom">
                            Personal Information
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" value="" placeholder="Enter Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-primary">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number" name="mobile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Shop Name <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Shop Name" name="shop_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook Page Link</label>
                                        <input type="text" class="form-control" placeholder="Enter Facebook Page Link" name="facebook_page_link">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email <span class="text-primary">*</span></label>
                                        <input type="email" class="form-control" value="" placeholder="Enter Email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-primary">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password <span class="text-primary">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter Confirm Password" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Whatsapp Or Imo (Optional)</label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number" name="whatsapp_imo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control mb-3" placeholder="Address" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control mb-3" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fs-15 fw-600 p-3 border-bottom">
                            Mobile Banking Information
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bkash Number</label>
                                        <input type="number" class="form-control" placeholder="Enter Bkash Number" name="bkash">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nagad Number</label>
                                        <input type="number" class="form-control" placeholder="Enter Nagad Number" name="nagad">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-sm mb-4" id="info_field">
                        <div class="fs-15 fw-600 p-3 border-bottom">
                            Bank Account Information (Optional)
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Account Name</label>
                                        <input type="text" class="form-control" value="" placeholder="Enter Bank Account Name" name="bank_account_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Account Number</label>
                                        <input type="number" class="form-control" placeholder="Enter Bank Account Number" name="bank_account_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Name</label>
                                        <input type="text" class="form-control" value="" placeholder="Enter Bank Name" name="bank_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bank Branch Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Bank Branch Name" name="bank_branch_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Routing Number</label>
                                        <input type="text" class="form-control" value="" placeholder="Enter Routing Number" name="routing_number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right" id="reg_btn">
                        <button type="submit" class="btn btn-primary fw-600">Register As Reseller</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#registration_form").submit(function(e) {
            e.preventDefault();
            let name = this.elements.name.value;
            let mobile = this.elements.mobile.value;
            let shop_name = this.elements.shop_name.value;
            let facebook_page_link = this.elements.facebook_page_link.value;
            let email = this.elements.email.value;
            let password = this.elements.password.value;
            let password_confirmation = this.elements.password_confirmation.value;
            let whatsapp_imo = this.elements.whatsapp_imo.value;
            let address = this.elements.address.value;
            let gender = this.elements.gender.value;
            let bkash = this.elements.bkash.value;
            let nagad = this.elements.nagad.value;
            let bank_account_name = this.elements.bank_account_name.value;
            let bank_account_number = this.elements.bank_account_number.value;
            let bank_name = this.elements.bank_name.value;
            let bank_branch_name = this.elements.bank_branch_name.value;
            let routing_number = this.elements.routing_number.value;
            let routing_number = this.elements.routing_number.value;

            $.ajax({
                url: '{{route('user.store')}}',
                method: "post",
                data: {
                    _token: '{{ csrf_token() }}',
                    name: name,
                    mobile: mobile,
                    shop_name: shop_name,
                    facebook_page_link: facebook_page_link,
                    email: email,
                    password: password,
                    password_confirmation: password_confirmation,
                    whatsapp_imo: whatsapp_imo,
                    address: address,
                    gender: gender,
                    bkash: bkash,
                    nagad: nagad,
                    bank_account_name: bank_account_name,
                    bank_account_number: bank_account_number,
                    bank_name: bank_name,
                    bank_branch_name: bank_branch_name,
                    routing_number: routing_number,
                },
                success: function(data) {
                    toastr.success(data.message, data.title);
                    setTimeout(function(){
                        window.location = '{{ route('myaccount') }}';
                    },4000);
                },
                error: function(xhr, status, error) {
                    $.each(xhr.responseJSON.errors, function(key, item) {
                        $("#field_error").append("<p class='alert alert-danger'>" + item + "</p>")
                        alert(item);
                    });
                }
            });
        });
    });
</script> -->
@endsection