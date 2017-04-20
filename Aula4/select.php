<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
    
	<div class="tudo">
		<header>
		
		</header>
<div class="meio">
    <nav>
    menu
    </nav>
<section>
    <div class="container">
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
'<form method="POST" action="./altera.php">';



echo '<input type="submit" name="altera" value="alterar"> ';
echo '<input type="hidden" name="cod" value="'. $row['cod'].'">'.

'</form></td><td>'.
'<form method="POST" action="./exclui.php">'.
'<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="'. $row['cod'].'">
</form></td></tr>';



}
echo '</table>';


}




pg_close($conn);


        ?>


        </div>

 </section>
</div>
		
            
<footer>Rodape</footer>
	</div>
</body>
</html>
