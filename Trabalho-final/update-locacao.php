<?php include("funcao.php");
$conn=conecta();
        
        
        $codr = $_POST['codresp']; 
         
         $codcar = $_POST['codcar']; 
         $codcli = $_POST['codcli']; 
         $dts = $_POST['dts'];
         $dtc = $_POST['dt'];
        echo $codcar.$codr.$codcli.$dtc.$dts.$_POST[cod];
           pg_query($conn, "UPDATE public.locacao SET codcarro='$codcar', codcliente='$codcli', codresponsavel='$codr', dataentrada='$dts', 
       datasaida='$dtc' WHERE codlocacao= $_POST[cod]");
           
        pg_close($conn);
        pg_close($conn);
        header('location:./locacao.php');
        
        ?>