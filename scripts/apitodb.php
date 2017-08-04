<?php
  //get the access token from file
  include("conn_init.php");
  $str1 = file_get_contents('../components/infusionsoft/infkey');
  $key = json_decode($str1, true);
  $accesstoken = $key['ACCESS_TOKEN'];
  $orderId = $_GET['orderId'];

  //build the API url
  $apiUrl = 'https://api.infusionsoft.com/crm/rest/v1/orders/'. $orderId . '?access_token=' . $accesstoken;

  //open connection for API call to Inf
  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $apiUrl,
    CURLOPT_USERAGENT => 'Inf returned'
  ));
  //execute post
  $response = curl_exec($ch);
  $results = json_decode($response, true);
  //close connection
  curl_close($ch);

  $cid = $_GET['cid'];
  $amount = $results['total'];
  $currentdate = gmdate("Y-m-d\TH:i:s.000\Z");
  //store into citybeauty db
  if (!$connErr){
    // attempt insert query execution
    $sql = "INSERT INTO `postback` (orderid,clickid,amount,timeatcopy) VALUES ('$orderId', '$cid','$amount','$currentdate')";
    if(mysqli_query($link, $sql)){
      echo "<p>Done</p>";
    }
    else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      // close connection
    }
    mysqli_close($link);
  }
?>
<!Doctype html>
<html>
  <body>
    <p><?php echo $apiUrl;?></p>
    <p><?php echo $amount;?></p>
    <p><?php echo 'done';?></p>
  </body>
</html>
