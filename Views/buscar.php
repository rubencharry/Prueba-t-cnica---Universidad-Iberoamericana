<head>
    <meta charset="UTF-8">
    <title>Prueba Tecnica Ruben</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ab863116f.js" crossorigin="anonymous"></script>

<body>

    <?php
    require_once("../Controllers/productoController.php");
    $obj = new productoController();

    if ($_POST['busqueda']) {
        $rows = $obj->buscar($_POST['busqueda']);
        if ($rows == false) {
    ?>
            <script>
                function Confirm() {
                    var mensaje = confirm("Ese nombre no está registrado en la base de datos, intentalo de nuevo");
                    //Verificamos si el usuario acepto el mensaje
                    if (mensaje) {
                        window.location.href = "../index.php";
                    }
                    //Verificamos si el usuario denegó el mensaje
                    else {
                        window.location.href = "../index.php";
                    }
                }
                Confirm();
            </script>
        <?php
        }
    }

    if (!empty($rows)) {
        ?>
        <div class="container">
            <br>
            <div class="row justify-content-center">
                <h3 class="col-4 text-center" style="background:blue; color:white"> Producto encontrado </h3>
            </div>
            <br>
            <div class="row text-center justify-content-center">
                <ul class="list group col-4">
                    <li class="list-group-item list-group-item-info"> id: <?= $rows['0'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Nombre: <?= $rows['1'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Referencia: <?= $rows['2'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Precio: <?= $rows['3'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Peso: <?= $rows['4'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Categoria: <?= $rows['5'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Stock: <?= $rows['6'] ?> </li>
                    <li class="list-group-item list-group-item-info"> Fecha creacion: <?= $rows['7'] ?></li>
                    <li class="list-group-item list-group-item-info"> Fecha ultima venta: <?= $rows['8'] ?></li>
                </ul>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="row justify-content-center">
        <a href="../index.php" class="btn btn-primary col-4">Volver</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>