<?php get_template_part('header'); ?>
<section class="single-producto-head">
	<ul class="single-productos-list">
		<?php
			$cat = get_category(get_query_var('cat'));
			$color = new WP_Query(array(
				'category_name' => $cat->slug,
				'posts_per_page' => -1,
			));
			if($color->have_posts()) : while($color->have_posts()) : $color->the_post();
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;  endif; wp_reset_postdata(); ?>
	</ul>			
</section>
<?php get_template_part('footer'); ?>