<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=message", "root", "");

$message=$_POST['message'];

$pseudo = $_SESSION['pseudo'];

  $requete = "INSERT INTO messagerie (message,pseudo) VALUES ('$message','$pseudo');";
  
//  ECHO $requete;

  $tab = $pdo->query($requete);
?>
<meta charset="UTF-8">
Message envoyé <br>
<a href="msgChat.php">Retour au tchat</a><br>
<a href="chatAcceuil.php">Retour à la page d'accueil</a>





