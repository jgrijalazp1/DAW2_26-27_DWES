<?php
/*
Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios 
comprendidos entre 100 y 999 (ambos incluidos), sin que se repita ningún número. 
Después, muestra el contenido del array de la siguiente forma:

    - La columna que contiene el número máximo se muestra en azul.
    - La fila que contiene el número mínimo se muestra en verde.
    - El resto de números se muestran en negro.
    - Si una celda pertenece a la vez a la columna del máximo y a la fila del mínimo, 
      debe mostrarse en azul (la columna del máximo tiene prioridad).
*/

$numeros = [[]];
$numAzar = 0;

function esta(){
    for($fila = 0; $fila < 6; $fila++){
    for ($columna = 0; $columna < 9; $columna++){
        $numAzar = rand(100, 999);
        $numeros[$fila][$columna] ;
    }
}
}

for($fila = 0; $fila < 6; $fila++){
    for ($columna = 0; $columna < 9; $columna++){
        $numAzar = rand(100, 999);
        if(esta($numAzar, $fila, $columna)){
            $columna--;
        }
    }
}

print_r($numeros);



?>