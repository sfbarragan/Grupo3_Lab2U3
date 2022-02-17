<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación</title>
</head>
<body>
<form name = "facturas" action="facturas.php" method="post">
        <h1>Sistema de Facturación</h1>
        <br>
        <table cellpading="20px" cellspacing="20px">
            <tr>
                <td><label for="ci">Ingrese la Cédula</label></td>
                <td><input type="text" name="txtci" value=""></td>
            </tr>
            <tr>
                <td><label for="nombres">Ingrese los nombres: </label></td>
                <td><input type="text" name="txtnombres"><br></td>
            </tr>
            <tr>
                <td><label for="apellidos">Ingrese los apellidos: </label></td>
                <td><input type="text" name="txtapellidos"></td>
            </tr>
            <tr>
                <td><label for="genero">Seleccione el género: </label></td>
                <td><input type="radio" name="cbgenero"value="Maculino"> Masculino
                <input type="radio" name="cbgenero"value="Femenino" checked="true"> Femenino
                </td>

            </tr>
            <tr>
                <td><label for="materias">Seleccione la o las materias que cursa actualente</label></td>
                <td><input type="checkbox" name="cbxmaterias[]"  value="Base de Datos"> Base de Datos <br>
                <input type="checkbox" name="cbxmaterias[]" value="Aplicaciones Web"> Aplicaciones Web <br>
                <input type="checkbox" name="cbxmaterias[]" value="Inteligencia Artificial"> Inteligencia Artificial<br>
                <input type="checkbox" name="cbxmaterias[]" value="Internetworking"> Internetworking<br>
            </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="b1" value="Enviar"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>