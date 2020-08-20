<!DOCTYPE html>
<html lang="fr">
<?php
include_once("../../insc_traitement.php");
?>
<head>
      <title>
      Ajouter vos compétences
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
   <h1 class="box-title">Nouvelle Compétence</h1>
   <input type="text" class="box-input" name="libCompetence" placeholder="Libellé de la compétence" />
   <input type="submit" value="Ajouter" name="ajouter" class="box-button-1">
   <input type="submit" value="Valider" name="valider" class="box-button">
   </form>

   <?php
   if(isset($_POST['ajouter'])){
    addCompetence();
	header ('location: addCompetence.php');
   }

   if(isset($_POST['valider'])){
    addCompetence();
    header ('location: addExperience.php');
    }
   ?>
    </body>
</html>

