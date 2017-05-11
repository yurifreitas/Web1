<?php

session_start();

$log=$_POST['login'];
$senha=$_POST['senha'];

	


$conn=pg_connect("host=127.0.0.1 port=5432 dbname=postgres user='postgres' password='postgres'");
        
        $query="SELECT login, senha FROM public.login where login='".$log."' and senha='".$senha."';";

echo $query;

$result=pg_query($conn,$query);

echo $result;

if(pg_num_rows($result) >0 ){


$_SESSION['login'] = $log;
 
header('location:./home.php');

}else{

 header('location:./login.php');
}


  pg_close($conn); 
?>