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
        
    </script>

  </body>
  </html>
