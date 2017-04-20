<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
        $nomed = $_POST['nomed'];
        $codc =$_POST['codc'];
        
        
          
        pg_query($conn, "INSERT INTO public.dependentes(nomedp, codc) VALUES ('$nomed', '$codc');");
        pg_close($conn);


        ?>

       
        <?php header('location:./selected.php');?>

        
    </body>
</html>
