/*
filter_var es una función de PHP que filtra una variable según el tipo de filtro aplicado, eliminando aquellos caracteres no validos o validando.
La forma de usarlo es filter_var($variable, FILTRO, $opciones); siendo la variable obligatoria y el resto opcional.
Como opción también podemos añadir una opción llamada default para que en caso de que no sea valido poner un valor por defecto.
*/

<?php       
        if(filter_var($name,FILTER_VALIDATE_INT)){
            $name = $_GET['name']; 
        }else{
            echo "Es texto";    
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Validando</title>
</head>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text"class="form-control" name="name" id="" placeholder="Nombre">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Apellidos</label>
        <input type="text"class="form-control" name="surname" id="" placeholder="Apellidos">
      </div>
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="mail" id="" aria-describedby="emailHelpId" placeholder="abc@gmail.com">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">URL página personal</label>
      <input type="url" class="form-control" name="url" id="" placeholder="https://ejemplo.com">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Sexo: </label>
      <label for="" class="form-label">Hombre</label>
      <input type="radio" id="hom" name="fav_language" value="Hombre">
      <label for="" class="form-label">Mujer</label>
      <input type="radio" id="muj" name="fav_language" value="Mujer">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Nº de convivientes en el domicilio</label>
      <input type="number" class="form-control" name="convivientes" id="" placeholder="">
    </div>
    <label class="form-check-label" for="">Aficiones: </label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Deportes" name="aficiones[]" id="">
      <label class="form-check-label" for="">
        Deportes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Musica" name="aficiones[]" id="">
      <label class="form-check-label" for="">
        Música
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Cine" name="aficiones[]" id="">
      <label class="form-check-label" for="">
        Cine
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Lectura" name="aficiones[]" id="">
      <label class="form-check-label" for="">
        Lectura
      </label>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Manú favorito </label><br>
      <select multiple class="form-select form-select-lg" name="menu[]" id="">
        <option value="Hamburguesa">Hamburguesa</option>
        <option value="Ensalada">Ensalada</option>
        <option value="Jamon">Jamón</option>
        <option value="Tortilla">Tortilla</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</body>
</html>