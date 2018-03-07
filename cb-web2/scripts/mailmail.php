
<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require '../test/vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$subject = "New Form Submission";
$to = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$content = new SendGrid\Content("text/plain", "test content of the email");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$key = json_decode(file_get_contents('../test/citykey'));

$apiKey = $key->{'SENDGRID_API_KEY'};
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
echo "Done";
  ?>
