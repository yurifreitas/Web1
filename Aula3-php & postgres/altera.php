<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


 
<form method="POST" action="http://127.0.0.1/Aula3-php%20&%20postgres/update.php">

<?php  
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");

$cod_alt =$_POST['cod_alt'];


 $query='SELECT cod, nome, idade, sexo FROM public.pessoas where cod ='.$cod_alt;

$result=pg_query($conn,$query); 

	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
			$nome_alt= $row['nome'];
			$idade_alt=$row['idade'];
			$sexo_alt=$row['sexo'];

		}

	}



pg_close($conn);


        ?>  
 


         Nome: <input type=text name="nome" value="<?php echo $nome_alt; ?>" > <br/>
         Idade:<input type=text name="idade" value="<?php echo $idade_alt; ?>"><br/>
        
 <?php if( $row['sexo'] == 'F')
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

?>

 <input type="submit" name="submit" value="Altera">
</form>
  

 </body>
</html>