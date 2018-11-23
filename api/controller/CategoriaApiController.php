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

  function GetCategorias($param = null)
  {
    if(isset($param)){
      $id_categoria = $param[0];
      $data = $this->model->GetCategoria($id_categoria);

    }else{
      $data = $this->model->GetCategorias();
    }
    if($data == true){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }

  function DeleteCategoria($param = null){
    if(count($param) == 1){
      $id_categoria = $param[0];
     $r =  $this->model->BorrarCategoria($id_categoria);
     if($r == false){
       return $this->json_response($r,300);
     }
      return $this->json_response($r,200);
      }else{
      return $this->json_response("Categoria no especificada",300);
    }
  }

  function InsertarCategoria($param = null){
    $arreglo = $this->getJSONData();
    $r = $this->model->InsertarCategoria($arreglo->Indumentaria);
     return $this->json_response($r,200);

  }

}
