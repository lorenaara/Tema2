<?php
    //Mostrar el nombre del fichero que se esta ejecutando
    echo "EL nombre del fichero ejecutado es: <strong>". basename(__FILE__) . " </strong><br>";
    //Mostrar la direccion IP del equipo desde el que se esta accediendo
    echo "Tu dirección IP es: <strong> {$_SERVER['REMOTE_ADDR']} </strong><br>";
    //Mostrar el path donde se encuentra el fichero que se esta ejecutando
    echo "El path es: <strong>" .getcwd(). "</strong><br>";
    //Mostrar fecha y hora en Oporto 
    date_default_timezone_set('Europe/Lisbon');
    echo "En oporto es: <strong>". date("D d m Y h:i:s"). "</strong><br>";
    //inicializa y muestra una variable timestamp y en fecha de tu cumpleaños
   $fecha = new DateTime("2001-09-27");
   echo "Variable timestamp <strong>".date_timestamp_get($fecha). "</strong><br>";
    echo "Fecha de mi cumpleaños <strong>". date_format($fecha, "d/m/Y"). "</strong><br>";
    //Calcular la fecha y el dia de la semana de 60 dias
    $fechaHoy = date("d-m-Y");
    $fechaSesenta = date("d-m-Y", strtotime($fechaHoy. "+ 60 days"));
    echo "el dia dentro de 60:  <strong>".$fechaSesenta. "</strong><br>";

?>