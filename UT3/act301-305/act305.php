<?php
/*
En una plataforma CMS de publicación de artículos, la capacidad de publicar 
un artículo depende de una puntuación de reputación ($reputacion), 
si el usuario tiene doble factor de autenticación activo ($mfaActivo) 
y de si la cuenta está suspendida ($suspendido). 
Determina el nivel de permiso del usuario mediante una estructura match(true).

Variables:
$reputacion asignar un valor aleatorio de 0 a 100
$mfaActivo = true;
$suspendido = false;
Criterios de aceptación
Si $suspendido es true:  Permiso: 'ACCESO_BLOQUEADO'.
Si la reputación es mayor o igual a 80 y tiene $mfaActivo: Permiso: 'PUBLICACION_DIRECTA'.
Si la reputación está entre 50 y 79 (inclusive) o  (reputación mayor igual a 80 pero sin autenticación activa):  Permiso: 'PUBLICACION_CON_REVISION'
Si la reputación es inferior a 50: Permiso: 'SOLO_LECTURA'.

Variantes / Ampliaciones
Añadir el rol del usuario (ej. 'ADMIN'). Si el rol es 'ADMIN', asigna siempre 'PUBLICACION_DIRECTA' a menos que la cuenta esté explícitamente suspendida.
*/
$reputacion = rand(0, 100);
$reputacion = 40;
$mfaActivo = false;
$suspendido = false;
$permiso = "ACCESO_BLOQUEADO";

if(!$suspendido){
    $permiso = match(true){
        ($reputacion >= 80 && $mfaActivo) => 'PUBLICACION_DIRECTA',
        ($reputacion >= 50 && $reputacion <= 79) || ($reputacion >= 80 && !$mfaActivo) => 'PUBLICACION_CON_REVISION',
        //($reputacion < 50) => 'SOLO_LECTURA',
        default => 'SOLO_LECTURA',
    };
}

echo "Permiso: $permiso";

?>