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
					<p><?php echo $cat->description; ?></p>
				</div>
			</div>
			<!-- slide item -->
		<?php endforeach; ?>
	</section>
	<div id="lean-nav"></div>
	<section id="intermedio-index">
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
	</section>
<?php get_template_part('footer') ?>