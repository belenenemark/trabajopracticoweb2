<?php

require_once "config/ConfigApi.php";


function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$RESOURCE] = $urlExploded[0].'#'.$_SERVER['REQUEST_METHOD'];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){

    $urlData = parseURL($_GET['resource']);
    $resource = $urlData[ConfigApp::$RESOURCE]; //home
    if(array_key_exists($resource,ConfigApp::$RESOURCE)){
        $params = $urlData[ConfigApp::$PARAMS];
        $resource = explode('#',ConfigApp::$RESOURCES[$resource]);
        $controller =  new $resource[0]();
        $metodo = $resource[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }
}
 ?>
