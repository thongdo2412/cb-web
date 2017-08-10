<!-- include PHP template header file-->
<?php include("head.php"); ?>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
  #inf_form {display: none;}
  #response8 .form-control{width: 100%;}
  #inf_form label {font-weight: 300;}
  #inf_form textarea{border-radius: 0;width: 100%;margin-top: 8px;}
  #inf_custom_PreferredContactMethod_phone {margin-left: 10px;}
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
      <div class="col-lg-9 col-lg-offset-2 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1" id="maintext">
        <div id="res">
          <p>Thanks for filling that out!</p>
          <p>We really appreciate you giving us a moment of your time today.</p>
          <hr style="width:25%;">
        </div>
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
          <div class="linebreak2"></div>
        </div>
        <div id="response6">
          <br>
          <p>I'm sorry we didn't meet your expectations.</p>
          <p>Please fill out this form so a customer service expert can contact you and help improve your experience.</p>
          <div class="linebreak2"></div>
        </div>
        <div id ="inf_form">
          <form accept-charset="UTF-8" action="https://wn373.infusionsoft.com/app/form/process/be38e3815a518f31a6d9e799e0ca782a" class="infusion-form" id="inf_form_be38e3815a518f31a6d9e799e0ca782a" method="POST">
              <input name="inf_form_xid" type="hidden" value="be38e3815a518f31a6d9e799e0ca782a" />
              <input name="inf_form_name" type="hidden" value="Survey&#a; Web Form" />
              <input name="infusionsoft_version" type="hidden" value="1.67.0.58" />
              <input name="inf_field_FirstName" type="hidden" value="null" />
              <input name="inf_field_Email" type="hidden" value="null" />
              <div class="infusion-field" id="form-radio">
                  <label for="inf_custom_PreferredContactMethod">Would you rather be contacted by phone or email?</label>
                  <div class="infusion-radio">
                      <span class="infusion-option">
                          <input id="inf_custom_PreferredContactMethod_email" name="inf_custom_PreferredContactMethod" type="radio" value="email" />
                          <label for="inf_custom_PreferredContactMethod_email">email</label>
                      </span>
                      <span class="infusion-option">
                          <input id="inf_custom_PreferredContactMethod_phone" name="inf_custom_PreferredContactMethod" type="radio" value="phone" />
                          <label for="inf_custom_PreferredContactMethod_phone">phone</label>
                      </span>
                  </div>
                  <div class="linebreak2"></div>
              </div>
              <div class="infusion-field">
                  <label for="inf_custom_SurveySupportMessage" id="survey-support-label"></label>
                  <textarea id="inf_custom_SurveySupportMessage" name="inf_custom_SurveySupportMessage" rows="5">
              </textarea></div>
              <div class="linebreak2"></div>
              <div class="infusion-submit">
                  <button class="submitbtn button_blue pull-left" type="submit">SUBMIT</button>
                  <div class="clearfix"></div>
              </div>
          </form>
          <script type="text/javascript" src="https://wn373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
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
    var response = parseInt(getParameterByName('inf_custom_SurveyResponse'));
    var cusName = String(getParameterByName('inf_field_FirstName'));
    var cusEmail = String(getParameterByName('inf_field_Email'));
    var cusMessage = String(getParameterByName('inf_custom_SurveyComments'));

    var cusRating = '';

    if (response >= 9) { // customer response >=9
      $("#response10").css("display","block");
    }
    else if (response >= 7){ // customer response >= 7
      $("#response8").css("display","block");
      $("#inf_form").css("display","block");
      $("#form-radio").css("display","none");
      $("input[name='inf_field_FirstName']").val(cusName);
      $("input[name='inf_field_Email']").val(cusEmail);

      if (response == 7) {
        cusRating = '7';
      }
      else if (response == 8) {
        cusRating = '8';
      }

      $("#survey-support-label").html('What was the most important reason for the ' + cusRating + ' rating? And if there was one thing I could do to earn a 10 in the future, what would that be?');
      $("#inf_custom_SurveySupportMessage").val(cusMessage);
    }
    else { // customer response >= 6
      $("#response6").css("display","block");
      $("#inf_form").css("display","block");
      $("input[name='inf_field_FirstName']").val(cusName);
      $("input[name='inf_field_Email']").val(cusEmail);
      $("#survey-support-label").html("Enter anything you'd like us to know before we contact you:");
      $("#inf_custom_SurveySupportMessage").val(cusMessage);
    }

  </script>
  </body>
  </html>
