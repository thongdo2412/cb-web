<?php
 $useragent=$_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
  header('Location: http://thecardiackiller.com/video_m.php'. $_SERVER['QUERY_STRING']);
 }
 $adN = empty($_GET['adN']) ? "" : $_GET['adN'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<title>The Cardiac Killer</title>
	<style>
		html,body{margin: 0; padding: 0; color: #333; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 300;}
		#wrapper{width:100%; min-height: 827px; padding: 55px 0px 70px;background-color: #eee;}
		.clear{clear:both;}
		.container{width: 960px; margin: auto;}
		.adDisclaimer{margin: auto; padding-top: 10px;}
		.bgImage{/*background: #cacdd7 url("./images/videobg1.png")*/ no-repeat center; padding: 55px 0px 70px;}
		#videoWrap{background:#fff; text-align: center; padding: 0 15px; width:1000px; height: 600px; margin:auto; border-radius: 15px; filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#8cffffff', endColorstr='#8cffffff'); /* IE */}
		.speakerWrap{background: url("./images/pn-seal.png") no-repeat; background-size:75px; background-position:0px 0px; padding-top:1px; width:100%; height:81px; ;margin:15px 0; filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#6c767676', endColorstr='#6c767676'); /* IE */}
		.speakerWrap p{ font-size: 19px;}
		#CTA{height:49px;}
		#CTALink{display:none;}
		#videoWrap .button{
			background: -webkit-linear-gradient(#00CC00, #006600); /* For Safari 5.1 to 6.0 */
  			background: -o-linear-gradient(#00CC00, #006600); /* For Opera 11.1 to 12.0 */
  			background: -moz-linear-gradient(#00CC00, #006600); /* For Firefox 3.6 to 15 */
  			background: linear-gradient(#00CC00, #006600); /* Standard syntax */
			border: 1px solid #006600; border-radius:8px; width: 300px; height: 39px; margin-top: 10px; text-align: center;}
		#videoWrap .button:hover{box-shadow:2px 2px 10px 2px #aaa;}
		#videoWrap .button a{text-decoration: none; color: #fff; font-weight: bold; font-size: 22px; line-height: 37px;}
		.videoContainer{width:70%; margin-left:2%; height:525px; position:relative; float:left;}
		.videoMask{position: relative; width:73%;}
		.aboveMask{/*z-index: 11;*/ position: relative; width:73%;}
		.CTAMask{/*z-index: 11;*/ position: relative;width:310px; margin:auto;}
		.doctorContainer{height:500px; margin-top:25px; position:relative; /*z-index: 11;*/ float: left; width:26%;}
		.doctorContainer h4{background-color:rgb(176,24,0); color:white; padding:8px 15px 0px;margin:0;text-align:left;font-size:28px;}
		.doctorContainer p{font-size:13px; background-color:white; margin:0; padding:15px;text-align:left; padding-top: 0;}
		.doctorContainer span{font-weight:900;}
		.doctor{background-image:url('images/BerelianiSeated.jpg'); background-size: cover; background-repeat:no-repeat; background-position:center; min-height:275px;}
		#lightsOut{display: none;position: fixed; width: 100%; height: 100%; background-color: rgba(0,0,0,.85);/*z-index: 11;*/ top: 0; left: 0;
		filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#5c000000', endColorstr='#5c000000'); /* IE */}
		#lightOption{background: url("./images/lightBulb.png") no-repeat; padding-left: 30px; text-align: left; height: 30px; line-height: 30px;margin-left: 30px;cursor: pointer;width:100px;}
		#lightOption:hover{background-position: 0 -28px !important;}
		#lightOption p{margin-top: 5px;margin-bottom: 0;}
		.citations {background-color: #fff; border-top: 1px solid #605da9; font-size: 14px;}
		.citations .container{width: 900px; padding: 10px;}
		footer{position: absolute; width: 100%; background-color: #605da9; color:#fff; text-align: center; font-size: 12px; padding: 20px 0;}
		.fnt16{font-size: 16px;}
		footer a{color: #fff !important; text-decoration: none !important;}
		.clear{clear: both;}
	</style>
		<script src="//player.ooyala.com/static/v4/stable/latest/core.min.js"></script>
		<script src="//player.ooyala.com/static/v4/stable/latest/video-plugin/main_html5.min.js"></script>
		<script src="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.js"></script>
		<link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.css" />

		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KKF8BX"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KKF8BX');</script>
		<!-- end google tag maanger -->
</head>
<body>
	<div id='wrapper'>
		<div id="lightsOut"></div>
		<?php if($adN=='CAD'){ ?><p align="center" class="adDisclaimer">ADVERTISEMENT</p><?php } ?>
		<div class="bgImage">
			<div id="videoWrap">
				<!--<h3 style="font-size:24px;"></h3>-->
				<div class='videoContainer'>
					<div class="speakerWrap">
						<p>May take 10 seconds to load. Make sure your sound is on.</p>
					</div>
					<div class="videoMask">
					<div id="LimelightEmbeddedPlayerFlash" style="width:679px; height:382px;"></div>

						<!-- start OOYALA ADD -->
						<style type="text/css">

							.oo-control-bar{
								visibility: hidden;
								pointer-events: none;
							}
							.oo-animate-pause { opacity: 1 !important}

							.oo-spinner-wrapper { width: 20px;}
							.oo-icon-system-replay {
								font-size: 20px;
							}

						</style>

						<script>
							var playerParam = {
								pcode: 'xvYWgyOgX8LlAER8dMPTua1yO938',
								autoplay: !OO.isIos && !OO.isAndroid ,
								debug:false,
								playerBrandingId: '6efc4e3d33dc433aa706a1921ed1f330',
								skin: {
									config: 'latest.json'
								}
							};
							OO.ready(function() {
								// change the second parameter (embed code) to change the video
							  window.pp = OO.Player.create('LimelightEmbeddedPlayerFlash', 'Z4ZnZ3NTE6WVdC2FQzZWNZ_539JtKqM-', playerParam);
							});

						</script>
						<!-- end OOYALA ADD -->
					</div>
					<div class="CTAMask" id="CTA">
							<div class="button" id="CTALink" ><a href="vitapulse/evaluation.php" target="_BLANK"><div>Next Step</div></a></div>
							<noscript><div class="button" id="CTALink"><a href="vitapulse/evaluation.php" target="_BLANK"><div>Next Step</div></a></div></noscript>
					</div>
				</div>
				<!--div id="lightOption">
					<p>Lights Out</p>
				</div-->
				<div class='clear'></div>
			</div>
		</div>
	</div>

	<footer id="footer" class="videoPage">
		<div class="container">
			<p><script language="JavaScript" type="text/javascript">
								    now = new Date
								    theYear=now.getYear()
								    if (theYear < 1900)
								    theYear=theYear+1900
								    document.write(theYear)
								</script> &copy; Copyright Princeton Nutrients, LLC. All Rights Reserved</p>
			<?php if($adN=='RC'){ ?><p class="fnt16">Representations regarding the efficacy and safety of VitaPulse have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. Click <a href="http://www.jbc.org/content/86/2/623.full.pdf" target="_BLANK">here</a>, <a href="http://content.onlinejacc.org/article.aspx?articleid=1187948" target="_BLANK">here</a>, and <a href="http://www.jnutbio.com/article/S0955-2863(13)00159-9/fulltext" target="_BLANK">here</a> to find evidence of a test, analysis, research, or study describing the benefits, performance or efficacy of VitaPulse based on the expertise of relevant professionals.</p><?php } ?>
			<p>The information provided on this site is for informational purposes only and is not intended as a substitute for advice from your physician or other health care professional or any information contained on or in any product label or packaging. You should not use the information on this side for diagnosis or treatment of any health problem or for prescription of any medication of other treatment. You should consult with a healthcare professional before starting any diet, exercise or supplementation program, before taking any medication, or if you have or suspect you might have a health problem. you should not stop taking any medication without consulting your physician.</p>
			<a href="#" onClick="PrivacyPolicy=window.open('http://princetonnutrients.com/privacy.php','Privacy Policy',width=400,height=400); return false;">Privacy Policy</a> | <a href="#" onClick="TermsConditions=window.open('http://princetonnutrients.com/terms.php','Terms &amp; Conditions',width=400,height=400); return false;">Terms &amp; Conditions</a>
		</div>
	</footer>
		<script src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/jquery.cookie.js"></script>
		<script>
		 	$(document).ready(function(){

				function setFooter(offset){
					$('#footer').attr('style', 'top:' + offset + 'px;');
				}

				$(document).ready(function(){
					setFooter($('#wrapper').height());

				});

				$(window).resize(function(){
					setFooter($('#wrapper').height());

				});
		 		/*
		 		setTimeout(function(){
		 			$("#lightsOut").fadeIn(2000);
		 			$("#lightOption").css("background-position", "0 -28px");
		 		}, 5000);
		 		$("#lightOption").click(function(){
		 			$("#lightOption").css("background-position", "0 -28px");
		 			$("#lightsOut").fadeIn(1000);
		 		});
		 		$("#lightsOut").click(function(){
		 			$("#lightsOut").hide();
		 			$("#lightOption").css("background-position", "0 0");
		 		});
				*/
		 		if(!$.cookie('returning')){
		 			var minD = <?php if(isset($_GET['d'])) echo $_GET['d']; else echo '37.0'; ?>;
		 			var secD = minD * 60;
		 			var delay = secD * 1000;
					setTimeout(function() {
		      				$("#CTALink").show();
					}, delay);
					setTimeout(function(){
                      $.cookie("returning", 1, { expires : 7 });
                     }, 10000);
				}
				else $("#CTALink").show();

				/* Responsive Events */


			});
		</script>

		<?php include 'inc/tck-getclicky.php';?>

</body>
</html>
