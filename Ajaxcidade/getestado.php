<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php
$q = intval($_GET['q']);

$conn=pg_connect("host=127.0.0.1 port=5432 dbname=postgres user='postgres' password='postgres'");





$query="SELECT nome FROM public.cidade  WHERE cod_estado = ".$q.";";


$result=pg_query($conn,$query);




if($result)


{

echo '<select name="cidade">';
  

 
while ($row=pg_fetch_assoc($result)){
echo  '<option value="">'.$row['nome'].'</option>';
}
 echo '</select>';
pg_close($conn);
}
?>
</body>
</html>