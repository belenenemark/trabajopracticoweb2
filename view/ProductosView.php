<?php
//require('libs/Smarty.class.php');

class ProductosView
{
  private $Smarty;



  function __construct()
  {
    $this->Smarty = new Smarty();
    $this->Smarty = new Smarty();


  }
  function prueba($tabla){

    $this->Smarty->assign('tabla',$tabla);
    $this->Smarty->display('templates/prueba.tpl');

  }

  function Mostrar($Titulo, $Productos,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/listarProductos.tpl');
  }
  function MostrarProducto($Titulo, $Producto,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/listarxProducto.tpl');
  }
  function MostrarProductoxCat($Titulo, $Productos,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/filtrado.tpl');
  }
  function editProducto($Titulo, $Productos,$Categorias,$sesion){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/editarProducto.tpl');
  }
}

 ?>
