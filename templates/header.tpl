<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{$Titulo}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/v4-shims.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <base href="http://{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">

  <link rel="stylesheet" href="estilo.css">
  </head>
  <body>

  <div class="container">
  	<h3>SuperBarata Ropa<br />
          <small>Tu lugar para buscar tus prendas favoritas</small>
      </h3>
      <br />

      <div class="row">
          <div class="col-sm-2">
              <nav class="nav-sidebar">
                  <ul class="nav">
                      <li class="active"><a href='home'>Home</a></li> <!-- aca el ref a smarty-->
                      <li><a href='home'>Categorias</a></li><!-- aca el ref a smarty-->
                      <li><a href='productos'>Productos</a></li>
                      <li class="nav-divider"></li>
                      {if $Logeado}
                      <li><a href='logout'><i class="glyphicon glyphicon-off"></i> Log out</a></li>
                      {else}
                      <li><a href='login'><i class="glyphicon glyphicon-off"></i> Log in</a></li>
                      <li><a href='signin'><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                      {/if}
                  </ul>
              </nav>
          </div>
