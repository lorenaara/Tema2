<?php
    //Mostrar el nombre del fichero que se esta ejecutando
    echo "EL nombre del fichero ejecutado es: <strong>". basename(__FILE__) . " </strong><br>";
    //Mostrar la direccion IP del equipo desde el que se esta accediendo
    echo "Tu dirección IP es: <strong> {$_SERVER['REMOTE_ADDR']} </strong><br>";
    //Mostrar el path donde se encuentra el fichero que se esta ejecutando
    echo "El path es: <strong>" .getcwd(). "</strong><br>";
?>