<?php
include("funcao.php");
$conn=conecta();
        
        
         
        
          
        pg_query($conn, "DELETE FROM public.cidades WHERE cod= $_POST[cod];");
        pg_close($conn);
        header('location:./cidade.php');
?>

