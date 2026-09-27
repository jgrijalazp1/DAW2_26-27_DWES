<?php

// Escribe un programa que sume los números del 1 al 10.
$suma = 0;
$inicio = 4;
$fin = 14;

while($inicio <= $fin){
    $suma += $inicio;
    $inicio++;
}

echo "Inicio: $inicio";
echo "\nFin: $fin";
echo "\nSuma: $suma";

?>