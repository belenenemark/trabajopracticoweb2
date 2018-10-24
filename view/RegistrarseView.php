<?php
class RegistrarseView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
    
  }


  function mostrarSignIn($message = '',$sesion){

    $this->Smarty->assign('Titulo',"Registrar");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/registrarse.tpl');
  }
}

 ?>
