<?php
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");

pg_query($conn,"INSERT INTO clientes (codigo,nome) values(1,'Joao')");
pg_query($conn, "INSERT INTO clientes (codigo,nome) values(2,'Jose')");
pg_query($conn ,"INSERT INTO clientes (codigo,nome) values(3,'Joana')");
pg_query($conn ,"INSERT INTO clientes (codigo,nome) values(4,'mariana')");
pg_query($conn ,"INSERT INTO clientes (codigo,nome) values(5,'Ana')");
pg_query($conn ,"INSERT INTO clientes (codigo,nome) values(6,'Maria')");

pg_close($con);
?>

