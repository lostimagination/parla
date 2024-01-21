<?php $background_section = get_sub_field('background_section'); ?>
<section class="reviews" style="background-color: <?php echo $background_section ? $background_section: '#fff';  ?>">

<div class="container">
		<?php $sup_title_section = get_sub_field( 'sup_title_section' ); ?>
		<?php if ( $sup_title_section ) : ?>
			<h5 class="section-sup-title"><?php echo $sup_title_section ?></h5>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>
		<?php
		$review = get_sub_field( 'review' );
		if ( $review ): ?>
			<div class="row">
				<div class="swiper reviews-slider">
					<div class="swiper-wrapper">
						<?php foreach ( $review as $post ): ?>

							<div class="swiper-slide">
								<div class="personal-grow">
									<div class="personal-info">
										<?php setup_postdata( $post ); ?>
										<div
											class="personal-info__image"><?php the_post_thumbnail( 'medium', array( 'class' => 'flex-image' ) ); ?>
										</div>
										<div class="personal-position">
											<div class="quote-absolute">
												<svg>
													<use xlink:href="#quotes"></use>
												</svg>
											</div>
											<h4 class="personal-title"><?php the_title() ?></h4>
											<?php $position = get_field( 'position' ); ?>
											<?php if ( $position ) : ?>
											<h5 class="text-uppercase"><?php echo $position ?></h5>
										</div>
									</div>
									<?php endif; ?>
									<div class="personal-content"><?php the_content() ?></div>
									<?php $company = get_field( 'company' ); ?>
									<?php if ( $company ) : ?>
										<h4><?php echo $company ?></h4>
									<?php endif; ?>
									<?php if ( $company_logo = get_field( 'company_logo' ) ) : ?>
										<div class="company-logo">
											<?php echo wp_get_attachment_image( $company_logo['id'], 'thumbnail', false, array( 'class' => '' ) ); ?>
										</div>
									<?php endif; ?>
								</div>
							</div>

						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>
					</div>
					<div class="reviews-controls-wrapper">
						<div class="swiper-button-prev">
							<svg>
								<use xlink:href="#arrow-inner"></use>
							</svg>
						</div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-next">
							<svg>
								<use xlink:href="#arrow-inner-right"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

	</div>
</section>
