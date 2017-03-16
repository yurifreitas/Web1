<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php 


       foreach($_POST["nomes"] as $nom)
        {
        $num= $num+1;
        echo "<br>Nome do filho: ".$num. " ".$nom." ";
        }

       ?>

    </body>
</html>
