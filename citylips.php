<!-- include PHP header and other prerequisite files-->
<?php
  $pid = 'citylips';
  $page_title = 'City Lips';
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
  .lipsphoto{margin-left: 30px;margin-top: 150px;}
  .product_info{text-align: left;}
  .product_notes{text-align: left;margin-top: 4px;}
  .productnotes_head{width: 148px;margin-top: 16px;}
  .productnotes_words{text-align: left;font-family: "Playfair Display",serif;font-style: italic;font-size: 20px;border-bottom: solid 0.5px rgb(235,235,235);margin-top: 10px;}
  .product_img{margin-top: 10px;}
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

  /* css for product gallery and changing color*/
  .swatch-container{width: 39px; height: 39px;margin: 5px}
  .swatch-holder{display:inline-table;text-align: center;}
  .swatch-unit{width: 39px; height: 39px;}
  div.swatch-container {
    /* margin: 0 0 3px; */
    overflow: hidden;
    position: relative;
    z-index: 1;
  }
  div.swatch-container.active {
    border: 2px solid black;
  }
  .product-gallery {
    margin-left: -220px;
  }
  .main-swatch{display: inline;}
  .product-gallery img {
      width: 200%;
      height: 200%;
  }

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
  /* handling out of stock */
  .outofstockbtn{background-color: rgb(160,160,160);display: none;font-size: 32px;}
  .out-of-stock-line {
    width: 58px;
    height: 58px;
    border-bottom: 3px solid red;
    -webkit-transform:
        translateY(-30px)
        translateX(8px)
        rotate(45deg);
    position: absolute;
    /* top: -20px; */
  }
  .outofstocktxt{color:red;display: none;height: 32px;}
  /*end of handling out of stock*/

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
    #review hr{width: 86%;}
    .firstname,.email,.subjectline,.yourrating{margin: 0 auto;}
    .faq_heading{margin-top: 0;}
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
    .xslipsphoto{text-align: center;margin-top: 50px;margin-bottom: 30px;margin-left: 14%;}
    .swatch-holder{margin-top: 10px;}
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
    .xscolordiv{margin-left: 20%;}
    .xsswatch-wrapper{margin-left: 10%;}
    .hidden-xxs {display: none !important;}
    .guarantee_wrd{margin: 0 auto;}
    .xslipsphoto{margin-left: 16%;}
  }
  @media screen and (max-width:479px){
    .word_wrapper{margin-left: 12.5%; margin-bottom: 5%;}
    .guarantee_wrd{font-size: 14px;}
    .guarantee_logo{margin-top: 6%;}
    .xscolordiv{margin-left: 14%;}
    .button{width: 120px;}
  }
  @media screen and (max-width:400px){
    .guarantee_logo{margin-top: 9%;}
  }
  @media screen and (max-width:399px){
    .xscolordiv{margin-left: 5%;margin-right: 30px;}
    #review_form{padding-left: 28px; padding-right: 28px;}
    div.form-group input.form-control{width: 244px;}
    div.form-group textarea.form-control{width: 244px;}
    .btn_wrapper{margin: 0;}
    .xslipsphoto{margin-left: 14%;}
    .button{width: 110px;}
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
        <div class="col-lg-1 col-lg-offset-2 col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-1 hidden-xs">
          <div class="row">
            <div class="col product-gallery">
              <img src="img/citylips/citylips_clear.jpg" class="lip-holder-photo">
            </div>
            <div class="col lipsphoto">
              <div class="main-swatch" id="subnav">
                <img src="img/citylips/swatch-clear.png" class="lip-sample-photo">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-2 col-xs-10 col-xs-offset-1 product_info">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
              <h3>City Lips<span class="sup1">&reg;</span></h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                <div class="linebreak12"></div>
              <img src="../img/stars_rating.png" alt="5 stars rating"><a href="#review" class="rating_wrd"><!--review count stores in here--></a>
            </div>
            <div class="visible-xs col-xs-1 col-xs-pull-5 xslipsphoto">
              <div class="col product-gallery">
                <img src="img/citylips/citylips_clear.jpg" class="lip-holder-photo">
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 hidden-xs">
              <div class="swatch-holder" id="nav-links">
                <table class="table-swatches">
                  <tbody class="tbody-swatches">
                    <tr>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="clear">
                          <div class="swatch-container active" id="text_content">
                            <div class="swatch-unit" style="background-color: #ccc;"><div class="out-of-stock-line"></div></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="nudeyork">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #e07c56;"><div class="out-of-stock-line"></div></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="orchid">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #c892b9;"></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="sangria">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #4f101e;"></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="tokyokiss">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #d4a286;"></div>
                          </div>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="sundiego">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #ff8a80;"><div class="out-of-stock-line"></div></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="tinseltown">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #dbb4ac;"></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="holly">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #701101;"></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="losangelips">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #ee9091;"></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#" class="swatch-box" id="plumsprings">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #9b6169;"></div>
                          </div>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="linebreak2"></div>
              <div class="shadeinfo">
                <span><b>Shade Description:</b> <span class="shadeDes">clear</span></span>
              </div>
              <div class="price-holder">
                <div class="price">
                  <b>Price: </b><span>$35.00</span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 visible-xs xscolordiv">
              <div class="row">
                <div class="col-xs-4 col-xxs-12 xsswatch-wrapper">
                  <div class="main-swatch" style="display:inline-table" id="subnav">
                    <img src="img/citylips/swatch-clear.png" class="lip-sample-photo">
                  </div>
                </div>
                <div class="col-xs-7 col-xxs-12">
                  <div class="swatch-holder" id="nav-links">
                    <table class="table-swatches">
                      <tbody class="tbody-swatches">
                        <tr>
                          <td class="shade-table-cell active">
                            <a href="#!b0" class="swatch-box" id="clear">
                              <div class="swatch-container active" id="text_content">
                                <div class="swatch-unit" style="background-color: #ccc;"><div class="out-of-stock-line"></div></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="nudeyork">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #e07c56;"><div class="out-of-stock-line"></div></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="orchid">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #c892b9;"></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="sangria">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #4f101e;"></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="tokyokiss">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #d4a286;"></div>
                              </div>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="sundiego">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #ff8a80;"><div class="out-of-stock-line"></div></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="tinseltown">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #dbb4ac;"></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="holly">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #701101;"></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="losangelips">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #ee9091;"></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="plumsprings">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #9b6169;"></div>
                              </div>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="linebreak2"></div>
              <div class="shadeinfo">
                <span><b>Shade Description:</b> <span class="shadeDes">clear</span></span>
              </div>
              <div class="price-holder">
                <div class="price">
                  <b>Price: </b><span>$35.00</span>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 hidden-xs">
              <input type="hidden" id="outstockcheck" value="n"> <!--place holder for out of stock-->
              <div class="row quantity-wrapper">
                <div class="col-lg-2 col-md-2 col-sm-2 quantityword">QUANTITY</div>
                <div class="col-lg-1 col-md-1 col-sm-1"><select class="xsquantity" id="qty" name="quantityselect"></select></div>
              </div>
              <div class="outofstocktxt">Currently Out of Stock</div>
              <div class="linebreak2"></div>
              <a name="addToCart" href="#"><div class="button button_blue pull-left instockbtn">ADD TO CART</div></a>
              <div class="button button_blue pull-left outofstockbtn">&odash;</div>
              <div class="clearfix"></div>
              <div class="linebreak1"></div>
            </div>
            <div class="visible-xs col-xs-12">
              <img src="../img/stars_rating.png" alt="5 stars rating"><a href="#review" class="rating_wrd"><!--store count of reviews here--></a>
              <div class="linebreak2"></div>
              <div class="row" id="instock">
                <div class="col-xs-3">
                  <select class="quantity-wrapper xsquantity" id="xsqty" name="quantityselect"></select>
                </div>
                <div class="col-xs-4">
                  <a name="addToCart" href="#"><div class="button_bg button_blue instockbtn">ADD TO CART</div></a>
                </div>
              </div>
              <div class="row" id="outofstock">
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
                  <!-- collapse button -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                  <div data-toggle="collapse" data-target="#description" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
                </div>
              </div>
              <!--collapse content goes here -->
              <div id="description" class="collapse in" name="collapse_content">
                <div class="linebreak2"></div>
                <div>City Lips<span class="sup1">&reg;</span> utilizes exclusive ingredients and natural lip enhancers that work painlessly and safely to pump up the volume. City Lips<span class="sup1">&reg;</span> will stimulate lasting natural collagen production with continued use. Dramatically, the lips become smoother and fuller by within minutes of application.</div>
                <div class="linebreak2"></div>
                <b>FEATURES</b>
                <div class="linebreak2"></div>
                <ul class="features">
                  <li>Instantly delivers dramatic plumping effects with HA Plumping Spheres Stimulates new collagen development with twice the collagen peptides for long-term plumping</li>
                  <li>Provides instant fullness, definition, & hydration with long-lasting plumping benefits</li>
                  <li>Diminishes and fades the appearance of fine lines and wrinkles Works safely, painlessly and without irritation or numbness</li>
                </ul>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>DETAILS</b>

                </div>
                <!-- collapse button -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
                  <div data-toggle="collapse" data-target="#details_drop" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
                </div>
              </div>
              <!--collapse content goes here -->
              <div id="details_drop" class="collapse in" name="collapse_content">
                <div class="linebreak2"></div>
                <ul class="details">
                  <li>0.169 FL OZ / 5 ML</li>
                  <li>CRUELTY-FREE</li>
                  <li>MANUFACTURED IN THE USA</li>
                </ul>
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
                <div>Hydrogenated Polyisobutene, VP/Hexadecene Copolymer, Phenyl Trimethicone, Ethylhexyl Palmitate, Hydrogenated Polyisobutene, PPG-51/SMDI Copolymer, Silica, Petrolatum, C12-15 Alkyl Benzoate, Dipalmitoyl Hydroxyproline, Microcrystalline Wax, Tribehenin, Glycerin, Octyldodecyl PCA, Tetrahexyldecyl Ascorbate, Caprylic/Capric Triglyceride, Water, Caprylyl Glycol, Benzyl Nicotinate, Flavor, Cetyl Tallowate, O-Cymen-5-OL, Silica Dimethyl Silylate, Simmondsia Chinensis (Jojoba) Seed oil, Sorbitan Isostearate, Sucrose Distearate, Hydrogenated Vegetable Oil, Ceramide 2, PEG-10 Phytosterol, Sodium Cocoyl Amino Acids, Butylene Glycol, Sodium Saccharin, Sarcosine, Crithmum Maritimum Extract, Magnesium Aspartate, Potassium Aspartate, Sodium Hyaluronate, Palmitoyl Hexapeptide-12, Citrus Grandis (Grapefruit) Peel Oil, Cananga Odorata Flower Oil, Citrus Aurantium Bergamia (Bergamot) Fruit Oil, Palmitoyl Oligopeptide, Glycine Soja (Soybean) Oil, Stearyl Glycyrrhetinate</div>
              </div>
            </div>
            <div class="clearfix"></div>
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
            <img src="img/citylips/swatch-clear.png" alt="clear swatch">
          </div>
        </div>
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-12 col-sm-offset-2 col-xs-12 col-xs-offset-1 product_notes">
          <h4>How to Use</h4>
          <div class="linebreak2"></div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">APPLICATION</div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-10 productnotes_words">Apply an even coat and wait 10 minutes.</div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head"><br></div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words"><br></div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 productnotes_head">DAY TIME</div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-10 productnotes_words">Use it over any lipstick for a boost of shine &amp; fullness.</div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head"><br></div>
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 productnotes_words"><br></div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs productnotes_head">NIGHT TIME</div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-10 productnotes_words">For long term results, apply it each night before bed.</div>
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
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What IS City Lips?</b></div>
             <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq1" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq1" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
            City Lips is an advanced formula lip plumper that instantly delivers dramatic plumping effects. It provides instant fullness, definition, hydration AND long-lasting plumping benefits by stimulating new collagen development. City Lips works safely, painlessly and without irritation or numbness, and even diminishes and fades the appearance of fine lines and wrinkles!
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Does it Really Work?</b></div>
            <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq2" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq2" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Yes! City Lips works instantly to give you immediate, visible results AND works long term to keep plumping your lips with continuous use. In fact, in 2004 AND 2007, the Good Housekeeping Institute conducted different lip plumper tests. CITY Lips was declared the best and most effective lip plumper on the market both times!
              <p></p>
              CITY Lips utilizes cutting edge beauty technology and exclusive ingredients not found in any other lip treatment to give you beautifully full lips. It safely and painlessly stimulates your own natural collagen production so that your lips swell from the inside out. It also reduces the breakdown of collagen, reducing the look of fine lines and wrinkles and keeping your lips fuller for longer.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How does it work?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq3" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq3" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              City Lips uses Hyaluronic Acid, known as nature’s “moisture magnet” to attract and store several times its weight in water, giving you instantly smoother and fuller lips. It also contains Oligopeptides, peptides which stimulate natural collagen and elastin production, and Celadrin which reduces the breakdown of your newly formed collagen. This lets your body store collagen long term, giving you fuller, more beautiful lips with continued use!
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Does it burn?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq4" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq4" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              No! Unlike other products on the market, CITY lips does not work by irritating the skin around the lips. While some plumpers use irritants and carcinogens that hurt and can make your lips red, flakey and dry, CITY Lips works to increase the collagen in your lips so that they plump from the inside out. That’s why it’s long lasting, because it is not just a temporary swelling of the lips caused by irritation. CITY Lips contains absolutely no harsh or drying irritants.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How quickly does it take to see results?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq5" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq5" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Visible results are apparent within minutes of application! Once you apply CITY Lips, your lips will begin to swell and continue to get fuller as time passes.
              <p></p>
              For optimum results, apply it every night before bedtime. Plumping results are increased by continuous use.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How long do the results last?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq6" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq6" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              The average "instant" lip plump will last four to six hours, but everybody's lips react different. With frequent use CITY Lips provides long term and continuous results. As the hyaluronic acid binds to your skin’s natural moisture it continues to attract and store several times its weight in water, keeping your skin at its optimum level of repair and encouraging collagen production. Then the ingredient Celadrin prevents the breakdown of that newly formed collagen, keeping your lips full and healthy for longer!
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Will it dry out my lips?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq7" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq7" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              No! Quite the opposite, in fact! The Hyaluronic Acid in CITY Lips works to attract your skin’s natural moisture, which in turn leaves your lips incredibly hydrated throughout the day.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How long does one tube last?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq8" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq8" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Using CITY Lips 2 to 3 times a day AS WELL AS applying it at night before bedtime, the tube lasts from 4 to 6 weeks.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Does it expire?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq9" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq9" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              No!
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Can I wear it with other lipsticks?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq10" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq10" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Absolutely! Once you apply CITY Lips you only need to wait 2 to 3 minutes before putting on your favorite lipstick.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Does it come in other colors?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq11" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq11" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Not just any colors, beautiful colors! You can try them out in beiges, pinks, nudes and corals and pick your favorites! They work just as effectively as our original Clear Plumper, reducing fine lines and wrinkles and instantly giving you fuller lips.
              <p></p>
              But if you have a color you’d like to see then let us know!
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Why is it better than lip injections?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq12" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq12" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Easy! Lip injections are painful and can leave you looking swollen and fake. They often bruise and irritate the skin around your lips, and can even make parts of your lips look different sizes! CITY Lips safely and painlessly stimulates YOUR OWN NATURAL collagen production for beautiful, fuller lips.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>What IS hyaluronic acid?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq13" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq13" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Hyaluronic acid is a compound which is naturally found in the human body. With its ability to hold several times its own weight in water, it is one of the most effective natural moisturizers. It also contributes to skin elasticity and stimulates the growth of new and healthy cells. In CITY Lips, it contributes to the "instant plump" that happens on application as well as supporting the formation and maintenance of collagen.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How do you use City Lips?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq14" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq14" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
            City Lips is easy to use… You can apply it anytime you like for an instant effect, and if you want color, simply wait 2 minutes and apply it right on over it. For an increased and long term effect, we recommend applying it every night before bedtime as well.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Can I use clear and a color?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq15" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq15" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              You sure can, but you don’t need to! Our City Lips Advanced formula COLORS work just as well as the original clear! What we would recommend is to use a color during the day, and the clear at night before bed.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>How will City Lips affect my lipstick?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq16" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq16" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              I’m so glad you asked! In fact, City Lips will extend the longevity of your lipstick! That’s because it acts as a sealant… Underneath your lipstick it will help lock in the shade, and if you use it on top, it creates a barrier that protects your color.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>Does City Cosmetics test on animals?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq17" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq17" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              Never. We at City Cosmetics are committed to remaining cruelty-free and will never test our products on animals.
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

  <input type="hidden" id="page_title" value="<?php echo $pid;?>"> <!--place holder for the page title to copy to JS variable-->
  <!--include footer and javascript-->
  <?php include ("footer.php"); ?>

  <script src="../components/raty-master/lib/jquery.raty.js"></script>
  <script src="scripts/citybeauty.js"></script>
  <script type="text/javascript">
    $(function (){//handle color picker

      function getActiveColor () {//get active color
        activeColor = $(".swatch-container.active").closest('a').attr('id');
        return activeColor;
      }

      function updateOutofStock(color) {//find active color and check if it's out of stock
        if($(window).width() > 767 ) { //handle bigger screen size
          $(".outofstocktxt").css("display","none");
          $(".quantity-wrapper").css("display","block");
          $(".outofstockbtn").css("display","none");
          $(".instockbtn").css("display","flex");
          var outofstock = $(".shade-table-cell #" + color + " > div > div" ).find("div").attr("class");
          if (outofstock == 'out-of-stock-line'){ //check if the color is out of stock and activate out of stock functions
            $(".quantity-wrapper").css("display","none");
            $(".outofstocktxt").css("display","block");
            $(".instockbtn").css("display","none");
            $(".outofstockbtn").css("display","block");
          }
        }
        else{ //handle mobile screen size
          $("#outofstock").css("display","none");
          $("#instock").css("display","block");
          var outofstock = $(".shade-table-cell #" + color + " > div > div" ).find("div").attr("class");
          if (outofstock == 'out-of-stock-line'){ //check if the color is out of stock and activate out of stock functions
            $("#outofstock").css("display","block");
            $(".outofstocktxt").css("display","block");
            $(".outofstockbtn").css("display","block");
            $("#instock").css("display","none");
          }
        }
      }

      function updateImgPath(color) {//update image path for lip holder and lip sample
        const imgPath = `img/citylips/citylips_${color}.jpg`;
        const lipimgPath = `img/citylips/swatch-${color}.png`;
        $(".lip-holder-photo").attr('src',imgPath);
        $(".lip-sample-photo").attr('src',lipimgPath);
      }

      function setDisplayColor(color){
        $(".swatch-box .active").removeClass('active').width(39).height(39);
        $(`a#${color}`).children().addClass('active').width(35).height(35);
        updateImgPath(color);
        //display the lip name and price
        $(".shadeDes").text(color);
        if(color!="clear"){
            $(".price span").text("$40.00");
        } else {
            $(".price span").text("$35.00");
        }
        currentID = getActiveColor(); //get new active color
        updateOutofStock(currentID); //check and set the in stock text for the active color
      }

      // default image in lip holder and lip sample
      updateOutofStock('clear');
      updateOutofStock('nudeyork');
      updateOutofStock('sundiego');
      setDisplayColor('orchid');
      currentID = getActiveColor(); // get active color for add to cart

      $(".swatch-unit").hover(
          function(){ //show hover in
              id = $(this).closest('a').attr('id');
              updateImgPath(id);
              updateOutofStock(id);
              $(".shadeDes").text(id);
              if(id!="clear"){
                  $(".price span").text("$40.00");
              } else {
                  $(".price span").text("$35.00");
              }
          }, function(){ //return to active when hover out
               activeID = getActiveColor()
               updateImgPath(activeID);
               updateOutofStock(activeID);
               $(".shadeDes").text(activeID);
              if(activeID!="clear"){
                $(".price span").text("$40.00");
              } else {
                $(".price span").text("$35.00");
              }
          }
      );

      $(".swatch-unit").on("click", function(event){ //handle click event
          event.preventDefault();
          id2 = $(this).closest('a').attr('id');
          setDisplayColor(id2);
          updateOutofStock(id2);
          currentID = getActiveColor();
      });
      //handle ios single tap as single click
      $(".swatch-unit").on('touchstart', function(event) {
        event.preventDefault();
        $(this).trigger('click');
      });
      //handle each color to add to cart
        var quantity = 1;

        $(".xsquantity").change(function() {//handle change of quantity
          quantity = $(this).find('option:selected').text();
        })

        $("*[name='addToCart']").click(function(event){ //handle click event of Add to Cart button
          event.preventDefault();
          //select active color
          switch (currentID) {
               case "plumsprings": {
                 window.location = "http://citycosmetics.com/cmd.php?pid=4de3527dd0384b6798a10806709ab72b&qty=" + quantity.toString();
               } break;
               case "tokyokiss": {
                 window.location = "http://citycosmetics.com/cmd.php?pid=88053a3fe25c4aee983306a9fcbaf6a0&qty=" + quantity.toString();
               } break;
               case "losangelips": {
                 window.location = "http://citycosmetics.com/cmd.php?pid=ae2d751c814848c99e79ebf1bfbf98a3&qty=" + quantity.toString();
               } break;
               case "nudeyork": {
                 window.location = "http://citycosmetics.com/cmd.php?pid=7888e4d5e5164a5f8d8cd07a02799566&qty=" + quantity.toString();
               } break;
               case "orchid": {
                 window.location = "http://citylips.com/cmd.php?pid=d4035529578c4638beabe2f1da1ff6d7&qty=" + quantity.toString();
               } break;
               case "sangria": {
                 window.location = "http://citycosmetics.com/cmd.php?pid=7799892e241242e4bd2b9e7b6b398a48&qty=" + quantity.toString();
               } break;
               case "sundiego": {
                 window.location = "http://citycosmetics.com/cmd.php?pid=da80e759f0c642c9a349b30dbc6790fd&qty=" + quantity.toString();
               } break;
               case "tinseltown": {
                 window.location = "http://citylips.com/cmd.php?pid=46a249a3f7df436f852577e221e19e06&qty=" + quantity.toString();
               } break;
               case "holly": {
                 window.location = "http://citylips.com/cmd.php?pid=1df7b026b9e74e96a09e018ce9a7b50a&qty=" + quantity.toString();
               } break;
              case "clear": {
                 window.location = "http://citylips.com/cmd.php?pid=3ea53eb3ed29409ab947a3ba05e0459f&qty=" + quantity.toString();
               } break;
          }
        })

    });
  </script>

</body>
</html>
