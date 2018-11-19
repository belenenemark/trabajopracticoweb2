{include file="header.tpl"}


<div class="col-sm-offset-2 col-sm-8">
          <h1>{$Titulo}</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Nombre de Producto</th>
                <th scope="col">Precio</th>
                <th scope="col"> Categoria</th>
              </tr>
            </thead>
            <tbody>

              <tr>
              <td>{$Producto['nombre']}</td>
              <td>{$Producto['precio']}</td>
              <td>{$Producto['indumentaria']}</td>
            </tr>


            </tbody>

          </table>
        </div>
        {foreach from=$Imagenes item=imagen}
        <div class="imagenesProd">
          <img src="{$imagen['nombre']}" alt="">
          {if $Logeado}
            <a href="borrarImagen/{$imagen['id_image']}">Borrar Imagen</a>
          {/if}
        </div>
        {/foreach}
    </div>

</div>

{include file="footer.tpl"}
