$(document).ready(function() {
	$('#sortBy').on('change',function(e){
		var sort_by =  e.target.value;
		if (!sort_by) return;
		let url = new URL(window.location.href);
		url.searchParams.set('sort_by', sort_by);
        // console.log(url);
        window.location.href = url; // reloads the page
    });
	$('#sortByPrice').on('change',function(e){
		var sort_by =  e.target.value;
		if (!sort_by) return;
		let url = new URL(window.location.href);
		url.searchParams.set('price_filter', sort_by);
        // console.log(url);
        window.location.href = url; // reloads the page
    });
});
$(function() {
	$(".csearch").blur(function(){
	    // alert(this.value);
	    csearch = this.value;
	    $.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "keyword=" + csearch,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.try').click(function(){
		var pt = [];
		$('.try').each(function(){
			if($(this).is(":checked")){
				pt.push($(this).val());
			}
		});
		fpt = pt.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "production_time=" + fpt,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.filter_by_color').click(function(){
		var color = [];
		$('.filter_by_color').each(function(){
			if($(this).is(":checked")){
				color.push($(this).val());
			}
		});
		fcolor = color.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "color=" + fcolor,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.on_sale').click(function(){
		var on_sale = [];
		$('.on_sale').each(function(){
			if($(this).is(":checked")){
				on_sale.push($(this).val());
			}
		});
		fon_sale = on_sale.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "on_sale=" + fon_sale,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.hot_deal').click(function(){
		var hot_deal = [];
		$('.hot_deal').each(function(){
			if($(this).is(":checked")){
				hot_deal.push($(this).val());
			}
		});
		fhot_deal = hot_deal.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "hot_deal=" + fhot_deal,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.imprint_method').click(function(){
		var imprint_method = [];
		$('.imprint_method').each(function(){
			if($(this).is(":checked")){
				imprint_method.push($(this).val());
			}
		});
		fimprint_method = imprint_method.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "imprint_method=" + fimprint_method,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.brand').click(function(){
		var brand = [];
		$('.brand').each(function(){
			if($(this).is(":checked")){
				brand.push($(this).val());
			}
		});
		fbrand = brand.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "brand=" + fbrand,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.fit').click(function(){
		var fit = [];
		$('.fit').each(function(){
			if($(this).is(":checked")){
				fit.push($(this).val());
			}
		});
		ffit = fit.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "fit=" + ffit,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.pstyle').click(function(){
		var pstyle = [];
		$('.pstyle').each(function(){
			if($(this).is(":checked")){
				pstyle.push($(this).val());
			}
		});
		fpstyle = pstyle.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "pstyle=" + fpstyle,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	})
	$('.fabric').click(function(){
		var fabric = [];
		$('.fabric').each(function(){
			if($(this).is(":checked")){
				fabric.push($(this).val());
			}
		});
		ffabric = fabric.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "fabric=" + ffabric,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.size').click(function(){
		var size = [];
		$('.size').each(function(){
			if($(this).is(":checked")){
				size.push($(this).val());
			}
		});
		fsize = size.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "size=" + fsize,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
	$('.sleeve_length').click(function(){
		var sleeve_length = [];
		$('.sleeve_length').each(function(){
			if($(this).is(":checked")){
				sleeve_length.push($(this).val());
			}
		});
		fsleeve_length = sleeve_length.toString();
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '',
			data: "sleeve_length=" + fsleeve_length,
			success: function (response) {
				console.log(response);
				$('body').html(response);
			}
		});
	});
});


