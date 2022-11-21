<?php 
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
$name=$_POST["name"];
echo $name;
?>