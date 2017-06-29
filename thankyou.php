<!-- include PHP template header file-->
<?php include("head.php"); ?>
<title>Thank You For Your Response</title>
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<style type="text/css">
  body{font-family: "Montserrat", sans-serif;font-weight: 300;}
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
<div class="jumbotron jumbotron_wht" id ="content">
  <div class="container">
    <p>Thanks for filling that out!</p>
    <p>We really appreciate you giving us a moment of your time today. </p>
      <p>&nbsp;</p>
      <div id="res"></div>
  </div>
</div>

  <!--include PHP footer template -->
  <?php include ("footer.php"); ?>
  <script type="text/javascript">
    // function to set the height on fly
    function autoHeight() {
      $('#content').css('min-height', 0);
      $('#content').css('min-height', (
        $(document).height() - $('header').height() - 50 - $('nav').height() - $('footer').height()));
    }

    // onDocumentReady function bind
    $(document).ready(function() {
      autoHeight();
    });

    // onResize bind of the function
    $(window).resize(function() {
      autoHeight();
    });

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    //Add me to a thank you page using an html snippet
    //You must change the landing_page_url  variable to your landing page URL for this script to work.
    var Response = getParameterByName('inf_custom_SurveyResponse');
    var content = document.getElementById('res');
    if (parseInt(Response) >= 9) {
      content.innerHTML = "Your response is 9 or 10";
    }
    else if (parseInt(Response) >= 7 && parseInt(Response) < 9){
      content.innerHTML = "Your response is 7 or 8";
    }
    else if (parseInt(Response) > 0 && parseInt(Response) < 7){
      content.innerHTML = "Your response is among 0 to 6";
    }

    var landing_page_url = 'https://citybeauty.com'
    var seconds_to_wait = 4
    //Don't change this
    setTimeout("window.location.href = landing_page_url", seconds_to_wait * 1000);

  </script>
  </body>
  </html>
