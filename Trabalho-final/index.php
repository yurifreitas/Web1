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





                $query = "SELECT cliente.cod AS codcliente ,cliente.nome AS nomec , cpf, codc,cidades.nome FROM public.cliente inner join cidades on(cliente.codc=cidades.cod);";


                $result = pg_query($conn, $query);




                if ($result) {

                    echo "<table border='1px'>";
                    echo '<tr><td>Nome:</td>' . '<td>CPF</td>' . '<td>Cidade</td>'  . '<td>Alterar</td>' . '<td>Excluir</td></tr>';

                    while ($row = pg_fetch_assoc($result)) {




                        echo '<tr><td> ' . $row['nomec'] . ' </td> <td> ' . $row['cpf'] . ' </td> <td> ' . $row['nome'] . '</td>  ' .
                        '<td>' .
                        '<form method="POST" action="./alterar-cliente.php">';



                        echo '<input type="submit" name="altera" value="alterar"> ';
                        echo '<input type="hidden" name="cod" value="' . $row['codcliente'] . '">' .
                        '</form></td><td>' .
                        '<form method="POST" action="./excluir-cliente.php">' .
                        '<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="' . $row['codcliente'] . '">
</form></td></tr>';
                    }
                    echo '</table>';
                }




                pg_close($conn);
                ?>



                <div class="login">
                   <form method="POST" action="http://127.0.0.1/Trabalho-final/inserir-cliente.php">

                        Nome: <input type=text name="nome"><br/>
                        CPF:<input type=text name="cpf"><br/>
                        
                        <select name="codc">
                <?php
                $conn=conecta();




                $query = "SELECT cod,nome from public.cidades;";

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

                        <input type="submit" name="submit" value="Insert"> 

                    </form>
                </div>

            </div>

        </section>
    </div>


                            <?php include("footer.php") ?>