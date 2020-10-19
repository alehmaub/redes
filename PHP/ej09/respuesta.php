<?php

sleep(3);

$myObject = new stdClass();

$myObject->idUsuario = $_POST['numero'];
$myObject->usuario = $_POST['usuario'];
$myObject->nombre = $_POST['nombre'];
$myObject->apellido = $_POST['apellido'];
$myObject->fechaNac = $_POST['nac'];

$myJson = json_encode($myObject);

echo $myJson;

file_put_contents('data_json.txt', $myJson);

?>