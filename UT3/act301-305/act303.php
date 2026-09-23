<?php
/*
Un gestor de archivos para la intranet de una empresa permite subir documentos. 
Se necesita determinar la categoría de un archivo basándose en su extensión para 
asignarle una clase de icono visual. Debes implementar esta lógica usando 
la expresión match de PHP.

Variable $extension = 'png';
Extensiones admitidas:
Imagen: jpg, jpeg, png, webp
Documento: pdf, docx, txt
Código: php, js, html, css

Criterios de aceptación
Retornar exactamente el valor de la clase de icono CSS ('icon-media', 'icon-doc', 'icon-code', 'icon-file').
Manejo directo del valor devuelto asignándolo a una variable.
El caso por defecto asigna 'icon-file'.
*/


$extension = "txt";

$retorno = match ($extension) {
    "jpg", "jpeg", "png", "webp" => "icon-media",
    "pdf", "docx", "txt" => "icon-doc",
    "php", "js", "html", "css" => "icon-file"
};

echo "Retorno: $retorno";
