<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
       
       $codd = $_POST['cod'];
        
         echo $codd; 
        pg_query($conn, "DELETE FROM public.dependentes WHERE codd = $codd;");
        pg_close($conn);


        ?>

<?php header('location:./selected.php');?>

</body>
</html>
