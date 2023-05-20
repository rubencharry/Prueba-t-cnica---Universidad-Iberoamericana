<?php
require_once("../Controllers/productoController.php");
$obj = new productoController();

if (isset($_POST)) {
    if ($_POST['venta'] > $_POST['stock']) {
?>
        <script>
            function Confirm() {
                var mensaje = confirm("Stock insuficiente para la venta, intentalo de nuevo");
                
                if (mensaje) {
                    window.location.href = "../index.php";
                }
               
                else {
                    window.location.href = "../index.php";
                }
            }
            Confirm();
        </script>
<?php

    } else {
        $venta =  $obj->vender($_POST);
    }
}
?>