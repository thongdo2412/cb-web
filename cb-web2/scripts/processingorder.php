<!DOCTYPE HTML>
<html>
  <head>
  	<!--[if lt IE 9]>
  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i|Playfair+Display:300,300i,400,400i">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
     .button{width: 180px;height: 34px;font-size: 14px; border-width: 1px;
       border-color: rgb(6, 16, 42);border-style: solid;text-align: center;
       background-color: rgb(6, 16, 42);color: rgb(255, 255, 255);
       display: flex;justify-content: center;align-items: center;
       margin: 0 auto;
     }
      a, a:hover {text-decoration: none; color:#ffffff;}
      #message { padding: 80px 0; }
      body,html {box-sizing: border-box;margin:0px;padding:0px;overflow-x: hidden; height: 100%;-webkit-overflow-scrolling: touch;}
      body{margin: 0 auto;text-align: center;font-size: 16px; font-weight: 300;line-height: 24px;font-family: 'Montserrat', sans-serif;}
    </style>
  </head>
  <body>
    <div class="row" id="message">
      <div class="col-sm-12">
        <?php
          if ($_POST['decision'] == 'ACCEPT') {
            header('Location: https://checkout.citybeauty.com/src/fnl/'.$_POST['req_merchant_defined_data9'].'.html?pid='.$_POST['req_merchant_defined_data10'].'&checkoutid='.$_POST['req_merchant_defined_data5'].'&token='.$_POST['payment_token'].'&chtx='.$_POST['req_merchant_defined_data11'].'&gwp=cs');
          }
          else if ($_POST['decision'] == 'DECLINE') {
            $checkout_link = 'https://checkout.citybeauty.com/src/'.$_POST['req_merchant_defined_data14'].'.html?cid='.$_POST['req_merchant_defined_data6'];
            echo '<p>Your order has been declined. Please click the button below to go back and try again with different payment card.</p>';
            echo '<a href="'.$checkout_link.'" class="button" >Back To Checkout Page</a>';
          }
          else {
            $checkout_link = 'https://checkout.citybeauty.com/src/'.$_POST['req_merchant_defined_data14'].'.html?cid='.$_POST['req_merchant_defined_data6'];
            echo '<p>There is an error due to the invalid: <b>'.$_POST['invalid_fields'].'</b>. Please click the button below to go back and try again.</p>';
            echo '<a href="'.$checkout_link.'" class="button" >Back To Checkout Page</a>';
          }
        ?>
      </div>
    </div>
  </body>
</html>
