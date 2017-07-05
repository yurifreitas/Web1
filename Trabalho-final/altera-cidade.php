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
 
<form method="POST" action="./update-cidade.php">

<?php  
$conn=conecta();

$cod=$_POST['cod'];
 $query="SELECT nome FROM public.cidades where cod= $_POST[cod]";
$result=pg_query($conn,$query); 
	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$nome= $row['nome'];
			
		}
	}
pg_close($conn);
        ?>  
 
<?php 
       echo ' Nome: <input type=text name="nome" value='.$nome.' > ';
        
 
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