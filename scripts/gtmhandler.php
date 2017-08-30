<?php
  $orderid = $_POST['orderid'];
  $payout = $_POST['payout'];

  echo '<!Doctype html>';
  echo '<html>';
  echo '<body>';
  echo '<script>';
  echo 'window.dataLayer = window.dataLayer || []';
  echo 'dataLayer.push({';
  echo "event': 'transactionComplete',";
  echo "transactionId':" . $orderid . ",";
  echo "transactionTotal': parseFloat(". $payout . ")";
  echo '});';
  echo '';
  echo "(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':";
  echo "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],";
  echo "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=";
  echo "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);";
  echo "})(window,document,'script','dataLayer','GTM-NW725SC');";
  echo '</script>';
  echo '</body>';
  echo '</html>';

 ?>
