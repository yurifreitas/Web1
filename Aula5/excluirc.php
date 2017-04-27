<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
       
       $cod = $_POST['cod'];
        
         echo $cod; 
        pg_query($conn, "DELETE FROM public.cidade WHERE cod = $cod;");
        pg_close($conn);


        ?>

<?php header('location:./selectc.php');?>

</body>
</html>
