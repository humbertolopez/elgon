<?php get_header(); ?>
<section class="contenedor-distribuidores">

    <div class="distribuidores-head">
        <div class="distribuidores-head-content">
            <h1>¿Eres estilista o barbero profesional?</h1>
            <h2>Ofrece a tus clientes productos profesionales</h2>
            <p>Elgon México, cuenta con más de  30  distribuidores en toda la República Mexicana, ¡Conoce nuestras 6 líneas de productos: haircare, haircolor, decolore, styling&amp;finish, texturization y man, reconocidos internacionalmente por su calidad de origen italiano.</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/encuentra-tu-distribuidor-header.jpg">
    </div>

    <div class="form-dist-head">
        
        <div class="desar-form">
            <h3>Encuentra a tu distribuidor</h3>            
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

<section class="contenedor-distribuidores mapa-resp">
    <img class="mapa-dist" src="<?php echo get_template_directory_uri(); ?>/img/mexico.png">
    <div class="mapa-desc">
        <h1>Más de 30 distribuidores en México</h1>
        <p class="mapa-lista">Estados donde está presente elgon: Jalisco, Sinaloa, Yucatán, Veracruz, Chiapas, Oaxaca, Michoacán, Tamaulipas, Puebla, Tabasco, Quintana Roo, Colima, Aguascalientes, Campeche, San Luis Potosí, Zacatecas, Guerrero, Chihuahua.</p>
    </div>
</section>
<?php get_footer(); ?>