$(function() {
	$('.topNav .fnavli').click(function(){
		if($('#isFirstShowAllCats').val() == 1){
			$(this).find('.catdropdown').animate({opacity:'show', height:'show'},200);
			$('#isFirstShowAllCats').val(0);
		} else {
			if($(this).find('.catdropdown').length > 0){
				if($(this).find('.catdropdown').is(":hidden")){
					$(this).find('.catdropdown').animate({opacity:'show', height:'show'},200);
				} else {
					$(this).find('.catdropdown').stop(true,true).hide();
				}
			}
		}
	});
	
	$('.topNav .fnavli').hover(function(){
		if($(this).find('.catdropdown').length > 0){
			$(this).find('.catdropdown').animate({opacity:'show', height:'show'},200);
		}
	}, function() {
		if($(this).find('.catdropdown').length > 0){
			$(this).find('.catdropdown').stop(true,true).hide();
		}
	});
	
	$('.topNav .catdropdown .catnav').hover(function(){
		if($(this).find('.subCatNav').length > 0){
			$(this).find('.subCatNav').animate({opacity:'show', height:'show'},200);
		}
	}, function() {
		if($('.subCatNav').length > 0){
			$('.subCatNav').stop(true,true).hide();
		}
	});
	
	$('#myaccountBox').click(function(){
		if($('#isFirstShowHeaderDropdownBox').val() == 1){
			$('#headerDropdownBox').animate({opacity:'show', height:'show'},200);
			$('#isFirstShowHeaderDropdownBox').val(0);
		} else {
			if($('#headerDropdownBox').is(":hidden")){
				$('#headerDropdownBox').animate({opacity:'show', height:'show'},200);
			} else {
				$('#headerDropdownBox').stop(true,true).hide();
			}
		}
	});
	
	$('#headerDropdown').hover(function(){
		$('#headerDropdownBox').animate({opacity:'show', height:'show'},200);
	}, function() {
		$('#headerDropdownBox').stop(true,true).hide();
	});
	
	$(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			onShown: function() {
				if (window.console) {
					return console.log('Checking our the events huh?')
				}
			},
			onNavigate: function(direction, itemIndex) {
				if (window.console) {
					return console.log('Navigating ' + direction + '. Current item: ' + itemIndex)
				}
			}
		});
	});
	
	$(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery-11"]', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			wrapping: false
		});
	});
	
	$(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			onShown: function() {
				this.modal().on('click', '.modal-footer a', function(e) {
					e.preventDefault();
					this.navigateTo(2)
				}.bind(this))
			}
		});
	});
	
	$(window).scroll(function() {
		var dtop = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop;
		if (dtop > 125) {
			$("#topHead").addClass("topHead-scrolled");
			$(".topNav").addClass("topnav-scrolled");
		} else {
			$("#topHead").removeClass("topHead-scrolled");
			$(".topNav").removeClass("topnav-scrolled");
		}
		move("SubscribePopup");
		move("SubscribePopupSuccess");
		move("ExistsPopup");
		move("VideoPopup");
		move("SampleRequestPopup");
		move("PDExpressVideoPopup");
		move("OfferDetailsPopup");
		move("PDExpressDetailPopup");
	});
	
	$(window).on('load', function() {
		move("SubscribePopup");
		move("SubscribePopupSuccess");
		move("ExistsPopup");
		move("VideoPopup");
		move("SampleRequestPopup");
		move("PDExpressVideoPopup");
		move("OfferDetailsPopup");
		move("PDExpressDetailPopup");
	});
	
	if(jQuery("#SubscribePopup").length > 0){
		setTimeout(exitPopup, 12000);
	}
	
	$("#editContactbtn").click(function() {
		var flag = false;
		var firstName = $("#editContact input[name='firstName']").val();
		var lastName = $("#editContact input[name='lastName']").val();
		var email = $("#editContact input[name='email']").val();
		if (firstName != "" && lastName != "" && email != "" && validateEmail(email) && email.toLowerCase().lastIndexOf("@163.com") <= 0 && email.toLowerCase().lastIndexOf("@sohu.com") <= 0 && email.toLowerCase().lastIndexOf("@21cn.com") <= 0 && email.toLowerCase().lastIndexOf("@eyou.com") <= 0 && email.toLowerCase().lastIndexOf("@qq.com") <= 0 && email.toLowerCase().lastIndexOf("@tom.com") <= 0) {
			flag = true;
		}
		if (!flag) {
			alert("Please enter invalid value for all required fields.");
			return;
		}
		$.ajax({
			type: "post",
			url: CONTENT_PATH + "/customer/account/updcontact.cz",
			data: $("#ContactForm").serialize(),
			dataType: "json",
			success: function(data) {
				callback(data, 'address.jsp');
			}
		});
	});
	
	$("#changePasswordBtn").click(function() {
		var password = $("#ChgPasswordForm #password").val();
		var oldPassword = $("#ChgPasswordForm #oldPassword").val();
		var newPassword = $("#ChgPasswordForm #newPassword").val();
		var newPassword2 = $("#ChgPasswordForm #newPassword2").val();
		if (oldPassword == "") {
			alert("Old Password is required");
			return;
		}
		if (oldPassword != password) {
			alert("Invalid Old Password");
			return
		}
		if (newPassword == "") {
			alert("New Password is required");
			return
		}
		if (newPassword2 == "") {
			alert("Confirm Password is required");
			return
		}
		if (newPassword != newPassword2) {
			alert("New Password is not match with Confirm Password");
			return
		}
		$.ajax({
			type: "post",
			url: CONTENT_PATH + "/customer/chgpasswd.cz",
			data: $("#ChgPasswordForm").serialize(),
			dataType: "json",
			success: function(data) {
				callback(data, 'logininfo.jsp');
			}
		});
	});
	
	$("#editLoginBtn").click(function() {
		var firstName = $("#EditLoginForm #firstName").val();
		if (firstName == "") {
			alert("First Name is required");
			return;
		}
		var lastName = $("#EditLoginForm #lastName").val();
		if (lastName == "") {
			alert("Last Name is required");
			return;
		}
		var email = $("#EditLoginForm #email").val();
		if (!validateEmail(email) || email.toLowerCase().lastIndexOf("@163.com") > 0 || email.toLowerCase().lastIndexOf("@sohu.com") > 0 || email.toLowerCase().lastIndexOf("@21cn.com") > 0 || email.toLowerCase().lastIndexOf("@eyou.com") > 0 || email.toLowerCase().lastIndexOf("@qq.com") > 0 || email.toLowerCase().lastIndexOf("@tom.com") > 0) {
			alert("Email is invalid");
			return
		}
		$.ajax({
			type: "post",
			url: CONTENT_PATH + "/customer/editlogin.cz",
			data: $("#EditLoginForm").serialize(),
			dataType: "json",
			success: function(data) {
				callback(data, 'logininfo.jsp');
			}
		});
	});
	
	$("#SampleRequestForm #requestCatalog").click(function() {
		$('#SampleRequestForm #requestCatalog').attr('disabled', "true");
		var errorMessage = "<h3><font color='red'>Validation Error!</font></h3>You must correct the following error(s) before proceeding:<ul id='errorContent'>";
		var flag = 1;
		var qty = $("#SampleRequestForm #quantity").val();
		if (!isNaN(qty) && parseInt(qty) == 0) {
			errorMessage += "<li>Quantity is invalid</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #firstName").val() == "") {
			errorMessage += "<li>First Name is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #lastName").val() == "") {
			errorMessage += "<li>Last Name is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #company").val() == "") {
			errorMessage += "<li>Company Name is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #address").val() == "") {
			errorMessage += "<li>Business Address 1 is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #city").val() == "") {
			errorMessage += "<li>City is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #state").val() == "") {
			errorMessage += "<li>State is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #postalCode").val() == "") {
			errorMessage += "<li>Zip Code is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #telephone").val() == "") {
			errorMessage += "<li>Phone is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #source").val() == "") {
			errorMessage += "<li>How did you hear about us? is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #industry").val() == "") {
			errorMessage += "<li>Industry is required</li>";
			flag = 0
		}
		if ($("#SampleRequestForm #title").val() == "") {
			errorMessage += "<li>Title is required</li>";
			flag = 0
		}
		var email1 = $("#SampleRequestForm #email").val();
		if (email1 == "") {
			errorMessage += "<li>Email is required</li>";
			flag = 0
		} else if (!validateEmail(email1) || email1.toLowerCase().lastIndexOf("@163.com") > 0 || email1.toLowerCase().lastIndexOf("@sohu.com") > 0 || email1.toLowerCase().lastIndexOf("@21cn.com") > 0 || email1.toLowerCase().lastIndexOf("@eyou.com") > 0 || email1.toLowerCase().lastIndexOf("@qq.com") > 0 || email1.toLowerCase().lastIndexOf("@tom.com") > 0) {
			errorMessage += "<li>Email is invalid</li>";
			flag = 0
		}
		var email2 = $("#SampleRequestForm #email2").val();
		if (email2 == "") {
			errorMessage += "<li>Re-enter Email is required</li>";
			flag = 0
		} else if (!validateEmail(email2) || email2.toLowerCase().lastIndexOf("@163.com") > 0 || email2.toLowerCase().lastIndexOf("@sohu.com") > 0 || email2.toLowerCase().lastIndexOf("@21cn.com") > 0 || email2.toLowerCase().lastIndexOf("@eyou.com") > 0 || email2.toLowerCase().lastIndexOf("@qq.com") > 0 || email2.toLowerCase().lastIndexOf("@tom.com") > 0) {
			errorMessage += "<li>Re-enter Email is invalid</li>";
			flag = 0
		}
		if (email1 != "" && email2 != "" && email1 != email2) {
			errorMessage += "<li>Re-enter Email should match with Email</li>"
		}
		if ($("#SampleRequestForm #password").val() == "") {
			errorMessage += "<li>Password is required</li>";
			flag = 0
		}
		errorMessage += "</ul>";
		if (flag == 0) {
			$("#SampleRequestForm #errorMessage").html(errorMessage);
			$("#SampleRequestForm #errorMessage").show();
			$('#SampleRequestForm #requestCatalog').removeAttr("disabled");
		} else {
			$("#SampleRequestForm #errorMessage").html("");
			$("#SampleRequestForm #errorMessage").hide();
			$.ajax({
				type: "post",
				url: CONTENT_PATH + "/misc/catalogrequest.cz",
				data: $("#SampleRequestForm").serialize(),
				dataType: "text",
				success: function(data) {
					$('#SampleRequestForm #requestCatalog').removeAttr("disabled");
					if (data == "R") {
						var errorMessage = "Validation Error!<br>You must correct the following error(s) before proceeding:<ul id='errorContent'>";
						errorMessage += "<li>Can't send catalog request repeatly within one day!</li></ul>";
						$("#SampleRequestForm #errorMessage").html(errorMessage);
						$("#SampleRequestForm #errorMessage").show();
					} else if (data == "F") {
						alert("Please fill required fields.");
					} else {
						window.location.href = STORE_NAME + "/misc/catalogconfirm.jsp";
					}
				}
			});
		}
	});
	
	jQuery("#reciteme").click(function(i,e){
        loadService();
        return false;
    });
    
    $("form[name='CheckoutForm'] .couponBlock #applyCode").click(function() {
    	var couponName = $("form[name='CheckoutForm'] #couponName").val();
    	if(couponName == ""){
    		alert("Coupon code is required!");
    		return;
    	}
    	$.ajax({
			type: "post",
			url: CONTENT_PATH + "/misc/applyCoupon.cz?couponName=" + couponName,
			dataType: "json",
			success: function(data) {
				alert(data.messsage);
				if (data.code == "S") {
					$("form[name='CheckoutForm'] .couponBlock #couponName").val("");
				}
				$("form[name='CheckoutForm'] #couponAmountBox").html("-"+data.couponAmount);
				$("form[name='CheckoutForm'] .totalBox #grandTotalBox").html(data.grandTotal);
			}
		});
    });
});

