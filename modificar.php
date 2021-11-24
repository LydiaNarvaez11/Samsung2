<?php
    include("conexion.php");
    $con=conectar();

    $id=$_GET['ID'];

    $sql="SELECT * FROM inventario WHERE ID='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MODIFICAR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <div>
            <form action="update.php" method="POST">
                <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
                <input type="text" name="NOMBRE" placeholder="NOMBRE" value="<?php echo $row['NOMBRE']  ?>">
                <input type="text" name="PRECIO" placeholder="PRECIO" value="<?php echo $row['PRECIO']  ?>">
                <input type="text" name="DISPONIBILIDAD" placeholder="DISPONIBILIDAD" value="<?php echo $row['DISPONIBILIDAD']  ?>">
                <input type="submit" class="btn btn-primary btn-block" value="MODIFICAR">
            </form>   
        </div>
    </body>
</html>