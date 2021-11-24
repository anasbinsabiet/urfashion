@extends('frontend.layouts.master')
@section('title','Shopping Cart')
@section('content')
<div class="myaccount">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				 <ul class="breadcrumb">
	             	<li><a href="/" lang="en">Home</a></li>
	             	<li><a href="/customer/myaccount.jsp" lang="en">My Account</a></li>
	             	<li><a href="javascript:void(0);" lang="en">View &amp; Upload Artwork</a></li>
	             </ul>
			 </div>      
		</div>
	</div>	
	<div class="container">
		<div class="col-sm-12"><div class="row">
			<div class="artworkPage">
				<h1 lang="en">Upload Artwork</h1>
				
				<div class="artupload">
					<p lang="en">Please select the artwork that you would like to upload.</p>
					<p lang="en">Files we accept: ai, eps, pdf, jpg, jpeg, png, gif, tiff</p>
					<form name="UploadArtworkForm" method="post" action="/customer/account/updartwork.cz" class="text-center" enctype="multipart/form-data" id="updartworkform"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="f3788ca7bd22e4946bd673736ff94c3d">
						<a class="btn_addPic" href="javascript:void(0);" lang="en">
							UPLOAD ART
							<input class="filePrew" type="file" id="theFile" name="theFile" onchange="uploadArt()">
						</a>
					</form>
				</div>
				
				<div class="artworks">
					<h1 lang="en">Uploaded Artworks</h1>
					
						
						
						<div class="artItem" lang="en">
							<a href="/objects/artwork/311787/pc-bags--1-.png" target="_blank" class="fileBox" title="pc-bags--1-.png" lang="en">
								
							    	
						        		<img src="/cgi-bin/showimg.pl?url=/objects/artwork/311787/pc-bags--1-.png&amp;size=228x228" alt="pc-bags--1-.png" onload="formatImage(this,228)" width="226" style="margin-top: 39px;">
						        	
						        
						    </a>
						    <p class="artname" title="pc-bags--1-.png" lang="en">pc-bags--1-.png</p>
							<p class="text-center"><a href="/customer/account/updartwork.cz?artworkId=7254" class="delbtn" lang="en">Delete</a></p>
						</div>
					
				</div>
				
			</div>
		</div></div>
	</div>
</div>
@endsection