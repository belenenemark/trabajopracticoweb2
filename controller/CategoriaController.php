
<?php
require_once  "./view/CategoriasView.php";
require_once  "./model/CategoriaModel.php";
require_once 'SecuredController.php';


class CategoriaController extends SecuredController
{
  private $view;
 private $model;
  private $Titulo;
  private $sesion;
  private $admin;
  function __construct()
  {
    parent::__construct();
   $this->view = new CategoriasView();
   $this->model = new CategoriaModel();
   $this->Titulo = "Pecas Tandil";
   if(isset($_SESSION["User"])){
       $this->sesion =true;
       }  else {
         $this->sesion=false;
       }
       if(isset($_SESSION["admin"])){
           $this->admin =true;
           }  else {
             $this->admin=false;
           }
  }

  function Home(){

      $Categorias = $this->model->GetCategorias();
      if($this->sesion){
        $this->view->Mostrar($this->Titulo, $Categorias,$this->sesion,$this->admin);
      }else {
        $this->view->MostrarPublico($this->Titulo,$Categorias,$this->sesion,$this->admin);
      }

  }
  function editarCategoria($param){
    if($this->sesion){


    $id_categoria = $param[0];

    $Categoria = $this->model->GetCategoria($id_categoria);
    $this->view->editCategoria("Editar Categoria",$Categoria,$this->sesion,$this->admin);
  }
  }

  function borrarCategoria($param){
    if($this->sesion){
      $this->model->BorrarCategoria($param[0]);
      header(HOME);
    }

   }
   function agregarCategoria(){
     if($this->sesion){
       $nombre = $_POST["categoria"];
       $this->model->InsertarCategoria($nombre);
     }


    header(HOME);
  }
  function guardeCategoria($param){
    if($this->sesion){
      $idcategoria = $_POST["idCategoria"];
      $indumentaria = $_POST["indumentaria"];

      $this->model->EditarCategoria($indumentaria,$idcategoria);
      header(HOME);
    }

  }

}

 ?>
