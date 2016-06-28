<?php get_template_part('header'); ?>
<section class="producto-head block">
	<?php $cat = get_category(get_query_var('cat')); ?>
	<div id="category-<?php echo $cat->slug; ?>-desc" class="category-single-desc">
		<h2><?php echo $cat->name; ?></h2>
		<p><?php echo $cat->description; ?></p>
	</div>
	<div id="category-<?php echo $cat->slug; ?>-img" class="category-single-img">
		<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $cat->slug; ?>-slide.jpg">
	</div>
	<?php ?>
</section>
<section class="subproductos block">
	<ul>
		<?php
			$catparentID = get_query_var('cat');
			$cats = get_categories(array(
				'parent' => $catparentID,
				'hide_empty' => false,
			));
			foreach ($cats as $cat):
		?>
		<!-- subproducto -->
		<li class="subproducto-item">
			<a href="<?php bloginfo('url'); ?>/<?php echo $cat->slug; ?>">
				<img class="cat-id-img" src="<?php echo get_template_directory_uri(); ?>/img/cat/<?php echo $cat->slug; ?>-id.png">
			</a>
			<p class="subproductoname"><?php echo $cat->name; ?></p>
			<p><a class="irsubproducto" href="<?php bloginfo('url'); ?>/<?php echo $cat->slug; ?>">Ver productos</a></p>			
		</li>
		<!-- subproducto -->
		<?php endforeach; ?>
	</ul>
</section>
<?php get_template_part('footer'); ?>