<?php
require_once  "./view/UsuariosView.php";
require_once  "./model/UsuarioModel.php";
require_once 'SecuredController.php';
class UsuariosController extends SecuredController
{

  private $view;
 private $model;
  private $Titulo;
  private $sesion;

  function __construct()
  {
    parent::__construct();
   $this->view = new UsuariosView();
   $this->model = new UsuarioModel();
   $this->Titulo = "Usuarios registrados";
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

  function adminPage(){

    $usuarios = $this->model->GetUsuarios();
    $this->view->Mostrar($this->Titulo, $usuarios,$this->sesion,$this->admin);

  }

  function borrarUsuario($param){
    if($this->admin){
      $this->model->BorrarUsuario($param[0]);
    header(USER);
    }

  }
  function aumentarCategoria($param){
    if($this->admin){
      $idusuario = $_POST["idusuario"];
      $admin = $_POST["admin"];

      $this->model->EditarCategoria($idusuario,$admin);
      header(USER);
    }

  }

}





 ?>
