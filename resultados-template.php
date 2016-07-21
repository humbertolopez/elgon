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
					<?php
						$eval1quest1 = get_user_meta(get_current_user_id(),'_eval1quest1',true);
						if($eval1quest1 == 'b')
						{
							?>
								<h3 class="correcta">¿De dónde es originario Elgon y en qué año nace?</h3>
							<?php
						}
						else 
						{
							?>
								<h3 class="incorrecta">¿De dónde es originario Elgon y en qué año nace?</h3>
							<?php
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">					
					<?php
						$eval1quest2 = get_user_meta(get_current_user_id(),'_eval1quest2',true);
						if($eval1quest2  == 'a')
						{
							echo '
								<h3 class="correcta">¿Quién es Elgon?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿Quién es Elgon?</h3>
							';
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">					
					<?php						
						$eval1quest3 = get_user_meta(get_current_user_id(),'_eval1quest3',true);
						if($eval1quest3 == 'a')
						{
							echo '
								<h3 class="correcta">¿Cuántos años tiene Elgon en México?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿Cuántos años tiene Elgon en México?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php						
						$eval1quest4 = get_user_meta(get_current_user_id(),'_eval1quest4',true);
						if($eval1quest4 == 'b')
						{
							echo '
								<h3 class="correcta">En resumen, ¿cuál es la misión y visión de Elgon?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">En resumen, ¿cuál es la misión y visión de Elgon?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval1quest5 = get_user_meta(get_current_user_id(),'_eval1quest5',true);
						if($eval1quest5 == 'a')
						{
							echo '
								<h3 class="correcta">¿A qué va dirigida la visión de Elgon?</h3>
							';
						}
						else
						{
							echo '
								<h3 class="incorrecta">¿A qué va dirigida la visión de Elgon?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval1quest6 = get_user_meta(get_current_user_id(),'_eval1quest6',true);
						if($eval1quest6 == 'c')
						{
							echo '
								<h3 class="correcta">¿Cuáles son los valores de Elgon?</h3>
							';
						}
						else {
							echo '
								<h3 class="incorrecta">¿Cuáles son los valores de Elgon?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">					
					<?php						
						$eval1quest7 = get_user_meta(get_current_user_id(),'_eval1quest7',false);
						if(in_array(array('a','b','c','d'),$eval1quest7) && !in_array(array('e','f'),$eval1quest7))
						{
							echo '
								<h3 class="correcta">Esta es una lista con ventajas competitivas, selecciona solo las que Elgon posea:</h3>
							';
						}
						else
						{						
							echo '
								<h3 class="incorrecta">Esta es una lista con ventajas competitivas, selecciona solo las que Elgon posea:</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">					
					<?php						
						$eval1quest8 = get_user_meta(get_current_user_id(),'_eval1quest8',true);
						if($eval1quest8 == 'a')
						{
							echo '
								<h3 class="correcta">¿Elgon cuenta con alguna línea para hombres?</h3>
							';
						}
						else 
						{
							echo '
								<h3 class="incorrecta">¿Elgon cuenta con alguna línea para hombres?</h3>
							';
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">					
					<?php						
						$eval1quest9 = get_user_meta(get_current_user_id(),'_eval1quest9',true);
						if($eval1quest9 == 'a')
						{
							echo '
								<h3 class="correcta">Esta línea de tratamientos es para el cuero cabelludo sensible, se hace con materiales naturales, sin conservantes. No contiene parabenos y sulfatos para no agredir el cuero cabelludo.</h3>
							';
						}
						else 
						{
							echo '
								<h3 class="incorrecta">Esta línea de tratamientos es para el cuero cabelludo sensible, se hace con materiales naturales, sin conservantes. No contiene parabenos y sulfatos para no agredir el cuero cabelludo.</h3>
							';
						}
					?>					
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval1quest10 = get_user_meta(get_current_user_id(),'_eval1quest10',true);
						if($eval1quest10 == 'c')
						{
							echo '
								<h3 class="correcta">Línea que representa la atención de elgon hacia la moda, el estilo y las nuevas tendencias. Productos de diseño styling ideados para servicios artísticos, plató fotogràficos, y desfiles para personalizar y crear todo tipo de look.</h3>
							';
						}
						else 
						{
							echo '
								<h3 class="incorrecta">Línea que representa la atención de elgon hacia la moda, el estilo y las nuevas tendencias. Productos de diseño styling ideados para servicios artísticos, plató fotogràficos, y desfiles para personalizar y crear todo tipo de look.</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval1quest11 = get_user_meta(get_current_user_id(),'_eval1quest11',true);
						if($eval1quest11 == 'a')
						{
							echo '
								<h3 class="correcta">Subcategoría de Haircare que maneja 3 productos, todos ellos con 10 propiedades benéficas</h3>
							';
						}
						else 
						{
							echo '
								<h3 class="incorrecta">Subcategoría de Haircare que maneja 3 productos, todos ellos con 10 propiedades benéficas</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval1quest12 = get_user_meta(get_current_user_id(),'_eval1quest12',true);
						if($eval1quest12 == 'b')
						{
							echo '
								<h3 class="correcta">Elgon contribuye a crear un mundo mejor, ¿Cómo se llama la asociación a la que apoya?</h3>
							';
						}
						else 
						{
							echo '
								<h3 class="incorrecta">Elgon contribuye a crear un mundo mejor, ¿Cómo se llama la asociación a la que apoya?</h3>
							';
						}
					?>
				</li>
				<li class="pregunta-evaluacion">
					<?php
						$eval1quest13 = get_user_meta(get_current_user_id(),'_eval1quest13',true);
						if($eval1quest13 == 'c')
						{
							echo '
								<h3 class="correcta">¿Qué causa es la que elgon apoya en esta asociación?</h3>
							';
						}
						else 
						{
							echo '
								<h3 class="incorrecta">¿Qué causa es la que elgon apoya en esta asociación?</h3>
							';
						}
					?>
				</li>
				<li>
					<?php
						$resultadoeval1 = get_user_meta(get_current_user_id(),'_resultadoeval1',true);
						$conteo = count($resultadoeval1);
						echo $conteo;
					?>
				</li>
			</ol>
		<?php endwhile; endif; ?>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>