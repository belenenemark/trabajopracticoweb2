{include file="header.tpl"}
<div class="col-sm-offset-2 col-sm-8">
    <h1>{$Titulo}</h1>
    <form method="post" action="verificarSignIn">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Ingrese nombre">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Reingrese el Password</label>
        <input type="password" class="form-control" name="passwordId2" id="passwordId2" placeholder="Password">
      </div>
      <div class="">

        {$Message}
      </div>
      <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
    </div>
  </div>

{include file="footer.tpl"}
