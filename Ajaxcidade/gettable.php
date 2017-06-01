<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php
$q = intval($_GET['q']);

$conn=pg_connect("host=127.0.0.1 port=5432 dbname=postgres user='postgres' password='postgres'");





$query="SELECT nome, cod FROM public.estado WHERE cod = ".$q.";";


$result=pg_query($conn,$query);




if($result)


{

echo "<table border='1px'>"; 
echo  '<tr><td>Codigo:</td>'.'<td>Nome:</td></tr>';

while ($row=pg_fetch_assoc($result)){
echo  '<tr><td>'.$row['cod'].'</td>'.'<td>'.$row['nome'].'</td></tr>';
}
echo '</table>';
pg_close($conn);
}
?>
</body>
</html>