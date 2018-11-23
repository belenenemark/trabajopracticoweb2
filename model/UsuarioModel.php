<?php
/**
 *
 */
class UsuarioModel
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

  function GetUsuarios(){

      $sentencia = $this->db->prepare( "SELECT * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC); //modification
  }

  function InsertarUsuario($nombre, $pass){
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, clave) VALUES(?,?)");
    $sentencia->execute(array($nombre, $hash));
  }

  function GetUser($user){

      $sentencia = $this->db->prepare( "SELECT * from usuario where nombre=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function BorrarUsuario($idusuario){

    $sentencia = $this->db->prepare( "DELETE from usuario where idusuario=?");
    $sentencia->execute(array($idusuario));
  }
  function EditarUsuario($idusuario,$admin){
    $sentencia = $this->db->prepare( "UPDATE usuario set admin = ? where idusuario=?");
      $sentencia->execute(array($admin,$idusuario));
  }

}


 ?>
