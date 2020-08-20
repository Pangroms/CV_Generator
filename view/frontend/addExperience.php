<!DOCTYPE html>
<html lang="fr">
<?php
include_once("../../insc_traitement.php");
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter vos expériences</title>
        <link rel="stylesheet" href="grid.css">
    </head>
    <body>
   <div id="main_container">
   <form action="" method="post">
        <input type="date" name="debutExperience" placeholder="date d'entrée" /></br>
        <input type="date" name="finExperience" placeholder="date de fin" /></br>
		<input type="text" name="entrepriseExperience" placeholder="Nom de l'entreprise" /></br>
        <textarea 
            name="descriptionExperience" 
            id="descriptionExperience" 
            cols="30" rows="10" 
            placeholder="Description de votre expérience">
        </textarea> </br>
		<input type="submit" name="valider" value="Save"/>
		</form>
   </div>
   <?php
   if(isset($_POST['valider'])){
       addExperience();
    //    header ('location: addExperience.php');
        // var_dump($_POST);
        echo "Expérience validée";
   }
   ?>
    </body>
</html>