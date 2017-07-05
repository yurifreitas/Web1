<?php
include("funcao.php");
$conn=conecta();
        
        
       
        
          
        pg_query($conn, "DELETE FROM public.responsavel WHERE cod= $_POST[cod];");
        pg_close($conn);
        header('location:./responsavel.php');
?>

