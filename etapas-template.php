<?php
	/*
	Template name: Etapa evaluación
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
					<h3>¿De dónde es originario Elgon y en qué año nace?</h3>
					<p><input type="radio" name="eval1quest1" value="a"><label>Nace en Madrid, en 1980</label></p>
					<p><input type="radio" name="eval1quest1" value="b"><label>Nace en Milán, en 1970</label></p>
					<p><input type="radio" name="eval1quest1" value="c"><label>Nace en Milán, en 1973</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Quién es Elgon?</h3>
					<p><input type="radio" name="eval1quest2" value="a"><label>Empresa dedicada a la venta de productos para el cuidado del cabello</label></p>
					<p><input type="radio" name="eval1quest2" value="b"><label>Línea de salones de belleza</label></p>
					<p><input type="radio" name="eval1quest2" value="c"><label>Empresa dedicada a la venta de cosméticos</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Cuántos años tiene Elgon en México?</h3>
					<p><input type="radio" name="eval1quest3" value="a"><label>12 años</label></p>
					<p><input type="radio" name="eval1quest3" value="b"><label>15 años</label></p>
					<p><input type="radio" name="eval1quest3" value="c"><label>8 años</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>En resumen, ¿cuál es la misión y visión de Elgon?</h3>
					<p><input type="radio" name="eval1quest4" value="a"><label>Proporcionar salud</label></p>
					<p><input type="radio" name="eval1quest4" value="b"><label>Crear belleza y dar emociones</label></p>
					<p><input type="radio" name="eval1quest4" value="c"><label>Vender tintes</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿A qué va dirigida la visión de Elgon?</h3>
					<p><input type="radio" name="eval1quest5" value="a"><label>A redespertar la propia belleza de mujeres y hombre</label></p>
					<p><input type="radio" name="eval1quest5" value="b"><label>A mejorar el ambiente laboral de las mujeres</label></p>
					<p><input type="radio" name="eval1quest5" value="c"><label>A embellecer el mundo</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Cuáles son los valores de Elgon?</h3>
					<p><input type="radio" name="eval1quest6" value="a"><label>Responsabilidad y tolerancia</label></p>
					<p><input type="radio" name="eval1quest6" value="b"><label>Fortaleza y amor</label></p>
					<p><input type="radio" name="eval1quest6" value="c"><label>Eficiencia, delicadeza y agrado</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>Esta es una lista con ventajas competitivas, selecciona solo las que Elgon posea:</h3>
					<p><input type="checkbox" name="eval1quest7[]" value="a"><label>Humanidad</label></p>
					<p><input type="checkbox" name="eval1quest7[]" value="b"><label>Calidad</label></p>
					<p><input type="checkbox" name="eval1quest7[]" value="c"><label>Italianidad</label></p>
					<p><input type="checkbox" name="eval1quest7[]" value="d"><label>Integridad</label></p>
					<p><input type="checkbox" name="eval1quest7[]" value="e"><label>Reciclaje</label></p>
					<p><input type="checkbox" name="eval1quest7[]" value="f"><label>Tiempos de entrega</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Elgon cuenta con alguna línea para hombres?</h3>
					<p><input type="radio" name="eval1quest8" value="a"><label>Sí</label></p>
					<p><input type="radio" name="eval1quest8" value="b"><label>No</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>Esta línea de tratamientos es para el cuero cabelludo sensible, se hace con materiales naturales, sin conservantes. No contiene parabenos y sulfatos para no agredir el cuero cabelludo.</h3>
					<p><input type="radio" name="eval1quest9" value="a"><label>Sinsea</label></p>
					<p><input type="radio" name="eval1quest9" value="b"><label>Primaria</label></p>
					<p><input type="radio" name="eval1quest9" value="c"><label>Refibra</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>Línea que representa la atención de elgon hacia la moda, el estilo y las nuevas tendencias. Productos de diseño styling ideados para servicios artísticos, plató fotogràficos, y desfiles para personalizar y crear todo tipo de look.</h3>
					<p><input type="radio" name="eval1quest10" value="a"><label>Amplea</label></p>
					<p><input type="radio" name="eval1quest10" value="b"><label>Haircare</label></p>
					<p><input type="radio" name="eval1quest10" value="c"><label>Styling&finishing</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>Subcategoría de Haircare que maneja 3 productos, todos ellos con 10 propiedades benéficas</h3>
					<p><input type="radio" name="eval1quest11" value="a"><label>Sublimia</label></p>
					<p><input type="radio" name="eval1quest11" value="b"><label>Argán</label></p>
					<p><input type="radio" name="eval1quest11" value="c"><label>Sinsea</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>Elgon contribuye a crear un mundo mejor, ¿Cómo se llama la asociación a la que apoya?</h3>
					<p><input type="radio" name="eval1quest12" value="a"><label>UNICEF</label></p>
					<p><input type="radio" name="eval1quest12" value="b"><label>COOPI</label></p>
					<p><input type="radio" name="eval1quest12" value="c"><label>Red Nose</label></p>
				</li>
				<li class="pregunta-evaluacion">
					<h3>¿Qué causa es la que elgon apoya en esta asociación?</h3>
					<p><input type="radio" name="eval1quest13" value="a"><label>Apoyar a refugiados de países en guerra</label></p>
					<p><input type="radio" name="eval1quest13" value="b"><label>Combatir el hambre en países de sudamérica</label></p>
					<p><input type="radio" name="eval1quest13" value="c"><label>El futuro de Sierra Leona son las mujeres; sensibilización sobre los derechos fundamentales de las mujeres</label></p>
				</li>
			</ol>
			<section class="block fichas-container">
				<input type="hidden" name="<?php echo $post->post_name; ?>-nonce" value="<?php echo wp_create_nonce('submit-evaluacion-nonce') ?>">
				<input class="btn-enviar-eval" type="submit" name="submit-evaluacion" value="Envía tus respuestas y descubre tu resultado.">
			</section>			
		</form>
		<?php endwhile; endif; ?>
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>