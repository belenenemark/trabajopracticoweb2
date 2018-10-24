{include file="header.tpl"}


<div class="col-sm-offset-2 col-sm-8">
          <h1>{$Titulo}</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Nombre de Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Id Producto</th>
                <th scope="col">Id Categoria</th>
              </tr>
            </thead>
            <tbody>

              <tr>
              <td>{$Producto['nombre']}</td>
              <td>{$Producto['precio']}</td>
              <td>{$Producto['idcategoria']}</td>
              <td>{$Producto['idproducto']}</td>
            </tr>


            </tbody>
          </table>
        </div>
    </div>

</div>

{include file="footer.tpl"}
