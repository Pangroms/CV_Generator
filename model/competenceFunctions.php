<?php 
include_once ('../db/databaseFunctions.php');
//get competences by user ID
function getCompetencesByUserId($idUser) {
    $link = connect_database ();
    $tab=[];
    if($link){
        $req ="SELECT * FROM competence WHERE idCompetence IN (SELECT idCompetence FROM userCompetence WHERE idUser='$idUser')";
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
var_dump(getCompetencesByUserId('1'));
?>