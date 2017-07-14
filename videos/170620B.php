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
   header('Location: http://youngerlips.com/presentation/m170609.php'. $_SERVER['QUERY_STRING']);
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
	<title>YoungerLips.com</title>
	<script src="//player.ooyala.com/static/v4/stable/latest/core.min.js"></script>
	<script src="//player.ooyala.com/static/v4/stable/latest/video-plugin/main_html5.min.js"></script>
	<script src="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.js"></script>
	<link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.css" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i|Playfair+Display:300,300i,400,400i">
	<style>
		html,body {margin: 0; padding: 0; font-family: "Montserrat", sans-serif; font-weight: 300;font-size: 16px;line-height: 24px;}
		h1{font-size: 40px;font-family: "Playfair Display", serif;font-weight: 400;}
		h2{font-size: 30px;}
		h3{font-size: 28px;font-family: "Playfair Display", serif; font-weight: 300;}
		h4{font-size: 20px;font-weight: 300;line-height: 30px;}
		.container{width: 800px; margin: auto; text-align: left;}
		.ad{font-size: 16px; font-weight: 200;}
		#CTALink{display:none;}
    #CTA{display: none;}
		.CTA{height:56px; /*z-index: 11;*/ width: 800px;margin: 0 auto;background: rgb(9,30,55) center no-repeat fixed;}
		.button{
			background: -webkit-linear-gradient(#00CC00, #006600); /* For Safari 5.1 to 6.0 */
  			background: -o-linear-gradient(#00CC00, #006600); /* For Opera 11.1 to 12.0 */
  			background: -moz-linear-gradient(#00CC00, #006600); /* For Firefox 3.6 to 15 */
  			background: linear-gradient(#00CC00, #006600); /* Standard syntax */
			border: 1px solid #006600; border-radius:8px; width: 300px; height: 39px; text-align: center;}
		.button:hover{box-shadow:2px 2px 10px 2px #aaa;}
		.button a{text-decoration: none; color: #fff; font-weight: bold; font-size: 22px; line-height: 37px;}
    .citations p{font-size:12px;font-weight: 300;}
    #footer {height: 54px;font-size: 14px;font-weight: 300;}
		#footer a{color: #000; text-decoration: none;}
		.legal{border: 1px solid; padding: 5px;}
		b{font-weight: 600;}
		.clear{clear: both;}
		/* ooyala */
		.video{height: 460px;margin-bottom: -10px;}
		.oo-control-bar{visibility: hidden;pointer-events: none;}
		.oo-animate-pause { opacity: 1 !important}
		.oo-spinner-wrapper { width: 20px;}
		.oo-icon-system-replay {font-size: 20px;}

    header{height: 80px;background: rgb(9,30,55) center no-repeat fixed;margin: 0 auto;}
    header img {width: 97px;}
    .centered_flex{display: flex;justify-content:center;align-items: center;}
    .small-title{font-size: 12px;}
    .yellow-font{color:#e0c278}
    .linebreak1{margin-top: 24px;}
    .linebreak2{margin-top: 34px;}
    .linebreak3{margin-top: 56px;}
    .truth-section{background: url("../img/2lips-videop.png") center no-repeat;background-size: cover; height: 277px;border: 1px solid rgb(235, 235, 235);}
    .flexcontainer{padding: 0;margin: 0 auto;list-style: none;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;}
    .flexitem{color:#fff;}
    .flexitem2{margin-left: 40px;margin-top: -50px;}
    .flexitem-arr1{margin-left: 24px;margin-top: 6px;}
    .flexitem-arr2{margin-left: 10px;margin-right: 24px;margin-top: 6px;}
    .floatL{float: left;}
    .floatR{float: right;}
    .darker_bg{background: #f8f9f9 repeat;background-size: cover;border: 1px solid rgb(235, 235, 235);}
    hr{border: 0.5px solid rgb(235, 235, 235);}
	</style>
</head>
<body>
  <div class="container">
		<?php if($n=='cad'){ ?><p class="ad">Advertorial</p><?php } ?>
        <?php if($n=='tab'){ ?><p class="ad">Advertisement</p><?php } ?>
  </div>
  <header class="centered_flex">
    <img src="../img/city-beauty-logo.png" alt="city logo">
  </header>
  <div class="truth-section centered_flex">
	  <div class="container">
      <div class="small-title">HEALTH | <span class="yellow-font"> BEAUTY</span></div>
		  <h1>The Truth About Thinning Lips...</h1>
		  <h4>WOULD FULLER, SMOOTHER LIPS REALLY TAKE YEARS OFF YOUR APPEARANCE?</h4>
   </div>
  </div>
        <div class="linebreak2"></div>
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
					         window.pp = OO.Player.create('LimelightEmbeddedPlayerFlash', 'l2Z2hpYjE6rXqIRHiDvR2Xd26LXtcx_L', playerParam);
					         });
				          </script>
				          <!-- end OOYALA ADD -->
		      </div>
		      <div class="CTA flexcontainer centered_flex" id="CTA">
            <div class="flexitem">
              <h4>CLICK THE BUTTON TO LEARN MORE</h4>
            </div>
            <div class="flexitem-arr1">
              <img src="../img/rightarr_favicon.png" alt="right arrow">
            </div>
            <div class="flexitem-arr2">
              <img src="../img/rightarr_favicon.png" alt="right arrow">
            </div>
            <div class="flexitem">
			        <div class="button" ><a href="/citylips/checkout170503.php" target="_BLANK"><div>Discover City Lips</div></a></div>
			        <noscript><div class="button"><a href="/citylips/checkout170503.php" target="_BLANK"><div>Discover City Lips</div></a></div></noscript>
            </div>
		      </div>
          <div class="linebreak2"></div>
		<div class="darker_bg centered_flex">
      <div class="container">
        <div class="linebreak2"></div>
        <h3> In Today's Free Presentation</h3>
        <div class="linebreak2"></div>
        <div class="flexcontainer">
          <div class="flexitem1">
            <p>MY 30-SECOND “SECRET” TO YOUNGER LOOKING LIPS</p>
            <p>It works in 2 ways: by giving your lips an instant plump that looks natural...and...by supporting collagen production under the skin to help against the signs of aging.</p>
            <div class="linebreak1"></div>
            <p>LIP INJECTIONS CAN BE RISKY</p>
            <p>If you’ve ever had, or are thinking about lip injections, I’ll show you a safe way to get maximum fullness without the risk of over-injection.</p>
          </div>
          <div class="flexitem2">
            <img src="../img/lips-photo-videop2.png">
          </div>
        </div>
        <p>A COMMON “CURE” THAT ALMOST NEVER WORKS</p>
        <p>Yet it’s the first thing most people turn to when they want to get hide their thin, dry lips. In fact, it’s actually causing your lips to age faster.</p>
        <p>IT IS POSSIBLE TO FEEL GOOD ABOUT YOUR LIPS AGAIN...</p>
        <p>It is possbible to look in the mirror and see the fine lines and wrinkles gone, and to enjoy fuller, smoother, softer lips.</p>
        <div class="linebreak2"></div>
    </div>
  </div>

		<div class="citations">
      <div class="linebreak2"></div>
      <div class="container">
			<h3>Citations</h3>
			<p>Vashi NA, Buainain De Castro Maymone M, Kundu RV. Aging Differences in Ethnic Skin. The Journal of Clinical and Aesthetic Dermatology. 2016;9(1):31-38.</p>
			<p>Walter MNM, Dehsorkhi A, Hamley IW, Connon CJ. Supra-molecular assembly of a lumican-derived peptide amphiphile enhances its collagen-stimulating activity. Biomaterials Science. 2016;4(2):346-354. doi:10.1039/c5bm00428d.</p>
			<p>Baspeyras M, Rouvrais C, Liégard L, et al. Clinical and biometrological efficacy of a hyaluronic acid-based mesotherapy product: a randomised controlled study. Archives of Dermatological Research. 2013;305(8):673-682. doi:10.1007/s00403-013-1360-7.</p>
			<p>Papakonstantinou E, Roth M, Karakiulakis G. Hyaluronic acid: A key molecule in skin aging. Dermato-endocrinology. 2012;4(3):253-258. doi:10.4161/derm.21923.</p>
			<p>Jegasothy SM, Zabolotniaia V, Bielfeldt S. Efficacy of a New Topical Nano-hyaluronic Acid in Humans. The Journal of Clinical and Aesthetic Dermatology. 2014;7(3):27-29.</p>
			<p>Ganceviciene R, Liakou AI, Theodoridis A, Makrantonaki E, Zouboulis CC. Skin anti-aging strategies. Dermato-endocrinology. 2012;4(3):308-319. doi:10.4161/derm.22804.</p>
			<p>Bissett, DL et al. Topical niacinamide provides skin aging appearance benefits while enhancing barrier function. J. Clin. Dermatol. 32 Suppl. 9-18 (2003)</p>
		</div>
    <div class="linebreak2"></div>
  </div>
		<div class="darker_bg centered_flex">
			<div class="container">
				<?php if($n=='rc'){ ?><p style="font-size:16px;">Representations regarding the efficacy and safety of City Lips<sup>&reg</sup> have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. Click <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3970829/" target="_BLANK">here</a> and <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3778226/" target="_BLANK">here</a> to find evidence of a test, analysis, research, or study describing the benefits, performance or efficacy of City Lips<sup>&reg</sup> based on the expertise of relevant professionals.</p><?php } ?>
				<p>The information presented on this website is not intended as specific medical advice and is not a substitute for professional treatment or diagnosis. These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
			</div>
    </div>
    <div id="footer" class="centered_flex">
      <div class="container">
			  <div class="floatL"><script type="text/javascript">
        now = new Date
        theYear=now.getFullYear()
        document.write(theYear)
        </script> &copy; City Beauty LLC. All Rights Reserved</div>
        <div class="floatR">
           <a href="http://citycosmetics.com/privacy.php" target="_BLANK" onclick="return !window.open(this.href, 'Terms', 'scrollbars=1,width=500,height=500')">PRIVACY POLICY</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="http://citycosmetics.com/terms.php" target="_BLANK" onclick="return !window.open(this.href, 'Terms', 'scrollbars=1,width=500,height=500')">TERMS &amp; CONDITIONS</a>
		  </div>
      <div class="clear"></div>
    </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script>
      if(!$.cookie('returning')){
        var delay = <?php if(isset($_GET['del'])) echo $_GET['del']; else echo '9'; ?> * 60000;
        setTimeout(function() {
          $("#CTA").css("display","flex");
        }, delay);
        $.cookie("returning", 1, { expires : 7 });
      }
      else {
        $("#CTA").css("display","flex");
      }
    </script>
</body>
</html>
