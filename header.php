<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
			if(is_home()){ ?>
				<?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>
			<?php } elseif (is_page()) { ?>
				<?php the_title(); ?> — <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>
			<?php } else if (is_category()) { ?>
				<?php $cat = get_category(get_query_var('cat')); echo $cat->name; ?> — <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>
			<?php }
		?>
	</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
	<header>
		<!-- logo -->
		<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
		<!-- /logo -->
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
					<a href="distribuidores">Distribuidores</a>
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
	</header>
	<!-- head -->	