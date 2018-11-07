<?php


require_once 'Api.php';
require_once '../../model/CategoriasModel.php';
class CategoriaApiController extends Api
{
  private $model;

  function __construct()
  {
    parent::__construct();
    $this->model = new CategoriasModel();
  }

  function GetCategorias()
  {
    $data = $this->model->GetCategorias();
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
}

 ?>
