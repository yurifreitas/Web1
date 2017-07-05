<?php
include("funcao.php");
$conn=conecta();
        
        
        $placa = $_POST['placa']; 
         $modelo = $_POST['modelo']; 
        
          
        pg_query($conn, "INSERT INTO public.carro(placa,modelo) VALUES ('$placa','$modelo')");
        pg_close($conn);
        header('location:./carro.php');

?>