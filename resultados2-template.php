<?php
	/*
	Template name: Resultados de evaluación 2
	*/
	get_header();
?>
<?php if(is_user_logged_in()) { ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<section class="block fichas-container">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</section>			
			<ol class="listado-evaluacion block">
				<li class="pregunta-evaluacion">
					<?php
						$eval2quest1 = get_user_meta(get_current_user_id(),'_eval2quest1',true);
						if($eval2quest1 == 'a')
						{
							?>
								<h3 class="correcta">¿Quién es tu prospecto?</h3>
							<?php
						}
						else 
						{
							?>
								<h3 class="incorrecta">¿Quién es tu prospecto?</h3>
							<?php
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">					
					<?php
						$eval2quest2 = get_user_meta(get_current_user_id(),'_eval2quest2',true);
						if($eval2quest2  == 'b')
						{
							echo '
								<h3 class="correcta">¿Dónde lo vas a encontrar?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿Dónde lo vas a encontrar?</h3>
							';
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">					
					<?php						
						$eval2quest3 = get_user_meta(get_current_user_id(),'_eval2quest3',true);
						if($eval2quest3 == 'a')
						{
							echo '
								<h3 class="correcta">¿Qué tipos de prospectación puedes realizar?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿Qué tipos de prospectación puedes realizar?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php						
						$eval2quest4 = get_user_meta(get_current_user_id(),'_eval2quest4',true);
						if($eval2quest4 == 'a')
						{
							echo '
								<h3 class="correcta">¿Cuál es el máximo de tiempo que debe llevarte cerrar una venta?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿Cuál es el máximo de tiempo que debe llevarte cerrar una venta?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval2quest5 = get_user_meta(get_current_user_id(),'_eval2quest5',true);
						if($eval2quest5 == 'c')
						{
							echo '
								<h3 class="correcta">¿Cuál es el porcentaje de ganancia mínimo que me da ELGON?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿Cuál es el porcentaje de ganancia mínimo que me da ELGON?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval2quest6 = get_user_meta(get_current_user_id(),'_eval2quest6',true);
						if($eval2quest6 == 'b')
						{
							echo '
								<h3 class="correcta">¿Qué porcentaje de tú compra se te regresa en publicidad para estéticas?</h3>
							';
						}
						else {
							echo '
								<h3 class="incorrecta">¿Qué porcentaje de tú compra se te regresa en publicidad para estéticas?</h3>
							';
						}
					?>
				</li>				
			</ol>
		<?php endwhile; endif; ?>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>