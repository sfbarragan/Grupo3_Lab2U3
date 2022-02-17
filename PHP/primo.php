<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="primo.php" id="form1" name="form1" method="post">
        <label for="num"> Ingrese el número para verificarlo</label>
        <input type="text" name="num" id="num" values=""><br>
        <input type="submit" name="verificar" id="verificar" value="Verificar">
    </form>
    <?php
        if(isset($_POST['verificar'])){
            $num = $_POST['num'];
            $d=1;
            $cd=0;
            for($d-1; $d<=$num; $d++){
                if($num % $d==0){
                    $cd=$cd+1;
                }
            };
            if($cd<= 2){
                echo "El número ingresado si es Primo";
            }else{
                echo "El número ingresado no es Primo";
            }
        }
    ?>
</body>
</html>