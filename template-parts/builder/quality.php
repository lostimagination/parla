<section class="quality">
	<div class="container">
		<?php get_template_part( 'template-parts/builder/title' ) ?>
		<?php if ( have_rows( 'quality_list' ) ) : ?>

				<?php while ( have_rows( 'quality_list' ) ) : the_row(); ?>
				<div class="row border-row">
					<div class="col-lg-3">

						<?php if ( $image_list = get_sub_field( 'image_list' ) ) : ?>

							<?php echo wp_get_attachment_image( $image_list['id'], 'medium', false, array( 'class' => '' ) ); ?>

						<?php endif; ?>
					</div>
					<div class="col-lg-9">
						<?php $content_list = get_sub_field( 'content_list' ); ?>
						<?php if ( $content_list ) : ?>
							<div class="list-wrapper editor"><?php echo $content_list ?></div>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>

		<?php endif; ?>
	</div>

</section>
