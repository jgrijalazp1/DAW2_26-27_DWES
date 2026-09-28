<?php
// A partir de una base y exponente, mediante la acumulación 
// de productos, calcula la potencia utilizando la instrucción for.

$base = 2;
$exponente = 6;
$suma = $base;

// asigno $suma = $base y establezco $i en 2 porque todo numero 
// positivo ya esta en potencia 1. La primera vuelta del bucle es
// la potencia 2.

for($i = 2; $i <= $exponente; $i++){
    $suma *= $base;
}

echo "Base: $base";
echo "\nExponente: $exponente";
echo "\nPotencia: $suma";

?>