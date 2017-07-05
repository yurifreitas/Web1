<?php include("funcao.php");
$conn=conecta();
        
        
        $codr = $_POST['codresp']; 
         
         $codcar = $_POST['codcar']; 
         $codcli = $_POST['codcli']; 
         $dts = $_POST['dts'];
         $dtc = $_POST['dtc'];
        
          echo $codcar.$codr.$codcli.$dtc.$dts;
        pg_query($conn, "INSERT INTO public.locacao(codcarro, codcliente, codresponsavel, dataentrada, 
            datasaida) VALUES ('$codcar','$codcli','$codr','$dts','$dtc');");
        pg_close($conn);
        header('location:./locacao.php');
        
        ?>