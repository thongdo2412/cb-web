<!-- include PHP header and other prerequisite files-->
<?php
  $pid = 'citylips';
  include("scripts/conn_init.php");
  include("scripts/insert.php");
 ?>

<!--include head and other css templates-->
<?php  include("head.php"); ?>

<title>City Lips</title>

<link rel="stylesheet" href="../components/raty-master/lib/jquery.raty.css">
<style type="text/css">
  footer p{font-size: 11px; word-wrap:break-word;}
  .container{width: 960px;}
  .sup1{vertical-align: super;}
  .lipsphoto{margin-left: 30px;margin-top: 150px;}
  .product_info{text-align: left;}
  .product_notes{text-align: left; margin-top: 10px;}
  .productnotes_head{width: 148px;margin-top: 16px;}
  .productnotes_words{text-align: left;font-family: "Playfair Display",serif;font-style: italic;font-size: 20px;border-bottom: solid 0.5px rgb(235,235,235);margin-top: 10px;}
  .product_img{margin-top: 10px;}
  .cream_box{border: 1px solid rgb(235, 235, 235);background-color: rgb(255, 255, 255);width: 276px;height: 276px;}
  .faq_heading{text-align: left;width: 160px; margin-top: 6px;}
  .faq_words{text-align: left;}
  .review_link{font-size: 14px; text-decoration: underline;}
  .testi_usr{width: 170px;text-align: left;margin-top: 14px;}
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
  .product-gallery img {
      display: none;
  }
  .product-gallery img.active {
      display: block;
  }
  div.main-swatch img {
      display: none;
  }
  div.main-swatch img.active {
      display: inline-block;
  }

  /* css for quantity select/option box */
  .quantityword{margin-top: 4px;}
  .quantity{margin-left: 10px;background: url("../img/quantityarrw.png") no-repeat 25px 4px #ffffff;}
  select.quantity{font-family: "Playfair Display", serif; font-size: 23px; font-style: italic;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
  }
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
    .product_notes{margin-top: 20px;}
    #testi hr{width: 86%;}
    .firstname,.email,.subjectline,.yourrating{margin: 0 auto;}
    .faq_heading{margin-top: 0;}
    .msgtextbox{margin-left: 0;}
    div.form-group input{margin-left: 0;}
    div.form-group textarea.form-control{margin-left: 0; width: 290px;}
    .quantity{margin-left: 20px;}
    .btn_wrapper{margin-right: 10px;}
    #review_form{width: 300px;margin-left: 35%;}
  }

  @media screen and (max-width:767px){
    .xslipsphoto{text-align: center;margin-top: 30px;margin-bottom: 30px;}
    .swatch-holder{margin-top: 10px;}
    .navbar-toggle{margin-right: 40px;}
    .undereyephoto{text-align: center;margin-top: 30px;margin-bottom: 30px;}
    .guarantee_wrd{margin-left: 100px;}
    .product_notes{padding-left: 28px;padding-right: 28px;}
    #review_form{width: 300px;margin:auto;}
  }

  @media screen and (max-width:549px){
    .col-xxs-12{width: 100%;}
    .xscolordiv{margin-left: 20%;}
    .hidden-xxs {display: none !important;}
    .guarantee_wrd{margin: 0 auto;}
  }
  @media screen and (max-width:479px){
    .word_wrapper{margin-left: 12.5%; margin-bottom: 5%;}
    .guarantee_wrd{font-size: 14px;}
    .guarantee_logo{margin-top: 6%;}
    .xslipsphoto{margin-left: -8%;}
    .xscolordiv{margin-left: 14%;}
  }
  @media screen and (max-width:400px){
    .guarantee_logo{margin-top: 9%;}
  }
  @media screen and (max-width:399px){
    .xscolordiv{margin-left: 5%;margin-right: 30px;}
    .button_bg{width: 150px;margin-left: 20px;}
    #review_form{padding-left: 28px; padding-right: 28px;}
    div.form-group input.form-control{width: 244px;}
    div.form-group textarea.form-control{width: 244px;}
    .btn_wrapper{margin: 0;}
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
              <img src="img/citylips/product_city_advanced_clear.jpg" id="clear" class="active">
              <img src="img/citylips/product_city_los_angelips.jpg" id="losangelips">
              <img src="img/citylips/product_city_nude_york.jpg" id="nudeyork">
              <img src="img/citylips/product_city_orchid.jpg" id="orchid">
              <img src="img/citylips/product_city_sangria.jpg" id="sangria">
              <img src="img/citylips/product_city_sun_diego.jpg" id="sundiego">
              <img src="img/citylips/product_city_tinsel_town.jpg" id="tinseltown">
              <img src="img/citylips/product_city_holly.jpg" id="holly">
              <img src="img/citylips/product_city_tokyo_kiss.jpg" id="tokyokiss">
              <img src="img/citylips/product_city_plum_springs.jpg" id="plumsprings">
            </div>
            <div class="col lipsphoto">
              <div class="main-swatch" style="display:inline-table" id="subnav">
                <img src="img/citylips/swatch-tokyokiss.png" id="tokyokiss">
                <img src="img/citylips/swatch-plumsprings.png" id="plumsprings">
                <img src="img/citylips/swatch-losangelips.png" id="losangelips">
                <img src="img/citylips/swatch-nudeyork.png" id="nudeyork">
                <img src="img/citylips/swatch-orchid.png" id="orchid">
                <img src="img/citylips/swatch-sangria.png" id="sangria">
                <img src="img/citylips/swatch-sundiego.png" id="sundiego">
                <img src="img/citylips/swatch-tinseltown.png" id="tinseltown">
                <img src="img/citylips/swatch-holly.png" id="holly">
                <img src="img/citylips/swatch-clear.png" id="clear" class="active">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-2 col-xs-10 col-xs-offset-1 product_info">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
              <h3>City Lips&reg;</h3>
            </div>
            <div class="linebreak2"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
              <div class="ratingwrapper"><img src="../img/ratingstars.png" alt="144 ratings stars"></div>
            </div>
            <div class="visible-xs col-xs-1 col-xs-pull-5 xslipsphoto">
              <div class="col product-gallery">
                <img src="img/citylips/product_city_advanced_clear.jpg" id="clear" class="active">
                <img src="img/citylips/product_city_los_angelips.jpg" id="losangelips">
                <img src="img/citylips/product_city_nude_york.jpg" id="nudeyork">
                <img src="img/citylips/product_city_orchid.jpg" id="orchid">
                <img src="img/citylips/product_city_sangria.jpg" id="sangria">
                <img src="img/citylips/product_city_sun_diego.jpg" id="sundiego">
                <img src="img/citylips/product_city_tinsel_town.jpg" id="tinseltown">
                <img src="img/citylips/product_city_holly.jpg" id="holly">
                <img src="img/citylips/product_city_tokyo_kiss.jpg" id="tokyokiss">
                <img src="img/citylips/product_city_plum_springs.jpg" id="plumsprings">
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
                        <a href="#!b0" class="swatch-box" id="clear">
                          <div class="swatch-container active" id="text_content">
                            <div class="swatch-unit" style="background-color: #ccc;"></div>
                          </div>
                        </a>
                      </td>
                      <td class="shade-table-cell active">
                        <a href="#!b1" class="swatch-box" id="nudeyork">
                          <div class="swatch-container" id="text_content">
                            <div class="swatch-unit" style="background-color: #e07c56;"></div>
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
                            <div class="swatch-unit" style="background-color: #ff8a80;"></div>
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
                <div class="col-xs-4 col-xxs-12">
                  <div class="main-swatch" style="display:inline-table" id="subnav">
                    <img src="img/citylips/swatch-tokyokiss.png" id="tokyokiss">
                    <img src="img/citylips/swatch-plumsprings.png" id="plumsprings">
                    <img src="img/citylips/swatch-losangelips.png" id="losangelips">
                    <img src="img/citylips/swatch-nudeyork.png" id="nudeyork">
                    <img src="img/citylips/swatch-orchid.png" id="orchid">
                    <img src="img/citylips/swatch-sangria.png" id="sangria">
                    <img src="img/citylips/swatch-sundiego.png" id="sundiego">
                    <img src="img/citylips/swatch-tinseltown.png" id="tinseltown">
                    <img src="img/citylips/swatch-holly.png" id="holly">
                    <img src="img/citylips/swatch-clear.png" id="clear" class="active">
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
                                <div class="swatch-unit" style="background-color: #ccc;"></div>
                              </div>
                            </a>
                          </td>
                          <td class="shade-table-cell active">
                            <a href="#!b1" class="swatch-box" id="nudeyork">
                              <div class="swatch-container" id="text_content">
                                <div class="swatch-unit" style="background-color: #e07c56;"></div>
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
                                <div class="swatch-unit" style="background-color: #ff8a80;"></div>
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
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 quantityword">QUANTITY</div>
                <div class="col-lg-1 col-md-1 col-sm-1"><select class="quantity" id="qty" name="quantityselect"></select></div>
              </div>
              <div class="linebreak2"></div>
              <div class="button button_blue pull-left"><a name="addToCart" href="#">ADD TO CART</a></div>
              <div class="clearfix"></div>
              <div class="linebreak2"></div>
            </div>
            <div class="visible-xs col-xs-12">
              <p><img src="../img/stars_rating.png" alt="5 stars rating"> <span class="rating_wrd">(144 Reviews)</span></p>
              <div class="linebreak2"></div>
              <div class="row">
                <div class="col-xs-3">
                  <select class="xsquantity" id="xsqty" name="quantityselect"></select>
                </div>
                <div class="col-xs-4">
                  <div class="button_bg button_blue"><a name="addToCart" href="#">ADD TO CART</a></div>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget enim enim. Nulla facilisi. In et lacus nulla. Fusce tincidunt blandit tellus, ut faucibus urna ultrices egestas. Vestibulum turpis augue, egestas in tellus ut, facilisis consectetur sem. </p>
                <div class="linebreak2"></div>
                <b>FEATURES</b>
                <div class="linebreak2"></div>
                <ul class="features">
                  <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                  <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
                  <li>lorem ipsum dolor sit amet, traiso dod consectur adipiscing traiso elit dolor sit amet.</li>
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
                  <li>0.5 FL OZ / 15 ML</li>
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
                <p>Water, Glycerin, Caprylic/Capric Triglyceride, Nylon-12 Fluorescent Brightener 230 Salt, Isopentyldiol, Polymethylsilsesquioxane, Pentylene Glycol, Caffeine, Cetearyl Alcohol, Glyceryl Stearate, Potassium Olivoyl Hydrolized Oat Protein, Cyclopentasiloxane, Dimethicone, Jojoba Esters, Olea Europaea (Olive) Fruit Unsaponifiables, Cocos Nucifera (Coconut) Oil, Albizia Julibrissin Bark Extract, Coffea Arabica (Coffee) Seed Extract, Passiflora Incarnata Flower Extract, Phenoxyethanol, Glyceryl Oleate, Strelitzia Nicolai Seed Aril Extract, Polyvinylalcohol Crosspolymer, Sodium Hyaluronate, Caprylyl Glycol, Lecithin, Chlorphenesin, Algae Extract, Xanthan Gum, Cyamopsis Tetragonoloba (Guar) Gum, Steareth-20, Tetrasodium Glutamate Diacetate, Hexylene Glycol, Palmitoyl Oligopeptide, Darutoside, Caprooyl Tetrapeptide-3, Dextran, Palmitoyl Tetrapeptide-7, Hydroxyacetophenone, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Fragrance.</p>
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
        <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 faq_words">
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>WHICH ORDER OPTIONS IS RIGHT FOR ME?</b></div>
             <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq1" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq1" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
            <p>Many of our returning customers appreciate the 3-pack because it
            offers the best value. And we're happy to do it because it saves us the cost of processing individual units.</p>
            <p></p>
            If you just want to try 1 tube, we've already reduced the price far below original retail. So you can't go wrong with any of the options. And I just know that you'll fall in love with your new lips either way.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>WHEN CAN I EXPECT MY ORDER TO ARRIVE?</b></div>
            <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq2" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq2" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              We know you can't wait to start trying City Lips<span class="sup1">&reg;</span> and experiencing the amazing difference for yourself.
              That's why our shipping department is operational 7 days a week. That way, your order leaves our facilities
              within 24-hours. Transit usually takes 3-5 business days depending on what part of the country you're in.
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 collapse_heading"><b>IS MY INFORMATION SAFE?</b></div>
          <!-- collapse button -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pull-right">
              <div data-toggle="collapse" data-target="#faq3" class="plusminus" aria-expanded="true" name="collapse_plus">+</div>
            </div>
          </div>
          <!--collapse content goes here -->
          <div id="faq3" class="collapse in" name="collapse_content">
            <div class="linebreak2"></div>
              <p>We take your privacy very seriously. That's why we use a variety of security measures to
                maintain the safety of your personal information. </p>
              <p></p>
              <p>When you place an order or access your personal information, everything goes through a
                secure server. All of your personal information, including credit card number, name, and address,
                is transmitted via Secure Socket Layer (SSL) technology — the industry standard for secure online transactions.</p>
              <p></p>
              If you would rather not shop online, you can place your order over the phone by calling us at 1-800 347-1558.
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

  <!--include footer and javascript-->
  <?php include ("footer.php"); ?>

  <script src="../components/raty-master/lib/jquery.raty.js"></script>
  <script src="scripts/citybeauty.js"></script>
  <script type="text/javascript">
    $(function qtyselection(el){//handle color picker
      $(".swatch-unit").hover(
          function(){
              id = $(this).closest('a').attr('id');
              $(".main-swatch img.active").hide();
              $(".product-gallery img.active").hide();
              $(".main-swatch #" + id).show();
              $(".product-gallery #" + id).show();
              $(".shadeDes").text(id);
              if(id!="clear"){
                  $(".price span").text("$40.00");
              } else {
                  $(".price span").text("$35.00");
              }
          }, function(){
               $(".main-swatch #" + id).hide();
               $(".product-gallery #" + id).hide();
               $(".main-swatch img.active").show();
               $(".product-gallery img.active").show();
               activeColor = $(".swatch-container.active").closest('a').attr('id');
               $(".shadeDes").text(activeColor);
              if(activeColor!="clear"){
                $(".price span").text("$40.00");
              } else {
                $(".price span").text("$35.00");
              }
          }
      );
      id2 = "clear";
      $(".swatch-unit").on("click", function(event){
          event.preventDefault();
          $(".swatch-box .active").removeClass('active').width(39).height(39);
          $(this).parent().addClass('active').width(35).height(35);
          $(".main-swatch .active").removeClass("active");
          $(".product-gallery .active").removeClass("active");
          id2 = $(this).closest('a').attr('id');
          $(".main-swatch #" + id2).addClass("active");
          $(".product-gallery #" + id2).addClass("active");

          $(".shadeDes").text(id2);
          if(id2!="clear"){
              $(".price span").text("$40.00");
          } else {
              $(".price span").text("$35.00");
          }
      });
      //handle ios single tap as single click
      $(".swatch-unit").on('touchstart', function(event) {
        event.preventDefault();
        $(this).trigger('click');
      });
      //handle each color to add to cart
        var quantity;
        var selectId;
        var link;

        //handle regular quantity selection or mobile selection
        if ( $(window).width() > 768  ) {
          quantity = document.getElementById("qty").value;
          selectId = 'select#qty';
        }
        else {
          quantity = document.getElementById("xsqty").value;
          selectId = 'select#xsqty';
        }

        $(selectId).change(function() {//handle change of quantity
          quantity = $(this).find('option:selected').text();
        })

        $("*[name='addToCart']").click(function(event){ //handle click event of Add to Cart button
          event.preventDefault();
          //select active color
          switch (id2) {
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
