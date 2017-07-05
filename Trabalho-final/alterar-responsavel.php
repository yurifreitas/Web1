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
 
<form method="POST" action="./update-responsavel.php">

<?php  
$conn=conecta();

$cod=$_POST['cod'];
 $query="SELECT nome,codc FROM public.responsavel where cod= $_POST[cod]";
$result=pg_query($conn,$query); 
	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$nome= $row['nome'];
                        
                        $codc= $row['codc'];
			
		}
	}
pg_close($conn);
  

       echo 'Nome: <input type=text name="nomec" value='.$nome.' > <br>';
       
        
 
                 
                     
 
  ?>
    <select name="codc">
                <?php
                $conn=conecta();




                $query = "SELECT cod,nome from public.cidades ";

                $result = pg_query($conn, $query);

                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $nomec = $row['nome'];
                        $codcd = $row['cod'];



                        echo '<option value="' . $codcd . '">' . $nomec . '</option>';
                    }
                }



                pg_close($conn);
  
                ?>  

                        </select>  
    <?php               echo 
     '<input type="submit" name="cod" value="alterar">
         <input type="hidden" name="cod" value='.$cod.'>';?>
    </form>
                          </div>

            </div>

        </section>
    </div>

                            <?php include("footer.php") ?>