<?php

require_once  "./view/loginView.php";
require_once  "./model/UsuarioModel.php";



class LoginController
{
  private $view;
  private $model;
  private $Titulo;


  function __construct()
  {

    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";

  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    $sesion=false;
    header(HOME);
  }

  function verificarLogin(){
      $userData = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->GetUser($userData);
      

      if( (isset($dbUser))&&($dbUser!=NULL )){

          if (password_verify($pass,$dbUser[0]['clave'])){
              session_start();
              $_SESSION["User"] = $userData;

              header(HOME);
          }else{
            $this->view->mostrarLogin("Contraseña invalida");

          }

      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usuario");
      }

  }

}

 ?>
