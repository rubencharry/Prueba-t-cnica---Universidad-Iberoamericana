<?php
require_once("../Controllers/productoController.php");
$obj = new productoController();
$edit = $obj->mostrar($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prueba Tecnica Ruben</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ab863116f.js" crossorigin="anonymous"></script>
</head>

<body>
        <div class=" container text-center">
            <br>
            <form class="text-center row justify-content-center" action="../Views/actualizar.php" method="post" autocomplete="off">
            <h2 style="background:blue; color:white" class="col-4 text-center">Modificando Registro</h2>
            <div class="mb-3 row justify-content-center">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-2">
                    <input type="text" class="form-control" name="id" value="<?= $edit[0] ?>" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="producto" class="col-sm-2 col-form-label">Nuevo nombre</label>
                <div class="col-2">
                    <input type="text" class="form-control" name="producto" value="<?= $edit[1] ?>" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="referencia" class="col-sm-2 col-form-label">Nueva Referencia</label>
                <div class="col-2">
                    <input type="text" class="form-control" name="referencia" value="<?= $edit[2] ?>" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="precio" class="col-sm-2 col-form-label">Nuevo Precio</label>
                <div class="col-2">
                    <input type="number" class="form-control" name="precio" value="<?= $edit[3] ?>" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="peso" class="col-sm-2 col-form-label">Nuevo Peso</label>
                <div class="col-2">
                    <input type="number" class="form-control" name="peso" value="<?= $edit[4] ?>" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="categoria" class="col-sm-2 col-form-label">Nueva Categoria</label>
                <div class="col-2">
                    <input type="text" class="form-control" name="categoria" value="<?= $edit[5] ?>" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="stock" class="col-sm-2 col-form-label">Nuevo Stock</label>
                <div class="col-2">
                    <input type="number" class="form-control " name="stock" value="<?= $edit[6] ?>" required>
                </div>
            </div>
            <div class="col-4">
                <input type="submit" class="btn btn-success col-3" value="Actualizar">
                <a class="btn btn-danger" href="../index.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>