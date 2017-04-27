<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
        $nome = $_POST['nome'];
        $idade =$_POST['idade'];
        $sexo =$_POST['sexo'];
        $cod =$_POST['codc'];
        $nomec = $_POST['nomec'];
        
        
        pg_query($conn, "INSERT INTO public.pessoas( nome, idade, sexo) VALUES ('$nome','$idade','$sexo')");
        pg_query($conn, "INSERT INTO public.cidade(codc) VALUES ( '$cod');");
        
        
        pg_close($conn);

        
        ?>

        

        
    </body>
</html>