var currentSelIndex = -1;
var oldSelIndex = -1;
var oldKeywords = "";
function selectItem(keyword, event) {
	if (keyword == '' || keyword.toLowerCase().indexOf('script') >= 0) {
		$("#topkeyword").val('');
		$("#topkeyword").focus();
		$("#suggestdiv").hide();
		return;
	} else {
		var suggestdiv = document.getElementById("suggestdiv").getElementsByTagName("li");
		var liLength = suggestdiv.length;
		if ((event.keyCode == 38 || event.keyCode == 40)) {
			if (liLength > 0) {
				oldSelIndex = currentSelIndex;
				if (event.keyCode == 38) {
					currentSelIndex = currentSelIndex - 1;
					if (currentSelIndex < -1) {
						currentSelIndex = liLength - 1;
					}
				}
				if (event.keyCode == 40) {
					currentSelIndex = currentSelIndex + 1;
					if (currentSelIndex > liLength - 1) {
						currentSelIndex = -1;
					}
				}
				if (oldSelIndex != -1) {
					var oldsuggestdiv = suggestdiv[oldSelIndex];
					oldsuggestdiv.style.backgroundColor = "#ffffff";
					oldsuggestdiv.style.color = "#000000";
				}
				if (currentSelIndex != -1) {
					var currentsuggestdiv = suggestdiv[currentSelIndex];
					currentsuggestdiv.style.backgroundColor = "#4B8225";
					currentsuggestdiv.style.color = "#ffffff";
					$("#topkeyword").val(currentsuggestdiv.innerHTML);
				} else {
					$("#topkeyword").val(oldKeywords);
					$("#topkeyword").focus();
				}
			}
		} else if (event.keyCode == 13) {
			currentSelIndex = -1;
			oldSelIndex = -1;
			$("#topSearch").submit();
		} else {
			var topkeyword = $("#topkeyword").val();
			if (topkeyword != '') {
				ds.suggest(topkeyword, '*', suggestCallBack);
			} else {
				$("#suggestdiv").html('');
			}
	
			oldKeywords = $("#topkeyword").val();
			currentSelIndex = -1;
			oldSelIndex = -1;
		}
	}
}

