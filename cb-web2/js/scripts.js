$(document).ready(function(){
	/*===============Flexslider===============*/
	var loader = $('.loader');
	var caption = $('.flex-caption');
	$('.flexslider').flexslider({
		animation : "fade",
		controlNav : true,
		directionNav : false,
		prevText : "",
		nextText : "",
		initDelay : 500,
		controlsContainer : ".flex-container",
		start : function() {
			loader.fadeOut();
			caption.delay(700).fadeIn(1000);
		},
		before : function() {
			caption.fadeOut('fast');
		},
		after : function() {
			caption.fadeIn(1000);
		}
	});
	/*===============Featured Products Carousel===============*/
	$('#featured-products-carousel').owlCarousel({
		margin: 30,
		nav: false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items: 1
			},
			576:{
				items: 2
			},
			767:{
				items: 2
			},
			1150:{
				items: 3
			}
		}
	});

	/*===============Featured On Carousel===============*/
	$('#featured-on-carousel').owlCarousel({
		margin: 30,
		nav: false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items: 2
			},
			768:{
				items: 3
			},
			1024: {
				items: 4
			},
			1150:{
				items: 5
			}
		}
	});

	/*===============Plus Minus Control===============*/
	$('.btn-number').click(function(e){
		e.preventDefault();
		fieldName = $(this).attr('data-field');
		type      = $(this).attr('data-type');
		var input = $("input[name='"+fieldName+"']");
		var currentVal = parseInt(input.val());
		if (!isNaN(currentVal)) {
			if(type == 'minus') {
				if(currentVal > input.attr('min')) {
					input.val(currentVal - 1).change();
				}
				if(parseInt(input.val()) == input.attr('min')) {
					$(this).attr('disabled', true);
				}
			} else if(type == 'plus') {
				if(currentVal < input.attr('max')) {
					input.val(currentVal + 1).change();
				}
				if(parseInt(input.val()) == input.attr('max')) {
					$(this).attr('disabled', true);
				}
			}
		}
		else {
			input.val(0);
		}
	});
	$('.input-number').focusin(function(){
	   $(this).data('oldValue', $(this).val());
	});
	$('.input-number').change(function() {
		minValue =  parseInt($(this).attr('min'));
		maxValue =  parseInt($(this).attr('max'));
		valueCurrent = parseInt($(this).val());
		name = $(this).attr('name');
		if(valueCurrent >= minValue) {
			$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
		}
		else {
			alert('Sorry, the minimum value was reached');
			$(this).val($(this).data('oldValue'));
		}
		if(valueCurrent <= maxValue) {
			$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
		}
		else {
			alert('Sorry, the maximum value was reached');
			$(this).val($(this).data('oldValue'));
		}
	});
	$(".input-number").keydown(function (e) {
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {
			 return;
		}
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});

	/*===============Click Radio Button Change Color Text===============*/
	$("input[type='radio']").click(function() {
		var color = $(this).val();
		$('#color').text($(this).val());
		$('#image-one').find("img").attr('src', 'images/products/citylips/citylips-'+color+'-1-2x.png');
		$('#image-two').find("img").attr('src', 'images/products/citylips/citylips-'+color+'-2-2x.png');
		$('#image-three').find("img").attr('src', 'images/products/citylips/citylips-'+color+'-3-2x.png');
		$("#img-one").attr('src', 'images/products/citylips/citylips-'+color+'-1-2x.png');
		$("#img-two").attr('src', 'images/products/citylips/citylips-'+color+'-2-2x.png');
		$("#img-three").attr('src', 'images/products/citylips/citylips-'+color+'-3-2x.png');
    });

    /*===============Add to Cart===============*/
    $(":radio").attr("autocomplete", "off");
    $("#addToCart").click(function() {
    	var quantity = $("input[type='text']").val();
    	var page_title = $(document).find("title").text();
    	switch (page_title) {
    		case "Advanced Eye Cream":{
    			window.location = "http://citybeauty.com/cmd.php?pid=94655b3103414f83ba55579288601b5c&qty=" + quantity;
    		} break;
    		case "Ageless Moisturizing Cream":{
    			window.location = "http://citybeauty.com/cmd.php?pid=6f0a42833cb445309b4f11df9e25684e&qty=" + quantity;
    		} break;
    		case "Illuminating Dark Spot Corrector":{
    			window.location = "http://citybeauty.com/cmd.php?pid=3fecc173408c4f8f851368244e7a35a0&qty=" + quantity;
    		} break;
    		case "Intensive Night Serum":{
    			window.location = "http://citybeauty.com/cmd.php?pid=65d1796596734e359dba4f9c2f2f582f&qty=" + quantity;
    		} break;
    		case "Multi-Action Sculpting Cream":{
    			window.location = "http://citybeauty.com/cmd.php?pid=2674c3aa688f44fa90ebbdf977d3dfa9&qty=" + quantity;
    		} break;
    		case "Under Eye Recovery":{
    			window.location = "http://citybeauty.com/cmd.php?pid=8ded8940d8eb47c2b299df947f616d20&qty=" + quantity;
    		} break;
    		case "City Lips":{
    			var chosenColor = $("input[type='radio']:checked").val();
    			switch (chosenColor) {
    				case "clear":{
    					window.location = "http://citybeauty.com/cmd.php?pid=9a4ba8654e624e1980751d65b6dc4f72&qty=" + quantity;
    				} break;
    				case "tinsel town":{
    					window.location = "http://citybeauty.com/cmd.php?pid=2fde5b597e604150a0d9ab4f852ee03b&qty=" + quantity;
    				} break;
    				case "los angelips":{
    					window.location = "http://citybeauty.com/cmd.php?pid=01e3a5ceee2a49e3b5dcd83b2105a7f1&qty=" + quantity;
    				} break;
    				case "nude york":{
    					window.location = "http://citybeauty.com/cmd.php?pid=bfbd147c67e24442aa45b64414b030da&qty=" + quantity;
    				} break;
    				case "sun diego":{
    					window.location = "http://citybeauty.com/cmd.php?pid=b2a812bf55de4bfcade45cbadffe1b19&qty=" + quantity;
    				} break;
    				case "tokyo kiss":{
    					window.location = "http://citybeauty.com/cmd.php?pid=b26fc241eb4e4333b9f822a12182b12c&qty=" + quantity;
    				} break;
    				case "orchid":{
    					window.location = "http://citybeauty.com/cmd.php?pid=b6c3d6aabdd4457aa729d89a7ead0afd&qty=" + quantity;
    				} break;
    				case "sangria":{
    					window.location = "http://citybeauty.com/cmd.php?pid=98bd62f955d24e58a0095708d27ec652&qty=" + quantity;
    				} break;
    				case "holly":{
    					window.location = "http://citybeauty.com/cmd.php?pid=b7db60a966ad4323aba532531a98b5c7&qty=" + quantity;
    				} break;
    				case "plum spring":{
    					window.location = "http://citybeauty.com/cmd.php?pid=09e9a1b004e94d07b9fa3a521664a48f&qty=" + quantity;
    				} break;
    			}
    		}

    	}
    });
});

