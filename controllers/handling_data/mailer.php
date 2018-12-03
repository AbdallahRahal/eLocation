<?php
require_once('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
  ->setUsername('2d55accaed592c')
  ->setPassword('8f937707d7ea51')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Modification mdp '.$_GET['pseudo']))
  ->setFrom(['eLocation@loc.com' => $_SESSION['pseudo']])
  ->setTo([$_GET['mail'], $_GET['mail'] => $_GET['pseudo']])
  ->setBody('Votre mdp a bien été modifié, le nouveau mot de passe est '.$_GET['mdp']);

// Send the message
$result = $mailer->send($message);

?>