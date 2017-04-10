<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<title>City Lips</title>
	<style>
		html,body{margin: 0; padding: 0; color: #333; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 300;}
		* { max-width:100%; box-sizing:border-box;}
		.banner { background-color:#5a5ca7; text-align:center;}
		.clear{clear:both;}
		.container{max-width: 960px; margin: auto; padding:10px;}
		header {background-color: #000; text-align:center; padding:10px; height: 80px;}
		.bennyBox {max-width: 725px; margin:0 auto;}
		.bennyBox li{margin: 5px 0;}
		.bennyBox .listL{float: left; width: auto; margin: 0;}
		.bennyBox .listR{float: right; width: auto; margin: 0;}
		.orderOptionsWrap{margin-top: 55px; height: 330px;}
		.packages{ margin-top: 30px;}
		.cred{width: 100px; float: left;}
		.cred .guarantee{width: 75px; margin: 10px auto 0; display: block;}
		.cred p{text-align: center; margin: 5px 0 10px;}
		.cred .payments{margin-top: 20px;}
		.doctor{width:100%; background-image:url('../images/Bereliani2.jpg'); background-size: 228px; background-repeat:no-repeat; background-position:center; min-height:240px;}
		.floatLeft{float:left; margin-bottom:25px;}
		.floatRight{float:right; margin-left:25px;}
		.orderOptions{padding-bottom: 5px;}
		.orderOptions hr{margin-top: 0;}
		.orderOptions .option{padding-bottom: 15px;}
		.orderOptions .option h3, .orderOptions .option p{margin: 5px 5px 0; text-align: center;}
		.orderOptions .option p{font-size: 18px;}
		.orderOptions .option h3{font-size: 20px;}
		.orderOptions .option li{font-weight: bold; list-style: none; background: url("../images/bullets.png") no-repeat 0 10px; background-position: 0 -119px; margin-left: 10px; padding-left: 25px;}
		#q1{border:1px #e6e6e6 solid; padding: 10px; margin-bottom: 15px;background: rgba(237,237,237,1);
background: -moz-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(237,237,237,1)), color-stop(50%, rgba(252,252,252,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: -o-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: -ms-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: linear-gradient(to right, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#ededed', GradientType=1 );}
		#q3{border:1px #e6e6e6 solid; padding: 10px; margin-bottom: 15px; position: relative; background: rgba(231,229,255,1);
background: -moz-linear-gradient(left, rgba(231,229,255,1) 0%, rgba(247,247,247,1) 50%, rgba(231,229,255,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(231,229,255,1)), color-stop(50%, rgba(247,247,247,1)), color-stop(100%, rgba(231,229,255,1)));
background: -webkit-linear-gradient(left, rgba(231,229,255,1) 0%, rgba(247,247,247,1) 50%, rgba(231,229,255,1) 100%);
background: -o-linear-gradient(left, rgba(231,229,255,1) 0%, rgba(247,247,247,1) 50%, rgba(231,229,255,1) 100%);
background: -ms-linear-gradient(left, rgba(231,229,255,1) 0%, rgba(247,247,247,1) 50%, rgba(231,229,255,1) 100%);
background: linear-gradient(to right, rgba(231,229,255,1) 0%, rgba(247,247,247,1) 50%, rgba(231,229,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e7e5ff', endColorstr='#e7e5ff', GradientType=1 );}
		.mostpop{position: absolute; top: -15px; left: -10px;}
		#q6{border:1px #e6e6e6 solid; padding: 10px; margin-bottom: 15px; background: rgba(237,237,237,1);
background: -moz-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(237,237,237,1)), color-stop(50%, rgba(252,252,252,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: -o-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: -ms-linear-gradient(left, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
background: linear-gradient(to right, rgba(237,237,237,1) 0%, rgba(252,252,252,1) 50%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#ededed', GradientType=1 );}
		.orderOptions .option.active li{background-position: 0 2px;}
		.orderOptions .option .shipping{font-size: 16px;}
		.orderOptions .option .save{font-weight: 600;}
		.button{width: 168px; height: 48px; background: url("../img/orderButton2.png") no-repeat 0 0; margin: auto;}
		.order_link{color: #fff; line-height: 48px; font-weight: bold; font-size: 18px; text-align: center; text-decoration: none;}
		
		.orderButton{background: url("img/orderButton2.png") no-repeat; width: 168px; height: 48px; margin: auto; margin-top: 10px; text-align: center;}
		.orderButton:hover{background-position: 0 -48px; cursor: pointer;}
		.orderButton a{text-decoration: none; color: #fff; font-weight: bold; font-size: 18px; line-height: 46px;}

		.seal{float: left; margin-left: 25px; margin-top: -10px;}
		.mbg{width: 800px; margin: 15px auto; border-radius: 5px; padding: 10px 70px; border: 1px solid #333;}
		.mbg p{text-align: center; padding: 0; margin: 0;}
		
		#customerExperiences { padding:10px; }
		#customerExperiences h2{margin-bottom: 10px;}
		#customerExperiences h2+.experience p{margin-top: 0;}
		#customerExperiences .experience .star{width: 100px; float: left; margin-right: 10px;}
		.extended .inner{display: none;}
		.extended .inner{display: none;}
		.readMore{background-color: #DBDBDB; text-align: center; font-size: 20px; font-weight: bold; box-shadow: 0 0 5px #555; padding: 5px 0;}
		#faq { padding:10px;}
		#faq h2{text-align: center; font-size: 22px;}
		.finalCTA{margin: 20px 0; text-align: center;}
		footer{background-color: #000; color: #fff; text-align: center; font-size: 14px; padding: 20px 0;}
		footer a, footer a:hover, footer a:visited{text-decoration: none; color: #fff;}
		hr{margin-top: 20px; margin-bottom: 20px; border-width: 1px 0px 0px; border-style: solid none none; border-color: #EEE -moz-use-text-color -moz-use-text-color;}
		.clear{clear: both;}
		.floatR{float: right;}
		.floatL{float: left;}
		.bottles a img {display:none;}
		.mbg .seal, .mbg .clear { display:none; }
		.update{margin-top: 25px;}
		.red{color:#cc0000;}
		.green{color: #34a00d;}
		.purp{color:#5e5aaa;}
		.perBottle{font-size: 20px; font-weight: 700;}
		.center{text-align: center;}
		.abcnews, .foxnews{height: 500px; margin-bottom: 70px;}
		@media screen and (max-width:690px) {
			h1 { font-size:24px;}
			.bottles a img {display:inline;}
			.bennyBox {display:inline-block; text-align:center;}
			.doctor{width:100%; background-image:url('../images/Bereliani2.jpg'); background-size: 228px; background-repeat:no-repeat; background-position:center; min-height:240px;}
			.options{width: 100%; margin-bottom:20px;}
			.options#highlight{font-size: 16px; margin-top: 0; margin-bottom: 20px; position: relative; z-index: 5;}
			.options#highlight h3 {padding-top:50px;}
			.options#highlight:before{  content: url("img/mostPop2.png");position: absolute;margin-top: 8px;left: 0;margin-left: auto;margin-right: auto;display: block;text-align: center;width: 100%;}
			.seal { margin-left:0; margin-right:10px; }
			.abcnews, .foxnews{height: 300px; margin-bottom: 70px;}
		}
		@media screen and (max-width:625px) {
			.seal { display:none; }
			.mbg .seal, .mbg .clear { display:block; margin-top:0; }
			.mbg { padding:10px 30px; }
			.abcnews, .foxnews{height: 200px; margin-bottom: 70px;}
		}
		@media screen and (max-width:450px) {
			.mbg { padding:10px 10px;}
			.abcnews, .foxnews{height: 200px; margin-bottom: 70px;}
		}
	</style>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
</head>
<body>
	<header>
		<div class="container">
			<img src="../img/logo.png" alt="">
          <div class="sup" style="position:relative; bottom:45px;left:75px; color: #FFF;">&reg;</div>
		</div>
	</header>
	<div id="mainContent">
		<div class="container">	
		<h1 align="center" id="orderSection">Select Your Package</h1>			
        <div class="orderOptions">
            <div id="q3" class="option">
            	<div class="mostpop"><img src="../img/mob-most-pop-badge.png" alt=""></div>
                <h3 class="purp">3 Tubes</h3>
                <p><span class="perBottle">$29</span> per tube</p>
                <p><span class="shipping">+ <i>FREE Shipping</i></span></p>
                <p>Retail: <s>$135</s> <br><span class="save green">You Save: $48</span></p>
            	<a class="order_link" href="http://citybeauty.com/cmd.php?pid=deb80b84100a4f079caafb80769a083c&bn=1&clear=1&mob=1&coup=1"><div class="button">Add to Cart</div></a>
            </div>
            <div id="q1" class="option">
                <h3 class="purp">1 Tube</h3>
                <p><span class="perBottle">$35</span> per tube</p>
                <p><span class="shipping">+ <i>$4.95 Shipping</i></span></p>
                <p>Retail: <s>$45</s> <br><span class="save green">You Save: $10</span></p>
            	<a class="order_link" href="http://citybeauty.com/cmd.php?pid=9fa8539faceb4050bbc0ddff0d905b65&bn=1&clear=1&mob=1&coup=1"><div class="button">Add to Cart</div></a>
            </div>
            <div id="q1" class="option">
                <h3 class="purp">2 Tubes</h3>
                <p><span class="perBottle">$33</span> per tube</p>
                <p><span class="shipping">+ <i>FREE Shipping</i></span></p>
                <p>Retail: <s>$90</s> <br><span class="save green">You Save: $24</span></p>
            	<a class="order_link" href="http://citybeauty.com/cmd.php?pid=8021f125fc424998865e0f4ea777347f&bn=1&clear=1&&mob=1&coup=1"><div class="button">Add to Cart</div></a>
            </div>
        </div>
			<div class="clear"></div>
			<img src="../img/guarantee-1.png" alt="" class="seal">
			<div class="mbg">
				<p align="center">You have 60 days to try City Lips® and see the results for yourself. If you are not 100% satisfied, if you do not experience fuller, healthier, younger looking lips, simply contact us and we will gladly refund your money. <i>No questions asked.</i></p>                
			</div>
			<div class="clear"></div>

			<div class="inthemedia">
				<h1 class="center">In the Media</h1>
				<div class="abcnews center">
					<img src="../img/abc_logo.png" alt=""><br>
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/JK-0A1ILtNw" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="clear"></div>
				<hr>
				<div class="goodhousekeeping center">
					<img src="../img/goodhousekeeping.png" alt="">
					<p>"Want lips this lush? Our testers did, so we asked them to try different treatments for a month, in hopes of releasing their inner Angelina Jolie. THE WINNERS: City Lips® clear gloss Lip Plumping Treatment created the fullest smoochers." <br>- GOOD HOUSEKEEPING MAGAZINE, PAGE 45.</p>
					<img src="../img/winslet.png" alt="">
					<p>"...The original winner. City Lips® is still champion." <br>- GOOD HOUSEKEEPING</p>
				</div>
				<div class="ghresearch">
					<p><b>GoodHouse Keeping Research Institute</b> found that City Lips<sup>&reg;</sup> increased lip volume by an average of 3mm.</p>
					<p>A group of 15 women ages 17-40 applied City Lips® Advanced formula every night for 30 days. Instant visible results are shown after 10 minutes of application and long term results are shown after 30 days of continued use. <br>Photos are all actual results.</p>
					<img src="../img/research_screenshot.png" alt="" style="width: 100%;">
				</div>
				<hr>
				<div class="foxnews center">
					<img src="../img/fox_logo.png" alt="">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/x89HqXshZvQ" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="clear"></div>

<!--testies-->
		<div id="customerExperiences">
			<h1 class="center">Real stories from recent customers </h1>*Results may vary by individual
			<div class="experience">
			  <p><img src="../img/stars_rating_mob.png" alt=""> "I LOVE this stuff. The warm tingle (not a burning or stinging,a warm pleasant tingle) feels SO good. My lips are so soft now. Plumper as well (people have noticed and commented...someone actually asked me if I got some collagen,LOL), but I bought it originally for the smoothing, moisturizing properties because I always thought those products were pure BS. I used it in a sample I got and woke up with much puffier lips. Awesome! I'm on my...what,fifth tube now? I love it!" <br>
			    - <i>by</i> KW, Texas</p>
	          <hr>
	          <p><img src="../img/stars_rating_mob.png" alt=""> "Wow, I'm impressed. My lips are actually full - not Angelina full but people always comment that they are big. 1. I can use this over/under anything. 2. I rushed to apply OVER lipstick and forgot about it until 30 min later when I felt like my lips were swollen. It worked over my lipstick! 3. I used this before bed (rubbed with my finger so it wasn't as goopy) and it did tingle more when applied directly on skin. I woke up and I swear my lips are bigger and my lips are really smooth. so we'll see what this does long-term." <br>
	            - <i>by</i> Loren, CA</p>
			</div>
			  <div class="clear"></div>
		</div>
		<!--FAQ-->
		<div id="FAQ">
			<h1 class="center">Frequently Asked Questions</h1>
			<h3>Q: WHICH ORDER OPTIONS IS RIGHT FOR ME?</h3>
			<p>Many of our returning customers appreciate the 3-pack because it offers the best value. And we're happy to do it because it saves us the cost of processing individual units. If you just want to try 1 tube, we've already reduced the price far below original retail. So you can't go wrong with any of the options. And I just know that you'll fall in love with your new lips either way.</p>
			<h3>Q: WILL I BE BILLED AUTOMATICALLY?</h3>
			<p>There is no auto-billing. You order will be processed as a one-time charge. When you're ready to re-order, you can come back to this page, visit our website or call our customer service number.</p>
			<h3>Q: WHEN CAN I EXPECT MY ORDER TO ARRIVE?</h3>
			<p>We know you can't wait to start trying City Lips<sup>&reg;</sup> and experiencing the amazing difference for yourself. That's why our shipping department is operational 7 days a week. That way, your order leaves our facilities within 24-hours. Transit usually takes 3-5 business days depending on what part of the country you're in.</p>
			<h3>Q: IS MY ORDER SECURE?</h3>
			<p>We take your privacy very seriously. That's why we use a variety of security measures to maintain the safety of your personal information.</p>
			<p>When you place an order or access your personal information, everything goes through a secure server. All of your personal information, including credit card number, name, and address, is transmitted via Secure Socket Layer (SSL) technology — the industry standard for secure online transactions.</p>
			<p>If you would rather not shop online, you can place your order over the phone by calling us at 1-800-347-1558</p>
		</div>
	</div>
	<footer>
		<div class="container">
			<a target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')" href="http://citycosmetics.com/privacy.php">Terms & Conditions</a> |
			<a target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')" href="http://citycosmetics.com/terms.php">Privacy Policy</a>
			<p>2017 &copy; City Beauty LLC. City Lips<sup>&reg;</sup> is a registered trademark of City Beauty LLC. All rights reserved.</p>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
			$("#customerExperiences .readMore").click(function(){
				if($("#customerExperiences .inner").is(":visible")){
					$("#customerExperiences .inner").hide();
				}
				else{
					$("#customerExperiences .inner").show();
					$('html, body').animate({
						scrollTop: $("#customerExperiences .readMore").offset().top
					}, 1000);
				}
			});
			$("#faq .readMore").click(function(){
				if($("#faq .inner").is(":visible")){
					$("#faq .inner").hide();
				}
				else{
					$("#faq .inner").show();
					$('html, body').animate({
						scrollTop: $("#faq .readMore").offset().top
					}, 1000);
				}
			});
			$(".orderJump").click(function(e){
				e.preventDefault();
				$('html, body').animate({
					scrollTop: $(".orderOptions").offset().top
				}, 1000);
			});
		});
	</script>
</body>
</html>