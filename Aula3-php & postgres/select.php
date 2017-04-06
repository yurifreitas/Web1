 <!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 <?php



        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");





$query="SELECT cod, nome, idade, sexo FROM public.pessoas;";


$result=pg_query($conn,$query);




if($result)


{

echo "<table border='1px'>"; 
echo  '<tr><td>Codigo:</td>'.'<td>Nome:</td>'.'<td>Idade</td>'.'<td>Sexo</td>'.'<td>Alterar</td>'.'<td>Excluir</td></tr>';

while ($row=pg_fetch_assoc($result))



{




echo '<tr><td>'.$row['cod'].' </td><td> '.$row['nome'].' </td> <td> '.$row['idade'].' </td> <td> '.$row['sexo'].'</td> '.
'<td>'.
'<form method="POST" action="http://127.0.0.1/Aula3-php%20&%20postgres/altera.php">';

echo '<input type="hidden" name="cod_alt" value="'. $row['cod'].'">';

echo '<input type="submit" name="submit" value="alterar"> '

.'</form></td><td>'.
'<form method="POST" action="http://127.0.0.1/Aula3-php%20&%20postgres/exclui.php">'.
'<input type="submit" name="submit" value="excluir">'.
'</form></td>'
 .'</tr><br>';



}
echo '</table>';


}




pg_close($conn);


        ?>

</body>
</html>