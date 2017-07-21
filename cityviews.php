<!-- include PHP header and other prerequisite files-->
<?php
  $pid = 'cityviews';
  $page_title = 'City Views';
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
            <img src="../img/cityviews.png" alt="city views">
          </div>
          <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-1 col-xs-10 col-xs-offset-1 product_info">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                <h3>City Views</h3>
                <div class="linebreak12"></div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                <img src="../img/stars_rating.png" alt="5 stars rating"> <a href="#review" class="rating_wrd"><!--store count of reviews here--></a>
              </div>
              <div class="visible-xs col-xs-12 undereyephoto">
                <img src="../img/cityviews.png" alt="city views">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-12">
                <h6>$67.00</h6>
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
                  <p>City Views is a rapid repair eye cream that absorbs at a fast pace to visibly repair the signs of under eye aging. Rich but lightweight, City Views hydrates, nourishes and protects the sensitive eye area and restores the skin’s youthful radiance. With exclusive anti-aging technology, City Views is clinically proven to give you younger looking eyes. City Views is suitable for all skin types.</p>
                  <div class="linebreak2"></div>
                  <b>FEATURES</b>
                  <div class="linebreak2"></div>
                  <ul class="features">
                    <li>Specifically designed to target the key problems of the eye area</li>
                    <li>Its powerful nourishing formula comes in a rich cream that helps to combat the visible signs of aging</li>
                    <li>Use it during the day to protect your eyes from environmental damage, and at night to hydrate, replenish and refresh</li>
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
              Water, Aloe Barbadensis Leaf Extract, Hydrogenated Vegetable Oil (Plant Derived), Isononyl Isononanoate, Glycerin, Butylene Glycol, Darutoside (Holy Herb), Albizia Julibrissin (Persian Silk Tree) Bark Extract, Sodium Acrylates Copolymer, Lecithin (Phospholipids), Chrysin, N-Hydroxysuccinimide, Palmitoyl Oligopeptide, Steareth-20, Palmitoyl Oligopeptide, Steareth-20, Palmitoyl Tetrapeptide-7, Polymethylsilsesquioxane, Asparagopsis Armata (Red Algae) Extract, Ascophyllum Nodostrum (Knotted Wrack) Extract, Sorbitol, Diamond Powder, Avena Sativa (Oat) Extract, Allantoin, Aloe Vera, Butyrospermum Parkii (Sea) Butter, Chamomilla Recutita (Matricaria) Flower Extract, Ethylhexylglyverin, Everlasting (Helichrysum Arenarium) Extract, Fragrance (Parfum), Phenosyethanol, Symphytum Officinale Extract, Tetrasodium Glutamate Diacetate, Tocopherol (Vitamin E), Urtica Dioica (Nettle) Extract, Acetyl Hexapeptide-3
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
              <div class="col-lg-9 col-md-6 col-sm-6 col-xs-10 productnotes_words">Crows feet, lines, wrinkles, puffy eyes &amp; sagging skin</div>
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
              <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words">Morning &amp; night: apply it all around your orbital bone and on the under-eye area until blended, being careful not to rub or tug on skin</div>
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
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What IS City Views?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq1" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq1" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                City Views is an anti-aging eye cream suitable for all ages and skin types. This advanced blend of antioxidants, peptides and multivitamins helps restore the skin's youthful radiance by combating the visible signs of aging. It is a powerful nourishing formula that boosts collagen and elastin production while rehydrating the sensitive eye area to heal, strengthen and protect the skin.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What does City Views do?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq2" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq2" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                <div>City Views addresses the five major signs of aging eyes, wrinkles, sagging, dryness, puffiness and discoloration. It works naturally with your body to encourage the renewal and repair of damaged cells, by providing hydration, nourishment and protection. With continued use City Views not only begins fighting against past problems, but begins protecting your skin against future damage as well!</div>
                <div class="linebreak2"></div>
                <div>Wrinkle depth was shown to have decreased in clinical studys.</div>
                <div class="linebreak2"></div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <b>Before</b>
                    <div class="linebreak2"></div>
                    <img src="img/cityviewsbefore1.jpg" alt="before cityviews">
                  </div>
                  <div class="visible-xs">&nbsp;</div>
                  <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
                    <b>After</b>
                  <div class="linebreak2"></div>
                  <img src="img/cityviewsafter1.jpg" alt="after cityviews">
                  </div>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Why do I need an eye cream? Can't I just use my moisturizer?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq3" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq3" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                <p>The skin around your eyes is 4 to 10x thinner than the skin on the rest of your face. That means the area should be treated with extra care... And some face creams may be too thick, heavy, or harsh to really benefit this sensitive skin.</p>
                The skin around your eyes also has very few oil glands, which means it is not receiving the hydration that it needs to stay healthy. City Views moisturizes, replenishes, and provides protection from external damage, while being gentle enough to benefit sensitive eye-area skin without irritation.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How do I use City Views?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq4" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq4" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Apply City Views on a clean face both morning and night before going to bed. After cleaning your face, dab the excess moisture away with a towel. Pat small dots of the cream all around your orbital bone and on the under-eye area, being careful not to rub or tug on skin.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Is City Views suitable for all skin types?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq5" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq5" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              Yes! All skin types can benefit from City View's advanced blend of ingredients to achieve bright, youthful eyes.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What is the recommended age group for City Views?</b></div>
              <!--collapse content goe</b>s here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq6" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq6" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                <p>Absolutely anyone can use City Views! It is always important to moisturize, and City Views has the dual benefit of:</p>
                  <ul>
                    <li>Reducing the visible signs of aging</li>
                    <li>Actively working to prevent any future skin damage as well!</li>
                  </ul>
                This means that women with more mature skin will begin to notice a visible difference in the appearance of fine lines and wrinkles, and younger women can benefit from strengthening and protecting their skin from future signs of aging.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>I have sensitive skin; can I still use City Views?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq7" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq7" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Yes. City Views is formulated only with ingredients that do not irritate skin. If you have exceptionally sensitive skin and tend to react to even the gentlest products, we recommend doing a patch test on the inside of your elbow 24 hours before proceeding with City Views as your everyday eye cream.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What does it feel like to use City Views?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq8" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq8" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                City Views is a rich formula with a lightweight feel. Its creamy consistency glides over the skin effortlessly without leaving a residue. Immediately after application your skin will seem healthier and feel silky smooth. The hydration instantly begins improving your skin tone and clarity, and leaves you feeling relaxed and refreshed.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>I have tiny white bumps underneath my eyes. Will City Views help with that?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq9" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq9" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              Yes. Those white bumps are called milia, and they are harmless cysts caused by dry, dead cells that get trapped under your skin. The best way to remove them (and prevent them from occurring again in the future) is by using an eye cream to return moisture to the area and prevent the buildup of dry cells.
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
