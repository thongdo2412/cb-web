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
  .lipsphoto{margin-left: 10px;margin-top: 150px;}
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
  .quantityword{margin-top: 5px;}
  .quantity{margin-left: 10px;font-family: "Playfair Display", serif; font-size: 30px; font-style: italic;}
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
    margin-left: -330px;
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
  select.quantity{border: 0; border-radius: 0;-webkit-appearance: none;-moz-appearance: none;
    background: url("../img/quantityarrw.png") no-repeat 20px 4px #ffffff;
  }
  .xsquantity{font-family: "Playfair Display", serif;font-size: 20.45px;}
  select.xsquantity{width: 75px;height: 32px; border: 1px solid rgb(235, 235, 235);border-radius: 0;-webkit-appearance: none;-moz-appearance: none; background: url("../img/quantityarrw_sm.png") no-repeat 42px 13px #ffffff; text-align-last:left;padding-left: 22px;direction: rtl;}
  /*For FF */
  @-moz-document url-prefix() {
    .quantityword{margin-top: 14px;}
    select.quantity{border: 0; border-radius: 0;-webkit-appearance: none;-moz-appearance: none;
      background: url("../img/quantityarrw.png") no-repeat 20px 15px #ffffff;}
  }
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
    .product-gallery{margin-left: -100px;}
    .swatch-holder{margin-top: 10px;}
  }
  @media screen and (max-width:662px){
    div.product-gallery img{width: 95%;}
    .product-gallery{margin-left: -20px;}
  }
  @media screen and (max-width:549px){
    .col-xxs-12{width: 100%;}
  }
  @media screen and (max-width:479px){
    div.product-gallery img{width: 120%;}
    .product-gallery{margin-left: -100px;}
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
            <div class="hidden-lg hidden-md hidden-sm visible-xs col-xs-12 undereyephoto">
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
                <span><toBold>Shade Description:</toBold> <span id="shadeDes">Clear</span></span>
              </div>
              <div class="price-holder">
                <div class="price">
                  <toBold>Price: </toBold><span>$35.00</span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 visible-xs">
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

  <!--include footer and javascript-->
  <?php include ("footer.php"); ?>

    <script src="../components/raty-master/lib/jquery.raty.js"></script>
    <script type="text/javascript">
    $(function(){
      var $select = $(".quantity,.xsquantity");
      for (i=1;i<=100;i++){
        $select.append($('<option></option>').val(i).html(i))
      }
    });
    $('.plusminus').click(function(){ //handle click for regular + and - collapse
      $(this).text(function(i,old){
        sign=old;
        return old=='+' ?  '-' : '+';
      });
    });

    $('.plusminus_revw').click(function(){ //handle review +/- collapse
      var sign;

      $(this).text(function(i,old){
        sign=old;
        return old=='+' ?  '-' : '+';
      });

      var getDatatarget = $(this).attr("data-target");
      var numberPattern = /\d+/g;
      var number = getDatatarget.match(numberPattern);
      var newId = "preview" + number.toString();

      if (sign=='+'){
          document.getElementById(newId).style.display ='none';
        }
        else{
          document.getElementById(newId).style.display ='block';
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

    $(function(){//handle color picker

      $(".swatch-unit").hover(
          function(){
              id = $(this).closest('a').attr('id');
              $(".main-swatch img.active").hide();
              $(".product-gallery img.active").hide();
              $(".main-swatch #" + id).show();
              $(".product-gallery #" + id).show();
              $("#shadeDes").text(id);
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
               $("#shadeDes").text(activeColor);
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

          $("#shadeDes").text(id2);
          if(id2!="clear"){
              $(".price span").text("$40.00");
          } else {
              $(".price span").text("$35.00");
          }
      });

    });

    </script>

  </body>
  </html>
