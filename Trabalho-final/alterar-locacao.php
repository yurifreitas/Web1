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
 
<form method="POST" action="./update-locacao.php">

<?php  
$conn=conecta();

$cod=$_POST['cod'];
 $query="SELECT codlocacao, placa, cliente.nome AS nomecliente, responsavel.nome AS nomeresponsavel,dataentrada, datasaida FROM public.locacao inner join carro on(codcarro=carro.cod) inner join cliente on(codcliente=cliente.cod) inner join responsavel on(codresponsavel=responsavel.cod)where codlocacao=$cod";
 
$result=pg_query($conn,$query); 
	if($result)
	{
		while ($row=pg_fetch_assoc($result))
		{
		
                    
			$placa= $row['placa'];
                        
                        $nomecli= $row['nomecliente'];
                        $nomeresp= $row['nomeresponsavel'];
                        $dt= $row['dataentrada'];
                        $dts= $row['datasaida'];
			
		}
	}
pg_close($conn);
?>
 Modelo:    <select name="codcar">
                <?php
                $conn=conecta();




                $query = "SELECT cod,modelo from public.carro;";

                $result = pg_query($conn, $query);

                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $nomec = $row['modelo'];
                        $codc = $row['cod'];



                        echo '<option value="' . $codc . '">' . $nomec . '</option>';
                    }
                }



                pg_close($conn);
                ?>  

                        </select>  <br>
                    Nome responsavel:    <select name="codresp">
                <?php
                $conn=conecta();




                $query = "SELECT cod,nome from public.responsavel;";

                $result = pg_query($conn, $query);

                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $nomec = $row['nome'];
                        $codc = $row['cod'];



                        echo '<option value="' . $codc . '">' . $nomec . '</option>';
                    }
                }



                pg_close($conn);
                ?>  

                        </select>   
                    <br>
                    Nome cliente:    <select name="codcli">
                <?php
                $conn=conecta();




                $query = "SELECT cod,nome from public.cliente;";

                $result = pg_query($conn, $query);

                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $nomec = $row['nome'];
                        $codc = $row['cod'];



                        echo '<option value="' . $codc . '">' . $nomec . '</option>';
                    }
                }



                pg_close($conn);
                ?>  

  </select>
<?php 
       echo 'Data saida: <input type=text name="dts" value='.$dt.' > <br>';
       echo 'Data entrada: <input type=text name="dt" value='.$dts.' > <br>';
       
        
 
                 
                     
 
  
  
   
                  echo 
     '<input type="submit" name="cod" value="alterar">
         <input type="hidden" name="cod" value='.$cod.'>';?>
    </form>
                          </div>

            </div>

        </section>
    </div>

                            <?php include("footer.php") ?>