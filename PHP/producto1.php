<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/producto1.css">
    
    <title>Productos</title>
</head>
<body>

    <div class="login-box">
        <h1>Datos Productos</h1>
            <form action="producto.php" method="post">

               
                <label for="producto">Producto</label>
                <input type="text" name="producto" placeholder="Producto">
            
               
                <label for="nId">ID</label>
                <input type="text"  name="nId" placeholder="L02582222">
    
                <label for="marca">Marca</label>
                <input type="text" name="marca" placeholder="marca">
                <label for="precio">Precio</label>
                <input type="number"  name="precio" placeholder="precio">
                <input type="submit"  name="agregar" value="Agregar">
    
            </form>
            <button class="registro"> <a href="registro.php" style="text-decoration:none"> Ver registros</a></button>
            <br>
            <br>
            <button class="registro"> <a href="../gestion.html" style="text-decoration:none"> Regresar</a></button>
        </div>
    
</body>
</html>
