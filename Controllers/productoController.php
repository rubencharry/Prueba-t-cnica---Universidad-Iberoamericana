<?php
class productoController
{

    private $model;
    public function __construct()
    {
        include ('C:\wamp64\www\inventarioProducto\Models\productoModel.php');
        $this->model = new productoModel();
    }

    public function guardar($formulario)
    {
        $id = $this->model->insertar(
            $formulario['producto'],
            $formulario['referencia'],
            $formulario['precio'],
            $formulario['peso'],
            $formulario['categoria'],
            $formulario['stock']
        );

        return ($id != false) ?  header("Location:..\index.php") : false;
    }

    public function mostrar($id){
        return ($this->model->mostrar($id) != false) ? $this->model->mostrar($id) : header("Location:index.php");
    }

    public function buscar($nombre){
        return ($this->model->buscar($nombre) != false) ? $this->model->buscar($nombre) : false;
    }

    public function actualizar($formulario){
        $id = $this->model->actualizar( 
            $formulario['id'],  
            $formulario['producto'],
            $formulario['referencia'],
            $formulario['precio'],
            $formulario['peso'],
            $formulario['categoria'],
            $formulario['stock']
        );
        return ($id != false) ? header("Location:..\index.php") : false;
    }

    public function vender($formulario){
        print_r($formulario);
        $nuevaCantidad = $formulario['stock'] - $formulario['venta'];
        $id = $this->model->vender( 
            $formulario['id'],  
            $nuevaCantidad
        );
      
        return ($id != false) ? header("Location:..\index.php") : false;
    }

    public function index()
    {
        return ($this->model->consultarTodo()) ? $this->model->consultarTodo() : false;
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:..\index.php") : false;
    }
}
