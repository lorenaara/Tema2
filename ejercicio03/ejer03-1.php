<?php
include('html/plantilla.html');
    //Mostrar el nombre del fichero que se esta ejecutando
    echo "<p>El nombre del fichero ejecutado es: <strong>". basename(__FILE__) . " </strong></p>";
    //Mostrar la direccion IP del equipo desde el que se esta accediendo
    echo "<p>Tu dirección IP es: <strong> {$_SERVER['REMOTE_ADDR']} </strong></p>";
    //Mostrar el path donde se encuentra el fichero que se esta ejecutando
    echo "<p>El path es: <strong>" .getcwd(). "</strong></p>";
    //Mostrar fecha y hora en Oporto 
    date_default_timezone_set('Europe/Lisbon');
    echo "<p>En oporto es: <strong>". date("D d m Y h:i:s"). "</strong></p>";
    //inicializa y muestra una variable timestamp y en fecha de tu cumpleaños
   $fecha = new DateTime("2001-09-27");
   echo "<p>Variable timestamp <strong>".date_timestamp_get($fecha). "</strong></p>";
    echo "<p>Fecha de mi cumpleaños <strong>". date_format($fecha, "d/m/Y"). "</strong></p>";
    //Calcular la fecha y el dia de la semana de 60 dias
    $fechaHoy = date("d-m-Y");
    $fechaSesenta = date("d-m-Y", strtotime($fechaHoy. "+ 60 days"));
    echo "<p>El dia dentro de 60:  <strong>".$fechaSesenta. "</strong></p><br>";

?>
<br> <div>
<a href="ejer03-3.php">Codigo de la pagina</a>
    </div>

<footer>
        <h3>Lorena Aranda de Rojas</h3>
    </footer>
