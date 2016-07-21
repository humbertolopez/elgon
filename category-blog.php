<?php get_template_part('header'); ?>

<section class="contenedor-desarrollo">

    <div class="desarrollo-der">

        <a href="https://www.youtube.com/watch?v=kgS5dytE6LI" data-lightbox-type="ajax"><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-desarrollo-top.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" /></a>

        <div class="desarrollo-blog">

            <div class="txt-blog">

                <h3>ELGON&reg; SOSTIENEN EL PROYECTO "D DE DESARROLLO. EL FUTURO DE SIERRA LEONA ES MUJER"</h3>

                <p>Un proyecto gestionado por COOPI, organizaci&oacute;n no gubernamental italiana, laica e independiente que lucha contra cualquier forma de pobreza. El proyecto "D de Desarrollo. El futuro de Sierra Leona es Mujer" se dirige a las mujeres de Sierra Leona para ayudarles a aumentar su conciencia acerca de sus propios derechos: Alfabetizaci&oacute;n, propiedad, prevenci&oacute;n y protecci&oacute;n contra la violencia.</p><br><p>Elgon&reg; trata de contribuir a un mundo mejor.</p>

            </div>

            <div class="titulo-blog">

                <h2>NUESTRO BLOG</h2>

            </div>

        </div>

    </div>

    <div class="desarrollo-contacto">

        <div class="desar-form">

            <div class="img-sobre"><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-contacto-icono.png" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" ></div>

            <h3>REG&Iacute;STRATE A NUESTRO NEWSLETTER</h3>

            <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-separador-form.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />

            <p>Recibe las &uacute;ltimas noticias sobre nuevos cursos, productos, tips de belleza, promociones y m&aacute;s.</p>

            <?php

                $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

                if($host == 'http://'.get_permalink.'?error'){

                    ?>

                        <p class="msg-error">Revisa tus datos antes de enviarlos. Todos los campos son requeridos.</p>

                    <?php

                } else if ($host == 'http://'.get_permalink.'?success'){

                    ?>

                        <p class="msg">¡Gracias por solicitar información!</p>

                    <?php

                }

            ?>

            <form action="<?php echo get_template_directory_uri(); ?>/blog-submit.php" method="POST">

                <input class="campos" type="text" name="nombre" required placeholder="NOMBRE COMPLETO" />

                <input class="campos" type="text" name="correo" required placeholder="CORREO ELECTR&Oacute;NICO" />

                <input class="campos" type="text" name="telefono" required placeholder="TEL&Eacute;FONO CELULAR" />

                <input class="campos" type="text" name="ciudadestado" required placeholder="CIUDAD/ESTADO" />

                <input class="campos" type="text" name="nombrenegocio" required placeholder="NOMBRE DEL NEGOCIO" />

                <input class="campo-hid" type="text" name="url" required value="<?php echo get_permalink( $post->ID ); ?>" />

                <textarea class="campos" name="comentarios" required placeholder="COMENTARIOS"></textarea>

                <input class="btn-enviar-cont" type="submit" name="submit" value="ENVIAR" />

            </form>

        </div>

    </div>

</section>

<section class="desarrollo-articulos">

	<ul>

	<?php

		$blog = new WP_Query(array(

			'category_name' => 'blog',

			'posts_per_page' => 6,

		));

		if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post();

	?>

	    <li class="cont-articulo">

	    	<?php the_post_thumbnail('blog'); ?>

	    	<h3><?php the_title(); ?></h3>

	        <?php the_excerpt(); ?>

	        <a class="leer-mas" href="<?php the_permalink(); ?>">LEER M&Aacute;S</a>

	    </li>

	<?php endwhile;  endif; wp_reset_postdata(); ?>

	</ul>

</section>

<?php get_template_part('footer'); ?>