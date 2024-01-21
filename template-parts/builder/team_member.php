<?php
$member   = get_sub_field( 'post_member' );
$title    = get_the_title( $member );
$position = get_field( 'position', $member );
$phone    = get_field( 'phone_member', $member );
$email    = get_field( 'email_member', $member );
?>
<section class="team-member">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php echo get_the_post_thumbnail( $member, 'medium', array( 'class' => '' ) ); ?>
			</div>
			<div class="col-md-8">
				<?php $label_card = get_sub_field( 'label_card' ); ?>
				<?php if ( $label_card ) : ?>
					<h5 class="section-sup-title"><?php echo $label_card ?></h5>
				<?php endif; ?>
				<?php $title_card = get_sub_field( 'title_card' ); ?>
				<?php if ( $title_card ) : ?>
					<h2 class="title-margin"><?php echo $title_card ?></h2>
				<?php endif; ?>

				<?php if ( $title ) : ?>
					<h4 class="title-member"><?php echo $title; ?></h4>
				<?php endif; ?>

				<?php if ( $position ) : ?>
					<h5 class="team-member__subtitle"><?php echo $position ?></h5>
				<?php endif; ?>

				<?php if ( $phone ) : ?>

					<a class="team-member__link" href="tel:<?php echo it_phone_cleaner( $phone ) ?>">
						<svg class="team-member__phone">
							<use xlink:href="#phone"></use>
						</svg>
						<?php echo esc_html( $phone ); ?>
					</a>
				<?php endif; ?>
				<?php if ( $email ) : ?>

					<a class="team-member__link" href="mailto:<?php echo $email; ?>">
						<svg class="team-member__email">
							<use xlink:href="#email"></use>
						</svg>
						<?php echo esc_html( $email ); ?>
					</a>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>
