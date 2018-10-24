<?php
class LoginView
{
  private $Smarty;
  private $sesion;

  function __construct()
  {
    $this->Smarty = new Smarty();
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }
  }


  function mostrarLogin($message = ''){

    $this->Smarty->assign('Titulo',"Login"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/login.tpl');
  }
}

 ?>
