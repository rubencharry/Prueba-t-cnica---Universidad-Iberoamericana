<?php

class productoModel
{
    public $id;
    public $nombreProducto;
    public $precio;
    public $peso;
    public $categoria;
    public $stock;
    public $fechaCreacion;
    public $fechaUltimaVenta;

    private $PDO;
    public function __construct()
    {
        // Conexión a la base de datos
        require_once("C:\wamp64\www\inventarioProducto\Database\conection.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
        // Añadir nuevo producto a la base de datos
    public function insertar($nombre,$referencia,$precio,$peso,$categoria,$stock){
        $stament = $this->PDO->prepare("INSERT INTO producto VALUES(NULL,:nombre,:referencia,:precio,:peso,:categoria,:stock,CURDATE(), NULL)");
        $stament->bindParam(":nombre",$nombre);
        $stament->bindParam(":referencia",$referencia);
        $stament->bindParam(":precio",$precio);
        $stament->bindParam(":peso",$peso);
        $stament->bindParam(":categoria",$categoria);
        $stament->bindParam(":stock",$stock);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
    }
        // Acutalizar datos de un producto
    public function actualizar($id,$nombre,$referencia,$precio,$peso,$categoria,$stock){
        $stament = $this->PDO->prepare("UPDATE producto SET nombre = :nombre, referencia = :referencia, precio = :precio, peso = :peso, categoria = :categoria, stock = :stock WHERE id = :id");
        $stament->bindParam(":id",$id);
        $stament->bindParam(":nombre",$nombre);
        $stament->bindParam(":referencia",$referencia);
        $stament->bindParam(":precio",$precio);
        $stament->bindParam(":peso",$peso);
        $stament->bindParam(":categoria",$categoria);
        $stament->bindParam(":stock",$stock);
        return ($stament->execute()) ? $id : false;
    }
        // Vender producto
    public function vender($id,$nuevaCantidad){
        $stament = $this->PDO->prepare("UPDATE producto SET stock = :nuevaCantidad, fechaUltimaVenta = CURDATE() WHERE id = :id");
        $stament->bindParam(":id",$id);
        $stament->bindParam(":nuevaCantidad",$nuevaCantidad);
        return ($stament->execute()) ? $id : false;
    }
        // Mostrar producto
    public function mostrar($id){
        $stament = $this->PDO->prepare("SELECT * FROM producto where id = :id limit 1");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? $stament->fetch() : false ;
    }
        // Buscar producto
    public function buscar($nombre){
        $stament = $this->PDO->prepare("SELECT * FROM producto where nombre = :nombre limit 1");
        $stament->bindParam(":nombre",$nombre);
        return ($stament->execute()) ? $stament->fetch() : false ;
    }
        // Consultar todos los productos
    public function consultarTodo()
    {
        $stament = $this->PDO->prepare("SELECT * FROM producto");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
        // Borrar producto de la base de datos
    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM producto WHERE id = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false;
    }
    
}
