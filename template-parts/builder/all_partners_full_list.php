<section class="all-partners-full">
	<div class="container">
		<div class="row">
			<?php if ( have_rows( 'partners_list' ) ) : ?>

				<?php
				while ( have_rows( 'partners_list' ) ) :
					the_row();
					$logo_partners  = get_sub_field( 'logo_partner' );
					$title_partner  = get_sub_field( 'title_partner' );
					$website        = get_sub_field( 'website' );
					$website_target = $website['target'] ? $website['target'] : '_self';
					?>

					<div class="col-md-6">
						<div class="partners-list-wrapper">
							<?php if ( $logo_partners ) : ?>
								<?php echo wp_get_attachment_image( $logo_partners['id'], 'medium', false, array( 'class' => 'logo-partners' ) ); ?>
							<?php endif; ?>

							<?php if ( $title_partner ) : ?>
								<h3 class="title-partner"><?php echo $title_partner ?></h3>
							<?php endif; ?>

							<?php if ( $website ) : ?>
								<a class="text-uppercase" target="<?php echo esc_attr( $website_target ); ?>"
								   href="<?php echo esc_url( $website['url'] ); ?>"><?php echo $website['title'] ?>
									<svg class="arrow-right-blue">
										<use xlink:href="#arrow-right-b"></use>
									</svg>
								</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div>
			<h4>Get Random Shot ^__^</h4>
			<div class="btn js-drink-button">Let's drink:</div>
			<div class="ba-random-result">Result:</div>
		</div>
	</div>
</section>

