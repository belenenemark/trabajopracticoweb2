<?php
require_once  "./view/ProductosView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/CategoriaModel.php";
require_once 'SecuredController.php';
require_once './model/UsuarioModel.php';

/**
 *
 */
class ProductoController extends SecuredController
{

  private $view;
  private $model;
  private $modelCat;
  private $modelUser;
  private $Titulo;
  private $sesion;
  private $admin;

  function __construct()
  {
    parent::__construct();
    $this->view = new ProductosView();
    $this->model = new ProductoModel();
    $this->modelCat= new CategoriaModel();
    $this->modelUser= new UsuarioModel();
    $this->Titulo = "Lista de Ropa";
    $this->esta=false;
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }
        if(isset($_SESSION["admin"])){
            $this->admin =true;
            var_dump($this->admin);
            }  else {
              $this->admin=false;
            }
  }

  function ProductosTodos(){
    $Productos = $this->model->GetProductos();
    $Categorias=$this->modelCat->GetCategorias();
    $this->view->Mostrar($this->Titulo, $Productos,$this->sesion,$Categorias,$this->admin);
  }
  function ProductoIndividual($param){
      $id = $param[0];
        $tit=$this->Titulo='Producto Individual';
        $Producto = $this->model->GetProducto($id);
        $imagenes=$this->model->GetImagenes($id);
        $user= $this->modelUser->GetUser($_SESSION["User"]);
        $this->view->MostrarProducto($tit, $Producto,$this->sesion,$imagenes,$user,$this->admin);



  }
  public function CategoriaProductos($param)
  {
    $id = $param[0];
    $tit=$this->Titulo='Producto por Categoria';

  $Productos = $this->model->GetProductodeCategoria($id);
  $this->view->MostrarProductoxCat($tit,$Productos,$this->sesion,$this->admin);
  }

  function BorrarProducto($param){
    if($this->sesion){
      $this->model->BorrarProducto($param[0]);

    }
    header(PROD);

  }
  function borrarImagen($param){

    if($this->admin){
      $this->model->borrarImagen($param[0]);
    }
    header(PROD);
  }
  function editarProducto($param){
    if($this->sesion){
      $id_producto = $param[0];
      $Producto = $this->model->GetProducto($id_producto);
      $Categorias=$this->modelCat->GetCategorias();
      $this->view->editProducto("Editar Producto", $Producto,$Categorias,$this->sesion,$this->admin);
    }

  }

  function guardarProducto($param){
    if($this->sesion){
      $id = $_POST["idProducto"];
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $idcategoria = $_POST["categoria"];
      $this->model->EditarProducto($id,$nombre,$precio,$idcategoria,$this->admin);
    }

    header(PROD);
  }
  function agregarProducto(){
    if($this->sesion){
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $categoria = $_POST["categoria"];
      $rutas=$_FILES['imagenes']['name'];
      if($this->admin){
        if($this->sonJPG($rutas)){
          $rutaTempImagenes=$_FILES['imagenes']['tmp_name'];
          $this->model->InsertarProducto($nombre,$precio,$categoria,$rutaTempImagenes);
          header(PROD);
        }else {
          $this->view->errorCarga("la imagen no fue cargada");
        }
      }else {
      $this->model->InsertarProducto($nombre,$precio,$categoria);
      header(PROD);
      }


    }



  }

function sonJPG($rutas){
  foreach ($rutas as $ruta) {
              $tamaño = strlen($ruta)-3;
              $ext = substr($ruta, $tamaño);
              if(($ext == "jpg") || ($ext == "png")){
                $valor=true;
              }

  }
  if($valor!=true){
    $valor=false;
  }

  return $valor;

}

}



 ?>
