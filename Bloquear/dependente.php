<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
    
	<div class="tudo">
		<header>
		header	
		</header>
<div class="meio">
    <nav>
        <ul>
            <li><a href="http://127.0.0.1/Aula4/index.php">Cliente</a></li>
           <li><a href="http://127.0.0.1/Aula4/dependente.php">Dependente</a></li>
           <li><a href="http://127.0.0.1/Aula4/cidade.php">Cidade</a></li>
        </ul>
    </nav>
<section>
    <div class="container">
        
        <?php



        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");





$query='SELECT nomedp, codc, "codd" FROM public.dependentes;';


$result=pg_query($conn,$query);




if($result)


{

echo "<table border='1px'>"; 
echo  '<tr><td> Codigo DP: </td>'.'<td> Nome DP: </td>'.'<td> Codigo C </td>'.'<td>Alterar</td>'.'<td>Excluir</td></tr>';

while ($row=pg_fetch_assoc($result))



{




echo '<tr><td> '.$row['codd'].'  </td><td>  '.$row['nomedp'].'  </td> <td>  '.$row['codc'].'</td> '.
'<td>'.
'<form method="POST" action="./alterad.php">';



echo '<input type="submit" name="altera" value="alterar"> ';
echo '<input type="hidden" name="cod" value="'. $row['codd'].'">'.
'</form></td><td>'.
'<form method="POST" action="./excluidp.php">'.
'<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="'. $row['codd'].'">
</form></td></tr>';



}
echo '</table>';


}




pg_close($conn);


        ?>


    
        <form method="POST" action="http://127.0.0.1/Aula3/inserird.php">




                    Nome Dependente: <input type=text name="nomed"><br/>
                    Cliente:<select name="codc">
                    <?php  
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");




 $query="SELECT cod, nome FROM public.pessoas;";

$result=pg_query($conn,$query); 

    if($result)
    {
        while ($row=pg_fetch_assoc($result))
        {
       $nomec = $row['nome'];
       $codc = $row['cod'];
                    
            
                echo $nomec;
               echo '<option value="'.$codc.'">'.$nomec.'</option>';
        }

    }



pg_close($conn);


        ?>  
                    
          </select>          
                    
                    <input type="submit" name="submit" value="Insert">   
        </form>
      

        </div>

 </section>
</div>
		
            
<footer>Rodape</footer>
	</div>
</body>
</html>
