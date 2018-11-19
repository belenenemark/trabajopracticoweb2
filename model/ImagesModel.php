<?php
/**
 *
 */
class ImagesModel
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

  function GetimagesProducto($idproducto){ //selecciona las imagenes que correspondne a un producto
    if($idproducto==''){
        $sentencia = $this->db->prepare( "SELECT * from imagenes");
        $sentencia->execute();
    }else{
      $sentencia = $this->db->prepare( "SELECT * from imagenes where idproducto=?");
      $sentencia->execute(array($idproducto));
    }
    function InsertarImagen($nombre,$producto){

        $sentencia = $this->db->prepare("INSERT INTO imagenes (nombre,idcategoria) VALUES(?,?,?)");
        $sentencia->execute(array($nombre,$precio,$categoria));
      }

    function BorrarImagen($idimagenes){

      $sentencia = $this->db->prepare( "DELETE from imagenes where idimagenes=?");
      $sentencia->execute(array($idimagenes));
    }

}


 ?>
