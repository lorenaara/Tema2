<?php
include("./header.html");
?>
<h2>Valor y Referencia</h2>
<?php
    $var=1;
    $var1= $var;
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1 =$var1 +1;
    echo $var . "<br>";
    echo $var1 . "<br>";

    $var=1;
    $var1= &$var;
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1 =$var1 +1;
    echo $var . "<br>";
    echo $var1 . "<br>";

    ?>
<h2>AMBITO DE LAS VARIABLES</h2>
<?php
    //usando el mismo nombre en local y en global
    $global=1;

    function cambio(){
        $global=2;
        echo "El valor de global es ".$global;
    }
    cambio();
    echo "<br> El valor de global es ".$global;

    //vamos a intentar usar la misma variable
    $global=1;

    function cambio2(){
        global $global;
        $local= $global;
        echo "<br>El valor global dentro de la funcion es ".$local;
    }
    cambio2();
    echo "<br> El valor de global es ".$global . "<br>";

    //crear variables de funcion
    function crearCoches(){
        static $numeroVecesCreada=0; //static lo crea cuando crea la funcion y una vez que lo ha leido no vuelve a ejecutarlo 
        $numeroVecesCreada +=1;
        echo "<br>Ha sido creado un coche";
        echo "<br>LLevo creados ".$numeroVecesCreada . " coches<br>";
    }
    crearCoches();
    crearCoches();

    //Uso de constantes sitiadas en otro fichero
    include("./constantes.php");
    echo "Al usuario ".USER. " le gusta el numero " .PI;

    //INFORMACION QUE NOS PROPORCIONA EL SERVIDOR
    echo "<pre>";
    var_dump($_SERVER);
    //SALE UN ARRAY VACIO YA QUE NO TIENE NADA 
    var_dump($_GET);
    var_dump($_POST);
    var_dump($_REQUEST);
    var_dump($_COOKIE);
    //DEPENDE DE LAS INSTANCIAS QUE TENGA EL SERVIDOR
    var_dump($_ENV);
    //OTRA FORMA DE VER $_ENV
    var_dump(getenv());
    session_start();
    var_dump($_SESSION);
    echo "</pre>";
?>
