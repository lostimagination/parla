<section class="trainings">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<?php $sup_title_card = get_sub_field( 'sup_title_card' ); ?>
				<?php if ( $sup_title_card ) : ?>
					<h5 class="section-sup-title"><?php echo $sup_title_card ?></h5>
				<?php endif; ?>
				<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'intro__title' ) ) ?>
				<?php $paragraph_card = get_sub_field( 'paragraph_card' ); ?>
				<?php if ( $paragraph_card ) : ?>
					<p class="paragraph-card"><?php echo $paragraph_card ?></p>
				<?php endif; ?>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<?php if ( $image_section = get_sub_field( 'image_section' ) ) : ?>

					<?php echo wp_get_attachment_image( $image_section['id'], 'medium', false, array( 'class' => '' ) ); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
