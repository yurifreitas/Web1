<?php
include("funcao.php");
$conn=conecta();
        
        
       
        
          
        pg_query($conn, "DELETE FROM public.locacao WHERE codlocacao= $_POST[cod];");
        pg_close($conn);
        header('location:./locacao.php');
?>
