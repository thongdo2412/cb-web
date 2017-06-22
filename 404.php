<!-- include PHP template header file-->
<?php include("head.php"); ?>
<title>404 - Page Not Found</title>
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<style type="text/css">
  body{font-family: "Montserrat", sans-serif;}
  .cruel-free{margin-left: -4px;}
  .text{font-family: 'Poiret One', cursive;font-size: 20px;margin-top: 40px;}
  .linebreak5{margin-top: 30px;}
  .cream-swatch img{width: 300px;}
  a{color: #e1c37b; }
  a:hover {color: #e1c37b;}
  h2{font-size: 40px;}
  /*Responsive for different screen*/
  @media screen and (min-width: 1199px) {.social-wrap{margin-left: 42px;}}
  @media screen and (max-width: 767px){.text{margin-top: 0; margin-left: 20px;margin-right: 20px;}}
</style>
</head>
<body>
  <!--head and navigation content-->
<?php include ("header.php"); ?>
<div class="jumbotron jumbotron_wht">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-2 col-md-7 col-md-offset-1 col-sm-11 col-sm-offset-0 text">
        <h2>We're sorry that you landed on this page due to a broken link.</h2>
        <div class="linebreak5"></div>
        You can either go back to <a href="/">City Beauty</a> homepage or use the navigation bar above to go to the product pages.
      </div>
      <div class="col-lg-2 cream-swatch">
        <img src="../img/cream1.jpg" alt="cream" />
      </div>
    </div>
  </div>
</div>

  <!--include PHP footer template -->
  <?php include ("footer.php"); ?>
  </body>
  </html>
