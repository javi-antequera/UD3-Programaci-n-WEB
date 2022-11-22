<?php 

    if(isset($_FILES["archivoEnviado"])){
        $errors=array();
        $file_name=$_FILES["archivoEnviado"]["name"];
        $file_size=$_FILES["archivoEnviado"]["size"];
        $file_tmp=$_FILES["archivoEnviado"]["tmp_name"];
        $file_type=$_FILES["archivoEnviado"]["type"];
        $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

        if($file_size>2097152){
            $errors[]="El archivo no puede pesar más de 2MB";
        }
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"img/".$file_name);
            echo "La imagen se ha guardado correctamente";
        }else{
            print_r($errors);
        }
    }

    $ancho=$_POST["ancho"];
    $alto=$_POST["alto"];

    echo "<br>";
    echo $ancho;
    echo "<br>";
    echo $alto;
?>