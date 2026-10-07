<?php
/*
A] Inventario de biblioteca. 
Crea un array asociativo multidimensional donde cada clave sea 
el ISBN de un libro y el valor sea otro array asociativo con 
titulo, autor, ejemplares y prestados. Recorre la estructura y
muestra en una tabla HTML solo los libros que tengan ejemplares 
disponibles (ejemplares > prestados), junto con el número de 
ejemplares disponibles de cada uno.
*/

$inventario = [
            '999-84-376-0494-7' => [
                            'titulo' => 'Jane Eyre', 
                            'autor' => 'Charles Dickens', 
                            'ejemplares' => 5, 
                            'prestados' => 2
            ],
            '988-84-204-7183-9' => [
                            'titulo' => 'A tale of two cities', 
                            'autor' => 'Charlotte Bronte', 
                            'ejemplares' => 1, 
                            'prestados' => 1
            ],
            '977-03-074-0000-8' => [
                            'titulo' => '1984', 
                            'autor' => 'George Orwell', 
                            'ejemplares' => 3, 
                            'prestados' => 1
            ],
            '777-84-975-9220-8' => [
                            'titulo' => 'Fahrenheit 451', 
                            'autor' => 'Ray Bradbury', 
                            'ejemplares' => 2, 
                            'prestados' => 0
            ],
            '666-66-333-2222-4' => [
                            'titulo' => 'The Lord of the Rings', 
                            'autor' => 'Tolkien', 
                            'ejemplares' => 10, 
                            'prestados' => 5
            ],
];

foreach($inventario as $isbn => $datos){
    foreach($datos as $clave => $valor){
        if()

    }
};

/*
B] Añadir un formulario Act328.html. 
El usuario se identificará con nombre y correo electrónico y 
tiene que seleccionar el libro que quiere prestar. La opción del 
formulario debe tener los datos de los títulos y como valores del 
atributo value los códigos ISBN. Por ejemplo:


En el lado del servidor Act328.php tenéis la variable el array 
asociativo ya creado de la pregunta anterior.

Se deben gestionar:
- Redirigir al formulario si no se accede mediante método POST. Validar y sanitizar que el nombre, el email y el ISBN sean válidos y pertenezcan al catálogo.
- Mostrar un mensaje que muestre el nombre, correo electrónico del usuario y el título del libro que ha seleccionado.
- Si hay disponibilidad, procesar la reserva (incrementando +1 los prestados)
- Calcular y mostrar en pantalla cuántos ejemplares disponibles quedan tras la reserva.

*/


?>