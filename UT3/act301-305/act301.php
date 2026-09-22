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
$alerta ="";

switch($estado){
    case 'ENVIADO': 
        $mensaje = "Enviado"; 
        $color = 'yellow';
        if($diasDesdeEnvio > 3){$alerta= "Ya han pasado mas de 3 dias desde el envio";}
        break;
        
    case 'PENDIENTE': 
        $mensaje = "Pendiente";
        $color = 'brown';
        break;
    case 'ENTREGADO':
        $mensaje = "Entregado";
        $color = 'green';
        break;
    case 'CANCELADO': 
        $mensaje = "brown";
        $color = 'red';
        break;
    default: $mensaje = 'Estado desconocido';
}



// Renderizado de la etiqueta HTML
echo "<div style='padding: 10px; background-color: {$color}; color: white; border-radius: 5px; font-size: 20px'>";
echo "<strong>Estado:</strong> {$mensaje}{$notaAdicional}";
echo "</div>";
if($alerta){ 
    echo"<script>
                alert('Ya han pasado mas de 3 dias desde el envio');
         </script>";
    }

?>