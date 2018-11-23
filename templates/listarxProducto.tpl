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
    {if $Logeado}
    <form method="POST" action="#" class="text-center">
                  <h2>Comentarios y valoraciones del producto</h2>

                  <!-- ID USUARIO -->
                  {if $Logeado}
                  <input type="" class="form-control" id="idusuario" value="{$Usuario['idusuario']}"></input>
                  {/if}

                    <!-- Paso el producto -->
                      <input type="hidden" class="form-control" id="idproducto" value="{$Producto['idproducto']}"></input>

                    <!-- Elegir puntuación -->
                      <label for="exampleSelect1">Elige la puntuación que quieres darle:</label>
                      <select class="form-control" id="puntaje">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>

                    <!-- ESCRIBIR COMENTARIO -->
                    <div class="form-group"> <!-- Área para escribir tu Review sobre el juego -->
                      <label for="comentario">Comentario:</label>
                      <textarea class="form-control" rows="5" name="commentText" id="commentText" placeholder="Hacer comentario..."></textarea>
                    </div>

                    <p></p>
                    <button type="submit" id="submitComment" class="btn btn-primary">Submit</button>
                </form>
    {/if}
      <input type="hidden" class="form-control" id="admin" value="{$Admin}"></input>
    <div id="comentarios-container"value="{$Producto['idproducto']}">

    </div>

</div>


{include file="footer.tpl"}
