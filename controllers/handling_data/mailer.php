<?php
function mail_user_mdp () {
require_once('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
  ->setUsername('398d1f9d470b89')
  ->setPassword('ebfbd9c5816e21')
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

}

function traitement_propo () {
require_once('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
  ->setUsername('398d1f9d470b89')
  ->setPassword('ebfbd9c5816e21')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Modification mdp '."Jade"))
  ->setFrom(['eLocation@loc.com' => "Admin"])
  ->setTo(["jade@gmail.com", "jade@gmail.com" => "Jade"])
  ->setBody('
  Bonjour Jade ,

  Ce message est envoyé automatiquement.
  
Votre proposition a été traitée, nous vous initons à y repondre rapidement.
  ATTENTION !
  Ne répondez pas à ce mail et ne partagez jamais vos informations personnelles.
  
  Cordialement,
  L’équipe eLocation
  ');

// Send the message
$result = $mailer->send($message);

}

function confirmation_rendu ($x) {
  //var_dump($_POST);
  //var_dump($_SESSION); 
require_once('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
  ->setUsername('398d1f9d470b89')
  ->setPassword('ebfbd9c5816e21')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Avis après location '))
  ->setFrom(['eLocation@loc.com' => $_SESSION['pseudo']])
  ->setTo([$_SESSION['uti_mail'], $_SESSION['uti_mail'] => $_SESSION['nom_uti']])
  ->setBody('
  Bonjour '.$_SESSION['nom_uti'].',

  Ce message est envoyé automatiquement.
  
  Votre article a bien été rendu, cliquez sur le lien ci desssous pour laisser un avis et une note, 

  '.$_SERVER['HTTP_HOST'].'/projet/eLocation/index.php?page=accueil&rub=laisser_avis&idloue='.$x.' .
  ATTENTION !
  Ne répondez pas à ce mail et ne partagez jamais vos informations personnelles.
  
  Cordialement,
  L’équipe eLocation
  ');

// Send the message
$result = $mailer->send($message);

}

?>