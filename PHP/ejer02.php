<!--consultar variables de servidor-->

<hr/>
</br>
<table border="1">
	<tr>
		<td width="200px"height="30px">IP del Servidor</td>
		<td width="300px"height="30px"><?php echo $_SERVER['SERVER_ADDR']; ?></td>
		</tr>
	<tr>
		<td width="200px"height="30px">Puerto del servidor</td>
		<td width="300px"height="30px"><?php echo $_SERVER['SERVER_PORT']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">Nombre del host virtual</td>
		<td width="300px"height="30px"><?php echo $_SERVER['SERVER_NAME']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">Carpeta del usuario en el server</td>
		<td width="300px"height="30px"><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">IP del usuario</td>
		<td width="200px"height="30px"><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">Puerto remoto de apertura</td>
		<td width="200px"height="30px"><?php echo $_SERVER['REMOTE_PORT']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">Nombre del script</td>
		<td width="200px"height="30px"><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">Metodo utilizado de requerimiento</td>
		<td width="200px"height="30px"><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
	</tr>
	<tr>
		<td width="200px"height="30px">Puerto del servidor</td>
		<td width="200px"height="30px"><?php echo $_SERVER['SERVER_PORT']; ?></td>
	</tr>

</table>
</br>
<hr/>
</br>
<table border="1">

<?php
	
	foreach ($_SERVER as $clave=>$valor) {
		# code...
		echo "<tr><td>"; 
		echo $clave;
		echo "</td>";
		echo "<td>";
		echo $valor;
		echo "</td>";
		echo "</tr>";

	}

?>

</table>
</br>
<hr/>
</br>



<hr/>