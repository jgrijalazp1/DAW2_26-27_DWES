<?php
/*
Act336ConsultaNotas.

php tiene un array alumno => nota y se debe recorrer los nombres 
para encontrarlo. El array es el siguiente:
$alumnos = [
    'Ana'   => 9.5,
    'Luis'  => 4.2,
    'Marta' => 7.8,
    'Pedro' => 5.0,
    'Lucía' => 6.4,
];
La búsqueda no distingue mayúsculas de minúsculas ni espacios sobrantes. 
Muestra la nota y la calificación (menos de 5 Suspenso, de 5 a 6 Suficiente, 
de 6 a 7 Bien, de 7 a 9 Notable, 9 o más Sobresaliente). 
Si el alumno no existe, muestra un error.
*/

$alumnos = [
    'Ana'   => 9.5,
    'Luis'  => 4.2,
    'Marta' => 7.8,
    'Pedro' => 5.0,
    'Lucía' => 6.4,
];

// Ini
$resultado = '<p>Nombre no encontrado</p>';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    // El operador nulo '??' comprueba que $alumnoAbuscar exita y no sea nulo
    // En ese caso, asigna una cadena vacia.
    $alumnoAbuscar = $_POST['nombreAlumno'] ?? '';
    $alumnoAbuscar = strtolower(trim($alumnoAbuscar));

    // Comprobacion de que $alumnoAbuscar no esta vacio
    if($alumnoAbuscar){
        foreach($alumnos as $al => $nota){
            // comparacion caseinsensitive. Devuelve 0 si son iguales
            if(strcasecmp($al, $alumnoAbuscar) === 0){
                $output = match(true){
                    ($nota < 5) => 'suspenso',
                    ($nota >= 5 && $nota < 6)  => 'Suficiente',
                    ($nota >= 6 && $nota < 7)  => 'Bien',
                    ($nota >= 7 && $nota < 9)  => 'Notable',
                    ($nota >= 9 && $nota <= 10)  => 'Sobresaliente',
                    default => 'la liaste',
                };
                $resultado = "<p>El alumno $al tiene un $output</p>";
                break;
            }
        };
    }
}

echo $resultado;
?>