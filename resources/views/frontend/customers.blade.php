@extends('frontend.layouts.master')
@section('title','Return Policy')
@section('content')
@php
$data = App\Models\Setting::find(4);
@endphp
<section class="pt-4 mb-4">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-left">
				<h1 class="fw-600 h4">Return Policy Page</h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
					<li class="breadcrumb-item opacity-50">
						<a class="text-reset" href="#">Home</a>
					</li>
					<li class="text-dark fw-600 breadcrumb-item">
						<a class="text-reset" href="#">"Return Policy"</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="mb-4">
	<div class="container">
		<div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
			<h2 style="text-align: center; ">CIRCLE</h2>
			<h1 align="center" style="">
				<o:p></o:p>
			</h1>
			<p>

			</p>
			<h4 style="text-align: center; ">Return
				and Exchange Po<span style="font-size:20.0pt">licy</span></h4>
			<h1 align="center" style="text-align:center"><br></h1>
			<h1 align="center" style="text-align:center"><span style="font-size:20.0pt">
					<o:p></o:p>
				</span></h1>
			<p style="margin: 0in 0in 12pt 0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="line-height: 107%;" times="" new="" roman",serif"="">Welcome to CIRCLE!!!<br></span></p>
			<p style="margin: 0in 0in 12pt 0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="line-height: 107%;" times="" new="" roman",serif"=""><br></span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""="">I.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"="">CIRCLE
					has a very flexible Return &amp; Exchange policy. If you/your customer is not
					satisfied with your product/order, you can easily request return/exchange the
					product. However, there are a few basic rules for return/exchange:&nbsp;<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif"="">&nbsp;<br></span>
			</p>
			<p style="margin: 0in 0in 12pt 24px; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""="">A.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp; </span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"=""><u>CRICLE
						will bear the delivery cost for return and exchange</u><br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>I.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp; &nbsp; </span></span><span style="line-height: 107%;" times="" new="" roman",serif"="">We accept the request if there is a
					mismatch in quality, size, color, or design an item/parts is missing/damaged/wrong<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>II.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp; &nbsp; &nbsp; </span></span><span style="line-height: 107%;" times="" new="" roman",serif"="">The product has to be in original and
					unused state<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>III.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span style="line-height: 107%;" times="" new="" roman",serif"="">Request has to be raised within 3 days of
					delivery<br>
					<o:p></o:p>
				</span>&nbsp;<br>&nbsp;<br><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""="">B.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"=""><u>SELLER
						will bear the delivery cost for return and exchange</u><br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>I.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp; &nbsp; </span></span><span style="line-height: 107%;" times="" new="" roman",serif"="">If the ordered product and the delivery
					product is same, still seller request to change the product<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>II.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp; &nbsp; &nbsp; </span></span><span style="line-height: 107%;" times="" new="" roman",serif"="">The product has to be in original and
					unused state<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>III.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span style="line-height: 107%;" times="" new="" roman",serif"="">Request has to be raised within 3 days of
					delivery<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif"="">&nbsp;<br></span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""="">C.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;<u> </u></span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"=""><u>NO
						return and exchange is allowed</u><br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>I.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"="">If the product has been used or damaged
					after delivery<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>II.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"="">Request has been made after 3 days of
					delivery<br>
					<o:p></o:p>
				</span><span style="line-height: 107%;" times="" new="" roman",serif;="" mso-fareast-font-family:"times="" roman""=""><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>III.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span></span>
				<!--[endif]--><span style="line-height: 107%;" times="" new="" roman",serif"="">Discounted/clearance/bulk sale product</span>
			</p>
			<p style="margin: 0in 0in 12pt 24px; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="line-height: 107%;" times="" new="" roman",serif"=""><br>
					<o:p></o:p>
				</span><span style="" times="" new="" roman",="" serif;"="">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
				<!--[endif]--><span style="" times="" new="" roman",="" serif;"="">If the order is cancelled without any reason 1 hour after
					placing, a restocking fee will be applicable.<br>
					<o:p></o:p>
				</span><span style="" times="" new="" roman",="" serif;"="">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;" times="" new="" roman";"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
				<!--[endif]--><span style="" times="" new="" roman",="" serif;"="">Money refund is only allowed if CIRCLE is unable to
					exchange or deliver the ordered product<o:p></o:p></span>
			</p>
			<p>







































			</p>
			<p class="MsoNormal" style=""><span style="line-height: 107%;" times="" new="" roman",serif"="">&nbsp;</span></p>
			<p><br></p>
			<p><img src="https://circlereseller.s3.us-east-2.amazonaws.com/uploads/all/COzp3mg7i3ybXUgMFTP5telIxiiph4dJIqnXPgbN.png" style="width: 25%; float: right;" class="note-float-right"><br></p>
		</div>
	</div>
</section>
@endsection