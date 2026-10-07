<?php
/*
Dado un correo electrónico completo (por ejemplo, "usuario.desarrollador@empresa.com"),
escribe un script en PHP que extraiga únicamente la parte local 
(el nombre de usuario previo al símbolo @) y el dominio de forma independiente.
*/

$correoCompleto = "usuario.desarrallador@empresa.com";
$posSeparador = strpos($correoCompleto, '@');
$usuario = substr($correoCompleto, 0, $posSeparador);
$dominio = substr($correoCompleto, $posSeparador + 1);

echo "Usuario: " . $usuario;
echo "\nDominio: " . $dominio;


?>