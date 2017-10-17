<!--include head and other css templates-->
<?php  include("head.php"); ?>

  <style type="text/css">
  body{text-align: center;font-family: "Montserrat",sans-serif;font-weight: 300;}
    a {text-decoration: none;color: #ffffff;}
    a:hover {text-decoration: none;color: #ffffff;}
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
    .cruel-free {margin-left: -5px;}
      /*handle responsive*/
      @media screen and (min-width: 1199px){.social-wrap{margin-left: 40px;}}
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
    <div class="container" id="content">
      <div class="row">
        <div class="col">
          <div class="jumbotron jumbotron_wht">
            <h1>Your Order Has Been Processed!</h1>
            <p>You'll receive an email with the details of your order shortly.</p>
            <div class="linebreak4"></div>
            <div class="innerbox">
                <div class="linebreak24"></div>
                <h2 class="orangefont"><b>UPDATE:</b></h2>
                <div class="linebreak05"></div>
                <h2>FOR SELECT MEMBERS ONLY...</h2>
                <div class="linebreak24"></div>
                <div class="innertext">A new solution that could take decades off your appearance...by combining that "stage magic" with the latest breakthroughs in skincare technology.</div>
                <div class="linebreak24"></div>
                <a href="http://undereyerecovery.com/" class="btn1 orangebtn">CLICK HERE FOR THIS EASY SOLUTION</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--include footer and javascript-->
<?php include ("footer.php"); ?>
<script type="text/javascript">
  // function to set the height on fly
  function autoHeight() {
    $('#content').css('min-height', 0);
    $('#content').css('min-height', (
      $(document).height() - $('header').height() - 22 - $('nav').height() - $('footer').height()));
  }

  // onDocumentReady function bind
  $(document).ready(function() {
    autoHeight();
  });

  // onResize bind of the function
  $(window).resize(function() {
    autoHeight();
  });
</script>
<script src="scripts/postback.js"></script>
</body>
</html>
