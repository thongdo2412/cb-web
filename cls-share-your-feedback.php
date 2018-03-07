<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>City Lips&reg; - Share Your Feedback</title>

<?php  include("header.php"); ?>
  <link href="https://fonts.googleapis.com/css?family=Scheherazade" rel="stylesheet">

  <style>
    h1,h2,h3,h4 {line-height: 24px; margin: 0 0 20px;}
    h1 {font-family: "Playfair Display", serif; font-size: 40px;}
    h2 {font-size: 30px;}
    h3 {font-size: 25px;}
    h4 {font-size: 20px; margin: 0;}
    html,body {font-size: 16px; font-family: "Montserrat", sans-serif;font-weight: 300;}
    .regular_font {font-family: "Montserrat", sans-serif;}
    .playfair_font {font-family: "Playfair Display", serif;}
    .sche_font {font-family: "Scheherazade", serif;font-size: 111px;}
    b {font-weight: 500;}
    .linebreak20 {margin-top: 20px;}
    .linebreak30 {margin-top: 30px;}
    .linebreak60 {margin-top: 60px;}
    .container {width: 1170px; }
    .gray_bg {background-color: #f4f4f4; padding: 55px;}
    .gray_bg_content {width: 550px;}
    .content_box {padding: 50px 0;}
    .flex_container1{
      padding: 0;margin: 0 auto;list-style: none; justify-content: space-between;
      display: -webkit-box;display: -moz-box;display: -ms-flexbox;
      display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;
    }
    .flex_container2{
      padding: 0;margin: 0 auto;list-style: none; justify-content: flex-start;
      display: -webkit-box;display: -moz-box;display: -ms-flexbox;
      display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;
    }
    .left_gap {margin-left: 26px; text-align: left; margin-top: -25px;}
    .left_content {width: 90px; font-size: 20px;}
    .right_content {width: 200px; font-size: 20px;}
    .long_btn {
      padding: 10px 0; text-transform: uppercase; width: 370px; margin-top: 40px;
      font-size: 14px;
    }
    a,a:hover {text-decoration: none; color: #ffffff;}
    .form_content {width: 660px;}
    .input_content {margin-bottom: 30px!important;}
    .cb_form_control {
      display: block;
      height: 32px;
      width: 100%;
      padding-left: 18px;
    }
    .cb_text_area {
      display: block;
      width: 100%;
      padding-left: 18px;
    }
    #form_left_content div {margin: 0;}
    #radio_choice div {margin: 0;}
    label {margin-bottom: 10px;}
    input[type=radio] { margin-right: 16px;}

    footer {height: 224px;padding: 60px 0;}
    ul li {margin: 0;}
    .footerItem {
    	text-align: left;
      margin-bottom: 26px;
    }
    .footer-img { margin-right: 10px; }
    .footer-img-caption { position: relative; top: 2px; }
    .company-info {
      width: 290px; margin-bottom: 26px;
    }
    .rightestCol { line-height: 18px; }

  </style>

    </header>

    <div class="container">
      <div class="content_box">
        <h1>We Are Sorry We Did Not Meet Your Expectations</h1>
        <h2><i>We really want to hear from you</i></h2>
        <div class="linebreak30"></div>
        <div>Please fill out this form so a customer service expert can contact you and help improve your experience.</div>
      </div>
      <div class="gray_bg">
        <form id="feedbackform" method="post" action="scripts/feedbackform_mail.php" role="form">
          <div class="text-left">
            <div class="input_content">
              <label>1. Please enter your name</label>
              <input type="text" name="name" class="cb_form_control" placeholder="Enter your name"/>
            </div>
            <div class="input_content">
              <label>2. Please enter your email</label>
              <input type="text" name="email" class="cb_form_control" placeholder="Enter your email"/>
            </div>
            <div class="input_content">
              <label>3. Please enter your phone number</label>
              <input type="text" name="phone" class="cb_form_control" placeholder="Enter your phone number"/>
            </div>
            <div class="input_content">
              <label>4. Would you rather be contacted by phone or email?</label>
              <div class="flex_container2" id="radio_choice">
                <div><input type="radio" name="contact_type" value="phone">Phone</div>
                <div style="margin-left: 30px;"><input type="radio" name="contact_type" value="email">Email</div>
              </div>
            </div>
          </div>
          <div class="text-left">
            <label>5. Enter anything you'd like us to know before we contact you</label>
            <textarea rows="6" name="message" class="cb_text_area" placeholder="Enter your message"></textarea>
          </div>
          <input href="#" name="submit" type="submit" id="submit" class="button_blue long_btn" value="submit feedback"/>
        </form>
      </div>
      <div class="linebreak60"></div>
    </div>
    <?php include ("footer.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $("#feedbackform").submit(function(){
        let name = $("input[name='name']").val();
        let email = $("input[name='email']").val();
        let phone = $("input[name='phone']").val();
        let contact_type = $("input[name='contact_type']:checked").val();
        let message = $("textarea[name='message']").val();

        if (!name) {
          alert("Please enter your name!");
          return false;
        }
        if (!phone) {
          alert("Please enter your phone number!");
          return false;
        }
        if (!email) {
          alert("Please enter your email!");
          return false;
        }
        if (!contact_type) {
          alert("Please enter your preferred contact method!");
          return false;
        }
        if (!message) {
          alert("Please enter your message!");
          return false;
        }
      });
    </script>
  </body>
</html>
