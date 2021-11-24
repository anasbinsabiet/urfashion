@extends('frontend.layouts.master')
@section('title','Our Guarantee')
@section('content')
<div id="indexc">
	<div class="container">
		<ul class="breadcrumb">
        <li><a href="{{url('/')}}" lang="en">Home</a></li>
			<li><a href="javascript:void(0);" lang="en">Artwork Info</a></li>
		</ul>
		<div class="aboutprotext">
			<div class="col-sm-6 artworkInfoLeftBox">
				<h1 lang="en">FREE Art Prep &amp; Design</h1>
				<p lang="en">
					If you don't have print-ready artwork... no problem! 
					After placing your order, simply e-mail your artwork and we will create print-ready art for FREE! 
					Most competitors charge up to $50 for this service. 
					You get FREE logo prep and design help on every item we sell – you don't need to do the work yourself – we'll do it for you! 
					Whether you'd just like your logo on a product, or you'd like to add text, additional graphics or you need a complete logo created - we'll do the work, FREE!.
				</p>
				<h1 lang="en">FREE Email Proof of Your Imprint</h1>
				<p lang="en">
					Before we place your order into production, you will receive a FREE e-mail proof of your imprint for final approval. 
					This step in our ordering process ensures that your order will be produced accurately.
				</p>
				<h1 lang="en">Types of Artwork Files</h1>
				<p lang="en">
					Vector art is the highest quality file used for printing. 
					We create vector art using Adobe Illustrator. 
					Your vector art logo can be used on the smallest pen, then enlarged to fit a canvas bag with NO loss of detail.
					We will produce vector art from your letterhead, business card, computer-generated artwork.
					Vector art files usually have the extetion .ai, .eps and .pdf.<br>
					If your artwork is a 4-color design or a photograph, we require a 300 dpi CMYK file at a 100% of the imprint area with a 1/8" bleed(depending on the item).
					You can also send us pictures from your phone or digital camera and we can determine if the quality is good for printing.
				</p>
			</div>
			<div class="col-sm-6 artworkInfoRightBox">
				<div class="sendArtworkBox">
					<h1 lang="en">How Do I Send My Artwork</h1>
					<p lang="en">
						Please use one of the following methods to transfer art. 
						If you have any questions or problems sending art, please call 1-800-748-6150. 
						We accept Adobe Illustrator .eps, .ai, .pdf files or high resolution (300dpi or greater) jpegs.<br> 
				        If you have a Gmail account you can send large art files through the Google Drive option. 
				        You can also send large art files through a cloud service such as hightail.com
				    </p>
					<h1 lang="en">• Enter/Upload Artwork</h1>
					<p lang="en">
						If placing an online order, you can enter or upload your artwork directly into your sales order.
						Look for button below toward the end of your online ordering process. 
						Click it to enter your artwork or select a file from your computer to upload it to your sales order. 
					</p>
					<h1 lang="en">• Email your Artwork</h1>
					<p lang="en">
						If you are an existing customer, send art to your account manager by attaching the art file to the email. 
						Include your customer number (if applicable) and your web order number (on your receipt) in the body of the email. 
						Also include your contact information so we may reach you if there are any problems with your art.<br>
						If you are a new customer e-mail your artwork to <a href="mailto:{{$setting->email}}" lang="en">{{$setting->email}}</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection