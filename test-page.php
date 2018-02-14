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

.cart {
  position: fixed;
  width: 100%;
  max-width: 350px;
  height: 100%;
  right: 0;
  top: 0;
  z-index: 3;
  background: white;
  border-radius: 1px;
  box-shadow: 0 0 0 rgba(0, 0, 0, 0.1);
  transform: translateX(100%);
  transition: box-shadow 0.2s ease-out, transform 0.2s ease-out;

  &.js-active {
    transform: translateX(0);
    box-shadow: -5px 0 5px rgba(0, 0, 0, 0.1);
  }
}

.cart-section {
  position: relative;
  padding: 20px;
}

.cart-section--top {
  z-index: 5;
}

.cart-title {
  color: $color-title;
  display: inline-block;
  font-weight: 400;
  font-size: 18px;
  line-height: 1.5;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 90%;
}

.btn--close {
  position: absolute;
  right: 9px;
  top: 8px;
  font-size: 35px;
  color: $color-title;
  border: none;
  background: transparent;
  transition: transform 100ms ease;
  cursor: pointer;
  &:hover {
    transform: scale(1.2);
    color: darken($color-title, 5%);
  }
}

.cart-form {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  padding: 70px 0 140px 0;
}

.cart-item-container {
  height: 100%;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  perspective: 400px;
  perspective-origin: 50% 0px;
}

.cart-item {
  margin-bottom: 20px;
  overflow: hidden;
  backface-visibility: visible;
  min-height: 65px;
  position: relative;
  opacity: 1;
  transition: opacity 0.2s ease-in-out;

  &.js-hidden {
    opacity: 0;
  }

  &.js-working:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.5);
    z-index: 2;
  }
}

.cart-item__img {
  width: 65px;
  height: 65px;
  border-radius: 3px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #e5e5e5;
  position: absolute;
}

.cart-item__content {
  width: 100%;
  padding-left: 75px;
}

.cart-item__content-row {
  margin-bottom: 5px;
}

.cart-item__variant-title {
  float: right;
  font-weight: bold;
  font-size: 11px;
  line-height: 17px;
  color: #767676;
}

.cart-item__quantity-container {
  border: 1px solid #767676;
  float: left;
  border-radius: 3px;
}

.quantity-decrement, .quantity-increment {
  color: #767676;
  display: block;
  float: left;
  height: 21px;
  line-height: 16px;
  font-family: monospace;
  width: 25px;
  padding: 0;
  border: none;
  background: transparent;
  box-shadow: none;
  cursor: pointer;
  font-size: 18px;
  text-align: center;
}

.cart-item__quantity {
  color: black;
  width: 38px;
  height: 21px;
  font-size: inherit;
  border: none;
  text-align: center;
  -moz-appearance: textfield;
  background: transparent;
  border-left: 1px solid #767676;
  border-right: 1px solid #767676;
  display: block;
  float: left;
  padding: 0;
  border-radius: 0;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.cart-item__price {
  line-height: 23px;
  float: right;
  font-weight: bold;
}

.cart-bottom {
  border-top: 1px solid $color-border;
}

.cart-info {
  padding: 15px 20px 10px;
}

.cart-info__total {
  float: left;
  text-transform: uppercase;
}

.cart-info__small {
  font-size: 11px;
}

.cart-info__pricing {
  float: right;
}

.cart-discount-notice {
  color: $color-title;
  margin-bottom: 10px;
}

.cart-actions-container {
  padding-top: 5px;
}

.pricing {
  margin-left: 5px;
  font-size: 16px;
  color: black;
}
.product {
  max-width: 400px;
  box-shadow: 0 0 15px 5px #eee;
  padding: 30px;
}

.product__buy {
  background: #7ab55c;
  padding: 0.5625em 1.875em;
  color: white;
  text-decoration: none;
  border-radius: 3px;
  display: inline-block;
}

.product__buy:hover {
  text-decoration: none;
  background: #6aa74c;
}
  </style>
  </head>
  <body>
    <div class="product" id="product-1"><a href="test-page3.php" class="product__buy">Go to test-page3</a></div>


  </div>
    <script>
      console.log(document.referrer);
    </script>
  </body>
  </html>
