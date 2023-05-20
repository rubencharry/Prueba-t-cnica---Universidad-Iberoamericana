<?php
    require_once("../Controllers/productoController.php");
    $obj = new productoController();
    $obj->delete($_GET['id']);

?>