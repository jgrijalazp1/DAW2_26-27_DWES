<?php
/*
Una tienda de componentes informáticos calcula el coste de envío 
según el peso del paquete y el tipo de cliente (ESTÁNDAR, PREMIUM, VIP). 
Calcula el importe final del envío aplicando las reglas del negocio.

Criterios de aceptación
Tarifa base por peso:
Hasta 2 kg: 3.99 €
De más de 2 kg hasta 5 kg: 6.50 €
Más de 5 kg: 9.99 €

Reglas de descuento sobre el envío:
Cliente VIP: Envío gratis (0.00 €) sin importar peso ni compra.
Cliente PREMIUM: Envío gratis solo si $montoCompra > 100.00 €. Si no cumple, aplica un 50% de descuento sobre la tarifa base.
Cliente ESTANDAR: Tarifa base completa sin bonificación.
*/

// Variables de entrada:
$pesoKg = 4.2;
$rolCliente = 'PREMIUM'; //(valores: 'ESTANDAR', 'PREMIUM', 'VIP')
$montoCompra = 90.00;
$costeEnvio = 0;

function calcularCoste($peso){
    if($peso <= 2.0){
        return 3.99;
    }elseif($peso > 2.0 && $peso <= 5.0){
        return 6.5;
    }else{
        return 9.99;
    }
}

switch($rolCliente){
    case "PREMIUM":
        if($montoCompra < 100.00){
            $costeEnvio += calcularCoste($pesoKg) * 0.5;
        }
    break;
    case "Estandar":
        $costeEnvio += calcularCoste($pesoKg);
    break;
}

echo "Monto compra: $montoCompra ";
$montoCompra += $costeEnvio;
echo "\nCoste envio: $costeEnvio";
echo "\nPrecio total: $montoCompra";

?>