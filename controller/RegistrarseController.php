<?php
require_once  "./view/RegistrarseView.php";
require_once  "./model/UsuarioModel.php";

/**
 *
 */
class RegistrarseController
{
  private $view;
  private $model;
  private $Titulo;
  function __construct()
  {
    $this->view = new RegistrarseView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Sign In";
  }
  function signin(){

    $this->view->mostrarSignIn();

  }

  function verificarSignIn(){
      $user = filter_var(strtolower($_POST['usuarioId']), FILTER_SANITIZE_STRING);
    
      $pass = $_POST["passwordId"];
      $pass2 = $_POST["passwordId2"];
      $dbUser = $this->model->getUser($user);
      var_dump($dbUser);



      if($dbUser==$user){
          $this->view->mostrarSignIn("Existe el usuario");
      }else{
        if($pass==$pass2){
          $this->model->InsertarUsuario($user,$pass);
            $this->view->mostrarSignIn("Su registro ha sido realizado correctamente");

        }else {
            $this->view->mostrarSignIn("Las password no son iguales");
        }

      }

  }
}






 ?>
