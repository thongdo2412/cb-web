<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require '../test/vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$subject = "New Contact Form Submission";
$to = new SendGrid\Email("Thong Do", "thong@citybeauty.com");
$key = json_decode(file_get_contents('../test/citykey'));
$apiKey = $key->{'SENDGRID_API_KEY'};
$sg = new \SendGrid($apiKey);
$fields = array('fname' => 'First Name','lname' => 'Last Name', 'email' => 'Email', 'subject' => 'Subject', 'message' => 'Message'); // array variable name => Text to appear in the email
$email_body = "<html><body>";
$email_body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $email_body .= "<tr style='background: #eee;'><td><strong>$fields[$key]:</strong> </td><td>" . "$value" . "</td></tr>";
        }
    }

$email_body .= "</table>";
$email_body .= "</body></html>";

$content = new SendGrid\Content("text/html", $email_body);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
$statusOK = strval($response->statusCode());
if ($statusOK == '202'){
  echo "Your message has been submitted successfully.";
}
else {
  echo "Something is not working properly. We're working on it.";
}
  ?>
