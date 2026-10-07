<?php

/*
Dada una frase introducida en un blog o foro y una lista de palabras 
prohibidas, reemplaza cualquier palabra prohibida por el texto 
"[CENSURADO]" y muestra cuántas palabras totales contiene la frase final.
*/

$frase = "Los marcianos beben luna, los selenitas zumo de naranja y los venusianos te de helio.";
$prohibidas = ["marcianos", "selenitas", "venusianos"];

$palabras = explode(" ", $frase);
$contPalabras = 0;
foreach($palabras as &$pal){
    foreach($prohibidas as $proh){
        if($pal == $proh){
            $pal = "[CENSURADO]";
        }
    }
    $contPalabras++;
}
echo implode(" ", $palabras);
echo "\nNumero de palabras: $contPalabras";

?>