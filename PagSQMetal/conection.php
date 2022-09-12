
<?php
$servidor = "DESKTOP-9IUUMM7\CESAR L";
$usuario = "sa";
$contrasenia = "sa";
$base_de_datos = "bdpaises";

try{
    $conn = new PDO("serversrv:sql=$servidor;database=$base_de_datos", $usuario, $contrasenia);
    //echo "conexion existosa $servidor";
}catch(Exception $e){
    echo"ocurrio un error en la conexion ".$e ->getMessage();
}


?>