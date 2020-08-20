<!DOCTYPE html>
<html lang="fr">
<?php
include_once("../../insc_traitement.php");
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="grid.css">
    </head>
    <body>
   <div id="main_container">
   <form action="" method="post">
		<input type="text" name="nomUser" placeholder="Last user" /></br>
		<input type="text" name="prenomUser" placeholder="First user" /></br>
		<input type="email" name="emailUser" placeholder="Email user" /></br>
		<input type="password" name="passwordUser" placeholder="password user" /></br>
		<input type="text" name="telUser" placeholder="Tel user"  minlength="10" maxlength="13" /></br>
		<input type="date" name="naissanceUser" placeholder="date de naissance user" /></br>
		<input type="text" name="numRueUser" placeholder="Num rue user" /></br>
		<input type="text" name="nomRueUser" placeholder="Nom Rue user" /></br>
		<input type="text" name="villeUser" placeholder="ville user" /></br>
		<input type="text" name="cpUser" placeholder="Code postal user" /></br>
		<input type="text" name="paysUser" placeholder="Pays user" /></br>
		<input type="submit" name="valider" value="Valider"/>
		</form>
   </div>
   <?php
   if(isset($_POST['valider'])){
    if (insert_user() == 403) {
        echo "user exist already";
    }
    else {header('Location: addEtude.php');
    }
}
   //if(isset($_POST['valider'])){
   //    insert_user();
   //    header('Location: addEtude.php');
   // }
   ?>
    </body>
</html>

