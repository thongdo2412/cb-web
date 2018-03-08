/*===============Handle review===============*/
$('.review_link').click(function(){
  $(this).css('display','none');
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

$(function(){ //handle with jQuery raty plugin
  $.fn.raty.defaults.path = 'images/raty/';
  //include Jquery raty rating stars plugin
  $('#form_rating').raty({
    score: 5,
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
  let pageLoc = parseInt($("#current-page").val());
  let pageTotal = parseInt($("#total-pages").val());
  if (pageTotal <= 0) {pageTotal = 1;}
  let limit = 3;//limited displays the page numbers

  //handles Pre and Next button display when page #1 and page #total
  if (pageLoc == 1) {
    $("#pre-page").css("display","none");
  }
  if (pageLoc == pageTotal){
    $("#next-page").css("display","none");
  }

  let navHtml = '<a href="' + current_page +'?page=1#review"';
  if (pageLoc == 1){navHtml = navHtml + 'class="curPage"';}
  navHtml = navHtml + '>1</a>';
  $("#pagenumbers_nav").append(navHtml);

  if (pageLoc <= limit) { // checks the current page is in the first limit pages, ie: limit = 3, current page is in the first 3 pages
    if (pageTotal < limit){ //checks if total of pages is less than limit page display, then assign new limit to total page
      limit = pageTotal;
    }

    for (i=2;i<=limit;i++){
      navHtml = '<a href="' + current_page +'?page='+ i +'#review" id="pagenumberitem"';
      if (i == pageLoc){navHtml = navHtml + 'class="curPage"';}
      navHtml = navHtml + '>' + i + '</a>';
      $("#pagenumbers_nav").append(navHtml);
    }
    //display the last page number
    if (pageTotal > (limit + 1)) { //handle total pages > 4 (since limit = 3) and display ... before the last page
      navHtml = '<span id="pagenumberitem">...</span>' + '<a href="' + current_page +'?page='+ pageTotal +'#review" id="pagenumberitem">'+pageTotal+'</a>';
    }
    else if (pageTotal <= limit) { //handle total pages <= limit
      navHtml = '';
    }
    else{ //handle total pages = 4 - don't display ... before 4
      navHtml = '<a href="' + current_page +'?page='+ pageTotal +'#review" id="pagenumberitem">'+pageTotal+'</a>';
    }
    $("#pagenumbers_nav").append(navHtml);
  }
  else if (pageLoc>pageTotal-limit) {// checks the current page in the last limit pages, ie: limit = 3, current page is in the last 3 pages
    $("#pagenumbers_nav").empty();
    navHtml = '<a href="' + pagename +'?page=1#review">1</a>';
    if (pageTotal > (limit + 1)) {
      navHtml = navHtml + '<span id="pagenumberitem">...</span>';
    }
    $("#pagenumbers_nav").append(navHtml);
    for (i = limit-1;i>=0;i--){
      navHtml = '<a href="' + current_page +'?page='+ (pageTotal-i) +'#review" id="pagenumberitem"';
      if ((pageTotal-i) == pageLoc){ navHtml = navHtml + 'class="curPage"'; }
      navHtml = navHtml + '>' + (pageTotal-i) + '</a>';
      $("#pagenumbers_nav").append(navHtml);
    }
  }
  else { // last scenario, checks if the current page is between the first and last limit pages, ie: limit = 3, 4 <= current page <= total page - 3
    $("#pagenumbers_nav").empty();
    navHtml = '<a href="' + current_page +'?page=1#review">1</a>';
    $("#pagenumbers_nav").append(navHtml + '<span id="pagenumberitem">...</span>');
    for (i = pageLoc-1;i<=pageLoc+1;i++){
      navHtml = '<a href="' + current_page +'?page='+ i +'#review" id="pagenumberitem"';
      if (i == pageLoc){
        navHtml = navHtml + 'class="curPage"';
      }
      navHtml = navHtml + '>' + i + '</a>';
      $("#pagenumbers_nav").append(navHtml);
    }
    navHtml = '<a href="' + current_page +'?page='+ pageTotal +'#review" id="pagenumberitem">'+pageTotal+'</a>';
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
    window.location = current_page + '?page=' + String(pageLoc) + '#review';
  })
});

//handle the review pagination at current tab
const full_url = document.location.href.split("/").pop();
let laststr = full_url.split("#")[1];
if (laststr == 'review'){
	$("#product-info-tab-one").removeClass('active');
	$("#product-info-tab-four").addClass('active');
	$("#info-tab-one").removeClass('active');
	$("#info-tab-four").addClass('active show');
	$("#tabContent4 .plusminus").text("-");
}

//handle total reviews counts
const total_reviews = $("#counts").val();
if (parseInt(total_reviews) == 0){
  $(".pagenumber").hide();
  $(".star_review_wrap").attr('src','images/img-rating-star-gray.png');
  $("#goToReview").css('color','#9f9f9f');
} else {
  $(".pagenumber").show();
  $(".star_review_wrap").attr('src','images/img-rating-star.png');
  $("#goToReview").css('color','#e1c37b');
}

$("#reviewWord").html(`${total_reviews} reviews`);
$("#goToReview").click(function(e){
  e.preventDefault();
  $("#product-info-tab-one").removeClass('active');
	$("#product-info-tab-four").addClass('active');
	$("#info-tab-one").removeClass('active');
	$("#info-tab-four").addClass('active show');
	$("#tabContent4 .plusminus").text("-");
  $('html, body').animate({scrollTop : $("#review").offset().top},1000);
});
