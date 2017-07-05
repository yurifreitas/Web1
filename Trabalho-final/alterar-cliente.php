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
 
<form method="POST" action="./update-cliente.php">

<?php  
$conn=conecta();

$cod=$_POST['cod'];
 $query="SELECT nome,cpf,codc FROM public.cliente where cod= $_POST[cod]";
$result=pg_query($conn,$query); 
	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$nome= $row['nome'];
                        $cpf= $row['cpf'];
                        $codcidade= $row['codc'];
			
		}
	}
pg_close($conn);
  

       echo 'Nome: <input type=text name="nomec" value='.$nome.' > <br>';
        echo ' CPF: <input type=text name="cpf" value='.$cpf.' > ';
        
 
                 
                     
 
  ?>
    <select name="codcc">
                <?php
                $conn=conecta();




                $query = "SELECT cod,nome from public.cidades ";

                $result = pg_query($conn, $query);

                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $nomec = $row['nome'];
                        $codc = $row['cod'];



                        echo '<option value="' . $codc . '">' . $nomec . '</option>';
                    }
                }



                pg_close($conn);
                echo 
     '<input type="submit" name="cod" value="alterar">
         <input type="hidden" name="cod" value='.$cod.'>';
                ?>  

                        </select>     
    </form>
                          </div>

            </div>

        </section>
    </div>

                            <?php include("footer.php") ?>