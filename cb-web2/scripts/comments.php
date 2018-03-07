<div data-toggle="collapse" data-target="#reviewpanel" class="review_link">WRITE A REVIEW</div>
    <!--review system inserted here-->
  <div id="reviewpanel" class="collapse">
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
          <input type="hidden" id="form-rating-score" type="text" name="rating" value="5" />
          <div class="help-block with-errors"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-inline">
        <div class="form-group msgtextbox">
          <label for="form_message">MESSAGE*</label>
          <textarea id="form_message" name="message" class="form-control" cols="77" rows="4" required="required" data-error="Please,leave us a message."></textarea>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group recommenddiv">
        <div>I would recommend this to a friend*</div>
        <div>
          <label class="radio-inline"><input type="radio" name="recradio" value="yes" checked="checked">Yes</label>
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
  <hr>
<div id="review">
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
    if($stmt = $link->prepare("SELECT rateid,fname,email,subject,message,rate,recommend,DATE_FORMAT(postdate, '%m-%d-%Y'),helpful_y,helpful_n FROM `cc_$pid` WHERE approved = 1 OR uid = '$id' ORDER BY rate DESC,postdate DESC LIMIT $start_from,$res_per_page")){
      $stmt->execute();
			$stmt->bind_result($rateid,$name,$emailaddr,$subject,$message,$rating,$recommend,$date,$helpful_y,$helpful_n);
			$stmt->store_result();
      while ($stmt->fetch()){
    ?>
    <div class="row text-left">
      <div class="col-md-2 hidden-sm testi_usr">
        <div class="scorecallback" data-score=<?php echo $rating; ?>></div>
        <div class="linebreak10"></div>
        <div><?php echo $name; ?> &nbsp;</div>
        <div class="linebreak10"></div>
        <div><?php echo $date; ?></div>
      </div>
      <div class="col-md-10 hidden-sm">
        <h5><?php echo $subject;?></h5>
        <div class="linebreak20"></div>
        <p><?php echo $message;?></p>
        <div class="linebreak20"></div>
        <?php if ($recommend == '1') {
          echo '<div class="recommended_check"><img src="images/checked.png" alt="checked box"> I would recommend ' .$page_title. ' to a friend!</div>';
        }
          ?>
        <div class="linebreak20"></div>
        <!--insert the helpful feature-->
        <div class="helpful_section">
          <div class="helpful_wrd">Was this review helpful?</div>
          <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',true)">
            <div class="inbutton_text" id ="yes-<?php echo $rateid;?>">YES - <?php echo $helpful_y;?></div>
          </div>
          <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',false)">
            <div class="inbutton_text" id ="no-<?php echo $rateid;?>" >NO - <?php echo $helpful_n;?></div>
          </div>
        </div>
          <div class="clearfix"></div>
        <div class="linebreak20"></div>
        <p>*Results may vary by individual.</p>
      </div>
      <div class="visible-sm col-sm-12">
          <div class="col-sm-11 col-xs-11 text-left">
            <div id="preview<?php echo $rateid;?>">
              <div class="scorecallback" data-score="<?php echo $rating; ?>"></div>
              <h5><?php echo $subject;?></h5>
              <div class="linebreak20"></div>
              <?php echo limit_text($message, 19); ?>
            </div>
            <div id="review<?php echo $rateid;?>" class="collapse">
              <img src="../img/stars_rating.png">
              <div><?php echo $name;?> &nbsp;</div>
              <div class="linebreak10"></div>
              <div><?php echo $date; ?></div>
              <div class="linebreak10"></div>
              <p><h5><?php echo $subject;?></h5></p>
              <div class="linebreak20"></div>
              <p><?php echo $message;?></p>
              <div class="linebreak20"></div>
              <?php if ($recommend == '1') {
                echo '<div><img src="images/checked.png" alt="checked box"> I would recommend ' .$page_title. ' to a friend!</div>';
              }
                ?>
              <div class="linebreak20"></div>
              <!--insert the helpful feature-->
                <div class="helpful_wrd">Was this review helpful?</div>
                  <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',true)">
                    <div class="inbutton_text">YES - <?php echo $helpful_y;?></div>
                  </div>
                  <div class="button_review helpful_item" onclick="helfpul('<?php echo $pid; ?>','<?php echo $rateid;?>',false)">
                    <div class="inbutton_text">NO - <?php echo $helpful_n;?></div>
                  </div>
              <div class="clearfix"></div>
              <div class="linebreak2"></div>
              *Results may vary by individual.
            </div>
          </div>
          <!--collapse content goes here -->
          <div class="col-sm-1 col-xs-1">
            <div data-toggle="collapse" data-target="#review<?php echo $rateid;?>" class="plusminus_revw">+</div>
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
   /* <?php echo $total_pages; ?> */
   ?>
   <div class="pagenumber">
     <input type="hidden" id="current-page" value="<?php echo $page; ?>">
     <input type="hidden" id="total-pages" value="<?php echo $total_pages; ?>">
     <a href="#" name="pre-next" id="pre-page"><i class="fa fa-angle-left"></i></a>
     <span id="pagenumbers_nav"></span>
     <a href="#" name="pre-next" id="next-page"><i class="fa fa-angle-right"></i></a>
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
</div>
