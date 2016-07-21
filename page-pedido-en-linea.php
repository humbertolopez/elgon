<?php get_header(); ?>
<?php if(is_user_logged_in()) { ?>
		<section class="block fichas-container">
			<div class="login-form-container pedido">
				<h1>Realiza tu pedido en línea</h1>
				<ul>
					<li>Descarga el <a href="<?php echo get_template_directory_uri(); ?>/docs/pedido-elgon-2016.xlsx" target="_blank">archivo de pedido Elgon 2016</a>. Puedes abrirlo en Microsoft Excel.</li>
					<li>Llénalo y guárdalo.</li>
					<li>Súbelo a través de este formulario.</li>
				</ul>
				<?php echo do_shortcode('[contact-form-7 id="519" title="Subir pedido"]'); ?>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/tu-pedido.jpg">
		</section>		
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>