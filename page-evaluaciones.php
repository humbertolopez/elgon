<?php get_header(); ?>
<?php if(is_user_logged_in()) { ?>
		<section class="block fichas-container">
			<h1>Evaluaciones para distribuidores Elgon</h1>
			<p>Aquí va un mensaje para el distribuidor.</p>
		</section>
		<ul class="listado-etapas block">
			<li class="etapa-active">
				<h3><a href="<?php echo home_url().'/distribuidor-home/evaluaciones/evaluacion-elgon-etapa-1/'; ?>">Etapa 1</a></h3>
				<p>Evaluación sobre: Conocimiento de marca y de producto, tips de venta.</p>
				<?php
					$resultadoeval1 = get_user_meta(get_current_user_id(),'_resultadoeval1',true);
					$conteo = count($resultadoeval1);
					$horario = get_user_meta(get_current_user_id(),'_horarioeval1',true);
					if($conteo != '' && $horario != '')
					{
						if($conteo > 8)
						{
							echo '<p class="correcta"><strong>Resultado de tu evaluación: '.$conteo.' / 13</strong></p>';
						}
						else
						{
							echo '<p class="incorrecta"><strong>Resultado de tu evaluación: '.$conteo.' / 13</strong></p>';
						}
						echo '
							<p>Fecha y horario de tu evaluación: <strong>'.$horario.'</strong><p>
						';
					}
					else {
						echo '<p>Aún no has tomado esta evaluación</p>';
					}					
				?>
			</li>
			<li class="etapa-unactive">
				<h3><a href="<?php echo home_url().'/distribuidor-home/evaluaciones/evaluacion-elgon-etapa-2/'; ?>">Etapa 2</a></h3>
				<p>Evaluación sobre: Prospectos.</p>
				<?php
					$resultadoeval2 = get_user_meta(get_current_user_id(),'_resultadoeval2',true);
					$conteo = count($resultadoeval2);
					$horario = get_user_meta(get_current_user_id(),'_horarioeval2',true);
					if($conteo != '' && $horario != '')
					{
						if($conteo > 5)
						{
							echo '<p class="correcta"><strong>Resultado de tu evaluación: '.$conteo.' / 6</strong></p>';
						}
						else
						{
							echo '<p class="incorrecta"><strong>Resultado de tu evaluación: '.$conteo.' / 6</strong></p>';
						}
						echo '
							<p>Fecha y horario de tu evaluación: <strong>'.$horario.'</strong><p>
						';
					}
					else {
						echo '<p>Aún no has tomado esta evaluación</p>';
					}					
				?>
			</li>
			<li class="etapa-unactive">
				<h3>Etapa 3</h3>
				<p>Evaluación sobre: Por definir.</p>
			</li>
			<li class="etapa-unactive">
				<h3>Etapa 4</h3>
				<p>Evaluación sobre: Por definir.</p>
			</li>
		</ul>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>