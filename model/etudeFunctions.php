<?php 
include_once ('../db/databaseFunctions.php');
//get competences by user ID
function getEtudesByUserId($idUser) {
    $link = connect_database ();
    $tab=[];
    if($link){
        $req ="SELECT * FROM etude WHERE idEtude IN (SELECT idEtude FROM userEtude WHERE idUser='$idUser')";
        $res = mysqli_query($link,$req);
        if($res){
            while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $tab[] = $row;
            }
        }
    }
    else{
        return false;
    }
    return $tab;
}
// appel pour tester en dessous, la fonction s'arrête au dessus
var_dump(getEtudesByUserId('2'));
?>