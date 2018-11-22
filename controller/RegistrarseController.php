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
  private $sesion;
  function __construct()
  {
    $this->view = new RegistrarseView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Sign In";
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }
  }
  function signin(){

    $this->view->mostrarSignIn('',$this->sesion,$_SESSION["admin"]);

  }

  function verificarSignIn(){
      $user = filter_var(strtolower($_POST['usuarioId']), FILTER_SANITIZE_STRING);
      $pass = $_POST["passwordId"];
      $pass2 = $_POST["passwordId2"];
      $dbUser = $this->model->getUser($user);

      if($dbUser==$user){
          $this->view->mostrarSignIn("Existe el usuario",$this->sesion,$_SESSION["admin"]);
      }else{
        if($pass==$pass2){
          $this->model->InsertarUsuario($user,$pass);
            $this->view->mostrarSignIn("Su registro ha sido realizado correctamente",$this->sesion,$_SESSION["admin"]);

        }else {
            $this->view->mostrarSignIn("Las password no son iguales",$this->sesion,$_SESSION["admin"]);
        }

      }

  }
}






 ?>
