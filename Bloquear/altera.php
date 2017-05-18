<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


 
<form method="POST" action="./update.php">

<?php  
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");


$cod=$_POST['cod'];

 $query="SELECT cod, nome, idade, sexo FROM public.pessoas where cod= $_POST[cod]";

$result=pg_query($conn,$query); 

	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$nome= $row['nome'];
			$idade=$row['idade'];
			$sexo=$row['sexo'];

		}

	}



pg_close($conn);


        ?>  
 
<?php 

       echo ' Nome: <input type=text name="nome" value='.$nome.' > <br/>
         Idade:<input type=text name="idade" value='.$idade.'><br/>';
        
 if( $row['sexo'] == 'F')
        	{

        echo 'Sexo: <br>Feminino  <input type="radio" name="sexo" value="F" checked="" >'.
         'Masculino <input type="radio" name="sexo" value="M"><br/>';
          }
          else
          {
          echo
          ' Sexo: <br>Feminino  <input type="radio" name="sexo" value="F"  >'.
         'Masculino <input type="radio" name="sexo" value="M" checked=""><br/>';

          }
          



 
 echo 
     '<input type="submit" name="cod" value="alterar">
         <input type="hidden" name="cod" value='.$cod.'>';

  ?>
</form>
 </body>
</html>