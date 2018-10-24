
<?php
require_once  "./view/CategoriasView.php";
require_once  "./model/CategoriaModel.php";
require_once 'SecuredController.php';


class CategoriaController extends SecuredController
{
  private $view;
 private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
   $this->view = new CategoriasView();
   $this->model = new CategoriaModel();
   $this->Titulo = "Lista de Categorias";
  }

  function Home(){

      $Categorias = $this->model->GetCategorias();
      $this->view->Mostrar($this->Titulo, $Categorias);
  }
  function editarCategoria($param){
    $id_categoria = $param[0];

    $Categoria = $this->model->GetCategoria($id_categoria);
    $this->view->editCategoria("Editar Categoria",$Categoria);
  }

  function borrarCategoria($param){
    $this->model->BorrarCategoria($param[0]);
    header(HOME);
   }
   function agregarCategoria(){
    $nombre = $_POST["categoria"];
    $this->model->InsertarCategoria($nombre);

    header(HOME);
  }
  function guardeCategoria($param){
    $idcategoria = $_POST["idCategoria"];
    $indumentaria = $_POST["indumentaria"];

    $this->model->EditarCategoria($indumentaria,$idcategoria);
    header(HOME);
  }

}

 ?>
