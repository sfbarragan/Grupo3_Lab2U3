<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$xml= new DomDocument("1.0");
$xml->formatOutput=true;
$xml->LOAD ('../XML/productos.xml');

$producto= $_POST['producto'];
$id= $_POST['nId'];
$marca= $_POST['marca'];
$precio= $_POST['precio'];

$PRODUCTOSTag = $xml->getElementsByTagName('PRODUCTOS')->item(0);
$productoTag= $xml->createElement("producto");

$productoNTag= $xml->createElement("productoN", $producto);
$idTag= $xml->createElement("nId",$id);
$marcaTag= $xml->createElement("marca",$marca);
$precioTag= $xml->createElement("precio",$precio);

$productoTag->appendChild($productoNTag);
$productoTag->appendChild($idTag);
$productoTag->appendChild($marcaTag);
$productoTag->appendChild($precioTag);

$PRODUCTOSTag ->appendChild($productoTag);
$xml->save('../XML/productos.xml');


header("Location: producto1.php");

?>
</body>
</html>