<!DOCTYPE html>
<html lang="fr">
<?php
include_once("../../insc_traitement.php");
?>
<head>
      <title>
      Ajouter vos expériences
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
   <h1 class="box-title">Nouvelle Expérience</h1>
   <input type="date" class="box-input" name="debutExperience" placeholder="Date d'entrée" />
   <input type="date" class="box-input" name="finExperience" placeholder="Date de sortie" />
   <input type="text" class="box-input" name="entrepriseExperience" placeholder="Nom de l'entreprise" />
   <textarea 
            class="box-input"
            name="descriptionExperience" 
            id="descriptionExperience" 
            cols="30" rows="10" 
            placeholder="Description de votre expérience">
        </textarea>
   <input type="submit" value="Ajouter" name="ajouter" class="box-button-1">
   <input type="submit" value="Valider" name="valider" class="box-button">
   </form>

   <?php
   if(isset($_POST['ajouter'])){
    addCompetence();
	header ('location: addExperience.php');
   }

   if(isset($_POST['valider'])){
    addCompetence();
    header ('location: upload.php');
    // echo "Expérience validée";
    }
    
   ?>
    </body>
</html>