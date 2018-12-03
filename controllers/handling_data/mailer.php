<?php
require_once('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
  ->setUsername('021f46c8621e59')
  ->setPassword('a56ed0c67c699f')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Modification mdp '.$_GET['pseudo']))
  ->setFrom(['eLocation@loc.com' => $_SESSION['pseudo']])
  ->setTo([$_GET['mail'], $_GET['mail'] => $_GET['pseudo']])
  ->setBody('
  Bonjour '.$_GET['pseudo'].',

  Ce message est envoyé automatiquement.
  
  Une réinitialisation du mot de passe de votre compte User a été effectué sur le site eLocation.
  
  ATTENTION !
  Ne répondez pas à ce mail et ne partagez jamais vos informations personnelles.
  Voici votre nouveau mot de passe : "'.$_GET['mdp'].'".
  
  Cordialement,
  L’équipe eLocation
  ');

// Send the message
$result = $mailer->send($message);

?>