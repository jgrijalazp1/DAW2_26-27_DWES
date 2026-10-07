<?php
/*
Un usuario introduce un nombre con espacios sobrantes al inicio y final, 
y con combinación desordenada de mayúsculas y minúsculas (ejemplo: " jUaN cArLoS pErEz "). 
Crea una función en PHP que limpie los espacios y devuelva el nombre con la primera letra 
de cada palabra en mayúscula y el resto en minúscula ("Juan Carlos Perez").
*/

$nombreOriginal = " jUaN cArLoS pErEz ";

function LimpiarCadena($cadena){
    $cadena = trim($cadena);
    $cadena = strtolower($cadena);
/*
    $separador1 = strpos($cadena, " ");
    echo "PosSeparador1: " . $separador1;
    $separador2 = strpos($cadena, " ", $separador1);
    echo "PosSeparador2: " . $separador2;
    echo "\n\n";
    
    $nombre = substr($cadena, 0, $separador1);
    $apellido1 = substr($cadena, $separador1, $separador2);
    $apellido2 = substr($cadena, $separador2);
*/
    $palabras = explode(" ", $cadena);

    $palabras[0] = ucfirst($palabras[0]);
    $palabras[1] = ucfirst($palabras[1]);
    $palabras[2] = ucfirst($palabras[2]);

    return $palabras[0] . " " . $palabras[1] . " " . $palabras[2];
}

echo "  Original: " . $nombreOriginal;
echo "\nFormateado: " . LimpiarCadena($nombreOriginal);

?>