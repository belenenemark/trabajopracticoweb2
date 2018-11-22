<?php

//esto ya esta agregado todo
require_once "config/ConfigApp.php";
require_once "controller\CategoriaController.php";
 require_once "controller\ProductoController.php";
require_once "controller\LoginController.php";
require_once "controller\RegistrarseController.php";
require_once "controller\SecuredController.php";
require_once "controller\UsuariosController.php";



function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];

  #borrar/1/2/3/4
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]);
        $controller =  new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }else{
      $controller =  new CategoriaController();
      echo $controller->Home();
    }
}
 ?>
