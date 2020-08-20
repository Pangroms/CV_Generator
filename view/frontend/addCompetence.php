<!DOCTYPE html>
<html lang="fr">
<?php
include_once("../../insc_traitement.php");
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter vos compétences</title>
        <link rel="stylesheet" href="grid.css">
    </head>
    <body>
   <div id="main_container">
   <form action="" method="post">
		<input type="text" name="libCompetence" placeholder="Libellé de la compétence" /></br>
		<input type="submit" name="valider" value="Save"/>
		</form>
   </div>
   <?php
   if(isset($_POST['valider'])){
       addCompetence();
	   header ('location: addExperience.php');
   }
   ?>
    </body>
</html>