/*===============Product Description into Collapse button===============*/
if ($(window).width() < 992) {
	$(".product-info").detach().prependTo(".product-info-tabs");
	$("#productInfoTab").hide();
	$(".product-info-tabs .tab-content").css("border-top","1px solid #333333");
	$(".product-info-tabs .tab-content").css("padding","0 15px");

	$("#tabContent1").css("display", "flex");
	$("#info-tab-one").addClass("collapse").removeClass("tab-pane fade show active");
	$("#info-tab-one").detach().appendTo("#tabContent1");
	$("#info-tab-one").css("padding","15px");

	$("#tabContent2").css("display", "flex");
	$("#info-tab-two").addClass("collapse").removeClass("tab-pane fade show active");
	$("#info-tab-two").detach().appendTo("#tabContent2");
	$("#info-tab-two").css("padding","15px");

	$("#tabContent3").css("display", "flex");
	$("#info-tab-three").addClass("collapse").removeClass("tab-pane fade show active");
	$("#info-tab-three").detach().appendTo("#tabContent3");
	$("#info-tab-three").css("padding","15px");

	$("#tabContent4").css("display", "flex");
	$("#info-tab-four").addClass("collapse").removeClass("tab-pane fade show active");
	$("#info-tab-four").detach().appendTo("#tabContent4");
}

/*===============Handle click for regular + and - collapse===============*/
$('.plusminus').click(function(){
    $(this).text(function(i,old){
      sign=old;
      return old=='+' ?  '-' : '+';
    });
  });

/*===============Reset Lips Selection===============*/
$(document).ready(function(e) {
    var $input = $('#refresh');

    $input.val() == 'yes' ? location.reload(true) : $input.val('yes');
});

/*===============Add active class to nav bar===============*/
function getPageNameInURL() {
  let path = window.location.pathname;
  return pagename = path.split("/").pop();
}
const current_page = getPageNameInURL();
$("#navbarTop ul li a").each(function (i){
	if (current_page == $(this).attr('href')){
		$(this).parent().addClass('active');
	}
});
/*===============Handle back to top button===============*/
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
      $('#goToTop:hidden').stop(true, true).fadeIn();
  } else {
      $('#goToTop').stop(true, true).fadeOut();
  }
});
$("#goToTop").click(function(){
	$('html, body').animate({scrollTop : 0},800);
	return false;
});
