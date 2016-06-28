<?php get_template_part('header'); ?>
<section class="breadcrumbs block">	
	<?php if (function_exists('write_breadcrumb')) {
		echo '<p class="breadcrumb">';
		echo write_breadcrumb();
		echo '</p><!-- fin migajas de pan -->';
	} ?>
</section>
<section class="single-producto-head">
	<ul class="single-productos-list">
		<?php
			$cat = get_category(get_query_var('cat'));
			$color = new WP_Query(array(
				'category_name' => $cat->slug,
				'posts_per_page' => -1,
			));
			if($color->have_posts()) : while($color->have_posts()) : $color->the_post();
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
	</ul>
	<?php
		$cat = get_category(get_query_var('cat'));
		$color = new WP_Query(array(
			'category_name' => $cat->slug,
			'posts_per_page' => 1,
		));
		if($color->have_posts()) : while($color->have_posts()) : $color->the_post();
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
			echo $ventajas;
			echo '<p>'.$presentaciones.'</p>';
		?>
	</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
		<div class="product-form">
		    <h3>Solicita más información sobre este producto:</h3>
		    <form action="#" method="POST">
		        <input class="campos" type="text" name="nombre" required placeholder="NOMBRE COMPLETO" />
		        <input class="campos" type="text" name="correo" required placeholder="CORREO ELECTR&Oacute;NICO" />
		        <input class="campos" type="text" name="nombre" required placeholder="TEL&Eacute;FONO CELULAR" />
		        <input class="btn-enviar" type="submit" value="ENVIAR" />
		    </form>
		</div>
</section>
<?php get_template_part('footer'); ?>