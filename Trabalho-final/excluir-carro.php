<?php
include("funcao.php");
$conn=conecta();
        
        
       
        
          
        pg_query($conn, "DELETE FROM public.carro WHERE cod= $_POST[cod];");
        pg_close($conn);
        header('location:./carro.php');
?>
