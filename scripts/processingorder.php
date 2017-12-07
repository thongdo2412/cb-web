<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Processing the order</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i">
    <style>
     .button{width: 180px;height: 34px;font-size: 14px; border-width: 1px;
       border-color: rgb(6, 16, 42);border-style: solid;text-align: center;
       background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);
       display: flex;justify-content: center;align-items: center;
       margin: 0 auto;
     }
      a, a:hover {text-decoration: none;}
      body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden; height: 100%;-webkit-overflow-scrolling: touch;}
      body{margin: 0 auto;text-align: center;font-size: 16px; font-weight: 300;line-height: 24px;font-family: 'Montserrat', sans-serif;}
    </style>
  </head>
  <body>
    <?php
      if ($_POST['decision'] == 'ACCEPT') {
        header('Location: https://checkout.citybeauty.com/src/fnl/'.$_POST['req_merchant_defined_data9'].'.html?pid='.$_POST['req_merchant_defined_data10'].'&checkoutid='.$_POST['req_merchant_defined_data5'].'&token='.$_POST['payment_token'].'&chtx='.$_POST['req_merchant_defined_data11']);
      }
      else if ($_POST['decision'] == 'DECLINE') {
        $pagenumber = $_POST['req_merchant_defined_data10'] + 1;
        $checkout_link = 'https://checkout.citybeauty.com/src/cbl00'.$pagenumber.'.html?cid='.$_POST['req_merchant_defined_data6'];
        echo '<p>Your order has been declined. Please click to the button back and try again with different payment card.</p>';
        echo '<a href="'.$checkout_link.'" class="button" >Back To Checkout Page</a>';
      }
    ?>
  </body>
</html>
