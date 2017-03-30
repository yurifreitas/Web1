<?php
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
$query ="update clientes set nome='Fulano'where codigo= 1;";
$query .="update clientes set nome='Fulano2'where codigo= 2;";
$query .="update clientes set nome='Fulana'where codigo= 3;";
pg_query($conn,$query );
pg_close($conn);
?>
