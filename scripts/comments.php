<div data-toggle="collapse" data-target="#reviewpanel" class="review_link">WRITE A REVIEW</div>
    <!--review system inserted here-->
  <div class="linebreak3"></div>
  <div id="reviewpanel" class="collapse">
    <hr>
    <div class="row">
      <div class="col">
          <form id="review_form" method="post" action="" role="form">
            <input type="hidden" id="action" name="action" value="submit_review">
            <div class="form-inline">
              <div class="form-group firstname">
                <p>FIRST NAME*<input id="form_fname" type="text" name="fname" class="form-control" required="required" data-error="First name is required."></p>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group email">
                <p>EMAIL*<input id="form_email" type="text" name="email" class="form-control" required="required" data-error="Email is required."></p>
                <div class="help-block with-errors"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="form-inline subjectrating">
              <div class="form-group subjectline">
                <p>SUBJECT LINE*<input id="form_subject" type="text" name="subject" class="form-control" required="required" data-error="Subject line is required."></p>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group yourrating">
                <div class="rating_label">YOUR RATING*</div>
                <div id="form_rating" required="required" data-error="Rating is required."></div>
                <input type="hidden" id="form-rating-score" type="text" name="rating" value="" />
                <div class="help-block with-errors"></div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="form-inline">
              <div class="form-group msgtextbox">
                <label for="form_message">MESSAGE*</label>
                <textarea id="form_message" name="message" class="form-control" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group recommenddiv">
              <div>I would recommend this to a friend*</div>
              <div>
                <label class="radio-inline"><input type="radio" name="recradio" value="yes">Yes</label>
                <label class="radio-inline"><input type="radio" name="recradio" value="no">No</label>
              </div>
            </div>
            <div class="linebreak2"></div>
            <div class="btn_wrapper"><input type="submit" class="submitbtn button_blue" value="SUBMIT"></div>
            <div class="clearfix"></div>
          </form>
      </div>
    </div>
  </div>
  <div class="linebreak2"></div>
