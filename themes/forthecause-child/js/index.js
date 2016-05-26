function change_image() {
	var windowWidth = jQuery(window).width();
	jQuery('.slider').css({'width':windowWidth});
	if(jQuery(window).width() < 479) {
		jQuery(".slider .one img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_1_IT-1.jpg");
		jQuery(".slider .two img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_2_IT-1.jpg");
		jQuery(".slider .three img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_3_IT-1.jpg");
		jQuery(".slider .four img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_4_IT-1.jpg");
		jQuery(".slider .five img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_5_IT-1.jpg");
		jQuery(".slider .six img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_6_IT_V1-1.jpg");
		jQuery(".slider .seven img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_7_IT-1.jpg");
		jQuery(".slider .one-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_1_EN-1.jpg");
		jQuery(".slider .two-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_2_EN-1.jpg");
		jQuery(".slider .three-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_3_EN-1.jpg");
		jQuery(".slider .four-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_4_EN-1.jpg");
		jQuery(".slider .five-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_5_EN-1.jpg");
		jQuery(".slider .six-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_6_EN-1.jpg");
		jQuery(".slider .seven-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/640X620_slide_7_EN-1.jpg");
		jQuery(".popup-img img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/04/UP-10-festa-mamma_iphone.jpg");
		jQuery(".fast-registration .left-column").hide();
		jQuery(".fast-registration .right-column").hide();
		}
		
	if( (jQuery(window).width() > 479) && (jQuery(window).width() < 999) ) {	
		jQuery(".slider .one img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_6__ITA_V1-1.jpg");
		jQuery(".slider .two img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_2_ITA-1.jpg");
		jQuery(".slider .three img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_3__ITA-1.jpg");
		jQuery(".slider .four img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_4__ITA-1.jpg");
		jQuery(".slider .five img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_5_ITA-1.jpg");
		jQuery(".slider .six img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_6_ITA_V2-1.jpg");
		jQuery(".slider .seven img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/1536x1080_slide_7_ITA-1.jpg");
		jQuery(".slider .one-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_1_EN.jpg");
		jQuery(".slider .two-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_2_EN.jpg");
		jQuery(".slider .three-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_3_EN.jpg");
		jQuery(".slider .four-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_4_EN.jpg");
		jQuery(".slider .five-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_5_EN.jpg");
		jQuery(".slider .six-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_6_EN.jpg");
		jQuery(".slider .seven-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/1536x1080_slide_7_EN.jpg");
		jQuery(".fast-registration .left-column img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/04/Tablet-left-image-320x540.jpg");
		jQuery(".fast-registration .right-column").hide();
	}
	if(jQuery(window).width() > 999) {
		jQuery(".slider .one img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_7_ITA-2.jpg");
		jQuery(".slider .two img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_2_ITA-1.jpg");
		jQuery(".slider .three img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_3_ITA-2.jpg");
		jQuery(".slider .four img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_4_ITA_V1-1.jpg");
		jQuery(".slider .five img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_5_ITA-2.jpg");
		jQuery(".slider .six img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_6_ITA_V1-2.jpg");
		jQuery(".slider .seven img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/01/2000X540_slide_7_ITA-1-1.jpg");
		jQuery(".slider .one-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_1_EN-1.jpg");
		jQuery(".slider .two-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_2_EN.jpg");
		jQuery(".slider .three-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_3_EN.jpg");
		jQuery(".slider .four-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_4_EN.jpg");
		jQuery(".slider .five-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_5_EN.jpg");
		jQuery(".slider .six-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_6_EN.jpg");
		jQuery(".slider .seven-eng img").attr("src","https://www.glielementi.it/wp-content/uploads/2016/02/2000X540_slide_7_EN.jpg");
		jQuery(".fast-registration .right-column").show();
	}
	jQuery(".one a").attr("href", "https://www.glielementi.it/it/shop-online/");
	jQuery(".seven a").attr("href", "https://www.glielementi.it/it/shop-online/");
	if( (jQuery(window).width() < 1000) ){
	var pageHeight = jQuery(window).height() - jQuery('#top-menu').height() - 20;
        jQuery('body.show-nav section.menus').css('height', pageHeight + 'px');
	}
	
	if ( jQuery('html').attr('lang') == 'en-US' ) {
		jQuery( ".mc4wp-checkbox.mc4wp-checkbox-woocommerce input" ).attr('checked', false);
		//if( jQuery(.yith-wacp-content .actions).is(':visible') ) {
		jQuery("#yith-wacp-popup.open .yith-wacp-main .yith-wacp-content .actions .button.go-cart").removeAttr("href");
		jQuery("#yith-wacp-popup.open .yith-wacp-main .yith-wacp-content .actions .button.go-cart").attr("href", "https://www.glielementi.it/en/cart-2/");
		//}
	}
	jQuery( "#wfg-item-1519" ).attr('checked', true);
}
setInterval("change_image();",500);

