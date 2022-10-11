<?php
    include('html/plantilla.html');
    /*$persona1=new DateTime($_GET['fecha1']);
    $persona2=new DateTime( $_GET['fecha2']);
    $resultado=$persona1->diff($persona2);

    echo $resultado->days .'días';*/

    $persona1=$_GET['fecha1'];
    $persona2=$_GET['fecha2'];
    $persona1=strtotime($persona1);
    $persona2=strtotime($persona2);
    $resultado=abs($persona1-$persona2);
    $anos= floor($resultado/(365*60*60*24));
    $meses =floor($resultado-$anos*365*60*60*24)/(30*60*60*24);
    $dias= floor($resultado-$anos*365*60*60*24 -$meses*30*60*60*24)/(60*60*24);
    echo $anos . "años". $meses ."meses". $dias ."dias";
?>
<br> <div>
<a href="ejer03-3.php">Codigo de la pagina</a>
    </div>

<footer>
        <h3>Lorena Aranda de Rojas</h3>
    </footer>