<?php
  $n = empty($_GET['n']) ? "" : $_GET['n'];
?>
<?php

$tablet_browser = 0;
$mobile_browser = 0;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');

if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}

if ($mobile_browser > 0) {
   // do something for mobile devices
   header('Location: '. $_SERVER['QUERY_STRING']);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Hotjar Tracking Code for youngerlips.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:530466,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
	<meta charset="UTF-8">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<title>Under Eye Recovery</title>
	<script src="//player.ooyala.com/static/v4/stable/latest/core.min.js"></script>
	<script src="//player.ooyala.com/static/v4/stable/latest/video-plugin/main_html5.min.js"></script>
	<script src="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.js"></script>
	<link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.css" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i|Playfair+Display:300,300i,400,400i,700">
	<style>
    h1,h2,h3,h4 {vertical-align: baseline;display: inline;}
    html,body {margin: 0; padding: 0; font-family: "Montserrat", sans-serif; font-weight: 300;font-size: 18px;line-height: 24px;}
		h1{font-size: 40px;font-family: "Playfair Display", serif;font-weight: 700;}
		h2{font-size: 30px;font-family: "Playfair Display", serif;font-weight: 700;}
		h3{font-size: 28px;font-family: "Playfair Display", serif; font-weight: 300;}
		h4{font-size: 20px;font-weight: 300;line-height: 30px;}
		.container{width: 800px; margin: auto; text-align: center;}
		.ad{font-size: 16px; font-weight: 200;}
		#CTALink{display:none;}
		.CTA{height:49px; /*z-index: 11;*/ position: relative;width:310px; margin:auto; padding: 10px;}
    .gold-btn {
      background-color: #DFBF78; background-image: -webkit-gradient(linear, left top, left bottom, from(#DFBF78), to(#C6A96A));
      background-image: -webkit-linear-gradient(top, #DFBF78, #C6A96A);
      background-image: -moz-linear-gradient(top, #DFBF78, #C6A96A);
      background-image: -ms-linear-gradient(top, #DFBF78, #C6A96A);
      background-image: -o-linear-gradient(top, #DFBF78, #C6A96A);
      background-image: linear-gradient(to bottom, #DFBF78, #C6A96A);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#DFBF78, endColorstr=#C6A96A);
    }
    .gold-btn:hover{
      background-color: #F8D58A; background-image: -webkit-gradient(linear, left top, left bottom, from(#F8D58A), to(#c7ab6e));
      background-image: -webkit-linear-gradient(top, #F8D58A, #c7ab6e);
      background-image: -moz-linear-gradient(top, #F8D58A, #c7ab6e);
      background-image: -ms-linear-gradient(top, #F8D58A, #c7ab6e);
      background-image: -o-linear-gradient(top, #F8D58A, #c7ab6e);
      background-image: linear-gradient(to bottom, #F8D58A, #c7ab6e);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#F8D58A, endColorstr=#c7ab6e);
      cursor: pointer;
      color: #ffffff;
    }
    .button {width: 300px; height: 40px; font-size: 24px; color: #000000; font-weight: 400;}
		.button a{text-decoration: none; color: #000000; font-weight: bold; font-size: 22px; line-height: 37px;}
    .button:hover a{cursor: pointer;color: #ffffff;}
    .citations p{font-size:12px;font-weight: 300;}
    #footer {height: 54px;font-size: 14px;font-weight: 300;}
		#footer a{color: #000; text-decoration: none;}
		.legal{border: 1px solid; padding: 5px;}
		b{font-weight: 600;}
		.clearfix{clear: both;}
		/* ooyala */
		.video{height: 460px;}
		.oo-control-bar{visibility: hidden;pointer-events: none;}
		.oo-animate-pause { opacity: 1 !important}
		.oo-spinner-wrapper { width: 20px;}
		.oo-icon-system-replay {font-size: 20px;}

    header,footer{height: 100px;background: rgb(9,30,55) center no-repeat fixed;margin: 0 auto;color: #ffffff;}
    header img {width: 120px;}
    footer a {color:#ffffff;text-decoration: none;}
    .centered_flex{display: flex;justify-content:center;align-items: center;}
    .yellow-font{color:#e0c278}
    .linebreak1{margin-top: 24px;}
    .linebreak2{margin-top: 34px;}
    .linebreak3{margin-top: 56px;}
    .video-section{background: url("../img/videosection-bg2.png") center no-repeat;background-size: 100% 100%; margin-bottom: -8px;padding: 40px 0px;}
    .flexcontainer{padding: 0;margin: 0 auto;list-style: none;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;justify-content: space-between;}
    .floatL{float: left;}
    .floatR{float: right;}
    .darker_bg{background: #f8f9f9 repeat;background-size: cover;height: 156px;border: 1px solid rgb(235, 235, 235);}
    .mid-section {padding: 40px 0px;}
    .content-title {width: 100%; padding-bottom: 10px;border-bottom: 1px solid #000000;text-align: left;}
    .mid-content {padding: 40px 0px;border-bottom: 2px solid rgb(235, 235, 235);}
    .drkturk {padding: 40px 0px;}
    .content-txt {width: 64%;text-align: left;padding: 15px 0px;}
    .greybox {background: #f4f3f4 repeat;background-size: cover;padding: 30px 40px;text-align: center;}
	</style>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NW725SC');</script>
  <!-- End Google Tag Manager -->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW725SC"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</head>
<body>
  <div class="container">
		<?php if($n=='cad'){ ?><p class="ad">Advertorial</p><?php } ?>
        <?php if($n=='tab'){ ?><p class="ad">Advertisement</p><?php } ?>
  </div>
  <header class="centered_flex">
    <img src="../img/city-beauty-logo.png" alt="city logo">
  </header>
  <div class="video-section">
	  <div class="container">
          <h1>Reduce Dark Under Eye Circles:</h1>
          <p></p>
          <p>THEY SAID IT WAS “TOO SIMPLE TO EVER WORK”</p>
		      <div class="video">
				      <div id="LimelightEmbeddedPlayerFlash" style="width:800px; height:450px; margin:auto;"></div>
				          <!-- start OOYALA ADD -->
				          <script>
					          var playerParam = {
						        pcode: 'llY2oyOkgolbBL0MorBxB0us7N6I',
						        autoplay: !OO.isIos && !OO.isAndroid ,
        						debug:false,
        						playerBrandingId: '8f95c4c3b6224f90b969b41a4b2c39db',
        						skin: {
        						config: 'latest.json'}
					         };
					         OO.ready(function() {
						         // change the second parameter (embed code) to change the video
					         window.pp = OO.Player.create('LimelightEmbeddedPlayerFlash', '9iaWJrYjE6jlwrCgCBUH_dbUjfZZWIKc', playerParam);
					         });
				          </script>
				          <!-- end OOYALA ADD -->
		      </div>
		      <div class="CTA">
			        <div class="gold-btn button" id="CTALink" ><a href="../order/securecheckout170530.php" target="_BLANK"><div>Next Step</div></a></div>
			        <noscript><div class="gold-btn button" id="CTALink"><a href="../order/securecheckout170530.php" target="_BLANK"><div>Next Step</div></a></div></noscript>
		      </div>
        </div>
      </div>
      <div class="mid-section">
        <div class="container">
          <!--
          <div class="content-title"><h2>About Dr. Jon Turk</h2></div>
          <div class="drkturk flexcontainer">
            <div class="content-txt">
              <p><b>DR. TURK</b> is Double Board Certified by the American Board of Facial Plastic and Reconstructive Surgery and the American Board of Otolaryngology - Head and Neck Surgery. And recently featured in New York Magazine's edition of "America's Best Doctors".</p>
            </div>
            <div class="content-pic"><img class="content-pic" src="../img/drturk-sm2.png" alt="dr turk" /></div>
          </div> -->
          <div class="content-title"><h2>In Today's Free Presentation</h2></div>
          <div class="mid-content flexcontainer">
            <div class="content-txt">
              <p><b>MY "INSIDER'S SECRET" TO BRIGHTER EYES</b>  without surgery, laser, or chemical peels. I'll reveal how you can use the same make-up and lighting magic celebrities use to take years off their appearance.</p>
            </div>
            <div class="content-pic"><img class="content-pic" src="../img/brighteyegirl.png" alt="bright eye girl" /></div>
          </div>
          <div class="mid-content flexcontainer">
            <div class="content-pic"><img class="content-pic" src="../img/cure-eye.png" alt="cured eye" /></div>
            <div class="content-txt">
              <p><b>A COMMON "CURE" THAT ALMOST NEVER WORKS</b>, yet it's the first thing most people turn to when they want to get rid of dark circles. In fact, it actually makes your dark circles worse overtime.</p>
            </div>
          </div>
          <div class="mid-content flexcontainer">
            <div class="content-txt">
              <p><b>THE SKIN UNDER YOUR EYES REQUIRE SPECIAL ATTENTION</b> because it's not the same as the skin anywhere else on your face. I'll show you why dark circles form, and why they are so hard to hide.</p>
            </div>
            <div class="content-pic"><img class="content-pic" src="../img/closedeyegirl.png" alt="closed eye girl" /></div>
          </div>
          <div class="mid-content flexcontainer">
            <div class="content-pic"><img class="content-pic" src="../img/smilegirl.png" alt="smile girl" /></div>
            <div class="content-txt">
              <p><b>IT IS POSSIBLE TO FEEL GOOD ABOUT YOUR SKIN AGAIN...</b> to look in the mirror and see bright, fresh eyes looking back at you... to feel attractive without having to pile on a bunch of make up just to leave the house</p>
            </div>
          </div>
          <div class="mid-content">
            <div class="greybox">
              <p>THE INFORMATION PRESENTED ON THIS WEBSITE IS NOT INTENDED AS SPECIFIC MEDICAL ADVICE AND IS NOT A SUBSTITUTE FOR PROFESSIONAL TREATMENT OR DIAGNOSIS. THESE STATEMENTS HAVE NOT BEEN EVALUATED BY THE FOOD AND DRUG ADMINISTRATION. THIS PRODUCT IS NOT INTENDED TO DIAGNOSE, TREAT, CURE, OR PREVENT ANY DISEASE.</p>
            </div>
          </div>
        </div>
      </div>

    <footer class="centered_flex">
      <div class="flexcontainer">
			  <div class="flexitem"><script type="text/javascript">
        now = new Date
        theYear=now.getFullYear()
        document.write(theYear)
        </script> &copy; CITY BEAUTY LLC. ALL RIGHTS RESERVED&nbsp;|&nbsp;</div>
        <div class="flexitem">
           <a href="http://citycosmetics.com/privacy.php" target="_BLANK" onclick="return !window.open(this.href, 'Terms', 'scrollbars=1,width=500,height=500')">PRIVACY POLICY</a> &nbsp;|&nbsp; <a href="http://citycosmetics.com/terms.php" target="_BLANK" onclick="return !window.open(this.href, 'Terms', 'scrollbars=1,width=500,height=500')">TERMS &amp; CONDITIONS</a>
		  </div>
    </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script>
      if(!$.cookie('returning')){
        var delay = <?php if(isset($_GET['del'])) echo $_GET['del']; else echo '9'; ?> * 60000;
        setTimeout(function() {
          $("#CTALink").show();
        }, delay);
        $.cookie("returning", 1, { expires : 7 });
      }
      else {
        $("#CTALink").show();
      }
    </script>
</body>
</html>
