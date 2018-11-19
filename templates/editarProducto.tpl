{include file="header.tpl"}
<div class="col-sm-offset-2 col-sm-8">

<h1>{$Titulo}</h1>


<div class="container">

<form method="post" action="guardarEditar"  >
  <input type="hidden" class="form-control" id="idForm" name="idProducto" value="{$Producto["idproducto"]}">
  <div class="form-group">

    <input type="text" class="form-control" id="nombre" name="nombre" value="{$Producto["nombre"]}">
  </div>
  <div class="form-group">
    <label for="descripcionForm">Descripcion</label>
    <input type="text" class="form-control" id="precio" name="precio" value="{$Producto["precio"]}">
  </div>

  <div class="input-group mb-3">
<div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect01">Options</label>

<select class="custom-select" id="inputGroupSelect01" name="categoria">


<option selected value="{$Producto["idcategoria"]}" >Elija Categoria</option>
{foreach from=$Categorias item=categoria}
<option value="{$categoria['idcategoria']}">{$categoria['indumentaria']}</option>
{/foreach}
</select>
</div>
</div>

  <button type="submit" class="btn btn-primary">Editar producto</button>
</form>
</div>
</div>
{include file="footer.tpl"}
