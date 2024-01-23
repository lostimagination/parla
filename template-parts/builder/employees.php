<?php
$our_employees = get_sub_field( 'our_employees' );
?>
<section class="employees">
	<div class="container">

		<?php if ( $our_employees ): ?>
			<div class="row">

				<?php foreach (
					$our_employees

					as $post
				): ?>
					<?php setup_postdata( $post ); ?>
					<?php
					$phone_member = get_field( 'phone_member' );
					$email_member = get_field( 'email_member' );
					$position     = get_field( 'position' );
					?>
					<div class="col-md-3">
						<div class="employee">
						<div class="image-employee">
							<?php the_post_thumbnail( 'medium', array( 'class' => 'flex-image' ) ); ?>
						</div>

						<div class="employee__info">

								<h5 class="employee-title"><?php the_title(); ?></h5>

								<?php if ( $position ) : ?>
									<h4 class="employee-position"><?php echo $position ?></h4>
								<?php endif; ?>

							<?php if ( $phone_member ) : ?>
								<a class="link-with-icon" href="tel:<?php echo it_phone_cleaner( $phone_member ) ?>">
									<svg class="link-with-icon__phone">
										<use xlink:href="#phone"></use>
									</svg>
									<?php echo esc_html( $phone_member ); ?></a>
							<?php endif; ?>

							<?php if ( $email_member ) : ?>
								<a class="link-with-icon" href="mailto:<?php echo $email_member; ?>">
									<svg class="link-with-icon__email">
										<use xlink:href="#email"></use>
									</svg>
									<?php echo esc_html( $email_member ); ?>
								</a>
							<?php endif; ?>
						</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>
