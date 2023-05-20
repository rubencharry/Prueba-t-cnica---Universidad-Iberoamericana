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
        <form class="text-center row justify-content-center" action="../Views/vender.php" method="post" autocomplete="off">
            <h2 style="background:#e97827; color:white" class="col-4 text-center">Realizar venta</h2>
            <div class="mb-3 row justify-content-center">
                <div class="col-2" style="display:none">
                    <input type="text" class="form-control disabled" name="id" value="<?= $edit[0] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="producto" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-2">
                    <input disabled type="text" class="form-control" name="producto" value="<?= $edit[1] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="referencia" class="col-sm-2 col-form-label">Referencia</label>
                <div class="col-2">
                    <input disabled type="text" class="form-control" name="referencia" value="<?= $edit[2] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-2">
                    <input disabled type="number" class="form-control" name="precio" value="<?= $edit[3] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="peso" class="col-sm-2 col-form-label">Peso</label>
                <div class="col-2">
                    <input disabled type="number" class="form-control" name="peso" value="<?= $edit[4] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                <div class="col-2">
                    <input disabled type="text" class="form-control" name="categoria" value="<?= $edit[5] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-2" style="display:none">
                    <input  type="number" class="form-control " name="stock" value="<?= $edit[6] ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="venta" class="col-sm-2 col-form-label">¿Cuantos productos desea comprar?</label>
                <div class="col-2">
                    <input type="number" class="form-control " name="venta" value="" required>
                </div>
            </div>
            <div class="col-4">
                <input type="submit" class="btn btn-success col-3" value="Vender">
                <a class="btn btn-danger" href="../index.php">Cancelar</a>
            </div>
        
        </form>
    </div>
</body>