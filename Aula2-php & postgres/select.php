<?php
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");




$query="SELECT codigo,nome FROM clientes;";


$result=pg_query($conn,$query);




if($result)


{



while ($row=pg_fetch_assoc($result))



{




echo $row['codigo'].' – '.$row['nome'].$row['idade'].' – '.$row['sexo'].'<br>';



}


}




pg_close($conn);
?>

