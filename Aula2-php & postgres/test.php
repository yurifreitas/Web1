<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
        $nome = $_POST['nome'];
        $sexo =$_POST['sexo'];
        $idade =$_POST['idade'];
        
          
        pg_query($conn, "INSERT INTO public.pessoas( nome, idade, sexo) VALUES ('$nome','$idade','$sexo')");
        pg_close($conn);
        ?>
        
        <form method="POST" action="http://127.0.0.1/selectexer.php">
        Mostra resultados na tela:
      
         <input type="submit" name="submit" value="Ver resultados">   
        </form>
        
        
        
    </body>
</html>
