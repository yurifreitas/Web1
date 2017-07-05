<?php
include("funcao.php");
$conn=conecta();
        
        
        $nome = $_POST['nome']; 
         $cpf = $_POST['cpf']; 
         $codc = $_POST['codc']; 
         
        
          echo $nome.$cpf.$codc;
        pg_query($conn, "INSERT INTO public.cliente(nome,cpf,codc) VALUES ('$nome','$cpf','$codc')");
        pg_close($conn);
        header('location:./index.php');
?>
