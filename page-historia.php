<?php get_header(); ?>
<section class="historia-main">
	<div class="historia-elgon block">
		<?php
			$historiamain = new WP_Query(array(
				'page_id' => '67',
			));
			if($historiamain->have_posts()) : while($historiamain->have_posts()) : $historiamain->the_post();
		?>
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php $llamado = get_post_meta(get_the_ID(),'_ventajas', true); echo $llamado; ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</section>
<section class="historia-second">
	<div class="historia-mexico block">
		<?php
			$historiamexico = new WP_Query(array(
				'page_id' => '72',
			));
			if($historiamexico->have_posts()) : while($historiamexico->have_posts()) : $historiamexico->the_post();
		?>
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php $llamado = get_post_meta(get_the_ID(),'_ventajas', true); echo $llamado; ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="historia-grita block">
		<?php
			$mundogrita = new WP_Query(array(
				'page_id' => '76',
			));
			if($mundogrita->have_posts()) : while($mundogrita->have_posts()) : $mundogrita->the_post();
		?>
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</section>
<section class="historia-third">
	<?php
		$valores = new WP_Query(array(
			'page_id' => '78',
		));
		if($valores->have_posts()) : while($valores->have_posts()) : $valores->the_post();
	?>
	<?php the_title(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>
<section class="historia-fourth">
	<div class="filosofia">
		<?php
			$filosofia = new WP_Query(array(
				'page_id' => '80',
			));
			if($filosofia->have_posts()) : while($filosofia->have_posts()) : $filosofia->the_post();
		?>
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</section>
<?php get_footer(); ?>