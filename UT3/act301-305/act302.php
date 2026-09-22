<?php
/*
Utiliza una estructura switch para simular la redirección o ejecución del controlador adecuado.

Variable $accion = 'editar_perfil';
Acciones esperadas: 'inicio.php', 'login.php', 'registro.php', 'editar_perfil.php', 'guardar_perfil.php'.
                           
Criterios de aceptación
'inicio'                            : Muestra el mensaje:  Cargar portada.
'login' y 'registro'                : Ambos deben agruparse para ejecutar el mismo bloque. 
                                      Muestra el mensaje: Cargar formulario de acceso.
'editar_perfil' y 'guardar_perfil'  : Agruparse para mostrar: Módulo de gestión de usuario.

Acción desconocida: Debe devolver un código de respuesta HTTP 404 simulado: Página no encontrada.
*/

$accion = 'LALALA'; // Valores esperados: inicio, login, registro, editar_perfil, guardar_perfil

switch($accion){
    case 'inicio':
        echo "Cargar portada.";
    break;

    case 'login':
    case 'registro':
        echo "Cargar formulario de acceso.";
    break;

    case 'editar_perfil':
    case 'guardar_perfil':
        echo "Módulo de gestión de usuario.";
    break;
    default:
        echo "<script>alert('HTTP 404 PAGINA NO ENCONTRADA');</script>";
}

?>