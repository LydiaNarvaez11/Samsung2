<?php

include("conexion.php");
$con=conectar();

$id=$_POST['ID'];
$nombre=$_POST['NOMBRE'];
$precio=$_POST['PRECIO'];
$disp=$_POST['DISPONIBILIDAD'];

$sql="UPDATE inventario SET  NOMBRE='$nombre', PRECIO='$precio', DISPONIBILIDAD='$disp' WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>