<?php
  $orderid = $_POST['orderid'];
  $payout = $_POST['payout'];
  include("conn_init.php");
?>
<!Doctype html>
 <html>
  <body>
    <script>
      window.dataLayer = window.dataLayer || []
        dataLayer.push({
         'event': 'transactionComplete',
         'transactionId': '<?php echo $orderid;?>',
         'transactionTotal': parseFloat(<?php echo $payout;?>)
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NW725SC');
    </script>
  </body>
 </html>
 <?php
 $currentdate = gmdate("Y-m-d\TH:i:s.000\Z");
 //store into citybeauty db
 if (!$connErr){
   // attempt insert query execution
   $sql = "INSERT INTO `postback` (cid,amount,timeatcopy,sent) VALUES ('$orderid','$payout','$currentdate','0')";
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
