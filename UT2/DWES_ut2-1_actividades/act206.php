<?php

/*
Crea una función llamada enmascararTarjeta($numeroTarjeta) que reciba un número 
de tarjeta de 16 dígitos (como cadena o entero) y devuelva una cadena donde 
todos los dígitos excepto los últimos 4 estén reemplazados por asteriscos * 
(ejemplo: "************1234").
*/

function enmascararTarjeta($numeroTarjeta){
    $numeroTarjeta = (String) $numeroTarjeta;
    $visible = substr($numeroTarjeta,12);

    return "************" . $visible;

    //$numeroTarjeta = str_replace(['1','2','3','4','5','5','6','7','8','9'], "*", $numeroTarjeta, $i); 
    //return $numeroTarjeta;
}

$numeroTarjeta = 1234567891234567;
echo " Original: " . $numeroTarjeta;
echo "\nResultado: " . enmascararTarjeta("1234567891234567");
?>