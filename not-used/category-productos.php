<?php get_template_part('header'); ?>
<section class="producto-head">
	<?php
		$cat = get_category(get_query_var('cat'));
		if(is_category('haircolor','decolor','haircare','man','styling-finishing'))
		{			
			?>
			<div id="category-<?php echo $cat->slug; ?>-desc">
				<?php echo $cat->name; ?>
				<?php echo $cat->description; ?>
			</div>
			<?php
		}
		if(is_category('color'))
		{
			?>
			<ul>
				<?php
					$color = new WP_Query(array(
						'category_name' => 'color',
						'posts_per_page' => -1,
					));
					if($color->have_posts()) : while($color->have_posts()) : $color->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile;  endif; wp_reset_postdata(); ?>
			</ul>
			<?php
		}
	?>
</section>
<?php get_template_part('footer'); ?>