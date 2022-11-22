<?php 
//Valores de server 
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_SOFTWARE"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>";
echo $_SERVER["REQUEST_URI"]."<br>";
echo $_SERVER["QUERY_STRING"]."<br>";

/* Con parametro y sin parametro por método GET
$pam=$_GET["dato"];
$noPam=$_GET[""];
*/
//Comprobación del formulario vía POST
$name=$_POST["name"];
$surname=$_POST["surname"];
$age=$_POST["age"];
$city=$_POST["city"];
echo "Nombre: ".$name."<br>";
echo "Apellidos: ".$surname."<br>";
echo "Edad: ".$age."<br>";
echo "Ciudad: ".$city."<br><br>";

//Valor de HTTP_REFERER (pagina desde donde se hizo la petición)
echo "Acceso desde : <br>";
echo $_SERVER["HTTP_REFERER"];
?>