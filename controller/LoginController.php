<?php

require_once  "./view/loginView.php";
require_once  "./model/UsuarioModel.php";



class LoginController
{
  private $view;
  private $model;
  private $Titulo;
  private $sesion;


  function __construct()
  {

    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }

  }

  function login(){

    $this->view->mostrarLogin(' ', $this->sesion);

  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin(){
      $userData = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->GetUser($userData);


      if( (isset($dbUser))&&($dbUser!=NULL )){

          if (password_verify($pass,$dbUser['clave'])){
              session_start();
              $_SESSION["User"] = $userData;

              header(HOME);
          }else{
            $this->view->mostrarLogin("Contraseña invalida",$this->sesion);

          }

      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usuario",$this->sesion);
      }

  }

}

 ?>
