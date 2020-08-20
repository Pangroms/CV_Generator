<?php
include_once('db/databaseFunctions.php');
echo '<p class="white">insc_traitement bien récupéré.</p>';

function connexion() {
	//connect to database
	$link = connect_database();

	//if not connected
	if(!$link) {
		echo "a problem occured !!! ";
	}
	//connexion ok
	else {
		if($_SESSION) {
			session_unset();
		}
		$emailUser = $_POST['mailUser'];
		$passwordUser = $_POST['passwordUser'];
		$req = "SELECT * FROM user WHERE passwordUser = '$passwordUser' AND emailUser = '$emailUser'";
		 
		// execute verification query
		$res = mysqli_query($link, $req);
		if($res) {
			$userExist = mysqli_fetch_row($res);
			//var_dump($res);
			if(!$userExist){
				return false;
			}
			else {
				$_SESSION['userInfo'] = $userExist;
				// header('Location: profil.php');
				var_dump($userExist);
				return true;
			}
		}
		else {
			return false;
		}
	}
}

//addNewUser
function insert_user(){
	//connect to database
	$link= connect_database();
	//if not connected
	if(!$link){
	echo "a problem occured !!! ";
	}
	// connexion ok
	else{
		// get all datas
		$nomUser = $_POST['nomUser'];
		$prenomUser = $_POST['prenomUser'];
		$emailUser = $_POST['emailUser'];
		$passwordUser = $_POST['passwordUser'];
		$telUser = $_POST['telUser'];
		$naissanceUser = $_POST['naissanceUser'];
		$numRueUser = $_POST['numRueUser'];
		$nomRueUser = $_POST['nomRueUser'];
		$cpUser = $_POST['cpUser'];
		$villeUser = $_POST['villeUser'];
		$paysUser = $_POST['paysUser'];
		
		// requette to verify the existance of a user
		$req = "select * from user where passwordUser='$passwordUser' and emailUser='$emailUser'";
		
		// execute verification query
		$res = mysqli_query($link,$req);

		// if no problem on verification
		if($res){
			// get user if exist
			$exist = mysqli_fetch_row($res);
			// if no user exist
			if(!$exist){
				// requette to insert new user
				$reqInsert = "INSERT INTO user VALUES(NULL,
				'$nomUser',
				'$naissanceUser',
				'$prenomUser',
				'$emailUser',
				'$passwordUser',
				'$telUser',
				'$numRueUser',
				'$nomRueUser',
				'$villeUser',
				'$cpUser',
				'$paysUser'
				)";

				//execute  insertion requette
				$resInsert = mysqli_query($link,$reqInsert);
			
				// if execution well done
				if($resInsert){
					echo "inscription reussite";
					// get the last inserted id
					$idUser = mysqli_insert_id($link);
					$_SESSION['idUser'] = $idUser;
				}
				// execution failed
				else{
					echo "problem d'inscription";
					echo mysqli_error($link);
				}
			}
			// user exist already
			else{
				return 403;
			}
		}
		// user verification failed
		else{
			echo "problem sur la requette";
		}
	}
}

// addEtude
function addEtude(){
	//connect to database
	$link= connect_database();

	//if not connected
	if(!$link){
		echo "a problem occured !!! ";
	}
	// connexion ok
	else{
		// get all datas
		$diplomeEtude = $_POST['diplomeEtude'];
		$anneeEtude = $_POST['anneeEtude'];
		$anneeEtude = intval(date_format(NEW DateTime($anneeEtude),'Y'));
		$ecoleEtude = $_POST['ecoleEtude'];

		// requette to verify the existance of a etude
		$req = "SELECT * FROM etude WHERE diplomeEtude='$diplomeEtude' AND anneeEtude='$anneeEtude' AND ecoleEtude='$ecoleEtude'";
		
		// execute verification query
		$res = mysqli_query($link,$req);
		// if no problem on verification
		if($res){
			// get user if exist
			$exist = mysqli_fetch_row($res);
			// if no user exist
			if(!$exist){
				// requette to insert new tude
				$reqInsert = "INSERT INTO etude VALUES (NULL,
				'$diplomeEtude',
				'$anneeEtude',
				'$ecoleEtude'
				)";

				//execute  insertion requette
				$resInsert = mysqli_query($link,$reqInsert);
				// if execution well done
				if($resInsert){
					// get the last inserted id
					$idEtude = mysqli_insert_id($link);
					$_SESSION['idEtude'] = $idEtude;		
				}
				// execution failed
				else{
					echo "probleme d'ajout";
					echo mysqli_error($link);
				}
			}
			// etude exist already
			else{
				$idEtude = $exist[0];
				$_SESSION['idEtude'] = $idEtude;
			}
		
			$idEtude= $_SESSION['idEtude'];
			$idUser=$_SESSION['idUser'];
			$reqUserEtude = "INSERT INTO userEtude VALUES (NULL,$idUser,$idEtude)";
			$resUserEtude = mysqli_query($link,$reqUserEtude);

			if($resUserEtude){
				echo "insertion reussie";
			}
			else{
				echo mysqli_error($link);
			}
		}
		// user verification failed
		else{
			echo "false";
		}
  	}				
}

