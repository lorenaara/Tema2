<?php
    $valor= $_GET['valor'];
    echo "El valor pasado es: ". $valor;
    if(is_numeric($valor)){
        $valor=intval($valor);
        if(is_int($valor)){
            echo "<br>El numero pasado es un valor entero";
        }
        if(is_float($valor)){
            echo "<br>El numero pasado es un valor de tipo float";
        }
    }else{
        echo "No es un numero";
    }
?>