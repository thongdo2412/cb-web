<!--include head and other css templates-->
<?php  include("head.php"); ?>
  <link href="https://fonts.googleapis.com/css?family=Scheherazade" rel="stylesheet">
  <title>Share Your Experiences</title>
  <style>
    .banner img {width: 100%;}
    h1,h2,h3,h4 {line-height: 24px; margin: 0 0 20px;}
    h1 {font-family: "Playfair Display", serif; font-size: 40px;}
    h2 {font-size: 30px;}
    h3 {font-size: 25px;}
    h4 {font-size: 20px; margin: 0;}
    html,body {font-size: 16px; font-family: "Montserrat", sans-serif; font-weight: 300;}
    .regular_font {font-family: "Montserrat", sans-serif;}
    .playfair_font {font-family: "Playfair Display", serif;}
    .sche_font {font-family: "Scheherazade", serif;font-size: 111px;}
    b {font-weight: 500;}
    .linebreak20 {margin-top: 20px;}
    .linebreak30 {margin-top: 30px;}
    .linebreak60 {margin-top: 60px;}
    .container {width: 1170px; }
    .gray_bg {background-color: #f4f4f4;}
    .gray_bg_content {width: 550px;}
    .content_box {padding: 50px 0;}
    .flex_container1{
      padding: 0;margin: 0 auto;list-style: none; justify-content: space-between;
      display: -webkit-box;display: -moz-box;display: -ms-flexbox;
      display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;
    }
    .flex_container2{
      padding: 0;margin: 0 auto;list-style: none; justify-content: flex-start;
      display: -webkit-box;display: -moz-box;display: -ms-flexbox;
      display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;
    }
    .left_gap {margin-left: 26px; text-align: left; margin-top: -25px;}
    .left_content {width: 105px; font-size: 20px;}
    .right_content {width: 220px; font-size: 20px;}
    .long_btn {padding: 14px 75px; text-transform: uppercase;}
    .button_wrap {margin: 40px 0 15px;}
    a,a:hover {text-decoration: none; color: #ffffff;}
    .winner_box {
      width: 250px; height: 250px; border: 1px solid #000000;
      text-align: center; padding: 50px 0;
    }
    .winner_box:hover {cursor: pointer;}
    .blue_bg {
      background-color: #091e37;color: #ffffff;
      width: 250px; height: 250px; border: 1px solid #000000;
      text-align: center; padding: 16px;
    }
    .location {font-size: 12px;text-transform: uppercase;}
    .review_content{display: none;font-size: 14px;}

    .quote {margin-bottom: 16px;}

    footer {height: 224px;padding: 60px 0;}
    ul li {margin: 0;}
    .footerItem {
    	text-align: left;
      margin-bottom: 26px;
    }
    .footer-img { margin-right: 10px; }
    .footer-img-caption { position: relative; top: 2px; }
    .company-info {
      width: 290px; margin-bottom: 26px;
    }
    .rightestCol { line-height: 18px; }

  </style>
  </head>
  <body>
    <header class="centered_flex">
      <img src="/img/city-beauty-logo.png" alt="city logo" />
    </header>

    <div class="banner"><img src="/img/share-experience-banner2.png" alt="banner" /></div>
    <div class="container">
      <div class="content_box">
        <h1>Share Your Thoughts</h1>
        <h2><i>For A Chance To Win</i></h2>
        <div class="linebreak30"></div>
        <h4>We’re thrilled you’re enjoying City Lips&reg;!</h4>
        <div class="linebreak30"></div>
        <p>Now we’d like to offer you a chance to get some free products from City Beauty&reg;.</p>
        <p>If you’ll take just a moment to leave a review, you’ll be automatically entered to:</p>
        <div class="linebreak30"></div>
        <h2 class="regular_font" style="font-weight:600">WIN A $100 GIFT CARD</h2>
        <h4 class="playfair_font"><i>you can use toward any City Beauty order</i></h4>
      </div>
      <div class="gray_bg content_box">
        <div class="gray_bg_content">
          <h2>How to Enter to Win...It's easy</h2>
          <div class="linebreak60"></div>
          <ul class="flex_container1">
            <li class="flex_container2">
              <div class="sche_font">1</div>
              <div class="left_gap left_content">Click the link below</div>
            </li>
            <li class="flex_container2">
              <div class="sche_font">2</div>
              <div class="left_gap right_content">Leave a review with your name and email</div>
            </li>
          </ul>
          <div class="button_wrap" style="letter-spacing:1px;"><a href="#" class="long_btn button_blue">click here to get started</a></div>
        </div>
      </div>
      
      <div style="margin-top:45px;">
      <h4><b style="font-weight:600;">A NEW WINNER IS CHOSEN EVERY MONTH</b></h4>
        <div>Just be sure you use an active email address where we can reach you!</div>
        </div>
     <!-- <div class="content_box">
        <div class="linebreak60"></div>
        <ul class="flex_container1">
          <li class="winner_box" id="winner1">
            <div class="reviewer">
              <p>- JUNE -</p>
                <h2>SHANIE</h2>
                <h2>KIM</h2>
              <div class="linebreak20"></div>
              <p class="location">los angeles, ca</p>
            </div>
            <div class="review_content">
              <div class="quote"><img src="/img/white_quotes.png"/></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in massa id lectus maximus suscipit non id quam. Nullam lobortis eleifend nisl sit amet venenatis. Etiam in consectetur lorem, id moll...</p>
            </div>
          </li>
          <li class="winner_box" id="winner2">
            <div class="reviewer">
              <p>- MAY -</p>
                <h2>JULIA</h2>
                <h2>ROBERTSON</h2>
              <div class="linebreak20"></div>
              <p class="location">denver, co</p>
            </div>
            <div class="review_content">
              <div class="quote"><img src="/img/white_quotes.png"/></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in massa id lectus maximus suscipit non id quam. Nullam lobortis eleifend nisl sit amet venenatis. Etiam in consectetur lorem, id moll...</p>
            </div>
          </li>
          <li class="winner_box" id="winner3">
            <div class="reviewer">
              <p>- APRIL -</p>
                <h2>SUSAN</h2>
                <h2>WRENTHER</h2>
              <div class="linebreak20"></div>
              <p class="location">dallas, tx</p>
            </div>
            <div class="review_content">
              <div class="quote"><img src="/img/white_quotes.png"/></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in massa id lectus maximus suscipit non id quam. Nullam lobortis eleifend nisl sit amet venenatis. Etiam in consectetur lorem, id moll...</p>
            </div>
          </li>
          <li class="winner_box" id="winner4">
            <div class="reviewer">
              <p>- MARCH -</p>
                <h2>SUSAN</h2>
                <h2>WRENTHER</h2>
              <div class="linebreak20"></div>
              <p class="location">dallas, tx</p>
            </div>
            <div class="review_content">
              <div class="quote"><img src="/img/white_quotes.png"/></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in massa id lectus maximus suscipit non id quam. Nullam lobortis eleifend nisl sit amet venenatis. Etiam in consectetur lorem, id moll...</p>
            </div>
          </li>
        </ul>
      </div> -->
      <div class="linebreak60"></div>
    </div>

    <footer>
      <div class="container">
        <ul class="flex_container1">
          <li>
            <div class="footerItem"><a href="https://city-cosmetics.myshopify.com">HOME</a></div>
            <div class="footerItem"><a href="https://city-cosmetics.myshopify.com/pages/about-us">ABOUT</a></div>
            <div class="footerItem"><a href="https://city-cosmetics.myshopify.com/collections/all">SHOP</a></div>
          </li>
          <li>
            <div class="footerItem">
             <a href="https://city-cosmetics.myshopify.com/fb">
               <img style="margin: 0 34px 0 5px;" class="footer-img" src="https://cdn.shopify.com/s/files/1/2134/3449/files/facebook-2.png?7091569830369647005" alt="facebook"/><span class="footer-img-caption">FACEBOOK</span>
             </a>
           </div>
            <div class="footerItem">
             <a href="https://city-cosmetics.myshopify.com/ig">
               <img style="margin: 0 30px 0 2px;" class="footer-img" src="https://cdn.shopify.com/s/files/1/2134/3449/files/insta2.png?7091569830369647005" alt="instagram"/><span class="footer-img-caption">INSTAGRAM</span>
             </a>
           </div>
           <div class="footerItem">
             <a href="https://city-cosmetics.myshopify.com/tw">
               <img style="margin-right: 30px;" class="footer-img" src="https://cdn.shopify.com/s/files/1/2134/3449/files/twitter2.png?7091569830369647005" alt="twitter"/><span class="footer-img-caption">TWITTER</span>
             </a>
           </div>
          </li>
          <li>
            <div class="footerItem">
              <a href="https://city-cosmetics.myshopify.com/pages/privacy-policy">PRIVACY POLICY</a>
            </div>
            <div class="footerItem">
              <a href="https://city-cosmetics.myshopify.com/pages/terms-conditions">TERMS &amp; CONDITION</a>
            </div>
          </li>
          <li class="text-right rightestCol">
             <div class="company-info">
               <script type="text/javascript">
                 now = new Date
                 theYear=now.getFullYear()
                 document.write(theYear)
               </script> &copy; City Beauty LLC. City Lips&reg; is a registered trademark of City Beauty LLC. All rights reserved.
             </div>
             <div style="margin-bottom: 26px;"><img class="footer-img" src="https://cdn.shopify.com/s/files/1/2134/3449/files/usa-flag.png?14898285048300461605" alt="manufactured in usa"/><span class="footer-img-caption">Manufactured in the USA</span></div>
             <div style="margin-bottom: 26px;"><img class="footer-img" src="https://cdn.shopify.com/s/files/1/2134/3449/files/cruelty-free_29b7584a-c1a6-4be9-b766-160884394393.png?1922393130652175042" alt="cruelty-free"/><span class="footer-img-caption">Cruelty-free</span></div>
           </li>
        </ul>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(".winner_box").hover(handlerIn,handlerOut);
      function handlerIn() {
        $(`#${this.id}`).removeClass("winner_box").addClass("blue_bg");
        $(`#${this.id} .reviewer`).hide();
        $(`#${this.id} .review_content`).show();
      }
      function handlerOut() {
        $(`#${this.id}`).removeClass("blue_bg").addClass("winner_box");
        $(`#${this.id} .review_content`).hide();
        $(`#${this.id} .reviewer`).show();
      }
    </script>


  </body>
</html>
