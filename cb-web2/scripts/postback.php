<?php
  //get the access token from file
  $str1 = file_get_contents('../components/infusionsoft/infkey');
  $key = json_decode($str1, true);
  $accesstoken = $key['ACCESS_TOKEN'];
  $currentdate = gmdate("Y-m-d\TH:i:s.000\Z");
  $since = $currentdate;
  $until = $currentdate;
  //$since = '2017-08-02T19:15:28Z';
  //$until = '2017-08-02T19:15:28Z';

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
  //send postback to Voluum
  $pbUrl = 'https://vmhlw.voluumtrk2.com/postback';
  $params = array(
    'cid'    => $cid,
    'payout' => $amount,
    'txid'   => $transid
  );

  //open connection
  $ch2 = curl_init();

  //set the url, number of POST vars, POST data
  curl_setopt($ch2, CURLOPT_URL, $pbUrl);
  curl_setopt($ch2, CURLOPT_POST, count($params));
  curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($params));

  //execute post
  $result = curl_exec($ch2);

  //close connection
  curl_close($ch2);
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