<hr>
<div id="reviews_display">
  <!--begins display-->
  <?php
  $res_per_page = 5; //set the limit of reviews per page
  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
  $start_from = ($page - 1) * $res_per_page;

  if (!$connErr){
    if($stmt = $link->prepare("SELECT `rateid` FROM `cc_$pid`")){ //query to get the total of reviews
      $stmt->execute();
      $stmt->store_result();
      $count = $stmt->num_rows;
      $stmt->free_result();
      $stmt->close();
    }

    //prepare query
    if($stmt = $link->prepare("SELECT rateid,fname,email,subject,message,rate,recommend,DATE_FORMAT(postdate, '%m-%d-%Y'),helpful_y,helpful_n FROM `cc_$pid` WHERE rate >= 3 ORDER BY postdate DESC LIMIT $start_from,$res_per_page")){
			$stmt->execute();
			$stmt->bind_result($rateid,$name,$emailaddr,$subject,$message,$rating,$recommend,$date,$helpful_y,$helpful_n);
			$stmt->store_result();
      while ($stmt->fetch()){
    ?>
<div class="row">
  <div class="col-lg-1 col-lg-offset-0 col-md-1 col-md-offset-0 col-sm-1 col-sm-offset-1 hidden-xs testi_usr">
    <div class="scorecallback" data-score=<?php echo $rating; ?>></div>
    <div class="linebreak1"></div>
    <div><?php echo $name; ?> &nbsp</div>
    <div class="linebreak1"></div>
    <div><?php echo $date; ?></div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-8 hidden-xs text-left">
    <p><h5><?php echo $subject;?></h5></p>
    <div class="linebreak2"></div>
    <p><?php echo $message;?></p>
    <div class="linebreak2"></div>
    <?php if ($recommend == '1') {
      echo '<div><img src="img/checked.png" alt="checked box"> I would recommend ' .$page_title. ' to a friend!</div>';
    }
      ?>
    <div class="linebreak2"></div>
    <!--insert the helpful feature-->
      <div class="helpful_wrd">Was this review helpful?</div>
      <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',true)">
        <img src="img/voteUp.png" alt="up" class="inbutton_text"><div class="inbutton_text"><?php echo $helpful_y;?></div>
      </div>
      <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',false)">
        <img src="img/voteDown.png" alt="down" class="inbutton_text"><div class="inbutton_text"><?php echo $helpful_n;?></div>
      </div>
      <div class="clearfix"></div>
    <div class="linebreak2"></div>
    <p>*Results may vary by individual.</p>
  </div>
  <div class="visible-xs col-xs-12">
    <div class="row">
      <div class="col-xs-9 col-xs-offset-1 text-left">
        <div id="preview<?php echo $rateid;?>">
          <div class="scorecallback" data-score="<?php echo $rating; ?>"></div>
          <p><h5><?php echo $subject;?></h5></p>
          <div class="linebreak2"></div>
          <?php echo limit_text($message, 19); ?>
        </div>
        <div id="testi<?php echo $rateid;?>" class="collapse">
          <img src="../img/stars_rating.png"></img>
          <div><?php echo $name;?> &nbsp</div>
          <div class="linebreak1"></div>
          <div><?php echo $date; ?></div>
          <div class="linebreak1"></div>
          <p><h5><?php echo $subject;?></h5></p>
          <div class="linebreak2"></div>
          <p><?php echo $message;?></p>
          <div class="linebreak2"></div>
          <?php if ($recommend == '1') {
            echo '<div><img src="img/checked.png" alt="checked box"> I would recommend ' .$page_title. ' to a friend!</div>';
          }
            ?>
          <div class="linebreak2"></div>
          <!--insert the helpful feature-->
            <div class="helpful_wrd">Was this review helpful?</div>
            <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',true)">
              <img src="img/voteUp.png" alt="up" class="inbutton_text"><div class="inbutton_text"><?php echo $helpful_y;?></div>
            </div>
            <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',false)">
              <img src="img/voteDown.png" alt="down" class="inbutton_text"><div class="inbutton_text"><?php echo $helpful_n;?></div>
            </div>
          <div class="clearfix"></div>
          <div class="linebreak2"></div>
          *Results may vary by individual.
        </div>
      </div>
      <!--collapse content goes here -->
      <div class="col-xs-1 pull-right col-xs-pull-1">
        <div data-toggle="collapse" data-target="#testi<?php echo $rateid;?>" class="plusminus_revw">+</div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<hr>
<!--ends display-->
<?php
      }
	    $stmt->free_result();
		  $stmt->close();
    }
    ?>
      <input type="hidden" id="counts" value="<?php echo $count;?>"> <!--line to return the counts of reviews-->
    <?php
		  $link->close();
	 }
   $total_pages = ceil($count / $res_per_page); //calculates total pages to display
   ?>
   <div class="pagenumber">
     <input type="hidden" id="current-page" value="<?php echo $page; ?>">
     <input type="hidden" id="total-pages" value="35">
     <input type="hidden" id="pageName" value="<?php echo $pid; ?>">
     <a href="#" name="pre-next" id="pre-page">Pre</a>
     <span id="pagenumbers_nav">
     </span>
     <a href="#" name="pre-next" id="next-page">Next</a>
  </div>
   <?php

  function limit_text($text, $limit) { //function to display the first amount of words of a text
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  function helfpul(pageid,rateid,isHelpFul){
    if (isHelpFul) {
      dbfield = "helpful_y";
    }
    else {
      dbfield = "helpful_n";
    }
    $.ajax({
      type: 'GET',
      url: 'scripts/helpful.php',
      data: {tablename:pageid, rateid:rateid, fieldname:dbfield},
      success: function() {
        location.reload(); // reload the page.(3)
      }
    });
  }
  $(function (){
    pageLoc = parseInt($("#current-page").val());
    pageTotal = parseInt($("#total-pages").val());
    pagename = $("#pageName").val();
    limit = 5;//limited displays the page numbers

    //handles Pre and Next button display when page #1 and page #total
    if (pageLoc == 1) {
      $("#pre-page").css("display","none");
    }
    if (pageLoc == pageTotal){
      $("#next-page").css("display","none");
    }

    if (pageLoc <= limit) { // checks the current page is in the first limit pages, ie: limit = 5, current page is in the first 5 pages
      if (pageTotal < limit){ //checks if total of pages is less than limit page display, then assign new limit to total page
        limit = pageTotal;
      }

      for (i=1;i<=limit;i++){
        navHtml = '<a href="' + pagename +'.php?page='+ i +'#testi"';
        if (i == pageLoc){navHtml = navHtml + 'class="curPage"';}
        navHtml = navHtml + '>' + i + '</a>';
        $("#pagenumbers_nav").append(navHtml + ' ');
      }
    }
    else if (pageLoc>pageTotal-limit) {// checks the current page in the last limit pages, ie: limit = 5, current page is in the last 5 pages
      $("#pagenumbers_nav").empty();
      navHtml = '<a href="' + pagename +'.php?page=1#testi">1</a>';
      $("#pagenumbers_nav").append(navHtml + " ...");
      for (i = limit-1;i>=0;i--){
        navHtml = '<a href="' + pagename +'.php?page='+ (pageTotal-i) +'#testi"';
        if ((pageTotal-i) == pageLoc){ navHtml = navHtml + 'class="curPage"'; }
        navHtml = navHtml + '>' + (pageTotal-i) + '</a>';
        $("#pagenumbers_nav").append(' '+ navHtml + ' ');
      }
    }
    else { // last scenario, checks if the current page is between the first and last limit pages, ie: limit = 5, 6<=current page<=total page - 5
      $("#pagenumbers_nav").empty();
      navHtml = '<a href="' + pagename +'.php?page=1#testi">1</a>';
      $("#pagenumbers_nav").append(navHtml + " ...");
      for (i = pageLoc-2;i<=pageLoc+2;i++){
        navHtml = '<a href="' + pagename +'.php?page='+ i +'#testi"';
        if (i == pageLoc){
          navHtml = navHtml + 'class="curPage"';
        }
        navHtml = navHtml + '>' + i + '</a>';
        $("#pagenumbers_nav").append(' '+ navHtml + ' ');
      }
      navHtml = '<a href="' + pagename +'.php?page='+ pageTotal +'#testi">'+pageTotal+'</a>';
      $("#pagenumbers_nav").append(" ... " + navHtml);
    }

    $("a[name='pre-next']").click(function(event){
      event.preventDefault();
      if ($(this).attr('id') == 'pre-page' ) {
        pageLoc--;
      }
      if ($(this).attr('id') == 'next-page' ) {
        pageLoc++;
      }
      window.location = pagename + '.php?page=' + String(pageLoc) + '#testi';
    })



  });
</script>
</div>