// AddCompetence
function addCompetence(){
	//connect to database
	$link= connect_database();

	//if not connected
	if(!$link){
		echo "a problem occured !!! ";
	}
	// connexion ok
	else{
		// get all datas
		$libCompetence = $_POST['libCompetence'];

		// requette to verify the existance of a Competence
		$req = "SELECT * FROM Competence WHERE libCompetence='$libCompetence'";
		
		// execute verification query
		$res = mysqli_query($link,$req);
		// if no problem on verification
		if($res){
			// get user if exist
			$exist = mysqli_fetch_row($res);
			// if no user exist
			if(!$exist){
				// requette to insert new competence
				$reqInsert = "INSERT INTO Competence VALUES (NULL,
				'$libCompetence'
				)";

				//execute  insertion requette
				$resInsert = mysqli_query($link,$reqInsert);

				// if execution well done
				if($resInsert){
					// get the last inserted id
					$idCompetence = mysqli_insert_id($link);
					$_SESSION['idCompetence'] = $idCompetence;		
				}
				// execution failed
				else{
					echo "probleme d'ajout";
					echo mysqli_error($link);
				}
			}
			// Competence exist already
			else{
				$idCompetence = $exist[0];
				$_SESSION['idCompetence'] = $idCompetence;
			}
		
			$idCompetence= $_SESSION['idCompetence'];
			$idUser=$_SESSION['idUser'];
			$reqUserCompetence = "INSERT INTO userCompetence VALUES (NULL,$idUser,$idCompetence)";
			$resUserCompetence = mysqli_query($link,$reqUserCompetence);

			if($resUserCompetence){
				return true;
			}
			else{
				echo mysqli_error($link);
			}
		}
		// user verification failed
		else{
			echo "false";
		}
  	}				
}

// AddExperience
function addExperience() {
	//connect to database
	$link = connect_database();
	//if not connected
	if(!$link) {
		echo " a problem was occured !!! ";
	}
	// connexion ok
	else {
		$debutExperience = $_POST['debutExperience'];
		$debutExperience = date_format(new DateTime($debutExperience),'Y-m-d');
		$finExperience = $_POST['finExperience'];
		$finExperience = date_format(new DateTime($finExperience),'Y-m-d');
		$entrepriseExperience = $_POST['entrepriseExperience'];
		$descriptionExperience = $_POST['descriptionExperience'];
		// requette to verify the existance
		$req = "SELECT * FROM experience WHERE debutExperience = '$debutExperience' 
												AND finExperience = '$finExperience' 
												AND entrepriseExperience = '$entrepriseExperience'
												AND descriptionExperience = '$descriptionExperience'
												AND idUSER = '$idUser'";
		// execute verification query
		$res = mysqli_query($link, $req);
		// if no problem on verification
		if($res) {
			// get user if exist
			$exist = mysqli_fetch_row($res);
			// if no user exist
			if (!$exist) {
				$idUser = $_SESSION['idUser'];
				// query to insert new experience
				$reqInsert = "INSERT INTO experience VALUES(NULL,
				'$debutExperience',
				'$finExperience',
				'$entrepriseExperience',
				'$descriptionExperience',
				'$idUser'
				)";
				// execute insertion query
				$resInsert = mysqli_query($link, $reqInsert);
				// if excution well done
				if($resInsert) {
					// get the last inserted id
					$idExp = mysqli_insert_id($link);
					$_SESSION['idExp'] = $idExp;
				}
				// execution failed
				else {
					echo "problem d'ajout";
					echo mysqli_error($link);
				}
			}
			// experience exist already
			else {
				$idExp = $exist[0];
				$_SESSION['idExp'] = $idExp;
			}

			// $idExp = $_SESSION['idExp'];
			// $idUser = $_SESSION['idUser'];
			// $reqUserExperience = "INSERT INTO userExperience VALUES (NULL, $idUser, $idExp)";
			// $resUserExperience = mysqli_query($link, $reqUserExperience);
			// if($resUserExperience) {
			// 	echo "Insertion réussie";
			// }
			// else {
			// 	echo mysqli_error($link);
			// }
		}
		// experience check failed
		else {
			// echo "false";
			echo mysqli_error($link);
		}
	}
}

?>