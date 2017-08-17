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
    <?php
      session_start();
        require_once 'components/infusionsoft/vendor/autoload.php';

        $infusionsoft = new \Infusionsoft\Infusionsoft(array(
        	'clientId' => 'ha6mpgu79yeghxw34wppw73r',
        	'clientSecret' => '264fN2GNVa',
        	'redirectUri' => 'https://citybeauty.com/scripts/temp.php',
        ));
        // If the serialized token is available in the session storage, we tell the SDK
        // to use that token for subsequent requests.
        if (isset($_SESSION['token'])) {
        	$infusionsoft->setToken(unserialize($_SESSION['token']));
          echo '<p>Done1</p>';
        }

        // If the serialized token is available in the session storage, we tell the SDK
        // to use that token for subsequent requests.
        if (isset($_SESSION['token'])) {
        	$infusionsoft->setToken(unserialize($_SESSION['token']));
          echo '<p>Done2</p>';
        }

        // If we are returning from Infusionsoft we need to exchange the code for an
        // access token.
        if (isset($_GET['code']) and !$infusionsoft->getToken()) {
        	$_SESSION['token'] = serialize($infusionsoft->requestAccessToken($_GET['code']));
          echo '<p>Done3</p>';
        }

        if ($infusionsoft->getToken()) {
        	// Save the serialized token to the current session for subsequent requests
        	$_SESSION['token'] = serialize($infusionsoft->getToken());
          echo '<p>Done4</p>';
          $token = $_SESSION['token'];
          $token1 = unserialize($token);
          $token2 = json_encode($token1);
          $token3 = json_decode($token2,true);
          $tk = $token3['accessToken'];
        	// MAKE INFUSIONSOFT REQUEST
        } else {
        	echo '<a href="' . $infusionsoft->getAuthorizationUrl() . '">Click here to authorize</a>';
        }
    ?>
    <p><?php echo $token2;?></p>
    <p><?php echo $tk;?></p>
    <div id='collection-component-e4ce3fb62a9'></div>
    <script src="http://sdks.shopifycdn.com/js-buy-sdk/v0/latest/shopify-buy.umd.polyfilled.min.js"></script>
    <script type="text/javascript">
    var temp = document.getElementsByTagName("section")[2];
temp.getElementsByTagName("div")[1].setAttribute("style", "background: #091E37;height: 84px;width:100%;margin: 0 auto; display: flex;justify-content:center;align-items: center;");


    //carthook javascript getting cid from cookie
    function getParameterByName(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    var cid = String(getParameterByName('tid'));
    if (cid != "" || cid != null) {
      setCookie("cid", cid, 30);
    }

    //end of code for cookie cid
    https://city-cosmetics.myshopify.com/a/secure/checkout/dTDN8OKasg1wXLIypAS5 //1
    https://city-cosmetics.myshopify.com/a/secure/checkout/FrsaY1PsNZljFdrGv2ge //2
    https://city-cosmetics.myshopify.com/a/secure/checkout/WtSG2gbiS0XoVOLHvi9k //3
    <img src="http://secure.citybeauty.com/conversion.gif?cid=OPTIONAL&payout=OPTIONAL&txid=OPTIONAL" width="1" height="1"/>

    //scripts from Carthook Thank you page
      !function(_window, _document) {
      var OB_ADV_ID='005e34849b6242d16f4cdfb0d475de872f';
      if (_window.obApi) { return; }
      var api = _window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.0';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = _document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
      obApi('track', 'PAGE_VIEW');

      function img_create(src, alt, title) {
              var img = new Image();
              img.src = src;
              img.style.width = '0px';
              img.style.height = '0px';
              if ( alt != null ) img.alt = alt;
              if ( title != null ) img.title = title;
              document.body.appendChild(img);
          }
        img_create('https://sp.analytics.yahoo.com/spp.pl?a=10000&.yp=10026284','yh','');

      function loadScript(url, callback){

          var script = document.createElement("script")
          script.type = "text/javascript";

          if (script.readyState){  //IE
              script.onreadystatechange = function(){
                  if (script.readyState == "loaded" ||
                          script.readyState == "complete"){
                      script.onreadystatechange = null;
                      callback();
                  }
              };
          } else {  //Others
              script.onload = function(){
                  callback();
              };
          }

          script.src = url;
          document.getElementsByTagName("head")[0].appendChild(script);
      }

      loadScript("//cdn.taboola.com/libtrc/citybeauty-sc/tfa.js", function(){
          //initialization code
          console.log("OK");
      });
    //end of scripts from Carthook Thank you page

</script>

  </body>
  </html>
