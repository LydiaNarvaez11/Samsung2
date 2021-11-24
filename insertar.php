<?php
include("conexion.php");
$con=conectar();

$id=$_POST['ID'];
$nombre=$_POST['NOMBRE'];
$precio=$_POST['PRECIO'];
$disp=$_POST['DISPONIBILIDAD'];


$sql="INSERT INTO inventario VALUES('$id','$nombre','$precio','$disp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inventario.php");
}else {
}
?>