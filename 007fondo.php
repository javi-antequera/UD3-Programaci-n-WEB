<?php
    if(isset($_POST["colores"])){
        $color = $_POST["colores"];
        setcookie("colores",$color,time()+3600);//Setea la coockie con el color y la mantiene 24h

    }else{
        //Si no hay coockies la pagina se pondrá en blanco por defecto
        if(isset($_COOKIE["colores"])){
            $color = $_COOKIE["colores"];
        }else{
            $color = "white";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Fondo</title>
</head>
<body <?php echo "style= 'background-color: $color;'"?>>
    <form action="007fondo.php" method="post">
        <div class="mb-3">
          <h2>Color de fondo para la página:</h2>
          <select class="form-select form-select-lg" name="colores" id="">
                <option selected>Escoje uno</option>
                <option value="red">ROJO</option>
                <option value="blue">AZUL</option>
                <option value="yellow">AMARILLO</option>
                <option value="green">VERDE</option>
                <option value="purple">MORADO</option>
                <option value="pink">ROSA</option>
                <option value="white">BLANCO</option>
                <option value="grey">GRIS</option>
            </select>
        </div>
       <input type="submit" value="Cambiar Color">
    </form>
</body>
</html>