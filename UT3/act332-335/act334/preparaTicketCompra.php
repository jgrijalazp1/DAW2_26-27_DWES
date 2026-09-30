<?php
/*
preparaTicketCompra.php: Genera un formulario que permita al usuario introducir varios productos de una compra: para cada producto se pide la cantidad, el nombre y el coste unitario (usa campos tipo array en el formulario, por ejemplo nombre[], cantidad[], coste[], con al menos 3 líneas de producto). Al enviar el formulario, valida los datos en imprimeTicketCompra.php.

imprimeTicketCompra.php: Recibe los datos del formulario. Si algún campo de algún producto está vacío, muestra un único mensaje de error genérico (el mismo texto para cualquier campo vacío, sin necesidad de indicar cuál) y no muestres la tabla. Si todos los campos son correctos, muestra una tabla HTML con los productos (nombre, cantidad, precio unitario y subtotal), y añade una fila final con el importe total de la compra.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./preparaTicketCompra.php" method="POST">
        <fieldset>
            <legend>Preparar Ticket</legend>
            <label for="">Nombre</label>
            <input type="text" name="nombreProducto">
            <br>
            <label for="">Cantidad</label>
            <input type="number" name="cantidadProducto">
            <br>
            <label for="">Coste</label>
            <input type="number" name="costeProducto">
            <br>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>