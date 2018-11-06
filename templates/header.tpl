<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{$Titulo}</title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <base href="http://{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">

  </head>
  <body>

  <div class="super_container">
    <header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">

					<div class="  col-md-12 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!--  My Account -->
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
                    {if $Logeado}
                    <li><a href='logout'><i class="glyphicon glyphicon-off"></i> Log out</a></li>
                    {else}
                    <li><a href='login'><i class="glyphicon glyphicon-off"></i> Log in</a></li>
                    <li><a href='signin'><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                    {/if}
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><img class="imagen" src="images/pecas.jpg" alt='logoPecas'/></a>

						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
                <li class="active"><a href='home'>Home</a></li> <!-- aca el ref a smarty-->
                <li><a href='home'>Categorias</a></li><!-- aca el ref a smarty-->
                <li><a href='productos'>Productos</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
							<ul class="navbar_user">
                {if $Logeado}
								<li><a href="logout"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                {else}
                <li><a href="login"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                {/if}

								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">


				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
            {if $Logeado}
            <li><a href="logout"><i class="fa fa-sign-in" aria-hidden="true"></i>Log Out</a></li>
            {else}
						<li><a href="login"><i class="fa fa-sign-in" aria-hidden="true"></i>Log In</a></li>
						<li><a href="signin"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
            {/if}

					</ul>
				</li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Categorias</a></li>
				<li><a href="#">Productos</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>



          </div>
