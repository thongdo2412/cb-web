<!DOCTYPE HTML>
<html>
  <head>
    <!--[if lt IE 9]>
  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,700|Playfair+Display:300,400,700">
    <style>
     /* general css*/
     html, body, div, span, applet, object, iframe,
     h1, h2, h3, h4, h5, h6, p, blockquote, pre,
     a, abbr, acronym, address, big, cite, code,
     del, dfn, em, img, ins, kbd, q, s, samp,
     small, strike, strong, sub, sup, tt, var,
     b, u, i, center,
     dl, dt, dd, ol, ul, li,
     fieldset, form, label, legend,
     table, caption, tbody, tfoot, thead, tr, th, td,
     article, aside, canvas, details, embed,
     figure, figcaption, footer, header, hgroup,
     menu, nav, output, ruby, section, summary,
     time, mark, audio, video {
     margin: 0;
     padding: 0;
     border: 0;
     font-size: 100%;
     font: inherit;
     vertical-align: baseline;
     }

      a {text-decoration: none;}
      header, footer {font-size: 13px;color: #ffffff;background: rgb(9,30,55) center no-repeat fixed;background-size: cover;}
      header {height: 108px;}
      header img {width: 110px;}
      footer {height: 58px;}
      footer a,a:hover{text-decoration: none; color: #ffffff}
      .container {width: 960px;width: 960px;margin:0 auto; text-align: center;}
      .centered_flex{display: flex; justify-content:center; align-items: center;}
      .flexcontainer{padding: 0;margin: 0 auto;list-style: none;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-flex-flow: row nowrap;justify-content: space-around;}
      .floatL {float: left;}
      .floatR {float: right;}
      .clearfix {clear: both;}
      .sup1{vertical-align: top;font-weight: 300;}
      .linethru{text-decoration: line-through;}
      .linebreak1 {margin-top: -2px;}
      .linebreak5 {margin-top: 5px;}
      .linebreak10 {margin-top: 10px;}
      .linebreak20 {margin-top: 20px;}
      .linebreak30 {margin-top: 30px;}
      .linebreak40 {margin-top: 40px;}
      .linebreak90 {margin-top: 90px;}
      b{font-weight: 400;}
      .lite {font-weight: 200;}
      .semibold{font-weight: 300;}
      hr{border: 0.5px solid rgb(235, 235, 235);}
      h1 {font-family: 'Playfair Display', serif; font-size: 42px;font-weight: 700;}
      h2 {font-family: 'Playfair Display', serif; font-size: 34px;font-weight: 700;}
      h3 {font-size: 29px;font-weight: 700;}
      h4 {font-size: 27px;font-weight: 300;}
      h5 {font-size: 20px;font-weight: 300;}
      h6 {font-size: 18px;font-weight: 300;}
      body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden;}
      body{text-align: center;font-family: "Montserrat",sans-serif;font-size: 18px; font-weight: 200;line-height: 24px;}

      /* css for section 1*/
      #section1 {margin-top: 30px;}
      .section1-txt {text-align: left;float: left;width: 480px;margin-left: 130px;font-size: 19px;}
      .section1-pic {float: right;width: 172px;margin-right: 150px;}
      .section1-pic-innertxt {width: 150px;font-size: 11px;line-height: 14px;text-align: left;padding-left: 12px;}
      #choosepkgs{margin-top: 30px;}
      .package{padding: 10px 40px 40px 40px;}
      .greybox{width: 260px;height: 300px;background: #eaeaea center no-repeat fixed;border: 2px solid #ababab;}
      .goldbox{width: 260px;height: 360px;background: #f0e3c7 center no-repeat fixed;border: 2px solid #dfbf78;}
      .blue-btn {width: 216px;height: 36px;border: 1px solid #000000;color: #ffffff;font-size: 21px;font-weight: 400;
         background-color: #004684; background-image: -webkit-gradient(linear, left top, left bottom, from(#004684), to(#00315C));
         background-image: -webkit-linear-gradient(top, #004684, #00315C);
         background-image: -moz-linear-gradient(top, #004684, #00315C);
         background-image: -ms-linear-gradient(top, #004684, #00315C);
         background-image: -o-linear-gradient(top, #004684, #00315C);
         background-image: linear-gradient(to bottom, #004684, #00315C);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#004684, endColorstr=#00315C);
      }
      .blue-btn:hover {
         background-color: #1478D0; background-image: -webkit-gradient(linear, left top, left bottom, from(#1478D0), to(#0f5fa6));
         background-image: -webkit-linear-gradient(top, #1478D0, #0f5fa6);
         background-image: -moz-linear-gradient(top, #1478D0, #0f5fa6);
         background-image: -ms-linear-gradient(top, #1478D0, #0f5fa6);
         background-image: -o-linear-gradient(top, #1478D0, #0f5fa6);
         background-image: linear-gradient(to bottom, #1478D0, #0f5fa6);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#1478D0, endColorstr=#0f5fa6);
         cursor: pointer;
      }
      .mostpopArrow{position: relative;top: 16px;}

      /* css for section 2*/
      .sectiondiv {padding: 40px 0px;}
      .heading {width: 240px;font-size: 30px;font-family: 'Playfair Display',serif;font-weight: 700;float: left;text-align: left;}
      .content {width: 596px;text-align: left;float: right;}
      .video_box {width: 100%;height: 336px;}
      .research_wrd{font-weight: 400;margin-left: 36px;}
      .research_wrd1{font-weight: 400;margin-left: 58px;}

      /* css for section 3*/
      .section3-heading{width: 170px;line-height: 36px;}

      /* css for section 4*/
      .section4-pic {width: 370px; float: left;}
      .section4-txt {width: 590px;text-align: left;float: right;margin-top: 140px;}
      .h1a {font-family: 'Playfair Display',serif; font-size: 38px;font-weight: 700;}
      .guarantee_pic{position: relative; top: -180px; left: 36px;}
      .gold-btn {width: 300px; height: 40px;font-size: 24px; font-weight: 400;color: #000000;
        background-color: #DFBF78; background-image: -webkit-gradient(linear, left top, left bottom, from(#DFBF78), to(#C6A96A));
        background-image: -webkit-linear-gradient(top, #DFBF78, #C6A96A);
        background-image: -moz-linear-gradient(top, #DFBF78, #C6A96A);
        background-image: -ms-linear-gradient(top, #DFBF78, #C6A96A);
        background-image: -o-linear-gradient(top, #DFBF78, #C6A96A);
        background-image: linear-gradient(to bottom, #DFBF78, #C6A96A);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#DFBF78, endColorstr=#C6A96A);
      }
      .gold-btn:hover{
        background-color: #F8D58A; background-image: -webkit-gradient(linear, left top, left bottom, from(#F8D58A), to(#c7ab6e));
        background-image: -webkit-linear-gradient(top, #F8D58A, #c7ab6e);
        background-image: -moz-linear-gradient(top, #F8D58A, #c7ab6e);
        background-image: -ms-linear-gradient(top, #F8D58A, #c7ab6e);
        background-image: -o-linear-gradient(top, #F8D58A, #c7ab6e);
        background-image: linear-gradient(to bottom, #F8D58A, #c7ab6e);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#F8D58A, endColorstr=#c7ab6e);
        cursor: pointer;
      }

      /* css for section 5*/
      .goldborder-box{height: 394px;width: 100%;border: 2px solid #dfbf78;}
      .section5-txt{font-size: 16px;font-style: italic;font-weight: 200;}
      .goldborder-box-left {width: 116px;float: left;}
      .goldborder-box-right {width: 430px; padding-right: 40px;float: right;padding-top: 50px;}
      .section5-head{font-size: 24px;font-family: 'Playfair Display',serif; font-weight: 700;
        width: 124px;height: 30px;background-color: #ffffff;position: relative;top:18px;}
      .section5-icons {margin-left: 40px; margin-top: 50px;}

      /* css for section 6*/
      .section6-heading {width: 240px; line-height: 36px;}


    </style>

  </head>
  <body>
    <header class="centered_flex">
      <div class="container">
        <img src="../img/city-beauty-logo.png" alt="citylogo" />
        <div class="linebreak1"></div>
        1-800-347-1558 • M-F: 5am-7pm PT • S-S: 6am-4:30pm PT
      </div>
    </header>

    <div class="container">
      <div id="section1">
        <h1>Special Internet Only Offer on City Lips<span class="sup1">&reg;</span></h1>
        <div class="linebreak30"></div>
        <div class="section1-txt">
          <div class="semibold">YOU’RE ABOUT TO JOIN THOUSANDS OF WOMEN WHO ENJOY PLUMP, YOUNGER-LOOKING LIPS.</div>
          <div class="linebreak10"></div>
          And to make it even easier, we're offering additional savings on multi-tube packages. This allows us to save on the cost of processing each other individually, savings that we pass on to you.
        </div>
        <div class="section1-pic">
          <img src="../img/drturk-sm.png" alt="dr turk pic" />
          <div class="section1-pic-innertxt">
            Dr. Turk is Double Board Certified by the American Board of Facial Plastic and Reconstructive Surgery and the American Board of Otolaryngology - Head and Neck Surgery.
          </div>
        </div>
        <div class="clearfix"></div>
        <div id="choosepkgs">
          <h4>CHOOSE YOUR PACKAGE</h4>
          <div class="linebreak10"></div>
          All orders are one-time purchases. We do not auto-bill your credit card.
        </div>
        <div class="mostpopArrow"><img src="../img/mostPop2.png" alt="most popular arrow" /></div>
        <div class="flexcontainer centered_flex package">
          <div class="greybox centered_flex">
            <div>
              <h2>Basic</h2>
              <div class="linebreak10"></div>
              <h6>1 TUBE OF CITY LIPS&reg;</h6>
              Retail:  &nbsp;<span class="linethru">$45</span>
              <div class="linebreak20"></div>
              <h3>Now: $35</h3>
              <div class="linebreak5"></div>
              YOU SAVE $10
              <div class="linebreak20"></div>
              + $4.95 Shipping
              <div class="linebreak5"></div>
              <a href="#"><div class="blue-btn centered_flex">GET STARTED</div></a>
            </div>
          </div>
          <div class="goldbox centered_flex">
            <div>
              <h2>Value</h2>
              <div class="linebreak30"></div>
              <h6>3 TUBES OF CITY LIPS&reg;</h6>
              Retail:  &nbsp;<span class="linethru">$135</span>
              <div class="linebreak30"></div>
              <h3>Now: $70</h3>
              <div class="linebreak5"></div>
              Only $25 Each!
              <div class="linebreak30"></div>
              + Free Shipping
              <div class="linebreak5"></div>
              <a href="#"><div class="blue-btn centered_flex">GET STARTED</div></a>
            </div>
          </div>
          <div class="greybox centered_flex">
            <div>
              <h2>Combo</h2>
              <div class="linebreak10"></div>
              <h6>2 TUBES OF CITY LIPS&reg;</h6>
              Retail:  &nbsp;<span class="linethru">$90</span>
              <div class="linebreak20"></div>
              <h3>Now: $60</h3>
              <div class="linebreak5"></div>
              Only $30 Each!
              <div class="linebreak20"></div>
              + Free Shipping
              <div class="linebreak5"></div>
              <a href="#"><div class="blue-btn centered_flex">GET STARTED</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="sectiondiv">
      <div class="container">
        <div class="heading">In the Media</div>
        <div class="content">
          <h6>ABC NEWS</h6>
          <div class="linebreak20"></div>
          <iframe class="video_box" src="https://www.youtube.com/embed/JK-0A1ILtNw" frameborder="0" allowfullscreen></iframe>
          <div class="linebreak30"></div>
          <hr>
          <div class="linebreak30"></div>
          <div class="flexcontainer">
            <div class="research_wrd">BEFORE</div>
            <div class="research_wrd1">AFTER 10 MINUTES</div>
            <div class="research_wrd">AFTER 30 DAYS</div>
          </div>
          <img class="video_box" src="../img/research_lips2.png" alt="research lips" />
          <div class="linebreak20"></div>
          <p>
            <b>GH RESEARCH INSTITUTE TEST</b> found that CITY LIPS® increased lip volume by an avarage of 3 millimeters.
            <br><br>
            A group of 15 women ages 17-40 applied City Lips® Advanced formula every night for 30 days. Instant visible results are shown after 10 minutes of application and long term results are shown after 30 days of continued use.
            Photos are all actual results.
          </p>
          <div class="linebreak30"></div>
          <hr>
          <div class="linebreak30"></div>
          <img src="../img/winslet2.png" alt="kate winslet" />
          <div class="linebreak20"></div>
            <span class="semibold">FROM GOOD HOUSEKEEPING INSTITUTE</span>
            <div class="linebreak10"></div>
            “Want lips this lush? Our testers did, so we asked them to try different treatments for a month, in hopes of releasing their inner Angelina Jolie. THE WINNERS: City Lips® clear gloss Lip Plumping Treatment created the fullest smoochers.”
            <div class="linebreak10"></div>
            <span class="semibold">- GOOD HOUSEKEEPING MAGAZINE, PAGE 45.</span>
            <div class="linebreak30"></div>
            “...The original winner. City Lips® is still champion.”
            <div class="linebreak10"></div>
            <span class="semibold">- GOOD HOUSEKEEPING</span>
          <div class="linebreak30"></div>
          <hr>
          <div class="linebreak30"></div>
          <h6>FOX 11 - LOS ANGELES</h6>
          <div class="linebreak20"></div>
          <iframe class="video_box" src="https://www.youtube.com/embed/x89HqXshZvQ" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="sectiondiv">
      <div class="container">
        <div class="heading"><div class="section3-heading">Real Stories from Recent Customers</div></div>
        <div class="content">
          <div class="cus_reviews">
            <img src="../img/stars_rating2.png"></img>
            <div class="linebreak20"></div>
            <h5>I LOVE THE PRODUCT</h5>
            <div class="linebreak10"></div>
            “I LOVE this stuff. The warm tingle (not a burning or stinging,a warm pleasant tingle) feels SO good. My lips are so soft now. Plumper as well (people have noticed and commented...someone actually asked me if I got some collagen ,LOL), but I bought it originally for the smoothing, moisturizing properties because I always thought those products were pure BS. I used it in a sample I got and woke up with much puffier lips. Awesome! I'm on my...what,fifth tube now? I love it!”
            <div class="linebreak10"></div>
            <div class="semibold">KW, Texas</div>
            <div class="linebreak30"></div>
          </div>
          <hr>
          <div class="linebreak30"></div>
          <div class="cus_reviews">
            <img src="../img/stars_rating2.png"></img>
            <div class="linebreak20"></div>
            <h5>I WOKE UP AND I SWEAR MY LIPS ARE BIGGER</h5>
            <div class="linebreak10"></div>
            “Wow, I'm impressed. My lips are actually full - not Angelina full but people always comment that they are big. 1. I can use this over/under anything. 2. I rushed to apply OVER lipstick and forgot about it until 30 min later when I felt like my lips were swollen. It worked over my lipstick! 3. I used this before bed (rubbed with my finger so it wasn't as goopy) and it did tingle more when applied directly on skin. I woke up and I swear my lips are bigger and my lips are really smooth. so we'll see what this does long-term.”
            <div class="linebreak10"></div>
            <div class="semibold">Loren, California</div>
            <div class="linebreak30"></div>
          </div>
          <hr>
          <div class="linebreak30"></div>
          <div class="cus_reviews">
            <img src="../img/stars_rating2.png"></img>
            <div class="linebreak20"></div>
            <h5>I LOVE THE PRODUCT</h5>
            <div class="linebreak10"></div>
            “All I ask of a beauty product is that it lives up to advertising claims. City Lips® Advanced Formula lip plumper does what it's supposed to do. It's also the best available lip moisturizer. Even in the dryest desert weather, one coat at night keeps lips from drying until morning. And the customer service at City Lips is the best around!”
            <div class="linebreak10"></div>
            <div class="semibold">Jill, Connecticut</div>
            <div class="linebreak30"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="section4">
      <div class="container">
        <div class="section4-pic">
          <img class="guarantee_pic" src="../img/60days2.png" alt="60 days guarantee" />
          <img src="../img/lips-clear.png" alt="clear lip" />
        </div>
        <div class="section4-txt">
          <div class="h1a">Try City Lips<span class="sup1">&reg;</span> Risk-Free</div>
          <div class="linebreak20"></div>
          <h6>60 DAY MONEY BACK GUARANTEE</h6>
          <div class="linebreak30"></div>
          <a href="#choosepkgs"><div class="gold-btn centered_flex">ORDER NOW</div></a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="sectiondiv">
      <div class="container">
        <div class="heading"><div class="section6-heading">The City Lips<span class="sup1">&reg;</span> Challenge</div></div>
        <div class="content">
          Results from our test group showed that using City Lips for 30 days resulted in an average increase in lip volume by 3mm.
          <div class="linebreak10"></div>
          <h5>WE WANT YOU TO EXPERIENCE IT FOR YOURSELF.</h5>
          <div class="linebreak10"></div>
          <div class="section5-head">So try this</div>
          <div class="goldborder-box">
            <div class="goldborder-box-left">
              <img class="section5-icons" src="../img/group-5-icons2.png" alt="icons" />
            </div>
            <div class="goldborder-box-right">
              <span class="semibold">TAKE OUT YOUR PHONE AND SNAP A PICTURE OF YOUR LIPS AS IT IS RIGHT NOW</span>. This is will be your "before" picture.
              <div class="linebreak40"></div>
              <span class="semibold">THEN, WHEN YOUR ORDER ARRIVES, USE CITY LIPS&reg; EVERY NIGHT</span> - and as often as you like throughout the day - for 30 days.
              <div class="linebreak40"></div>
              <span class="semibold">AFTER 30 DAYS, TAKE AN "AFTER" PHOTO AND SEND IT IN!</span> We'd love to see you enjoying your naturally fuller lips!
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
          <div class="linebreak20"></div>
          <div class="section5-txt">However, if you don't notice smoother, softer, fuller lips...and if you don't think it's the best lip treatment ever...send back the unused portion and we'll refund every penny.</div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="sectiondiv">
      <div class="container">
        <div class="heading"><div class="section3-heading">100% Money Back Guarantee</div></div>
        <div class="content">
          <img src="../img/60days2.png" alt="60 days guarantee" />
          <div class="linebreak30"></div>
          <h6>THIS COULD BE THE BEST INVESTMENT YOU MAKE FOR YOUR LIPS AND WE WANT TO MAKE THE DECISION EASY FOR YOU.</h6>
          <div class="linebreak10"></div>
          You have 60 days to try City Lips® and see the results for yourself. If you are not 100% satisfied, If you do not experience fuller, healthier, younger looking lips, simply contact us and we will gladly refund your money. No questions asked.
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="sectiondiv">
      <div class="container">
        <div class="heading"><div class="section6-heading">Frequently Asked Questions</div></div>
        <div class="content">
          <div class="faq">
            <h5>WHICH ORDER OPTIONS IS RIGHT FOR ME?</h5>
            <div class="linebreak10"></div>
            Many of our returning customers appreciate the 3-pack because it offers the best value. And we're happy to do it because it saves us the cost of processing individual units. If you just want to try 1 tube, we've already reduced the price far below original retail. So you can't go wrong with any of the options. And I just know that you'll fall in love with your new lips either way.
            <div class="linebreak30"></div>
            <hr>
            <div class="linebreak30"></div>
            <h5>WHEN CAN I EXPECT MY ORDER TO ARRIVE?</h5>
            <div class="linebreak10"></div>
            We know you can't wait to start trying City Lips® and experiencing the amazing difference for yourself. That's why our shipping department is operational 7 days a week. That way, your order leaves our facilities within 24-hours. Transit usually takes 3-5 business days depending on what part of the country you're in.
            <div class="linebreak30"></div>
            <hr>
            <div class="linebreak30"></div>
            <h5>IS MY INFORMATION SAFE?</h5>
            <div class="linebreak10"></div>
            We take your privacy very seriously. That's why we use a variety of security measures to maintain the safety of your personal information.
            <div class="linebreak10"></div>
            When you place an order or access your personal information, everything goes through a secure server. All of your personal information, including credit card number, name, and address, is transmitted via Secure Socket Layer (SSL) technology — the industry standard for secure online transactions.
            <div class="linebreak10"></div>
            If you would rather not shop online, you can place your order over the phone by calling us at 1-800 347-1558.
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
    <div class="section4">
      <div class="container">
        <div class="section4-pic">
          <img class="guarantee_pic" src="../img/60days2.png" alt="60 days guarantee" />
          <img src="../img/lips-clear.png" alt="clear lip" />
        </div>
        <div class="section4-txt">
          <div class="h1a">Try City Lips<span class="sup1">&reg;</span> Risk-Free</div>
          <div class="linebreak20"></div>
          <h6>60 DAY MONEY BACK GUARANTEE</h6>
          <div class="linebreak30"></div>
          <a href="#choosepkgs"><div class="gold-btn centered_flex">ORDER NOW</div></a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <footer class="centered_flex">
     <div class="container">
       <div class="floatL">
         <p>&copy; City Cosmetics 2017. City Lips is a registered trademark of City Cosmetics, LLC. All rights reserved.</p>
       </div>
       <div class="floatR">
         <p><a href="https://www.citybeauty.com/privacy.php">PRIVACY POLICY</a> &nbsp;|&nbsp; <a href="https://www.citybeauty.com/terms.php">TERMS &amp; CONDITIONS</a></p>
       </div>
       <div class="clearfix"></div>
     </div>
   </footer>


  </body>
</html>
