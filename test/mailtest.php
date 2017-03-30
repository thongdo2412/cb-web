
<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require 'vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$subject = "New Form Submission";
$email_body ="test body email";
$to = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$content = new SendGrid\Content("text/plain", $email_body);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = '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';
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
echo "Done"
?>
