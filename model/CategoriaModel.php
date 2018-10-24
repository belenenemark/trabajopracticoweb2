<?php
/**
 *
 */
class CategoriaModel
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

  function GetCategorias(){
    $sentencia = $this->db->prepare( "SELECT * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetCategoria($idcategoria){

      $sentencia = $this->db->prepare( "SELECT * from categoria where idcategoria=?");
      $sentencia->execute(array($idcategoria));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function InsertarCategoria($indumentaria){

    $sentencia = $this->db->prepare("INSERT INTO categoria(indumentaria) VALUES(?)");
    $sentencia->execute(array($indumentaria));
  }

  function BorrarCategoria($idcategoria){

    $sentencia = $this->db->prepare( "DELETE from categoria where idcategoria=?");
    $sentencia->execute(array($idcategoria));
  }

  function EditarCategoria($indumentaria,$idcategoria){
    $sentencia = $this->db->prepare( "UPDATE categoria set indumentaria = ? where idcategoria=?");
    $sentencia->execute(array($indumentaria,$idcategoria));
  }
}
?>
