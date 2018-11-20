<?php


require_once 'Api.php';
require_once './../model/ComentariosModel.php';
class ComentariosApiController extends Api
{
  private $model;

  function __construct()
  {
    parent::__construct();
    $this->model = new ComentariosModel();
  }

  function GetComentarios($param = null)
  {
    if(isset($param)){
      $id_comentario = $param[0];
      $data = $this->model->GetComentario($id_comentario);

    }else{
      $data = $this->model->GetComentarios();
    }
    if($data == true){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }

  function BorrarComentario($param = null){
    if(count($param) == 1){
      $id_comentario = $param[0];
     $r =  $this->model->BorrarComentario($id_comentario);
     if($r == false){
       return $this->json_response($r,300);
     }
      return $this->json_response($r,200);
      }else{
      return $this->json_response("Comentario no encontrado",300);
    }
  }

  function InsertarComentario($param = null){
    $arreglo = $this->getJSONData();
    $r = $this->model->InsertarComentario($arreglo->Indumentaria);
     return $this->json_response($r,200);

  }

}

 ?>
