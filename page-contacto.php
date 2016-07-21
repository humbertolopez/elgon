<?php get_header(); ?>
<section class="contenedor-contacto">
    <div class="contacto-img"><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-contacto-img-bg.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar"></div>
    <div class="contacto-txt">
        <div class="cont-form">
            <div class="img-sobre"><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-contacto-icono.png" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" ></div>
            <h3>SOLICITA M&Aacute;S INFORMACI&Oacute;N</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-separador-form.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />
            <p>Por favor llena los siguientes datos que a continuaci&oacute;n aparecen y nos pondremos en contacto tan pronto sea posible.</p>
            <?php
                $host = 'http://'.$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                if($host == get_permalink().'?error'){
                    ?>
                        <p class="msg-error">Revisa tus datos antes de enviarlos. Todos los campos son requeridos.</p>
                    <?php
                } else if ($host == get_permalink().'?success'){
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
<?php get_footer(); ?>