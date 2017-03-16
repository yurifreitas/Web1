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
    <body class="container">
        <?php
     

    
        foreach($_POST["numeros"] as $numero)
        {
        $numeros .=  " ".$numero." ";
    }

      
       $tab = '<table border="1">';
        $tab .= '<tr>';
        $tab .= ' <td>Nome Campo</td>';
        $tab .=  '<td>Valor Campo</td>';
        $tab .= '</tr> ';
        $tab .= '<tr>';
        $tab .=   '<td>Nome</td>';
        $tab .=    '<td>'.$_POST["nome"].'</td>';
        $tab .=  '</tr>' ;
        $tab .= '<tr>';
        $tab .=   '<td>Email</td>';
        $tab .=    '<td>'.$_POST["email"].'</td>';
        $tab .=  '</tr>' ;
        $tab .= '<tr>';
        $tab .=   '<td>Comentario</td>';
        $tab .=    '<td>'.$_POST["comentario"].'</td>';
        $tab .=  '</tr>' ;
        $tab .= '<tr>';
        $tab .=   '<td>Livros</td>';
        $tab .=    '<td>'.$_POST["livros"].'</td>';
        $tab .=  '</tr>' ;
        $tab .= '<tr>';
        $tab .=   '<td>Linguagem de programaç</td>';
        $tab .=    '<td>'.$numeros.'</td>';
        $tab .=  '</tr>' ;
        $tab .= '<tr>';
        $tab .=   '<td>Campo Hidden:</td>';
        $tab .=    '<td>'.$_POST["escondido"].'</td>';
        $tab .=  '</tr>' ;
        $tab .= '</table>';

         echo $tab;
  ?>
  <br>

   <?php 
   $cont =$_POST["qtfilhos"];
    echo "<form action='imprimir_dados.php' method='POST'>";
   for ($n = 1; $n <= $cont; $n++){    
        echo "Nome: <input type=text name=nomes[]><br>";
        }
        echo"<input type=submit value='OK'>"; 
        echo "</form>";
    ?>

    </body>
</html>
