<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
            table{
                border-color: red;
                
            }
            body{
                align-content: center;
            }
            </style>
        <?php
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");




$query="SELECT cod, nome, idade, sexo FROM public.pessoas;";


$result=pg_query($conn,$query);




if($result)


{



while ($row=pg_fetch_assoc($result))



{


echo "<table border='1px'>"; 
echo  '<tr><td>Codigo:</td>'.'<td>Nome:</td>'.'<td>Idade</td>'.'<td>Sexo</td></tr>';

echo '<tr><td>'.$row['cod'].' </td><td> '.$row['nome'].' </td> <td> '.$row['idade'].' </td> <td> '.$row['sexo'].'</td></tr><br>';
echo '</table>';


}


}




pg_close($conn);
        ?>
    </body>
</html>
