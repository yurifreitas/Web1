<?php
include("funcao.php");
$conn=conecta();
        
        
       
        
          
        pg_query($conn, "DELETE FROM public.cliente WHERE cod= $_POST[cod];");
        pg_close($conn);
        header('location:./index.php');
?>

