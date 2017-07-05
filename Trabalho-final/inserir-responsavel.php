<?php include("funcao.php");
$conn=conecta();
        
        
        $nome = $_POST['nome']; 
         
         $codc = $_POST['codc']; 
         
        
          echo $nome.$cpf.$codc;
        pg_query($conn, "INSERT INTO public.responsavel(nome,codc) VALUES ('$nome','$codc')");
        pg_close($conn);
        header('location:./responsavel.php');
        
        ?>