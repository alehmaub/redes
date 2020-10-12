<?php 

#<h1>prueba</h1> Si dejo valores de html tira error!!!
echo "<h1>hola</h1>";

$var1="Valor1";
echo "la variable contiene: $var1";

echo "<br/>la variable var1 contiene: " . $var1; #preferiblemente hacerlo asi

echo "<br/><h1> la variable var1 contiene: " . $var1 . "</h1>";

echo "<hr/>";

#define(name, value)
define ("IP", "192.168.1.127");
echo "<h1>" . IP . "</h1>";

echo "<hr/>";

echo gettype($var1);

echo "<hr/>";

$aPersona=["juan","pedro","guillermo"];
echo "el primero de la lista es: " . $aPersona[0];
echo "<br/>el segundo de la lista es: " . $aPersona[1];
echo "<br/>el tercero de la lista es: " . $aPersona[2];

echo "<hr/>";

$aPalabra=[];
array_push($aPalabra, "Hola");
array_push($aPalabra, "Ciao");
array_push($aPalabra, "Bonjour");
array_push($aPalabra, "Hallo");
array_push($aPalabra, "Hello");

echo "<ol>";
foreach ($aPalabra as $elemento) {
	echo "<li>" . $elemento . "</li>";
} 
echo "</ol>";

echo "<hr/>";

$aPalabra=[];
array_push($aPalabra, "Casa");
array_push($aPalabra, "House");
array_push($aPalabra, "Haus");
$aDiccionario=[];
array_push($aDiccionario, $aPalabra);

echo "<ol>";
foreach ($aDiccionario as $elemento) {
	foreach ($aPalabra as $key) {
		echo "<li>" . $key . "</li>";	
	}
	
} 
echo "</ol>";

$aPalabra=[];
array_push($aPalabra, "Hola");
array_push($aPalabra, "Ciao");
array_push($aPalabra, "Bonjour");
array_push($aPalabra, "Hallo");
array_push($aPalabra, "Hello");
$aDiccionario=[];
array_push($aDiccionario, $aPalabra);

echo "<ul>";
foreach ($aDiccionario as $elemento) {
	foreach ($aPalabra as $key) {
		echo "<li>" . $key . "</li>";	
	}
	
} 
echo "</ul>";

echo "<hr/>";
#ARRAY ASOCIATIVO
$renglonPedido=["codArt"=>"D001","descrip"=>"Durazno000gr","precioUnitario"=>50,"cantidad"=>10];
echo $renglonPedido["descrip"];
echo"<br/> 'renglonPedido' es un " . gettype($renglonPedido);

echo "<hr/>";

$objRenglonPedido = new stdclass;
$objRenglonPedido -> codArt = "D001";
$objRenglonPedido -> precioUnitario = 50;
$objRenglonPedido -> cantidad = 30;

$objRenglonPedido = new stdclass;
$objRenglonPedido -> codArt = "F501";
$objRenglonPedido -> precioUnitario = 75;
$objRenglonPedido -> cantidad = 25;

$aRenglonesPedido=[];
array_push($aRenglonesPedido, $objRenglonPedido);

echo "<ul>";
foreach ($aRenglonesPedido as $elemento) {
	foreach ($objRenglonPedido as $key) {
		echo "<li>" . $key . "</li>";
		# code...
	}
	# code...
}
echo "</ul>";

echo "<hr/>";

$objRenglonesPedido = new stdclass;
$objRenglonesPedido -> renglones;

$textoJson = json_encode($objRenglonesPedido);
echo $textoJson;

echo "<hr/>";
echo "<hr/>";
echo "<hr/>";
echo "<hr/>";

#echo "<script>alert('ALERTA!!!');</script>";
?>

<h1>prueba</h1> <!-- valores html x fuera de php funciona!!! -->