<?php
/*
Act337.html pide un código de producto y las unidades. 
Act337.php tiene un array código => [nombre, precio].

Productos: código => [nombre, precio sin IVA]

Valida que las unidades sean un entero mayor o igual 
que 1, busca el código y muestra en una tabla el nombre, 
el precio sin iva, el IVA del 21 % y el precio total.

*/
$productos = [
    'P001' => ['nombre' => 'Teclado', 'precio' => 24.90],
    'P002' => ['nombre' => 'Ratón',   'precio' => 12.50],
    'P003' => ['nombre' => 'Monitor', 'precio' => 149.99],
    'P004' => ['nombre' => 'Webcam',  'precio' => 39.00],
];

$iva = 21;

?>