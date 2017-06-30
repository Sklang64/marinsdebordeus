<?php
include("header.php");
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["option"])){
$image = '../assets/img/logo_marins_de_bordeus.png';
$string = '<img src="'.$image.'">';
$message =$message = '
<html>
<head>
  <title>Bonjour</title>
</head>
<body>
  <h1>Marin de Bordeus</h1>
  '.$string.'
  <p>Nom: '.$_POST["nom"].'</p>
  <p>Prenom: '.$_POST["prenom"].'</p>
  <p>Donation: '.$_POST["option"].'</p>
  <p>Email: '.$_POST["email"].'</p>


</body>
</html>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo "Votre message à bien été transmis";
mail("vgauthier.lafaye@gmail.com","Donation de ".$_POST["nom"]." ".$_POST["prenom"], $message,$headers);
}
?>
