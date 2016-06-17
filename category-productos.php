<?php get_template_part('header'); ?>
<section class="producto-head">
	<?php $cat = get_category(get_query_var('cat')); ?>
	<div id="category-<?php echo $cat->slug; ?>-desc">
		<?php echo $cat->name; ?>
		<?php echo $cat->description; ?>
	</div>
	 <?php ?>
</section>
<?php get_template_part('footer'); ?>