<!-- include PHP template header file-->
<?php include("head.php"); ?>
<title>Thank You For Your Response</title>
<style type="text/css">
  body{font-family: "Montserrat", sans-serif;font-weight: 300;}
  .cruel-free{margin-left: -4px;}
  .linebreak5{margin-top: 30px;}
  .cream-swatch img{width: 300px;}
  #content {padding: 30px 20px;}
  #maintext {text-align: left;}
  #res {text-align: center;}
  #response6{display: none;}
  #response8{display: none;}
  #response10{display: none;}
  .form-control{width: 220px;height: 34px;}
  #response8 .form-control{width: 100%;}
  div.form-group textarea.form-control{border-radius: 0;width: 100%;}
  div.form-group input{margin: 0;}
  a{color: #e1c37b; }
  a:hover {color: #e1c37b;}
  h2{font-size: 40px;}
  /*Responsive for different screen*/
  @media screen and (min-width: 1199px) {.social-wrap{margin-left: 42px;}}
  @media screen and (max-width: 767px){#maintext {margin-top: 0; margin-left: 20px;margin-right: 20px;}}
</style>
</head>
<body>
  <!--head and navigation content-->
<?php include ("header.php"); ?>
<div id ="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 col-lg-offset-1 col-md-11 col-sm-11" id="maintext">
        <div id="res">
          <p>Thanks for filling that out!</p>
          <p>We really appreciate you giving us a moment of your time today. </p>
          <hr style="width:25%;">
        </div>
        <input id="form_contactid" type="hidden" name="contactid" value="">
        <div id="response10">
          <br>
          <p>Share Your Experience For A Chance to Win</p>
          <p>If you have just 30 seconds, would you be willing to write a quick review and share your experience?</p>
          <p>As a bonus…</p>
          <p><b>You'll be automatically entered to win a $250 gift card.</b> That's $250 you could use toward any City Beauty product of your choice.  A new winner is chosen every month.</p>
          <p>Here's how:</p>
          <p>Click the link below and leave a review for your favorite product(s).</p>
          <p><a href='/'>Click here</a> to get started.</p>
          <p>All you have to do is use an email where you can be reached if you are a winner. Good luck!</p>
        </div>
        <div id="response8">
          <br>
          <p>Thank you so much for taking the time to respond.</p>
          <p>We are always striving to meet the needs of honest people like yourself.</p>
          <p>So I have to ask...</p>
          <form id="survey-res8" method="post" action="scripts/contactform_mail.php" role="form">
            <div class="form-group">
              <label>What was the most important reason for the <span id="feedback-rating"></span> rating?</label>
              <input id="form_reason" type="text" name="reason" class="form-control" required="required" data-error="First name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label>And if there was one thing I could do to earn a 10 in the future, what would that be?</label>
              <input id="form_suggest" type="text" name="suggestion" class="form-control" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label>Please enter your name:</label>
              <input id="form_fname8" type="text" name="name" class="form-control" required="required" data-error="First name is required." placeholder="Your name">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label>Please enter your email:</label>
              <input id="form_email8" type="email" name="email" class="form-control" required="required" data-error="Valid email is required." placeholder="Your email">
              <div class="help-block with-errors"></div>
            </div>
            <input id="form_subject" type="hidden" name="subject" value="Customer Survey Feedback">
            <p>Your answer will go a long way to help us better serve you.</p>
            <button type="submit" class="submitbtn button_blue">SUBMIT</button>
            <div class="clearfix"></div>
          </form>
        </div>
        <div id="response6">
          <br>
          <p>I'm sorry we didn't meet your expectations.</p>
          <p>Please fill out this form so we can contact you and try to make things right.</p>
          <br>
          <form id="survey-res6" method="post" action="scripts/contactform_mail.php" role="form">
            <div class="form-group">
              <label>Please enter your name:</label>
              <input id="form_fname6" type="text" name="name" class="form-control" required="required" data-error="First name is required." placeholder="Your name" value="">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label>Please enter your email:</label>
              <input id="form_email6" type="email" name="email" class="form-control" required="required" data-error="Valid email is required." placeholder="Your email" value="">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label>Please enter your phone number:</label>
              <input id="form_phone" type="phone" name="phone" class="form-control" required="required" data-error="Phone number is required." placeholder="Your phone number">
              <div class="help-block with-errors"></div>
            </div>
            <input id="form_subject" type="hidden" name="subject" value="Customer Survey Support">
            <div class="form-group">
              <label>Would you rather be contacted by phone or email?</label>
              <div>
                <label class="radio-inline"><input type="radio" name="contactby" value="phone">Phone</label>
                <label class="radio-inline"><input type="radio" name="contactby" value="email">Email</label>
              </div>
            </div>
            <div class="form-group">
              <label for="form_message">Enter anything you'd like us to know before we contact you:</label>
              <textarea id="form_message" name="message" rows="6" class="form-control" required="required" data-error="Please,leave us a message." placeholder="Enter your message"></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <button type="submit" class="submitbtn button_blue">SUBMIT</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <!--include PHP footer template -->
  <?php include ("footer.php"); ?>
  <script type="text/javascript">
    // function to set the height on fly
    function autoHeight() {
      $('#content').css('min-height', 0);
      $('#content').css('min-height', (
        $(document).height() - $('header').height() - $('nav').height() - 20 - $('footer').height()));
    }

    // onDocumentReady function bind
    $(document).ready(function() {
      autoHeight();
    });

    // onResize bind of the function
    $(window).resize(function() {
      autoHeight();
    });

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    //Add me to a thank you page using an html snippet
    //You must change the landing_page_url  variable to your landing page URL for this script to work.
    var Response = getParameterByName('inf_option_Surveyresponse');
    var contact_id = String(getParameterByName('contactId'));
    var cusName = String(getParameterByName('inf_field_FirstName'));
    var cusEmail = String(getParameterByName('inf_field_Email'));
    var Response = '331';
    if (parseInt(Response) >= 335) {
      $("#response10").css("display","block");
    }
    else if (parseInt(Response) >= 331){
      if (parseInt(Response) == 331) {
        $("#feedback-rating").html("7");
      }
      else if (parseInt(Response) == 333) {
        $("#feedback-rating").html("8");
      }
      $("#form_fname8").val(cusName);
      $("#form_email8").val(cusEmail);
      $("#response8").css("display","block");
      $("#form_contactid").val(contact_id);
    }
    else {
      $("#response6").css("display","block");
      $("#form_fname6").val(cusName);
      $("#form_email6").val(cusEmail);
      $("#form_contactid").val(contact_id);
    }

  </script>
  </body>
  </html>