jQuery(document).ready(function($) {

    if(localStorage.getItem('popState') != 'shown'){
		if ( $('html').attr('lang') == 'en-US' ) {
        $("#mc4wp-form-1").hide();
		
		$('.popup-modal').hide();
		$('#cookie-policy').show();
		}
		else {
		$('#cookie-policy').show();
		/*$("#mc4wp-form-1").show();
		$('.img-popup').show();
		$('.popup-modal').show();*/
		$(".page-id-1504 #mc4wp-form-1").hide();
		$('.page-id-1504 .popup-modal').hide();
		$(".postid-2648 #mc4wp-form-1").hide();
		$('.postid-2648 .popup-modal').hide();
		$(".postid-2721 #mc4wp-form-1").hide();
		$('.postid-2721 .popup-modal').hide();
		$('.postid-3407 .popup-modal').hide();
		$(".postid-3407 #mc4wp-form-1").hide();
		$(".page-id-3530 .popup-modal").hide();
		$(".page-id-3530 #mc4wp-form-1").hide();
		$(".page-template-template-fullwidth #mc4wp-form-1").hide();
		$('.page-template-template-fullwidth .popup-modal').hide();
        localStorage.setItem('popState','shown')
		}
    }
	$('.button-policy').click(function(e) {
		$('#cookie-policy').hide();
	});
    $('.icon-close').click(function(e) // You are clicking the close button
    {
        $('#mc4wp-form-1').hide();
		$('.img-popup').hide();
		$('.popup-modal').hide();	// Now the pop up is hiden.
    });

    $('.popup-modal').click(function(e) 
    {
        $('#mc4wp-form-1').hide(); 
		$('.img-popup').hide();
		$('.popup-modal').hide();
    });
});

jQuery(document).ready(function ($) {

	$('.page-id-601 .img-popup').show();
	$('.page-id-601 .popup-modal').show();
	
	$('html').on('touchstart', function(e){
		e.stopPropagation()
	});
	$('form').attr('autocomplete', 'off');
	$('#billing_postcode').attr('value', '');
	
	$( ".payment_method_cod input" ).prop('checked', false);

	$('.payment_method_cod').click(function() {
		$( ".payment_method_cod input" ).attr('checked','checked');
		$('.payment_box.payment_method_cod').show();
		$('.payment_box.payment_method_braintree').hide();
		$('.payment_box.payment_method_paypal').hide();
	});
	$('.payment_method_paypal').click(function() {
		$( ".payment_method_paypal input" ).attr('checked','checked');
		$('.payment_box.payment_method_paypal').show();
		$('.payment_box.payment_method_cod').hide();
		$('.payment_box.payment_method_braintree').hide();
	});
	$('.payment_method_braintree').click(function() {
		$( ".payment_method_braintree input" ).attr('checked','checked');
		$('.payment_box.payment_method_braintree').show();
		$('.payment_box.payment_method_paypal').hide();
		$('.payment_box.payment_method_cod').hide();
	});
	
	$('.shipping_address').hide();
	$('.showaddress').click(function(event) {
	event.preventDefault();
	$('.shipping_address').toggle();
	
	});
});

jQuery(document).ready(function($) {

	$(document).scroll(function () {
    var scroll = $(document).scrollTop();


    if (scroll >= 5) {
	
		//$("#menu-item-907").show();
		//$('#top-menu').addClass('sticky-top');
		//$('.logo').addClass('top');
		//$('#header').addClass('sticky');
		//$('#sidebar').addClass('top');
	}
	else {
		//$("#menu-item-907").hide();
		//$('#top-menu').removeClass('sticky-top');
		//$('.logo').removeClass('top');
		//$('#header').removeClass('sticky');
		//$('#sidebar').removeClass('top');
	}
	});
	
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
		
    });
	
	$("#verticalMenu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	$(".has-sub > a").click(function(event) {
		$(".active ul li").removeClass("active");
	});
	$(".category.tab.viso a").on("click", function() {
	
		$(".has-sub.viso ul").slideDown();
		$(".has-sub.corpo ul").slideUp();
	
	});
	$(".category.tab.corpo a").on("click", function() {
	
		
		$(".has-sub.viso ul").slideUp();
		$(".has-sub.corpo ul").slideDown();
		
	
	});
	$(".category.tab.bagno a").on("click", function() {
	
		
		$(".has-sub.viso ul").slideUp();
		$(".has-sub.corpo ul").slideUp();
		
	
	});
	$(".category.tab.all a").on("click", function() {
	
		
		$(".has-sub.viso ul").slideUp();
		$(".has-sub.corpo ul").slideUp();
		
	
	});
	$('.product_cat-trattamento-anti-eta').attr('id', 'trattamento-anti-eta');

	
$("#top-nav #menu-item-864 a").contents().filter(function () {
     return this.nodeType === 3; 
}).remove();

	 $(document).scroll(function () {
    var scroll = $(document).scrollTop();


    if ( scroll >= 1000) {
	
	$(".side-menu li a.active").removeClass("active");
		$(this).addClass("active");
	}
	});
	

	$(".tabs-menu li").hover( function() {
		$(this).toggleClass("hover");
	});
	
	$(".side-menu li a").click(function() {
		$("a.active").removeClass("active");
		$(this).addClass("active");
		
        
	});

