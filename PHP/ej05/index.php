<?php

    #Variables tipo objetos
    echo "<h2>Variables tipo objeto</h2>";
    $objRenglonProducto = new stdclass;
    $objRenglonProducto -> codArt = "ca1991";
    $objRenglonProducto -> precio = 2020;

    $renglonesProductos = [];
    array_push($renglonesProductos,$objRenglonProducto);

    $objRenglonProducto = new stdclass;
    $objRenglonProducto -> codArt = "ASD6789";
    $objRenglonProducto -> precio = 2000;
    
    array_push($renglonesProductos,$objRenglonProducto);
    

    echo "<span style='color:blue'>\$objRenglonProducto</span> es de tipo " . gettype($objRenglonProducto) ;
    echo "<br>";

    foreach ($renglonesProductos as $objRenglonProducto) {
        echo "<span style='color:blue'>Precio: </span>" . $objRenglonProducto -> precio;
        echo "<br>";
        echo "<span style='color:blue'>Codigo del articulo: </span>" . $objRenglonProducto -> codArt;
        echo "<br>";
    }
    
    echo "<hr/>";
    
    $objRenglonProducto=new stdclass;
    $objRenglonProducto->renglonesProductos=$renglonesProductos;
    $objRenglonProducto->cantidadDeRenglones=count($renglonesProductos);

    echo "<span style='color:blue'>\$renglonesProductos</span> es de tipo " . gettype($renglonesProductos);
    echo "<br>";

    echo "<hr/>";

    echo "<h4>Codificacion</h4>";
    #Codificacion del resultado
    $jsonRenglonesProductos=json_encode($objRenglonProducto);
    echo $jsonRenglonesProductos;

?>