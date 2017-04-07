var zoom = 15;
var latitude = 41.040585;

var longitude = 28.970257;

$(document).ready(function() {

    function openPopup(theURL,winName,features) {
      window.open(theURL,winName,features);
    }


    $("#addToCart2").click(function(e){
        e.preventDefault();
        var url = $("input[name='wbrProductID']:checked").val();
        if(url==null){
            alert("Please selected a buying option.");
        }
        else{
            window.location = url;
        }
    })


    $("#addToCart").click(function(e){
        e.preventDefault();
        var url = $(".chosen-select").val();
        if(url==null){
            alert("Please selected a buying option.");
        }
        else{
            window.location = url;
        }
    });

    // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    //  $('#ex1').trigger('zoom.destroy');
    // }

    // $('#ex1').trigger('zoom.destroy');

    $('select.top-cat-menu').change(function() {
        var loc = ($(this).find('option:selected').val());
        window.location = loc;
    });

    $('[data-hover="dropdown"]').dropdownHover();
    $('.basket .close-btn').click(function() {
        $(this).parent().parent().fadeOut(function() {
            $(this).remove();
            checkBasketDropdown(true);
        });
    });

    if ($('.price-slider').length > 0) {
        $('.price-slider').slider({
            min: 100,
            max: 700,
            step: 10,
            value: [100, 400],
            handle: "square"
        })
    }


    if ($('.accordion-widget').length > 0) {
        $('.category-accordions .accordion-body').parent().find('.accordion-toggle').toggleClass('collapsed');

        $('.category-accordions .accordion-body').collapse("hide");


        $('.accordion-body').on('hidden', function() {



        });

        $('.accordion-body').on('shown', function() {

        });

    }
   $(".shipping-form-area input[type='checkbox']").on('ifChecked', function(event){

        $(".shipping-form-area .cusmo-input").attr('disabled','disabled');



});

    $(".shipping-form-area input[type='checkbox']").on('ifUnchecked', function(event){


          $(".shipping-form-area .cusmo-input").removeAttr('disabled');

});


if($('#clients-carousel').length>0){
   $("#clients-carousel").carouFredSel({
	circular: true,
	infinite: false,

	auto : false,
	prev	: {
		button	: ".carousel_prev",
		key		: "left",
                 easing:"easeInOutExpo",
                  duration:1000
	},
	next	: {
		button	: ".carousel_next",
		key		: "right",
                 easing:"easeInOutExpo",
                  duration:1000
	}

});
}

        if($('.map-holder').length>0){

            $('.map').gmap3({
                map:{
                    options:{
                        center:[latitude, longitude],

                        zoom:zoom,
                        mapTypeControl: true,

                        navigationControl: true,
                        scrollwheel: false,
                        streetViewControl: true
                    }
                },
                marker:{
                    latLng:[latitude, longitude]
                }
            });

        }



 $('.delete .close-btn').on('click', function(e) {
       e.preventDefault();
       $(this).parent().parent().parent().fadeOut(function(){
           $(this).remove();
       });
 });
 if($('.iCheck').length>0){
 $('.iCheck').iCheck({
    checkboxClass: 'icheckbox_minimal-yellow',
    radioClass: 'iradio_minimal-yellow',

  });
 }
    checkBasketDropdown();
    function checkBasketDropdown(remove) {
        if (remove) {
            cn = parseInt($('.basket-item-count').text());
            nn = cn - 1;
            $('.basket-item-count').text(nn);
        }
        if ($('.basket .basket-item').length <= 0) {
            $('.basket .dropdown-menu').prepend("<li class='empty'>Empty</li>");
        }
    }

    $('.active.tab-pane').fadeIn();

    $('.nav-tabs li a').on('click', function(e) {
        e.preventDefault();

        var dest = $($(this).attr('href'));
        $('.products-holder.active').stop(true, true).fadeOut('slow', function() {
            dest.stop(true, true).fadeIn('slow');
        });

    });

    $('.grid-list-buttons a').on('click', function(e) {
        e.preventDefault();

        var dest = $($(this).attr('href'));
        $('.products-holder.active').stop(true, true).fadeOut(function() {
            dest.stop(true, true).fadeIn();
        });

    });

    $('a.load-more').click(function(e) {
        e.preventDefault();
    });
    if($(".chosen-select").length>0){
        $(".chosen-select").chosen({disable_search_threshold: 10});
    }

    checkReviewField();
    function textCounter(field,field2,maxlimit){


 if ( field.val().length > maxlimit ) {
  field.val(field.val().substring( 0, maxlimit )) ;
  return false;
 } else {
  field2.text(maxlimit - field.val().length);
 }

}
function checkReviewField(){
if($('#write-review-text').length>0){
    $('#write-review-text').keyup(function(){
        textCounter($('#write-review-text'),$('#counter'),10000);
    })
}
}
    if ($('.product-gallery').length > 0) {
        $('.product-gallery').flexslider({
            animation: "slide",
            pauseOnAction: false,
            directionNav: false,

            controlNav: "thumbnails"
        });
    }

    if ($('.star').length > 0) {
        $('.star').raty({
            starOff: '../../img2/star-off.png',
            starOn: '../../img2/star-on.png',
            score: function() {
                return $(this).attr('data-score');
            }
        });
    }



    setupHomeSlider();





    if ($('.gallery').length > 0) {
        if ($(".group-holder.active").length == 0) {

            gr = $('.gallery-controls  li.active').attr('data-group');
            $(".group-holder[data-group=" + gr + "]").addClass('active');

        }

        w = $('.gallery-item').width();
        h = $('.gallery-item').width();
        $('.group-block .thumb').append('<img src="img2/blank.png" alt="" width="' + w + '" height="' + h + '">');
    }
    $('.gallery-controls  li').click(function() {
        gr = $(this).attr('data-group');
        el = $(this);
        $('.gallery-controls  li').removeClass('active');
        el.addClass('active');
        $(".group-holder").not(".group-holder[data-group=" + gr + "]").fadeOut(function() {
            old = $(this);
            old.removeClass('active');
            $(".group-holder[data-group=" + gr + "]").fadeIn(function() {

                $(this).addClass('active');

            });
        });

    });

    function setupHomeSlider() {


        if ($('.home-slider .flexslider').length > 0) {

            $('.home-slider .flexslider').flexslider({
                prevText: "",
                nextText: "",
                slideshow: true,
                controlNav: false



            });

        }

    }

    $('[data-placeholder]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('data-placeholder')) {
            input.val('');
            // input.removeClass('placeholder');
        }
    }).blur(function() {
        var input = $(this);
        if (input.val() == '' || input.val() == input.attr('data-placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('data-placeholder'));
        }
    }).blur();

    $('[data-placeholder]').parents('form').submit(function() {
        $(this).find('[data-placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('data-placeholder')) {
                input.val('');
            }
        })
    });

    $(".swatch-unit").hover(
        function(){
            id = $(this).closest('a').attr('id');
            $(".main-swatch img.active").hide();
            $(".product-gallery img.active").hide();
            $(".main-swatch #" + id).show();
            $(".product-gallery #" + id).show();
            $("#shadeDes").text(id);
            if(id!="clear"){
                $(".price span").text("$40.00");
            } else {
                $(".price span").text("$35.00");
            }
        }, function(){
             $(".main-swatch #" + id).hide();
             $(".product-gallery #" + id).hide();
             $(".main-swatch img.active").show();
             $(".product-gallery img.active").show();
             activeColor = $(".swatch-container.active").closest('a').attr('id');
             $("#shadeDes").text(activeColor);
            if(activeColor!="clear"){
              $(".price span").text("$40.00");
            } else {
              $(".price span").text("$35.00");
            }
        }
    );
    id2 = "clear";
    $(".swatch-unit").on("click", function(event){
        event.preventDefault();
        $(".swatch-box .active").removeClass('active').width(39).height(39);
        $(this).parent().addClass('active').width(35).height(35);
        $(".main-swatch .active").removeClass("active");
        $(".product-gallery .active").removeClass("active");
        id2 = $(this).closest('a').attr('id');
        $(".main-swatch #" + id2).addClass("active");
        $(".product-gallery #" + id2).addClass("active");

        $("#shadeDes").text(id2);
        if(id2!="clear"){
            $(".price span").text("$40.00");
        } else {
            $(".price span").text("$35.00");
        }
    });
    $("a#addToCartSwatch").click(function(event){
        event.preventDefault();
        switch (id2) {
			case "plumsprings": {
            window.location = "http://citycosmetics.com/cmd.php?pid=4de3527dd0384b6798a10806709ab72b";
          } break;
		  case "tokyokiss": {
            window.location = "http://citycosmetics.com/cmd.php?pid=88053a3fe25c4aee983306a9fcbaf6a0";
          } break;
          case "losangelips": {
            window.location = "http://citycosmetics.com/cmd.php?pid=ae2d751c814848c99e79ebf1bfbf98a3";
          } break;
          case "nudeyork": {
            window.location = "http://citycosmetics.com/cmd.php?pid=7888e4d5e5164a5f8d8cd07a02799566";
          } break;
          case "orchid": {
            window.location = "http://citylips.com/cmd.php?pid=d4035529578c4638beabe2f1da1ff6d7";
          } break;
          case "sangria": {
            window.location = "http://citycosmetics.com/cmd.php?pid=7799892e241242e4bd2b9e7b6b398a48";
          } break;
          case "sundiego": {
            window.location = "http://citycosmetics.com/cmd.php?pid=da80e759f0c642c9a349b30dbc6790fd";
          } break;
          case "tinseltown": {
            window.location = "http://citylips.com/cmd.php?pid=46a249a3f7df436f852577e221e19e06";
          } break;
          case "holly": {
            window.location = "http://citylips.com/cmd.php?pid=1df7b026b9e74e96a09e018ce9a7b50a";
          } break;
          case "clear": {
            window.location = "http://citylips.com/cmd.php?pid=3ea53eb3ed29409ab947a3ba05e0459f";
          } break;
        }
      })
	  $("a#addToCartSwatch2").click(function(event){
        event.preventDefault();
        switch (id2) {
			case "plumsprings": {
            window.location = "http://citycosmetics.com/cmd.php?pid=4de3527dd0384b6798a10806709ab72b";
          } break;
		  case "tokyokiss": {
            window.location = "http://citycosmetics.com/cmd.php?pid=88053a3fe25c4aee983306a9fcbaf6a0";
          } break;
          case "losangelips": {
            window.location = "http://citylips.com/cmd.php?pid=5454ae5305434114b6d8fb7ce69cd756";
          } break;
          case "nudeyork": {
            window.location = "http://citylips.com/cmd.php?pid=44fba8eeea0b40d7af7e59156878fe4b";
          } break;
          case "orchid": {
            window.location = "http://citylips.com/cmd.php?pid=06755b2bca5549dcafbc1d2f77cb96f4";
          } break;
          case "sangria": {
            window.location = "#";
          } break;
          case "sundiego": {
            window.location = "http://citylips.com/cmd.php?pid=08c239b38e694fce80bb2b208315bcea";
          } break;
          case "tinseltown": {
            window.location = "http://citylips.com/cmd.php?pid=7a82dc2b36e746bdb606bd12ff4a41f7";
          } break;
          case "holly": {
            window.location = "http://citylips.com/cmd.php?pid=0c4a12231c334da2ba23e78e40decbfc";
          } break;
          case "clear": {
            window.location = "http://citylips.com/cmd.php?pid=6502381b66e1479795e7cfab638e784f";
          } break;
        }
      })

    // checkContactForm();
    // function checkContactForm() {
    //     if ($(".contact-form").length > 0) {


    //         //  triggers contact form validation
    //         var formStatus = $(".contact-form").validate();
    //         //   =====================================================
    //         //sending contact form
    //         $(".contact-form").submit(function(e) {
    //             e.preventDefault();

    //             if (formStatus.errorList.length === 0)
    //             {
    //                 $(".contact-form .submit").fadeOut(function() {
    //                     $('#loading').css('visibility', 'visible');
    //                     $.post('submit.php', $(".contact-form").serialize(),
    //                             function(data) {
    //                                 $(".contact-form input,.contact-form textarea").not('.submit').val('');

    //                                 $('.message-box').html(data);


    //                                 $('#loading').css('visibility', 'hidden');
    //                                 $(".contact-form .submit").removeClass('disabled').css('display', 'block');
    //                             }

    //                     );
    //                 });


    //             }

    //         });
    //     }
    // }
});
