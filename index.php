<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php ymysql</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3c2352d31d.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Dany Moreno</h1>
    <div class="container-fluid rom">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de dulces</h3>
            <?php
             include "modelo/conexion.php";
             include "controlador/registrodulce.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Dulce</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="int" class="form-control" name="cantidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Costo</label>
                <input type="int" class="form-control" name="costo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Textura</label>
                <input type="text" class="form-control" name="textura">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
            <div class="col-8 p-4">
               <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Textura</th>
                            <th scope="col">Fecha</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                         include "modelo/conexion.php";
                         $sql = $conexion->query(" select * from dulces ");
                         while ($datos = $sql->fetch_object()) {?>
                            <tr>
                            <td><?= $datos->id_dulce ?></td>
                            <td><?= $datos->nombre ?>o</td>
                            <td><?= $datos->cantidad ?></td>
                            <td><?= $datos->costo ?></td>
                            <td><?= $datos->Textura ?></td>
                            <td><?= $datos->fecha ?></td>
                            <td>
                                <a href="modelo/modificar.php?id_dulce=<?= $datos->id_dulce ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="modelo/eliminar.php" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                         </tr>
                        <?php }
                        ?>
                                              
                    </tbody>
                </table>
            </div>
    </div>

    <!-- JV Bundle with popper-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>