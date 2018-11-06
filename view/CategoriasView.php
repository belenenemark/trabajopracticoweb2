<?php
require('libs/Smarty.class.php');

/**
 *
 */
class CategoriasView
{

  private $Smarty;


  function __construct()
  {
    $this->Smarty = new Smarty();


  }

  function Mostrar($Titulo,$Categorias,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/listarCategorias.tpl');
  }
  function MostrarPublico($Titulo,$Categorias,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/CategoriaLindo.tpl');
  }
  function editCategoria($Titulo,$Categoria,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Categoria',$Categoria);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/editarCategoria.tpl');
  }
}
?>
