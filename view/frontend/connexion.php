
<?php
include_once("../../insc_traitement.php");

function getUserConnection($email,$pwd) {
  $link = connect_database ();
  $tab=[];
  if($link){
      $req = "SELECT * FROM user WHERE emailUser='$email' AND passwordUser='$pwd'";
      $res = mysqli_query($link,$req);
      if($res){
          while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
              $tab[] = $row;
          }
      }
  }
  else{
     // return false;
      echo "problème de connexion";
  }
  return $tab;
}
?>

<!DOCTYPE html>
<html lang="fr">
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
    <div id="main_container" class="container">
       
            <div class="heading">
              <h2>Connectez-vous ci-dessous</h2>
              <div class="divider"></div>
            </div>

            
    </div>
        
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1"> 
            <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">E-Mail</label>
                        <input type="email" id="email" class="form-control" placeholder="Votre email" name="email"
                        value="<?php echo $email;?>" required>
                        <p class="comment"><?php echo "$emailError";?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="password">Mot de Passe</label>
                        <input id="password" class="form-control" placeholder="Votre mot de passe" name="password" 
                        value="<?php echo $password;?>" required> 
                        <p class="comment"><?php echo "$passwordError";?></p>
                    </div>
                </div>
          </form>

            <div class="flex-container">
                <input type="submit" class="btn btn-success btn-lg" name="valider" value="Login">
                <input type="submit" class="btn btn-warning btn-lg" name="perdu" value="Mot de passe perdu !"/>
            </div>

        </div>
    </div>
<?php
    if(isset($_POST['valider'])){
    if(connexion()){
        echo "tout bon";
     // header('Location: profil.php');
    }
    else{
        echo ("this user doesn't exit");
    }
 }
 ?>
  </body>
</html>