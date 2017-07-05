<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="site.css">
    </head>
    <body>
        <?php
        include("funcao.php");
        verifica();
        ?>
        <div class="tudo">
        <?php include("header.php") ?>
        
<?php include("nav.php") ?>
    
        <section>
            <div class="container">
                <div class="login">
 
<form method="POST" action="./update-carro.php">

<?php  
$conn=conecta();

$cod=$_POST['cod'];
 $query="SELECT placa,modelo FROM public.carro where cod= $_POST[cod]";
$result=pg_query($conn,$query); 
	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$placa= $row['placa'];
                        $modelo= $row['modelo'];
			
		}
	}
pg_close($conn);
        ?>  
 
<?php 
       echo 'Placa: <input type=text name="placa" value='.$placa.' > ';
        echo ' Modelo: <input type=text name="modelo" value='.$modelo.' > ';
        
 
 echo 
     '<input type="submit" name="cod" value="alterar">
         <input type="hidden" name="cod" value='.$cod.'>';
  ?>
    </form>
                          </div>

            </div>

        </section>
    </div>

                            <?php include("footer.php") ?>