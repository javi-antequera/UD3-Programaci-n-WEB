<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Index</title>
</head>
<body>

<form action="011login.php" method="POST">
        <div><span class='error'>
            <?php echo $error; ?>
        </span></div>
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
  </div>
  <div class="mb-3">
    <label for="contra" class="form-label">Contraseña</label>
    <input type="contra" class="form-control" name="password" id="contra">
  </div>
  <button type="submit" name="enviar" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>