<?php
  $pid = 'undereye';
  include("scripts/conn_init.php");
  include("scripts/insert.php");
 ?>

<!DOCTYPE HTML>
<html>
  <head>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Under Eye Recovery</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i">
  <link rel="stylesheet" href="../components/raty-master/lib/jquery.raty.css">
<style type="text/css">
  a {text-decoration: none;}
  *{margin:0 auto;}
  header, footer{background: rgb(9,30,55);height: 94px;background-size: cover;}
  footer{color: rgb(255,255,255);}
  footer p{font-size: 11px; font-weight: 300; text-align: center; line-height: 1;word-wrap:break-word;}
  footer a,a:hover{text-decoration: none; color: #ffffff}
  .container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
  .container{width: 960px;margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
  .centered_flex{display: flex;justify-content: center;align-items: center;}
  .centered_nav{display: flex;justify-content: center;align-items: center;}
  nav2 {display: inline-block;padding: 0 15px;position: relative;}
  nav2:hover:before,nav2:hover:after {background: #000;content: "";display: block;height: 1px;position: absolute;top: 50%;width: 12px;}
  nav2:hover:before {right: 90%;}
  nav2:hover:after {left: 90%;}
  .navbar-default .navbar-nav > li > a {color: #333; padding-left: 32px;}
  .line-on-sides{overflow: hidden;}
  toRegular{font-weight: 400;}
  .sup1{vertical-align: super;}
  .button{width: 150px;height: 32px;font-size: 14px; border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
  .button_bg{width: 240px;height: 32px;font-size: 14px; border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
  .submitbtn{width: 110px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;border-radius: 0;}
  .button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
  .button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
  .nav{font-size: 14px;font-family: "Montserrat", sans-serif;}
  .jumbotron p{font-size: 16px;margin: 0 auto;font-weight: 300;}
  .jumbotron_wht{background: rgb(255,255,255);}
  .jumbotron_w_bg{background: rgb(248,249,249);background-size: cover;border: 1px solid rgb(235, 235, 235);margin: 0 auto;}
  .movedown20{padding-top: 20px;}
  .movedown2p{padding-top: 2%;}
  .movedown5p{padding-top: 5%;}
  .movedown10p{padding-top: 10%;}
  .creamphoto{margin-right: 96px;margin-top: 150px;}
  .product_info{text-align: left;}
  .product_notes{text-align: left; margin-top: 10px;}
  .productnotes_head{width: 148px;margin-top: 16px;}
  .productnotes_words{text-align: left;font-family: "Playfair Display",serif;font-style: italic;font-size: 20px;border-bottom: solid 0.5px rgb(235,235,235);margin-top: 10px;}
  .product_img{margin-top: 10px;}
  .cream_box{border: 1px solid rgb(235, 235, 235);background-color: rgb(255, 255, 255);width: 276px;height: 276px;}
  .faq_heading{text-align: left;width: 160px;}
  .faq_words{text-align: left;margin-top: 18px;}
  .review_link{font-size: 14px; text-decoration: underline;}
  .testi_usr{width: 170px;text-align: left;margin-top: 10px;}
  .linebreak1{margin-top: 5px;}
  .linebreak2{margin-top: 18px;}
  .linebreak3{margin-top: 30px;}
  .linebreak4{margin-top: 12px;}
  .ratingwrapper{margin-top: 16px;}
  .yousave{margin-left: -52px;}
  .guarantee_wrd{margin-left: 70px;}
  .col-xs-8 {width: 68.66666667%;}
  .quantityword{margin-top: 6px;}
  .quantity{margin-left: 10px;font-family: "Playfair Display", serif; font-size: 30px; font-style: italic;}
  select.quantity{border: 0; border-radius: 0;-webkit-appearance: none; background: url("../img/quantityarrw.png") no-repeat 20px 5px #ffffff;}
  .xsquantity{font-family: "Playfair Display", serif;font-size: 20.45px;}
  select.xsquantity{width: 75px;height: 32px; border: 1px solid rgb(235, 235, 235);border-radius: 0;-webkit-appearance: none; background: url("../img/quantityarrw_sm.png") no-repeat 38px 13px #ffffff; text-align-last:left;padding-left: 22px;direction: rtl;}
  .rating_wrd{font-size: 13px;color: rgb(235, 204, 43);}
  .features li,.details li{margin-top: 10px;margin-left: -1.4em;}
  div.form-group input.form-control{border-radius: 0;width: 290px;height: 32px;}
  div.form-group input{margin-left: 18px;}
  div.form-group label{font-weight: 300;}
  div.form-group textarea.form-control{border-radius: 0;margin-left: 18px;width: 774px;height: 104px;}
  #reviewpanel{margin: 0 auto;}
  #review_form{text-align: left;margin-left: 32px;}
  .firstname{margin-left: 14px;}
  .email{margin-left: 114px;}
  .subjectrating{margin-top: 16px;}
  .yourrating{margin-left: 54px;}
  .rating_label{float: left;margin-top: 2px;}
  #form_rating{float: left;margin-left: 14px;}
  .msgtextbox{margin-left: 28px;margin-top: 16px;}
  .btn_wrapper{float: right;margin-right: 50px;}
  h3{font-family: "Playfair Display",serif;font-size: 38px; display: inline;}
  h4{font-family: "Playfair Display",serif;font-size: 33px;}
  h5{font-family: "Playfair Display",serif;font-size: 22px;font-weight: 400;font-style: italic;}
  h6{font-size: 20px;display: inline;font-weight: 400;}
  i{font-style: italic;}
  body,html {margin:0px;padding:0px;overflow-x: hidden;}
  body{text-align: center;font-family: "Montserrat",sans-serif;font-size: 16px; font-weight: 300; line-height: 24px;}

  /*handle responsive*/
  @media screen and (min-width: 1199px){.socialicons{margin-left: 29px;}}
  @media screen and (max-width:1199px){.socialicons{margin: 0;}}
  @media screen and (max-width:991px){
    .centered_nav{display: block;}
    .navbar-header {float: none;}
    .navbar-left,.navbar-right {float: none !important;}
    .navbar-toggle {display: block; margin-right: 25px;}
    .navbar-collapse {border-top: 1px solid transparent;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);}
    .navbar-fixed-top {top: 0;border-width: 0 0 1px;}
    .navbar-collapse.collapse {display: none!important;}
    .navbar-nav {float: none!important;margin-top: 7.5px;}
    .navbar-nav>li {float:none;}
    .navbar-nav>li>a {padding-top: 10px;padding-bottom: 10px;}
    .collapse.in{display:block !important;}
    .product_notes{margin-top: 20px;}
    #testi hr{width: 86%;}
    .firstname,.email,.subjectline,.yourrating,.subjectrating{margin: 0;}
    .msgtextbox{margin-left: 0;}
    div.form-group input{margin-left: 0;}
    div.form-group textarea.form-control{margin-left: 0; width: 290px;}
    .quantity{margin-left: 20px;}
    .btn_wrapper{margin-right: 10px;}
    #review_form{width: 300px;margin-left: 35%;}
  }

  @media screen and (max-width:767px){
    footer .container{margin-left: 30px;margin-right: 30px;}
    .navbar-toggle{margin-right: 40px;}
    .undereyephoto{text-align: center;margin-top: 30px;margin-bottom: 30px;}
    .guarantee_wrd{margin-left: 100px;}
    .product_notes{padding-left: 28px;padding-right: 28px;}
    #review_form{width: 300px;margin:auto;}
  }
  @media screen and (max-width:479px){
    .word_wrapper{margin-left: 12.5%; margin-bottom: 5%;}
    .guarantee_wrd{font-size: 14px;}
    .guarantee_logo{margin-top: 6%;}
  }
  @media screen and (max-width:400px){
    .guarantee_logo{margin-top: 9%;}
  }
  @media screen and (max-width:399px){
    .button_bg{width: 150px;margin-left: 20px;}
    #review_form{padding-left: 28px; padding-right: 28px;}
    div.form-group input.form-control{width: 244px;}
    div.form-group textarea.form-control{width: 244px;}
    .btn_wrapper{margin: 0;}
  }

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
  <div class="container-fluid centered_nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header text-right">
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
  </nav>

<div class="jumbotron jumbotron_wht">
  <div class="section1">
    <div class="container">
      <div class="row">
        <div class="col-lg-1 col-lg-offset-2 col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-1 hidden-xs product_pic">
          <div class="row">
            <div class="col">
              <img src="../img/undereye_str.png" alt="under eye">
            </div>
            <div class="col creamphoto">
              <img src="../img/cream.png" alt="under eye">
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-2 col-xs-10 col-xs-offset-1 product_info">
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-7">
              <h3>Under Eye Recovery</h3>
            </div>
            <div class="linebreak2"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
              <div class="ratingwrapper"><img src="../img/ratingstars.png" alt="144 ratings stars"></div>
            </div>
            <div class="hidden-lg hidden-md hidden-sm visible-xs col-xs-12 undereyephoto">
              <img src="../img/undereye_str_sm.png" alt="undereye small">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 hidden-xs">
              <p><h6>$99.00</h6> + <i>free shipping</i> / YOU SAVE <toRegular>$10</toRegular></p>
            </div>
            <div class="col-xs-12 visible-xs">
              <p><h6>$99.00</h6></p>
              <p>+ <i>free shipping</i></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 hidden-xs">
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 quantityword">QUANTITY</div>
                <div class="col-lg-1 col-md-1 col-sm-1"><select class="quantity"></select></div>
              </div>
              <div class="linebreak2"></div>
              <div class="button button_blue pull-left">ADD TO CART</div>
              <div class="clearfix"></div>
              <div class="linebreak4"></div>
            </div>
            <div class="visible-xs col-xs-12">
              <p><img src="../img/stars_rating.png" alt="5 stars rating"> <span class="rating_wrd">(144 Reviews)</span></p>
              <div class="linebreak2"></div>
              <div class="row">
                <div class="col-xs-3">
                  <select class="xsquantity"></select>
                </div>
                <div class="col-xs-4">
                  <div class="button_bg button_blue">ADD TO CART</div>
                </div>
              </div>
            <div class="clearfix"></div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 hidden-xs">
              <div class="linebreak1"></div>
              <p>DESCRIPTION</p>
              <div class="linebreak2"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget enim enim. Nulla facilisi. In et lacus nulla. Fusce tincidunt blandit tellus, ut faucibus urna ultrices egestas. Vestibulum turpis augue, egestas in tellus ut, facilisis consectetur sem. </p>
              <div class="linebreak2"></div>
              <p>FEATURES</p>
              <div class="linebreak2"></div>
              <ul class="features">
                <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
              </ul>
              <hr>
              <p>DETAILS</p>
              <div class="linebreak2"></div>
              <ul class="details">
                <li>0.5 FL OZ / 15 ML</li>
                <li>CRUELTY-FREE</li>
                <li>MANUFACTURED IN THE USA</li>
              </ul>
            </div>
            <div class="col-xs-12 visible-xs">
              <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"><p>DESCRIPTION</p></div>
                <!--collapse content goes here -->
                <div class="col-lg-1">
                  <div data-toggle="collapse" data-target="#description" class="plusminus">+</div>
                </div>
              </div>
              <div id="description" class="collapse">
                <div class="linebreak2"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget enim enim. Nulla facilisi. In et lacus nulla. Fusce tincidunt blandit tellus, ut faucibus urna ultrices egestas. Vestibulum turpis augue, egestas in tellus ut, facilisis consectetur sem. </p>
                <div class="linebreak2"></div>
                <p>FEATURES</p>
                <div class="linebreak2"></div>
                <ul class="features">
                  <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                  <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                  <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                </ul>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"><p>DETAILS</p></div>
                <!--collapse content goes here -->
                <div class="col-lg-1">
                  <div data-toggle="collapse" data-target="#details_drop" class="plusminus">+</div>
                </div>
              </div>
              <div id="details_drop" class="collapse">
                <div class="linebreak2"></div>
                <ul class="details">
                  <li>0.5 FL OZ / 15 ML</li>
                  <li>CRUELTY-FREE</li>
                  <li>MANUFACTURED IN THE USA</li>
                </ul>
              </div>
            </div>
          </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"><p>INGREDIENTS</p></div>
              <!--collapse content goes here -->
              <div class="col-lg-1">
                <div data-toggle="collapse" data-target="#ingredients" class="plusminus">+</div>
              </div>
            </div>
            <div class="linebreak2"></div>
            <div id="ingredients" class="collapse">
            <p>Water, Glycerin, Caprylic/Capric Triglyceride, Nylon-12 Fluorescent Brightener 230 Salt, Isopentyldiol, Polymethylsilsesquioxane, Pentylene Glycol, Caffeine, Cetearyl Alcohol, Glyceryl Stearate, Potassium Olivoyl Hydrolized Oat Protein, Cyclopentasiloxane, Dimethicone, Jojoba Esters, Olea Europaea (Olive) Fruit Unsaponifiables, Cocos Nucifera (Coconut) Oil, Albizia Julibrissin Bark Extract, Coffea Arabica (Coffee) Seed Extract, Passiflora Incarnata Flower Extract, Phenoxyethanol, Glyceryl Oleate, Strelitzia Nicolai Seed Aril Extract, Polyvinylalcohol Crosspolymer, Sodium Hyaluronate, Caprylyl Glycol, Lecithin, Chlorphenesin, Algae Extract, Xanthan Gum, Cyamopsis Tetragonoloba (Guar) Gum, Steareth-20, Tetrasodium Glutamate Diacetate, Hexylene Glycol, Palmitoyl Oligopeptide, Darutoside, Caprooyl Tetrapeptide-3, Dextran, Palmitoyl Tetrapeptide-7, Hydroxyacetophenone, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Fragrance.</p>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 guarantee_logo">
                <img src="../img/60daysicon2.png" alt="60 days icon #2">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8.5 guarantee_wrd">
                <p>You have 60 days to try our products and see the results for yourself. If you are not 100% satisfied, simply contact us and we will gladly refund your money. No questions asked.</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
    </div>
  </div>
</div>

  <div class="jumbotron jumbotron_w_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="product_img cream_box centered_flex">
            <img src="../img/cream.png" alt="cream">
          </div>
        </div>
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1 product_notes">
          <h4>Product Notes</h4>
          <div class="linebreak2"></div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">GOOD FOR</div>
            <div class="col-lg-9 col-md-6 col-sm-6 col-xs-10 productnotes_words">Wrinkles and bags under the eyes</div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head"><br></div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words"><br></div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">SKIN TYPE</div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words">All</div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head"><br></div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words"><br></div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">APPLICATION</div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words">Morning &amp; night after washing face</div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <div class="jumbotron jumbotron_wht">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1 faq_heading">
          <h4>Frequently Asked Questions</h4>
        </div>
        <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1 hidden-xs faq_words">
          <p>WHICH ORDER OPTIONS IS RIGHT FOR ME?</p>
          <br>
          <p>Many of our returning customers appreciate the 3-pack because it
          offers the best value. And we're happy to do it because it saves us the cost of processing individual units.</p>
          <br>
          <p>If you just want to try 1 tube, we've already reduced the price far below original retail. So you can't go wrong with any of the options. And I just know that you'll fall in love with your new lips either way.</p>
          <div class="linebreak3"></div>
          <hr>
          <div class="linebreak3"></div>
          <p>WHEN CAN I EXPECT MY ORDER TO ARRIVE?</p>
          <br>
          <p>We know you can't wait to start trying City Lips<span class="sup1">&reg;</span> and experiencing the amazing difference for yourself.
          That's why our shipping department is operational 7 days a week. That way, your order leaves our facilities
          within 24-hours. Transit usually takes 3-5 business days depending on what part of the country you're in.</p>
          <div class="linebreak3"></div>
          <hr>
          <div class="linebreak3"></div>
          <p>IS MY INFORMATION SAFE?</p>
          <br>
          <p>We take your privacy very seriously. That's why we use a variety of security measures to
          maintain the safety of your personal information. </p>
          <br>
          <p>When you place an order or access your personal information, everything goes through a
          secure server. All of your personal information, including credit card number, name, and address,
          is transmitted via Secure Socket Layer (SSL) technology — the industry standard for secure online transactions.</p>
          <br>
          <p>If you would rather not shop online, you can place your order over the phone by calling us at 1-800 347-1558.</p>
        </div>
        <div class="visible-xs col-xs-10 col-xs-offset-1 faq_words">
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"><p>WHICH ORDER OPTIONS IS RIGHT FOR ME?</p></div>
            <!--collapse content goes here -->
            <div class="col-lg-1">
              <div data-toggle="collapse" data-target="#orderoptions" class="plusminus">+</div>
            </div>
          </div>
          <div id="orderoptions" class="collapse">
            <div class="linebreak2"></div>
            <p>Many of our returning customers appreciate the 3-pack because it
            offers the best value. And we're happy to do it because it saves us the cost of processing individual units.</p>
            <br>
            <p>If you just want to try 1 tube, we've already reduced the price far below original retail. So you can't go wrong with any of the options. And I just know that you'll fall in love with your new lips either way.</p>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"><p>WHEN CAN I EXPECT MY ORDER TO ARRIVE?</p></div>
            <!--collapse content goes here -->
            <div class="col-lg-1">
              <div data-toggle="collapse" data-target="#orderarrival" class="plusminus">+</div>
            </div>
          </div>
          <div id="orderarrival" class="collapse">
            <div class="linebreak2"></div>
            <p>We know you can't wait to start trying City Lips<span class="sup1">&reg;</span> and experiencing the amazing difference for yourself.
            That's why our shipping department is operational 7 days a week. That way, your order leaves our facilities
            within 24-hours. Transit usually takes 3-5 business days depending on what part of the country you're in.</p>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"><p>IS MY INFORMATION SAFE?</p></div>
            <!--collapse content goes here -->
            <div class="col-lg-1">
              <div data-toggle="collapse" data-target="#infosafety" class="plusminus">+</div>
            </div>
          </div>
          <div id="infosafety" class="collapse">
            <div class="linebreak2"></div>
            <p>We take your privacy very seriously. That's why we use a variety of security measures to
            maintain the safety of your personal information. </p>
            <br>
            <p>When you place an order or access your personal information, everything goes through a
            secure server. All of your personal information, including credit card number, name, and address,
            is transmitted via Secure Socket Layer (SSL) technology — the industry standard for secure online transactions.</p>
            <br>
            <p>If you would rather not shop online, you can place your order over the phone by calling us at 1-800 347-1558.</p>
          </div>
          <hr>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <hr>
  <div class="jumbotron jumbotron_wht" id="testi">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <h4>Real stories from recent customers</h4>
        </div>
      </div>
      <div class="linebreak2"></div>
      <div id="reviewsection">
        <?php include('scripts/comments.php'); ?>
      </div>
    </div>
  </div>

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
    <script src="../components/raty-master/lib/jquery.raty.js"></script>
    <script type="text/javascript">
    $(function(){
      var $select = $(".quantity,.xsquantity");
      for (i=1;i<=100;i++){
        $select.append($('<option></option>').val(i).html(i))
      }
    });
    $('.plusminus').click(function(){
      var sign;
      var getDatatarget = $(this).attr("data-target");

      //change + to - sign when toggle the collapse
      $(this).text(function(i,old){
        sign=old;
        return old=='+' ?  '-' : '+';
      });

      //this to display the first 5 rewiews
      if(!isNaN(getDatatarget.substr(getDatatarget.length - 1))){ //check if the id ends with a number
       var newId = "preview" + getDatatarget.substr(getDatatarget.length - 1); //assign with the preview
       if (sign=='+'){
          document.getElementById(newId).style.display ='none';
        }
        else{
          document.getElementById(newId).style.display ='block';
        }
      }
    });

    $('.review_link').click(function(){
      $(this).css('display','none');
    });

    $(function(){ //handle with jQuery raty plugin
      $.fn.raty.defaults.path = '../components/raty-master/lib/images';
      //include Jquery raty rating stars plugin
      $('#form_rating').raty({
        halfShow:false,
        hints: ['1','2','3','4','5'],
        targetKeep:true,
        click: function(score, evt) {
          document.getElementById('form-rating-score').value = score;
        }
      });

      $('.scorecallback').raty({
        readOnly  : true,
        score: function() {
          return $(this).attr('data-score');
        }
      });
    });
    </script>

  </body>
  </html>
