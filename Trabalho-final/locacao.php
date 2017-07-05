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




               

                <?php
                $conn=conecta();





                $query = "SELECT codlocacao, placa, cliente.nome AS nomecliente, responsavel.nome AS nomeresponsavel
  FROM public.locacao inner join carro on(codcarro=carro.cod) inner join cliente on(codcliente=cliente.cod) inner join responsavel on(codresponsavel=responsavel.cod);
;";


                $result = pg_query($conn, $query);




                if ($result) {

                    echo "<table border='1px'>";
                    echo '<tr><td>placa</td>' . '<td>responsavel</td>' . '<td>cliente</td>'  . '<td>Alterar</td>' . '<td>Excluir</td></tr>';

                    while ($row = pg_fetch_assoc($result)) {




                        echo '<tr><td> ' . $row['placa'] . ' </td>  <td> ' . $row['nomeresponsavel'] . '</td>  <td> ' . $row['nomecliente'] . '</td>  ' .
                        '<td>' .
                        '<form method="POST" action="./alterar-locacao.php">';



                        echo '<input type="submit" name="altera" value="alterar"> ';
                        echo '<input type="hidden" name="cod" value="' . $row['codlocacao'] . '">' .
                        '</form></td><td>' .
                        '<form method="POST" action="./excluir-locacao.php">' .
                        '<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="' . $row['codlocacao'] . '">
</form></td></tr>';
                    }
                    echo '</table>';
                }




                pg_close($conn);
                ?>



                <div class="login">
                   <form method="POST" action="http://127.0.0.1/Trabalho-final/inserir-locacao.php">

                         
                        
                        
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
                    Nome cliente:    <select name="codcli"><br>
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
                    <br>
                    Data Saida: <input type=text name="dts"><br/>
                    <br>
                     Data chegada: <input type=text name="dtc"><br/>

                        <input type="submit" name="submit" value="Insert"> 

                    </form>
                </div>

            </div>

        </section>
    </div>


                            <?php include("footer.php") ?>