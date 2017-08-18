<?php
/**
 * Created by PhpStorm.
 * User: andrestaipe
 * Date: 17/8/17
 * Time: 20:56
 */

if($_POST) {
    // Procesamos los datos y los guardamos en la BDD
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $respuesta = [
        'error' => false,
        'msj' => ''
    ];
    if ($email && $mensaje) {
        $respuesta['error'] = false;
        $respuesta['msj'] = 'Se ha enviado tu mensaje.';
    } else {
        $respuesta['error'] = true;
        $respuesta['mensaje'] = 'Ha fallado el envío de tu mensaje.';
    }
// Devolvemos una respuesta al cliente, codificado en json.
    echo json_encode($respuesta);
}