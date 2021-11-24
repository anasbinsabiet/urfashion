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
                <form id="registration_form">
                    @csrf
                    <div class="bg-white rounded shadow-sm mb-3">
                        <h1 class="fs-15 fw-600 p-3 border-bottom" id="form_title">
                            Step 1 - Phone Number Verification
                        </h1>
                        <div class="p-3">
                            <!-- //////////////////////////////////////////////////////////////////otp -->
                            <div class="form-group">
                                <label for="phone_no">Phone Number (+88017xxxxxxxx) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone_no" id="number" placeholder="(Code) *******" value="+8801" min="13" max="14" required>
                            </div>
                            <div id="recaptcha-container"></div>
                            <a href="javascript:;" id="getcode" class="btn btn-dark btn-sm">Get Code</a>
                            <div class="form-group mt-4" id="code_input_field" style="display: none;">
                                <input type="text" name="" id="codeToVerify" name="getcode" class="form-control" placeholder="Enter Code">
                            </div>
                            <a href="javascript:;" class="btn btn-dark btn-sm btn-block" id="verifPhNum" style="display: none;">Verify Phone No</a>
                            <!-- //////////////////////////////////////////////////////////////////otp -->
                            <div class="form-group" id="name_field" style="display: none;">
                                <label>Your name</label>
                                <input type="text" class="form-control" value="" placeholder="Name" name="name">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                            </div>
                            <div class="form-group" id="email_field" style="display: none;">
                                <label>Your Email</label>
                                <input type="email" class="form-control" value="" placeholder="Email" name="email">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                            </div>
                            <div class="form-group" id="bkash_field" style="display: none;">
                                <label>bKash Phone Number</label>
                                <input type="number" class="form-control" placeholder="bKash Phone Number" name="bkash" required="">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('bkash'))?($errors->first('bkash')):''}}</div>
                            </div>
                            <div class="form-group" id="password_field" style="display: none;">
                                <label>Your Login Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="password" name="password" required>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                            </div>
                            <div class="form-group" id="cp_field" style="display: none;">
                                <label>Confirm Login Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-sm mb-4" id="info_field" style="display: none;">
                        <div class="fs-15 fw-600 p-3 border-bottom">
                            Shop / Facebook Page Info
                        </div>
                        <div class="p-3">
                            <div class="form-group">
                                <label>Shop / Facebook Page Name</label>
                                <input type="text" class="form-control" placeholder="Shop / Facebook Page Name" name="shop_name" required="">
                            </div>
                            <div class="form-group">
                                <label>Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-3" placeholder="Address" name="address" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-right" id="reg_btn" style="display: none;">
                        <button type="submit" class="btn btn-primary fw-600">Register As Reseller</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.0.1/firebase.js" type="text/javascript"></script>
