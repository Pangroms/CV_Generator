<!DOCTYPE html>
<html lang="fr">
<?php
include_once("../../insc_traitement.php");
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter vos études</title>
        <link rel="stylesheet" href="grid.css">
    </head>
    <body>
   <div id="main_container">
   <form action="" method="post">
		<input type="text" name="diplomeEtude" placeholder="Nom du diplôme" /></br>
		<input type="date" name="anneeEtude" placeholder="date d'obtention" /></br>
		<input type="text" name="ecoleEtude" placeholder="Ecole" /></br>
		<input type="submit" name="valider" value="Save"/>
		</form>
   </div>
   <?php
   if(isset($_POST['valider'])){
       addEtude();
	   header ('location: addCompetence.php');
   }
   ?>
    </body>
</html>

