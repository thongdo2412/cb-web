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
      .office_hours{font-size: 12px;font-family: "Montserrat", sans-serif;color: rgb(0, 0, 0);font-weight: 300;text-align: center;
      border-bottom: 1px solid rgb(235, 235, 235);padding: 10px;}
      .step123 {margin-top: 20px;}
      .step123 img {box-shadow: 3px 3px 3px #cccccc;}
      .blackHeader {background-color: #000; width: 100%; height: 84px; margin-bottom: 125px;}
      .wait {background: url('https://www.mcssl.com/content/202584/00-US/wait-US.png') no-repeat top center; font-size: 23px; height: 115px; width: 770px; padding: 45px 0 0 600px; margin: auto;margin-top: 30px;}
      .topOffer{font-size: 27px; background-color: #ebcc2b; width: 100%; padding: 20px; margin-top: 25px;}
      .heroOffer {background: url('https://www.mcssl.com/content/202584/00-US/nybg.png') no-repeat; background-size: 100%; height: 500px;}
      .heroContent {width:900px; margin: auto; padding-top: 25px;}
      .productShot {background: url('https://www.mcssl.com/content/202584/00-US/6COLORSUS.png') no-repeat; background-size: 729px; padding-top: 295px; width: 725px; font-size: 23px;}
      .mbg {background: url('https://www.mcssl.com/content/202584/00-US/mbg.png') no-repeat 95% 25%; padding:20px 200px 20px 20px; width: 725px; border: 1px solid; margin: auto;}

      .center{text-align: center;}
      .reg{font-size: small; vertical-align: super;}
      .red{color: #C00;}
      .green{color: #499464;}
      .blue{color: #3a5eac;}
      .floatR {float: right;}
      .floatL {float: left;}
      .clear {clear: both;}
      .perTube{display: inline-block; padding-left: 43px;}
      .priceProp{text-align: left;padding-top: 60px; font-size: 27px; margin-left: -25px;}
      .ftn36{font-size: 36px;}
      .fnt27{font-size: 27px;}
      .infusion-form button{background: #fff;border: none;}
    </style>
  </head>
  <body>

    <!--<div class="blackHeader center"><img src="https://www.mcssl.com/content/202584/00-US/citylips-us-head.png" alt=""></div>-->
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
    <div class="wait"><p style="font-size:29px; margin-top:15px;">How Would You Like To...</p></div>
    <div class="topOffer center">Try City Lips<span class="reg">&reg;</span> in 6 Colors<br>and <b>Save 50%</b> Off Regular Price</div>

    <div class="heroOffer center">
      <img src="https://www.mcssl.com/content/202584/00-US/polygon.png" alt="" height="20px">
      <div class="heroContent center">
        <div class="productShot floatL">
            <p class="perTube" style="margin-left: 97px;"><s class="red">$40</s><br>$20</p>
            <p class="perTube"><s class="red">$40</s><br>$20</p>
            <p class="perTube"><s class="red">$40</s><br>$20</p>
            <p class="perTube"><s class="red">$40</s><br>$20</p>
            <p class="perTube"><s class="red">$40</s><br>$20</p>
            <p class="perTube"><s class="red">$40</s><br>$20</p>

        </div>
        <div class="priceProp floatR">
          <p><b>Your Price:</b> <br><span class="blue ftn36"><b>$120</b></span> <br> <span class="red fnt27"><s>$240</s></span></p>
          <p>You Save 50%</p>
        </div>
      </div>
    </div>
    <div class="clear"></div>

    <div class="content">
      <h3>Why Are We Doing This?</h3>
      <p>You'll want to have our Original Clear formula handy at all times.</p>
      <p>But colors are always fun. For day-time wear or a night out on the town.</p>
      <p>So we created City Lips<span class="reg">&reg</span> in a variety of colors. And I want to give you this opportunity to try our...</p>
      <h3>Classic 6 time-less colors for HALF PRICE.</h3>
      <p>Since I know that you'll be hooked once you give it a try...</p>
      <p>I'm offering the opportunity to snag our best-selling colors at the lowest price ever.</p>
      <p>This is a <u>one-time offer</u> and <u><b>only available as an add-on</b></u> to your current order.</p>
      <p>If you decide you want more, original or colored, you can always order from our website - at regular price.</p>
      <p><b>Still Not Sure?</b></p>
      <p>Don't decide right now. Take advantage of our iron-clad money-back gaurantee.</p>
      <p>If you don't love the colors, or change your mind for any reason, give us a call and we'll issue a full refund. No questions asked.</p>
      <p align="center"><b>Click below this special to your order.</b> You'll be glad you did.</p>

      <div align="center"><br />
        <form accept-charset="UTF-8" action="https://wn373.infusionsoft.com/app/form/process/d5e35acfd049fdb13efd8a39f706687b" class="infusion-form" id="inf_form_d5e35acfd049fdb13efd8a39f706687b" method="POST">
            <input name="inf_form_xid" type="hidden" value="d5e35acfd049fdb13efd8a39f706687b" />
            <input name="inf_form_name" type="hidden" value="6 Colors" />
            <input name="infusionsoft_version" type="hidden" value="1.67.0.60" />
            <input name="inf_field_Email" type="hidden" value="null" />
            <div class="infusion-submit">
                <button type="submit"><img src="img/yes.jpg" alt=""></button>
            </div>
        </form>
        <script type="text/javascript" src="https://wn373.infusionsoft.com/app/webTracking/getTrackingCode"></script>
      </div>
      <p align="center">Or...<br /> <br />
        <a href="https://citybeauty.com/orderconfirmation.php"><img src="img/no.jpg" alt=""></a>
      </p>
      <p>&nbsp;</p>
    </div>

      <div class="mbg center">
        <p>As always, your entire order is backed by our <u>100% Money Back Guarantee</u>. If you don’t fall in love with City Lips<span class="reg">&reg</span> right away, call us and we’ll refund every penny.</p>
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
