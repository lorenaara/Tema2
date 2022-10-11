<?php
include('html/plantilla.html');
    $valor= $_GET['valor'];
    echo "<p>El valor pasado es: ". $valor . "</p>";
    if(is_numeric($valor)){
        if(strpos($valor, '.')){
            echo "<p>El numero pasado es un valor de tipo float</p>";
        }else{
            echo "<p>El numero pasado es un valor entero</p>";
        }
    }else{
        echo "<p>No es un numero</p>";
    }

?>
<br> <div>
<a href="ejer03-3.php">Codigo de la pagina</a>
    </div>

<footer>
        <h3>Lorena Aranda de Rojas</h3>
    </footer>