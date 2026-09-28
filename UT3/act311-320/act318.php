<?php
/*
Generar un array de palabras. Recorrer el array y controlar cuántas palabras son palíndromas.
Por ejemplo, si se deja el array [ana, adriana, oro, plata, oso, gato, radar,coche, reconocer, ruta] 
debería mostrar que hay 5 palabras palíndromas.
*/

function palindromaManual($palabra){
    
}

$palabras = ['ana', 'adriana', 'oro', 'plata', 'oso', 'gato', 'radar', 'coche', 'reconocer', 'ruta'];
$contPalindromas = 0;

foreach($palabras as $palabra){
    if($palabra === strrev($palabra)){
        $contPalindromas++;
    }
}

echo "Palindromas: $contPalindromas";

?>