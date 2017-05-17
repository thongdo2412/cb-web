<?php
  $pid = 'undereye';
  $page_title ='Under Eye Recovery';
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
	<title><?php echo $page_title;?></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i|Raleway:300,300i">
  <link rel="stylesheet" href="../components/raty-master/lib/jquery.raty.css">
<style type="text/css">
  a {text-decoration: none;}
  *{margin:0 auto;}
  header, footer{background: rgb(9,30,55);height: 94px;background-size: cover;}
  footer{color: rgb(255,255,255);}
  footer p{font-size: 11px; font-weight: 300; text-align: center; line-height: 1;word-wrap:break-word;}
  footer a,a:hover{text-decoration: none; color: #ffffff;}
  .container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
  .container{width: 960px;margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
  .centered_flex{display: flex;justify-content: center;align-items: center;}
  .centered_nav{display: flex;justify-content: center;align-items: center;}
  nav2 {display: inline-block;padding: 0 15px;position: relative;}
  nav2:hover:before,nav2:hover:after {background: #000;content: "";display: block;height: 1px;position: absolute;top: 50%;width: 12px;}
  nav2:hover:before {right: 95%;}
  nav2:hover:after {left: 95%;}
  .navbar-default .navbar-nav > li > a {color: #333; padding-left: 32px;}
  .line-on-sides{overflow: hidden;}
  b{font-weight: 400;}
  .sup1{vertical-align: super;}
  .button{width: 171px;height: 32px;font-size: 14px; border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}

  .button_bg{width: 240px;height: 32px;font-size: 14px; border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
  .submitbtn{width: 110px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;border-radius: 0;}
  .button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
  .button_blue a {color: #ffffff;}
  .button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
  .nav{font-size: 14px;font-family: "Montserrat", sans-serif;}
  .jumbotron p{font-size: 16px;font-weight: 300;}
  .jumbotron_wht{background: rgb(255,255,255);}
  .jumbotron_w_bg{background: rgb(248,249,249);background-size: cover;border: 1px solid rgb(235, 235, 235);margin: 0 auto;}
  .creamphoto{margin-right: 96px;margin-top: 150px;}
  .product_info{text-align: left;}
  .product_notes{text-align: left; margin-top: 10px;}
  .productnotes_head{width: 148px;margin-top: 16px;}
  .productnotes_words{text-align: left;font-family: "Playfair Display",serif;font-style: italic;font-size: 20px;border-bottom: solid 0.5px rgb(235,235,235);margin-top: 10px;}
  .product_img{margin-top: 10px;}
  .cream_box{border: 1px solid rgb(235, 235, 235);background-color: rgb(255, 255, 255);width: 276px;height: 276px;}
  .faq_heading{text-align: left;width: 160px; margin-top: 22px;}
  .faq_words{text-align: left;margin-top: 18px;}
  .review_link{font-size: 14px; text-decoration: underline;}
  .testi_usr{width: 170px;text-align: left;margin-top: 16px;}
  .plusminus{cursor: pointer; cursor: hand;}
  .review_link{cursor: pointer; cursor: hand;}
  .linebreak1{margin-top: 5px;}
  .linebreak2{margin-top: 18px;}
  .linebreak12{margin-top: 12px;}
  .linebreak3{margin-top: 30px;}
  .linebreak4{margin-top: 40px;}
  .ratingwrapper{margin-top: 16px;}
  .yousave{margin-left: -52px;}
  .guarantee_wrd{margin-left: 70px;}
  .col-xs-8 {width: 68.66666667%;}
  .quantityword{margin-top: 4px;}
  .xsquantity{font-family: "Playfair Display", serif;font-size: 20.45px;}
  select.xsquantity{width: 75px;
    height: 32px;
    border: 1px solid rgb(235, 235, 235);
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url("../img/quantityarrw_sm.png") no-repeat 42px 13px #ffffff;
    text-align-last:left;padding-left: 22px;
  }
  /*For FF */
  @-moz-document url-prefix() {
    .quantityword{margin-top: 8px;}
    .quantity{border: 0; border-radius: 0;-webkit-appearance: none;-moz-appearance: none;
      background: url("../img/quantityarrw.png") no-repeat 28px 8px #ffffff;}
  }

  /*helpful button css*/
  .button_review{width: 80px;height: 32px;color: rgb(255, 255, 255);background-color: #49A3EA;border-width: 1px
    ;border-color: rgb(6, 16, 42);border-style: solid;text-align: center; display: flex;justify-content: center;cursor: pointer;}
  .helpful_wrd{float: left; width: 200px;}
  .helpful_item{float: left;width: 80px; margin-left: 20px;}
  .inbutton_text{float: left;margin: 4px;}

  /* css for out of stock handling */
  .outofstocktxt{color:red;height: 32px;}
  .outofstockbtn{background-color: rgb(160,160,160);font-size: 32px;}

  .rating_wrd{font-size: 13px;color: rgb(235, 204, 43);}
  a.rating_wrd:hover{color: rgb(235, 204, 43);}
  .features li,.details li{margin-top: 10px;margin-left: -1.4em;}
  div.form-group input.form-control{border-radius: 0;width: 290px;height: 32px;}
  div.form-group input{margin-left: 18px;}
  div.form-group label{font-weight: 300;}
  div.form-group textarea.form-control{border-radius: 0;margin-left: 18px;width: 774px;height: 104px;}
  #reviewpanel{margin: 0 auto;}
  #review_form{text-align: left;margin-left: 32px;}
  .firstname{margin-left: 14px;}
  .email{margin-left: 114px;}
  .subjectline{margin-top: 16px;}
  .yourrating{margin-left: 54px;}
  .rating_label{float: left;margin-top: 2px;}
  .recommenddiv{margin-top: 16px; margin-left: 134px;}
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
  @media screen and (min-width: 1199px){.socialicons{margin-left: 10px;}}
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
    .faq_heading{margin-top: 0;}
    .firstname,.email,.subjectline,.yourrating{margin: 0;}
    .msgtextbox,.recommenddiv{margin-left: 0;}
    div.form-group input{margin-left: 0;}
    div.form-group textarea.form-control{margin-left: 0; width: 290px;}
    .quantity{margin-left: 20px;}
    .btn_wrapper{margin-right: 10px;}
    #review_form{width: 300px;margin-left: 35%;}

  }

    @media screen and (max-width:935px){
      .xsquantity{margin-left: 10px;}
    }

  @media screen and (max-width:767px){
    footer .container{margin-left: 30px;margin-right: 30px;}
    .navbar-toggle{margin-right: 40px;}
    .undereyephoto{text-align: center;margin-top: 30px;margin-bottom: 30px;}
    .guarantee_wrd{margin-left: 100px;}
    .product_notes{padding-left: 28px;padding-right: 28px;}
    #review_form{width: 300px;margin:auto;}
    .xsquantity{margin-left: 0px;}
    .helpful_wrd{width: 700px;}
    .helpful_item{margin-top: 10px;}
  }
  @media screen and (max-width:549px){
    .col-xxs-12{width: 100%;}
    .hidden-xxs {display: none !important;}
    .guarantee_wrd{margin: 0 auto;}
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
  <?php include("header.php") ?>
  <!--main content-->

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
              <div class="linebreak12"></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
              <img src="../img/stars_rating.png" alt="5 stars rating"> <a href="#testi" class="rating_wrd"><!--store count of reviews here--></a>
            </div>
            <div class="hidden-lg hidden-md hidden-sm visible-xs col-xs-12 undereyephoto">
              <img src="../img/undereye_str_sm.png" alt="undereye small">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
              <h6>$97.00</h6>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 hidden-xs">
              <input type="hidden" id="outstockcheck" value="n"> <!--place holder for out of stock-->
              <div class="instock">
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 quantityword">QUANTITY</div>
                  <div class="col-lg-1 col-md-1 col-sm-1"><select class="xsquantity" id="qty"></select></div>
                </div>
                <div class="linebreak2"></div>
                <div class="button button_blue pull-left"><a name="addToCart" href="#">ADD TO CART</a></div>
                <div class="clearfix"></div>
                <div class="linebreak2"></div>
              </div>
              <div class="outstock">
                <div class="outofstocktxt">Currently Out of Stock</div>
                <div class="linebreak2"></div>
                <div class="button button_blue pull-left outofstockbtn">&odash;</div>
                <div class="clearfix"></div>
                <div class="linebreak2"></div>
              </div>
            </div>
            <div class="visible-xs col-xs-12">
              <img src="../img/stars_rating.png" alt="5 stars rating"> <a href="#testi" class="rating_wrd"><!--store count of reviews here--></a>
              <div class="linebreak2"></div>
              <div class="row instock">
                <div class="col-xs-3">
                  <select class="xsquantity" id="xsqty"></select>
                </div>
                <div class="col-xs-4">
                  <div class="button_bg button_blue"><a name="addToCart" href="#">ADD TO CART</a></div>
                </div>
              </div>
              <div class="row outstock">
                <div class="col-xs-6">
                  <div class="outofstocktxt">Currently Out of Stock</div>
                </div>
                <div class="col-xs-4">
                  <div class="button button_blue pull-left outofstockbtn">&odash;</div>
                </div>
              </div>
            <div class="linebreak2"></div>
            <div class="clearfix"></div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>DESCRIPTION</b></div>
                <!--collapse content goes here -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                  <div data-toggle="collapse" data-target="#description" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
                </div>
              </div>
              <div id="description" class="collapse in" class="collapse in" name="collapse_content">
                <div class="linebreak2"></div>
                <p>Under Eye Recovery is a unique formula that uses both advanced color correctors and instant light-scattering optics to give you the bright, youthful eyes you've always wanted. </p>
                <div class="linebreak2"></div>
                <b>FEATURES</b>
                <div class="linebreak2"></div>
                <ul class="features">
                  <li>Reduces the appearance of discoloration under the eyes</li>
                  <li>Diminishes the appearance of skin-aging shadows</li>
                  <li>Helps correct puffiness and wrinkles around the eye area</li>
                  <li>Deeply hydrates and smoothes skin</li>
                  <li>Provides rapid results that build over time</li>
                </ul>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>DETAILS</b></div>
                <!--collapse content goes here -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                  <div data-toggle="collapse" data-target="#details_drop" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
                </div>
              </div>
              <div id="details_drop" class="collapse in" name="collapse_content">
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
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading">INGREDIENTS</div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#ingredients" class="plusminus">+</div>
              </div>
            </div>
            <div id="ingredients" class="collapse">
            <div class="linebreak2"></div>
            Water, Glycerin, Caprylic/Capric Triglyceride, Nylon-12 Fluorescent Brightener 230 Salt, Isopentyldiol, Polymethylsilsesquioxane, Pentylene Glycol, Caffeine, Cetearyl Alcohol, Glyceryl Stearate, Potassium Olivoyl Hydrolized Oat Protein, Cyclopentasiloxane, Dimethicone, Jojoba Esters, Olea Europaea (Olive) Fruit Unsaponifiables, Cocos Nucifera (Coconut) Oil, Albizia Julibrissin Bark Extract, Coffea Arabica (Coffee) Seed Extract, Passiflora Incarnata Flower Extract, Phenoxyethanol, Glyceryl Oleate, Strelitzia Nicolai Seed Aril Extract, Polyvinylalcohol Crosspolymer, Sodium Hyaluronate, Caprylyl Glycol, Lecithin, Chlorphenesin, Algae Extract, Xanthan Gum, Cyamopsis Tetragonoloba (Guar) Gum, Steareth-20, Tetrasodium Glutamate Diacetate, Hexylene Glycol, Palmitoyl Oligopeptide, Darutoside, Caprooyl Tetrapeptide-3, Dextran, Palmitoyl Tetrapeptide-7, Hydroxyacetophenone, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Fragrance.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xxs guarantee_logo">
                <img src="../img/60daysicon2.png" alt="60 days icon #2">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8.5 col-xxs-12 guarantee_wrd">
                <p>You have 60 days to try our products and see the results for yourself. If you are not 100% satisfied, simply contact us and we will gladly refund your money. No questions asked.</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
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
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-2 col-xs-12 col-xs-offset-1 product_notes">
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
        <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 faq_words">
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What is Under Eye Recovery?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq1" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq1" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Under Eye Recovery’s advanced formula takes skincare technology to the next level. A uniquely sophisticated combination of powerful ingredients works to dramatically reduce the appearance of dark circles under your eyes, both immediately and over time.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How does Under Eye Recovery work?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq2" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq2" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Under Eye Recovery takes a two-pronged approach to combating dark circles. In addition to reducing the underlying causes of dark circles that occur within the skin, our formula uses an advanced, state-of-the-art ingredient that actually refracts and reflects light, helping to eliminate the small shadows caused by skin imperfections that are a major contributor to dark circles.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What are the main ingredients in Under Eye Recovery?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq3" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq3" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              <p><i>LipoLight® OAP/PVA</i> uses microscopic, fluorescent particles to emit and diffuse light, blurring imperfections instantly for a dramatically younger appearance.</p>
              <p><i>Haloxyl</i>: Uses peptides and flavonoids to lighten dark circles, giving the face a younger, more rested, "happier" appearance.</p>
              <p><i>Chronoline</i>: An amino acid sequence derived from natural growth factors that helps firm and tighten skin by increasing collagen production and strengthening skin's structure.</p>
              <p><i>Hyalusphere</i>: Uses a direct delivery system to push plumping, hydrating hyaluronic acid deep into your skin, helping to reduce dryness, hollowness, and shadows.</p>
              <p><i>SYN-AKE</i>: Relaxes wrinkles on contact, with dramatic reduction in as little as two hours.</p>
              <p><i>BeauifEYE</i>: A sequence of peptides that work together to tighten the skin in your eyelids.</p>
              <i>RejuvenOX</i>: Infuses aging, suffocated tissues with revitalizing oxygen to improve blood flow, reduce fine lines and smooth out your skin's texture.
                Silk Tree Extract: Reduces puffiness at its source for a refreshed, vibrant look.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What makes Under Eye Recovery different from similar products?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq4" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq4" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              <p>Most eye treatments focus only on treating dark circles by fixing the problems within the skin, such as rebuilding collagen, removing pigmentation, and evening out puffiness and hollowness. That’s important, and our formula deals with those issues too.</p>
              <p></p>
              But what sets our Under Eye Recovery apart is that it also addresses the issue of shadows. By reflecting light away from your under eye area, our formula gives your eyes a brightening effect that simply isn’t achievable by only going after the problems occurring beneath the skin.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How do I use Under Eye Recovery?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq5" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq5" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              <p>After cleansing your skin, gently pat Under Eye Recovery onto the skin under your eyes, up to two times a daily.</p>
              <p></p>
              Be sure to include a bedtime application of Under Eye Recovery in your skincare regimen, as this allows active ingredients to work alongside the skin’s natural nighttime regenerating processes.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Other eye creams feel heavy and oily on my skin. Will Under Eye Recovery feel like that?</b></div>
            <!--collapse content goe</b>s here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq6" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq6" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              No. Under Eye Recovery is lighter-weight than similar products, so it does not weigh down the delicate skin around the eyes. The serum formulation feels refreshing and moisturizing, and allows skin to be lifted, instead of "dragged down" like a heavy cream.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Is Under Eye Recovery suitable for all skin types?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq7" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq7" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Absolutely. Under Eye Recovery can provide excellent anti-aging results to dry, oily, combination, normal, and sensitive skin alike...as well as all skin tones and colors. (As always, if you have a history of adverse reactions to skincare products, or if you have any other concerns, it's always best to perform a patch test on the inside of your arm 24 hours before beginning regular use of any new product, to ensure the formula will be appropriate for your skin.)
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What is the recommended age group for Under Eye Recovery?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq8" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq8" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Under Eye Recovery is suitable for all age groups. For more mature skin, its innovative formula can help reduce the existing signs of visible aging - while for younger skin, it can help prevent the signs of aging from appearing prematurely.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Will it work for men?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq9" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq9" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
            Absolutely. We have many happy male users, as it can give a man spectacular look-younger results around their eyes. In fact, this formula is far superior to other eye treatments for men, as men have thicker skin and require an easily-absorbed formula like Under Eye Recovery in order to really see results.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Will it irritate my sensitive skin?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq10" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq10" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
            No. Under Eye Recovery’s formula does not contain harsh ingredients that often lead to adverse effects. This complex contains safe and effective ingredients that should be safe for even the most sensitive skin. Of course, if you do have exceptionally sensitive skin, a patch test is always advisable with ANY new product, 24 hours before you begin regular treatment.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What does it feel like to use Under Eye Recovery?</b></div>
            <!--collapse content goes here -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq11" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <div id="faq11" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
            Shortly after applying Under Eye Recovery, you may experience a subtle "tightening" sensation in your skin, signaling that the peptides are going to work on your protein structure on a subdermal level. The formula is absorbed into the skin almost immediately, leaving your skin soft, stimulated, and firm - never sticky or greasy.
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

  <input type="hidden" id="page_title" value="<?php echo $pid;?>"> <!--place holder for the page title to copy to JS variable-->
  <!--include footer and javascript-->
  <?php include ("footer.php"); ?>

    <script src="../components/raty-master/lib/jquery.raty.js"></script>
    <script src="scripts/citybeauty.js"></script>
  </body>
  </html>
