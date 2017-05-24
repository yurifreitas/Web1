<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
       
       $codd=$_GET['cod'];
        
          
        pg_query($conn, "DELETE FROM public.pessoas
        WHERE cod= $codd");
       
        pg_close($conn);


        ?>

<?php header('location:./index.php?Mensagem=Exclusão');?>

</body>
</html>
