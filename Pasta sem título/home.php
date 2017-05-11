<?php 
session_start();

echo 'Ola '.$_SESSION['login']; ?>

 <form action="destroi.php" method="post">
             
  <button type="submit" class="btn btn-primary">Sair</button> 
            </form>


