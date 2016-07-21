<?php get_header(); ?>
<section class="contenedor-top">
    <div class="dist-top-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-top.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />
    </div>
    <div class="dist-top-right">
        <h2>CONVI&Eacute;RTETE<br>EN DISTRIBUIDOR<br>ELGON&reg;</h2>
        <div class="cont-top-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-top-muestrario.png" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />
            <div class="txt-cont-top-right">
                <h3>DESARROLLO DE TU PROPIO NEGOCIO</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-separador-top.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />
                <p>Elgon&reg; te acompa&ntilde;a a desarrollar tu propio negocio, ya que nuestro sistema de ventas te ofrece ventajas y facilidades dise&ntilde;adas para emprender una trayectoria de crecimiento personal, profesional y el prestigio y soporte de una gran marca de productos premium capilares.</p>
            </div>
        </div>
    </div>
</section>

<section class="contenedor-beneficios">
    <div class="dist-beneficios-left">
        <h2>BENEFICIOS<br>DE SER<br>DISTRIBUIDOR</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-requisitos-img.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />
    </div>
    <div class="dist-beneficios-right">
        <ul>
            <li><h3>CAPACITACI&Oacute;N T&Eacute;CNICA ESPECIALIZADA</h3><p>Elgon&reg; te ofrece capacitaci&oacute;n t&eacute;cnica actualizada de los productos y asesor&iacute;a comercial para que tu los desplaces. Adem&aacute;s capacitaci&oacute;n t&eacute;cnica a tus clientes</p></li>
            <li><h3>NUESTROS PRODUCTOS</h3><p>Te ofrecemos 6 l&iacute;neas de productos italianos de alta calidad y reconocidos internacionalmente</p></li>
            <li><h3>GARANT&Iacute;A DE SURTIDO</h3><p>Tenemos un 90% de efectividad en el surtido de productos y tiempo de entrega, esto hace de Elgon&reg; un lugar seguro para invertir.</p></li>
        </ul>
    </div>
</section>

<section class="contenedor-requisitos">
    <div class="dist-requisitos-left">
        <h2>REQUISITOS PARA SER UN DISTRIBUIDOR</h2>
        <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-requisitos-inversion-icono.png" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" /><p>Contar con una inversi&oacute;n inicial</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-requisitos-cartera-icono.png" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" /><p>Tener cartera de clientes</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-requisitos-experiencia-icono.png" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" /><p>Experiencia en ventas de 2 a&ntilde;os m&iacute;nimo</p></li>
        </ul>
    </div>
    <div class="dist-requisitos-right">
        <div class="dist-form">
            <p>Si cumples con los requisitos, te invitamos a llenar el siguiente formulario y nos pondremos en contacto contigo:</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-separador-form.jpg" alt="Elgon&reg; Colore &amp; Poesia | Líder italiano de productos para el cuidado capilar" />
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
            <form action="<?php echo get_template_directory_uri(); ?>/distribuidor-submit.php" method="POST">
                <input class="campos" type="text" name="nombre" required placeholder="NOMBRE COMPLETO" />
                <input class="campos" type="text" name="nombrenegocio" required placeholder="NOMBRE DE ESTABLECIMIENTO" />
                <input class="campos" type="text" name="correo" required placeholder="CORREO ELECTR&Oacute;NICO" />
                <input class="campos" type="text" name="telefono" required placeholder="TEL&Eacute;FONO CELULAR" />
                <input class="campos" type="text" name="ciudadestado" required placeholder="CIUDAD/ESTADO" />
                <input class="campos" type="text" name="queproductos" required placeholder="¿QU&Eacute; PRODUCTOS DISTRIBUYES ACTUALMENTE?" />
                <input class="campos" type="text" name="esteticasclientes" required placeholder="¿CUANTAS EST&Eacute;TICAS TIENES COMO CLIENTES ACTUALMENTE?" />
                <textarea class="campos" name="comentarios" required placeholder="COMENTARIOS"></textarea>
                <input class="campo-hid" type="text" name="url" required value="<?php echo get_permalink( $post->ID ); ?>" />
                <input class="btn-enviar" type="submit" name="submit" value="ENVIAR" />
            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>