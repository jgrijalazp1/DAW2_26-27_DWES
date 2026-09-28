<?php

// Escribe un programa que sume los números del 1 al 10
// 

if (($_SERVER['REQUEST_METHOD'] !== "POST") || !isset($_POST['inicio']) || !isset($_POST['fin'])) {
    echo "<p style='red'>DATOS INCORRECTOS</p><br>";
} else {

    $suma = 0;
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];

    $ini = $inicio;
    while ($inicio <= $fin) {
        $suma += $inicio;
        $inicio++;
    }

    echo "<p style='red'>Inicio: $ini</p>";
    echo "<p style='red'>Fin: $fin</p>";
    echo "<p style='red'>Suma: $suma</p>";
}
?>