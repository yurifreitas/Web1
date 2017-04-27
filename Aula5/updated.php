<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>





<?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        

            $nomed=$_POST['nome'];
            $codc=$_POST['codc'];
            $codd=$_POST['cod'];
         
        
       echo $nomed.$codc.$codd;

		
		pg_query($conn, "UPDATE public.dependentes SET nomedp='$nomed', codc='$codc' WHERE  codd= $_POST[cod]");	

		
        
       

        pg_close($conn);


  ?>
        <?php header('location:./selected.php');?>


  </body>
</html>
