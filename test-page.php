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
</script>

  </body>
  </html>
