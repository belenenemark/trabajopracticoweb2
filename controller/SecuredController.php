<?php

class SecuredController
{


  function __construct(){
    session_start();
    if(isset($_SESSION["User"])){

      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 200)) {
        $this->logout();
      }
        $_SESSION['LAST_ACTIVITY'] = time();
    }else{
        //$this->sesion=false;
        //header(HOME);
    }
  }

  function logout(){
    session_start();

    session_destroy();
    header(LOGIN);
  }

}

 ?>
