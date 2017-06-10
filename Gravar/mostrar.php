<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<scrip>
    <?php
    function open() {
        $rec = fopen('arquivo.txt', 'r');
    }
    ?>
</scrip>

<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
	<div class="tudo">
            <header>
                
       
            </header>
            <div class="meio">
                <nav>
                    <a href="site.php">inicial</a><br>
                    <a href="mostrar.php">Mostra</a><br>
                    <br>
                </nav>
                <section>
                   <?php
                    $mostrar = fopen("arquivo.txt", "r");
                    if ($mostrar) {
                        while (!feof($mostrar)) {
                            $buffer = fgets($mostrar);
                            echo $buffer;
				echo '<br>';
                        }
                        fclose($mostrar);
                    }
                    ?>
                </section>
            </div>
            <footer>
                Rodape
            </footer>
	</div>
</body>
</html>
