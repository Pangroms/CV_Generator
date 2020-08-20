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
              <h2>Profil</h2>
              <div class="divider"></div>
            </div>

            
    </div>
        
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1"> 

                <div class="row">
                    <div class="col-md-6">
                        
                        <p class="comment">MON PROFIL</p>
                    </div>
                </div>

        </div>
    </div>
<?php
    if(isset($_POST['valider'])){
    if(connexion()){
        echo "tout bon";
     //header('Location: profil.php');
    }
    else{
        echo ("this user doesn't exit");
    }
 }
 ?>
  </body>
</html>