var suggestCallBack = function(data) {
	if (data == '') {
		$("#suggestdiv").html('');
		$("#suggestdiv").hide();
		return;
	}
	var content = "<ul class='suggestline'>";
	for (var i in data) {
		content += "<li onclick=\"clickitem(this)\">" + data[i].element + "</li>";
	}
	content += "</ul>";
	$("#suggestdiv").html(content);
	$("#suggestdiv").show();
};

function keywordblur() {
	var topkeyword = $("#topkeyword").val();
	if (topkeyword != '' && topkeyword.toLowerCase().indexOf('script') >= 0) {
		$("#topkeyword").val('');
	}
	$("#suggestdiv").hide();
}

function keywordfocus() {
	$("#suggestdiv").hide();
}

function clickitem(obj) {
	$("#topkeyword").val(obj.innerHTML);
	$("#suggestdiv").hide();
	$("#topSearch").submit();
}

function checkKeywords() {
	var topkeyword = $("#topkeyword").val();
	if (topkeyword == '' || topkeyword.toLowerCase().indexOf('script') >= 0) {
		$("#topkeyword").val('');
		$("#topkeyword").focus();
		return false;
	}
	return true;
}

function checkSearchKeyword(){
	var keyword = $("#searchKeyword").val();
	if(keyword != '' && keyword.toLowerCase().indexOf('script') >= 0){
		$("#searchKeyword").val('');
	}
}

function submitAdvanceSearchForm(){
	var keyword = $("#advancesearchform #searchKeyword").val();
	if(keyword != '' && keyword.toLowerCase().indexOf('script') >= 0){
		$("#advancesearchform #searchKeyword").val('');
		return;
	}
	if($('#advancesearchform #mfgId').val() > 0){
		$('#advancesearchform #brandName').val($("#advancesearchform #mfgId option:selected").text());
	} else {
		$('#advancesearchform #brandName').val("");
	}
	$('#advancesearchform').submit();
}

function countdown() {
    var now = new Date();         
    var hour = now.getHours();    
    var min = now.getMinutes();  
    var sec = now.getSeconds();   

    var h = 24 - hour;            
    if (min > 0 || sec > 0) {
        h -= 1;
    }
    var m = 60 - min;             
    if (sec > 0) {
        m -= 1;
    }
    if (m == 60) {
        m = 0;
    }
    var s = 60 - sec;             
    if (s == 60) {
        s = 0;
    }
    h = h.toString();
    m = m.toString();
    s = s.toString();
    if (h.length == 1) {
        h = '0' + h
    }
    if (m.length == 1) {
        m = '0' + m
    }
    if (s.length == 1)
        s = '0' + s
    result = "<span>"+h+"h</span>:<span>"+m+"m</span>:<span>"+s+"s</span>";
    return result;
}

function updateCookie(cookieName,cookieValue,maxAge){
	$.ajax({
		type: "post",
		url: CONTENT_PATH + "/misc/updateCookie.cz",
		data: {"cookieName":cookieName,"cookieValue":cookieValue,"maxAge":maxAge},
		success: function() {
			if(cookieName == 'promo_popup'){
				$("#isPopupExit").val("1");
			} else if(cookieName == 'promo_user_lang'){
				window.location.href = window.location.href;
			}
		}
	});
}

function exitPopup(){
	if(checkUrl() && $("#isPopupExit").val() == '0'){
		showhideLayer("SubscribePopup",'block');
		updateCookie("promo_popup","1",365*24*60*60);
	}
}

function checkUrl(){
	var url = jQuery("#currUrI").val();
	if(url.indexOf("/catalog/product.jsp") !=-1 ||
	   url.indexOf("/customer/viewcart.jsp") !=-1 ||
	   url.indexOf("/misc/catalog_request.jsp") !=-1 ||
	   url.indexOf("/register.jsp") !=-1 ||
	   url.indexOf("/logon.jsp") !=-1 ||
	   url.indexOf("/transaction/order/ckprofile.jsp") !=-1 ||
	   url.indexOf("/transaction/order/orderconfirm.jsp") !=-1){
	   return false
	}
	return true;
}

function showVideoPopup(id,url){
	if($(".slider").length > 0){
		$(".slider").slick('slickPause');
	}
	jQuery("#"+id+"Iframe").attr("src",url);
	showhideLayer(id, 'block');
}

function hideVideoPopup(id){
	if($(".slider").length > 0){
		$(".slider").slick('slickPlay');
	}
	jQuery("#"+id+"Iframe").attr("src","");
	showhideLayer(id, 'none');
}

function showhideLayer(id, val) {
	if(jQuery("#"+id).length > 0){
		move(id);
		document.getElementById("popupbackground").style.display = val;
		document.getElementById(id).style.display = val;
	}
}

function submitPopup(id) {
	var email = $("#"+id).val();
	var mailingListId = 1000;
	if (validateEmail(email)) {
		$.ajax({
			type: "post",
			url: CONTENT_PATH + "/customer/mailinglist.cz?email="+email+"&mailingListId="+mailingListId,
			dataType: "text",
			success : function(data) {
				if(data == "F"){
					alert("Failed!");
				} else {
					$("#"+id).val('');
					
					if(id == 'popEmail'){
						_ltk.SCA.CaptureEmail("popEmail");
						showhideLayer('SubscribePopup', 'none');
					}
					
					if(data == "R"){
						showhideLayer('ExistsPopup', 'block');
					} else if(data == "S"){
						showhideLayer('SubscribePopupSuccess', 'block');
					}

					if(id == 'popEmail'){
						if($("#isPopupExit").val() == "1"){
							ga('send', 'event', 'Pop up', 'sign up now', 1);
							$("#isPopupExit").val('0');
						} else {
							ga('send', 'event', 'email-signup', 'submit', 'top', 1);
						}
					} else if(id == 'signUpEmail'){
						ga('send', 'event', 'email-signup', 'subscribe', 'bottom', 1);
					}
				}
			}
		});
	} else {
		alert('Invalid Email Address');
		return;
	}
}

