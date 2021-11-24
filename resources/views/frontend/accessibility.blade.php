@extends('frontend.layouts.master')
@section('title','Accessibility Statement')
@section('content')
<div id="indexc">
	<div class="container">
		<ul class="breadcrumb">
        <li><a href="{{url('/')}}" lang="en">Home</a></li>
			<li><a href="javascript:void(0);" lang="en">Web Accessibility Statement</a></li>
		</ul>
		<div class="aboutprotext">
			<h1 lang="en">WEB ACCESSIBILITY STATEMENT</h1>
			<p lang="en">We firmly believe that the internet should be available and accessible to anyone, and are committed to providing a website that is accessible to the widest possible audience, regardless of circumstance and ability.</p>
			<p lang="en">
				To fulfill this, we aim to adhere as strictly as possible to the World Wide Web Consortium's (W3C) <a href="https://www.w3.org/TR/WCAG21/" target="_blank" rel="noopener noreferrer" lang="en">Web Content Accessibility Guidelines 2.1 (WCAG 2.1)</a> at the AA level. 
				These guidelines explain how to make web content accessible to people with a wide array of disabilities. 
				Complying with those guidelines helps us ensure that the website is accessible to all people: blind people, people with motor impairments, visual impairment, cognitive disabilities, and more.
			</p>
			<p lang="en">This website utilizes various technologies that are meant to make it as accessible as possible at all times.</p>
			<p lang="en">
				Despite our very best efforts to allow anybody to adjust the website to their needs, there may still be pages or sections that are not fully accessible, are in the process of becoming accessible, or are lacking an adequate technological solution to make them accessible. 
				Still, we are continually improving our accessibility, adding, updating and improving its options and features, and developing and adopting new technologies. 
				All this is meant to reach the optimal level of accessibility, following technological advancements. 
				For any assistance, please reach out to <a href="mailto:{{$setting->email}}" lang="en">{{$setting->email}}</a>.
			</p>
			<p lang="en">
				If you've found a malfunction or have ideas for improvement, we'll be happy to hear from you. 
				You can reach out to the website’s operators by using the following email <a href="mailto:{{$setting->email}}" lang="en">{{$setting->email}}</a>.
			</p>
		</div>
	</div>
</div>
@endsection