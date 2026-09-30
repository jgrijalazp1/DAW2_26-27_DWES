<?php
/*
Generar un array de palabras. Recorrer el array y controlar cuántas palabras son palíndromas.
Por ejemplo, si se deja el array [ana, adriana, oro, plata, oso, gato, radar,coche, reconocer, ruta] 
debería mostrar que hay 5 palabras palíndromas.
*/

function palindromaManual($palabra){
    $posInicial = 0;
    $posFinal = strlen($palabra) - 1;

    while($posInicial < $posFinal){
        if($palabra[$posInicial] !== $palabra[$posFinal]){
            return false;
        }
        $posInicial++;
        $posFinal--;
    }
    return true;
}

$palabras = ['ana', 'adriana', 'oro', 'plata', 'oso', 'gato', 'radar', 'coche', 'reconocer', 'ruta'];
$contPalindromas = 0;
/*
foreach($palabras as $palabra){
    if($palabra === strrev($palabra)){
        $contPalindromas++;
    }
}
*/
foreach($palabras as $palabra){
    if(palindromaManual($palabra)){
        $contPalindromas++;
    }
}

echo "Palindromas: $contPalindromas";

?>