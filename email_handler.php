<?php
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$value = filter_var($_POST['value'], FILTER_SANITIZE_STRING);
//$from = 'From: $email';
$to = 'dev@jasonpau.com';
$headers = "From: $email";

$body = "From: $name\nE-Mail:$email\nSubject:$subject\n\nMessage:\n$message";

$output = array(
  'success' => false,
  'message' => 'It seems there was an issue processing your information on our server. Either try again, or shoot an email to the address in the footer below.'
);

if($_SERVER["REQUEST_METHOD"] === "POST") {

  // if our honeypot somehow contains data...
  if ($value) {
    $output['message'] = 'Your email has been sent into the void!';
    echo(json_encode($output));
    exit();
  }

  if ($name != '' && $email != '') {
    if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ) {
      $output['message'] = 'There were errors with either the name or email fields.';
    }

    if (mail ($to, $subject, $body, $headers)) {
      $output['success'] = true;
      $output['message'] = 'Your email has been sent!';
    }
  }
}

echo(json_encode($output));

?>