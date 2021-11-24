<?php
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM inventario";
    
    $query=mysqli_query($con,$sql);
    //$row=mysqli_fetch_array($query);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INVENTARIO DE TIENDA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        </head> 
    <body>
        <div>
            <div>
                <h1 align="center">DATOS DEL PRODUCTO</h1>
                    <form action="insertar.php" method="POST" align="center">
                        <input type="text" name="NOMBRE" placeholder="NOMBRE"> <br>
                        <input type="text" name="PRECIO" placeholder="PRECIO"> <br>
                        <input type="text" name="DISPONIBILIDAD" placeholder="DISPONIBILIDAD"> <br>
                        <input type="submit" class="btn btn-primary" value="INSERTAR"> <br>
                    </form>
            </div>
            <div>
                <table width="70%" border="1px" align="center">
                        <tr>
                            <br>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th>DISPONIBILIDAD</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['NOMBRE']?></th>
                                    <th><?php  echo $row['PRECIO']?></th>
                                    <th><?php  echo $row['DISPONIBILIDAD']?></th>    
                                    <th><a href="modificar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-info">MODIFICAR</a></th>
                                    <th><a href="eliminar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">ELIMINAR</a></th>  
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </body>
</html>