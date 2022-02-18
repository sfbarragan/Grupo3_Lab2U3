<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro.css">
   
    
    <title>Registro</title>
</head>
<body>


    <?php

    $productos= simplexml_load_file("../XML/productos.xml");

    $totalest= count($productos-> producto);

    echo "<h1 align='center'>Tabla de Registro</h1>";

    echo "<table border='5'  cellpading='10' bgcolor='#000' bordercolor='#311515' width='50%' align='center'>\n " ;

    echo "<tr><th align='center'>Producto</th><th align='center'>ID</th><th align='center'>Marca</th><th align='center'>Precio</th></tr>\n";

    for($x=0;$x<$totalest;$x++) {

        
        echo "<tr><td align='center'>".$productos->producto[$x]->productoN.
        "</td><td align='center'>".$productos->producto[$x]->nId.
        "</td><td align='center'>".$productos->producto[$x]->marca.
        "</td><td align='center'>".$productos->producto[$x]->precio."</td></tr>\n";


    }

    echo "</table>\n";
    ?>
    <br>
    <br>
    <button class="registro"> <a href="producto1.php" style="text-decoration:none"> Regresar</a></button>

</body>
</html>

