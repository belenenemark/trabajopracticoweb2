<?php


require_once 'Api.php';
require_once './../model/CategoriaModel.php';
class CategoriaApiController extends Api
{
  private $model;

  function __construct()
  {
    parent::__construct();
    $this->model = new CategoriaModel();
  }

  function GetCategorias($param=null)
  {
    if(isset($param)){
      $id_categoria = $param[0];
      $data = $this->model->GetCategoria($id_categoria);

    }else{
      $data = $this->model->GetCategorias();
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }
}

 ?>
