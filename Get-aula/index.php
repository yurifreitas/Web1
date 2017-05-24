<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
    
    <div class="tudo">
       
<div class="meio">
     <nav>
       </nav>
<section>
    <div class="container">




   
      <br>
        
     <?php



        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");

echo $_GET['Mensagem'];



$query="SELECT cod, nome, idade, sexo FROM public.pessoas;";


$result=pg_query($conn,$query);




if($result)


{

echo "<table border='1px'>"; 
echo  '<tr><td>Codigo:</td>'.'<td>Nome:</td>'.'<td>Idade</td>'.'<td>Alterar</td>'.'<td>Excluir</td></tr>';

while ($row=pg_fetch_assoc($result))



{




echo '<tr><td>'.$row['cod'].' </td><td> '.$row['nome'].' </td> <td> '.$row['idade'].' </td> '.
'<td>';
$codd=$row['cod'];

echo '<a href="./altera.php?cod='.$codd.'">Alterar</a>'

.'</td><td>';


echo '<a href="./exclui.php?cod='.$codd.'">Excluir</a>';
echo'</td></tr>';



}
echo '</table>';


}




pg_close($conn);


        ?>

<a href="./insere.php">Novo</a>
   

        </div>

 </section>
</div>
        
            

    </div>
</body>
</html>
