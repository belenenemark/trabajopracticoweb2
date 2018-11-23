<?php
/**
 *
 */
class UsuariosView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrar($Titulo,$usuarios,$sesion,$admin){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Usuarios',$usuarios);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Admin',$admin);
    $this->Smarty->display('templates/Usuarios.tpl');

  }
}
