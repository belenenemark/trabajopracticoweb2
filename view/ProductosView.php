<?php
//require('libs/Smarty.class.php');

class ProductosView
{
  private $Smarty;



  function __construct()
  {
    $this->Smarty = new Smarty();


  }


  function Mostrar($Titulo, $Productos,$sesion,$Categorias,$admin){
    var_dump($admin);

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Admin',$admin);
    $this->Smarty->display('templates/listarProductos.tpl');
  }
  function MostrarProducto($Titulo, $Producto,$sesion,$imagenes,$user=null,$admin){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Imagenes',$imagenes);
    $this->Smarty->assign('Admin',$admin);
    $this->Smarty->assign('Usuario',$user);


    $this->Smarty->display('templates/listarxProducto.tpl');
  }
  function MostrarProductoxCat($Titulo, $Productos,$sesion,$admin){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Admin',$admin);
    $this->Smarty->display('templates/filtrado.tpl');
  }
  function editProducto($Titulo, $Productos,$Categorias,$sesion,$admin){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Admin',$admin);
    $this->Smarty->display('templates/editarProducto.tpl');
  }

  function errorCarga($dato){
    $this->Smarty->assign('dato',$dato);
      $this->Smarty->display('templates/error.tpl');

  }

}

 ?>
