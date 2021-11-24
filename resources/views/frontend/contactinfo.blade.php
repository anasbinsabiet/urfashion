@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div id="indexc">
	<div class="container">
		<ul class="breadcrumb">
		    <li><a href="{{url('/')}}" lang="en">Home</a></li>
			<li><a href="javascript:void(0);" lang="en">Contact Us</a></li>
		</ul>
		<div class="faq-img" lang="en">
	      	<h1 lang="en">Contact Us</h1>
	      	We are dedicated to our customers. Your satisfaction is Promo Direct's priority! <br>
	      	Call us or write to us. Our customer service representatives will review your question or concern and get back to you right away.
	    </div>
		<div class="boxcontent">
			<div class="contactbox">
				<div class="contactboxh" lang="en">
					<img src="{{asset('/staticfile/images/contact_email.png')}}" alt="contact us email" class="img-responsive">
				</div>
				<div class="contactboxtxt" lang="en">
					Questions?&nbsp;<a href="mailto:{{$setting->email}}" lang="en">{{$setting->email}}</a><br>
					Email Orders:&nbsp;<a href="mailto:{{$setting->email}}" lang="en">{{$setting->email}}</a><br>
					Artwork:&nbsp;<a href="mailto:{{$setting->email}}" lang="en">{{$setting->email}}</a>
				</div>
			</div>
			<div class="contactbox">
				<div class="contactboxh" lang="en">
					<img src="{{asset('/staticfile/images/contact_call.png')}}" alt="contact us call" class="img-responsive">
				</div>
				<div class="contactboxtxt" lang="en">
					For web support or orders by phone:<br> 
					Call: {{$setting->header_phone1}}<br> 
					{{$setting->working_hour}}
				</div>
			</div>
			<div class="contactbox">
				<div class="contactboxh" lang="en">
					<img src="{{asset('/staticfile/images/contact_chat.png')}}" alt="contact us chat" class="img-responsive">
				</div>
				<div class="contactboxtxt" lang="en">
					Our Live Chat operators are available:<br> 
					{{$setting->working_hour}}<br>
					<a href="javascript:$('#liveChat').show();" id="l2stxtcd" lang="en">Go to Live Chat Now</a>
				</div>
			</div>
			<div class="contactbox last">
				<div class="contactboxh" lang="en">
					<img src="{{asset('/staticfile/images/contact_address.png')}}" alt="contact us address" class="img-responsive">
				</div>
				<div class="contactboxtxt" lang="en">
					Banani<br> 
					Dhaka<br>
					Bangladesh
				</div>
			</div>
		</div>
		<p class="mapbox">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.678639280319!2d90.39695082196742!3d23.794774936879612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70c15ea1de1%3A0x97856381e88fb311!2sBanani%20Model%20Town%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1632052121043!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</p>
	</div>
</div>
@endsection