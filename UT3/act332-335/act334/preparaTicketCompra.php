<?php
/*
preparaTicketCompra.php: 
Genera un formulario que permita al usuario introducir varios 
productos de una compra: para cada producto se pide la cantidad, 
el nombre y el coste unitario (usa campos tipo array en el 
formulario, por ejemplo nombre[], cantidad[], coste[], 
con al menos 3 líneas de producto). Al enviar el formulario, 
valida los datos en imprimeTicketCompra.php.
*/

// =============  VALIDACION DE DATOS  ======================

// Operador de fusion null
// Si 'nombreProducto' es nulo o no existe asigna ''
$nombre = $_POST['nombre'] ?? '';
$cantidad = $_POST['cantidad'] ?? '';
$coste = $_POST['coste'] ?? '';

// Para depurar
$nombre = ['a','b','x'];
$cantidad = ['1','2',''];
$coste = ['1.5','4.1','0'];

// comprueba que ninuno de los elementos de los arrays 
// $nombre[], $cantidad[] o $coste[]  este vacio.
function validarNoVacio($nombre, $cantidad, $coste);

foreach($nombre as $nom){
    if($nom === '')
}
if( $nombre[0] === '' || $nombre[1] === '' || $nombre[2] === '' ||
    is_numeric($cantidad[0]) || is_nan($cantidad[1]) || is_nan($cantidad[2]) ||
    is_nan($coste[0]) || is_nan($coste[1]) || is_nan($coste[2]))
    {
     echo"<a href='act334.html'>";
     exit();
}



    // Si $_POST['cantidadProducto'] no existe o es nulo,
    // a $cantidad se le asigna '', que es una cadena vacia
    $cantidad = $_POST['cantidadProducto'] ?? '';

    // Si $cantidad no es entero, $cantidad = false
    $cantidad[0] = filter_var($cantidad, FILTER_VALIDATE_INT);
    $cantidad[1] = filter_var($cantidad, FILTER_VALIDATE_INT);
    $cantidad[2] = filter_var($cantidad, FILTER_VALIDATE_INT);

    $coste = $_POST['costeProducto'] ?? '';
    $coste = filter_var($coste, FILTER_VALIDATE_FLOAT);



function validarNoVacio($nombre, $cantidad, $coste){



}
    
?>