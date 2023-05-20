<?php
require_once("../Controllers/productoController.php");
$obj = new productoController();
if (isset($_POST))
{
    if ($_POST['precio'] > 0 && $_POST['peso'] > 0 && $_POST['stock'] > 0)
    {
        $obj->actualizar($_POST);
    }
    else
    {
        ?>
        <script>
            function Confirm() {
                var mensaje = confirm("Los valores numericos no pueden ser negativos, intentalo de nuevo");
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
