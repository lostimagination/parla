<section class="blog-page">
	<div class="container">
		<?php $sup_title = get_sub_field( 'sup_title' ); ?>
		<?php if ( $sup_title ) : ?>
			<h5 class="section-sup-title"><?php echo $sup_title ?></h5>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>
		<?php $paragraph = get_sub_field( 'paragraph' ); ?>
		<?php if ( $paragraph ) : ?>
			<h4 class="paragraph"><?php echo $paragraph ?></h4>
		<?php endif; ?>

		<?php
		$paged = get_query_var( 'paged' ) ?? 1;
		$args = array(
			'post_type'      => 'post',
			'order'          => 'DESC',
			'orderby'        => 'date',
			'posts_per_page' => get_option( 'posts_per_page' ),
			'paged'          => $paged
		);
		?>

		<?php $the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- the loop -->
			<div class="row">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-md-6 col-lg-4">
						<div class="card-blog">
							<?php the_post_thumbnail( 'full', array( 'class' => 'flex-image' ) ); ?>
							<div class="card-blog__wrapper">
								<h3><?php the_title(); ?></h3>
								<a class="card-blog__link card-blog__link--border" href="<?php the_permalink(); ?>">
									<?php esc_html_e( 'weiterlesen', 'parla' ); ?>

									<svg>
										<use xlink:href="#arrow-inner-right"></use>
									</svg>

								</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
			</div>
			<?php get_template_part( 'template-parts/pagination', null, array( 'query' => $the_query ) ); ?>
		<?php endif; ?>
	</div>
</section>
