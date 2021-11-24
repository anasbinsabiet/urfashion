@extends('frontend.layouts.master')
@section('title','User Register')
@section('content')

<div id="indexc">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}" lang="en">Home</a></li>
            <li><a href="javascript:void(0);" lang="en">Register</a></li>
        </ul>
        <div class="errorMessage"></div>
        <div class="col-sm-12"><div class="row">
            <div class="userblock" style="position: relative;">
                <div class="userblock-title" lang="en">New Customers - Register Now</div>
                <label class="registernow" lang="en">Register now to get FREE samples, savings offers, catalogs and more!</label>
                <form name="register" id="register">
                            @csrf
                            <p lang="en">Create an account to order online, review order history, request samples and take advantage of many other features. It's quick and easy.<br></p>
                            <p class="logininfo" lang="en">Login Info&nbsp;:&nbsp;Please enter a username(your email address) and password</p>
                            <p class="star" lang="en">* Required Information.</p>
                            <div class="from_fieldBox">
                                <label lang="en">Email Address *</label>
                                <input type="text" name="email" id="email" aria-label="Email" required>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                            </div>
                            <div class="from_fieldBox">
                                <label lang="en">Mobile Number *</label>
                                <input type="text" name="mobile" id="mobile" aria-label="Mobile Number" required>
                            </div>
                            <div class="from_fieldBox">
                                <label lang="en">Password *</label>
                                <input type="password" name="password" autocomplete="off" disableautocomplete="" aria-label="Password" required>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                            </div>

                            <div class="from_fieldBox">
                                <label lang="en">Confirm Password *</label>
                                <input type="password" name="password_confirmation" autocomplete="off" disableautocomplete="" aria-label="Password" required>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                            </div>
                            <div class="emailadd">
                                <p lang="en">Your email address will serve as your user name on the Promo Direct website.</p>
                                <p lang="en">Please note, all Promo Direct correspondence will be sent to the same email address.</p>
                            </div>
                            <div class="from_fieldBox">
                                <label lang="en">Full Name</label>
                                <input type="text" name="name" aria-label="First Name">
                            </div>
                            <div class="from_fieldBox">
                                <label lang="en">Address</label>
                                <input type="text" name="address" aria-label="Enter Your Address">
                            </div>
                                    <div class="from_fieldBox">
                                        <label lang="en">Title</label>
                                        <select name="title"><option value="" lang="en">Please Select</option>
                                            <option value="Account Manager" lang="en">Account Manager</option><option value="Administrative Staff" lang="en">Administrative Staff</option><option value="Advertising" lang="en">Advertising</option><option value="Art Director" lang="en">Art Director</option><option value="Assistant" lang="en">Assistant</option><option value="Attorney" lang="en">Attorney</option><option value="Business Administrator" lang="en">Business Administrator</option><option value="Business Development" lang="en">Business Development</option><option value="Business Owner / Executive" lang="en">Business Owner / Executive</option><option value="Communications" lang="en">Communications</option><option value="Digital Specialist" lang="en">Digital Specialist</option><option value="Director of Operations" lang="en">Director of Operations</option><option value="Director of Sales" lang="en">Director of Sales</option><option value="Event / Meeting Planning" lang="en">Event / Meeting Planning</option><option value="Finance Manager" lang="en">Finance Manager</option><option value="Financial Analyst" lang="en">Financial Analyst</option><option value="Financial Services" lang="en">Financial Services</option><option value="General Manager" lang="en">General Manager</option><option value="Graphics / Design" lang="en">Graphics / Design</option><option value="Health &amp; Safety Manager" lang="en">Health &amp; Safety Manager</option><option value="Healthcare Administrator" lang="en">Healthcare Administrator</option><option value="Healthcare Executive" lang="en">Healthcare Executive</option><option value="Healthcare Worker" lang="en">Healthcare Worker</option><option value="Human Resources" lang="en">Human Resources</option><option value="Manager" lang="en">Manager</option><option value="Marketing Assistant" lang="en">Marketing Assistant</option><option value="Marketing Management" lang="en">Marketing Management</option><option value="Nurse" lang="en">Nurse</option><option value="Office Manager" lang="en">Office Manager</option><option value="Operations Assistant" lang="en">Operations Assistant</option><option value="Payroll Clerk" lang="en">Payroll Clerk</option><option value="Personal Use" lang="en">Personal Use</option><option value="Physician" lang="en">Physician</option><option value="Product Management" lang="en">Product Management</option><option value="Professional Services" lang="en">Professional Services</option><option value="Program Coordinator" lang="en">Program Coordinator</option><option value="Public Relations" lang="en">Public Relations</option><option value="Purchasing" lang="en">Purchasing</option><option value="Purchasing Assistant" lang="en">Purchasing Assistant</option><option value="Purchasing Manager" lang="en">Purchasing Manager</option><option value="Real Estate / Insurance" lang="en">Real Estate / Insurance</option><option value="Recruitment Coordinator" lang="en">Recruitment Coordinator</option><option value="Relations Director" lang="en">Relations Director</option><option value="Sales / Account Management" lang="en">Sales / Account Management</option><option value="Service Contractor / Subcontractor" lang="en">Service Contractor / Subcontractor</option><option value="Small Business Owner" lang="en">Small Business Owner</option><option value="Social Media" lang="en">Social Media</option><option value="Software IT Engineer" lang="en">Software IT Engineer</option><option value="Trade Show" lang="en">Trade Show</option><option value="Univ. Alumni Executive" lang="en">Univ. Alumni Executive</option><option value="Univ. Executive" lang="en">Univ. Executive</option><option value="University Administrator" lang="en">University Administrator</option><option value="Other" lang="en">Other</option></select>
                                        </div>
                                        <div class="from_fieldBox text-center">
                                            <!-- <a href="javascript:void(0);" onclick="checkEmail('suemail','SignupForm')" id="continuebtn" class="form_btn" lang="en">SIGN UP</a> -->
                                            <input type="submit" class="form_btn" value="SIGN UP" id="loginbtn">
                                        </div>
                                    </form>
                <div class="secureiconsBox" lang="en">
                    <img alt="secure icons" src="{{url('/staticfile/images/secureicons.png')}}" class="img-responsive">
                </div>
            </div>
        </div></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#register").submit(function (e) {
            e.preventDefault();
            let email = this.elements.email.value;
            let name = this.elements.name.value;
            let password = this.elements.password.value;
            let password_confirmation = this.elements.password_confirmation.value;
            let mobile = this.elements.mobile.value;
            let address = this.elements.address.value;
            let title = this.elements.title.value;

            $.ajax({
                url: '{{ route('user.store') }}',
                method: "post",
                data: {
                    _token: '{{ csrf_token() }}', 
                    email: email,
                    name: name,
                    password: password,
                    password_confirmation: password_confirmation,
                    mobile: mobile,
                    address: address,
                    title: title,
                },
                success: function (res) {
                    if (res) {
                        window.history.go(-1);
                    }
                }
            });
        });
    });
</script>
@endsection