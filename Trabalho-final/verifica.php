<?php

session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
$log=$_POST['login'];
$senha=$_POST['senha'];

	include("funcao.php");


$conn=conecta();
        
        $query="SELECT id, senha FROM public.login where id='".$log."' and senha='".$senha."';";

echo $query;

$result=pg_query($conn,$query);

echo $result;

if(pg_num_rows($result) >0 ){


$_SESSION['login'] = $log;
 
header('location:./index.php');

}else{
	header('location:./destroi.php');
 header('location:./login.php');
}


  pg_close($conn); 
?>