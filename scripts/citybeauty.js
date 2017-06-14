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
         case "citylash": {
           window.location = "http://citybeauty.com/cmd.php?pid=e44f3331641b4bc6934d80d845bda9c1&qty=" + quantity.toString();
         } break;
    }
  })
});

$(function(){ //handle out of stock for non-lip products
  pagetitle = $(document).find("title").text();
  if (pagetitle != 'City Lips'){ //handles non-lip products only
    $('.instock').css("display","block");
    $('.outstock').css("display","none");

    outstock = document.getElementById('outstockcheck').value; //check if out of stock from the place holder
    if (outstock =='y'){
      $('.instock').css("display","none");
      $('.outstock').css("display","block");
      $('.outofstocktxt').css("display","block");
      $('.outofstockbtn').css("display","block");
    }
  }
});
function helfpul(pageid,rateid,isHelpFul){ // for helpful buttons

      if (isHelpFul) {
        dbfield = "helpful_y";
        idToChange ="yes-";
        htmlword = "YES - ";
      }
      else {
        dbfield = "helpful_n";
        idToChange ="no-";
        htmlword = "NO - ";
      }
      $.ajax({
        type: 'GET',
        url: 'scripts/helpful.php',
        data: {tablename:pageid, rateid:rateid, fieldname:dbfield},
        success: function(response) {
        //location.reload(); // reload the page.(3)
        newID = "#" + idToChange + rateid;
        $(newID).html(htmlword + String(response));
      }
      });

}

$(function (){ //for pagination
  pageLoc = parseInt($("#current-page").val());
  pageTotal = parseInt($("#total-pages").val());
  if (pageTotal <= 0) {pageTotal = 1;}

  pagename = $("#pageName").val();
  limit = 3;//limited displays the page numbers

  //handles Pre and Next button display when page #1 and page #total
  if (pageLoc == 1) {
    $("#pre-page").css("display","none");
  }
  if (pageLoc == pageTotal){
    $("#next-page").css("display","none");
  }

  navHtml = '<a href="' + pagename +'.php?page=1#review"';
  if (pageLoc == 1){navHtml = navHtml + 'class="curPage"';}
  navHtml = navHtml + '>1</a>';
  $("#pagenumbers_nav").append(navHtml);

  if (pageLoc <= limit) { // checks the current page is in the first limit pages, ie: limit = 3, current page is in the first 3 pages
    if (pageTotal < limit){ //checks if total of pages is less than limit page display, then assign new limit to total page
      limit = pageTotal;
    }

    for (i=2;i<=limit;i++){
      navHtml = '<a href="' + pagename +'.php?page='+ i +'#review" id="pagenumberitem"';
      if (i == pageLoc){navHtml = navHtml + 'class="curPage"';}
      navHtml = navHtml + '>' + i + '</a>';
      $("#pagenumbers_nav").append(navHtml);
    }
    //display the last page number
    if (pageTotal > (limit + 1)) { //handle total pages > 4 (since limit = 3) and display ... before the last page
      navHtml = '<span id="pagenumberitem">...</span>' + '<a href="' + pagename +'.php?page='+ pageTotal +'#review" id="pagenumberitem">'+pageTotal+'</a>';
    }
    else if (pageTotal <= limit) { //handle total pages <= limit
      navHtml = '';
    }
    else{ //handle total pages = 4 - don't display ... before 4
      navHtml = '<a href="' + pagename +'.php?page='+ pageTotal +'#review" id="pagenumberitem">'+pageTotal+'</a>';
    }
    $("#pagenumbers_nav").append(navHtml);
  }
  else if (pageLoc>pageTotal-limit) {// checks the current page in the last limit pages, ie: limit = 3, current page is in the last 3 pages
    $("#pagenumbers_nav").empty();
    navHtml = '<a href="' + pagename +'.php?page=1#review">1</a>';
    if (pageTotal > (limit + 1)) {
      navHtml = navHtml + '<span id="pagenumberitem">...</span>';
    }
    $("#pagenumbers_nav").append(navHtml);
    for (i = limit-1;i>=0;i--){
      navHtml = '<a href="' + pagename +'.php?page='+ (pageTotal-i) +'#review" id="pagenumberitem"';
      if ((pageTotal-i) == pageLoc){ navHtml = navHtml + 'class="curPage"'; }
      navHtml = navHtml + '>' + (pageTotal-i) + '</a>';
      $("#pagenumbers_nav").append(navHtml);
    }
  }
  else { // last scenario, checks if the current page is between the first and last limit pages, ie: limit = 3, 4 <= current page <= total page - 3
    $("#pagenumbers_nav").empty();
    navHtml = '<a href="' + pagename +'.php?page=1#review">1</a>';
    $("#pagenumbers_nav").append(navHtml + '<span id="pagenumberitem">...</span>');
    for (i = pageLoc-1;i<=pageLoc+1;i++){
      navHtml = '<a href="' + pagename +'.php?page='+ i +'#review" id="pagenumberitem"';
      if (i == pageLoc){
        navHtml = navHtml + 'class="curPage"';
      }
      navHtml = navHtml + '>' + i + '</a>';
      $("#pagenumbers_nav").append(navHtml);
    }
    navHtml = '<a href="' + pagename +'.php?page='+ pageTotal +'#review" id="pagenumberitem">'+pageTotal+'</a>';
    $("#pagenumbers_nav").append('<span id="pagenumberitem">...</span>' + navHtml);
  }


  $("a[name='pre-next']").click(function(event){
    event.preventDefault();
    if ($(this).attr('id') == 'pre-page' ) {
      pageLoc--;
    }
    if ($(this).attr('id') == 'next-page' ) {
      pageLoc++;
    }
    window.location = pagename + '.php?page=' + String(pageLoc) + '#review';
  })

});
