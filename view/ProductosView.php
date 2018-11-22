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

  function Mostrar($Titulo, $Productos,$sesion,$Categorias){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->display('templates/listarProductos.tpl');
  }
  function MostrarProducto($Titulo, $Producto,$sesion,$imagenes,$user){
    var_dump($user);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Logeado',$sesion);
    $this->Smarty->assign('Imagenes',$imagenes);
    $this->Smarty->assign('Usuario',$user);


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
  function mostrarCrearImg(){
    $this->Smarty->display('templates/pruebaimagen.tpl');

  }
  function errorCarga($dato){
    $this->Smarty->assign('dato',$dato);
      $this->Smarty->display('templates/error.tpl');

  }

}

 ?>
