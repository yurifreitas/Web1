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





                $query = "SELECT cod,nome from public.cidades;";


                $result = pg_query($conn, $query);




                if ($result) {

                    echo "<table border='1px'>";
                    echo '<tr><td>Codigo:</td>' . '<td>Nome:</td></tr>';

                    while ($row = pg_fetch_assoc($result)) {




                        echo '<tr><td>' . $row['cod'] . ' </td><td> ' . $row['nome'] . ' </td> ' .
                        '<td>' .
                        '<form method="POST" action="./altera-cidade.php">';
                        echo '<input type="submit" name="altera" value="alterar"> ';
                        echo '<input type="hidden" name="cod" value="' . $row['cod'] . '">' .
                        '</form></td><td>' .
                        '<form method="POST" action="./exclui-cidade.php">' .
                        '<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="' . $row['cod'] . '">
</form></td></tr>';
                    }
                    echo '</table>';
                }




                pg_close($conn);
                ?>



                <div class="login">
                    <form method="POST" action="http://127.0.0.1/Trabalho-final/inserir-cidade.php">

                        Nome: <input type=text name="nome"><br>  
                        <input type="submit" name="submit" value="Insert"> 

                    </form>
                </div>

            </div>

        </section>
    </div>


                            <?php include("footer.php") ?>