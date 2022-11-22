
<?php 
    $ancho=$_POST["ancho"];
    $alto=$_POST["alto"];

    if(isset($_FILES["archivoEnviado"])){
        $errors=array();
        $file_name=$_FILES["archivoEnviado"]["name"];
        $file_size=$_FILES["archivoEnviado"]["size"];
        $file_tmp=$_FILES["archivoEnviado"]["tmp_name"];
        $file_type=$_FILES["archivoEnviado"]["type"];
        $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        $extensions=array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions)===false){
            $errors[]="Extensión no permitida. Prueba con imágenes jpeg,jpg o png.";
            header("refresh:3;005subidaImagen.html");
           /* echo("<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='css/bootstrap.css'>
                <title>Subida</title>
            </head>
            <body>
                <form enctype='multipart/form-data' action='005subidaImagen.php' method='post'>
                    Archivo: <input name='archivoEnviado' type='file'/>
                    <br>
                    <label for='' class='form-label'>Ancho</label>
                    <input type='number' class='form-control' name='ancho' id='' placeholder='' value='$ancho'>
                    <label for='' class='form-label'>Alto</label>
                    <input type='number' class='form-control' name='alto' id='' placeholder='' value='$alto'>
                    <input type='submit' name='btnSubir' value='Subir'>
                </form>
            </body>
            </html>");*/
        }

        if($file_size>2097152){
            $errors[]="El archivo no puede pesar más de 2MB";
        }
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"img/".$file_name);
            echo "<img src='img/".$file_name."' width='".$ancho."' height='".$alto."'>";
            echo "<br>";
            echo "La imagen se ha guardado correctamente. Tamaño: $ancho x $alto";
        }else{
            print_r($errors);
        }
    }
?>