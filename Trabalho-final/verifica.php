<?php

session_start();

$log=$_POST['login'];
$senha=$_POST['senha'];

	include("funcao.php");


$conn=conecta();
        
        $query="SELECT login, senha FROM public.login where login='".$log."' and senha='".$senha."';";

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