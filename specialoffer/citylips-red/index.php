<?php include("../inc/helpers.php"); ?>
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style-skyline.css">
<link rel="stylesheet" type="text/css" href="css/chosen.css">
<link rel="stylesheet" type="text/css" href="css/style_white.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link href="http://citycosmetics.com/css2/bootstrap.min.css" rel="stylesheet">
    <link href="http://citycosmetics.com/css2/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- link and script section-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script type="text/javascript">
   $(document).ready(function() {
        $('#showfaq1').click(function() {
                $('.answer1').slideToggle("slow");
        });

        $('#showfaq2').click(function() {
                $('.answer2').slideToggle("slow");
        });

        $('#showfaq3').click(function() {
                $('.answer3').slideToggle("slow");
        });

        $('#showfaq4').click(function() {
                $('.answer4').slideToggle("slow");
        });
        $('#showfaq5').click(function() {
                $('.answer5').slideToggle("slow");
        });
        $('#showfaq6').click(function() {
                $('.answer6').slideToggle("slow");
        });

        $('#showfaq7').click(function() {
                $('.answer7').slideToggle("slow");
        });

        $('#showfaq8').click(function() {
                $('.answer8').slideToggle("slow");
        });

        $('#showfaq9').click(function() {
                $('.answer9').slideToggle("slow");
        });

        $('#showfaq10').click(function() {
                $('.answer10').slideToggle("slow");
        });
        $('#showfaq11').click(function() {
                $('.answer11').slideToggle("slow");
        });
        $('#showfaq12').click(function() {
                $('.answer12').slideToggle("slow");
        });
         $('#showfaq13').click(function() {
                $('.answer13').slideToggle("slow");
        });
          $('#showfaq14').click(function() {
                $('.answer14').slideToggle("slow");
        });
            $('#showfaq15').click(function() {
                $('.answer15').slideToggle("slow");
        });

            $('#showfaq16').click(function() {
                $('.answer16').slideToggle("slow");
        });

 $("#addToCart").click(function(e){
        e.preventDefault();
        var url = $(".chosen-select").val();
        if(url==null){
            alert("Please selected a buying option.");
        }
        else{
            window.location = url;
        }
    });

  $("#addToCart2").click(function(e){
        e.preventDefault();
        var url = $(".chosen-select").val();
        if(url==null){
            alert("Please selected a buying option.");
        }
        else{
            window.location = url;
        }
    });
    });


  </script>
  <script type="text/javascript" src="js/chosen.jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/fonts.css">
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/expandable.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".question").expandable();
});
</script>

<style type="text/css">
.arrow {
    display: inline-block;
    position: relative;
    text-indent: -9999px;
    width: 292px;
    height: 156px;
 background: url("http://www.citylips.com/promo/graphics/sprite.png") no-repeat;
}
.arrow span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
 background: url("http://www.citylips.com/promo/graphics/sprite.png") no-repeat;
    background-position: -50px 0;
    opacity: 0;
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    -o-transition: opacity 0.5s;
}
.arrow:hover span {
    opacity: 1;
}
.arrow2 {
    display: inline-block;
    position: relative;
    text-indent: -9999px;
    width: 36px;
    height: 36px;
    background: url(sprites.png) no-repeat;
}
.arrow2:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: url(sprites.png) no-repeat;
    background-position: -50px 0;
    opacity: 0;
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    -o-transition: opacity 0.5s;
}
.arrow2:hover:after {
    opacity: 1;
}
.arrow3 {
    display: inline-block;
    position: relative;
    text-indent: -9999px;
    width: 292px;
    height: 156px;
 background: url("http://www.citylips.com/promo/graphics/sprite.png") no-repeat;
}
.arrow3 span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
 background: url("http://www.citylips.com/promo/graphics/sprite.png") no-repeat;
    background-position: -292px 0;
}
.centered_flex{display: flex;justify-content:center;align-items: center; }
#header{background: rgb(9,30,55) center no-repeat fixed;margin: 0 auto;background-size: 100% 100%; background-size: cover;}
#header img {width: 120px;}
footer{height: 94px;color: rgb(255,255,255);font-size: 13px; font-weight: 300; line-height: 1;border-top:8px solid #E9CD44;
  background: rgb(9,30,55) center no-repeat fixed;margin: 0 auto;background-size: cover;text-align: center;}
