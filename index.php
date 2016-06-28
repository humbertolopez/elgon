<?php get_template_part('header') ?>
	<section id="home-slider" class="block">
		<?php
			$cats = get_categories(array(
				'parent' => 2,
				'hide_empty' => false,
			));
			foreach ($cats as $cat):
		?>
			<!-- slide item -->
			<div class="slide">
				<div class="img <?php echo $cat->slug; ?>-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $cat->slug; ?>-slide.jpg">
				</div>
				<div class="catdesc <?php echo $cat->slug; ?>-desc">
					<h3>Línea</h3>
					<h2><?php echo $cat->name; ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/encabezados/encabezado-<?php echo $cat->slug; ?>.png">
					<p><?php echo $cat->description; ?></p>
				</div>
			</div>
			<!-- slide item -->
		<?php endforeach; ?>
	</section>
	<div id="lean-nav"></div>
	<section id="intermedio-index" class="block">
		<div class="intermedio-index-content">
			<h4 class="destacados-title">Productos destacados</h4>
			<div id="left-destacados" class="nav-destacados"></div>
			<div id="destacados">
				<?php
					$destacados = new WP_Query(array(
						'category_name' => 'destacados',
						'posts_per_page' => -1,
					));
				if($destacados->have_posts()) : while($destacados->have_posts()) : $destacados->the_post(); ?>
				<?php if(has_post_thumbnail()) : ?>
					<div class="carrusel-item">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('carrusel'); ?>
						</a>
						<p>
							<a href="<?php the_permalink(); ?>" class="titulo-destacado"><?php the_title(); ?></a>
						</p>
						<a href="<?php the_permalink(); ?>" class="ir">Ver producto</a>
					</div>
				<?php endif; ?>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
			<div id="right-destacados" class="nav-destacados"></div>
			<div id="nav-dots-destacados"></div>
		</div>
		<div class="intermedio-index-content quieres-ser-distribuidor">
			<h2>¿Quieres ser <span>distribuidor?</span></h2>
			<img src="<?php echo get_template_directory_uri(); ?>/img/elgon-distribuidores-top-muestrario.png">
			<p><a href="<?php bloginfo('url'); ?>/distribuidores">Descubre más</a></p>
		</div>
	</section>
	<section class="index-final block">
		<div class="video">
			<div class="img-video">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index/video.jpg">
			</div>
			<h2>Color y poesía</h2>
		</div>
		<div class="video">
			<div class="img-video">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index/video_2.jpg">
			</div>
		</div>
		<div class="video">
			<h3>Ver videos</h3>
			<div class="img-video">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index/video_3.jpg">
			</div>
			<div  class="img-video">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index/video_4.jpg">
			</div>
		</div>
	</section>
<?php get_template_part('footer') ?>