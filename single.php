<?php get_template_part('header'); ?>
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
	<?php if(in_category('blog')){
		?>
			<!-- single post loop -->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="single-post">
					<?php the_post_thumbnail(); ?>		
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>			
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<!-- single post loop -->
		<?php
	} else {
		?>
			<!-- lista de productos -->
			<ul class="single-productos-list">
				<?php
					$cat = get_the_category();
					$cat_name = $cat[0]->slug;
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
			<!-- fin lista de productos -->
			<!-- loop de producto single -->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
			<!-- loop de producto single -->
		<?php
	}
	?>
		<div class="product-form">
		    <h3>Solicita más información sobre este producto:</h3>
		    <?php
		        $host = 'http://'.$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		        if($host == get_permalink().'?error'){
		            ?>
		                <p class="msg-error">Revisa tus datos antes de enviarlos. Todos los campos son requeridos.</p>
		            <?php
		        } else if ($host == get_permalink().'?success'){
		            ?>
		                <p class="msg">¡Gracias por solicitar información!</p>
		            <?php
		        }
		    ?>
		    <form action="<?php echo get_template_directory_uri(); ?>/submit.php" method="POST">
		        <input class="campos" type="text" name="nombre" required placeholder="NOMBRE COMPLETO" />
		        <input class="campos" type="text" name="correo" required placeholder="CORREO ELECTR&Oacute;NICO" />
		        <input class="campos" type="text" name="telefono" required placeholder="TEL&Eacute;FONO CELULAR" />
		        <input class="campo-hid" type="text" name="producto" required value="<?php echo get_permalink( $post->ID ); ?>" />
		        <input class="btn-enviar" type="submit" name="submit" value="ENVIAR" />
		    </form>
		</div>
</section>
<?php get_template_part('footer'); ?>