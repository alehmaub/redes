<?php

sleep(3);

$clave = $_POST['clave'];
echo "Dato ingresado: " . $clave;
echo "<br/><br/>";
$varEncriptado = md5($_POST['clave']);
echo "El hash md5 es: " . $varEncriptado;
echo "<br/><br/>";
$varEncriptado = sha1($_POST['clave']);
echo "El hash sha1 es: " . $varEncriptado;

?>