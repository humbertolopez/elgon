<?php get_header(); ?>
<section class="historia-main">
		<?php
			$historiamain = new WP_Query(array(
				'page_id' => '67',
			));
			if($historiamain->have_posts()) : while($historiamain->have_posts()) : $historiamain->the_post();
		?>
		<div class="historia-img">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="historia-elgon">
			<h2><?php the_title(); ?></h2>
			<h3><?php $llamado = get_post_meta(get_the_ID(),'_ventajas', true); echo $llamado; ?></h3>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>	
</section>
<section class="historia-second">
	<div class="historia-mexico">
		<?php
			$historiamexico = new WP_Query(array(
				'page_id' => '72',
			));
			if($historiamexico->have_posts()) : while($historiamexico->have_posts()) : $historiamexico->the_post();
		?>		
		<?php the_content(); ?>
		<h2 class="llamadopink pinkbracket"><?php $llamado = get_post_meta(get_the_ID(),'_ventajas', true); echo $llamado; ?></h2>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="historia-grita">
		<?php
			$mundogrita = new WP_Query(array(
				'page_id' => '76',
			));
			if($mundogrita->have_posts()) : while($mundogrita->have_posts()) : $mundogrita->the_post();
		?>
		<div class="grita-head">
			<?php the_post_thumbnail(); ?>
			<h2 class="llamadopink"><?php the_title(); ?></h2>
		</div>
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
		<?php the_post_thumbnail(); ?>
		<div class="historia-valores">
			<h2><?php the_title(); ?></h2>
			<div class="valores-block">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
</section>
<section class="historia-fourth">
	<?php
		$filosofia = new WP_Query(array(
			'page_id' => '80',
		));
		if($filosofia->have_posts()) : while($filosofia->have_posts()) : $filosofia->the_post();
	?>
	<h3 class="titular-filosofia"><?php the_title(); ?></h3>
	<div class="filosofia">
		<?php the_content(); ?>
	</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>