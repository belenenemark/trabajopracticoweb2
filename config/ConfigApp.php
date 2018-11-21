<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('PROD', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]).'/productos');



class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [

      ''=> 'CategoriaController#Home',
      'home'=> 'CategoriaController#Home',
      'productos'=>'ProductoController#ProductosTodos',
      'ProductoIndividual'=>'ProductoController#ProductoIndividual',
      'login'=>'LoginController#login',
      'verificarLogin' => 'LoginController#verificarLogin',
      'signin'=>'RegistrarseController#signin',
      'verificarSignIn' => 'RegistrarseController#verificarSignIn',
      'CategoriaProductos'=> 'ProductoController#CategoriaProductos',
      'logout'=>'LoginController#logout',
      'borrarProducto'=> 'ProductoController#borrarProducto',
      'editarProducto'=> 'ProductoController#editarProducto',
      'guardarEditar'=>'ProductoController#guardarProducto',
      'agregar'=>'ProductoController#agregarProducto',
      'agregarCategoria'=>'CategoriaController#agregarCategoria',
      'editarCategoria'=>'CategoriaController#editarCategoria',
      'editeCategoria'=>'CategoriaController#guardeCategoria',
      'borrarCategoria'=>'CategoriaController#borrarCategoria',
      'borrarImagen'=>'ProductoController#borrarImagen',



    ];

}

 ?>
