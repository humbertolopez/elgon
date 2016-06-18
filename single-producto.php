<?php get_template_part('header'); ?>
<section class="single-producto-head">
	<ul class="single-productos-list">
		<?php
			$cat = get_category(get_query_var('cat'));
			$color = new WP_Query(array(
				'child_of' => $cat->slug,
				'posts_per_page' => -1,
			));
			if($color->have_posts()) : while($color->have_posts()) : $color->the_post();
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
	</ul>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="imagen-producto">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="producto-info">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php
				$ventajas = get_post_meta($post->ID,'_ventajas',true);
				$presentaciones = get_post_meta($post->ID,'_presentaciones',true);			
				echo $ventajas;
				echo '<p>'.$presentaciones.'</p>';
			?>
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>
<?php get_template_part('footer'); ?>