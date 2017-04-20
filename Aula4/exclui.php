<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
       
       
        
          
        pg_query($conn, "DELETE FROM public.pessoas
            WHERE cod= $_POST[cod]");
        pg_close($conn);


        ?>

<?php header('location:./select.php');?>

</body>
</html>
