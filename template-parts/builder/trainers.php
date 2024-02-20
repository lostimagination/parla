<section class="trainers">
	<div class="container">
		<?php
		$position_category = get_sub_field( 'position_category' );
		$args              = array(
			'post_type'      => 'team',
			'posts_per_page' => - 1,
			'tax_query'      => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'position-category',
					'field'    => 'term_id',
					'terms'    => $position_category
				),
			)
		);
		?>

		<?php $the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
			<div class="row">
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-lg-4 col-md-6">
						<div class="trainer-card">
							<div class="trainer-card__top">
								<?php the_post_thumbnail( 'full', array( 'class' => 'flex-image' ) ); ?>
								<h4 class="title-card"><?php the_title(); ?></h4>
							</div>
							<div class="trainer-card__button">
								<div class="trainer-card__scroll">
									<h4 class="title-bolt"><?php the_title(); ?> </h4>
									<?php $position = get_field( 'position' ); ?>
									<?php if ( $position ) : ?>
										<h5 class="trainer-card__button-position"><?php echo $position ?></h5>
									<?php endif; ?>
									<p class="trainer-card__button-content"><?php the_content(); ?></p>

								</div>

							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>
