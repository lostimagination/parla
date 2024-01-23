<?php $address = get_sub_field( 'address' );
$paragraph     = get_sub_field( 'paragraph' );
$telephone     = get_sub_field( 'telephone' );
$email         = get_sub_field( 'email' );
?>
<section class="company-data">
	<div class="container">
		<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>

		<?php if ( $paragraph ) : ?>
			<h4>
				<?php echo $paragraph ?>
			</h4>
		<?php endif; ?>
		<div class="all-data">
			<div class="row">
				<!--			--><?php //if($address) : ?>
				<!--			 <p>--><?php //echo $address ?><!--</p>-->
				<!--			--><?php //endif; ?>
				<div class="col-md-4 col-lg-3">
					<?php if ( $address ) : ?>
						<div class="link-with-icon">
							<svg class="link-with-icon__address">
								<use xlink:href="#local"></use>
							</svg>
							<?php echo $address ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 offset-lg-1">
					<?php if ( $telephone ) : ?>
						<a class="link-with-icon" href="tel:<?php echo it_phone_cleaner( $telephone ) ?>">
							<svg class="link-with-icon__phone">
								<use xlink:href="#phone"></use>
							</svg>
							<?php echo esc_html( $telephone ); ?>
						</a>
					<?php endif; ?>

					<?php if ( $email ) : ?>
						<a class="link-with-icon" href="mailto:<?php echo $email; ?>">
							<svg class="link-with-icon__phone">
								<use xlink:href="#email"></use>
							</svg>
							<?php echo esc_html( $email ); ?>
						</a>
					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<?php get_template_part( 'template-parts/socials' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
