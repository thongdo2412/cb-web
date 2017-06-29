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

  a {text-decoration: none;}
  *{margin:0 auto;}
  header,footer{background: rgb(9,30,55) center no-repeat fixed;height: 94px;margin: 0 auto;background-size: 100% 100%; background-size: cover;}
  header img{width: 97px;}
  footer{color: rgb(255,255,255);font-size: 12px; font-weight: 300; line-height: 1;}
  footer a,a:hover{text-decoration: none; color: #ffffff;}
  .cruel-free {width: 118px;height: 32px;margin-left: -14px;}
  .container-fluid{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
  .container{margin:0 auto;text-align:center;margin-left: auto;margin-right: auto;padding: 0;}
  .centered_flex{display: flex;justify-content:center;align-items: center; }
  .centered_nav{display: flex;justify-content: center;align-items: center;}
  b{font-weight: 400;}
  .button{width: 171px;height: 30px;font-size: 14px; border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
  .button_sm{width: 80px;height: 30px;font-size: 14px; margin-left: 10px;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
  .button_bg{width: 240px;height: 32px;font-size: 14px; border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;display: flex;justify-content: center;align-items: center;}
  .submitbtn{width: 110px;height: 30px;font-size: 14px; font-weight: 300;border-width: 1px;border-color: rgb(6, 16, 42);border-style: solid;text-align: center;}
  .button_blue{background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);}
  .button_wht{background-color: rgb(255, 255, 255);color: rgb(6, 16, 42);}
  .button_blue a{color: #ffffff;}
  .button_wht a{color: rgb(6, 16, 42);}
  .sup1{vertical-align: super;}
  .jumbotron p{font-size: 16px;font-weight: 300; line-height: 24px;}
  .jumbotron_wht{background: rgb(255,255,255);}
  .jumbotron_w_bg{background: rgb(248,249,249);background-size: cover;border: 1px solid rgb(235, 235, 235);margin: 0 auto;}
  .jumbotron_w_imgbg{height: 528px;background-image: url("../img/gift_bg.png");border: 1px solid rgb(235, 235, 235);background-size:100% cover;background-position:center;}
  .b3textbox{width:382px;background-color:rgb(255,255,255); text-align:center;}
  .linebreak10{margin-top: 10px;}
  .linebreak12{margin-top: 12px;}
  .linebreak20{margin-top: 20px;}
  .linebreak24{margin-top: 24px;}
  .linebreak30{margin-top: 30px;}
  .linebreak40{margin-top: 40px;}

  /* THE SPEECH BUBBLE
------------------------------------------------------------------------------------------------------------------------------- */

.triangle-isosceles {
  position:relative;
  padding:5px;
  border:solid rgb(235, 235, 235);
  border-width: 0px 0px 1px 0px;
}

/* THE TRIANGLE
------------------------------------------------------------------------------------------------------------------------------- */

/* creates triangle */
.triangle-isosceles:after {
  content:"";
  position:absolute;
  bottom:-15px; /* value = - border-top-width - border-bottom-width */
  left:50%; /* controls horizontal position */
  border-width:15px 15px 0; /* vary these values to change the angle of the vertex */
  border-style:solid;
  border-color:rgb(235, 235, 235) transparent;
  /* reduce the damage in FF3.0 */
  display:block;
  width:0;
}

/* ============================================================================================================================
== BUBBLE WITH A BORDER AND TRIANGLE
** ============================================================================================================================ */

/* THE SPEECH BUBBLE
------------------------------------------------------------------------------------------------------------------------------- */

.triangle-border {
  position:relative;
  padding:5px;
  border:solid rgb(235, 235, 235);
  border-width: 0px 0px 1px 0px;
  color:#333;
  background:#fff;
}

/* THE TRIANGLE
------------------------------------------------------------------------------------------------------------------------------- */

.triangle-border:before {
  content:"";
  position:absolute;
  bottom:-20px; /* value = - border-top-width - border-bottom-width */
  left:50%; /* controls horizontal position */
  border-width:20px 21px 0;
  border-style:solid;
  border-color:rgb(235, 235, 235) transparent;
  /* reduce the damage in FF3.0 */
  display:block;
  width:0;
}

/* creates the smaller  triangle */
.triangle-border:after {
  content:"";
  position:absolute;
  bottom:-15px; /* value = - border-top-width - border-bottom-width */
  left:560px; /* value = (:before left) + (:before border-left) - (:after border-left) */
  border-width:15px 17px 0;
  border-style:solid;
  border-color:#fff transparent;
  /* reduce the damage in FF3.0 */
  display:block;
  width:0;
}




  h3{font-size: 38px;line-height: 38px;font-weight: 400;}
  h4{font-size: 33px;}
  h5{font-size: 20px;}
  h6{font-size: 18px;display: inline;}
  body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden; height: 100%;}
  body{font-family: "Montserrat", sans-serif;text-align: center;font-size: 16px; font-weight: 300;line-height: 24px;}

  </style>
  </head>
  <body>
    <div class="container">
      <p class="triangle-border">Please take our 10 second customer survey</p>
    </div>
  </body>
  </html>
