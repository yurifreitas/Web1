<?php
include("funcao.php");
$conn=conecta();
        
        
        $nome = $_POST['nome']; 
        
          
        pg_query($conn, "INSERT INTO public.cidades(nome) VALUES ('$nome')");
        pg_close($conn);
        header('location:./cidade.php');

?>