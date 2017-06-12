<!--include head and other css templates-->
<?php  include("head.php"); ?>
<title>City Beauty - Media</title>
<!--main css-->
<style type="text/css">
 a {text-decoration: none;}
 *{margin:0 auto;}
header,footer{background: rgb(9,30,55) center no-repeat fixed;height: 120px;margin: 0 auto;background-size: 100% 100%; background-size: cover;}
footer{font-family: "Montserrat", sans-serif;color: rgb(255,255,255);font-size: 12px; font-weight: 300; line-height: 1;}
footer a,a:hover{text-decoration: none; color: #ffffff}
.cruel-free{margin-left: -10px;}
.container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
.container{margin: 0 auto;padding: 0;text-align:center;margin-left: auto;margin-right: auto;}
.centered_flex{display: flex;justify-content: center;align-items: center;}
.centered_nav{display: flex;justify-content: center;align-items: center;}
.flexcontainer{padding: 0;margin: 0 auto;list-style: none;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;justify-content: space-around;}
.flexitem{padding-left: 5px;}
.nav{font-size: 14px;font-family: "Montserrat", sans-serif;}
.navbar-default .navbar-nav > li > a {color: #333; padding-left: 32px;}
nav2 {display: inline-block;padding: 0 15px;position: relative;}
nav2:hover:before,nav2:hover:after {background: #000;content: "";display: block;height: 1px;position: absolute;top: 50%;width: 12px;}
nav2:hover:before {right: 90%;}
nav2:hover:after {left: 90%;}
.line-on-sides{overflow: hidden;}
toBold{font-weight: 600;}
.button{width: 150px;height: 30px;font-size: 14px;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
.button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
.biggerfont{font-family: "Playfair Display",serif;font-size: 38px;}
.smallerfont{font-size: 20px;}
.jumbotron p{font-size: 16px;margin: 0 auto;font-weight: 300;}
.jumbotron_wht{background: rgb(255,255,255);}
.jumbotron_w_bg{background: rgb(248,249,249);background-size: cover;border: 1px solid rgb(235, 235, 235);margin: 0 auto;}
.movedown2p{margin-top: 2%;}
.movedown5p{margin-top: 5%;}
.movedown10p{margin-top: 10%;}
.lifestyle_content{margin-top: 60px;}
.ghk_word{text-align: left;}
.ghk_wording{margin-left: 20px;}
.textbox{width: 748px;}
h3{font-family: "Playfair Display",serif;font-size: 38px;line-height: 24px;}
h4{font-size: 20px;}
h5{font-size: 13px;font-weight: 300;}
body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden;}
body{text-align: center;font-family: "Raleway",sans-serif;font-size: 16px; font-weight: 300; line-height: 24px;}
@media screen and (min-width: 1199px){.socialicons{margin-left: 46px;}}
@media screen and (max-width:1199px){
  .ghk_quotes{margin-left: 20%;}
  .img_wrapper{margin-left: 5%;}
}
@media screen and (max-width:991px){
  .lifestyle_logo{margin-left: 0;}
  .centered_nav{display: block;}
  .jumbotron_w_bg .textbox{width: 100%;}
  .ghk_quotes{margin-left: 0;} .img_wrapper{margin:0;}
  .navbar-header {float: none;}
  .navbar-left,.navbar-right {float: none !important;}
  .navbar-toggle {display: block; margin-right: 30px;}
  .navbar-collapse {border-top: 1px solid transparent;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);}
  .navbar-fixed-top {top: 0;border-width: 0 0 1px;}
  .navbar-collapse.collapse {display: none!important;}
  .navbar-nav {float: none!important;margin-top: 7.5px;}
  .navbar-nav>li {float:none;}
  .navbar-nav>li>a {padding-top: 10px;padding-bottom: 10px;}
  .collapse.in{display:block !important;}
  .magazine_word{margin-left: 46px;}
}
@media screen and (max-width:767px){
  .lifestyle_content{margin: 0;}
  div.img_wrapper img{max-width: 100%; height: auto; width: auto\9;}
  div.img_wrapper {padding-left: 30px; padding-right: 30px;}
  .lifestyle_logo{margin-top: 5%;}
  .navbar-toggle {margin-right: 40px;}
  .img_wrapper{text-align: center;}
  .ghk_word{margin-top: 10%; margin-left: 25%; margin-right: 30px;}
  .textbox{width: 99%;} footer{padding-left: 30px; padding-right: 30px;}
  .magazine_word{margin-bottom: 10px;margin-left: 70px;}
}
@media screen and (max-width:700px){.ghk_word{margin-left: 12.5%;}}
@media screen and (max-width:640px){.ghk_word{margin-left: 30px;}}
@media screen and (max-width:469px){div.magazine_wrapper img{width: 95%;} .magazine_wrapper,.lifestyle_logo{padding-left: 30px;padding-right: 30px;}}
</style>
</head>
<body>
  <!--header and navigation content-->
  <?php include("header.php"); ?>
  <!--main content-->

  <div class="jumbotron jumbotron_wht">
    <div class="container-fluid">
      <h3><i>Featured</i></h3>
      <h3>In The Media</h3>
    </div>
  </div>
<hr>
<div class="jumbotron jumbotron_wht">
  <div class="container">
    <div class="textbox">
      <div class="row">
        <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
          <img src="../img/winslet.png" alt="winslet screenshot">
        </div>
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
          <div class="ghk_word">
            <div><img src="../img/goodhousekeeping.png"></div>
            <div class="movedown5p"></div>
            <div class="row">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><img src="../img/quotes.png" alt="quotes"></div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ghk_wording"><p>Want lips this lush? Our testers did, so we asked them to try different treatments for a month, in hopes of releasing their inner Angelina Jolie. THE WINNERS: City Lips® clear gloss Lip Plumping Treatment created the fullest smoochers.</p>
                <h5>- GOOD HOUSEKEEPING MAGAZINE, PAGE 45.</h5>
              </div>
            <div class="clearfix"></div>
            </div>
            <div class="movedown2p"></div>
            <div class="row">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><img src="../img/quotes.png" alt="quotes"></div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ghk_wording"><p>...The original winner. City Lips &copy; is still champion.</p>
                <h5>- GOOD HOUSEKEEPING MAGAZINE.</h5>
              </div>
            <div class="clearfix"></div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="jumbotron jumbotron_wht">
  <div class="container">
    <div class="textbox">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="magazine_wrapper"><img src="../img/magfeature.png" alt="magazine features"></div>
        </div>
        <div class="col-lg-5 col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-12 col-xs-offset-0 lifestyle_content">
          <img src="../img/lifestyle_media1.png" alt="ls mag">
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron_w_bg">
  <div class="container">
    <div class="textbox">
      <div class="img_wrapper"><img src="../img/medialogos.png" alt="media logos"></div>
    </div>
  </div>
</div>

<!--include PHP footer template -->
<?php include ("footer.php"); ?>
</body>
</html>
