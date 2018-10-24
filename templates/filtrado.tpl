{include file="header.tpl"}


<div class="col-sm-offset-2 col-sm-8">
          <h1>{$Titulo}</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Nombre de Producto</th>
                <th scope="col">Precio</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$Productos item=producto}
              <tr>

              <td>  {$producto['nombre']}</td>
              <td>  {$producto['precio']}</td>
            </tr>
            {/foreach}

            </tbody>
          </table>
        </div>
    </div>

</div>

{include file="footer.tpl"}