<!-- <script src="{{ asset('statisfile/js/firebase.js') }}" type="text/javascript"></script> -->
<script type="text/javascript">
    // $(document).ready(function() {
    //     $('#verifPhNum').on('click', function() {
    //         $('#getcode, #code_input_field, #verifPhNum').hide();
    //         $('#form_title').text('Step 2 - Personal Information');
    //         $('#number').attr('disabled','disabled');
    //         $('#name_field, #email_field, #bkash_field, #password_field, #cp_field, #info_field, #reg_btn').show();
    //     });
    // });
    //////////////////////////////////////////////////////////////Firebase.js file starts
    $(document).ready(function() {
        //     // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBhNuFgtYGNogSzll1BDWJdfEyVm92qe_Q",
            authDomain: "multivendor-1.firebaseapp.com",
            projectId: "multivendor-1",
            storageBucket: "multivendor-1.appspot.com",
            messagingSenderId: "734608765947",
            appId: "1:734608765947:web:00a6fda2f235799d4d915e",
            measurementId: "G-DPGNQLZ1S1"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
            'size': 'invisible',
            'callback': function(response) {
                // reCAPTCHA solved, allow signInWithPhoneNumber.
                console.log('recaptcha resolved');
            }
        });
        onSignInSubmit();
    });

    function onSignInSubmit() {
        $('#verifPhNum').on('click', function() {
            let phoneNo = '';
            var code = $('#codeToVerify').val();
            console.log(code);
            $(this).attr('disabled', 'disabled');
            $(this).text('Processing..');
            confirmationResult.confirm(code).then(function(result) {
                // alert('Succecss');
                var user = result.user;
                console.log(user);

                $('#getcode, #code_input_field, #verifPhNum').hide();
                $('#form_title').text('Step 2 - Personal Information');
                $('#number').attr('disabled', 'disabled');
                $('#name_field, #email_field, #bkash_field, #password_field, #cp_field, #info_field, #reg_btn').show();
                // ...
            }.bind($(this))).catch(function(error) {
                // User couldn't sign in (bad verification code?)
                // ...
                $(this).removeAttr('disabled');
                $(this).text('Invalid Code');
                setTimeout(() => {
                    $(this).text('Verify Phone No');
                }, 2000);
            }.bind($(this)));
        });


        $('#getcode').on('click', function() {
            var phoneNo = $('#number').val();
            console.log(phoneNo);
            if (phoneNo.length > 12) {
                $.ajax({
                    url: '{{route('user.validate')}}',
                    method: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        phoneNo: phoneNo,
                    },
                    success: function(data) {
                        if (data == 'success') {
                            $('#code_input_field, #verifPhNum').show();
                            $('.alert-danger').hide();
                            // getCode(phoneNo);
                            var appVerifier = window.recaptchaVerifier;
                            firebase.auth().signInWithPhoneNumber(phoneNo, appVerifier)
                                .then(function(confirmationResult) {
                                    window.confirmationResult = confirmationResult;
                                    coderesult = confirmationResult;
                                    console.log(coderesult);
                                }).catch(function(error) {
                                    console.log(error.message);
                                });
                        }
                    },
                    error: function(xhr, status, error) {
                        $.each(xhr.responseJSON.errors, function(key, item) {
                            $("#field_error").append("<p class='alert alert-danger'>" + item + "</p>")
                            alert(item);
                        });
                    }
                });
            } else if (phoneNo.length == 11) {
                alert('Enter Country Code Like +88 Before Your Number!');
            } else {
                alert('Please Enter Your 11 Digit Number with Country Code!');
            }
        });
    }



    function getCode(phoneNumber) {
        var appVerifier = window.recaptchaVerifier;
        firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
            .then(function(confirmationResult) {
                console.log(confirmationResult);
                // SMS sent. Prompt user to type the code from the message, then sign the
                // user in with confirmationResult.confirm(code).
                window.confirmationResult = confirmationResult;
                $('#getcode').removeAttr('disabled');
                $('#getcode').text('RESEND');
            }).catch(function(error) {

                console.log(error);
                console.log(error.code);
                // Error; SMS not sent
                // ...
            });
    }
    //////////////////////////////////////////////////////////////Firebase.js file ends
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#registration_form").submit(function(e) {
            e.preventDefault();
            let mobile = this.elements.phone_no.value;
            let name = this.elements.name.value;
            let email = this.elements.email.value;
            let password = this.elements.password.value;
            let password_confirmation = this.elements.password_confirmation.value;
            let address = this.elements.address.value;
            let bkash = this.elements.bkash.value;
            let shop_name = this.elements.shop_name.value;

            $.ajax({
                url: '{{route('user.store')}}',
                method: "post",
                data: {
                    _token: '{{ csrf_token() }}',
                    mobile: mobile,
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: password_confirmation,
                    address: address,
                    bkash: bkash,
                    shop_name: shop_name,
                },
                success: function(data) {
                    window.history.go(-1);
                    // alert("Success");
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
</script>
@endsection