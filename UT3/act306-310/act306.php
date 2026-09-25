<?php
/*
Un formulario procesado por PHP recibe datos enviados desde una petición POST 
(donde todos los valores llegan inicialmente como cadenas de texto string). 
Se requiere verificar la validez de las credenciales y el estado activo del usuario, 
previniendo errores por comparación no estricta de tipos.

Datos de partida / Requisitos técnicos
Variables enviadas por el formulario (simuladas):

$idUsuarioEntrada = "1050"; (string)
$codigoAcceso = "01234"; (string con cero a la izquierda)
$estadoCuenta = "1"; (string recibida de un checkbox/radio button)

Criterios de aceptación
- Comprobar si el $idUsuarioEntrada equivale al ID numérico registrado 1050. 
- Utiliza comparación estricta habiendo normalizado el dato o convertidor explícito ((int)).
- Comprobar que $codigoAcceso coincide exactamente en contenido y tipo con la clave secreta "01234". 
- Demuestra por qué la comparación no estricta == fallaría al tratar "01234" y 1234 como enteros idénticos.
- Comprobar que el $estadoCuenta es numéricamente igual a 1 y tipo booleano/entero válido.

Pistas
En PHP, "01234" == 1234 devuelve true debido a la conversión implícita de tipos. Usa === para evitar vulnerabilidades de seguridad.
Puedes castear variables con (int) o (string) antes de la comparación.
Código base

$idUsuarioEntrada = "1050";
$codigoAcceso = "01234";
$estadoCuenta = "1";
$idEsperado = 1050;
$codigoEsperado = "01234";

Variantes / Ampliaciones
Investigar el comportamiento de la función is_numeric() combinada con comparaciones 
estrictamente equivalentes para validar la entrada antes de procesarla.
*/

$idUsuarioEntrada = "1050";
$codigoAcceso = "01234";
$estadoCuenta = "1";
$idEsperado = 1050;
$codigoEsperado = "01234";

echo "<p>'lalala'</>";


?>