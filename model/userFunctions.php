<?php
// include_once('../db/databaseFunctions.php');
echo '<p class="white">userFunctions bien récupéré.</p>';
// get all users
function getAllUsers() {
    $link = connect_database();
    $tab = [];
    if ($link) {
        $req = "SELECT * FROM user";
        $res = mysqli_query ($link, $req);

        if ($res) {
            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $tab = $row;
            }
        }
    }
    else {
        return false;
    }
    return $tab;
}
// var_dump(getAllUsers());

// get user by pw & email
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
        echo '<p class="white">problème de connexion</p>';
    }
    return $tab;
  }
  
  //var_dump(getUserConnection("test@test.fr", "test"));
?>