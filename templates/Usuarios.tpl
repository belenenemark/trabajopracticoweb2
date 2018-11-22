{include file="header.tpl"}


<div class="col-sm-offset-2 col-sm-8">
          <h1>{$Titulo}</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Usuarios</th>
                <th scope="col">Es Administrador?</th>
                <th scope="col">Borrar Usuario</th>
                <th scope="col">Hacer Admin</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$Usuarios item=usuario}
              <tr>
              <td>{$usuario['nombre']}</td>

                {if $usuario['admin']==0}
              <td>  No</td>
              {else}
              <td>Si</td>
              {/if}
              <td><a href="borrarUsuario/{$usuario['idusuario']}">Borrar</a></td>
              <td><a href="editarAdminUsuario/{$usuario['idusuario']}">Actualizar a Administrador</a></td>
            </tr>
            {/foreach}

            </tbody>
          </table>



        </div>
    </div>

</div>

{include file="footer.tpl"}
