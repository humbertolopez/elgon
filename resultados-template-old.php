<?php
	/*
	Template name: Resultados de evaluación
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
					<h3>¿De dónde es originario Elgon y en qué año nace?</h3>
					<?php
						$eval1quest1 = get_user_meta(get_current_user_id(),'_eval1quest1',true);
						if($eval1quest1 == 'b')
						{
							?>
								<p>Tu respuesta es correcta,</p>
								<p>b) Nace en Milán, en 1970</p>
							<?php
						}
						if($eval1quest1 == 'a' or $eval1quest1 == 'c')
						{
							if($eval1quest1 == 'a')
							{
								$respuesta = 'a) Nace en Madrid, en 1980';
							}
							if($eval1quest1 == 'c')
							{
								$respuesta = 'c) Nace en Milán, en 1973';
							}
							echo '
								<p>Tu respuesta fue: '.$respuesta.'</p>
								<p>La respuesta correcta es: b) Nace en Milán, en 1970</p>
							';
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Quién es Elgon?</h3>
					<?php
						$eval1quest2 = get_user_meta(get_current_user_id(),'_eval1quest2',true);
						if($eval1quest2  == 'a')
						{
							echo '
								<p>Tu respuesta es correcta</p>
								<p>a) Empresa dedicada a la venta de productos para el cuidado del cabello.</p>
							';
						}
						if($eval1quest2 == 'b' or $eval1quest2 == 'c')
						{
							if($eval1quest2 == 'b')
							{
								$respuesta = 'b) Línea de salones de belleza';
							}
							if($eval1quest2 == 'c')
							{
								$respuesta = 'c) Empresa dedicada a la venta de cosméticos';
							}
							echo '
							<p>Tu respuesta fue: '.$respuesta.'</p>
							<p>La respuesta correcta es: a) Empresa dedicada a la venta de productos para el cuidado del cabello.</p>
							';
						}						
					?>					
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Cuántos años tiene Elgon en México?</h3>
					<?php
						$respuestacorrecta = 'a) 12 años';
						$eval1quest3 = get_user_meta(get_current_user_id(),'_eval1quest3',true);
						if($eval1quest3 == 'a')
						{
							echo '
								<p>Tu respuesta es correcta</p>
								<p>'.$respuestacorrecta.'</p>
							';
						}
						if($eval1quest3 == 'b' or $eval1quest3 == 'c')
						{
							if($eval1quest3 == 'b')
							{
								$respuesta = 'b) 15 años';
							}
							if($eval1quest3 == 'c')
							{
								$respuesta = 'c) 8 años';
							}
							echo '
								<p>Tu respuesta fue: '.$respuesta.'</p>
								<p>La respuesta correcta es: '.$respuestacorrecta.'</p>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<h3>En resumen, ¿cuál es la misión y visión de Elgon?</h3>
					<?php
						$respuestacorrecta = 'b) Crear belleza y dar emociones';
						$eval1quest4 = get_user_meta(get_current_user_id(),'_eval1quest4',true);
						if($eval1quest4 == 'b')
						{
							echo '
								<p>Tu respuesta es correcta</p>
								<p>'.$respuestacorrecta.'</p>
							';
						}
						if($eval1quest4 == 'a' or $eval1quest4 == 'c')
						{
							if($eval1quest4 == 'a')
							{
								$respuesta = 'a) Proporcionar salud';
							}
							if($eval1quest4 == 'c')
							{
								$respuesta = 'c) Vender tintes';
							}
							echo '
								<p>Tu respuesta fue: '.$respuesta.'</p>
								<p>La respuesta correcta es: '.$respuestacorrecta.'</p>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿A qué va dirigida la visión de Elgon?</h3>
					<?php
						$respuestacorrecta = 'a) A redespertar la propia belleza de mujeres y hombre';
						$eval1quest5 = get_user_meta(get_current_user_id(),'_eval1quest5',true);
						if($eval1quest5 == 'a')
						{
							echo '
								<p>Tu respuesta es correcta</p>
								<p>'.$respuestacorrecta.'</p>
							';
						}
						if($eval1quest5 == 'b' or $eval1quest5 == 'c')
						{
							if($eval1quest5 == 'b')
							{
								$respuesta = 'b) A mejorar el ambiente laboral de las mujeres';
							}
							if($eval1quest5 == 'c')
							{
								$respuesta = 'c) A embellecer el mundo';
							}
							echo '
								<p>Tu respuesta fue: '.$respuesta.'</p>
								<p>La respuesta correcta es: '.$respuestacorrecta.'</p>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Cuáles son los valores de Elgon?</h3>
					<?php
						$respuestacorrecta = 'c) Eficiencia, delicadez y agrado';
						$eval1quest6 = get_user_meta(get_current_user_id(),'_eval1quest6',true);
						if($eval1quest6 == 'a')
						{
							echo '
								<p>Tu respuesta es correcta</p>
								<p>'.$respuestacorrecta.'</p>
							';
						}
						if($eval1quest6 == 'b' or $eval1quest6 == 'a')
						{
							if($eval1quest6 == 'b')
							{
								$respuesta = 'b) Fortaleza y amor';
							}
							if($eval1quest6 == 'a')
							{
								$respuesta = 'a) Responsabilidad y tolerancia';
							}
							echo '
								<p>Tu respuesta fue: '.$respuesta.'</p>
								<p>La respuesta correcta es: '.$respuestacorrecta.'</p>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<h3>Esta es una lista con ventajas competitivas, selecciona solo las que Elgon posea:</h3>
					<?php
						$respuestacorrecta = '
							<p>a) Humanidad</p>
							<p>b) Calidad</p>
							<p>c) Italianidad</p>
							<p>d) Integridad</p>
							';
						$eval1quest7 = get_user_meta(get_current_user_id(),'_eval1quest7',true);
						if(in_array(array('a','b','c','d'),$eval1quest7) && !in_array(array('e','f'),$eval1quest7))
						{
							echo '
								<p>Tu respuesta es correcta</p>
								'.$respuestacorrecta.'
							';
						}
						else
						{						
							echo '<p>Tu respuesta es:</p>';
							foreach ($eval1quest7 as $eachrespuesta)
							{
							echo '
								<p>'.$eachrespuesta.'</p>
							';
							}
							echo '<p>La respuesta correcta es: '.$respuestacorrecta.'</p>';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Elgon cuenta con alguna línea para hombres?</h3>
					<?php
						$respuestacorrecta = 'c) Eficiencia, delicadez y agrado';
						$eval1quest6 = get_user_meta(get_current_user_id(),'_eval1quest6',true);
						if($eval1quest6 == 'a')
						{
							echo '
								<p>Tu respuesta es correcta</p>
								<p>'.$respuestacorrecta.'</p>
							';
						}
						if($eval1quest6 == 'b' or $eval1quest6 == 'a')
						{
							if($eval1quest6 == 'b')
							{
								$respuesta = 'b) Fortaleza y amor';
							}
							if($eval1quest6 == 'a')
							{
								$respuesta = 'a) Responsabilidad y tolerancia';
							}
							echo '
								<p>Tu respuesta fue: '.$respuesta.'</p>
								<p>La respuesta correcta es: '.$respuestacorrecta.'</p>
							';
						}
					?>
					<p><input type="radio" name="eval1quest8" value="a"><label>Sí</label></p>
					<p><input type="radio" name="eval1quest8" value="b"><label>No</label></p>
				</li>
			</ol>
		<?php endwhile; endif; ?>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>