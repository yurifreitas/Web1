<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>





<?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        


        $cod =$_POST['cod_alt'];
        
       
$query='SELECT cod, nome, idade, sexo FROM public.pessoas where cod ='.$cod;

$result=pg_query($conn,$query); 

	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
			

		}

	}
        echo $query;
          
        pg_query($conn, "UPDATE public.pessoasSET  nome='$nome', idade='$idade', sexo='$sexo' WHERE cod='$cod'");
        

        pg_close($conn);


  ?>
  <?php include("select.php");?>

  </body>
</html>
