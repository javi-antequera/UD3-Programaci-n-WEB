<?php
        if($_GET["resetear"]==0){
            //setcookie('visitas', 0, time() - 1);
            $_COOKIE["visitas"]=0;
            header("Status: 301 Moved Permanently");    
            header("Location: 006contadorVisitas.php");
            
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
    <a href="006contadorVisitas.php?resetear=0"> Resetear</a>
</body>
</html>