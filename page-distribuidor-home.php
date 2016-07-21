<?php get_header(); ?>
<?php if(is_user_logged_in()) { ?>
		<section class="block cuenta-container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/hola-distribuidor.jpg">
			<div>
				<h1>Bienvenido</h1>
				<?php
					global $current_user;
					get_currentuserinfo();
					echo '<p class="user-name">' . $current_user->display_name . '</p>';
				?>
				<p>¿Qué deseas realizar hoy?</p>
			</div>
		</section>
		<ul class="realiza">
			<li>
				<a href="fichas-tecnicas">
					<img src="<?php echo get_template_directory_uri(); ?>/img/fichas-tecnicas.png">
					<h3>Descargar fichas de productos</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/img/plus.png">
				</a>
			</li>
			<li>
				<a href="pedido-en-linea">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pedido-en-linea.png">
					<h3>Solicita tu pedido en línea</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/img/plus.png">
				</a>
			</li>
			<li>
				<a href="evaluaciones">
					<img src="<?php echo get_template_directory_uri(); ?>/img/moodle.png">
					<h3>Elgon Moodle</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/img/plus.png">
				</a>
			</li>
		</ul>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>