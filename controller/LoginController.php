<?php

require_once  "./view/loginView.php";
require_once  "./model/UsuarioModel.php";



class LoginController
{
  private $view;
  private $model;
  private $Titulo;
  private $sesion;
  private $admin;


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
        if(isset($_SESSION["admin"])){
          if($_SESSION["admin"] == 1){
            $this->admin =true;
          }else{
            $this->admin =false;
           }
         }else{
           $this->admin =false;
         }

  }

  function login(){

    $this->view->mostrarLogin(' ', $this->sesion,$this->admin);

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
              $_SESSION["admin"] = $dbUser['admin'];
              var_dump($_SESSION['admin']);
              header(HOME);
          }else{
            $this->view->mostrarLogin("Contraseña invalida",$this->sesion,$this->admin);

          }

      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usuario",$this->sesion,$this->admin);
      }

  }

}

 ?>
