<?php get_header(); ?>
<?php if(is_user_logged_in()) { ?>
		<section class="block fichas-container">
			<h1>Descarga las fichas técnicas de los productos Elgon</h1>
			<?php
				$cats = get_categories( array(
						'orderby' => 'count',
						'parent' => '2',
					));
				foreach ($cats as $cat)
				{
					?>
						<div class="list-ficha-tecnica">
							<h2><?php echo $cat->name; ?></h2>						
							<?php
								$sub_cats = get_categories(array(
										'parent' => $cat->term_id,
									));
								foreach($sub_cats as $sub_cat)
								{
									?>
										<h3><?php echo $sub_cat->name; ?></h3>
										<ul>
										<?php 
											$list_posts = new WP_Query(array(
													'cat' => $sub_cat->term_id,
													'posts_per_page' => '999',
												));
											if($list_posts->have_posts()) : while($list_posts->have_posts()) : $list_posts->the_post();
										?>
											<li>
												<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/fichas-tecnicas/<?php echo $post->post_name; ?>.pdf"><?php the_title(); ?></a>
											</li>
										<?php endwhile; endif; wp_reset_postdata(); ?>
										</ul>
									<?php
								}
							?>
						</div>
					<?php
				}
			?>
		</section>		
	<?php } else { ?>
		<?php echo do_shortcode('[custom-login-form]'); ?>
	<?php } ?>
<?php get_footer(); ?>