<?php
session_start();
  require_once '../components/infusionsoft/vendor/autoload.php';

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
    echo '<p>'.$tk .'</p>';
    // MAKE INFUSIONSOFT REQUEST
  } else {
    echo '<a href="' . $infusionsoft->getAuthorizationUrl() . '">Click here to authorize</a>';
  }
 ?>
