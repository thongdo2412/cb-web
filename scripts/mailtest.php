
<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require '/home/ec2-user/vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$subject = "test-mail from thong's Sendgrid";
$to = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$content = new SendGrid\Content("text/plain", "and easy to do anywhere, even with PHP");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
//$response = $sg->client->mail()->send()->post($mail);
try {
    $response = $sg->client->mail()->send()->post($mail);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
echo $response->statusCode();
echo $response->headers();
echo $response->body();
echo "Done"

?>