<?php
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
   
    $rec = fopen("arquivo.txt","a") or die("erro ao abrir");
    $texto = $nome.'-'.$cpf;
    echo $texto;
    fwrite($rec,$texto);
    fwrite($rec,"\n");

    fclose($rec);
    header("Location: site.php");  
?>