<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
    
	<div class="tudo">
		<header>
		header	
		</header>
<div class="meio">
    <nav>
        <ul>
            <li><a href="http://127.0.0.1/Aula3/index.php">Cliente</a></li>
           <li><a href="http://127.0.0.1/Aula3/dependente.php">Dependente</a></li>
        </ul>
    </nav>
<section>
    <div class="container">
    
        <form method="POST" action="http://127.0.0.1/Aula3/inserird.php">




                    Nome Dependente: <input type=text name="nomed"><br/>
                    Cliente:<select name="codc">
                    <?php  
$conn=pg_connect("host=127.0.0.1 port=5432 dbname=loja user='postgres' password='postgres'");




 $query="SELECT cod, nome FROM public.pessoas;";

$result=pg_query($conn,$query); 

    if($result)
    {
        while ($row=pg_fetch_assoc($result))
        {
       $nomec = $row['nome'];
       $codc = $row['cod'];
                    
            
                echo $nomec;
               echo '<option value="'.$codc.'">'.$nomec.'</option>';
        }

    }



pg_close($conn);


        ?>  
                    
          </select>          
                    
                    <input type="submit" name="submit" value="Insert">   
        </form>
      

        </div>

 </section>
</div>
		
            
<footer>Rodape</footer>
	</div>
</body>
</html>
