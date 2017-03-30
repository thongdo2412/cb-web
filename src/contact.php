<!DOCTYPE html>
<html>
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form</title>
  <!--include Bootstrap-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,600,600i,700,900|Playfair+Display:300,300i,400,400i|Raleway:300,400,400i,700">
<!--main css-->
<style type="text/css">
 a {text-decoration: none;}
 *{margin:0 auto;}
header,footer{background: rgb(9,30,55) center no-repeat fixed;height: 94px;margin: 0 auto;background-size: 100% 100%; background-size: cover;}
footer{color: rgb(255,255,255);font-size: 11px; font-weight: 300; line-height: 1;}
.container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
.container{text-align:center;margin-left: auto;margin-right: auto;margin: 0 auto;padding: 0;}
.centered_flex{display: flex;justify-content: center;align-items: center;}
.centered_nav{display: flex;justify-content: center;align-items: center;}
.nav{font-size: 14px;font-family: "Montserrat", sans-serif;}
nav2 {display: inline-block;padding: 0 15px;position: relative;}
nav2:hover:before,nav2:hover:after {background: #000;content: "";display: block;height: 1px;position: absolute;top: 50%;width: 12px;}
nav2:hover:before {right: 90%;}
nav2:hover:after {left: 90%;}
.line-on-sides{overflow: hidden;}
toBold{font-weight: 600;}
.button{width: 110px;height: 30px;font-size: 14px;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;}
.button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
.button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
.biggerfont{font-family: "Playfair Display",serif;font-size: 38px;}
.smallerfont{font-size: 20px;}
.jumbotron p{font-size: 16px;margin: 0 auto;font-weight: 300;font-size: 16px;}
.jumbotron_wht{background: rgb(255,255,255);}
.jumbotron_w_bg{background: rgb(248,249,249);background-size: cover;border: 1px solid rgb(235, 235, 235);margin: 0 auto;}
.callmailus{margin-top: 50px;}
.movedown2p{margin-top: 2%;}
.movedown5p{margin-top: 5%;}
.textbox{width: 450px;height: 182px;border: 1px solid rgb(235, 235, 235);}
.textarea1{text-align: left;margin-left: 50px;}
.textarea1 p{line-height: 1;}
.emailform{width: 1000px;height: 500px;border: 1px solid rgb(235, 235, 235);margin-top: 50px;}
.textarea2{text-align: left;margin-left: 64px;}
.textarea2 p{white-space: pre;}
.form-control-static{width: 290px;}
.lastname{margin-left: 80px;}
.emailaddr{margin-left: 48px;}
.subject{margin-left: 106px;}
.msgboxarea{margin-left: 23px;}
.buttonform{text-align: right;margin-right: 40px;}
h3{font-family: "Playfair Display",serif;font-size: 38px;line-height: 1;}
h4{font-size: 20px;line-height: 1;font-weight: 300;}
select{width: 290px;height: 40px;}
body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden;}
body{text-align: center;font-family: "Montserrat",sans-serif;font-size: 16px;font-weight: 300;}
textarea{width: 778px;height: 114px; border: 1px solid #ccc;}

/*Responsive for different screen*/
@media screen and (min-width: 1200px) {.socialicons{margin-left: 80px;}}
@media screen and (max-width: 1199px) {.textbox{margin-top: 50px;} .socialicons{margin:0;}}
@media screen and (max-width: 1034px) {.textarea2{margin-left: 64px;} .form-inline .form-group{display: block;} .lastname{margin-left: 6px;margin-top: 10px;} .emailaddr{margin-left: 47px;} .subject{margin-top: 10px;margin-left: 29px;}
.msgboxarea {margin-left: 20px;}}
@media screen and (min-width: 991px) and (max-width:1199px) {.callmailus{display: block; margin: 0 auto;}}
@media screen and (max-width: 991px){.buttonform{text-align: center;} .emailform{width: 91%;}textarea{width: 80%;} .textbox{width: 87%;}}
@media screen and (max-width: 767px){.textarea2{margin-left: 0;} .centered_nav{display: block;}}
@media screen and (max-width: 479px){.form-control-static{width: 160px;}}
</style>
</head>
<body>
  <!--main content-->
  <header class="centered_flex">
    <div class="container-fluid">
      <img src="../img/citylogo1.png"></img>
    </div>
  </header>
  <!--nav bar-->
  <nav class="navbar navbar-default centered_nav" role="navigation">
  <div class="container-fluid">
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
        <li><a href="#"><nav2>VIEW CART</nav2></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>

  <div class="jumbotron jumbotron_wht">
    <div class="container">
      <h3>Contact Us</h3>
      <div class="callmailus">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-md-offset-4 col-lg-offset-1 textbox centered_flex">
            <div class="textarea1">
              <h4>CALL US</h4>
              &nbsp;
              <p>1-800-347-1558</p>
              <p>Monday - Friday / 5am-7pm PT</p>
              <p>Saturday - Sunday / 6am - 4:30pm</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-md-offset-4 col-lg-offset-1 textbox centered_flex">
            <div class="textarea1">
              <h4>MAIL US</h4>
              &nbsp;
              <p>CITY BEAUTY</p>
              <p>XXXXXXXXXXXXXXX</p>
              <p>Salt Lake City, UT 81406</p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="emailform">
        <div class="textarea2 centered">
          <h4>EMAIL US</h4>
          <div class="movedown5p"></div>
          <form id="contact_form" method="post" action="test/mailtest.php" role="form">
            <div class="form-inline">
              <div class="form-group">
                <p>FIRST NAME*   <input id="form_fname" type="text" name="fname" class="form-control-static" required="required" data-error="First name is required."></p>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <div class="lastname">
                  <p>LAST NAME*   <input id="form_lname" type="text" name="lname" class="form-control-static" required="required" data-error="Last name is required."></p>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="movedown2p"></div>
            <div class="form-inline">
              <div class="form-group">
                <div class="emailaddr">
                  <p>EMAIL*   <input id="form_email" type="email" name="email" class="form-control-static" required="required" data-error="Valid email is required."></p>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="subject">
                  <p>SUBJECT*  <input id="form_subject" type="text" name="subject" class="form-control-static"></p>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="movedown2p"></div>
            <div class="form-inline">
              <div class="form-group">
                <div class="msgboxarea">
                  <p>MESSAGE*  <textarea id="form_message" name="message"></textarea></p>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="movedown2p"></div>
            <div class="form-inline">
              <div class="buttonform">
                <div class="form-group">
                  <button type="submit" class="button button_blue">SUBMIT</button>
                </div>
              </div>
            </div>
          </form>


        </div>
      </div>

    </div>
  </div>

  <footer class="centered_flex">
   <div class="container">
     <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12  col-xs-12">
        <p>&reg; City Cosmetics 2017. City Lips and City Lash are registered trademarks of City Cosmetics, LLC. All rights reserved.</p>
      </div>
      <div class="col-lg-4 col-md-12 ol-sm-12 col-xs-12">
        <p>PRIVACY POLICY &nbsp|&nbsp TERMS &amp; CONDITIONS &nbsp|&nbsp SITEMAP</p>
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
