<!DOCTYPE html>
<?php
require_once("Controllers\productoController.php");
$obj = new productoController();
$rows = $obj->index();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba Tecnica Ruben</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ab863116f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid row">
        <h1 class="text-center p-3" style="background:#3f3fa1; color:white">Inventario</h1>
        <!--Formulario para añadir nuevo producto-->
        <form action="views/crear.php" class="col-4" method="POST">
            <h3 class="text-center" style="color: white; background: blue; border: black;">Productos</h3>
            <br>
            <div class="row">
                <div class="col-6 text-center col align-self-center">
                    <label for="producto" class="form-label">Producto</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="producto" id="idProducto" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 text-center col align-self-center">
                    <label for="referencia" class="form-label">Referencia</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="referencia" id="idReferencia" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 text-center col align-self-center">
                    <label for="precio" class="form-label">Precio</label>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" name="precio" id="idPrecio" required>
                </div>
            </div>
            <br>
            <div class=row>
                <div class="col-6 text-center col align-self-center">
                    <label for="peso" class="form-label">Peso</label>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" name="peso" id="idPeso" required>
                </div>
            </div>
            <br>
            <div class=row>
                <div class="col-6 text-center col align-self-center">
                    <label for="categoria" class="form-label">Categoria</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="categoria" id="idCategoria" required>
                </div>
            </div>
            <br>
            <div class=row>
                <div class="col-6 text-center col align-self-center">
                    <label for="stock" class="form-label">Stock</label>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" name="stock" id="idStock" required>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary col-4" name="btnRegistrar">Registrar</button>
            </div>
        </form>
        <!--Inventario de productos existentes-->
        <div class="col-8 p4">
            <table class="table table-striped">
                <thead class="bg-info">
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Fecha Creacion</th>
                        <th scope="col">Ultima Venta</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows) : ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr class=text-center>
                                <td><?= $row[0] ?></td>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[4] ?></td>
                                <td><?= $row[5] ?></td>
                                <td><?= $row[6] ?></td>
                                <td><?= $row[7] ?></td>
                                <td><?= $row[8] ?></td>
                                <td>
                                    <!--Botones de editar - eliminar - vender producto-->
                                    <a href="Views/editarProducto.php?id=<?= $row[0] ?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-small btn-danger" data-bs-toggle="modal" data-bs-target="#id<?= $row[0] ?>"><i class="fa-sharp fa-solid fa-trash"></i></i></a>
                                    <a href="Views/venderProducto.php?id=<?= $row[0] ?>" class="btn btn-small btn-info"><i class="fa-brands fa-sellcast"></i></a>
                                </td>

                                <!-- Modal para eliminar producto-->
                                <div class="modal fade" id="id<?= $row[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Una vez eliminado no se podra recuperar el registro
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="Views/delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                                <!-- <button type="button" >Eliminar</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="10" class="text-center">No hay registros actualmente</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <!--Formulario para buscar producto-->
    <div class="text-center col-4 container-fluid row">
        <form action="Views/buscar.php" method="POST">
            <h3 style="background:blue; color:white">Buscar producto</h3>
            <br>
            <div class="row">
                <div class="col-6 text-center col align-self-center">
                    <label for="busquedas" class="form-label">Nombre de producto</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="busqueda" id="idBusqueda" required>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-warning col-4" name="btnRegistrar">Buscar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>