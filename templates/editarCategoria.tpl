{include file="header.tpl"}
<div class="col-sm-offset-2 col-sm-8">

<h1>{$Titulo}</h1>
<div class="container">

<form method="post" action="editeCategoria">
  <input type="hidden" class="form-control" id="idForm" name="idCategoria" value="{$Categoria["idcategoria"]}">
  <div class="form-group">
    <label for="descripcionForm">Nuevo Nombre de Categoria</label>
    <input type="text" class="form-control" id="nombre" name="indumentaria" value="{$Categoria["indumentaria"]}">
  </div>
    <button type="submit" class="btn btn-primary">Editar producto</button>
</form>
</div>
</div>
{include file="footer.tpl"}
