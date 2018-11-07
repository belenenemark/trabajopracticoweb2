<?php
require_once  "./view/ProductosView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/CategoriaModel.php";
require_once 'SecuredController.php';

/**
 *
 */
class ProductoController extends SecuredController
{

  private $view;
  private $model;
  private $modelCategoria;
  private $Titulo;
  private $sesion;

  function __construct()
  {
    parent::__construct();
    $this->view = new ProductosView();
    $this->model = new ProductoModel();
    $this->modelCategoria = new CategoriaModel();
    $this->Titulo = "Lista de Ropa";
    $this->esta=false;
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }
  }

  function ProductosTodos(){
    $Productos = $this->model->GetProductos();
    $Categorias=$this->modelCategoria->GetCategorias();
    $this->view->Mostrar($this->Titulo, $Productos,$Categorias,$this->sesion);
  }
  function ProductoIndividual($param){
      $id = $param[0];
        $tit=$this->Titulo='Producto Individual';
        $Producto = $this->model->GetProducto($id);
      

        $this->view->MostrarProducto($tit, $Producto,$this->sesion);



  }
  public function CategoriaProductos($param)
  {
    $id = $param[0];
    $tit=$this->Titulo='Producto por Categoria';

  $Productos = $this->model->GetProductodeCategoria($id);
  $this->view->MostrarProductoxCat($tit,$Productos,$this->sesion);
  }

  function BorrarProducto($param){
    if($this->sesion){
      $this->model->BorrarProducto($param[0]);

    }
    header(PROD);

  }
  function editarProducto($param){
    if($this->sesion){
      $id_producto = $param[0];
      $Producto = $this->model->GetProducto($id_producto);
      $Categorias=$this->modelCategoria->GetCategorias();
      $this->view->editProducto("Editar Producto", $Producto,$Categorias,$this->sesion);
    }

  }

  function guardarProducto($param){
    if($this->sesion){
      $id = $_POST["idProducto"];
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $idcategoria = $_POST["categoria"];
      $this->model->EditarProducto($id,$nombre,$precio,$idcategoria);
    }

    header(PROD);
  }
  function agregarProducto(){
    if($this->sesion){
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $categoria = $_POST["categoria"];

      $this->model->InsertarProducto($nombre,$precio,$categoria);
    }


    header(PROD);
  }


}



 ?>
