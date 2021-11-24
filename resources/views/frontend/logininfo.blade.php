@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div class="myaccount">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li><a href="{{url('/')}}" lang="en">Home</a></li>
					<li><a href="{{url('/myaccount')}}" lang="en">My Account</a></li>
					<li><a href="javascript:void(0);" lang="en">Login Information</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="loginPage">
					<h1 lang="en">Login Information</h1>
					<div class="contactInfo" lang="en">
						@isset($user->name)<strong>Name: </strong>{{$user->name}}<br>@endisset
						@isset($user->mobile)<strong>Mobile: </strong>{{$user->mobile}}<br>@endisset
						@isset($user->email)<strong>Email: </strong>{{$user->email}}<br>@endisset
						@isset($user->address)<strong>Address: </strong>{{$user->address}}<br>@endisset
						<p class="loginbtnBox">
							<a href="javascript:$('#editaddress').show();" lang="en">EDIT LOGIN</a>
							<a href="javascript:showAddressBox('changePassword');" lang="en">CHANGE PASSWORD</a>
						</p>
					</div>
					<div class="addressBox" id="changePassword" style="display: none;">
						<form id="update_password">
							<input type="hidden" id="password" value="409509shipra" name="password">
							<img src="{{url('/staticfile/images/x1.png')}}" alt="close" onclick="hideAddressBox('changePassword')">
							<p class="form_redtoptitle" lang="en">Change Password</p>
							<div class="from_fieldBox">
								<label lang="en">Old Password*</label>
								<input type="password" name="oldPassword" id="oldPassword" maxlength="100" size="35" autocomplete="off" disableautocomplete="" aria-label="Old Password">
							</div>
							<div class="from_fieldBox">
								<label lang="en">New Password*</label>
								<input type="password" name="newPassword" id="newPassword" maxlength="100" size="35" autocomplete="off" disableautocomplete="" aria-label="New Password">
							</div>
							<div class="from_fieldBox">
								<label lang="en">Confirm Password*</label>
								<input type="password" name="newPassword2" id="newPassword2" maxlength="100" size="35" autocomplete="off" disableautocomplete="" aria-label="Confirm Password">
							</div>
							<div class="from_fieldBox btnBox">
								<span lang="en">*&nbsp;Required information</span>
								<a href="javascript:$('#update_password').submit()" class="form_btn" lang="en">Update</a>
							</div>
						</form>
					</div>
					<div class="addressBox" id="editaddress" style="display: none;">
						<form id="addressform">
							<img src="{{url('/staticfile/images/x1.png')}}" alt="close" onclick="javascript:$('#editaddress').hide();">
							<p class="form_redtoptitle" lang="en">Edit Login</p>
							<div class="from_fieldBox">
								<label lang="en">Full Name</label>
								<input type="text" name="name" value="@isset($user->name){{$user->name}}@endisset" id="firstName" maxlength="100" size="35" aria-label="First Name">
							</div>
							<div class="from_fieldBox">
								<label lang="en">Mobile*</label>
								<input type="text" name="mobile" value="@isset($user->mobile){{$user->mobile}}@endisset" id="mobile" maxlength="100" size="35" aria-label="Mobile" required>
							</div>
							<div class="from_fieldBox">
								<label lang="en">Email*</label>
								<input type="text" name="email" value="@isset($user->email){{$user->email}}@endisset" id="email" maxlength="100" size="35" aria-label="Email" required>
							</div>
							<div class="from_fieldBox">
								<label lang="en">Address</label>
								<input type="text" name="address" value="@isset($user->address){{$user->address}}@endisset" id="address" maxlength="100" size="35" aria-label="address">
							</div>
							<div class="from_fieldBox btnBox">
								<span lang="en">*&nbsp;Required information</span>
								<a href="javascript:$('#addressform').submit();" class="form_btn" lang="en">Update</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
        $("#update_password").submit(function (e) {
            e.preventDefault();
            let current_password = this.elements.oldPassword.value;
            let new_password = this.elements.newPassword.value;
            let password_confirmation = this.elements.newPassword2.value;
            $.ajax({
                url:"{{ route('user.update.password') }}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    current_password : current_password,
                    new_password : new_password,
                    password_confirmation : password_confirmation,
                },
                success:function(response)
                {	
					$('#update_password')[0].reset();
                    alert(response);	
                },
            });
        });
    });
</script>
@endsection