{include file="header.tpl"}


<div class="col-sm-offset-2 col-sm-8">
          <h1>{$Titulo}</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre de Producto</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$Productos item=producto}
              <tr>
              <td>{$producto['idcategoria']}</td>


              <td> <a href="ProductoIndividual/{$producto['idproducto']}"> {$producto['nombre']}</a>
                {if $Logeado} | <a href="borrarProducto/{$producto['idproducto']}">BORRAR</a> | <a href="editarProducto/{$producto['idproducto']}">EDITAR</a>{/if}</td>
            </tr>
            {/foreach}

            </tbody>
          </table>

          {if $Logeado}
        <div class="container">
          <h2>Formulario</h2>
          <form method="post" action="agregar">
            <div class="form-group">
              <label for="tituloForm">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
              <label for="descripcionForm">Precio</label>
              <input type="text" class="form-control" id="precio" name="precio" >
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select class="custom-select" id="inputGroupSelect01" name="categoria">
                <option selected >Elija Categoria</option>
                {foreach from=$Categorias item=categoria}
                <option value="{$categoria['idcategoria']}">{$categoria['indumentaria']}</option>
                {/foreach}
              </select>
            </div>
          </div>
            <button type="submit" class="btn btn-primary">guardar producto</button>
          </form>
        </div>
        {/if}

        </div>
    </div>

</div>

{include file="footer.tpl"}
