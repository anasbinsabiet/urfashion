@extends('frontend.layouts.master')
@section('title','Order Details')
@section('content')
<div class="myaccount">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				 <ul class="breadcrumb">
	             	<li><a href="{{url('/')}}" lang="en">Home</a></li>
	             	<li><a href="{{url('/myaccount')}}" lang="en">My Account</a></li>
	             	<li><a href="javascript:void(0);" lang="en">Contact Information</a></li>
	             </ul>
			 </div>      
		</div>
	</div>	
	<div class="container">
		<div class="col-sm-12"><div class="row">
			<div class="addressPage">
				<h1 lang="en">Contact Information</h1>
				<div class="addressoption">
					<!-- <p lang="en"></p> -->
					<div class="contactInfo">
						<table width="100%"><tbody><tr>
							<td valign="top" lang="en">
								@isset($user->name)
                                    {{$user->name}}<br>
                                @endisset 
                                @isset($user->mobile)
                                    {{$user->mobile}}<br>
                                @endisset 
                                @isset($user->address)
                                    {{$user->address}}<br>
                                @endisset
								
							</td>
							<td width="90" valign="middle">
								<div class="addressbut">
									<a href="javascript:showAddressBox('editContact')" lang="en">EDIT</a>
								</div>
							</td>
						</tr></tbody></table>
					</div>
					<div class="addressBox" id="editContact" style="display: none;">
						<form action="#" method="post" id="ContactForm" lang="en">
							<img src="{{url('/staticfile/images/x1.png')}}" alt="close" onclick="hideAddressBox('editContact')">
							<p class="form_redtoptitle" lang="en">Edit Contact Information</p>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="name" value="@isset($user->name){{$user->name}}@endisset" placeholder="First Name*" aria-label="Full Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="mobile" value="@isset($user->mobile){{$user->mobile}}@endisset" placeholder="Work Phone" aria-label="Work Phone">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="email" value="@isset($user->email){{$user->email}}@endisset" placeholder="Email Address*" aria-label="Email Address">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="address" value="@isset($user->address){{$user->address}}@endisset" placeholder="Address*" aria-label="Address">
							</div>
							<div class="from_fieldBox btnBox">
								<span lang="en">*&nbsp;Required information</span>
								<a href="javascript:void(0)" id="editContactbtn" class="form_btn" lang="en">Update</a>
							</div>
						</form>
					</div>
				</div>
				<!-- <div class="addressoption">
					<p lang="en">Mailing Address
					
					</p>
					
						<input type="hidden" value="Md Anisur" id="m_firstName">
						<input type="hidden" value="Rahaman" id="m_lastName">
						<input type="hidden" value="Biplob Digital" id="m_company">
						<input type="hidden" value="Tejkunipara" id="m_address">
						<input type="hidden" value="Farmgate" id="m_address2">
						<input type="hidden" value="Dhaka" id="m_city">
						<input type="hidden" value="IL" id="m_state">
						<input type="hidden" value="12151" id="m_postalCode">
						<input type="hidden" value="01793478194" id="m_telephone">
						<div class="contactInfo">
							<table width="100%"><tbody><tr>
								<td valign="top" lang="en">
									Md Anisur Rahaman<br>
									
										Biplob Digital<br>
									
									
										
											Tejkunipara
										
										
											, Farmgate
										<br>
									
									
										Dhaka IL 12151<br>
									
									
										01793478194
									
								</td>
								<td width="90" valign="middle">
									<div class="addressbut">
										<a href="javascript:showAddressBox('editMailingAddress')" lang="en">EDIT</a>
									</div>
								</td>
							</tr></tbody></table>
						</div>
						
						<div class="addressBox" id="editMailingAddress" style="display: none;">
							<form action="" method="post" id="editMailingAddressForm" lang="en">
								<input type="hidden" name="addressId" value="651069">
								<input type="hidden" name="type" value="3">
								<input type="hidden" name="typeId" value="0">
								<img src="/staticfile/images/x.png" alt="close" onclick="hideAddressBox('editMailingAddress')">
								<p class="form_redtoptitle" lang="en">Edit Mailing Address</p>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="firstName" value="Md Anisur" placeholder="First Name" aria-label="First Name">
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="lastName" value="Rahaman" placeholder="Last Name" aria-label="Last Name">
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="company" value="Biplob Digital" placeholder="Company Name" aria-label="Company Name">
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="address" value="Tejkunipara" placeholder="Mailing Address 1*" aria-label="Mailing Address 1">
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="address2" value="Farmgate" placeholder="Mailing Address 2" aria-label="Mailing Address 2">
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="city" value="Dhaka" placeholder="City*" aria-label="city">
								</div>
								<div class="from_fieldBox">
									<select name="state" aria-label="state">
										<option value="" lang="en">State*</option>
										
											
											<option value="AK" lang="en">
												Alaska
											</option>
										
											
											<option value="AL" lang="en">
												Alabama
											</option>
										
											
											<option value="AR" lang="en">
												Arkansas
											</option>
										
											
											<option value="AZ" lang="en">
												Arizona
											</option>
										
											
											<option value="CA" lang="en">
												California
											</option>
										
											
											<option value="CO" lang="en">
												Colorado
											</option>
										
											
											<option value="CT" lang="en">
												Connecticut
											</option>
										
											
											<option value="DC" lang="en">
												District of Columbia
											</option>
										
											
											<option value="DE" lang="en">
												Delaware
											</option>
										
											
											<option value="FL" lang="en">
												Florida
											</option>
										
											
											<option value="GA" lang="en">
												Georgia
											</option>
										
											
											<option value="HI" lang="en">
												Hawaii
											</option>
										
											
											<option value="IA" lang="en">
												Iowa
											</option>
										
											
											<option value="ID" lang="en">
												Idaho
											</option>
										
											
											<option value="IL" selected="selected" lang="en">
												Illinois
											</option>
										
											
											<option value="IN" lang="en">
												Indiana
											</option>
										
											
											<option value="KS" lang="en">
												Kansas
											</option>
										
											
											<option value="KY" lang="en">
												Kentucky
											</option>
										
											
											<option value="LA" lang="en">
												Louisiana
											</option>
										
											
											<option value="MA" lang="en">
												Massachusetts
											</option>
										
											
											<option value="MD" lang="en">
												Maryland
											</option>
										
											
											<option value="ME" lang="en">
												Maine
											</option>
										
											
											<option value="MI" lang="en">
												Michigan
											</option>
										
											
											<option value="MN" lang="en">
												Minnesota
											</option>
										
											
											<option value="MO" lang="en">
												Missouri
											</option>
										
											
											<option value="MS" lang="en">
												Mississippi
											</option>
										
											
											<option value="MT" lang="en">
												Montana
											</option>
										
											
											<option value="NC" lang="en">
												North Carolina
											</option>
										
											
											<option value="ND" lang="en">
												North Dakota
											</option>
										
											
											<option value="NE" lang="en">
												Nebraska
											</option>
										
											
											<option value="NH" lang="en">
												New Hampshire
											</option>
										
											
											<option value="NJ" lang="en">
												New Jersey
											</option>
										
											
											<option value="NM" lang="en">
												New Mexico
											</option>
										
											
											<option value="NV" lang="en">
												Nevada
											</option>
										
											
											<option value="NY" lang="en">
												New York
											</option>
										
											
											<option value="OH" lang="en">
												Ohio
											</option>
										
											
											<option value="OK" lang="en">
												Oklahoma
											</option>
										
											
											<option value="OR" lang="en">
												Oregon
											</option>
										
											
											<option value="PA" lang="en">
												Pennsylvania
											</option>
										
											
											<option value="RI" lang="en">
												Rhode Island
											</option>
										
											
											<option value="SC" lang="en">
												South Carolina
											</option>
										
											
											<option value="SD" lang="en">
												South Dakota
											</option>
										
											
											<option value="TN" lang="en">
												Tennessee
											</option>
										
											
											<option value="TX" lang="en">
												Texas
											</option>
										
											
											<option value="UT" lang="en">
												Utah
											</option>
										
											
											<option value="VA" lang="en">
												Virginia
											</option>
										
											
											<option value="VT" lang="en">
												Vermont
											</option>
										
											
											<option value="WA" lang="en">
												Washington
											</option>
										
											
											<option value="WI" lang="en">
												Wisconsin
											</option>
										
											
											<option value="WV" lang="en">
												West Virginia
											</option>
										
											
											<option value="WY" lang="en">
												Wyoming
											</option>
										
									</select>
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="postalCode" value="12151" placeholder="Zip Code*" aria-label="Zip Code">
								</div>
								<div class="from_fieldBox" lang="en">
									<input type="text" name="telephone" value="01793478194" placeholder="Phone Number" aria-label="Phone Number">
								</div>
								<div class="from_fieldBox btnBox">
									<span lang="en">*&nbsp;Required information</span>
									<a href="javascript:editAddress('editMailingAddressForm')" class="form_btn" lang="en">Update</a>
									<input type="checkbox" name="asDefault" class="check" checked="checked" disabled="disabled" aria-label="Set this as my default Mailing Address">
									<span lang="en">Set this as my default Mailing Address</span>
								</div>
							</form>
						</div>
					
					
				</div>
				<div class="addressoption">
					
						
							
							<p>
								<font color="red" lang="en">Billing Address 1</font>
								
									<a href="javascript:showAddressBox('addBillingAddress')" class="addAddressLink" lang="en">+Add New Billing Address</a>
								
							</p>
							<div class="contactInfo">
								<table width="100%"><tbody><tr>
									<td valign="top" lang="en">
										Md Anisur Rahaman<br>
										
											Biplob Digital<br>
										
										
											
												Tejkunipara
											
											
												, Farmgate
											<br>
										
										
											Dhaka IL 12151<br>
										
										
											01793478194
										
									</td>
									<td width="90" valign="middle">
										<div class="addressbut">
											<a href="javascript:showAddressBox('editBillingAddress1')" lang="en">EDIT</a>
											<a href="javascript:delAddr('651068')" style="margin-top: 10px" lang="en">DELETE</a>
										</div>
									</td>
								</tr></tbody></table>
							</div>
							<div class="addressBox" id="editBillingAddress1" style="display: none;">
								<form action="" method="post" id="editBillingAddressFrom1" lang="en">
									<input type="hidden" name="addressId" value="651068">
									<input type="hidden" name="type" value="1">
									<input type="hidden" name="typeId" value="0">
									<img src="/staticfile/images/x.png" alt="close" onclick="hideAddressBox('editBillingAddress1')">
									<p class="form_redtoptitle" lang="en">Edit Billing Address 1</p>
									
										<div class="from_fieldBox sama">
											<a href="javascript:sameAddress('editBillingAddress1')" class="sameAddressBtn" id="sameAddressBtn" lang="en">Same as Mailing Address</a>
										</div>
									
									<div class="from_fieldBox" lang="en">
										<input type="text" name="firstName" value="Md Anisur" placeholder="First Name" aria-label="First Name">
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="lastName" value="Rahaman" placeholder="Last Name" aria-label="Last Name">
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="company" value="Biplob Digital" placeholder="Company Name" aria-label="Company Name">
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="address" value="Tejkunipara" placeholder="Billing Address 1*" aria-label="Billing Address 1">
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="address2" value="Farmgate" placeholder="Billing Address 2" aria-label="Billing Address 2">
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="city" value="Dhaka" placeholder="City*" aria-label="city">
									</div>
									<div class="from_fieldBox">
										<select name="state" aria-label="state">
											<option value="" lang="en">State*</option>
											
												
												<option value="AK" lang="en">
													Alaska
												</option>
											
												
												<option value="AL" lang="en">
													Alabama
												</option>
											
												
												<option value="AR" lang="en">
													Arkansas
												</option>
											
												
												<option value="AZ" lang="en">
													Arizona
												</option>
											
												
												<option value="CA" lang="en">
													California
												</option>
											
												
												<option value="CO" lang="en">
													Colorado
												</option>
											
												
												<option value="CT" lang="en">
													Connecticut
												</option>
											
												
												<option value="DC" lang="en">
													District of Columbia
												</option>
											
												
												<option value="DE" lang="en">
													Delaware
												</option>
											
												
												<option value="FL" lang="en">
													Florida
												</option>
											
												
												<option value="GA" lang="en">
													Georgia
												</option>
											
												
												<option value="HI" lang="en">
													Hawaii
												</option>
											
												
												<option value="IA" lang="en">
													Iowa
												</option>
											
												
												<option value="ID" lang="en">
													Idaho
												</option>
											
												
												<option value="IL" selected="selected" lang="en">
													Illinois
												</option>
											
												
												<option value="IN" lang="en">
													Indiana
												</option>
											
												
												<option value="KS" lang="en">
													Kansas
												</option>
											
												
												<option value="KY" lang="en">
													Kentucky
												</option>
											
												
												<option value="LA" lang="en">
													Louisiana
												</option>
											
												
												<option value="MA" lang="en">
													Massachusetts
												</option>
											
												
												<option value="MD" lang="en">
													Maryland
												</option>
											
												
												<option value="ME" lang="en">
													Maine
												</option>
											
												
												<option value="MI" lang="en">
													Michigan
												</option>
											
												
												<option value="MN" lang="en">
													Minnesota
												</option>
											
												
												<option value="MO" lang="en">
													Missouri
												</option>
											
												
												<option value="MS" lang="en">
													Mississippi
												</option>
											
												
												<option value="MT" lang="en">
													Montana
												</option>
											
												
												<option value="NC" lang="en">
													North Carolina
												</option>
											
												
												<option value="ND" lang="en">
													North Dakota
												</option>
											
												
												<option value="NE" lang="en">
													Nebraska
												</option>
											
												
												<option value="NH" lang="en">
													New Hampshire
												</option>
											
												
												<option value="NJ" lang="en">
													New Jersey
												</option>
											
												
												<option value="NM" lang="en">
													New Mexico
												</option>
											
												
												<option value="NV" lang="en">
													Nevada
												</option>
											
												
												<option value="NY" lang="en">
													New York
												</option>
											
												
												<option value="OH" lang="en">
													Ohio
												</option>
											
												
												<option value="OK" lang="en">
													Oklahoma
												</option>
											
												
												<option value="OR" lang="en">
													Oregon
												</option>
											
												
												<option value="PA" lang="en">
													Pennsylvania
												</option>
											
												
												<option value="RI" lang="en">
													Rhode Island
												</option>
											
												
												<option value="SC" lang="en">
													South Carolina
												</option>
											
												
												<option value="SD" lang="en">
													South Dakota
												</option>
											
												
												<option value="TN" lang="en">
													Tennessee
												</option>
											
												
												<option value="TX" lang="en">
													Texas
												</option>
											
												
												<option value="UT" lang="en">
													Utah
												</option>
											
												
												<option value="VA" lang="en">
													Virginia
												</option>
											
												
												<option value="VT" lang="en">
													Vermont
												</option>
											
												
												<option value="WA" lang="en">
													Washington
												</option>
											
												
												<option value="WI" lang="en">
													Wisconsin
												</option>
											
												
												<option value="WV" lang="en">
													West Virginia
												</option>
											
												
												<option value="WY" lang="en">
													Wyoming
												</option>
											
										</select>
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="postalCode" value="12151" placeholder="Zip Code*" aria-label="Zip Code">
									</div>
									<div class="from_fieldBox" lang="en">
										<input type="text" name="telephone" value="01793478194" placeholder="Phone Number" aria-label="Phone Number">
									</div>
									<div class="from_fieldBox btnBox">
										<span lang="en">*&nbsp;Required information</span>
										<a href="javascript:editAddress('editBillingAddressFrom1')" class="form_btn" lang="en">Update</a>
										<input type="checkbox" name="asDefault" class="check" checked="checked" aria-label="Set this as my default Billing Address">
										<span lang="en">Set this as my default Billing Address</span>
									</div>
								</form>
							</div>
						
					
					<div class="addressBox" id="addBillingAddress" style="display: none;">
						<form action="" method="post" id="addBillingAddressForm" lang="en">
							<input type="hidden" name="type" value="1">
							<img src="/staticfile/images/x.png" alt="close" onclick="hideAddressBox('addBillingAddress')">
							<p class="form_redtoptitle" lang="en">Add New Billing Address</p>
							<input type="hidden" name="typeId" value="0">
							
								<div class="from_fieldBox sama">
									<a href="javascript:sameAddress('addBillingAddress')" class="sameAddressBtn" id="sameAddressBtn" lang="en">Same as Mailing Address</a>
								</div>
							
							<div class="from_fieldBox" lang="en">
								<input type="text" name="firstName" placeholder="First Name" aria-label="First Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="lastName" placeholder="Last Name" aria-label="Last Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="company" placeholder="Company Name" aria-label="Company Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="address" placeholder="Billing Address 1*" aria-label="Billing Address 1">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="address2" placeholder="Billing Address 2" aria-label="Billing Address 2">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="city" placeholder="City*" aria-label="city">
							</div>
							<div class="from_fieldBox">
								<select name="state" aria-label="state">
									<option value="" lang="en">State*</option>
									
										<option value="AK" lang="en">
											Alaska
										</option>
									
										<option value="AL" lang="en">
											Alabama
										</option>
									
										<option value="AR" lang="en">
											Arkansas
										</option>
									
										<option value="AZ" lang="en">
											Arizona
										</option>
									
										<option value="CA" lang="en">
											California
										</option>
									
										<option value="CO" lang="en">
											Colorado
										</option>
									
										<option value="CT" lang="en">
											Connecticut
										</option>
									
										<option value="DC" lang="en">
											District of Columbia
										</option>
									
										<option value="DE" lang="en">
											Delaware
										</option>
									
										<option value="FL" lang="en">
											Florida
										</option>
									
										<option value="GA" lang="en">
											Georgia
										</option>
									
										<option value="HI" lang="en">
											Hawaii
										</option>
									
										<option value="IA" lang="en">
											Iowa
										</option>
									
										<option value="ID" lang="en">
											Idaho
										</option>
									
										<option value="IL" lang="en">
											Illinois
										</option>
									
										<option value="IN" lang="en">
											Indiana
										</option>
									
										<option value="KS" lang="en">
											Kansas
										</option>
									
										<option value="KY" lang="en">
											Kentucky
										</option>
									
										<option value="LA" lang="en">
											Louisiana
										</option>
									
										<option value="MA" lang="en">
											Massachusetts
										</option>
									
										<option value="MD" lang="en">
											Maryland
										</option>
									
										<option value="ME" lang="en">
											Maine
										</option>
									
										<option value="MI" lang="en">
											Michigan
										</option>
									
										<option value="MN" lang="en">
											Minnesota
										</option>
									
										<option value="MO" lang="en">
											Missouri
										</option>
									
										<option value="MS" lang="en">
											Mississippi
										</option>
									
										<option value="MT" lang="en">
											Montana
										</option>
									
										<option value="NC" lang="en">
											North Carolina
										</option>
									
										<option value="ND" lang="en">
											North Dakota
										</option>
									
										<option value="NE" lang="en">
											Nebraska
										</option>
									
										<option value="NH" lang="en">
											New Hampshire
										</option>
									
										<option value="NJ" lang="en">
											New Jersey
										</option>
									
										<option value="NM" lang="en">
											New Mexico
										</option>
									
										<option value="NV" lang="en">
											Nevada
										</option>
									
										<option value="NY" lang="en">
											New York
										</option>
									
										<option value="OH" lang="en">
											Ohio
										</option>
									
										<option value="OK" lang="en">
											Oklahoma
										</option>
									
										<option value="OR" lang="en">
											Oregon
										</option>
									
										<option value="PA" lang="en">
											Pennsylvania
										</option>
									
										<option value="RI" lang="en">
											Rhode Island
										</option>
									
										<option value="SC" lang="en">
											South Carolina
										</option>
									
										<option value="SD" lang="en">
											South Dakota
										</option>
									
										<option value="TN" lang="en">
											Tennessee
										</option>
									
										<option value="TX" lang="en">
											Texas
										</option>
									
										<option value="UT" lang="en">
											Utah
										</option>
									
										<option value="VA" lang="en">
											Virginia
										</option>
									
										<option value="VT" lang="en">
											Vermont
										</option>
									
										<option value="WA" lang="en">
											Washington
										</option>
									
										<option value="WI" lang="en">
											Wisconsin
										</option>
									
										<option value="WV" lang="en">
											West Virginia
										</option>
									
										<option value="WY" lang="en">
											Wyoming
										</option>
									
								</select>
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="postalCode" placeholder="Zip Code*" aria-label="Zip Code">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="telephone" placeholder="Phone Number" aria-label="Phone Number">
							</div>
							<div class="from_fieldBox btnBox">
								<span lang="en">*&nbsp;Required information</span>
								<a href="javascript:addAddress('addBillingAddressForm')" class="form_btn" lang="en">Add</a>
								<input type="checkbox" name="asDefault" class="check" aria-label="Set this as my default Billing Address">
								<span lang="en">Set this as my default Billing Address</span>
							</div>
						</form>
					</div>
				</div>	
				<div class="addressoption">
					
						<p lang="en">
							Shipping Address
							<a href="showAddressBox('addShippingAddress')" class="addAddressLink" lang="en">+Add New Shipping Address</a>
						</p>
					
					<div class="addressBox" id="addShippingAddress" style="display: none;">
						<form action="" method="post" id="addShippingAddressForm" lang="en">
							<input type="hidden" name="type" value="2">
							<img src="/staticfile/images/x.png" alt="close" onclick="hideAddressBox('addShippingAddress')">
							<p class="form_redtoptitle" lang="en">Add New Shipping Address</p>
							<input type="hidden" name="typeId" value="0">
							
								<div class="from_fieldBox sama">
									<a href="javascript:sameAddress('addShippingAddress')" class="sameAddressBtn" id="sameAddressBtn" lang="en">Same as Mailing Address</a>
								</div>
							
							<div class="from_fieldBox" lang="en">
								<input type="text" name="firstName" placeholder="First Name" aria-label="First Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="lastName" placeholder="Last Name" aria-label="Last Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="company" placeholder="Company Name" aria-label="Company Name">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="address" placeholder="Shipping Address 1*" aria-label="Shipping Address 1">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="address2" placeholder="Shipping Address 2" aria-label="Shipping Address 2">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="city" placeholder="City*" aria-label="city">
							</div>
							<div class="from_fieldBox">
								<select name="state" aria-label="state">
									<option value="" lang="en">State*</option>
									
										<option value="AK" lang="en">
											Alaska
										</option>
									
										<option value="AL" lang="en">
											Alabama
										</option>
									
										<option value="AR" lang="en">
											Arkansas
										</option>
									
										<option value="AZ" lang="en">
											Arizona
										</option>
									
										<option value="CA" lang="en">
											California
										</option>
									
										<option value="CO" lang="en">
											Colorado
										</option>
									
										<option value="CT" lang="en">
											Connecticut
										</option>
									
										<option value="DC" lang="en">
											District of Columbia
										</option>
									
										<option value="DE" lang="en">
											Delaware
										</option>
									
										<option value="FL" lang="en">
											Florida
										</option>
									
										<option value="GA" lang="en">
											Georgia
										</option>
									
										<option value="HI" lang="en">
											Hawaii
										</option>
									
										<option value="IA" lang="en">
											Iowa
										</option>
									
										<option value="ID" lang="en">
											Idaho
										</option>
									
										<option value="IL" lang="en">
											Illinois
										</option>
									
										<option value="IN" lang="en">
											Indiana
										</option>
									
										<option value="KS" lang="en">
											Kansas
										</option>
									
										<option value="KY" lang="en">
											Kentucky
										</option>
									
										<option value="LA" lang="en">
											Louisiana
										</option>
									
										<option value="MA" lang="en">
											Massachusetts
										</option>
									
										<option value="MD" lang="en">
											Maryland
										</option>
									
										<option value="ME" lang="en">
											Maine
										</option>
									
										<option value="MI" lang="en">
											Michigan
										</option>
									
										<option value="MN" lang="en">
											Minnesota
										</option>
									
										<option value="MO" lang="en">
											Missouri
										</option>
									
										<option value="MS" lang="en">
											Mississippi
										</option>
									
										<option value="MT" lang="en">
											Montana
										</option>
									
										<option value="NC" lang="en">
											North Carolina
										</option>
									
										<option value="ND" lang="en">
											North Dakota
										</option>
									
										<option value="NE" lang="en">
											Nebraska
										</option>
									
										<option value="NH" lang="en">
											New Hampshire
										</option>
									
										<option value="NJ" lang="en">
											New Jersey
										</option>
									
										<option value="NM" lang="en">
											New Mexico
										</option>
									
										<option value="NV" lang="en">
											Nevada
										</option>
									
										<option value="NY" lang="en">
											New York
										</option>
									
										<option value="OH" lang="en">
											Ohio
										</option>
									
										<option value="OK" lang="en">
											Oklahoma
										</option>
									
										<option value="OR" lang="en">
											Oregon
										</option>
									
										<option value="PA" lang="en">
											Pennsylvania
										</option>
									
										<option value="RI" lang="en">
											Rhode Island
										</option>
									
										<option value="SC" lang="en">
											South Carolina
										</option>
									
										<option value="SD" lang="en">
											South Dakota
										</option>
									
										<option value="TN" lang="en">
											Tennessee
										</option>
									
										<option value="TX" lang="en">
											Texas
										</option>
									
										<option value="UT" lang="en">
											Utah
										</option>
									
										<option value="VA" lang="en">
											Virginia
										</option>
									
										<option value="VT" lang="en">
											Vermont
										</option>
									
										<option value="WA" lang="en">
											Washington
										</option>
									
										<option value="WI" lang="en">
											Wisconsin
										</option>
									
										<option value="WV" lang="en">
											West Virginia
										</option>
									
										<option value="WY" lang="en">
											Wyoming
										</option>
									
								</select>
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="postalCode" placeholder="Zip Code*" aria-label="Zip Code">
							</div>
							<div class="from_fieldBox" lang="en">
								<input type="text" name="telephone" placeholder="Phone Number" aria-label="Phone Number">
							</div>
							<div class="from_fieldBox btnBox">
								<span lang="en">*&nbsp;Required information</span>
								<a href="javascript:addAddress('addShippingAddressForm')" class="form_btn" lang="en">Add</a>
								<input type="checkbox" name="asDefault" class="check" aria-label="Set this as my default Shipping Address">
								<span lang="en">Set this as my default Shipping Address</span>
							</div>
						</form>
					</div>
				</div> -->
			</div>
		</div></div>
	</div>
</div>
@endsection