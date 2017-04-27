<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
      
        $conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");
        
        
        $nomec = $_POST['nomec'];
       
        
        
          
        pg_query($conn, "INSERT INTO public.cidade(nomec) VALUES ( '$nomec');");
        pg_close($conn);
            

        ?>

       
        <?php header('location:./selectc.php');?>

        
    </body>
</html>
