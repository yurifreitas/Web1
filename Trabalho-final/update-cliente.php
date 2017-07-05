<?php
include("funcao.php");
$conn=conecta();
        
        
        $nome = $_POST['nomec']; 
        $cpf = $_POST['cpf']; 
        $codc = $_POST['codcc']; 
       
        echo $nome.$cpf.$codc.$_POST[cod];
          
        pg_query($conn, "UPDATE public.cliente SET  nome='$nome',cpf='$cpf',codc='$codc' WHERE cod= $_POST[cod]");
        pg_close($conn);
        header('location:./index.php');
?>
