<?php

echo "<h2>Encriptacion md5 y sha1</h2>";

if (isset($_POST['valorEntrada'])) {

    $valorEntrada = $_POST['valorEntrada'];
    $claveEncriptadaMd5 = md5($valorEntrada);
    $claveEncriptadaSha1 = sha1($valorEntrada);

    echo "<b style='color:blue'>Clave: </b>" . $valorEntrada;
    echo "</br>";
    echo "<b style='color:blue'>Valor clave encriptada md5 (128bit/16 pares hexadecimales): </b>" . $claveEncriptadaMd5;
    echo "</br>";
    echo "<b style='color:blue'>Valor clave encriptada sha1 (160bit/20 pares hexadecimales): </b>" . $claveEncriptadaSha1;

} else {
    echo "<html>";
    echo "<form id='myForm' method='POST'>";
    echo "<label name='valorEntrada' id='valorEntrada'>Ingrese datos a encriptar: </label>";
    echo "<input type='text' name='valorEntrada' id='valorEntrada'>";
    echo "<input type='submit' value='ENVIAR'>";
    echo "</form>";
    echo "</html>";
}

?>