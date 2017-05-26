<!--include head and other css templates-->
<?php  include("head.php"); ?>

  <style type="text/css">
  body{text-align: center;font-family: "Montserrat",sans-serif;font-weight: 300;}
    b{font-weight: 600;}
    .jumbotron h1{font-family: "Playfair Display", serif; font-size: 38px;}
    .jumbotron h2{font-size: 23px;font-weight: 300;display: inline;}
    .innerbox{border-width: 1px;border-color: #d67604;border-style: solid;width: 560px;height: 284px;}
    .innertext{width: 470px;text-align: center;}
    .orangefont{color: #d67604;}
    .orangebtn{display: flex;justify-content:center;align-items: center;font-weight: 300;
      color: #ffffff;border-width: 1px;
      border-color: rgb(170, 90, 0);
      border-style: solid;
      background-color: #d67604;}
    .btn1{width: 418px;height: 36px;}
    .linebreak05{margin-top: 5px;}
      /*handle responsive*/
      @media screen and (min-width: 1199px){.socialicons{margin-left: 46px;}}
      @media screen and (max-width: 594px){
        .container{margin-left: 28px;margin-right: 28px;}
        .innerbox,.innertext{width: 80%;}
        .innerbox{height: auto;}
        .btn1{width: 200px;height: auto;margin-bottom: 30px;}
      }
  </style>
</head>
<body>
  <!-- include header and navigation content -->
  <?php include("header.php") ?>
  <!--main content-->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron jumbotron_wht">
            <h1>Your Order Has Been Processed!</h1>
            <p>You'll receive an email with the details of your order shortly.</p>
            <div class="linebreak4"></div>
            <div class="innerbox">
                <div class="linebreak24"></div>
                <h2><b class="orangefont">Today Only: </b>AN OFFER JUST FOR</h2>
                <div class="linebreak05"></div>
                <h2>UNDER EYE RECOVERY CUSTOMERS ONLY...</h2>
                <div class="linebreak24"></div>
                <div class="innertext">Since we started in 2002, we've seen trends come and go. And through it all, one formula continues to be our #1 best-seller & all-time customer favorite...</div>
                <div class="linebreak24"></div>
                <a href="http://youngerlips.com/" class="btn1 orangebtn">CLICK HERE TO FIND OUT WHY</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--include footer and javascript-->
<?php include ("footer.php"); ?>

</body>
</html>