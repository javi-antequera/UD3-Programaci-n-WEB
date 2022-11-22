<?php

 
        if($_GET["resetear"]==2){
            $_COOKIE["visitas"]=0;
            $resetear=1;
            echo file_get_contents("006contadorVisitas.php?resetear=1"); 
        }
    

    if(isset($_COOKIE['visitas']))
    {
        setcookie('visitas',$_COOKIE['visitas']+1,time()+3600*24);
        $mensaje = 'Numero de visitas: '.$_COOKIE['visitas'];   
    }
    else
    {
        setcookie('visitas',1,time()+3600*24);
        $mensaje = 'Bienvenido por primera vez a nuesta web';
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $mensaje;?></h2>
    <!-- <button onclick="resetear()">RESET</button> -->
    <a href="006contadorVisitas.php?resetear=2"> Resetear</a>
</body>
</html>