<?php
    include('html/plantilla.html');
    $persona1=new DateTime($_GET['ano']."/". $_GET['mes']. "/". $_GET['dia']);
    $persona2=new DateTime( $_GET['ano2']. "/". $_GET['mes2']. "/". $_GET['dia2']);
    $resultado=$persona1->diff($persona2);

    echo abs($resultado->y);

?>
<br> <div>
<a href="ejer03-3.php">Codigo de la pagina</a>
    </div>

<footer>
        <h3>Lorena Aranda de Rojas</h3>
    </footer>