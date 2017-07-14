<!-- include PHP template header file-->
<?php include("../head.php"); ?>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>Your Link Has Expired</title>

<style type="text/css">
  #content{text-align: center; padding: 40px 0px;}
  body{font-family: "Montserrat",sans-serif;}
  .cruel-free{margin-left: -6px;}
  /*Responsive for different screen*/
  @media screen and (min-width: 1199px) {.social-wrap{margin-left: 42px;}}
</style>
</head>
<body>
  <!--head and navigation content-->
<?php include ("../header.php"); ?>

<!--main content-->
<div class="container" id="content">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1">
      <h4>Sorry, Your Link Has Expired!</h4>
        <div class="linebreak3"></div>
        <p><a href="/#productsection">Click here</a> to shop.</p>
    </div>
  </div>
</div>
<!--include PHP footer template -->
<?php include ("../footer.php"); ?>
<script type="text/javascript">
  // function to set the height on fly
  function autoHeight() {
    $('#content').css('min-height', 0);
    $('#content').css('min-height', (
      $(document).height() - $('header').height() - 20 - $('nav').height() - $('footer').height()));
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
</body>
</html>
