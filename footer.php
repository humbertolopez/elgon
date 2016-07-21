	<!-- foot -->
	<footer>		
		<!-- menu footer -->
		<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
		<!-- fin menu footer -->
		<a href="<?php bloginfo('url'); ?>/blog/"><p class="call-to-newsletter">Suscríbete a nuestro newsletter</p></a>
	</footer>
<?php wp_footer(); ?>
</body>
</html>