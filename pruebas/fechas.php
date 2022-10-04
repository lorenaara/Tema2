<h2>Fechas</h2>
<?php
    echo time() . "<br>"; //SEGUNDO QUE HAN PASADO DESDE 1970
    echo date_default_timezone_get();
    date_default_timezone_set(	'Europe/Madrid');
    echo "<br>". date_default_timezone_get();

    echo "<p>Fecha de hoy</p>";
    echo date("d m Y h:i:s"). "<br>";

    echo "<p>Fecha de texto a entero(milisegundos)</p>";
    echo strtotime("now") ."<br>";

    $fecha= "2022-10-04";
    $fecha= strtotime($fecha);
    $fecha= date("d/m/Y");
    echo $fecha . "<br>";


    echo mktime(0,0,0,10,4,2022);
    echo "<p>Diferencia de año, mes y dias entre dos fechas</p>";
    $primera = mktime(0,0,0,10,11,1994);
    $segunda = strtotime("2022-10-04");
    $dif= $segunda - $primera;
    echo "Diferencia: ". $dif;
    $anos = $dif /(60*60*24*365);
    echo "<br> Los años que han pasado son: ". $anos;

    //creo un objeto de tipo DateTime
    $fecha1 = new DateTime("1994-10-11");
    $fecha2 = new DateTime();
    $intervalo = $fecha2->diff($fecha1);
    echo "<br>Años: ".$intervalo->y . " meses: ". $intervalo->m . " dias: ". $intervalo->d;


?>