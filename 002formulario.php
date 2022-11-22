<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-primary text-center">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">URL</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nº de convivientes</th>
                    <th scope="col">Aficiones</th>
                    <th scope="col">Menú favorito</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row"><?php echo $_POST["name"]; ?></td>
                    <td><?php echo $_POST["surname"];?></td>
                    <td><?php echo $_POST["mail"];?></td>
                    <td><?php echo $_POST["url"];?></td>
                    <td><?php echo $_POST["fav_language"];?></td>
                    <td><?php echo $_POST["convivientes"];?></td>
                    <td><?php $aficiones=$_POST["aficiones"]; 
                            foreach ($aficiones as $af){
                                echo $af;
                                echo "<br>";
                            }
                        ?>
                    </td>
                    <td><?php $menu=$_POST["menu"]; 
                            foreach ($menu as $me){
                                echo $me;
                                echo "<br>";
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>