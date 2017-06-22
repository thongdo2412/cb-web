<!-- include PHP template header file-->
<?php include("head.php"); ?>
<title>404 - Page Not Found</title>
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<style type="text/css">
  body{font-family: "Montserrat", sans-serif;}
  .cruel-free{margin-left: -4px;}
  .text{font-family: 'Poiret One', cursive;font-size: 20px; position: absolute; top: 130px;left:100px; width: 600px;}
  .image {position: relative; width: 100%; /* for IE 6 */}
  .image img{height: 500px;position: relative;left: 120px;}
  .linebreak5{margin-top: 40px;}
  a{color: #e1c37b; }
  a:hover {color: #e1c37b;}
  h1{font-size: 40px;}
  /*Responsive for different screen*/
  @media screen and (min-width: 1199px) {.social-wrap{margin-left: 42px;}}
  @media screen and (max-width: 1199px){.image img{max-width: 100%; height: auto; width: auto\9;}}
</style>
</head>
<body>
  <!--head and navigation content-->
<?php include ("header.php"); ?>
  <div class="container">
    <div class="image">
      <img src="../img/cream.jpg" alt="cream" />
      <div class="text">
        <h1>We're sorry that you landed on this page due to a broken link.</h1>
        <div class="linebreak5"></div>
        Please go back to <a href="/">City Beauty</a> home page or use the navigation bar above to go to product pages.
      </div>
    </div>
  </div>

  <!--include PHP footer template -->
  <?php include ("footer.php"); ?>
  </body>
  </html>
