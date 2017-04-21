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
                <div class="linebreak5"></div>
              </div>
              <div class="form-group email">
                <p>EMAIL*<input id="form_email" type="text" name="email" class="form-control" required="required" data-error="Email is required."></p>
                <div class="help-block with-errors"></div>
                <div class="linebreak5"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="form-inline subjectrating">
              <div class="form-group subjectline">
                <p>SUBJECT LINE*<input id="form_subject" type="text" name="subject" class="form-control" required="required" data-error="Subject line is required."></p>
                <div class="help-block with-errors"></div>
                <div class="linebreak5"></div>
              </div>
              <div class="form-group yourrating">
                <div class="rating_label">YOUR RATING*</div>
                <div id="form_rating" required="required" data-error="Rating is required."></div>
                <input type="hidden" id="form-rating-score" type="text" name="rating" value="" />
                <div class="help-block with-errors"></div>
                <div class="linebreak5"></div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="form-inline">
              <div class="form-group msgtextbox">
                <label for="form_message">MESSAGE*</label>
                <textarea id="form_message" name="message" class="form-control" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
                <div class="linebreak5"></div>
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
  if (!$connErr){
    //prepare query
    if($stmt = $link->prepare("SELECT rateid,fname,email,subject,message,rate FROM `cc_$pid` ORDER BY rateid DESC LIMIT 0,5")){
			$stmt->execute();
			$stmt->bind_result($rateid,$name,$emailaddr,$subject,$message,$rating);
			$stmt->store_result();

      while ($stmt->fetch()){
    ?>
<div class="row">
  <div class="col-lg-1 col-lg-offset-0 col-md-1 col-md-offset-0 col-sm-1 col-sm-offset-1 hidden-xs testi_usr">
    <div class="scorecallback" data-score=<?php echo $rating; ?>></div>
    <p><?php echo $name;?> &nbsp</p>
    <p><i><?php echo $emailaddr;?></i></p>
  </div>
  <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-7 col-sm-offset-1 hidden-xs text-left">
    <p><h5><?php echo $subject;?></h5></p>
    <p><?php echo $message;?>
    </p>
  </div>
  <div class="visible-xs col-xs-12">
    <div class="row">
      <div class="col-xs-9 col-xs-offset-1 text-left">
        <div id="preview<?php echo $rateid;?>">
          <div class="scorecallback" data-score="<?php echo $rating; ?>"></div>
          <p><h5><?php echo $subject;?></h5></p>
          <p><?php echo limit_text($message, 19)?></p>
        </div>
        <div id="testi<?php echo $rateid;?>" class="collapse">
          <img src="../img/stars_rating.png"></img>
          <p><?php echo $name;?> &nbsp</p>
          <p><?php echo $emailaddr;?></p>
          <p><h5><?php echo $subject;?></h5></p>
          <p><?php echo $message;?>
          </p>
        </div>
      </div>
      <!--collapse content goes here -->
      <div class="col-xs-1 pull-right col-xs-pull-1">
        <div data-toggle="collapse" data-target="#testi<?php echo $rateid;?>" class="plusminus">+</div>
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
		$link->close();
	}

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
