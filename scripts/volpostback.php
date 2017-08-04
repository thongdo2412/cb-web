<?php
  //postback script goes here
  include("conn_init.php");

  if (!$connErr){
    //prepare query
    if($stmt = $link->prepare("SELECT clickid, SUM(amount) FROM `postback` WHERE sent = 0 GROUP BY clickid")){
      $stmt->execute();
			$stmt->bind_result($clickid,$amount);
			$stmt->store_result();
      while ($stmt->fetch()){
        $total = convertFloat(round($amount,2));
        $url = "https://vmhlw.voluumtrk2.com/postback?cid=";
        /*$url3 = 'https://vmhlw.voluumtrk2.com/postback';
        $fields = array(
          'cid'    => $clickid,
          'payout' => $total
        );

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url3);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

        //execute post
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //close connection
        curl_close($ch); */

        $url = $url . $clickid . '&payout=' . $total;
        $results = file_get_contents($url);
        var_dump($url);
        var_dump($http_response_header);
        echo $clickid ."<br>" . PHP_EOL;
        echo $total ."<br>" . PHP_EOL;
      //  echo $httpcode ."<br>" . PHP_EOL;
      }
      $stmt->free_result();
		  $stmt->close();
  }
   $link->close();
}

    function convertFloat($floatAsString)
    {
        $norm = strval(floatval($floatAsString));

        if (($e = strrchr($norm, 'E')) === false) {
            return $norm;
        }

        return number_format($norm, -intval(substr($e, 1)));
    }
  echo "Done";
 ?>
