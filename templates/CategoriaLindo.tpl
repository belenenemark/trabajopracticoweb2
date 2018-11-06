{include file="header.tpl"}
<!-- Slider -->

<div class="main_slider" style="background-image:url(images/banner_55.jpg)">
  <div class="container fill_height">
    <div class="row align-items-center fill_height">

    </div>
  </div>
</div>


          <h2><a href="CategoriaProductos/">Filtrar todos los items</a> </h2>




              {foreach from=$Categorias item=categoria}
              <div class="row">
              <div class=" col-md-offset-4 col-md-8">
					           <div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
						                 <div class="banner_category">
							                        <a href="CategoriaProductos/{$categoria['idcategoria']}">{$categoria['indumentaria']}</a>
						                </div>
              </div>

            {/foreach}

        </div>
      </div>



</div>

{include file="footer.tpl"}
