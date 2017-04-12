<!DOCTYPE HTML>
<html>
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>City Beauty</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i">

<style type="text/css">
 a {text-decoration: none;}
 *{margin:0 auto;}
header,footer{background: rgb(9,30,55) center no-repeat fixed;height: 94px;margin: 0 auto;background-size: 100% 100%; background-size: cover;}
footer{color: rgb(255,255,255);font-size: 12px; font-weight: 300; line-height: 1;}
footer a,a:hover{text-decoration: none; color: #ffffff}
.container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
.container{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
.centered_flex{display: flex;justify-content:center;align-items: center; }
.centered_nav{display: flex;justify-content: center;align-items: center;}
.nav{font-size: 14px;font-family: "Montserrat", sans-serif; font-weight: 300;}
nav2 {display: inline-block;padding: 0 15px;position: relative;}
nav2:hover:before,nav2:hover:after {background: #000;content: "";display: block;height: 1px;position: absolute;top: 50%;width: 12px;}
nav2:hover:before {right: 90%;}
nav2:hover:after {left: 90%;}
.navbar-default .navbar-nav > li > a {color: #333; padding-left: 32px;}
.line-on-sides{overflow: hidden;}
toBold{font-weight: 600;}
.button{width: 150px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
.submitbtn{width: 110px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;}
.button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
.button_blue a{color: #ffffff;}
.button_wht a{color: rgb(6, 16, 42);}
.biggerfont{font-family: "Playfair Display",serif;font-size: 38px;font-weight: 300;}
.smallerfont{font-size: 20px;}
.nav{font-size: 14px;font-family: "Montserrat", sans-serif;}
.jumbotron p{font-size: 16px;margin: 0 auto;font-weight: 300; line-height: 24px;}
.jumbotron_wht{background: rgb(255,255,255);}
.jumbotron_w_bg{height: 528px;background-image: url("../img/gift_bg.png");border: 1px solid rgb(235, 235, 235);background-size:100% cover;background-position:center;}
.b3textbox{width:382px;background-color:rgb(255,255,255); text-align:center;}
.movedown16{margin-top: 16px;}
.movedown20{margin-top: 20px;}
.movedown2p{padding-top: 2%;}
.movedown5p{padding-top: 5%;}
.movedown10p{padding-top: 10%;}
.movedown14p{padding-top: 14%;}
.b2margin{margin-left: 17%;}
.word_wrapper{text-align: left; margin-top: 22%;}
.b2word_wrapper{text-align: left; margin-top: 28%;}
.bfaft_wrapper{margin-top: 10%;}
.updateform{text-align: left;}
.form-control{border-radius: 0; width: 190px;height: 30px;}
.cream_wrapper{margin-top: 10%;}
.productwrapper{}
.carousel-control.left,.carousel-control.right{background-image: none;}
.arrowWrapper{ position: relative;top: 50%;transform: translateY(-50%);}
div.productwrapper .button_wht{display: none;}
div.productwrapper:hover .button_wht {display: flex;}
.button_wht:hover {background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.button_wht:hover a {background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
div.form-group input{margin-left: 18px;margin-right: 40px;}
h3{font-family: "Playfair Display",serif;font-size: 38px;line-height: 30px;font-weight: 300;}
h4{font-size: 20px;line-height: 24px;font-weight: 300;}
h3,h4 {display: inline;}
body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden;}
body{text-align: center;font-family: "Montserrat",sans-serif;font-size: 16px; font-weight: 300;line-height: 24px;}

/*handle responsive for different screens*/
@media screen and (min-width: 1199px){.socialicons{margin-left: 74px;}}
@media screen and (max-width:1199px) {.b2margin{margin-left: 7%;} .socialicons{margin:0;} .cream_wrapper{margin-top: 12%;margin-left: 4%;}}
@media screen and (max-width:991px) {.cream_wrapper{margin-left: 0;margin-top: 16%;} .centered_nav{display: block;} .b2margin{margin: 0 auto;} .navbar-header {float: none;}
.navbar-left,.navbar-right {float: none !important;} .navbar-toggle {display: block;} .navbar-collapse {border-top: 1px solid transparent;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);}
.navbar-fixed-top {top: 0;border-width: 0 0 1px;} .navbar-collapse.collapse {display: none!important;} .navbar-nav {float: none!important;margin-top: 7.5px;} .navbar-nav>li {float:none;}
.navbar-nav>li>a {padding-top: 10px;padding-bottom: 10px;} .collapse.in{display:block !important;}}
@media screen and (max-width:767px){.navbar-toggle{margin-right: 45px;} .word_wrapper{margin-top: 16%;margin-left: 25%;} .b2word_wrapper{margin-top: 0;margin-left: 25%;}
.bfaft_wrapper{margin-top: 0;} .b2word_wrapper{margin-top: 25%;margin-left: 30%;} .b3textbox{margin-left: 15px;margin-right: 15px;} .form-control{width: 100%;height: 100%;} .updateform{margin-left: 30px; margin-right: 30px;}
div.form-group input{margin: 0;} .submitbtn{float: right;} footer .container{margin-left: 30px;margin-right: 30px;}}
@media screen and (max-width:606px){.word_wrapper{margin-top: 16%;}}
@media screen and (max-width:572px){.word_wrapper{margin-left: 14%;} .b2word_wrapper{margin-left: 15%;} .bfaft_wrapper{margin-left: -30px;}}
@media screen and (max-width:542px){.undereye{margin-right: 40px;} .bfaft_wrapper>img{width: 220%;}}
@media screen and (max-width:450px){.word_wrapper{margin-left: 30px;} .b2word_wrapper{margin-left: 15px;margin-top: 12%;} .undereye{margin-right: 50px;} .bfaft_wrapper{margin-left: -20px;} .bfaft_wrapper>img{width: 200%;}}
@media screen and (max-width:414px){.undereye{margin-right: 45px;}}
@media screen and (max-width:399px){.hidden-xxs{display: none} .col-xxs-12{width: 100%;}.word_wrapper,.b2word_wrapper{margin-top: 0;} }
@media screen and (min-width:330px) and (max-width:628px){.lip_wrapper{margin-right: 12%;}}
</style>
</head>
<body>
  <!--main content-->
  <header class="centered_flex">
    <div class="container">
      <a href="/"><img src="../img/citylogo1.png" alt="citylogo"></a>
    </div>
  </header>

  <!--nav bar-->
  <nav class="navbar navbar-default">
  <div class="container centered_nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav line-on-sides">
        <li><a href="#"><nav2>LIPS</nav2></a></li>
        <li><a href="#"><nav2>LASH</nav2></a></li>
        <li><a href="#"><nav2>SKIN</nav2></a></li>
        <li><a href="#"><nav2>BODY</nav2></a></li>
        <li><a href="media.php"><nav2>MEDIA</nav2></a></li>
        <li><a href="contact.php"><nav2>CONTACT</nav2></a></li>
        <li><a href="#"><nav2>VIEW CART</nav2></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class="clearfix"></div>
  </nav>
<!-- 1st section -->
 <div class="jumbotron jumbotron_wht">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-0 col-xxs-12">
        <div class="word_wrapper">
          <h3>New!</h3>
          <p></p>
          <h3>Experience Instantly</h3>
          <p></p>
          <h3><i>Brighter Eyes</i></h3>
          <p></p>
          <div class="movedown20"></div>
          <h4>WITH UNDER EYE RECOVERY</h4>
          <p></p>
          <h4>BY CITY BEAUTY</h4>
          <div class="movedown20"></div>
        <div class="button button_blue pull-left"><a href="undereye.php">DISCOVER</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-1 hidden-xxs">
        <div class="undereye"><img src="../img/undereye.png" alt="undereye cream"></div>
    </div>
      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs cream_wrapper">
        <img src="../img/cream.png" alt="cream">
    </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<hr>
<!-- 2nd section -->
<div class="jumbotron jumbotron_wht">
 <div class="container">
   <div class="row b2margin">
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12">
       <div class="b2word_wrapper">
         <h3>City Lips</h3>
         <p></p>
         <h3><i>Plump, Hydrate &amp; Repair</i></h3>
         <div class="movedown20"></div>
         <div class="button button_blue pull-left">SHOP NOW</div>
       </div>
     </div>
     <div class="col-lg-2 col-md-2 col-sm-2 col-sm-pull-1 hidden-xs">
       <div class="lip_wrapper"><img src="../img/citylips.png" alt="citylips"></div>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-4 col-sm-pull-1 col-xs-3 col-xs-pull-0 hidden-xxs">
       <div class="bfaft_wrapper"><img src="../img/bf_aft.png" alt="before n after lips"></div>
     </div>
   </div>
 </div>
</div>
<!-- 3rd section -->
<div class="jumbotron_w_bg centered_flex">
  <div class="b3textbox">
    <h3>Enjoy Free Shipping</h3>
    <h3><i>with Any &#36;50 Purchase.</i></h3>
    <p></p>
    <div class="movedown20"></div>
    <h4>NO CODE NEEDED.</h4>
    <div class="movedown20"></div>
    <div class="button button_blue">SHOP NOW</div>
  </div>
</div>
<!-- 4th section -->
<div class="jumbotron jumbotron_wht">
 <div class="container">
   <h3>Top Sellers</h3>
   <div class="row movedown5p">
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/rated_citylip.png" alt="rated_lips">
       <div class="movedown5p"></div>
       <div class="button button_wht">SHOP NOW</div>
     </div>
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/rated_dkspot.png" alt="rated dark spot">
       <div class="movedown5p"></div>
       <div class="button button_wht">SHOP NOW</div>
     </div>
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/rated_citylash.png" alt="rated city lash">
       <div class="movedown5p"></div>
       <div class="button button_wht">SHOP NOW</div>
     </div>
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/rated_undereye.png" alt="rated under eye">
       <div class="movedown5p"></div>
       <div class="button button_wht"><a href="undereye.php">SHOP NOW</a></div>
     </div>
     <div class="visible-xs productwrapper">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
           <div class="item active">
             <img src="../img/rated_citylip.png" alt="rated_lips">
             <div class="movedown5p"></div>
             <div class="button button_wht">SHOP NOW</div>
           </div>

           <div class="item">
             <img src="../img/rated_dkspot.png" alt="rated dark spot">
             <div class="movedown5p"></div>
             <div class="button button_wht">SHOP NOW</div>
           </div>

           <div class="item">
             <img src="../img/rated_citylash.png" alt="rated city lash">
             <div class="movedown5p"></div>
             <div class="button button_wht">SHOP NOW</div>
           </div>

           <div class="item">
             <img src="../img/rated_undereye.png" alt="rated under eye">
             <div class="movedown5p"></div>
             <div class="button button_wht"><a href="undereye.php">SHOP NOW</a></div>
           </div>
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <div class="arrowWrapper"><img src="../img/prevArr.png"></div>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
           <div class="arrowWrapper"><img src="../img/nextArr.png"></div>
         </a>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
 </div>
</div>
<hr>
<!-- 5th section -->
<div class="jumbotron jumbotron_wht">
 <div class="container">
   <div class="updateform">
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-2 col-md-offset-1 col-sm-offset-0">
       <h3>Stay Up to Date</h3>
       <div class="movedown16"></div>
       <h4>WE HAVE SOME EXCITING THINGS PLANNED FOR 2017 - </h4>
       <p>including a highly anticipated tweak
         to your favorite product and new additions.</p>
         <p>It's starting this Spring, so don't miss out.</p>
        <div class="movedown20"></div>
       <p><b>Sign up below for instant notifications and get a sneak peak at what's ahead.</b></p>
       <div class="movedown20"></div>
       <form class="form-inline" id="email_form" method="post" action="scripts/emailform.php" role="form">
         <div class="form-group">
           <p>FIRST NAME*<input type="text" class="form-control" name="fname" id="fname"></p>
         </div>
         <div class="form-group">
           <p class="emailinput">EMAIL*<input type="email" name="email" class="form-control" id="email"></p>
         </div>
         <button type="submit" class="submitbtn button_blue">SUBMIT</button>
       </form>
       <div class="clearfix"></div>
     </div>
   </div>
  </div>
  </div>
</div>
<!-- footer -->
<footer class="centered_flex">
 <div class="container">
   <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12  col-xs-12">
      <p>&reg; City Beauty 2017. City Lips and City Lash are registered trademarks of City Beauty, LLC. All rights reserved.</p>
    </div>
    <div class="col-lg-4 col-md-12 ol-sm-12 col-xs-12">
      <p><a href="privacy.php">PRIVACY POLICY</a> &nbsp|&nbsp <a href="terms.php">TERMS &amp; CONDITIONS</a></p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">
      <div class="socialicons"><img src="../img/social_icon.png" alt="social icons"></div>
    </div>
  </div>
   <div class="clearfix"></div>
 </div>
</footer>

  <!-- link and script section-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
