<?php // redirect when the referrer url is not from inf
  if (!isset($_GET['inf_field_Email'])) {
    $url = "https://citybeauty.com/specialoffer/ftc-expired.php";
    if(!headers_sent()) {
        //If headers not sent yet... then do php redirect
        header('Location: '.$url);
        exit;
    } else {
        //If headers are sent... do javascript redirect... if javascript disabled, do html redirect.
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
        exit;
    }
  }
 ?>
<!Doctype html>
<html>
    <head>
      <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
      <meta charset="utf-8">
      <meta name="description" content="">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700">
      <style>
        body{color: #333; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 300; margin: 0; padding: 0;}
        .content{width: 900px; margin: auto;}
        .container {width: 960px;}
        .centered_flex {display: flex;justify-content: center;align-items: center;}
        h1{font-size: 35px;}
        h2{font-size: 27px;}
        h3{font-size: 20px;}
        b{font-weight: 700;}

        header,footer {background: #000000 repeat;color: #fff;margin: 0 auto;}
        footer {height: 50px;font-size: 14px;}
        header {height: 84px;}
        footer a{text-decoration: none; color: #fff;}
        .sup {vertical-align: top;position: relative; top: -4px;}
        .blackHeader {background-color: #091e37; width: 100%; height: 84px;}
        .office_hours{font-size: 12px;font-family: "Montserrat", sans-serif;color: rgb(0, 0, 0);font-weight: 300;text-align: center;
        border-bottom: 1px solid rgb(235, 235, 235);padding: 10px;}
        .step123 {margin-top: 20px;}
        .step123 img {box-shadow: 3px 3px 3px #cccccc;}
        .wait {background: url('https://www.mcssl.com/content/202584/00-US/wait-US.png') no-repeat top center; font-size: 23px; height: 115px; width: 770px; padding: 45px 0 0 600px; margin: auto;margin-top: 30px;}
        .topOffer{font-size: 27px; background-color: #ebcc2b; width: 100%; padding: 20px; margin-top: 25px;}
        .heroContent {background: url('https://www.mcssl.com/content/202584/00-US/citylips-1.png') no-repeat; padding-left: 190px; height: 400px; width: 400px; margin: auto;}
        .offer-breakdown{padding-top: 50px;}
        .fnt24{font-size: 25px;}
        .mbg {background: url('https://www.mcssl.com/content/202584/00-US/mbg.png') no-repeat 95% 25%; padding:20px 200px 20px 20px; width: 725px; border: 1px solid; margin: auto;}

        .center{text-align: center;}
        .reg{font-size: small; vertical-align: super;}
        .red{color: #C00;}
        .green{color: #499464;}
        .floatR {float: right;}
        .floatL {float: left;}
        .clear {clear: both;}
        .infusion-form button{background: #fff;border: none;}
      </style>
    </head>
    <body>

      <!--<div class="blackHeader center"><img src="https://www.mcssl.com/content/202584/citygoldlogo.png" alt="" style="margin: 22px;"></div>
      <div class="center"><img src="https://www.mcssl.com/content/202584/00-US/city-below-logo.png" alt="" class="src"></div> -->
      <header class="centered_flex">
          <div class="content center">
            <img src="../img/logo.png" alt=""/> <span class="sup">&reg;</span>
          </div>
        </header>

        <div class="office_hours">
          <div class="content center">
            <b>1-800-347-1558</b>  /   Monday-Friday: 5am-7pm PT   /   Saturday-Sunday: 6am-4:30pm PT
          </div>
        </div>
        <div class="step123 centered_flex"><img src="../img/step123-banner.png" alt=""/></div>
      <div class="wait"><span style="font-size:27px;">Last Chance To Get City Lips</span> <br>For An Unbeatable Price</div>
      <div class="topOffer center">Get 3 Tubes of City Lips <br> Added To Your Order For Just $25 Each</div>
      <div class="center"><img src="https://www.mcssl.com/content/202584/00-US/polygon.png" alt="" height="20px"></div>
        <div class="heroContent center">
          <div class="offer-breakdown">
          <h3>Add Just 3 Tubes of City Lips <br>And <b>Save $30 Off</b> Regular Price</h3>
            <p class="fnt24">Was: <s>$35 per tube</s><br>Now: $25 per tube </p>
            <p class="fnt24">You Save: $30*</p>
            <p>&nbsp;</p>
            <p>*This is a one-time opportunity and <br>only available as an add-on to your current order</p>
          </div>
        </div>

      <div class="clear"></div>

      <div class="content">
        <h3>Why Are We Doing This?</h3>
        <p>I understand that adding 6 tubes might feel like a lot. Especially if this is your first time experiencing this amazing formula.</p>
        <p>But I don't want you to miss out on this opportunity. Never will you find City Lips for only $25 per tube.</p>
        <p>That's why I'm giving you this chance. So you can add just 3 tubes to your order and still get the best price on City Lips.</p>

        <h3>Don't Decide Today</h3>
        <p>As always...your order is backed by our 60-day money back guarantee. If you're not completely satisfied - for whatever reason - just send it back for an immediate refund.</p>
        <p>Click below to add this special to your order for only $25 per tube.</p>

        <div align="center"><br />
          <form accept-charset="UTF-8" action="https://wn373.infusionsoft.com/app/form/process/30604d7a75c85d7fe2fce623816d8254" class="infusion-form" id="inf_form_30604d7a75c85d7fe2fce623816d8254" method="POST">
              <input name="inf_form_xid" type="hidden" value="30604d7a75c85d7fe2fce623816d8254" />
              <input name="inf_form_name" type="hidden" value="3DS" />
              <input name="infusionsoft_version" type="hidden" value="1.67.0.60" />
              <input name="inf_field_Email" type="hidden" value="null" />
              <div class="infusion-submit">
                  <button type="submit"><img src="img/yes.jpg" alt=""></button>
              </div>
          </form>
          <script type="text/javascript" src="https://wn373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
        </div>
        <p align="center">Or...<br /> <br />
          <a href="OTOCL6V.php" id="no-link"><img src="img/no.jpg" alt=""></a>
        </p>
        <p>&nbsp;</p>
      </div>

        <div class="mbg center">
          <p>As always, your entire order is backed by our <u>100% Money Back Guarantee</u>. If you don’t fall in love with <i>City Lips<span class="reg">&reg;</span></i> right away, call us and we’ll refund every penny.</p>
          <p><b>We want you to have a superior customer experience.</b></p>
          <p>That’s why our customer support experts are available by phone 7 days a week.</p>
          <p>That’s also why we make sure your order leaves our warehouse <u>next-day or faster</u>. You’ll receive an email with shipment tracking as soon as your order is shipped.</p>
          <p>If you have any questions of concerns about your order, just give us a call at 1-800-347-1558.</p>
        </div>
        <p>&nbsp;</p>
        <footer class="centered_flex">
            <div class="container">
              <div class="floatL">2017 &copy City Beauty LLC. City Lips® is a registered trademark of City Beauty LLC. All rights reserved.</div>
              <div class="floatR"><a href="http://citycosmetics.com/privacy.php" target="_BLANK" onclick="return !window.open(this.href, 'Terms', 'scrollbars=1,width=500,height=500')">Privacy Policy</a> | <a href="http://citycosmetics.com/terms.php" target="_BLANK" onclick="return !window.open(this.href, 'Terms', 'scrollbars=1,width=500,height=500')">Terms & Conditions</a></div>
              <div class="clear"></div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../js/otoscript.js"></script>
    </body>
</html>
