<?php
require('libs/Smarty.class.php');

/**
 *
 */
class CategoriasView
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

  function Mostrar($Titulo,$Categorias){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/listarCategorias.tpl');
  }
  function editCategoria($Titulo,$Categoria){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Categoria',$Categoria);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/editarCategoria.tpl');
  }
}
?>
