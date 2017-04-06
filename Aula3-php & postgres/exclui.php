<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
        $codigo = $_POST['cod'];
       
        
          
        pg_query($conn, "DELETE FROM public.pessoas
 WHERE cod='$codigo';");
        pg_close($conn);


        ?>

<?php include("select.php");?>

</body>
</html>
