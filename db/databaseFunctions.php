<?php
session_start();

function connect_database(){
	
	$host ="localhost";
	$username="root";
	$pwd="root";
	$database="cvgenerator";
	$link=mysqli_connect($host,$username,$pwd,$database);
	if($link){	
		return $link;
	}
	else{	
		return false;
	}
}

function disconnect_database($link){
	mysqli_close($link);
}

?>