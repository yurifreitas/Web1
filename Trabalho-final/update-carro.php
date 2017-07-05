<?php
include("funcao.php");
$conn=conecta();
        
        
        $placa = $_POST['placa']; 
        $modelo = $_POST['modelo'];
        
          
        pg_query($conn, "UPDATE public.carro SET  placa='$placa', modelo='$modelo' WHERE cod= $_POST[cod]");
        pg_close($conn);
        header('location:./carro.php');
?>
