<?php
//require('libs/Smarty.class.php');

class ProductosView
{
  private $Smarty;
  private $sesion;


  function __construct()
  {
    $this->Smarty = new Smarty();
    $this->Smarty = new Smarty();
    if(isset($_SESSION["User"])){
        $this->sesion =true;
        }  else {
          $this->sesion=false;
        }

  }

  function Mostrar($Titulo, $Productos,$Categorias){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/listarProductos.tpl');
  }
  function MostrarProducto($Titulo, $Producto){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/listarxProducto.tpl');
  }
  function MostrarProductoxCat($Titulo, $Productos){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/filtrado.tpl');
  }
  function editProducto($Titulo, $Productos,$Categorias){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$this->sesion);
    $this->Smarty->display('templates/editarProducto.tpl');
  }
}

 ?>
