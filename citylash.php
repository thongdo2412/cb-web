<!-- include PHP header and other prerequisite files-->
<?php
  $pid = 'citylash';
  $page_title = 'City Lash';
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
  .lipsphoto{margin-left: 30px;margin-top: 150px;}
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
    #testi hr{width: 86%;}
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
          <div class="col-lg-1 col-lg-offset-2 col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-1 hidden-xs product_pic">
            <img src="../img/citylash.png" alt="city lash">
          </div>
          <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-1 col-xs-10 col-xs-offset-1 product_info">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                <h3>City Lash<span class="sup1">&reg;</span></h3>
                <div class="linebreak12"></div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                <img src="../img/stars_rating.png" alt="5 stars rating"> <a href="#testi" class="rating_wrd"><!--store count of reviews here--></a>
              </div>
              <div class="visible-xs col-xs-12 undereyephoto">
                <img src="../img/citylash_sm.png" alt="city views">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-12">
                <h6>$49.00</h6>
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
                    <a name="addToCart" href="#"><div class="button_bg button_blue">ADD TO CART</div></a>
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
                  <p>City Lash&reg; is a powerful growth enhancing serum designed to deliver dramatically full and lush lashes. The effective formula is clinically proven to provide a longer, fuller-looking lash line. City Lash&reg; improves the appearance of the natural lash length, thickness, density and fullness. The lash-stimulating peptide complex supports the lash's natural renewal cycle making the lashes thicker, bolder, and healthier. Enriched with active ingredients, City Lash&reg; will leave your eyes looking younger, revealing visibly longer, fuller and more beautiful looking lashes.</p>
                  <div class="linebreak2"></div>
                  <b>FEATURES</b>
                  <div class="linebreak2"></div>
                  <ul class="features">
                    <li>City Lash's unique exclusive formula stimulates eyelash growth and extends the natural life cycle of the lash. This process allows for older lashes to remain in longer, and new lashes to regrow at the same time, resulting in a much fuller lash bed and dramatic visible results.</li>
                    <li>Unlike other lash-enhancing products, City Lash is safe, even for the most sensitive skin and eyes.</li>
                    <li>City Lash is natural and fragrance free. Like all CITY Cosmetics, City Lash is not tested on animals!</li>
                    <li>City Lash does not contain paraben or prostaglandin like other products. Prostaglandin may cause color changes in your skin, as well as irritation and redness.</li>
                    <li>Clinical testing has shown that City Lash can increase overall eyelash thickness and length.</li>
                    <li>Can be safely used on eyebrows to increase thickness.</li>
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
                    <li>0.169 FL OZ / 5 ML</li>
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
              Water, Disodium Phosphate, Myristoyl Pentapeptide-17, Glycosaminoglycans, Milk Protein, Panthenyl Ethyl Ether, Camellia Sinensis Leaf Extract, Hyaluraonic Acid, Linoleic Acid, Linolenic Acid, Hydrolyzed Soy Protein, Simmondsia Chinensis (Jojoba) Seed Oil, Sorbitol, Tocopherol, Triticum Vulgare (Wheat) Germ Oil, Glycerin, Boric Acid, Hydroxypropyl Bis-Hydroxyethylmonium Chloride, Sodium Chloride, Sodium Borate, Panthenol, Sodium Phosphate, Acetyl Cysteine, Acetyl Methionine, Inositol, Lactose, Sodium Citrate, Butylene Glycol, Sclerotium Gum, Xanthan Gum, Acetamide MEA, Ethylhexylglycerin, Hexylene Glycol, Chlorphenesin, Alcohol Denatured., Caprylyl Glycol, Disodium EDTA
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
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">APPLICATION</div>
              <div class="col-lg-9 col-md-6 col-sm-6 col-xs-10 productnotes_words">Apply twice daily on clean, dry skin at the base of your upper eyelashes and allow to dry for several minutes. Then you can apply your normal makeup.</div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head"><br></div>
              <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words"><br></div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">CAUTION</div>
              <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words">Do not apply to your lower eyelashes or allow CityLash&reg; to contact other skin areas.</div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head"><br></div>
              <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words"><br></div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">USAGE</div>
              <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words">Applying once daily is acceptable, but will delay the appearance of best results.</div>
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
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What IS City Lash?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq1" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq1" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                City Lash is an eyelash growth enhancer that stimulates eyelash growth and extends the natural life cycle of the lash. This process allows for older lashes to remain in longer and new lashes to regrow at the same time, resulting in a much fuller lash bed for dramatic visible results.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What happens if I miss a day?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq2" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq2" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              There will be no dramatic impact from missing a day here and there, although it might slightly delay results.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What makes City Lash effective?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq3" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq3" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                We’re glad you asked! We use Myristoyl Pentapeptide-17, which is the best ingredient available for growing thicker, sexier lashes. Additionally, we have perfected the concentrations necessary for maximum results, ensuring that City Lash gives you the fastest, most noticeable growth.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What’s Myristoyl Pentapeptide-17? Is it safe?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq4" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq4" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Myristoyl Pentapeptide-17 (MP-17 for short) is a peptide that has been shown to dramatically increase eyelash growth. It is completely safe, and will not cause negative side effects like skin discoloration or unwanted hair growth.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What exactly does it do?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq5" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq5" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
              City Lash stimulates keratin production at a cellular level. Keratin is an essential component of hair growth, so more keratin = longer, thicker lashes! And since the improvement occurs in your natural lashes, the effect lasts longer and looks better than traditional makeup.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Do you test your products on animals?</b></div>
              <!--collapse content goe</b>s here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq6" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq6" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Absolutely not! At City Lash, we believe in humane treatment of animals, and so we have never- and WILL never- tested our products on animals.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How do I use City Lash?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq7" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq7" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Simply apply City Lash to the base of your upper eyelashes. For the product to be effective, the skin needs to be clean and dry, and wait for City Lash to dry before applying normal makeup.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Will it smear, flake, or clump?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq8" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq8" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                No. Because City Lash is an eyelash enhancer and not a cosmetic, it will be absorbed by the skin and used to promote thicker eyelash growth. Although it can be worn with a mascara, City Lash is not a mascara itself, and as a result does not suffer the same limitations of traditional eye makeup.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Can I use it on my eyebrows?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq9" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq9" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Yes – City Lash has also been proven to be effective at supporting eyebrow growth and the same results apply. The growth cycle for your eyebrows averages 40 days for most women and results you experience for your eyebrows will be very similar to those you experience with your eyelashes requiring about the same time frame.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>My lashes are really dry. Will City Lash help with that?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq10" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq10" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                Yes, City Lash contains special moisturizing agents that help restore dry, brittle lashes. If you have dry lashes, you will definitely feel a difference with City Lash.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How long will a tube last?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq11" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq11" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                That depends on how much you use. If you follow our suggested twice-daily regimen, a single tube should last you about 2 ½ months.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Can I apply City Lash with a mascara wand?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq12" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq12" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                No, we recommend only using the special applicator we’ve included. City Lash promotes growth of new, improved lashes at their base, and so applying it to existing lashes will have little effect.
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How does City Lash compare to other more expensive treatments?</b></div>
              <!--collapse content goes here -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                <div data-toggle="collapse" data-target="#faq13" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
              </div>
            </div>
            <div id="faq13" class="collapse in" name="collapse_content">
              <div class="linebreak2"></div>
                <p>We’re confident that our product compares favorably to any other on the market, and that you’ll likely experience lash growth that is equal or better to that of all treatments on the market.</p>
                <p>However, it’s important to remember that many other enhancers can cause unwanted side effects, like skin discoloration around the eyes. You won’t experience any of these things with City Lash, which continues to be one of the safest lash enhancers available.</p>
                Additionally, City Lash offers you comparable results at a fraction of the price. We’re confident that our combination of proven results, superior safety, and unbeatable price will make City Lash the best product for you.
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
