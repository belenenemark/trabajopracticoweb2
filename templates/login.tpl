{include file="header.tpl"}
<div class="row">


<div class="login-block">

<div class=" col-sm-6">
    <h1>{$Titulo}</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Enter email">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
      </div>
      <div class="">

        {$Message}
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

  </div>
  <div class="col-sm-6">
    <img src="images/banner_1.jpg" alt="" class="imglog">
  </div>
  </div>


{include file="footer.tpl"}
