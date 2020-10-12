<h1>EJERCICIO BASICO PHP</h1>
<h2>Header h2 fuera de etiqueta PHP</h2>

<?php
    /*Comentario en PHP*/
    //Otro comentario
    #Otro comentario mas
    echo "<h4>Header h4 dentro de la etiqueta php.</h4>";
    echo "<p style = 'background-color:orange'>Un párrafo color naranja.</p>";
    echo "<p style = 'color:blue'>Un párrafo color letra azul.</p>";
    echo "<hr/>";
?>

<p>Párrafo HTML fuera de la etiqueta PHP.</p>
<hr/>

<?php 
    #DECLARACION DE VARIABLES
    echo "<h2>Variables</h2>";
    $variableUno="naranja"; //declaracion de variable
    //echo $variableUno; //muestra valor de la variable
    // echo "\$variableUno=";
    echo "<span style='color:red'>\$variableUno</span> = " . $variableUno; // imprime mivariable+valor
    echo "<br/>";
    $variableDos=true; // asignación valor lógico
    define("MICONSTANTE","valorConstante"); //define constante
    echo MICONSTANTE; //muestra constante
    echo "<br/>";
    echo "<span style='color:red'>MICONSTANTE</span> es tipo: " . gettype (MICONSTANTE);
    echo "<br/>";
    echo "<span style='color:red'>\$variableUno</span> es tipo: " . gettype($variableUno);
    echo "<hr/>";

    #ARREGLOS NUMÉRICOS
    echo "<h2>Arrays numéricos</h2>";
    $aMiArray=[]; //array vacio
    $aPersonas=["Alex","Gustavo","Juan","Diego"];
    echo  "<span style='color:blue'>\$aPersonas[0]: </span>" . $aPersonas[0];
    echo "<br>";
    echo  "<span style='color:blue'>\$aPersonas[1]: </span>" . $aPersonas[1];
    echo "<br>";
    echo  "<span style='color:blue'>\$aPersonas </span> es de tipo:" . gettype($aPersonas);

    array_push($aPersonas,"Fede");
    
    echo "<h4>Se pasa un valor por el programa y el array termina conteniendo:</h4>";

    echo "<ul>";
        foreach ($aPersonas as $varPersona) { 
		echo "<li>" . $varPersona . "</li>";
	}
    echo "</ul>";
    
    echo "<h2>Array de arrays</h2>";
    $aGrupoDeNombres = [];
    array_push($aGrupoDeNombres,$aPersonas);
    echo "<span style='color:blue'>\$aGrupoDeNombres[0][3]: </span>" . $aGrupoDeNombres[0][3];
    echo "<hr/>";

    #Arrays asociativos
    echo "<h2>Arrays asociativos</h2>";
    $producto = ["codProducto"=>"p001","nombre"=>"Polenta","categoria"=>"comida","precio"=>150];
    echo "<span style='color:blue'>codProducto: </span>" . $producto['codProducto'];
    echo "; ";
    echo "<span style='color:blue'>Nombre Producto: </span>" . $producto['nombre'];
    echo "; ";
    echo "<span style='color:blue'>Categoria: </span>" . $producto['categoria'];
    echo "; ";
    echo "<span style='color:blue'>Precio: </span>" . $producto['precio'];
    echo "<hr/>";

    #Expresiones aritmeticas
    echo "<h2>Expresiones aritméticas</h2>";
    $x = 13;
    $y = 7;
    $z = ($x + $y);
    $m = $x * $y;
    $d = $x / $y;
    echo "X= " . $x;
    echo "<br/>";
    echo "Tipo de dato X= " . gettype($x);
    echo "<br/>";
    echo "Y= " . $y;
    echo "<br/>";
    echo "Tipo de dato Y= " . gettype($y);
    echo "<br/>";
    echo "X+Y= " . $z;
    echo "<br/>";
    echo "Tipo de dato Z= " . gettype($z);
    echo "<br/>";
    echo "X*Y= " . $m;
    echo "<br/>";
    echo "Tipo de dato M= " . gettype($m);
    echo "<br/>";
    echo "X/Y= " . $d;
    echo "<br/>";
    echo "Tipo de dato D= " . gettype($d);
    echo "<hr/>";

?>