
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
$apiKey = file_get_contents('../test/citykey');
echo $apiKey;

if(isset($_POST['submit'])) {
  $email_body = '<!DOCTYPE html>';
  $email_body .= '<html><body>';
  $email_body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $email_body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['fname']) . "</td></tr>";
  $email_body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['lname']) . "</td></tr>";
  $email_body .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
  $email_body .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
  $email_body .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

  $email_body .= "</table>";
  $email_body .= "</body></html>";

  $content = new SendGrid\Content("text/html", $email_body);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);

  $sg = new \SendGrid($apiKey);
  //$response = $sg->client->mail()->send()->post($mail);
  try {
      $response = $sg->client->mail()->send()->post($mail);
      echo $response->statusCode();
      echo $response->headers();
      echo $response->body();
  } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
echo "Done";
  ?>
