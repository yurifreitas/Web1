<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


 
<form method="POST" action="./updated.php">

<?php  
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");




 $query="SELECT 
  dependentes.nomedp, 
  dependentes.codd, 
  pessoas.nome
FROM 
  public.dependentes, 
  public.pessoas where dependentes.codc =pessoas.cod;
";

$result=pg_query($conn,$query); 

	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$nomed=$row['nomedp'];
			$codc=$row['codc'];
			$nomec=$row['nome'];

		}

	}



pg_close($conn);


        ?>  
 
<?php 

       echo ' Nome: <input type=text name="nome" value='.$nomed.' > <br/>
         Cod DP:<input type=text name="codc" value='.$nomec.'><br/>';
        
 


 
 echo 
     '<input type="submit" name="cod" value="alterar">
         <input type="hidden" name="cod" value='.$codd.'>';

  ?>
</form>
 </body>
</html>