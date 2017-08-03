<?php
  //get the access token from file
  include("conn_init.php");
  $str1 = file_get_contents('../components/infusionsoft/infkey');
  $key = json_decode($str1, true);
  $accesstoken = $key['ACCESS_TOKEN'];
  //$since = date("Y-m-d\TH:i:s.000\Z", time() - 30);
  //$until = date("Y-m-d\TH:i:s.000\Z", time());
  $since = '2017-08-02T19:15:28.000Z';
  $until = '2017-08-02T19:15:28.000Z';

  //build the API url
  $apiUrl = 'https://api.infusionsoft.com/crm/rest/v1/transactions?access_token=' . $accesstoken . '&since=' . $since . '&until=' . $until;

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
  $transid = $results['transactions'][0]['id'];
  $amount = $results['transactions'][0]['amount'];
  $currentdate = gmdate("Y-m-d\TH:i:s.000\Z");
  $sent = 0;
  //store into citybeauty db
  if (!$connErr){
    // attempt insert query execution
    $sql = "INSERT INTO `postback`(clickid,transactionid,amount,timeatcopy,sent) VALUES ('$cid', '$transid','$amount','$currentdate','$sent')";
    if(mysqli_query($link, $sql)){
      echo "<p>Done</p>";
    }
    else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      // close connection
      mysqli_close($link);
    }
  }

?>
<!Doctype html>
<html>
  <body>
    <p><?php echo $since;?></p>
    <p><?php echo $until;?></p>
    <p><?php echo $apiUrl;?></p>
    <p><?php echo $results['transactions'][0]['id'];?></p>
    <p><?php echo $results['transactions'][0]['amount'];?></p>
    <p><?php echo 'done';?></p>
  </body>
</html>