$(document).ready(function(){
	$("#verticalMenu > ul > li > a").click(function(){
		
		$("#verticalMenu ul ul").slideUp();
		
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})

});

jQuery(document).ready(function($) {
	//$('#menu-item-789 a:contains("Cart")').html('<img src="https://www.glielementi.it/wp-content/uploads/2015/10/shoping-bag-256.png"/>');
	$('#menu-item-2480 a:contains("Cart")').html('<img src="https://www.glielementi.it/wp-content/uploads/2015/10/shoping-bag-256.png" width="20" height="20" />');
});

jQuery(document).ready(function($) {

$('#login2').on('click', function(e){
  e.stopPropagation();
  $(".popup").show();
  $(".login").show();
  $('.register').hide();
  
  $('.popup').on('click', function(e){
  $('.login').hide();
  $('.popup').addClass('fadeout');
  $('.popup').hide();
});
});

$('#register2').on('click', function(e){
  e.stopPropagation();
  $(".popup").show();
  $(".register").show();
  $('.login').hide();
  
});
$('#login3').on('click', function(e){
  e.stopPropagation();
  $(".popup").show();
  $(".login").show();
  $('.register').hide();
    
  $('.popup').on('click', function(e){
  $('.login').hide();
  $('.popup').addClass('fadeout');
  $('.popup').hide();
});
});


$('#register3').on('click', function(e){
  e.stopPropagation();
  $(".popup").show();
  $(".register").show();
  $('.login').hide();
  
  $('.popup').on('click', function(e){
  $('.register').hide();
  $('.popup').addClass('fadeout');
  $('.popup').hide();
});
});


$("#menu-item-830 a").attr("id","register");
$("#menu-item-2357 a").attr("id","register");
$('#register').on('click', function(e){
	e.stopPropagation();
	$(".popup").show();
	$(".popup").removeClass('fadeout');
	$(".login").show();
  
	$('.popup').on('click', function(e){
	$('.login').hide();
	$('.popup').addClass('fadeout');
	$('.popup').hide();
	});
	
	$('.close-login img').on('click', function() {
	$(".popup").addClass('fadeout');
	$('.login').hide();
	$('.register').hide();
	$('.popup').hide();
	});
});

//Start newsletter modal


//$("#menu-item-2608 a").attr("id","register-newsletter");
//$("#menu-item-2358 a").attr("id","register-newsletter");

jQuery('#register-newsletter').click( function(e){
		  e.stopPropagation();
		  $('.popup-modal').show();
		  $(".single.single-product .popup-modal").show();
		  $(".single.single-product .mailchimp-popup").show();
		  $(".archive.post-type-archive .popup-modal").show();
		  $(".archive.post-type-archive .mailchimp-popup").show();
		  $(".page.page-template-template-fullwidth .popup-modal").show();
		  $(".page.page-template-template-fullwidth .mailchimp-popup").show();
		  $(".page-template-template-contact .popup-modal").show();
		  $(".page-template-template-contact .mailchimp-popup").show();
		  $('.mc4wp-form.mc4wp-form-1313.mc4wp-form-basic').show();
		  $(".mc4wp-form.mc4wp-form-1313.mc4wp-form-basic").removeClass('fadeout');

		});

if( $('.mc4wp-response .mc4wp-alert p').length ) {

	$(".popup-modal").show();
	$("#mc4wp-form-1").show();
	$('.img-popup').show();

}


/*$('.popup-modal').on('click', function(e){
  $('.mc4wp-form.mc4wp-form-1313.mc4wp-form-basic').hide();
  $('.popup').hide();
});*/

$( "#mc4wp-form-1" ).append( "<span class='close-popup'><a class='icon-close'><img src='https://www.glielementi.it/wp-content/uploads/2016/01/1444064437_Danger.png' width='16' height='16' /></a></span>" );
$( ".img-popup" ).append( "<span class='close-popup'><a class='icon-close'><img src='https://www.glielementi.it/wp-content/uploads/2016/01/1444064437_Danger.png' width='16' height='16' /></a></span>" );


$('.icon-close').on('click', function() {
	$("#mc4wp-form-1").addClass('fadeout');
	$('.img-popup').hide();
	$(".popup-modal").hide();
});


//End newsletter modal

if ( $('html').attr('lang') == 'it-IT' ) {
$("a.italian").show();
var keywords = ["Spedizione gratuita per acquisti superiori a 50 &euro;", "Pagamento con carta di credito, Paypal o alla consegna gratuito", "2 campioni gratuiti per ogni ordine", "Consegna entro 24/48 ore dalla conferma dell'ordine"];
var count = 1;
setInterval(function(){    
    $("a.italian").fadeOut(500, function(){        
        $(this).html(keywords[count]);        
        count++;        
        if(count == keywords.length)            
            count = 0;        
        $(this).fadeIn(500);    
    });
}, 3000);
}

if ( $('html').attr('lang') == 'en-US' ) {
	$("#codice_fiscale").attr("value", "0000");
	$(".text-slideshow a.italian").hide();
	$(".english").show();
	var keywords2 = ["Delivery within 4 working days from order confirmation", "Secure payment by credit card or paypal", "2 products samples free with every order"];
	var count2 = 1;
	setInterval(function(){    
		$("a.english").fadeOut(500, function(){        
			$(this).html(keywords2[count2]);        
			count2++;        
			if(count2 == keywords2.length)            
				count2 = 0;        
			$(this).fadeIn(500);    
		});
	}, 3000);
}
if ( $('html').attr('lang') == 'en-US' ) {
	$(".payment_methods methods .payment_method_cod").hide();
	$("#codice_fiscale_field").hide();
	$("#yith-wacp-popup .yith-wacp-main .yith-wacp-content .actions .button.go-cart").removeAttr("href");
	$(".woocommerce-message .button.wc-forward").removeAttr("href");
	$(".wc-proceed-to-checkout .checkout-button.button.alt.wc-forward").removeAttr("href");
	$(".wc-proceed-to-checkout .checkout-button.button.alt.wc-forward").attr("href", "https://www.glielementi.it/en/checkout/");
	$("#yith-wacp-popup .yith-wacp-main .yith-wacp-content .actions .button.go-cart").attr("href", "https://www.glielementi.it/en/cart-2/");
	$(".woocommerce-message .button.wc-forward").attr("href", "https://www.glielementi.it/en/cart-2/");
}
if ( $('html').attr('lang') == 'it-IT' ) {
	$('.button.viewDetails:contains("Read more")').html('Leggi');
}
$('.basilicata').hide(); $('.calabria').hide(); $('.emilia-romagna').hide(); $('.ravenna').hide(); $('.forli').hide();  $('.rimini').hide();
$('.bologna').hide(); $('.modena').hide(); $('.parma').hide();  $('.friuli-venezia').hide(); $('.udine').hide(); $('.lazio').hide();
$('.roma').hide(); $('.viterbo').hide(); $('.latina').hide(); $('.liguria').hide(); $('.savona').hide(); $('.spezia').hide(); $('.lombardia').show();
$('.como').hide(); $('.varese').hide();  $('.sondrio').hide(); $('.pavia').hide(); $('.milano').show(); $('.brescia').hide();  $('.bergamo').hide();
$('.monza').hide(); $('.lodi').hide(); $('.marche').hide();  $('.macerata').hide(); $('.ancona').hide(); $('.piemonte').hide();
$('.alessandria').hide(); $('.novara').hide(); $('.torino').hide(); $('.cuneo').hide(); $('.varcelli').hide(); $('.san-marino').hide();
$('.toscana').hide(); $('.firenze').hide(); $('.lucca').hide();  $('.massa-carrara').hide(); $('.veneto').hide(); $('.vicenza').hide();

$('.punti-vendita-page .basilicata').show(); $('.punti-vendita-page .calabria').hide(); $('.punti-vendita-page .emilia-romagna').show(); $('.punti-vendita-page .ravenna').show(); $('.punti-vendita-page .forli').show();  $('.punti-vendita-page .rimini').show();
$('.punti-vendita-page .bologna').show(); $('.punti-vendita-page .modena').show(); $('.punti-vendita-page .parma').show();  $('.punti-vendita-page .friuli-venezia').show(); $('.punti-vendita-page .udine').show(); $('.punti-vendita-page .lazio').show();
$('.punti-vendita-page .roma').show(); $('.punti-vendita-page .viterbo').show(); $('.punti-vendita-page .latina').show(); $('.punti-vendita-page .liguria').show(); $('.punti-vendita-page .savona').show(); $('.punti-vendita-page .spezia').show(); $('.punti-vendita-page .lombardia').show();
$('.punti-vendita-page .como').show(); $('.punti-vendita-page .varese').show();  $('.punti-vendita-page .sondrio').show(); $('.punti-vendita-page .pavia').show(); $('.punti-vendita-page .milano').show(); $('.punti-vendita-page .brescia').show();  $('.punti-vendita-page .bergamo').show();
$('.punti-vendita-page .monza').show(); $('.punti-vendita-page .lodi').show(); $('.punti-vendita-page .marche').show();  $('.punti-vendita-page .macerata').show(); $('.punti-vendita-page .ancona').show(); $('.punti-vendita-page .piemonte').show();
$('.punti-vendita-page .alessandria').show(); $('.punti-vendita-page .novara').show(); $('.punti-vendita-page .torino').show(); $('.punti-vendita-page .cuneo').show(); $('.punti-vendita-page .varcelli').show(); $('.punti-vendita-page .san-marino').show();
$('.punti-vendita-page .toscana').show(); $('.punti-vendita-page .firenze').show(); $('.punti-vendita-page .lucca').show();  $('.punti-vendita-page .massa-carrara').show(); $('.punti-vendita-page .veneto').show(); $('.punti-vendita-page .vicenza').show();



$('.btn-option').on('click', function() {

	if( ($('#location-select option:selected').text() == 'Regione' ) && ($('#location-select2 option:selected').text() == 'Provincia' )) {
	$('.punti-vendita-page .basilicata').show(); $('.punti-vendita-page .calabria').hide(); $('.punti-vendita-page .emilia-romagna').show(); $('.punti-vendita-page .ravenna').show(); $('.punti-vendita-page .forli').show();  $('.punti-vendita-page .rimini').show();
	$('.punti-vendita-page .bologna').show(); $('.punti-vendita-page .modena').show(); $('.punti-vendita-page .parma').show();  $('.punti-vendita-page .friuli-venezia').show(); $('.punti-vendita-page .udine').show(); $('.punti-vendita-page .lazio').show();
	$('.punti-vendita-page .roma').show(); $('.punti-vendita-page .viterbo').show(); $('.punti-vendita-page .latina').show(); $('.punti-vendita-page .liguria').show(); $('.punti-vendita-page .savona').show(); $('.punti-vendita-page .spezia').show(); $('.punti-vendita-page .lombardia').show();
	$('.punti-vendita-page .como').show(); $('.punti-vendita-page .varese').show();  $('.punti-vendita-page .sondrio').show(); $('.punti-vendita-page .pavia').show(); $('.punti-vendita-page .milano').show(); $('.punti-vendita-page .brescia').show();  $('.punti-vendita-page .bergamo').show();
	$('.punti-vendita-page .monza').show(); $('.punti-vendita-page .lodi').show(); $('.punti-vendita-page .marche').show();  $('.punti-vendita-page .macerata').show(); $('.punti-vendita-page .ancona').show(); $('.punti-vendita-page .piemonte').show();
	$('.punti-vendita-page .alessandria').show(); $('.punti-vendita-page .novara').show(); $('.punti-vendita-page .torino').show(); $('.punti-vendita-page .cuneo').show(); $('.punti-vendita-page .varcelli').show(); $('.punti-vendita-page .san-marino').show();
	$('.punti-vendita-page .toscana').show(); $('.punti-vendita-page .firenze').show(); $('.punti-vendita-page .lucca').show();  $('.punti-vendita-page .massa-carrara').show(); $('.punti-vendita-page .veneto').show(); $('.punti-vendita-page .vicenza').show();
	}
	if($('#location-select').val() == '2') {
			$('.basilicata').show(); 
		} else {
			$('.basilicata').hide(); 
		} 
	if($('#location-select').val() == '4') {
			$('.calabria').show(); 
		} else {
			$('.calabria').hide(); 
		} 
	if( ($('#location-select').val() == '5') && ($('#location-select2 option:selected').text() == 'Provincia' )) {
			$('.emilia-romagna').show(); 
			$('.ravenna').show();
			$('.forli').show();
			$('.rimini').show();
			$('.bologna').show();
			$('.modena').show();
			$('.parma').show();
		} else {
			$('.emilia-romagna').hide();
			$('.ravenna').hide();
			$('.forli').hide();
			$('.rimini').hide();
			$('.bologna').hide();
			$('.modena').hide();
			$('.parma').hide();	
		} 
	if($('#location-select2 option:selected').text() == 'Ravenna' ) {
			$('.emilia-romagna').show(); 
			$('.ravenna').show();
        } 
	if($('#location-select2 option:selected').text() == 'Forli' ) {
			$('.emilia-romagna').show(); 
			$('.forli').show();
        }
	if($('#location-select2 option:selected').text() == 'Rimini' ) {
			$('.emilia-romagna').show(); 
			$('.rimini').show();
        }	
	if($('#location-select2 option:selected').text() == 'Bologna' ) {
			$('.emilia-romagna').show(); 
			$('.bologna').show();
        }	
	if($('#location-select2 option:selected').text() == 'Modena' ) {
			$('.emilia-romagna').show(); 
			$('.modena').show();
        }
	if($('#location-select2 option:selected').text() == 'Parma' ) {
			$('.emilia-romagna').show(); 
			$('.parma').show();
        }	
	if($('#location-select').val() == '6') {
			$('.friuli-venezia').show(); 
		} else {
			$('.friuli-venezia').hide(); 
		} 	
	if( ($('#location-select').val() == '7') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.lazio').show(); 
			$('.roma').show();
			$('.viterbo').show();
			$('.latina').show();
		} else {
			$('.lazio').hide(); 
			$('.roma').hide();
			$('.viterbo').hide();
			$('.latina').hide();
		}
	if($('#location-select2 option:selected').text() == 'Roma' ) {
			$('.lazio').show(); 
			$('.roma').show();
        }	
	if($('#location-select2 option:selected').text() == 'Viterbo' ) {
			$('.lazio').show(); 
			$('.viterbo').show();
        }		
	if($('#location-select2 option:selected').text() == 'Latina' ) {
			$('.lazio').show(); 
			$('.latina').show();
        }		
	if( ($('#location-select').val() == '8') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.liguria').show(); 
			$('.savona').show(); 
			$('.spezia').show();
		} else {
			$('.liguria').hide(); 
			$('.savona').hide(); 
			$('.spezia').hide();
		}
	if($('#location-select2 option:selected').text() == 'Savona' ) {
			$('.liguria').show(); 
			$('.savona').show();
        }	
	if($('#location-select2 option:selected').text() == 'La Spezia' ) {
			$('.liguria').show(); 
			$('.spezia').show();
        }	
	if( ($('#location-select').val() == '9') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.lombardia').show(); 
			$('.como').show(); 
			$('.varese').show(); 
			$('.sondrio').show();  
			$('.pavia').show(); 
			$('.milano').show(); 
			$('.brescia').show();   
			$('.bergamo').show(); 
			$('.monza').show();  
			$('.lodi').show(); 
		} else {
			$('.lombardia').hide(); 
			$('.como').hide(); 
			$('.varese').hide();  
			$('.sondrio').hide(); 
			$('.pavia').hide(); 
			$('.milano').hide(); 
			$('.brescia').hide();  
			$('.bergamo').hide();
			$('.monza').hide(); 
			$('.lodi').hide();
		}
	if($('#location-select2 option:selected').text() == 'Como' ) {
			$('.lombardia').show(); 
			$('.como').show(); 
        }	
	if($('#location-select2 option:selected').text() == 'Varese' ) {
			$('.lombardia').show(); 
			$('.varese').show(); 
        }	
	if($('#location-select2 option:selected').text() == 'Sondrio' ) {
			$('.lombardia').show(); 
			$('.sondrio').show(); 
        }	
	if($('#location-select2 option:selected').text() == 'Pavia' ) {
			$('.lombardia').show(); 
			$('.pavia').show(); 
        }	
	if($('#location-select2 option:selected').text() == 'Milano' ) {
			$('.lombardia').show(); 
			$('.milano').show(); 
        }	
	if($('#location-select2 option:selected').text() == 'Brescia' ) {
			$('.lombardia').show(); 
			$('.brescia').show(); 
        }
	if($('#location-select2 option:selected').text() == 'Bergamo' ) {
			$('.lombardia').show(); 
			$('.bergamo').show(); 
        }
	if($('#location-select2 option:selected').text() == 'Monza' ) {
			$('.lombardia').show(); 
			$('.monza').show(); 
        }	
	if($('#location-select2 option:selected').text() == 'Lodi' ) {
			$('.lombardia').show(); 
			$('.lodi').show(); 
        }	
	if( ($('#location-select').val() == '10') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.marche').show(); 
			$('.macerata').show(); 
			$('.ancona').show();
		} else {
			$('.marche').hide(); 
			$('.macerata').hide(); 
			$('.ancona').hide();
		}		
	if($('#location-select2 option:selected').text() == 'Macerata' ) {
			$('.marche').show(); 
			$('.macerata').show();
        }
	if($('#location-select2 option:selected').text() == 'Ancona' ) {
			$('.marche').show(); 
			$('.ancona').show();
        }		
	if( ($('#location-select').val() == '11') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.piemonte').show(); 
			$('.alessandria').show(); 
			$('.novara').show(); 
			$('.torino').show(); 
			$('.cuneo').show(); 
			$('.varcelli').show();
		} else {
			$('.piemonte').hide(); 
			$('.alessandria').hide(); 
			$('.novara').hide();  
			$('.torino').hide(); 
			$('.cuneo').hide(); 
			$('.varcelli').hide(); 
		} 
	if($('#location-select2 option:selected').text() == 'Alessandria' ) {
			$('.piemonte').show();
			$('.alessandria').show();
        } 
	if($('#location-select2 option:selected').text() == 'Novara' ) {
			$('.piemonte').show();
			$('.novara').show();
        } 
	if($('#location-select2 option:selected').text() == 'Torino' ) {
			$('.piemonte').show();
			$('.torino').show();
        } 	
	if($('#location-select2 option:selected').text() == 'Cuneo' ) {
			$('.piemonte').show();
			$('.cuneo').show();
        } 	
	if($('#location-select2 option:selected').text() == 'Varcelli' ) {
			$('.piemonte').show();
			$('.varcelli').show();
        } 	
	if( ($('#location-select').val() == '12') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.san-marino').show(); 
			
		} else {
			$('.san-marino').hide(); 
			
		}
	if( ($('#location-select').val() == '13') && ($('#location-select2 option:selected').text() == 'Provincia' )){
		$('.toscana').show(); 
		$('.firenze').hide(); 
		$('.lucca').hide();  
		$('.massa-carrara').hide();
	} else {
		$('.toscana').hide(); 
		$('.firenze').hide(); 
		$('.lucca').hide();  
		$('.massa-carrara').hide();
	}
	if($('#location-select2 option:selected').text() == 'Firenze' ) {
		$('.toscana').show(); 
		$('.firenze').show();
        } 
	if($('#location-select2 option:selected').text() == 'Lucca' ) {
		$('.toscana').show(); 
		$('.lucca').show();
        }
	if($('#location-select2 option:selected').text() == 'Massa-Carrara' ) {
		$('.toscana').show(); 
		$('.massa-carrara').show();
        } 		
	if( ($('#location-select').val() == '14') && ($('#location-select2 option:selected').text() == 'Provincia' )){
			$('.veneto').show(); 
			$('.vicenza').show(); 
			
		} else {
			$('.veneto').hide(); 
			$('.vicenza').hide(); 
			
		}
	if($('#location-select2 option:selected').text() == 'Vicenza' ) {
		$('.veneto').show(); 
		$('.vicenza').show(); 
        } 	

});
$(window).load(function() {
$('#location-select2 option[value=2]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=3]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=4]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=5]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=6]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=7]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=8]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=9]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=10]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=11]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=12]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=13]').attr('disabled', 'disabled').hide();
$('#location-select2 option[value=14]').attr('disabled', 'disabled').hide();

$("#location-select").change(function() { 

$('#location-select2 option[value=2]').removeAttr('disabled').show();
$('#location-select2 option[value=3]').removeAttr('disabled').show();
$('#location-select2 option[value=4]').removeAttr('disabled').show();
$('#location-select2 option[value=5]').removeAttr('disabled').show();
$('#location-select2 option[value=6]').removeAttr('disabled').show();
$('#location-select2 option[value=7]').removeAttr('disabled').show();
$('#location-select2 option[value=8]').removeAttr('disabled').show();
$('#location-select2 option[value=9]').removeAttr('disabled').show();
$('#location-select2 option[value=10]').removeAttr('disabled').show();
$('#location-select2 option[value=11]').removeAttr('disabled').show();
$('#location-select2 option[value=12]').removeAttr('disabled').show();
$('#location-select2 option[value=13]').removeAttr('disabled').show();
$('#location-select2 option[value=14]').removeAttr('disabled').show();
if($(this).data('options') == undefined){
    $(this).data('options',$('#location-select2 option').clone());
    } 
var id = $(this).val();
var options = $(this).data('options').filter('[value=' + id + ']');

$('#location-select2').html(options);
});
});

//remove href from nel mondo
$("#menu-item-3091 > a").removeAttr("href");

//hide il mio account p
$("#menu-item-830 a p").hide();
$("#menu-item-2357 a p").hide()
$("#menu-item-1654 a p").hide();
$("#menu-item-2355 a p").hide();

$('#menu-item-2543').hide();
$('#menu-item-2544').hide();
$('#menu-item-2546').hide();
$('#menu-item-2545').hide();


$(document).ready(function() {
    if($(window).width() < 1025) {
		
		$("#menu-item-2572").on('click', function(e){
			$('input .search-field.ui-autocomplete-input').focus();
			$('#sidebar').show();
			$('.popup').show();
			$('.popup').removeClass("fadeout");
			$('#search-box').show();
			$('.popup').on('click', function(e){
			$('#sidebar').hide();
			$('.popup').hide();
			$('.popup').addClass("fadeout");
			$('#search-box').hide();
			});
			$('.icon-close-search').on('click', function(e){
			$('#sidebar').hide();
			$('.popup').hide();
			$('.popup').addClass("fadeout");
			$('#search-box').hide();
			});
		});
		$('#menu-item-2568 a').on('click', function(e){
			/*$("#menu-item-42 ul.sub-menu").hide();
			$("#menu-item-41 ul.sub-menu").hide();*/
			$('input .search-field.ui-autocomplete-input').focus();
			$('#sidebar').show();
			$('.popup').show();
			$('.popup').removeClass("fadeout");
			$('#search-box').show();
			$('.popup').on('click', function(e){
			$('#sidebar').hide();
			$('.popup').hide();
			$('.popup').addClass("fadeout");
			$('#search-box').hide();
			});
			$('.icon-close-search').on('click', function(e){
			$('#sidebar').hide();
			$('.popup').hide();
			$('.popup').addClass("fadeout");
			$('#search-box').hide();
			});
		});
		$('#menu-item-2569 a').on('click', function(e){
			e.stopPropagation();
		  $('.popup-modal').show();
		  $(".single.single-product .popup-modal").show();
		  $(".single.single-product .mailchimp-popup").show();
		  $(".archive.post-type-archive .popup-modal").show();
		  $(".archive.post-type-archive .mailchimp-popup").show();
		  $(".page.page-template-template-fullwidth .popup-modal").show();
		  $(".page.page-template-template-fullwidth .mailchimp-popup").show();
		  $(".page-template-template-contact .popup-modal").show();
		  $(".page-template-template-contact .mailchimp-popup").show();
		  $('.mc4wp-form.mc4wp-form-1313.mc4wp-form-basic').show();
		  $(".mc4wp-form.mc4wp-form-1313.mc4wp-form-basic").removeClass('fadeout');
		});
		$('#menu-item-2571 a').on('click', function(e){
			e.stopPropagation();
			$(".popup").show();
			$(".popup").removeClass('fadeout');
			$(".login").show();
		  
			$('.popup').on('click', function(e){
			$('.login').hide();
			$('.popup').addClass('fadeout');
			});
			
			$('.close-login img').on('click', function() {
			$(".popup").addClass('fadeout');
			$(".popup").hide();
			$('.login').hide();
			$('.register').hide();
			});
		});
		$('#menu-item-2570 a').on('click', function(e){
			e.stopPropagation();
			$(".popup").show();
			$(".popup").removeClass('fadeout');
			$(".login").show();
		  
			$('.popup').on('click', function(e){
			$('.login').hide();
			$('.popup').addClass('fadeout');
			});
			
			$('.close-login img').on('click', function() {
			$(".popup").addClass('fadeout');
			$(".popup").hide();
			$('.login').hide();
			$('.register').hide();
			});
		});
		$('#menu-item-3091 a').first().on('click', function(e) {
			$('#menu-item-3091 ul.sub-menu').toggle();
			/*$("#menu-item-42 ul.sub-menu").hide();
			$("#menu-item-2338 ul.sub-menu").hide();*/
		});
		$('#menu-item-41 a').first().removeAttr("href");
		$('#menu-item-41 a').first().on('click', function(e) {
			$("#menu-item-41 ul.sub-menu").toggle();
			$("#menu-item-42 ul.sub-menu").hide();
		});
		$('#menu-item-42 a').first().removeAttr("href");
		$('#menu-item-42 a').first().on('click', function(e) {
			$("#menu-item-42 ul.sub-menu").toggle();
			$("#menu-item-41 ul.sub-menu").hide();
		});
		$('#menu-item-2330 a').first().removeAttr("href");
		$('#menu-item-2330 a').first().on('click', function(e) {
			$("#menu-item-2330 ul.sub-menu").toggle();
			$("#menu-item-2338 ul.sub-menu").hide();
		});
		$('#menu-item-2338 a').first().removeAttr("href");
		$('#menu-item-2338 a').first().on('click', function(e) {
			$("#menu-item-2338 ul.sub-menu").toggle();
			$("#menu-item-2330 ul.sub-menu").hide();
		});
		$('#menu-item-2543').show();
		$('#menu-item-2546').show();
		$('#menu-item-2544').show();
		$('#menu-item-2545').show();
		//$("#menu-item-830 a p").show();
		//$("#small-logo").show();
		//$("#small-search").show();
		$("#menu-item-2355 a p").show();
		$("#menu-item-2357 a p").show();
		//$('#menu-item-1654 a p').show();
		$("#menu-item-2608 #register-newsletter p").show();
		//$('#small-search').on('click', function() {
		//	$("#sidebar").toggle();
		//});
    } 
	
	
}); 

$(document).ready(function() {
    if( ($(window).width() < 1260) ){
        $("#menu-item-2567 a img").attr("src", "https://www.glielementi.it/wp-content/uploads/2016/01/Gli-Elementi-small-logo-1.png");
		$("#menu-item-2348 a img").attr("src", "https://www.glielementi.it/wp-content/uploads/2016/01/Gli-Elementi-small-logo-1.png");
		//$("#menu-item-830 a p").hide();
		//$("#menu-item-2357 a p").hide();
		//$("#menu-item-2608 #register-newsletter p").hide();
		$("#menu-item-2358 #register-newsletter p").hide();
    } 
}); 

/********** open and close search box************/
$("#menu-item-1654 a").attr("id","open-search-box");
$("#menu-item-2355 a").attr("id","open-search-box");
$('#open-search-box').on('click', function(e){
	$('input .search-field.ui-autocomplete-input').focus();
	$('#sidebar').show();
	$('.popup').show();
	$('.popup').removeClass("fadeout");
	$('#search-box').show();
	
	$('.popup').on('click', function(e){
	$('#sidebar').hide();
	$('.popup').hide();
	$('.popup').addClass("fadeout");
	$('#search-box').hide();
	});
	
	$('.icon-close-search').on('click', function(e){
	$('#sidebar').hide();
	$('.popup').hide();
	$('.popup').addClass("fadeout");
	$('#search-box').hide();
	});
});


//$('<h3 style="display: block; float: left;">2. Domicilio</h3>').insertAfter('#codice_fiscale_field');
//$('<h3>3. Metodo di pagamento</h3>').insertAfter('.shipping_address');
/*$(".showlogin").on('click', function(e) {
	$('form.login').toggle();
	$('form.checkout_coupon').hide();
});
$(".showcoupon").on('click', function(e) {
	$('form.checkout_coupon').toggle();
	$('form.login').hide();
});*/

$('#payment_method_braintree').click( function(e) {
	$('.payment_box.payment_method_braintree').show();
});

/**********************Add href to slideshow img**********************/


});


