<?php

class ConfigApi
{
  public static $RESOURCE = 'resource';
  public static $PARAMS = 'params';
  public static $RESOURCES = [
      'categorias#GET'=> 'CategoriaApiController#GetCategorias',
      'categorias#DELETE'=> 'CategoriaApiController#DeleteCategoria',
      'categorias#POST'=> 'CategoriaApiController#InsertarCategoria',

    ];

}

 ?>
