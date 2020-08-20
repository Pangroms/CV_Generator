<!DOCTYPE html>
<html>
<head>
      <title>
         Login
      </title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../public/css/style.css">
  </head>
<body>

<form class="box" action="" method="post" name="login">
<h1 class="box-title">connexion</h1>
<input type="email" class="box-input" name="emailUser" placeholder="Votre email">
<input type="passwordUser" class="box-input" name="passwordUser" placeholder="Mot de passe">
<input type="submit" value="connexion" name="valider" class="box-button">
<p class="box-register">Première fois sur ce site ? <a href="inscription.php">Inscrivez-vous !</a></p>
</form>

<?php

include_once("../../insc_traitement.php");
include_once("../../model/userFunctions.php");


// avec isset, on demande a afficher la suite seulement si le bouton est cliqué
if(isset($_POST['valider'])){
    if(connexion()){
        echo '<p class="white">la connexion a fonctionné</p>';
      // header('Location: profil.php');
    }
    else{
        echo '<p class="white">cet utilisateur n existe pas !</p>';
        // header('Location: inscription.php');
    }
 }
?>

</body>
</html>