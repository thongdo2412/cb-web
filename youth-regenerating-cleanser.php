<!-- include PHP header and other prerequisite files-->
<?php
  $pid = 'youthcleanser';
  $page_title = 'Youth Regenerating Cleanser';
  include("scripts/conn_init.php");
  include("scripts/insert.php");
 ?>

<!--include head and other css templates-->
<?php  include("head.php"); ?>

<title><?php echo $page_title;?></title>

<link rel="stylesheet" href="../components/raty-master/lib/jquery.raty.css">
<style type="text/css">
  footer p{font-size: 11px; word-wrap:break-word;}
  .container{width: 960px;}
  .sup1{vertical-align: super;}
  .product_pic img {width: 112px;margin-left: 50px;}
  .product_info{text-align: left;}
  .product_notes{text-align: left;margin-top: 4px;}
  .productnotes_head{width: 148px;margin-top: 16px;}
  .productnotes_words{text-align: left;font-family: "Playfair Display",serif;font-style: italic;font-size: 20px;border-bottom: solid 0.5px rgb(235,235,235);margin-top: 10px;}
  .product_img{margin-top: 10px;}
  .creamphoto{margin-top: 150px;margin-left: 20px;}
  .cream_box{border: 1px solid rgb(235, 235, 235);background-color: rgb(255, 255, 255);width: 276px;height: 276px;}
  .faq_heading{text-align: left;width: 160px; margin-top: 6px;}
  .faq_words{text-align: left;}
  .review_link{font-size: 14px; text-decoration: underline;}
  .testi_usr{width: 170px;text-align: left;margin-top: 16px;}
  .plusminus{cursor: pointer; cursor: hand;}
  .review_link{cursor: pointer; cursor: hand;}
  .ratingwrapper{margin-top: 16px;}
  .yousave{margin-left: -52px;}
  .guarantee_wrd{margin-left: 70px;}
  .col-xs-8 {width: 68.66666667%;}

  /* css for out of stock handling */
  .outofstocktxt{color:red;height: 32px;}
  .outofstockbtn{background-color: rgb(160,160,160);font-size: 32px;}

  /* css for quantity select/option box */
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
  /*For FF display*/
  @-moz-document url-prefix() {
    .quantityword{margin-top: 8px;}
    .quantity{border: 0; border-radius: 0;-webkit-appearance: none;-moz-appearance: none;
      background: url("../img/quantityarrw.png") no-repeat 28px 8px #ffffff;}
  }
  /* css for review setion */
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
  .email{margin-left: 76px;}
  .subjectline{margin-top: 16px;}
  .yourrating{margin-left: 16px;}
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
  @media screen and (max-width:991px){
    .product_notes{margin-top: 20px;}
    ##review hr{width: 86%;}
    .firstname,.email,.subjectline,.yourrating{margin: 0 auto;}
    .faq_heading{margin-top: 0;}
    .msgtextbox,.recommenddiv{margin-left: 0;}
    div.form-group input{margin-left: 0;}
    div.form-group textarea.form-control{margin-left: 0; width: 290px;}
    .quantity{margin-left: 20px;}
    .btn_wrapper{margin-right: 10px;}
    #review_form{width: 300px;margin-left: 35%;}
    .xsquantity{margin-left: 18px;}
  }
  @media screen and (max-width:906px){
    .product_pic{margin-right: 30px;}
  }

  @media screen and (max-width:849px){
    .xsquantity{margin-left: 22px;}
  }

  @media screen and (max-width:767px){
    .navbar-toggle{margin-right: 40px;}
    .undereyephoto{text-align: center;margin-top: 30px;margin-bottom: 30px;}
    .guarantee_wrd{margin-left: 100px;}
    .product_notes{padding-left: 28px;padding-right: 28px;}
    #review_form{width: 300px;margin:auto;}
    .product-gallery img {width: 180%; height: 180%;}
    .xsquantity{margin-left: 0;}
    .undereyephoto img {width: 112px;}
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
    #review_form{padding-left: 28px; padding-right: 28px;}
    div.form-group input.form-control{width: 244px;}
    div.form-group textarea.form-control{width: 244px;}
    .btn_wrapper{margin: 0;}
    .button_bg{width: 150px;margin-left: 20px;}
  }

</style>
</head>
<body>
  <!-- include header and navigation content -->
  <?php include("header.php") ?>
  <!--main content-->

  <div class="jumbotron jumbotron_wht">
    <div class="section1">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 hidden-xs product_pic">
            <img src="../img/youthregeneratingcleanser.png" alt="youth cleanser">
          </div>
          <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-1 col-xs-10 col-xs-offset-1 product_info">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                <h3>Youth Regenerating Cleanser</h3>
                <div class="linebreak12"></div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                <img src="../img/stars_rating.png" alt="5 stars rating"> <a href="#review" class="rating_wrd"><!--store count of reviews here--></a>
              </div>
              <div class="visible-xs col-xs-12 undereyephoto">
                <img src="../img/youthregeneratingcleanser.png" alt="youth cleanser">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-12">
                <h6>$38.00</h6>
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
                  <a name="addToCart" href="#"><div class="button button_blue pull-left">ADD TO CART</div></a>
                  <div class="clearfix"></div>
                  <div class="linebreak2"></div>
                </div>
                <!--
                <div class="outstock">
                  <div class="outofstocktxt">Currently Out of Stock</div>
                  <div class="linebreak2"></div>
                  <div class="button button_blue pull-left outofstockbtn">&odash;</div>
                  <div class="clearfix"></div>
                  <div class="linebreak2"></div>
                </div> -->
              </div>
              <div class="visible-xs col-xs-12">
                <img src="../img/stars_rating.png" alt="5 stars rating"> <a href="#review" class="rating_wrd"><!--store count of reviews here--></a>
                <div class="linebreak2"></div>
                <div class="row instock">
                  <div class="col-xs-3">
                    <select class="xsquantity" id="xsqty"></select>
                  </div>
                  <div class="col-xs-4">
                    <a name="addToCart" href="#"><div class="button_bg button_blue">ADD TO CART</div></a>
                  </div>
                </div>
                <!--
                <div class="row outstock">
                  <div class="col-xs-6">
                    <div class="outofstocktxt">Currently Out of Stock</div>
                  </div>
                  <div class="col-xs-4">
                    <div class="button button_blue pull-left outofstockbtn">&odash;</div>
                  </div>
                </div> -->
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
                  <p>Youth Regenerating Cleanser is a gentle, fast-acting exfoliating cleanser formulated with natural, safe ingredients to provide your skin with an intensive deep clean. Our clinically-proven ingredients work together to remove dead skin cells, hydrate skin, and even tone for softer, healthier, more radiant skin.</p>
                  <div class="linebreak2"></div>
                  <b>FEATURES</b>
                  <div class="linebreak2"></div>
                  <ul class="features">
                    <li><b>Bromelain</b> promotes enhanced hydration and softer skin by gently brushing away dead skin cells for fresh, renewed skin</li>
                    <li><b>Caffeine Cosmospheres</b> help give skin a tighter look and reduce puffiness, while protecting the skin from free radical damage</li>
                    <li><b>Hyaluronic Acid</b>, an anti-aging superstar ingredient, helps the skin retain moisture, promotes hydration, and prevents the skin from drying out</li>
                    <li><b>Dragon’s Blood</b> reduces redness and swelling while repairing damaged collagen via high levels of proanthocyanidins</li>
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
                    <li>1 FL OZ / 30 ML</li>
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
              Water, Sodium Methyl Oleoyl Taurate, Cocamidopropyl Betaine, Sodium Cocoyl Isethionate, Sodium Lauroyl Methyl Isethionate, Acrylates/Palmeth-25 Acrylate Copolymer, Caffeine, Polyquaternium-7, Iron Oxides, Microcrystalline Cellulose, Mannitol, Aminomethyl Propanol, Bromelian, Sodium Hyaluronate, Citric Acid, Croton Lechleri Resin Extract, Fragrance, Methylchloroisothiazolinone, Methylisothiazolinone, Tetrasodium Glutamate Diacetate, Red 33/CI 17200, Red 4/CI 14700
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
          <div class="col-lg-offset-0 col-xs-offset-1 product_notes">
            <h4>Product Notes</h4>
            <div class="linebreak2"></div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">GOOD FOR</div>
              <div class="col-lg-9 col-md-6 col-sm-6 col-xs-10 productnotes_words">Lines, wrinkles, puffy &amp; sagging skin</div>
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
              <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words">For daily cleansing, gently massage one to two pumps of Youth Regenerating Cleanser onto damp skin, then rinse with warm water. Pat skin dry and follow-up with moisturizer.</div>
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
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What is Youth Regenerating Cleanser?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq1" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq1" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Youth Regenerating Cleanser is a non-abrasive, natural exfoliant, intended to help even tone, rejuvenate skin, minimize the appearance of blemishes, and reduce the breakdown of collagen to diminish the appearance of signs of aging such as fine lines and wrinkles.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What makes Youth Regenerating Cleanser different than other exfoliating cleansers?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq2" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq2" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              Most exfoliating cleansers use abrasive scrubs to achieve a deep clean. Washing your sensitive skin with these harsh scrubs can do more harm than good by irritating and stressing your skin. Youth Regenerating Cleanser is gentle, but it still achieves an incredible exfoliating effect. Our Amazonian Superfruit Complex is able to penetrate the skin deeply without irritation to help get rid of dead cells, heal blemishes, and rejuvenate skin.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How do I use Youth Regenerating Cleanser?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq3" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq3" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                For best results, remove your makeup and dampen your face. Use one to two pumps and cleanse your face in gentle, circular motions. Rinse your skin with warm water and apply your desired daytime or nighttime moisturizer. (At night, we recommend using <a href="http://cityBeauty.com/p/skin/intensive-night-repair.php">Intensive Night Repair Serum</a>  after cleansing to further delay signs of aging and hydrate skin).
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How many times a day should I use Youth Regenerating Cleanser for best results? Is this just a daytime cleanser?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq4" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq4" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                For best results, we recommend cleansing your face and neck with Youth Regenerating Cleanser twice a day, both morning and night, but it is completely safe to use Youth Regenerating Cleanser as often as desired.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>If I have oily, sensitive, or dry skin… can I use Youth Regenerating Cleanser?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq5" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq5" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              Yes! Youth Regenerating Cleanser’s was specially formulated with all skin types in mind. Whether you’re struggling with blemishes, fine lines and wrinkles, dry skin, oily skin, or sensitive skin, Youth Regenerating Cleanser can help revive and moisturize your complexion.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What is the recommended age group for Youth Regenerating Cleanser?</b></div>
              <!--collapse content goe</b>s here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq6" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq6" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Youth Regenerating Cleanser is safe and effective for all ages. It can help repair your skin by cleansing away dead cells and healing blemishes, and it can also help prevent future blemishes from occurring. It is suitable (and recommended) for all ages.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Why does Youth Regenerating Cleanser work so well? What’s it made of?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq7" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq7" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                <ul>
                  <li><b>Pineapple stem extract (Bromelain)</b> helps promote enhanced hydration and softer skin by gently brushing away dead skin cells for fresh, renewed skin</li>
                  <li><b>Caffeine Cosmospheres</b> tighten the feel of skin and reduce the appearance of puffiness, while protecting skin from free radical damage (UV exposure, pollution, etc.)</li>
                  <li><b>Hyaluronic Acid</b> is an anti-aging ingredient that helps the skin retain moisture, promotes hydration, and prevents skin from drying out</li>
                  <li><b>Amazonian Superfruit Extract</b> has restorative properties. It helps to reduce redness and swelling while repairing damaged collagen</li>
                </ul>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Is Youth Generating Cleanser tested on animals?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq8" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq8" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Here at City Beauty we are proud to say that we never test on animals! Our love and respect for animals is parallel to our love for creating safe, natural, clinically-proven cosmetics that work for YOU!
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How do I order Youth Regenerating Cleanser?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq9" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq9" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              Youth Regenerating Cleanser is available exclusively online. Your purchase is 100% guaranteed to help you achieve a more even skin tone and a brighten, more rejuvenated complexion, or your money back.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Does City Beauty test on animals?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq10" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq10" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              Never. We at City Beauty are committed to remaining cruelty-free and will never test our products on animals.
            </div>
            <hr>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="jumbotron jumbotron_wht" id="review">
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

    <!--include footer and javascript-->
    <?php include ("footer.php"); ?>

      <script src="../components/raty-master/lib/jquery.raty.js"></script>
      <script src="scripts/citybeauty.js"></script>
    </body>
    </html>
