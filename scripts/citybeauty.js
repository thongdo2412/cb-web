$(function(){ //handles quantity up to 100
  var $select = $(".xsquantity");
  for (i=1;i<=100;i++){
    $select.append($('<option></option>').val(i).html(i))
  }
});

$('.plusminus').click(function(){ //handle click for regular + and - collapse
  $(this).text(function(i,old){
    sign=old;
    return old=='+' ?  '-' : '+';
  });
});

$('.plusminus_revw').click(function(){ //handle review +/- collapse
  var sign;

  $(this).text(function(i,old){
    sign=old;
    return old=='+' ?  '-' : '+';
  });

  var getDatatarget = $(this).attr("data-target");
  var numberPattern = /\d+/g;
  var number = getDatatarget.match(numberPattern);
  var newId = "preview" + number.toString();

  if (sign=='+'){
      document.getElementById(newId).style.display ='none';
    }
    else{
      document.getElementById(newId).style.display ='block';
    }
});

$('.review_link').click(function(){
  $(this).css('display','none');
});

$(function(){ //handle with jQuery raty plugin
  $.fn.raty.defaults.path = '../components/raty-master/lib/images';
  //include Jquery raty rating stars plugin
  $('#form_rating').raty({
    halfShow:false,
    hints: ['1','2','3','4','5'],
    targetKeep:true,
    click: function(score, evt) {
      document.getElementById('form-rating-score').value = score;
    }
  });

  $('.scorecallback').raty({
    readOnly  : true,
    score: function() {
      return $(this).attr('data-score');
    }
  });
});

$(function() {
  //get the count of reviews for the product
  var counts  = document.getElementById('counts').value;

  if($(window).width() > 767 ) {//handle collapse with desktop and mobile widths
    $("*[name='collapse_plus']").css('display','none');
    $(".rating_wrd").text("(" + counts +")");
  }
  else {
    $("*[name='collapse_plus']").css('display','block');
    $("*[name='collapse_plus']").attr('aria-expanded','false');
    $("*[name='collapse_content']").removeClass('collapse in');
    $("*[name='collapse_content']").addClass('collapse');
    $(".collapse_heading").find('b').contents().unwrap();
    $(".rating_wrd").text("(" + counts +" Reviews)");
  }
});

$(function(){ //handles add to cart with quantity selected above
  var quantity = 1;

  $(".xsquantity").change(function() {//handle change of quantity
    quantity = $(this).find('option:selected').text();
  })

  page_title = document.getElementById('page_title').value;

  $("*[name='addToCart']").click(function(event){//handle click event of Add to Cart button
    event.preventDefault();
    switch (page_title) {
         case "undereye": {
           window.location = "http://citybeauty.com/cmd.php?pid=8ded8940d8eb47c2b299df947f616d20&qty=" + quantity.toString();
         } break;
         case "cityviews": {
           window.location = "http://citybeauty.com/cmd.php?pid=c8296bdec9f242e196759b73322aea7f&qty=" + quantity.toString();
         } break;
    }
  })
});
