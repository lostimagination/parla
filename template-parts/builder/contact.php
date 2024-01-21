<section class="contact">
	<div class="container">
		<div class="row background-row">
			<div class="col-md-7">
				<div class="contact-image">
					<?php if ( $image_section = get_sub_field( 'image_section' ) ) : ?>
						<?php echo wp_get_attachment_image( $image_section['id'], 'medium', false, array( 'class' => 'flex-image' ) ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-5 contact-info-col">
				<div class="contact-info">
					<?php $sup_title_section = get_sub_field( 'sup_title_section' ); ?>
					<?php if ( $sup_title_section ) : ?>
						<h5 class="section-sup-title"><?php echo $sup_title_section ?></h5>
					<?php endif; ?>
					<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>
					<?php $phone_company = get_sub_field( 'phone_company' ); ?>
					<div class="contact-info__wrapper">
						<?php if ( $phone_company ) : ?>
							<a class="phone-company" href="tel:<?php echo it_phone_cleaner( $phone_company ) ?>">
								<svg>
									<use xlink:href="#phone"></use>
								</svg>
								<?php echo esc_html( $phone_company ); ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="contact-info__wrapper">
						<?php $email_company = get_sub_field( 'email_company' ); ?>
						<?php if ( $email_company ) : ?>
							<a class="email-company" href="mailto:<?php echo $email_company; ?>">
								<svg >
									<use xlink:href="#email"></use>
								</svg>
								<?php echo esc_html( $email_company ); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
