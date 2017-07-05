<?php
include("funcao.php");
$conn=conecta();
        
        
        $nome = $_POST['nomec']; 
         
        $codc = $_POST['codc']; 
       
        
          
        pg_query($conn, "UPDATE public.responsavel SET  nome='$nome',codc='$codc' WHERE cod= $_POST[cod]");
        pg_close($conn);
        header('location:./responsavel.php');
?>
