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





                $query = "SELECT cod,placa,modelo from public.carro;";


                $result = pg_query($conn, $query);




                if ($result) {

                    echo "<table border='1px'>";
                    echo '<tr><td>Codigo:</td>' . '<td>Placa:</td>'. '<td>Modelo:</td></tr>';

                    while ($row = pg_fetch_assoc($result)) {




                        echo '<tr><td>' . $row['cod'] . ' </td><td> ' . $row['placa'] . ' </td> <td> ' . $row['modelo'] . ' </td> ' .
                        '<td>' .
                        '<form method="POST" action="./alterar-carro.php">';
                        echo '<input type="submit" name="altera" value="alterar"> ';
                        echo '<input type="hidden" name="cod" value="' . $row['cod'] . '">' .
                        '</form></td><td>' .
                        '<form method="POST" action="./excluir-carro.php">' .
                        '<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="' . $row['cod'] . '">
</form></td></tr>';
                    }
                    echo '</table>';
                }




                pg_close($conn);
                ?>



                <div class="login">
                    <form method="POST" action="http://127.0.0.1/Trabalho-final/inserir-carro.php">

                        Placa: <input type=text name="placa"><br> 
                        Modelo: <input type=text name="modelo"><br>
                        <input type="submit" name="submit" value="Insert"> 

                    </form>
                </div>

            </div>

        </section>
    </div>


                            <?php include("footer.php") ?>