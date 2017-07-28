<!-- include PHP header and other prerequisite files-->
<?php
  $page_title = 'City Beauty';
  include("scripts/conn_init.php");
 ?>

<!DOCTYPE HTML>
<html>
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title;?></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i">

  <!-- Hotjar Tracking Code for citybeauty.com -->
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

  <!-- main css-->
<style type="text/css">
 a {text-decoration: none;}
 *{margin:0 auto;}
header,footer{background: rgb(9,30,55) center no-repeat fixed;height: 94px;margin: 0 auto;background-size: 100% 100%; background-size: cover;}
header img {width: 97px;}
footer{color: rgb(255,255,255);font-size: 12px; font-weight: 300; line-height: 1;}
footer a,a:hover{text-decoration: none; color: #ffffff}
.container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
.container{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
.centered_flex{display: flex;justify-content:center;align-items: center; }
.centered_nav{display: flex;justify-content: center;align-items: center;}
.nav{font-size: 14px;font-family: "Montserrat", sans-serif; font-weight: 300;}
.sup1{vertical-align: super;}
.cruel-free {width: 118px;height: 32px;margin-left: -4px;}
nav2 {display: inline-block;padding: 0 15px;position: relative;}
nav2:hover:before,nav2:hover:after {background: #000;content: "";display: block;height: 1px;position: absolute;top: 50%;width: 12px;}
nav2:hover:before {right: 95%;}
nav2:hover:after {left: 95%;}
.navbar-default .navbar-nav > li > a {color: #333; padding-left: 32px;}
.line-on-sides{overflow: hidden;}
toBold{font-weight: 600;}
.button{width: 150px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
.submitbtn{width: 110px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;}
.button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
a.button {text-decoration: none;}
.button_blue a{color: #ffffff;}
.button_wht a{color: rgb(6, 16, 42);}
.biggerfont{font-family: "Playfair Display",serif;font-size: 38px;font-weight: 300;}
.smallerfont{font-size: 20px;}
.nav{font-size: 14px;font-family: "Montserrat", sans-serif;}
.jumbotron p{font-size: 16px;margin: 0 auto;font-weight: 300; line-height: 24px;}
.jumbotron_wht{background: rgb(255,255,255);}
.jumbotron_w_bg{height: 528px;background-image: url("../img/gift_bg.png");border: 1px solid rgb(235, 235, 235);background-size:100% cover;background-position:center;}
.b3textbox{width:382px;background-color:rgb(255,255,255); text-align:center;}
.linebreak2 {margin-top: 20px;}
.movedown8{margin-top: 8px;}
.movedown16{margin-top: 16px;}
.movedown20{margin-top: 20px;}
.movedown30{margin-top: 30px;}
.movedown2p{padding-top: 2%;}
.movedown5p{padding-top: 5%;}
.movedown10p{padding-top: 10%;}
.movedown14p{padding-top: 14%;}
.word_wrapper{text-align: left; margin-top: 22%;}
.b2word_wrapper{text-align: left; margin-top: 28%;}
.bfaft_wrapper{margin-top: 10%;}
.updateform{text-align: left;}
.form-control{border-radius: 0; width: 190px;height: 30px;}
.cream_wrapper{margin-top: 10%;}
.priceholder{font-size: 14px; color: #b7b7b7;}
.button_spaceholder{margin-top: 30px;}
.rating_wrd{font-size: 13px;color: rgb(235, 204, 43);}
.carousel-control.left,.carousel-control.right{background-image: none;}
.carousel-control {position: absolute;top: 50%; /* pushes the icon in the middle of the height */z-index: 5;display: inline-block;}
div.productwrapper .button_wht{visibility: hidden;}
div.productwrapper:hover .button_wht {visibility: visible;}
.button_wht:hover {background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.button_wht:hover a {background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.undereye {margin-left: -40px;}
img.undereye {height: 500px;}
div.form-group input{margin-left: 18px;margin-right: 40px;}
h2 {font-family: "Playfair Display",serif;font-size: 26px;}
h3{font-family: "Playfair Display",serif;font-size: 38px;line-height: 30px;font-weight: 300;}
h4{font-size: 20px;line-height: 24px;font-weight: 300;}
h5{font-size: 16px; font-weight: 400;}
h3,h4,h5 {display: inline;}
body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden;-webkit-overflow-scrolling: touch;}
body{text-align: center;font-family: "Montserrat",sans-serif;font-size: 16px; font-weight: 300;line-height: 24px;}
#home-uptodate .infusion-field-input-container{display: inline-block;}
/* newsletter popup css */
#popupcontainer {display: none;background-color:#ffffff;width: 360px; height: 480px; z-index: 1000;
  border: 1px solid #000000;box-shadow: 0 0 10px #c6c6c6;position: fixed; bottom: 0; right:5%;
font-family: "Montserrat", sans-serif;}
.popup-header {background: rgb(9,30,55);height: 41px; padding: 9px 18px;color: #ffffff;}
.popupbody {padding: 6px 20px;}
.popup-btn {float: right;}
.infusion-field-input-container {display: block; width: 100%; height: 32px;}
.infusion-field label {font-weight: 300;}
#popupClose:hover {cursor: pointer;}
select#inf_custom_Whichproductareyouinterestedin {width: 100%; height: 32px;
  border-radius: 0px;-webkit-appearance: none;-moz-appearance:none; -webkit-border-radius: 0px;padding: 0px 6px;
  background: url("../img/selectarrows.png") no-repeat right 10px center #f8f9f9;}

/*social network icon */
.social-wrap{list-style: none;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;justify-content:space-between;margin-top: 6px;}
.social-item{width: 20px;height: 20px;margin-left: 6px;}

/*handle responsive for different screens*/
@media screen and (min-width: 1199px){.social-wrap{margin-left: 42px;}}
@media screen and (max-width:1199px) {
  .b2margin{margin-left: 7%;}
  .social-wrap{margin:0;display: block;}
  .cream_wrapper{margin-top: 12%;margin-left: 4%;}
  .cruel-free{margin-left: 0;margin-top: 5px;}
  footer{height: 130px;}
}
@media screen and (max-width:991px) {
  .cream_wrapper{margin-left: 0;margin-top: 16%;}
  .centered_nav{display: block;}
  .b2margin{margin: 0 auto;}
  .navbar-header {float: none;}
  .navbar-left,.navbar-right {float: none !important;}
  .navbar-toggle {display: block;}
  .navbar-collapse {border-top: 1px solid transparent;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);}
  .navbar-fixed-top {top: 0;border-width: 0 0 1px;}
  .navbar-collapse.collapse {display: none!important;}
  .navbar-nav {float: none!important;margin-top: 7.5px;}
  .navbar-nav>li {float:none;}
  .navbar-nav>li>a {padding-top: 10px;padding-bottom: 10px;}
  .collapse.in{display:block !important;}
}
@media screen and (max-width:858px) {
  .lip_wrapper,.bfaft_wrapper{margin-left: -40px;}
}
@media screen and (max-width:767px){.navbar-toggle{margin-right: 45px;}
  .word_wrapper{margin-top: 10%;margin-left: 17%;}
  .b2word_wrapper{margin-top: 7%;margin-left: 17%;}
  .bfaft_wrapper{margin-top: 0;}
  .b3textbox{margin-left: 15px;margin-right: 15px;}
  .form-control{width: 100%;height: 100%;}
  .updateform{margin-left: 30px; margin-right: 30px;}
  div.form-group input{margin: 0;}
  .submitbtn{float: right;}
  footer .container{margin-left: 30px;margin-right: 30px;}
  img.undereye {height: auto;}
}
@media screen and (max-width:572px){
  .word_wrapper{margin-top:6%;}
}
@media screen and (max-width:542px){
  .word_wrapper{margin-left: 30px;}
  .b2word_wrapper{margin-left: 15px;}
  .undereye{margin-left:-10px;}
  .bfaft_wrapper{margin-left: -20px;}
}
@media screen and (max-width:450px){
  .bfaft_wrapper{margin-left: -20px;}
}
@media screen and (max-width:399px){
  .hidden-xxs{display: none!important}
  .col-xxs-11{width: 91.66666667%;}
  .word_wrapper,.b2word_wrapper{margin-top: 0;}
  footer{height: 130px;}
  #popupcontainer {width: 314px;}
}
@media screen and (min-width:330px) and (max-width:628px){.lip_wrapper{margin-right: 12%;}}
</style>
</head>
<body>
  <!--header and navigation content-->
  <?php include("header.php"); ?>
  <!--main content-->
<!-- 1st section -->
 <div class="jumbotron jumbotron_wht">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-0 col-xxs-11">
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
        <a href="undereye.php"><div class="button button_blue pull-left">DISCOVER</div></a>
        <div class="clearfix"></div>
      </div>
    </div>
      <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
        <img class="undereye" src="../img/undereye.png" alt="undereye cream">
    </div>
    <div class="visible-xs col-xs-2 hidden-xxs">
      <img class="undereye" src="../img/undereye_sm.png" alt="undereye cream small">
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
     <div class="col-lg-5 col-lg-offset-2 col-md-6 col-md-offset-0 col-sm-7 col-sm-offset-0 col-xs-7 col-xxs-11">
       <div class="b2word_wrapper">
         <h3>City Lips&reg;</h3>
         <p></p>
         <h3><i>Plump, Hydrate &amp; Repair</i></h3>
         <div class="movedown20"></div>
         <a href="citylips.php"><div class="button button_blue pull-left">SHOP NOW</div></a>
       </div>
     </div>
     <div class="col-lg-2 col-md-2 col-md-pull-0 col-sm-1 col-sm-pull-1 hidden-xs">
       <div class="lip_wrapper"><img src="../img/citylips.png" alt="citylips"></div>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
       <div class="bfaft_wrapper"><img src="../img/bf_aft.png" alt="before n after lips"></div>
     </div>
     <div class="visible-xs hidden-xxs col-xs-4">
       <div class="bfaft_wrapper"><img src="../img/bf_aft_sm.png" alt="before n after lips small"></div>
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
    <a href="#productsection"><div class="button button_blue">SHOP NOW</div></a>
  </div>
</div>
<!-- 4th section -->
<div class="jumbotron jumbotron_wht">
 <div class="container" id="productsection">
   <h3>Products</h3>
   <div class="row movedown5p">
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/citylips_product.png" alt="city lips">
       <div class="movedown30"></div>
       <div><h5>&nbsp;</h5></div>
       <div><h5>CITY LIPS&reg;</h5></div>
       <div class="priceholder">$35 - $40</div>
       <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('citylips',$link,$connErr) . ')';?></span>
       <div class="movedown8"></div>
       <a href="citylips.php" class="button button_wht">SEE DETAILS</a>
     </div>
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/cityviews_product.png" alt="dark spot">
       <div class="movedown30"></div>
       <div><h5>&nbsp;</h5></div>
       <div><h5>CITY VIEWS</h5></div>
       <div class="priceholder">$67</div>
       <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('cityviews',$link,$connErr) . ')';?></span>
       <div class="movedown8"></div>
       <a href="cityviews.php" class="button button_wht">SEE DETAILS</a>
     </div>
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/citylash_product.png" alt="city lash">
       <div class="movedown30"></div>
       <div><h5>&nbsp;</h5></div>
       <div><h5>CITY LASH&reg;</h5></div>
       <div class="priceholder">$79.99</div>
       <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('citylash',$link,$connErr) . ')';?></span>
       <div class="movedown8"></div>
       <a href="citylash.php" class="button button_wht">SEE DETAILS</a>
     </div>
     <div class="hidden-xs col-sm-3 col-md-3 productwrapper">
       <img src="../img/undereye_product.png" alt="under eye">
       <div class="movedown30"></div>
       <div><h5>UNDER EYE</h5></div>
       <div><h5>RECOVERY</h5></div>
       <div class="priceholder">$97</div>
       <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('undereye',$link,$connErr) . ')';?></span>
       <div class="movedown8"></div>
       <a href="undereye.php" class="button button_wht">SEE DETAILS</a>
     </div>
     <div class="visible-xs productwrapper">
       <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
           <div class="item active">
             <img src="../img/citylips_product.png" alt="city lips">
             <div class="movedown30"></div>
             <div><h5>&nbsp;</h5></div>
             <div><h5>CITY LIPS<span class="sup1">&reg;</span></h5></div>
             <div class="priceholder">$35 - $40</div>
             <div class="row">
               <div class="col">
                 <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('citylips',$link,$connErr) . ')';?></span>
               </div>
             </div>
             <div class="movedown8"></div>
             <a href="citylips.php" class="button button_wht">SEE DETAILS</a>
           </div>

           <div class="item">
             <img src="../img/cityviews_product.png" alt="dark spot">
             <div class="movedown30"></div>
             <div><h5>&nbsp;</h5></div>
             <div><h5>CITY VIEWS</h5></div>
             <div class="priceholder">$67</div>
             <div class="row">
               <div class="col">
                 <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('cityviews',$link,$connErr) . ')';?></span>
               </div>
             </div>
             <div class="movedown8"></div>
             <a href="cityviews.php" class="button button_wht">SEE DETAILS</a>
           </div>

           <div class="item">
             <img src="../img/citylash_product.png" alt="city lash">
             <div class="movedown30"></div>
             <div><h5>&nbsp;</h5></div>
             <div><h5>CITY LASH<span class="sup1">&reg;</span></h5></div>
             <div class="priceholder">$79.99</div>
             <div class="row">
               <div class="col">
                 <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('citylash',$link,$connErr) . ')';?></span>
               </div>
             </div>
             <div class="movedown8"></div>
             <a href="citylash.php" class="button button_wht">SEE DETAILS</a>
           </div>

           <div class="item">
             <img src="../img/undereye_product.png" alt="under eye">
             <div class="movedown30"></div>
             <div><h5>UNDER EYE</h5></div>
             <div><h5>RECOVERY</h5></div>
             <div class="priceholder">$97</div>
             <div class="row">
               <div class="col">
                 <img src="../img/stars_rating.png" alt="5 stars rating"><span class="rating_wrd"><?php echo '('. getProductCounts('undereye',$link,$connErr) . ')';?></span>
               </div>
             </div>
             <div class="movedown8"></div>
             <a href="undereye.php" class="button button_wht">SEE DETAILS</a>
           </div>
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <img src="../img/prevArr.png">
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
           <img src="../img/nextArr.png">
         </a>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
 </div>
</div>

<!--include PHP footer template -->
<?php include ("footer.php"); ?>

<?php
  function getProductCounts($pagename,$linkSQL,$connErrSQL){
      $count = 0;
      if (!$connErrSQL){
        //prepare query
        if($stmt = $linkSQL->prepare("SELECT `rateid` FROM `cc_$pagename`")){
          $stmt->execute();
          $stmt->store_result();
          $count = $stmt->num_rows;
          $stmt->free_result();
          $stmt->close();
        }
      }
    return $count;
    }
  ?>
  <script type="text/javascript">
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
    }
    function makeid() {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (var i = 0; i < 14; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }

    $("#newsletter-btn").on('click', function (evt) {
      var optin = getCookie("opt-ined");
      if (optin == "") {
        cvalue = makeid();
        setCookie("opt-ined", cvalue, 30);
      }
    })

    $( document ).ready(function() { //handle newsletter popup
      var ccookie = getCookie("opt-ined");
      if (ccookie == "") {
        setTimeout(function () {
          $("#popupcontainer").fadeIn()
        }, 5000);
      }
      $("#popupClose").on('click', function (evt) {
        $("#popupcontainer").fadeOut();
      })
    })
  </script>

</body>
</html>
