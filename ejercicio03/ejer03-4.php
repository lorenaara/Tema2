<?php
    include('html/plantilla.html');
    $dia= $_GET['dia'];
    $dia= strtotime($dia);
    $dia= date("D d m Y", $dia);
    echo "<p>El día introducido es: <strong>". $dia . "</strong></p>";
    ?>
<br> <div>
<a href="ejer03-3.php">Codigo de la pagina</a>
    </div>

<footer>
        <h3>Lorena Aranda de Rojas</h3>
    </footer>