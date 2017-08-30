<!DOCTYPE HTML>
<html>
  <head>

    <!--[if lt IE 9]>
  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Test Page</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i">

    <!-- main css-->
  <style type="text/css">

  /* http://meyerweb.com/eric/tools/css/reset/
 v2.0 | 20110126
 License: none (public domain)
*/

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
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
display: block;
}

ol, ul {
list-style: none;
}
blockquote, q {
quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
content: '';
content: none;
}
table {
border-collapse: collapse;
border-spacing: 0;
}

*, *:before, *:after {
  box-sizing: inherit;
}
a {
    text-decoration: none;
}

*{
  margin:0 auto;
}

.container {
  width: 960px;
  margin: 0 auto;
  background-size: 100% auto;
  min-width: 20%;
  background-size: cover;
  margin-left: auto;
  margin-right: auto;
}

  html {
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    margin:0px;
    padding:0px;
    overflow-x: hidden;
  }
  body{
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    line-height: 1.5;
    text-align: center;
    width: 100%;
    height: 100%;
    margin:0px;
    padding:0px;
    overflow-x: hidden;
  }

  .bottomMenu {
    display: none;
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px;
    border-top: 1px solid #000;
    background: red;
    z-index: 1;
}

.white-wrapper {
  padding: 0px 30px;
}

div.white-wrapper div.row:nth-child(1) {
	background: #091E37;height:84px;
  	display: flex;justify-content:center;align-items: center;
    margin-left:-30px;
    margin-right:-30px;
}

section.checkout-main div.row:nth-child(1) {
	background: #091E37;height:84px;
  	display: flex;justify-content:center;align-items: center;
    margin-left:-30px;
    margin-right:-30px;
}

body {height: 1600px;}
  </style>
  </head>
  <body>

    <div class="{{ column_width }}">
        <div style="color:white;text-align:right;">2017 &copy; City Beauty LLC. City Lips&reg; is a registered trademark of City Beauty LLC. All rights reserved.</div>

        <div style="width:150px;float:right;"><img src="https://cdn.shopify.com/s/files/1/2134/3449/files/Screen_Shot_2017-08-24_at_1.49.48_PM.png?2940476521925990774"></div>
        <div style="clear:both;"></div>
      </div>

      https://cdn.shopify.com/s/files/1/2134/3449/files/usa-flag.png?4415794588297470868
      https://cdn.shopify.com/s/files/1/2134/3449/files/cruelty-free.png?1224525339923307536

<script type="text/javascript">
    cvalue = 'w1KPBUBVP94VI4N7HRN9TS0I';
    payout = '00.01';
    transid = Math.floor(Math.random()*90000) + 10000;
    console.log(transid);
    var goToUrl = 'https://vmhlw.voluumtrk2.com/postback?cid=' + cvalue + '&payout=' + payout + '&txid=' + transid;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
            if (xmlhttp.status == 200) {
                console.log("success!");
            }
            else if (xmlhttp.status == 400) {
                console.log('There was an error 400');
            }
            else {
                console.log('something else other than 200 was returned');
            }
        }
    };
    xmlhttp.open("POST", goToUrl, true);
    xmlhttp.send();

    function makeid() {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (var i = 0; i < 20; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }

        CH.event(function(EVENT, data) {

        if (EVENT == 'PAYMENT_SUCCESSFUL') {
            var transid = makeid();
            var total_price = data.cart_data.total_price;
            /***
             * Google Tag Manager: Build data layer
             ***/
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'transactionComplete',
                'transactionId': transid,
                'transactionTotal': parseFloat(total_price)
            });
    	}

    }, function(EVENT, error) {
        console.log('Uh oh! There was an error: ', error);
    });

    //upsell js
    CH.event(function(EVENT, data) {

    if (EVENT == 'ACCEPTED_OTO') {
        var transid = data.order.encoded_order_id;
        var total_price = data.order.total_price;
        /***
         * Google Tag Manager: Build data layer
         ***/
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'transactionComplete',
            'transactionId': transid,
            'transactionTotal': parseFloat(total_price)
        });
  }

}, function(EVENT, error) {
    console.log('Uh oh! There was an error: ', error);
});

(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NW725SC');

</script>

  </body>
  </html>
