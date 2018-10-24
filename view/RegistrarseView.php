<?php
class RegistrarseView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }
  }


  function mostrarSignIn($message = ''){

    $this->Smarty->assign('Titulo',"Registrar");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/registrarse.tpl');
  }
}

 ?>