footer a, footer a:hover{text-decoration: none; color: #ffffff;}
footer img {max-width: none;}
.cruel-free {width: 130px;height: 32px;margin-left: -12px;}
/*social network icon */
.social-wrap{list-style: none;display: -webkit-box; display: -moz-box; display: -ms-flexbox; display: -webkit-flex; display: flex; -webkit-flex-flow: row nowrap; justify-content:space-between; margin-left: 24px;}
.social-item {width: 20px; height: 20px;margin-left: 4px;}
.linebreak3 {margin-top: 30px;}

/*handle responsive for different screens*/
@media screen and (max-width:1199px) {
 .social-wrap{margin:0;display: block;}
 .cruel-free{margin-left: 0;margin-top: 5px;}
 footer {height: 130px;}
}

</style>

<script>
        $(function() {
            $(".arrow3")
            .find("span")
            .hide()
            .end()
            .hover(function() {
                $(this).find("span").stop(true, true).fadeIn();
            }, function() {
                $(this).find("span").stop(true, true).fadeOut();
            });
        });
    </script>
<title>City Cosmetics | 3 for 1 City Lips</title>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/inc/piwik.php";
   include_once($path);
?>


</head>
<body>



 <div id="header">
	<img src="http://citybeauty.com/img/city-beauty-logo.png" align="City Beauty">
</div>

<div id="banner">
     <a href="http://citycosmetics.com/cmd.php?pid=a3737c5e2edb4e0da4680952d5337581"> <img align="middle" src="images/CC-Sexy.jpg" alt="3 for the price of 1 City Lips" border="0" style="width: 100%;"></a>
</div>
<!--  <div  class="offer">
    <div class="inner">
        <div id="col-1">
            <span style="color:white; font-size: 38px; font-family: Gotham; text-transform: uppercase;" id="col-1-top">City</span><br>
            <span style="color:white;" id="col-1-mid">Insider</span><br>
            <span style="color:white;" id="col-1-bot">Bonus</span>
        </div>
        <div style="color:white;line-height: 28px;" id="col-2">
            We'd like to offer you
            <br><b>15% off</b> your first order!
        </div>
        <div id="col-3">
             <span style="color:white;" id="col-3-top">$34.00</span><br>
            <span style="color:white;" id="col-3-bot">(Value $40.00)</span>
        </div>
        <a id="button" href="http://citylips.com/cmd.php?pid=daeab5e129d0448cb55a2bf0827b9c52">Buy Now</a>
    </div>
</div>
-->
<div id="wrapper">

<div class="fullcell">

<center><hr /></center>

                  <div class="cell">
                        <div id="stat"><center>


                                  <b class="pink" style="font-size: 35px;">Quick Results</b></p><br />
                                  <p style="color: black; line-height: 30px;"><span style="font-size:16px">The Good Housekeeping Institute found that...</span><br />
                City Lips can <strong>plump</strong> lips by <br />up to 3mm<br />
                  <b class="pink" style="font-size: 35px;">in just 10 minutes!</b></p></p>
                                  </div>
                                  </div>

                                <div class="cell">
                                  <div id="stat" style="float: right;"><center>

                                 <b class="pink" style="font-size: 35px;">Long-Lasting Effect</b></p><br />
                                  <p style="color: black; line-height: 30px;">...with up to a 40% increase in <strong>volume</strong><br />
                                  <b class="pink" style="font-size: 35px;">in just 29 days!</b><sup>[<a href="http://citycosmetics.com/citylips/theClearChoice/clinicals/Maxilip_PromotionalSheet_USA.pdf" target="blank">study</a>]</sup></p><br />

                                   </div>




                              </div>
                              <div class="clear"></div>
 <center><hr /></center>
                           <div class="clear"></div>   <center><p>As Seen on:<br /><img src="images/thedoctors.png" width="40%"></p></center>

              </div>

                  <div class="clear"></div>
              </center></div>




              <div class="clear"></div>




        </div>

    <div id="clinicals">

                          <div class="item">
                            <img src="images/Can-City-Lips-Really_d51310.jpg" alt="Can City Lips Really Give You Younger, Healthier Lips in 10 minutes?" />
                              <img src="images/Can-City-Lips-d51310.jpg" style="margin-left: 15px;" alt="Can City Lips Really Give You Younger, Healthier Lips in 10 minutes?" />
                              <center><caption style="padding-top: 10px;">Results obtained by the Good Housekeeping Institute. Individual results may vary.</caption></center>
                              <div style="width:292px;height:156px;position:relative;top: -180px;"> <a class="arrow3" href="#"><span style="display: none;">Arrow</span></a> </div>

                  </div>


    <div id="ghk">
          <h1>Two-Time Winner of the Good Housekeeping Award</h1>
          <table width="100%" cellpadding="5" border="0">
                            <tbody><tr>
                              <td><img width="151" height="200" alt="Good Housekeeping test CityLips collagen  Lip plumping treatment" src="http://citycosmetics.com/graphics/good_house_keeping.jpg"></td>
                              <td><p align="left"><span style="color:#gray;font-size: 18px;font-weight: bold;">FROM THE GOOD HOUSEKEEPING INSTITUTE:</p></span>
                                <p align="left"><span class="quote">"Want lips this lush? Our testers did, so we asked them to try different treatments for a month, in hopes of releasing their inner Angelina Jolie. THE WINNERS: City Lips clear gloss Lip Plumping Treatment created the fullest smoochers. <br>
                                </span><span class="quote"><i>-Good Housekeeping Magazine, Page 45.</i></span></p>
                                <p align="left" class="quote">"...The original winner. City Lips is still champion."<br>
                                  <i>-Good Housekeeping</i></p></td>
                            </tr>
                          </tbody></table>

</div>
        <div class="clear"></div>


  <div id="celebs" style="margin: 30px auto 0 auto; width: 960px;">
                  <center><h1>Celebrities Love City Lips</h1></center>
                       <img src="images/magfeature_d51310.jpg" alt="City Lips: The Secret Behind the Kardashians' Full Lips"/>
<img alt="Celebrities Love City Lips" src="images/celebslovecity_d51310.jpg" width="100%" styLe="padding-top:40px;margin: 0 auto;">

<!--  <div class="celebrity"><div id="col-1">
                            <img src="images/CC-testimonial-jen.jpg" alt="Jennifer O'Dell,Film and Television Actress" />
                          </div>
                          <div id="col-2">
                            <span style="color: #da1d7b;font-size: 18px;font-weight: bold">Jennifer O'Dell,</span> <span style="color: #747474; font-size: 18px;"><br />Film and Television Actress</span>
                          </div>
                          <div id="col-3"><span style="color:#da1d7b;"><strong>&ldquo;</strong></span>City Lips is the only lip plumper I trust to keep my lips perfectly plumped and moisturized ALL day.<span style="color:#da1d7b;"><strong>&rdquo;</strong></span></div>
                          <div id="row2"><p>As a film and television actress, I've always felt pressure to have perfect and beautiful lips. For years I struggled to find a lip plumper that actually worked for me. I am so happy I tried City Lips! This plumper not only gives me the best plump, but lasts much longer and has a nice tingle instead of a painful sting like other plumpers. <strong>City Lips is the only lip plumper I trust to keep my lips perfectly plumped and moisturized ALL day.</strong> Thank you City Lips!</p>

                          </div>
                      </div>

                        <div class="celebrity">
                          <div id="col-1">
                              <img src="images/CC-testimonial-alanna.jpg" alt="Alanna Ubach, Legally Blonde" />
                          </div>
                          <div id="col-2">
                              <span style="color:#da1d7b;font-size: 18px;font-weight: bold;">Alanna Ubach,</span> <span style="color: #747474; font-size: 18px;"><br />Legally Blonde</span>
                          </div>
                          <div id="col-3"><span style="color:#da1d7b;"><strong>&ldquo;</strong></span>I'm as kissable as the day is new!<span style="color:#da1d7b;"><strong>&rdquo;</strong></span></div>
                          <div id="row2"><p>I've been using City Lips at night before I go to bed and each morning when I wake up and it's fantastic...and moisturizing as well! I'm as kissable as the day is new!"</p>

                          </div>

                      </div>


                  </div> -->
</div>


        <div class="clear"></div>
    <div id="compare">

    <table cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td width="290" scope="col"><img align="middle" style="padding-left: 10px;" src="images/Can-City-Lips-Really_blue3.jpg" alt="Everyone Will See the Difference!"></td>
            <td scope="col" class="product"><img alt="City Lips" src="images/compcitylips.png"></td>
            <td scope="col" class="product"><img alt="Dior" src="images/compdior.jpg"></td>
            <td scope="col" class="product"><img alt="Soap &amp; Glory" src="images/compsmf.jpg"></td>

          </tr>
          <tr>
            <th>&nbsp;</th>
            <th class="cc">City lips</th>
            <th>Dior Addict Lip </th>
            <th>Soap &amp; Glory</th>

          </tr>
          <tr class="row-a">
            <td class="left">Formulated to Give Lips a Plumper Appearance</td>
            <td><span class="product"><img alt="check" src="images/check.png"></span></td>
            <td><span class="product"><img alt="x" src="images/check.png"></span></td>
            <td><span class="product"><img alt="check" src="images/check.png"></span></td>

          </tr>
          <tr class="row-b">
            <td class="left">Uses the Ingredient MaxiLip&trade;</td>
            <td><span class="product"><img alt="check" src="images/check.png" /></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>

          </tr>
          <tr class="row-a">
            <td class="left">Contains Plumping Spheres</td>
            <td><span class="product"><img alt="check" src="images/check.png"></span></td>
            <td><span class="product"><img alt="check" src="images/check-w.png"></span></td>
            <td><span class="product"><img alt="check" src="images/check-w.png"></span></td>

          </tr>
          <tr class="row-b">
            <td class="left">Won Good Housekeeping Award</td>
            <td><span class="product"><img alt="check" src="images/check.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>
             </tr>
          <tr class="row-a">
            <td class="left">Comes in 8 Attractive Shades</td>
            <td><span class="product"><img alt="check" src="images/check.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>

          </tr>
          <tr class="row-b">
            <td class="left">60-Day Money-Back Guarantee</td>
            <td><span class="product"><img alt="check" src="images/check.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>
            <td><span class="product"><img alt="x" src="images/x.png"></span></td>

          </tr>

        </tbody></table>
    </div>

<div style="width: 960px; margin: 0 auto;"><br>
<h1>City Lips FAQS</h1>

    <div>
<p>Click on a question to reveal the answer.</p>
    </div>


<div id="showfaq1">Q. What is City Lips?</div>
<div class="answer1" style="display:none;">
    <p>City Lips is an advanced lip treatment that gives lips a fuller, more defined look while hydrating and encouraging the collagen synthesis that can help lips stay fuller long-term. City Lips works safely, painlessly and without irritation or numbness, and can even diminish the appearance of fine lines and wrinkles!</p></div>

  <!--  <div id="showfaq2">Q. Does it Really Work?</div>
<div class="answer2" style="display:none;">
    <p>Yes! In fact, in 2004 AND 2007, the Good Housekeeping Institute conducted different lip plumper tests. City Lips was declared the best and most effective lip plumper on the market both times!
</p><p>
City Lips utilizes cutting-edge beauty technology and exclusive ingredients to give you beautifully fuller-looking lips. It helps stimulate your own natural collagen production to beautify your lips from the inside out. It also helps reduce the breakdown of collagen to help lips stay fuller, longer.
</p></div>

     <div id="showfaq3">Q. How does it work?</div>
<div class="answer3" style="display:none;">
    <p>City Lips uses Hyaluronic Acid, known as nature's "moisture magnet" to attract and store several times its weight in water, giving you lips that look fuller and feel smoother. It also contains Oligopeptides, which help stimulate natural collagen and elastin production, and Celadrin which can help reduce the breakdown of your newly formed collagen. This lets your body store collagen long-term - meaning you can get gorgeous lips that last!</p></div>

    <div id="showfaq4">Q. Does it burn?</div>
<div class="answer4" style="display:none;">
    <p>No! Unlike other products on the market, City Lips does not work by irritating the skin around the lips. While some plumpers use irritants that hurt and can make your lips red, flakey and dry, City Lips works to increase the collagen in your lips so that they plump from the inside out. City Lips contains no harsh or drying irritants.</p></div>

   <!-- <div id="showfaq5">Q. How quickly does it take to see results?</div>
<div class="answer5" style="display:none;">
    <p>Visible results are apparent within minutes of application! Once you apply City Lips, your lips will begin to swell and continue to get fuller as time passes.</p><p>
For optimum results, apply it every night before bedtime. Plumping results are increased by continuous use.</p></div>

  <div id="showfaq6">Q. How long do the results last?</div>
<div class="answer6" style="display:none;">
    <p>The average "instant" lip plump will last four to six hours, but with frequent use City Lips provides long term and continuous results. As the hyaluronic acid binds to your skin's natural moisture it continues to attract and store several times its weight in water, keeping your skin at its optimum level of repair and encouraging collagen production. Then the ingredient Celadrin prevents the breakdown of that newly formed collagen, keeping your lips full and healthy for longer!</p></div>
-->
    <div id="showfaq7">Q. Will it dry out my lips?</div>
<div class="answer7" style="display:none;">
    <p>No! Quite the opposite, in fact! The Hyaluronic Acid in City Lips works to attract your skin's natural moisture, which in turn leaves your lips incredibly hydrated throughout the day.</p></div>

    <div id="showfaq8">Q. How long does one tube last?</div>
<div class="answer8" style="display:none;">
    <p>Using City Lips 2 to 3 times a day AS WELL AS applying it at night before bedtime, the tube lasts from 4 to 6 weeks.</p></div>

   <!-- <div id="showfaq9">Q. Does it expire?</div>
<div class="answer9" style="display:none;">
    <p>No!</p></div> -->

     <div id="showfaq10">Q. Can I wear it with other lipsticks?</div>
<div class="answer10" style="display:none;">
    <p>Absolutely! Once you apply City Lips you only need to wait 2 to 3 minutes before putting on your favorite lipstick.</p></div>

     <div id="showfaq11">Q. Does it come in other colors?</div>
<div class="answer11" style="display:none;">
    <p>    Not just any colors, beautiful colors! You can try them out in beiges, pinks, nudes and corals and pick your favorites! They work just as effectively as our Advanced Clear to give the appearance of fuller, smoother lips.</p><p>But if you have a color you'd like to see then let us know!</p></div>

     <div id="showfaq12">Q. Why is it better than lip injections?</div>
<div class="answer12" style="display:none;">
    <p>Easy! Lip injections are painful and can leave you looking swollen and fake. They often bruise and irritate the skin around your lips, and can even make parts of your lips look different sizes! City Lips safely and painlessly helps to stimulate your own natural collagen production for beautiful, fuller-looking lips.</p></div>

    <div id="showfaq13">Q. What IS hyaluronic acid?</div>
<div class="answer13" style="display:none;">
    <p>Hyaluronic acid is a compound which is naturally found in the human body. With its ability to hold several times its own weight in water, it is one of the most effective natural moisturizers. It also contributes to skin elastiCity and stimulates the growth of new and healthy cells. In City Lips, it contributes to the visible plumping effect that happens on application as well as supporting the formation and maintenance of collagen.</p></div>

    <div id="showfaq14">Q. How do you use City Lips?</div>
<div class="answer14" style="display:none;">
    <p>In City Lips, it contributes to the visible plumping effect that happens </p></div>

    <div id="showfaq15">Q. Can I use clear and a color?</div>
<div class="answer15" style="display:none;">
    <p>You sure can, but you don't need to! Our City Lips Advanced formula COLORS work just as well as the original clear! What we would recommend is to use a color during the day, and the clear at night before bed.</p></div>

        <div id="showfaq16">Q. How will City Lips affect my lipstick?</div>
<div class="answer16" style="display:none;">
    <p>I'm so glad you asked! In fact, City Lips will extend the longevity of your lipstick! That's because it acts as a sealant… Underneath your lipstick it will help lock in the shade, and if you use it on top, it creates a barrier that protects your color.</p></div>

</div>

<div style="width: 960px; margin: 0 auto;">
        <h1>Product Highlights</h1>
                <p>
</p><ul>
  <li>Gives lips a plumper, younger, more defined look</li>
  <li>Hydrates lips for a softer feel</li>
  <li>Supports new collagen development</li>
  <li>Diminishes the appearance of fine lines and wrinkles</li>
  <li>Works safely without irritation or numbness</li>

</ul>

                <p></p>
        </div>

<div style="width: 960px;margin: 0 auto;">
        <h1>Directions</h1>
                <p>City Lips is easy to use! For fuller, plumper lips, apply an even coat of City Lips and wait approximately 10 minutes. You can also add City Lips over any lipstick for a boost of shine and fullness. For long term results, we recommend to apply City Lips each night before bed.</p>
        </div>

        <div style="width: 960px;margin: 0 auto;">
        <h1>Full Ingredients</h1>
               <h2 style="font-size: 20px"> Holly</h2> <p>Hydrogenated Polyisobutene, VP/Hexadecene Copolymer, Phenyl Trimethicone, Ethylhexyl Palmitate,Hydrogenated Polyisobutene, PPG-51/SMDI Copolymer, Silica, Petrolatum, C12-15 Alkyl Benzoate, Dipalmitoyl Hydroxyproline, Microcrystalline Wax, Tribehenin, Glycerin, Octyldodecyl PCA, Tetrahexyldecyl Ascorbate, Caprylic/Capric Triglyceride, Water, Caprylyl Glycol, Benzyl Nicotinate, Flavor, Cetyl Tallowate, O-Cymen-5-OL, Silica Dimethyl Silylate, Simmondsia Chinensis (Jojoba) Seed oil, Sorbitan Isostearate, Sucrose Distearate, Hydrogenated Vegetable Oil, Ceramide 2, PEG-10 Phytosterol, Sodium Cocoyl Amino Acids, Butylene Glycol, Sodium Saccharin, Sarcosine, Crithmum Maritimum Extract, Magnesium Aspartate, Potassium Aspartate, Sodium Hyaluronate, Palmitoyl Hexapeptide-12, Citrus Grandis (Grapefruit) Peel Oil, Cananga Odorata Flower Oil, Citrus Aurantium Bergamia (Bergamot) Fruit Oil, Palmitoyl Oligopeptide, Glycine Soja (Soybean) Oil, Stearyl, Glycyrrhetinate, Mica, Titanium Dioxide, Synthetic Fluorphlogopite, Iron Oxide, Silica, Calcium Aluminum Borosilicate, Red 40 Lake, Synthetic Wax, Calcium Sodium Borosilicate, Red 7 Lake, Red 27 Lake, Carmine, Tin Oxide, Hydrogenated Polyisobutene, Yellow 5 Lake, Triethoxycaprylylsilane, Isopropyl Titanium Triisostearate</p><br />
                    <h2 style="font-size: 20px"> Clear</h2><p>Hydrogenated Polyisobutene, VP/Hexadecene Copolymer, Phenyl Trimethicone, Ethylhexyl Palmitate, Hydrogenated Polyisobutene, PPG-51/SMDI Copolymer, Silica, Petrolatum, C12-15 Alkyl Benzoate, Dipalmitoyl Hydroxyproline, Microcrystalline Wax, Tribehenin, Glycerin, Octyldodecyl PCA, Tetrahexyldecyl Ascorbate, Caprylic/Capric Triglyceride, Water, Caprylyl Glycol, Benzyl Nicotinate, Flavor, Cetyl Tallowate, O-Cymen-5-OL, Silica Dimethyl Silylate, Simmondsia Chinensis (Jojoba) Seed oil, Sorbitan Isostearate, Sucrose Distearate, Hydrogenated Vegetable Oil, Ceramide 2, PEG-10 Phytosterol, Sodium Cocoyl Amino Acids, Butylene Glycol, Sodium Saccharin, Sarcosine, Crithmum Maritimum Extract, Magnesium Aspartate, Potassium Aspartate, Sodium Hyaluronate, Palmitoyl Hexapeptide-12, Citrus Grandis (Grapefruit) Peel Oil, Cananga Odorata Flower Oil, Citrus Aurantium Bergamia (Bergamot) Fruit Oil, Palmitoyl Oligopeptide, Glycine Soja (Soybean) Oil, Stearyl Glycyrrhetinate
</p>
        </div>


<div class="offer">
    <div class="inner">
        <div id="col-1">
            <span id="col-1-top" class="pink" style="font-size: 38px; font-family: Gotham; text-transform: uppercase;">City</span><br>
            <span id="col-1-mid" class="pink">Insider</span><br>
            <span id="col-1-bot" class="pink">Bonus</span>
        </div>
        <div id="col-2" style="line-height: 28px;">
            We'd like to offer you
            <br>
            <b>2</b> City Lips!
        </div>
        <div id="col-3">
             <span id="col-3-top"><strong>$29.99</strong></span><br>
            <span id="col-3-bot">(Value $75.00)</span>
        </div>
        <a href="http://citycosmetics.com/cmd.php?pid=a3737c5e2edb4e0da4680952d5337581"><img src="images/btn_addtocart_d51310.png" style="margin: 20px 10px 0 0 ; float: right;"></a>
     </div>   <div class="clear"></div>
   <hr style="width: 960px; margin: 0 auto;">
</div>


<div id="guarantee-section">
        <img alt="60-Day Money-Back Guarantee" id="seal" src="images/guarantee.png">
        <div id="guarantee-section-right">
            <h1 class="pink">60 Day Money Back Guarantee</h1>
            <p><i>Our industry best 60 Day Money Back Guarantee states that either you're 100% satisfied, or your money back -- it really is that simple. And we're giving you 60 days to test-drive our products and premium level of service to prove it to you! Our customer service team is here for you. If there is anything we can do, please call us at 1-800-347-1558 and we will ensure you are taken care of immediately.</i></p>
        </div>

    </div>
 <table width="85%" cellspacing="0" cellpadding="0" border="0" align="center">
  <tbody><tr>
    <td><div class="description"></div></td>
  </tr>
  <tr>
    <td>

                <table cellspacing="0" cellpadding="3" border="0" align="center">
  <tbody><tr>
    <td align="center" colspan="4"><a oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow" href="http://secure.trust-guard.com/security/8940" name="trustlink"><img src="http://dw26xg4lubooo.cloudfront.net/seals/logo/8940-lg.gif" style="border: 0;" alt="Security Seals" name="trustseal"></a></td>
    </tr>
  <tr>
    <td><a oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow" href="http://secure.trust-guard.com/business/8940" name="trustlink"><img src="http://dw26xg4lubooo.cloudfront.net/seals/business/8940-large.gif" style="border: 0;" alt="Business Seals" name="trustseal"></a></td>
    <td><a oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow" href="http://secure.trust-guard.com/privacy/8940" name="trustlink"><img src="http://dw26xg4lubooo.cloudfront.net/seals/privacy/8940-large.gif" style="border: 0;" alt="Privacy Seals" name="trustseal"></a></td>
    <td><a oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow" href="http://secure.trust-guard.com/security/8940" name="trustlink"><img src="http://dw26xg4lubooo.cloudfront.net/seals/security/8940-large.gif" style="border: 0;" alt="Security Seals" name="trustseal"></a></td>
    <td><a oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow" href="http://secure.trust-guard.com/certified/8940" name="trustlink"><img src="http://dw26xg4lubooo.cloudfront.net/seals/certified/8940-large.gif" style="border: 0;" alt="Certified Seal" name="trustseal"></a></td>
  </tr>
</tbody></table>
    </td>
  </tr>
  <tr>
    <td><div class="description"></div></td>
  </tr>
</tbody></table>
</div>
<div class="linebreak3"></div>
<!-- footer -->
<footer class="centered_flex">
 <div class="container">
   <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
      <p>&copy; City Beauty LLC <script type="text/javascript">
      now = new Date
      theYear=now.getFullYear()
      document.write(theYear)
      </script>. City Lips&reg; and City Lash&reg; are registered trademarks of City Beauty, LLC. All rights reserved.</p>
    </div>
    <div class="col-lg-4 col-md-12 ol-sm-12 col-xs-12">
      <p><a href="privacy.php">PRIVACY POLICY</a> &nbsp|&nbsp <a href="terms.php">TERMS &amp; CONDITIONS</a></p>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="row">
    <div class="col-lg-1 col-md-12">
      <div class="social-wrap">
        <a href="https://www.facebook.com/City-Cosmetics-1431625556919604/"><img class="social-item" src="../../img/icon_facebook.png" alt="facebook"></a>
        <a href="https://www.instagram.com/citycosmetics/"><img class="social-item" src="../../img/icon_instagram.png" alt="instagram"></a>
        <a href="https://twitter.com/CityBeautyLLC"><img class="social-item" src="../../img/icon_twitter.png" alt="twitter"></a>
        <a href="https://www.pinterest.com/citybeautyllc/"><img class="social-item" src="../../img/icon_pinterest.png" alt="pinterest"></a>
      </div>
    </div>
    <div class="col-lg-1 col-lg-offset-9 col-md-12 col-md-offset-0">
      <img class="cruel-free" src="../../img/cruelty-free.png" alt="cruel-free">
    </div>
    <div class="clearfix"></div>
  </div>
 </div>
</footer>

<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0010/6566.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
</body>
</html>
