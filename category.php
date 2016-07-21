<?php get_template_part('header'); ?>
<?php
	//si la categoria es productos...
	if(is_category('productos')) {
		?>
			<h1>Algo</h1>
		<?php
	}	//si la categoria es children de productos	
	else if (is_category('haircare') or is_category('haircolor') or is_category('decolor') or is_category('man') or is_category('styling-finishing') or is_category('texturization') or is_category('colorcare')){
		$cat = get_category(get_query_var('cat'));
		?>
			<section class="producto-head">
				<div id="category-<?php echo $cat->slug; ?>-desc" class="category-single-desc">
					<h2><?php echo $cat->name; ?></h2>
					<p><?php echo $cat->description; ?></p>
				</div>
				<div id="category-<?php echo $cat->slug; ?>-img" class="category-single-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $cat->slug; ?>-slide.jpg">
				</div>
				<?php ?>
			</section>
			<section class="subproductos block">
				<ul>
					<?php
						$catparentID = get_query_var('cat');
						$cats = get_categories(array(
							'parent' => $catparentID,
							'hide_empty' => false,
						));
						foreach ($cats as $cat):
					?>
					<!-- subproducto -->
					<li class="subproducto-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat/<?php echo $cat->slug; ?>-id.png">
						<p class="subproductoname"><?php echo $cat->name; ?></p>
						<p><a class="irsubproducto" href="<?php bloginfo('url'); ?>/<?php echo $cat->slug; ?>">Ver productos</a></p>
					</li>
					<!-- subproducto -->
					<?php endforeach; ?>
				</ul>
			</section>
<!-- -->
		<?php
	} else if (cat_is_ancestor_of('4',$cat) or cat_is_ancestor_of('3',$cat) or cat_is_ancestor_of('6',$cat) or cat_is_ancestor_of('7',$cat) or cat_is_ancestor_of('5',$cat) or cat_is_ancestor_of('22',$cat) or cat_is_ancestor_of('9',$cat)) {
		?>
			<section class="breadcrumbs block">
				<?php		
					$breadcat = get_the_category();
					$breadcat_parent = $breadcat[0]->category_parent;
					$breadcat_parent_slug = get_category($breadcat_parent);
					if(is_single() || is_category()) :
				?>
					<p class="breadcrumb">
						<a href="<?php bloginfo('url'); ?>">Inicio</a>
						»
						<a href="<?php echo bloginfo('url'); ?>/<?php echo $breadcat_parent_slug->slug; ?>"><?php echo get_cat_name($breadcat_parent); ?></a>
						»
						<a href="<?php echo bloginfo('url'); ?>/<?php echo $breadcat[0]->slug; ?>"><?php echo $breadcat[0]->name; ?></a>
					</p>
				<?php endif; ?>
			</section>
			<section class="single-producto-head">
				<ul class="single-productos-list">
					<?php
						$cat_single = get_the_category();
						$cat_name = $cat_single[0]->slug;
						$query = new WP_Query(array(
							'category_name' => $cat_name,
							'orderby' => 'date',
							'order' => ASC,
							'posts_per_page' => -1,
						));
						if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile;  endif; wp_reset_postdata(); ?>
				</ul>
				<?php
					$cat_single = get_the_category();
					$cat_name = $cat_single[0]->slug;
					$query = new WP_Query(array(
						'category_name' => $cat_name,
						'posts_per_page' => 1,
					));
					if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
				?>
				
					<div class="imagen-producto">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="producto-info">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php
							$ventajas = get_post_meta($post->ID,'_ventajas',true);
							$presentaciones = get_post_meta($post->ID,'_presentaciones',true);
							if(!empty($ventajas))
							{
								echo '<h2>Ventajas</h2>'.$ventajas.'';
							}
							if(!empty($presentaciones))
							{
								echo '<h2>Presentaciones</h2><p>'.$presentaciones.'</p>';
							}
							if(is_user_logged_in())
							{
								echo '<p><a class="ficha-tecnica" target="_blank" href="'.get_template_directory_uri().'/fichas-tecnicas/'.$post->post_name.'.pdf">Ficha técnica</a></p>';
							}
						?>
					</div>
				
				<?php endwhile; endif; wp_reset_postdata(); ?>
					<div class="product-form">
					    <h3>Solicita más información sobre este producto:</h3>
					    <form action="<?php echo get_template_directory_uri(); ?>/submit.php" method="POST">
					        <input class="campos" type="text" name="nombre" required placeholder="NOMBRE COMPLETO" />
					        <input class="campos" type="text" name="correo" required placeholder="CORREO ELECTR&Oacute;NICO" />
					        <input class="campos" type="text" name="telefono" required placeholder="TEL&Eacute;FONO CELULAR" />
					        <input class="campo-hid" type="text" name="producto" value="<?php echo get_permalink( $post->ID ); ?>" />
					        <input class="btn-enviar" type="submit" name="submit" value="ENVIAR" />
					    </form>
					</div>
			</section>
		<?php
	}
?>
<?php get_template_part('footer'); ?>