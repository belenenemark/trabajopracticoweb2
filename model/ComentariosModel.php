<?php
/**
 *
 */
class ComentariosModel
{
  private $db;
  function __construct()
  {
    $this->db = $this->Connect();

  }
  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=dbropa;charset=utf8'
    , 'root', '');
  }
  function InsertarComentario($comentario,$valoracion,$idusuario,$idproducto){

    $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario,valoracion,idusuario,idproducto) VALUES(?,?,?,?)");
    $sentencia->execute(array($comentario,$valoracion,$idusuario,$idproducto));
    $lastId = $this->db->lastInsertId();
    return $this->GetComentario($lastId);
  }

  function GetComentarios($idproducto){
    $sentencia = $this->db->prepare( "SELECT comentarios.idcomentario,comentarios.comentario,comentarios.valoracion,comentarios.idusuario,usuario.nombre from comentarios INNER JOIN usuario on comentarios.idusuario=usuario.idusuario where idproducto=?");
    $sentencia->execute(array($idproducto));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetComentario($idcomentario){
      $sentencia = $this->db->prepare( "SELECT * from comentarios where idcomentario=?");
      $sentencia->execute(array($idcomentario));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function BorrarComentario($idcomentario){
    $comentario = $this->GetComentario($idcomentario);
    if(isset($comentario)){
      $sentencia = $this->db->prepare( "DELETE from  comentarios where idcomentario=?");
      $sentencia->execute(array($idcomentario));
      return $comentario;
    }
  }
}


 ?>
