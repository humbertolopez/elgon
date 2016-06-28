<?php get_template_part('header'); ?>
<section class="breadcrumbs block">
	Vacio
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
						echo $ventajas;
						echo '<p>'.$presentaciones.'</p>';
					?>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<!-- loop de producto single -->
		<?php
	}
	?>
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