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
                $conn = pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");





                $query = "SELECT pessoas.cod,nome,idade,sexo,nomec from public.pessoas left join  cidade on(pessoas.cod=cidade.codc);";


                $result = pg_query($conn, $query);




                if ($result) {

                    echo "<table border='1px'>";
                    echo '<tr><td>Codigo:</td>' . '<td>Nome:</td>' . '<td>Idade</td>' . '<td>Sexo</td>' . '<td>Cidade</td>' . '<td>Alterar</td>' . '<td>Excluir</td></tr>';

                    while ($row = pg_fetch_assoc($result)) {




                        echo '<tr><td>' . $row['cod'] . ' </td><td> ' . $row['nome'] . ' </td> <td> ' . $row['idade'] . ' </td> <td> ' . $row['sexo'] . '</td> <td> ' . $row['nomec'] . '</td> ' .
                        '<td>' .
                        '<form method="POST" action="./altera.php">';



                        echo '<input type="submit" name="altera" value="alterar"> ';
                        echo '<input type="hidden" name="cod" value="' . $row['cod'] . '">' .
                        '</form></td><td>' .
                        '<form method="POST" action="./exclui.php">' .
                        '<input type="submit" name="exclui" value="excluir">
<input type="hidden" name="cod" value="' . $row['cod'] . '">
</form></td></tr>';
                    }
                    echo '</table>';
                }




                pg_close($conn);
                ?>



                <div class="login">
                    <form method="POST" action="http://127.0.0.1/Aula4/inserir.php">

                        Nome: <input type=text name="nome"><br/>
                        Idade:<input type=text name="idade"><br/>
                        Sexo: <br>Feminino  <input type="radio" name="sexo" value="F" checked >
                        Masculino <input type="radio" name="sexo" value="M"><br/>
                        <select name="codc">
                <?php
                $conn = pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");




                $query = "SELECT pessoas.cod,nome,idade,sexo,nomec from public.pessoas left join  cidade on(pessoas.cod=cidade.codc);";

                $result = pg_query($conn, $query);

                if ($result) {
                    while ($row = pg_fetch_assoc($result)) {
                        $nomec = $row['nomec'];
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