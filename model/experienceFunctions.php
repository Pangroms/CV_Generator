<?php
include_once('../db/databaseFunctions.php');
// get all experience on one user
function getExperiencesByUserId($idUser) {
    $link = connect_database();
    $tab = [];
    if ($link) {
        $req = "SELECT * FROM experience WHERE idUser='$idUser'";
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
var_dump(getExperiencesByUserId('1'));
?>