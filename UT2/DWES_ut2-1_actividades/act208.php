<?php
/*
Dado un string con una lista de tecnologías separadas por comas (ejemplo: "php, javascript, html, css, sql"), 
conviértelo en un array, limpia los espacios de cada elemento, convierte cada palabra a mayúsculas y finalmente
genera una cadena con formato separado por guiones ("PHP - JAVASCRIPT - HTML - CSS - SQL").

Paso a paso:
explode(",", $listaString) corta la cadena en trozos cada vez que encuentra una coma y retorna un array.
Mediante array_map(), aplicamos a cada elemento individual trim() (para quitar el espacio después de la coma) y strtoupper() (para convertirlo a mayúsculas).
implode(" - ", $elementosProcesados) toma el array procesado y lo une de nuevo en un solo string utilizando " - " como delimitador.
*/

$tecnologias = "php, javascript, html, css, sql";

$tecnologiasArray = explode(",", $tecnologias);
$tecnologiasArray = array_map("strtoupper", $tecnologiasArray);
$tecnologiasArray = array_map("trim", $tecnologiasArray);

$tecnologias = implode(" - ", $tecnologiasArray);
echo $tecnologias;

?>