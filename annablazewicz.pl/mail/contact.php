<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || filter_var($_POST['email'])) {
  header("Location: https://www.annablazewicz.pl");
exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "annablazewicz@annablazewicz.pl"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "Otrzymano nowa wiadomosc.\n\n"."Dane wiadomosci: \n\nImie: $name\n\nEmail: $email\n\nTemat wiadomosci: $m_subject\n\nWiadomosc: $message";
$header = "Od: $email";
$header = "Odpowiedz: $email";	

if(!mail($to, $subject, $body, $header))
 header("Location: https://www.annablazewicz.pl");
?>
