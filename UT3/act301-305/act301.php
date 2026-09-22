<?php

/*
En la plataforma web de un comercio electrónico se necesita mostrar 
un aviso dinámico en la zona privada del cliente según el estado actual 
de su pedido (PENDIENTE, ENVIADO, ENTREGADO, CANCELADO). 
Escribe un script PHP que determine la etiqueta HTML de estado y el 
color del mensaje.

Variantes / Ampliaciones
Añadir una segunda variable $diasDesdeEnvio = 5;. Si el estado es 'ENVIADO' 
y han pasado más de 3 días, añadir una nota adicional en la alerta.
*/

$estado = 'ENVIADO'; // Valores: PENDIENTE, ENVIADO, ENTREGADO, CANCELADO
$diasDesdeEnvio = 5;


$color = 'gray';
$mensaje = 'Estado desconocido.';
$notaAdicional = '';
// Renderizado de la etiqueta HTML
echo "<div style='padding: 10px; background-color: {$color}; color: white; border-radius: 5px;'>";
echo "<strong>Estado:</strong> {$mensaje}{$notaAdicional}";
echo "</div>";


?>