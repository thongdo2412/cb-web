$(function(){ //handles quantity up to 100
  var $select = $(".quantity,.xsquantity");
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

$(function(){ //handles add to cart with quantity selected above
  var quantity;
  var selectId;
  //handle regular quantity selection or mobile selection
  if ($("*[name='quantityselect']").attr('id') == 'qty') {
    quantity = document.getElementById("qty").value;
    selectId = 'select#qty';
  }
  if ($("*[name='quantityselect']").attr('id') == 'xsqty') {
    quantity = document.getElementById("xsqty").value;
    selectId = 'select#xsqty';
  }

  var link = "http://citybeauty.com/cmd.php?pid=57f8a41e147d4e3ba51634dc18ae06f6&qty=" + quantity.toString();
  $("*[name='addToCart']").attr("href", link);

  $(selectId).change(function() {
    quantity = $(this).find('option:selected').text();
    link = "http://citybeauty.com/cmd.php?pid=57f8a41e147d4e3ba51634dc18ae06f6&qty=" + quantity.toString();
    $("*[name='addToCart']").attr("href", link);
  });
});
