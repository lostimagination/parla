<section class="reviews-list">
	<div class="container">

		<?php

		$reviews_list = get_sub_field( 'reviews_list' );

		if ( $reviews_list ): ?>

			<?php foreach ( $reviews_list as $post ): ?>
				<?php setup_postdata( $post ); ?>
				<div class="personal-wrapper">
					<div class="row">
						<div class="col-lg-2">
							<div class="personal-list-position">
								<div class="personal-info__image">
									<?php the_post_thumbnail( 'medium', array( 'class' => '' ) ); ?>
								</div>
								<div class="quote-absolute quote-right">
									<svg>
										<use xlink:href="#quotes"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="col-lg-10">
							<h4 class="personal-title"> <?php the_title(); ?> </h4>
							<?php $position = get_field( 'position' ); ?>
							<?php if ( $position ) : ?>
								<h5 class="text-uppercase"><?php echo $position ?></h5>
							<?php endif; ?>
							<?php the_content(); ?>
							<?php $company = get_field( 'company' ); ?>
							<?php if ( $company ) : ?>
								<p><?php echo $company ?></p>
							<?php endif; ?>
							<?php if ( $company_logo = get_field( 'company_logo' ) ) : ?>
								<div class="image-wrapper">
									<?php echo wp_get_attachment_image( $company_logo['id'], 'medium', false, array( 'class' => '' ) ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>
