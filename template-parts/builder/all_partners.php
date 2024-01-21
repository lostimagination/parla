<section class="partners">
	<?php if ( have_rows( 'all_partners' ) ) : ?>

		<div class="row">
			<div class="partners-wrapper">
				<div class="swiper slider-partners">
					<div class="swiper-wrapper">
						<?php while ( have_rows( 'all_partners' ) ) : the_row(); ?>

							<div class="swiper-slide">
								<?php if ( $image_partner = get_sub_field( 'image_partner' ) ) : ?>

									<?php echo wp_get_attachment_image( $image_partner['id'], 'medium', false, array( 'class' => '' ) ); ?>

								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>


				</div>
				<div class="swiper-button-next">
					<svg>
						<use xlink:href="#arrow-right"></use>
					</svg>
				</div>
				<div class="swiper-button-prev">
					<svg>
						<use xlink:href="#arrow-left"></use>
					</svg>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>
