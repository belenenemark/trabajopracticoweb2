{include file="header.tpl"}


<div class="col-sm-offset-2 col-sm-8">
          <h1>{$Titulo}</h1>
          <h2><a href="CategoriaProductos/">Filtrar todos los items</a> </h2>

          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Numero de Categoria</th>
                <th scope="col">Nombre</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$Categorias item=categoria}
              {if $categoria['tipo_publico'] == 1}
              <tr>

                <td>{$categoria['idcategoria']}
                  {if $Logeado }<a href="borrarCategoria/{$categoria['idcategoria']}">BORRAR</a> | <a href="editarCategoria/{$categoria['idcategoria']}">EDITAR</a>{/if}
                </td>
                <td> <a href="CategoriaProductos/{$categoria['idcategoria']}">{$categoria['indumentaria']}</a></td>



            </tr>
              {/if}
            {/foreach}
            </tbody>
          </table>
          {if $Logeado}
          <div class="container">
        <h2>Formulario</h2>
        <form method="post" action="agregarCategoria">
          <div class="form-group">
            <label for="tituloForm">Nombre</label>
            <input type="text" class="form-control" id="categoria" name="categoria">
          </div>

          <button type="submit" class="btn btn-primary">Agregar categoria categoria</button>
        </form>
      </div>
      {/if}
        </div>


    </div>

</div>

{include file="footer.tpl"}
