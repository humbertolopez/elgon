<?php
	/*
	Template name: Etapa 2 evaluación
	*/
	get_header();
?>
<?php if(is_user_logged_in()) { ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="block fichas-container">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</section>
		<form method="POST" action="" name="<?php echo $post->post_name; ?>">
			<ol class="listado-evaluacion block">
				<li class="pregunta-evaluacion">
					<h3>¿Quién es tu prospecto?</h3>
					<p><input type="radio" name="eval2quest1" value="a"><label>Cualquier estética o salón de belleza con la capacidad de comprar constantemente productos ELGON</label></p>
					<p><input type="radio" name="eval2quest1" value="b"><label>Grandes supermercados</label></p>
					<p><input type="radio" name="eval2quest1" value="c"><label>Amas de casa que quieran iniciar un negocio</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Dónde lo vas a encontrar?</h3>
					<p><input type="radio" name="eval2quest2" value="a"><label>Por internet, en cualquier parte del país</label></p>
					<p><input type="radio" name="eval2quest2" value="b"><label>En mi ciudad o estado, dependiendo mi alcance, desde centros comerciales hasta negocios en calles en zonas populares</label></p>
					<p><input type="radio" name="eval2quest2" value="c"><label>En otros paises</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Qué tipos de prospectación puedes realizar?</h3>
					<p><input type="radio" name="eval2quest3" value="a"><label>Prospección mediante trabajo de campo o cambaceo</label></p>
					<p><input type="radio" name="eval2quest3" value="b"><label>Telemarketing</label></p>
					<p><input type="radio" name="eval2quest3" value="c"><label>Por promociones</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Cuál es el máximo de tiempo que debe llevarte cerrar una venta?</h3>
					<p><input type="radio" name="eval2quest4" value="a"><label>Una semana</label></p>
					<p><input type="radio" name="eval2quest4" value="b"><label>Un mes</label></p>
					<p><input type="radio" name="eval2quest4" value="c"><label>3 meses</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Cuál es el porcentaje de ganancia mínimo que me da ELGON?</h3>
					<p><input type="radio" name="eval2quest5" value="a"><label>25% en todos los productos</label></p>
					<p><input type="radio" name="eval2quest5" value="b"><label>De 20% a 28% dependiendo del producto</label></p>
					<p><input type="radio" name="eval2quest5" value="c"><label>De 33% a 41% dependiendo del producto</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Qué porcentaje de tú compra se te regresa en publicidad para estéticas?</h3>
					<p><input type="radio" name="eval2quest6" value="a"><label>3%</label></p>
					<p><input type="radio" name="eval2quest6" value="b"><label>5%</label></p>
					<p><input type="radio" name="eval2quest6" value="c"><label>7%</label></p>
				</li>				
			</ol>
			<section class="block fichas-container">
				<input type="hidden" name="<?php echo $post->post_name; ?>-nonce" value="<?php echo wp_create_nonce('submit-evaluacion2-nonce') ?>">
				<input class="btn-enviar-eval" type="submit" name="submit-evaluacion2" value="Envía tus respuestas y descubre tu resultado.">
			</section>
		</form>
		<?php endwhile; endif; ?>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>