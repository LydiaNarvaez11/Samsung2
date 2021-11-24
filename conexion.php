<?php
function conectar(){
    $bdhost = "localhost"; //host donde esta la base de datos
    $bdname = "samsung store"; //nombre de BD
    $bduser = "root"; // user name
    $bdpass = ""; // password de usuario

    $conexion=mysqli_connect($bdhost,$bduser,$bdpass,$bdname);

    //mysqli_query($conexion,"SELECT * FROM inventario");
    //mysqli_query($conexion,$sql);
    //mysqli_close($conexion);

    return $conexion;
}
?>