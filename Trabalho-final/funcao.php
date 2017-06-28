<?php 

function verifica(){
	
session_start();
if(!(isset($_SESSION['login']))){
	
	header('location:./login.php');
	

}
	

}

function conecta(){
	$con=pg_connect("host=localhost port=5432 dbname=postgres user='postgres' password='postgres'");
	
	return $con;
}



?>