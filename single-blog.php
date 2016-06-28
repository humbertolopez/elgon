<?php get_template_part('header'); ?>
<section class="single-blog-head">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="single-post">
			<?php the_post_thumbnail(); ?>		
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>			
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