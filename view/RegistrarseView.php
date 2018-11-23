<?php
class RegistrarseView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();

  }


  function mostrarSignIn($message = '',$sesion,$admin){

    $this->Smarty->assign('Titulo',"Registrar");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Admin',$admin);
    $this->Smarty->display('templates/registrarse.tpl');
  }
}
