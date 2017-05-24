<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
    
    <div class="tudo">
       
<div class="meio">
     <nav>
       </nav>
<section>
    <div class="container">




    <div class="login">
        <form method="POST" action="http://127.0.0.1/Get-aula/inserir.php" name="form1">

                    Nome:<input type=text name="nome"><br>
                    Idade: <input type=text name="idade"><br>
                    Sexo: Feminino  <input type="radio" name="sexo" value="F" checked >
                              Masculino <input type="radio" name="sexo" value="M"><br/>
                              

                    <a onclick="submeter();"> Enviar</a>
                 
        </form>
      </div>

      <script type="text/javascript">
          function submeter(){
            document.form1.submit() ;

          }


      </script>
      <br>
        
     

   

        </div>

 </section>
</div>
        
            

    </div>
</body>
</html>
