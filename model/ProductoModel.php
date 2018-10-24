<?php
class ProductoModel
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

  function GetProductos(){
    $sentencia = $this->db->prepare( "SELECT * from producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


function GetProducto($idproducto){
  $sentencia = $this->db->prepare( "SELECT * from producto where idproducto=?");
  $sentencia->execute(array($idproducto));
  return $sentencia->fetch(PDO::FETCH_ASSOC);
}
function InsertarProducto($nombre,$precio,$categoria){

    $sentencia = $this->db->prepare("INSERT INTO producto (nombre, precio,idcategoria) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$precio,$categoria));
  }
  function BorrarProducto($idproducto){

    $sentencia = $this->db->prepare( "DELETE from producto where idproducto=?");
    $sentencia->execute(array($idproducto));
  }
  function EditarProducto($idproducto,$nombre,$precio,$categoria){
    $sentencia = $this->db->prepare( "UPDATE producto set nombre = ?, precio = ?, idcategoria = ? where idproducto=?");
      $sentencia->execute(array($nombre,$precio,$categoria,$idproducto));
  }
  function GetProductodeCategoria($idcategoria){
    if($idcategoria==''){
        $sentencia = $this->db->prepare( "SELECT * from producto");
        $sentencia->execute();
    }else{
      $sentencia = $this->db->prepare( "SELECT * from producto where idcategoria=?");
      $sentencia->execute(array($idcategoria));
    }

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}




 ?>
