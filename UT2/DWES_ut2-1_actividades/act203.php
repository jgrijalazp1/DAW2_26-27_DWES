<?php
$globalVar = "Soy global";

function probarAmbito() {
    $localVar = "Soy local";
    global $globalVar;
    static $contador = 0;

    $contador++;

    // Se imprimira por pantalla porque se ha declarado como
    // local en la misma funcion.
    echo $localVar . "<br>"; 
    // Tambien se va a imprimir por pantalla porque, aunque
    // se ha declarado fuera de la funcion, al estar en el 
    // mismo script, se considera gloval para todo él.
    echo $globalVar . "<br>";
    //
    echo "Contador: " . $contador . "<br>";
}

probarAmbito();
probarAmbito();

// ¿Qué ocurre si intentamos acceder a estas variables aquí?
// echo $localVar;
// echo $contador;

// Que da un error porque estan declaradas dentro de la funcion
// probarAmbito() y, una vez que esta termina, se borran.
?>

