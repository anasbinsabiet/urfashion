@extends('frontend.layouts.master')
@section('title','Our Guarantee')
@section('content')
<div id="indexc">
	<div class="container">
		<ul class="breadcrumb">
		<li><a href="{{url('/')}}" lang="en">Home</a></li>
			<li><a href="javascript:void(0);" lang="en">Our Guarantee</a></li>
		</ul>
		<div class="aboutprotext">
			<div class="col-sm-6 artworkInfoLeftBox" lang="en">
				<h1 lang="en">Low Price Guarantee - <span lang="en">We Will Beat Any Price!</span></h1>
				<p lang="en">
					Our tremendous buying power means guaranteed low prices at all times! 
					We continually shop the marketplace to assure you will always receive deep discount prices on all our products.
				</p>
				<p lang="en">
					Our Guarantee: If you find an identical product advertised for less from any other competitor's 
					current catalog even up to 30 days after your purchase - we will BEAT the lower price
					instantly! Other terms and conditions may apply.
				</p>
				<img src="{{asset('/staticfile/images/guarantee.png')}}" class="img-responsive" alt="guarantee">
			</div>
			<div class="col-sm-6 artworkInfoRightBox">
				<h1 lang="en">Satisfaction Guaranteed - <span lang="en">Our #1 Goal!</span></h1>
				<p lang="en">
					We have always measured our success based upon customer satisfaction. 
					This is achieved by customers getting "What" they want, "When" they need them. 
					Promo Direct will never produce your order until you have approved both an order form with your product specifications and a FREE art paper proof that we provide with every product requested.
				</p>
				<p lang="en">
					We Guarantee that all orders will meet your approved
					specifications on both your order form and art paper proof or we
					will rerun your order or credit your account!
				</p>
				<p lang="en">
					In order to meet your respective product quality guidelines, we encourage you to request a FREE random sample of the product you will be ordering. 
					Our endeavor is to be the promotional company YOU can trust
				</p>
			</div>
		</div>
	</div>
</div>
@endsection