function validateEmail(email) {
	var reg = /^([A-Za-z0-9_\-\.\'])+\@([A-Za-z0-9_\-\.\'])+\.([A-Za-z])+$/;
	return reg.test(email) && (email.length <= 100);
}

function move(id) {
	if(jQuery("#"+id).length > 0){
		var clientWidth = document.documentElement.clientWidth;
	    var clientHeight = document.documentElement.clientHeight;
	    var objWidth = $("#"+id).width();
	    var objHeight = $("#"+id).height();
	    var x = (clientWidth - objWidth) / 2;
	    var y = (clientHeight - objHeight) / 2;
	    $("#"+id).css("left", x + "px");
	    $("#"+id).css("top", y + "px");
    }
}

function removeBrowsingHistory(id){
	$.ajax({
		type: "post",
		url: CONTENT_PATH + "/misc/removeBrowsingHistory.cz",
		data: {"cookieName":"promo_browsing_history","removeId":id,"maxAge":365},
		success: function() {
			location.reload(true);
		}
	});
}

function checkEmail(emailId,formId) {
	var address = $("#"+formId+" #"+emailId).val();
	if (!validateEmail(address)) {
		alert('Invalid Email Address');
	} else {
		$("#"+formId).submit();
	}
} 

function buyItNow(url, statusid) {
	if (statusid != 1) {
		alert("Sorry, the product is invalid now.");
	} else {
		location.href = url;
	}
}

function submitSearchForm(searchBoxId,pageNum,searchFormId){
	if(searchBoxId != ''){
		if(searchBoxId == "sortBy"){
			$("#"+searchFormId+" #sortBy1").val(0);
		} else if(searchBoxId == "sortBy1"){
			$("#"+searchFormId+" #sortBy").val(0);
		} else if(searchBoxId == 'allmfgBox'){
			if($('#'+searchFormId+' #allmfgBox').val() > 0){
				$('#'+searchFormId+' #brandName').val($('#'+searchFormId+' #allmfgBox option:selected').text());
			} else {
				$('#'+searchFormId+' #brandName').val('');
			}
		}
	}
	
	if(pageNum != ""){
		$("#"+searchFormId+" #pageNum").val(pageNum);
	}
	
	if(searchFormId != 'categoryFilterform'){
		$("#"+searchFormId).submit();
	} else {
		submitSubCategoryForm();
	}
}

function submitZipcode(){
	var pzipcode = $("#PDExpress #pzipcode").val();
	if(pzipcode != "" && !isNaN(pzipcode) && pzipcode.length == 5){
		ga('send', 'event', 'PD Express Search', 'Search', 1);
		$("#categoryFilterform #pageNum").val(1);
		$("#categoryFilterform #zipcode").val($("#PDExpress #pzipcode").val());
		if($("#categoryFilterform #timeInTransit").val() == '0'){
			$("#categoryFilterform #timeInTransit").val(3);
		}
		submitSubCategoryForm();
	}
}

function submitZipcodeByKeyboard(pzipcode, event){
	if(event.keyCode == 13){
		if(pzipcode != "" && !isNaN(pzipcode) && pzipcode.length == 5){
			ga('send', 'event', 'PD Express Search', 'Search', 1);
			$("#categoryFilterform #pageNum").val(1);
			$("#categoryFilterform #zipcode").val(pzipcode);
			submitSubCategoryForm();
		}
	}
}

function clearZipcode(){
	var pzipcode = $("#PDExpress #pzipcode").val();
	if(pzipcode != "" && !isNaN(pzipcode)){
		$("#categoryFilterform #pageNum").val(1);
		$("#categoryFilterform #timeInTransit").val(0);
		$("#categoryFilterform #zipcode").val("0");
		submitSubCategoryForm();
	}
}

function submitTimeInTransit(time){
	$("#categoryFilterform #pageNum").val(1);
	$("#categoryFilterform #timeInTransit").val(time);
	submitSubCategoryForm();
}
	
function removekeyword(index){
	$("#categoryFilterform #filterkeywords_"+index).remove();
	$("#categoryFilterform #pageNum").val(1);
	submitSubCategoryForm();
}
	
function removeFilter(id){
	$("#categoryFilterform #"+id).prop("checked",false);
	submitSubCategoryForm();
}

function filterkeyword(){
	var keyword = $("#categoryFilterform #filterkeyword").val();
	if(keyword != "" && keyword.trim().toLowerCase().indexOf('script') < 0){
		$("#categoryFilterform #pageNum").val(1);
		var keywords = keyword.trim().replace("/"," ").split(" ");
		for(var i=0,len=keywords.length;i<len;i++){
			$("#categoryFilterform .pagingtop").before("<input type='hidden' name='filterkeywords' value='"+keywords[i].trim()+"'/>");
		}
		submitSubCategoryForm();
	}
}
	
function clearAllFilters(){
	$("#categoryFilterform input[name='filter']").each(function() {
		$(this).prop("checked",false);
	});
	
	$("#categoryFilterform input[name='filterkeywords']").each(function() {
		$(this).remove();
	});
	
	submitSubCategoryForm();
}
	
function submitSubCategoryForm(){
	var url = STORE_NAME + "/catalog/srhcategory.cz?"+$("#categoryFilterform #pageNum").val()+"/"+$("#categoryFilterform #displayCount").val()+"/"+$("#categoryFilterform #sortBy").val()+"/"+$("#categoryFilterform #sortBy1").val();
	url += "/"+$("#categoryFilterform #categoryId").val()+"/"+$("#categoryFilterform #subCateId").val()+"/"+$("#categoryFilterform #zipcode").val()+"/"+$("#categoryFilterform #timeInTransit").val();
	$("#categoryFilterform input[name='filter']").each(function() {
		if($(this).prop('checked')){
			url += "/"+$(this).val();
		}
	});
	
	var keywords = document.getElementsByName("filterkeywords");
	if(keywords.length > 0){
		url += "&";
		for(var i=0;i<keywords.length;i++){
			if(i == 0){
				url += keywords[i].value;
			} else {
				url += "/"+keywords[i].value;
			}
		}		
	}
	$("#categoryFilterform").attr('action',url); 
	$("#categoryFilterform").submit();
}
	
function shrinkArrow(obj,id){
	var cobj = document.getElementById(id);
	if(cobj){
		if(cobj.style.display == ""){
			obj.src="//www.promodirect.com/staticfile/images/arrow_down.png";
			cobj.style.display = "none";
		}else{
			obj.src="//www.promodirect.com/staticfile/images/arrow_up.png";
			cobj.style.display = "";
		}
	}
}
	
function emailUs(){
	var email = $("#emailUsForm #cuemail").val();
	var message = $("#emailUsForm #cumessage").val();
	if(email == "" || message == ""){
		alert("Please input required information");
	} else if (validateEmail(email)) {
		$.ajax({
			type : "post",
			url : CONTENT_PATH + "/misc/emailUs.cz",
			data: {"email":email,"message":message},
			success : function(data) {
				alert(data);
				$("#emailUsForm").hide();
			}
		});
		ga('send', 'event', 'Button', 'Need Help', 'Email us', 1);
	}
}

function addToWishList(productId){
	var islogon = $("#ToShoppingCartForm #islogon").val();
	var url = STORE_NAME + "/catalog/product.jsp?product_id="+productId;
	if(islogon == "0"){
		location.href = STORE_NAME + "/logon.jsp?forwardUrl="+url+"&addToWishList=1";
	} else {
		$.ajax({
			type : "post",
			url : CONTENT_PATH + "/misc/addToWishList.cz",
			data: {"productId": productId},
			success : function(data) {
				if(data == "S" || data == "U"){
					alert("Add to Favorites Successful!");
					if(data == "S"){
						$(".wishListCount").text(parseInt($(".wishListCount").text())+1);
					}
				} else if(data == "F"){
					alert("Add to Favorites Failed!");
				} else {
					alert("Please Login!");
					location.href = STORE_NAME + "/logon.jsp?forwardUrl="+url+"&addToWishList=1";
				}
			}
		});
	}
}

function validateReviewForm() {
	var obj = document.WriteReviewForm;
	var reg2 = /^\s*?$/;
	var name = obj.name.value;
	if (reg2.test(name) == true) {
		alert('Name is Required');
		return;
	}
	
	var city = obj.city.value;
	if (reg2.test(city) == true) {
		alert('Location is Required');
		return;
	} 
	
	var email = obj.email.value;
	if(!validateEmail(email)){
		alert('Invalid Email Address');
		return;
	}
	
	var verifyCode = obj.verifyCode.value;
	if (reg2.test(verifyCode) == true) {
		alert('Verify Code is Required');
		return;
	}
	
	var message = obj.message.value;
	if (reg2.test(message) == true) {
		var rate = obj.rate.value;
		if(rate == '0'){
			alert("You must rate or write review for this item! ");
			return;
		}
	}
	
	obj.submit();
}

function checkRate(rate){
	var new_rate;
	var old_rate = document.WriteReviewForm.rate.value;
	if(old_rate == '' || old_rate != rate){
		new_rate = rate;
	} else {
		new_rate = parseInt(rate) - 1;
	}
	document.WriteReviewForm.rate.value = new_rate;
	$("#WriteReviewForm #rateBox #rateImg").attr("src","//www.promodirect.com/staticfile/images/"+new_rate+"star.jpg");
}

function delAddr(id){
	if(confirm("Are you sure to delete it?")){
		location.href = CONTENT_PATH + "/customer/account/deladdr.cz?address_id="+id;		
	}
}

function validAddress(id){
	var flag = false;
	var address = $("#"+id+" input[name='address']").val();
	var city = $("#"+id+" input[name='city']").val();
	var state = $("#"+id+" select[name='state']").val();
	var postalCode = $("#"+id+" input[name='postalCode']").val();
	if(address != "" && city != "" && state != "" && postalCode != ""){
		flag = true;
	}
	return flag;
}

function sameAddress(id){
	if($("#m_firstName").length > 0){
		$("#"+id+" input[name='firstName']").val($("#m_firstName").val());
		$("#"+id+" input[name='lastName']").val($("#m_lastName").val());
		$("#"+id+" input[name='company']").val($("#m_company").val());
		$("#"+id+" input[name='address']").val($("#m_address").val());
		$("#"+id+" input[name='address2']").val($("#m_address2").val());
		$("#"+id+" input[name='city']").val($("#m_city").val());
		$("#"+id+" select[name='state']").val($("#m_state").val());
		$("#"+id+" input[name='postalCode']").val($("#m_postalCode").val());
		$("#"+id+" input[name='telephone']").val($("#m_telephone").val());
		$("#"+id+" input[name='asDefault']").attr("checked",'true');
	}
}

function addAddress(id){
	var flag = true;
	if((id == 'addMailAddressForm' && $('#addMailAddressForm input:radio[name=typeId]:checked').val() == 0) || id != 'addMailAddressForm'){
		flag = validAddress(id);
	}
	if(!flag){
		alert("Please enter invalid value for all required fields.");
		return;
	}
	
 	$.ajax({
		type : "post",
		url : CONTENT_PATH + "/customer/account/newaddr.cz",
		data:$("#"+id).serialize(),
		dataType:"json",
		success : function(data) {
			callback(data,'address.jsp');
		}
	});
}

function editAddress(id){
	if(!validAddress(id)){
		alert("Please enter invalid value for all required fields.");
		return;
	}
	
 	$.ajax({
		type : "post",
		url : CONTENT_PATH + "/customer/account/updaddr.cz",
		data:$("#"+id).serialize(),
		dataType:"json",
		success : function(data) {
			callback(data,'address.jsp');
		}
	});
}

function callback(data,page){
	if(data.messsage == "302"){
		alert("Please Login!");
		window.location.href = STORE_NAME + "/logon.jsp?forwardUrl="+STORE_NAME+"/customer/account/"+page;
	} else {
		if(data.messsage == "S"){
			alert("Successfully");
			window.location.href = STORE_NAME + "/customer/account/"+page;
		} else {
			alert(data.messsage);
		}
	}
}

function showAddressBox(id){
	$(".addressBox").hide();
	$("#"+id).show();
	
}

function hideAddressBox(id){
	$("#"+id).hide();
}

function reorder(statusId,orderItemId,page) {
	if (statusId != 1) {
		alert("Sorry, you can't reorder it. ");
	}else{
		$.ajax({
			type : "post",
			url : CONTENT_PATH + "/misc/checkreorder.cz",
			data: {"orderItemId":orderItemId},
			dataType:"json",
			success : function(data) {
				if(data.state == '302'){
					alert("Please Login!");
					window.location.href = STORE_NAME + "/logon.jsp?forwardUrl="+page;
				} else {
					if(data.state == "F"){
						alert("Sorry, you can't reorder it. ");
					} else {
						location.href = STORE_NAME + "/misc/reorder.cz?orderItemId="+orderItemId;
					}
				}
			}
		});
	}
}

function uploadArt(){
	var accept = false;
	var name = $.trim($("#updartworkform #theFile").val());
	if(name != ""){
		var suffix0 = name.substring(name.length-3,name.length).toLowerCase();
		var suffix1 = name.substring(name.length-4,name.length).toLowerCase();
		var suffix2 = name.substring(name.length-5,name.length).toLowerCase();
		if(".ai" == suffix0 || ".eps" == suffix1 || ".pdf" == suffix1 || ".jpg" == suffix1 ||
		    ".png" == suffix1 || ".gif" == suffix1 || ".tiff" == suffix2 || ".jpeg" == suffix2){
			accept = true;
		}
	} 
	
	if(!accept){
		alert("Pealse upload the file we accept! ");
		return;
	} else {
		$("#updartworkform").submit();
	}
}

function putCartItemId(index){
	var itemId = $("#editProductForm_"+index+" input[name='order_item_id']").val();
	updateCookie("promo_order_itemId",itemId,1*60);
	$("#editProductForm_"+index).submit();
}

function showhideEbooksPopup(id, val, ebooksId) {
	document.getElementById(id).style.visibility = val;
	document.getElementById("ebooksId").value = ebooksId;
}

function submitEbooksPopup() {
	var name = document.getElementById("ebooksname").value;
	var email = document.getElementById("ebooksemail").value;
	var ebooksId = document.getElementById("ebooksId").value;
	if (validateEmail(email) && name != '' && ebooksId > 0) {
		jQuery.get(CONTENT_PATH + "/customer/ebookspopup.cz", {
			email : email,
			name : name,
			ebooksId : ebooksId
		}, null);
		showhideEbooksPopup('ebookpop', 'hidden', 0);
		showhideEbooksPopup('ebooksthanku', 'visible', 0);
	}
}
function artWorkChange(){
	var path = $.trim($("#uploadArtForm #theFile").val());
	var test1 = path.lastIndexOf("/");  
	var test2 = path.lastIndexOf("\\");
	var test= Math.max(test1, test2)
	if(test >= 0){
		path = path.substring(test + 1);
	}  
	if(path != ""){
		var suffix0 = path.substring(path.length-3,path.length).toLowerCase();
		var suffix1 = path.substring(path.length-4,path.length).toLowerCase();
		var suffix2 = path.substring(path.length-5,path.length).toLowerCase();
		if(".ai" == suffix0 || ".eps" == suffix1 || ".pdf" == suffix1 || ".jpg" == suffix1 
		   || ".png" == suffix1 || ".gif" == suffix1 || ".tiff" == suffix2 || ".jpeg" == suffix2){
			$("#uploadArtForm #filename").text(path);
		}else{
			alert("Pealse upload the file we accept! ");
			$("#uploadArtForm #theFile").val("")
		}
	} 
}

function uploadArtWork(){
	if($("#uploadArtForm #theFile").val() != ""){
		$("#uploadArtForm").submit();
	}
}

function formatImage(img,size){
	var width = img.width;
	var height = img.height;
	var scale = width / height;
	if(scale > 1) {
		img.width = width > (size-2) ? (size-2) : width;
	} else {
		img.height = height > (size-2) ? (size-2) : height;
	}
	if (img.height < (size-2)) {img.style.marginTop = (size - 2 - img.height)/2+"px";};
}

function submitOrder(){
	$("#OrderForm #submita").css("cursor", "not-allowed");
	$("#OrderForm #submita").removeAttr('href');
	if($("#OrderForm #billingId").val() == '0'){
		alert("Billing Address is required");
		$("#OrderForm #submita").css("cursor", "pointer");
		$("#OrderForm #submita").attr("href","javascript:submitOrder();");
	} else {
		if($("#OrderForm #shippingId").val() == '0' && $("#OrderForm #stype").val() != '1'){
			alert("Shipping Address is required");
			$("#OrderForm #submita").css("cursor", "pointer");
			$("#OrderForm #submita").attr("href","javascript:submitOrder();");
		} else {
			if($("#OrderForm #typeId").val() == '1'){
				if($("#OrderForm #paymentId").val() > 0){
					$("#OrderForm #savePayment").val("savePayment");
					$("#OrderForm").submit();
				} else {
					alert("Payment Method is required");
					$("#OrderForm #submita").css("cursor", "pointer");
					$("#OrderForm #submita").attr("href","javascript:submitOrder();");
				}
			} else{
				if(validatePayment()){
					$("#OrderForm #savePayment").val("savePayment");
					$("#OrderForm").submit();
				} else {
					$("#OrderForm #submita").css("cursor", "pointer");
					$("#OrderForm #submita").attr("href","javascript:submitOrder();");
				}
			}
		}
	}
}

function updateshippingdiv(){
	if($("#OrderForm #shippingType").prop('checked')){
		$("#OrderForm #stype").val("1");
		$("#OrderForm #shippingId").val(0);
		$("#OrderForm #updateshipping").hide();
		$("#OrderForm #shippingdetaildiv").html($("#OrderForm #billingdetaildiv").html());
	} else {
		var dsaddressId = $("#OrderForm #dsaddressId").val();
		$("#OrderForm #stype").val("0");
		$("#OrderForm #shippingId").val(dsaddressId);
		if(dsaddressId != '0'){
			$("#OrderForm #saveAddress").val("updateShippingAddress");
			$("#OrderForm").submit();
		} else {
			$("#OrderForm #shippingdetaildiv").html("");
		}
	}
}

function changeAddress(saveValue,idname,idvalue){
	$("#OrderForm #saveAddress").val(saveValue);
	$("#OrderForm #"+idname).val(idvalue);
	$("#OrderForm").submit();
}
		
function setSaveParameter(saveValue){
	$("#OrderForm #saveAddress").val(saveValue);
	$("#OrderForm").submit();
}

function changePaymentMethod(){
	var tmp = document.ShoppingProfileForm.paymentTerm.options[document.ShoppingProfileForm.paymentTerm.selectedIndex].value;
	if(tmp=='Prepaid-Credit Card'){
 		$("#OrderForm .isCreditCard").show();
 		$("#OrderForm .upi").show();
 		$("#OrderForm .billingInstruction").hide();
 	}else{
 		$("#OrderForm .isCreditCard").hide();
 		$("#OrderForm .upi").hide();
 		$("#OrderForm .billingInstruction").show();
 	}
}

function displayformwithid(formid){
	var obj = $("#"+formid);	
	if(obj.is(":hidden")){
		$("#OrderForm .existAddress").hide();
		$("#OrderForm .addressbox").hide();
		obj.show();
	}else{
		obj.hide();
	}
}

function changePayment(){
	if($("#OrderForm #paymentType:checked").val()){
		$("#OrderForm #paymentItem").show();
		$("#OrderForm #paymentBtn").show();
		$("#OrderForm #newpayment").hide();
		$("#OrderForm #typeId").val("1");
		$("#OrderForm #paymentId").val($("#OrderForm #dpaymentId").val());
	} else {
		$("#OrderForm #paymentItem").hide();
		$("#OrderForm #paymentBtn").hide();
		$("#OrderForm #newpayment").show();
		$("#OrderForm #updatepayment").hide();
		$("#OrderForm #typeId").val("0");
		$("#OrderForm #paymentId").val("0");
	}
}

function validatePayment() {
	var flag = true;
	if ($("#OrderForm #paymentTerm").val() == "Prepaid-Credit Card") {
		if ($("#OrderForm #paymentType").val() == "" || 
			$("#OrderForm #cardNo").val() == "" ||
			$("#OrderForm #expireMonth").val() == "" ||
			$("#OrderForm #expireYear").val() == "" ||
			$("#OrderForm #cardCode").val() == "" ||
			$("#OrderForm #payerName").val() == "" ||
			$("#OrderForm #paddress").val() == "" ||
			$("#OrderForm #pcity").val() == "" ||
			$("#OrderForm #pstate").val() == "" ||
			$("#OrderForm #pzipCode").val() == "") {
			flag = false;
		}
		if (!flag) {
			alert("Please fill all the required fields.");
		}
	}

	return flag;
}

function checkArtWorkType(){
	var name = $.trim($("#ImprintOptionForm #theFile").val());
	if(name != ""){
		var suffix0 = name.substring(name.length-3,name.length).toLowerCase();
		var suffix1 = name.substring(name.length-4,name.length).toLowerCase();
		var suffix2 = name.substring(name.length-5,name.length).toLowerCase();
		if(".ai" == suffix0 || ".eps" == suffix1 || ".pdf" == suffix1 || ".jpg" == suffix1 || ".png" == suffix1 || ".gif" == suffix1 || ".jpeg" == suffix2){
			$("#ImprintOptionForm").submit();
		}else{
			alert("Pealse upload the file we accept! ");
		}
	} 
}

function moveArtWork(){
	var fileName = $("#ImprintOptionForm #fileName").val();
	var artType = document.ImprintOptionForm.artType.value;
	if(fileName == "" && artType == "2"){
		alert("Please choose a artwork.");
		return;
	}
	$.ajax({
		type : "post",
		url : CONTENT_PATH + "/misc/imprintopt.cz",
		data: $("#ImprintOptionForm").serialize(),
		dataType:"json",
		success : function(data) {
			if(data.state=="302"){
				alert("Please Login!");
				window.location.href = STORE_NAME + "/logon.jsp?forwardUrl="+STORE_NAME+"/order/imprintopt.jsp?lineId="+$("#ImprintOptionForm #lineId").val();
			} else {
				if(data.state=="F"){
					alert("Failed");
				} else {
					window.location.href = STORE_NAME + "/transaction/order/orderconfirm.jsp?order_id="+$("#ImprintOptionForm #orderId").val();
				}
			}
		}
	});
}
	
function chooseArtType(obj){
	if($(obj).val() != "2"){
		$("#ImprintOptionForm #fileName").val("");
		$("#ImprintOptionForm #fname").text("No file chosen");
		$("#ImprintOptionForm #uploadBox").html("<br>Display uploaded file here");
	}
}