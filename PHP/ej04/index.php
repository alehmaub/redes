<h1>Datos del Server</h1>

<h2>Variables Server</h2>
<table border="1">
    <tr><td>Server ADDR</td><td><?php echo $_SERVER['SERVER_ADDR'];?></td></tr>
    <tr><td>Server Port</td><td><?php echo $_SERVER['SERVER_PORT'];?></td></tr>
    <tr><td>Server Name</td><td><?php echo $_SERVER['SERVER_NAME'];?></td></tr>
    <tr><td>Document Root</td><td><?php echo $_SERVER['DOCUMENT_ROOT'];?></td></tr>
</table>

<h2>Variables Clientes</h2>
<table border="1">
    <tr><td>Remote ADDR</td><td><?php echo $_SERVER['REMOTE_ADDR'];?></td></tr>
    <tr><td>Remote Port</td><td><?php echo $_SERVER['REMOTE_PORT'];?></td></tr>
</table>

<h2>Variables Requerimiento</h2>
<table border="1">
    <tr><td>SCRIPT_NAME</td><td><?php echo $_SERVER['SCRIPT_NAME'];?></td></tr>
    <tr><td>REQUEST_METHOD</td><td><?php echo $_SERVER['REQUEST_METHOD'];?></td></tr>
</table>


<?php

echo "<h2>TODAS LAS VARIABLES</h2>";

    echo $_SERVER['SERVER_ADDR'];
    echo "<br/>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br/>";
   foreach($_SERVER as $key_name => $key_value) {
        echo $key_name;
        echo "<br>";
    }

    echo "<hr/>";
?>

