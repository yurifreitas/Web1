<?php
include("funcao.php");
$conn=conecta();
        
        
        $nome = $_POST['nome']; 
        
          
        pg_query($conn, "UPDATE public.cidades SET  nome='$nome' WHERE cod= $_POST[cod]");
        pg_close($conn);
        header('location:./cidade.php');
?>
