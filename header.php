<!DOCTYPE html>

<html>

<head>

	<?php wp_head(); ?>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>

		<?php

			if(is_home()){ ?>

				<?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>

			<?php } elseif (is_page()) { ?>

				<?php the_title(); ?> — <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>

			<?php } else if (is_category()) { ?>

				<?php $cat = get_category(get_query_var('cat')); echo $cat->name; ?> — <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>

			<?php } else if (is_single()) { ?>

				<?php the_title(); ?> — <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>

			<?php } 

		?>

	</title>

	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="shortcut icon" href="http://imagencomunicacionimpresa.net/elgon/wp-content/themes/elgon/favicon.png" type="image/x-icon"/>

</head>

<body>

	<?php

		if(is_home())

		{

			?>

				<img class="rehilete" src="<?php echo get_template_directory_uri(); ?>/img/mapirosa.png">

				<img class="mapirosa-ch" src="<?php echo get_template_directory_uri(); ?>/img/mapirosa-ch.png">

			<?php

		}

		if(is_category('haircare') or is_category('haircolor') or is_category('decolor') or is_category('man') or is_category('styling-finishing') or is_category('texturization') or is_category('colorcare'))

		{

			?>

				<img class="mapirosa-cat" src="<?php echo get_template_directory_uri(); ?>/img/mapirosa.png">

			<?php

		}

		if(is_page('encuentra-tu-distribuidor'))

		{

			?>

				<img class="mapirosa-dist" src="<?php echo get_template_directory_uri(); ?>/img/mapirosa.png">

			<?php

		}

		if(is_page('historia'))

		{

			?>

				<img class="mapirosa-historia" src="<?php echo get_template_directory_uri(); ?>/img/mapirosa.png">				

			<?php	

		}

	?>	

	<div id="menu-resp">

		<ul class="menu-resp-list">

		<a class="cerrar" href="#">X</a>

			<li><a href="<?php bloginfo('url'); ?>">Inicio</a></li>

			<li>

				<a href="#">Productos</a>

				<div class="submenu-resp">

					<ul>

						<?php

							$cats = get_categories(array(

								'parent' => 2,

								'hide_empty' => false,

								'orderby' => 'num_posts',

								'order' => ASC,

							));

							foreach ($cats as $cat):

						?>

							<!-- cat item -->

							<li>

								<a href="<?php bloginfo('url'); ?>/<?php echo $cat->slug; ?>">

									<?php echo $cat->name; ?>									

								</a>

							</li>

							<!-- fin cat item -->

						<?php endforeach; ?>

					</ul>

				</div>

			</li>

			<li>

				<a href="<?php bloginfo('url'); ?>/historia">Historia</a>

			</li>

			<li>

				<a href="<?php bloginfo('url'); ?>/blog">Mundo Elgon</a>

			</li>

			<li>

				<a href="#">Distribuidores</a>

				<div class="dist-submenu-resp">

					<ul>

						<li>

							<a href="<?php bloginfo('url'); ?>/encuentra-tu-distribuidor">

								Encuentra tu distribuidor.

							</a>

						</li>

						<li>

							<a href="<?php bloginfo('url'); ?>/distribuidores">

								¿Quieres ser distribuidor?

							</a>

						</li>

					</ul>

				</div>

			</li>

			<li>

				<a href="<?php bloginfo('url'); ?>/contacto">Contacto</a>

			</li>

		</ul>

	</div>

	<header>

		<!-- logo -->

		<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo-elgon"></a>

		<!-- /logo -->

		<!-- menu-icon -->

		<a href="#menu-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" class="menu-icon"></a>

		<!-- /menu-icon -->

		<!-- menu -->

		<div class="menu-principal-elgon-container">

			<ul id="menu-principal-elgon" class="menu">

				<li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5">

					<a href="<?php bloginfo('url'); ?>">Inicio</a>

				</li>

				<li id="menu-item-7" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7">

					<a href="#">Productos</a>

					<div class="submenu">

						<ul id="products-submenu" class="block">

							<?php

								$cats = get_categories(array(

									'parent' => 2,

									'hide_empty' => false,

									'orderby' => 'num_posts',

									'order' => ASC,

								));

								foreach ($cats as $cat):

							?>

								<!-- cat item -->

								<li>

									<a href="<?php bloginfo('url'); ?>/<?php echo $cat->slug; ?>">

										<img src="<?php echo get_template_directory_uri(); ?>/img/submenu/<?php echo $cat->slug; ?>.jpg">									

										<h4><?php echo $cat->name; ?></h4>

										<p>Ver Productos</p>

									</a>

								</li>

								<!-- fin cat item -->

							<?php endforeach; ?>

						</ul>

					</div>

				</li>

				<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">

					<a href="<?php bloginfo('url'); ?>/historia">Historia</a>

				</li>

				<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">

					<a href="<?php bloginfo('url'); ?>/blog">Mundo Elgon</a>

				</li>

				<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10">

					<a href="#">Distribuidores</a>

					<div class="dist-submenu">

						<ul id="dist-submenu-list" class="block">

							<li>

								<a href="<?php bloginfo('url'); ?>/encuentra-tu-distribuidor">

									<img src="<?php echo get_template_directory_uri(); ?>/img/submenu/encuentra.png">

								</a>

							</li>

							<li>

								<a href="<?php bloginfo('url'); ?>/distribuidores">

									<img src="<?php echo get_template_directory_uri(); ?>/img/submenu/quiero-ser.png">

								</a>

							</li>

						</ul>

					</div>

				</li>

				<!-- <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12">

					<a href="<?php bloginfo('url'); ?>/encuentra-tu-salon">Encuentra tu salón</a>

				</li> -->

				<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11">

					<a href="<?php bloginfo('url'); ?>/contacto">Contacto</a>

				</li>

			</ul>

		</div>

		<!-- fin menu -->

		<!-- info -->

		<div class="rrhh">			

			<p><ul>
				<li><?php if(!is_user_logged_in()) { ?><a class="session" href="<?php bloginfo('url'); ?>/iniciar-sesion">Iniciar sesión</a><?php } else { ?>Hola, <?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?> (<a href="<?php echo wp_logout_url( home_url() ); ?>" class="close-session">¿Cerrar sesión?</a>)</li>
				<li><a class="session" href="<?php bloginfo('url'); ?>/distribuidor-home">Tu cuenta</a><?php } ?></li>
				<li>Tel. (33) 3854.0556 / (33) 3854.3000</li>
				<li><a target="_blank" href="https://www.facebook.com/elgonmexico/?fref=ts"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"></a> <a target="_blank" href="https://www.instagram.com/elgonmexico/"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png"></a></li>
			</ul></p>

		</div>

		<!-- fin info -->

	</header>

	<!-- head -->