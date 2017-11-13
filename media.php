<!--include head and other css templates-->
<?php  include("head.php"); ?>
<title>City Beauty - Media</title>
<!--main css-->
<style type="text/css">
.cruel-free {margin-left: -10px;}
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
#inthemedia {padding: 30px 0px;}
#inthemediaVidWrap p {-webkit-margin-before: 0;-webkit-margin-after: 0;}
#inthemediaVidWrap {width: 800px;}
#inthemediaVidWrap iframe {width: 100%; height: 450px;}
.mediaquotes {font-size: 14px;color: #a5a5a5;width: 90%;}
#cbblogger {width: 800px;height: 450px;}
.biggerfont{font-family: "Playfair Display",serif;font-size: 38px;}
.smallerfont{font-size: 20px;}
.jumbotron p{font-size: 16px;margin: 0 auto;font-weight: 300;}
.jumbotron_wht{background: rgb(255,255,255);}
.jumbotron_w_bg{background: rgb(248,249,249);background-size: cover;border: 1px solid rgb(235, 235, 235);margin: 0 auto;}
h3{font-family: "Playfair Display",serif;font-size: 38px;line-height: 24px;}
h4{font-size: 20px;}
h5{font-size: 13px;font-weight: 300;}
body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden;}
body{text-align: center;font-family: "Raleway",sans-serif;font-size: 16px; font-weight: 300; line-height: 24px;}
@media screen and (min-width: 1199px){.social-wrap{margin-left: 60px;}}
@media screen and (max-width:1199px){
  .social-wrap{margin-left: 0;}
  .img_wrapper{margin-left: 5%;}
  footer {height: 150px;}
}
@media screen and (max-width:991px){
  .centered_nav{display: block;}
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
  #inthemediaVidWrap {width: 90%;}
  #cbblogger {width: 90%; height: 405px;}
  #inthemediaVidWrap iframe {height: 405px;}
}
@media screen and (max-width:767px){
  div.img_wrapper img{max-width: 100%; height: auto; width: auto\9;}
  div.img_wrapper {padding-left: 30px; padding-right: 30px;}
  .navbar-toggle {margin-right: 40px;}
  .img_wrapper{text-align: center;}
  footer{padding-left: 30px; padding-right: 30px;}
  .magazine_word{margin-bottom: 10px;margin-left: 70px;}
  #cbblogger {height: 364px;}
  #inthemediaVidWrap iframe {height: 364px;}
}
@media screen and (max-width:640px){
  #cbblogger {height: auto;}
  #inthemediaVidWrap iframe {height: auto;}
}
@media screen and (max-width:469px){div.magazine_wrapper img{width: 95%;} .magazine_wrapper{padding-left: 30px;padding-right: 30px;}}
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
<div id="inthemedia">
  <div class="container">
    <div class="linebreak2"></div>
    <iframe id="cbblogger" src="https://www.youtube.com/embed/d1U0hOTGCfs" frameborder="0" allowfullscreen></iframe>
    <div class="linebreak3"></div>
    <div id="inthemediaVidWrap">
      <iframe src="https://www.youtube.com/embed/JK-0A1ILtNw" frameborder="0" allowfullscreen></iframe>
      <div class="mediaquotes text-left">
        <div class="linebreak1"></div>
        <p>"These chemicals in the ingredients in City Lips seems to retain moisture and plumpness and softness and reduces chapping".</p>
        <h5>- ABC News Channel</h5>
      </div>
      <div class="linebreak2"></div>
      <iframe src="https://www.youtube.com/embed/x89HqXshZvQ" frameborder="0" allowfullscreen></iframe>
      <div class="mediaquotes text-left">
        <div class="linebreak1"></div>
        <p>"If you want fuller lips like your favorite stars, City Lips could be the answer!"</p>
        <h5>- FOX 11 News Channel</h5>
      </div>
    </div>
  </div>
</div>

<!--include PHP footer template -->
<?php include ("footer.php"); ?>
</body>
</html>
