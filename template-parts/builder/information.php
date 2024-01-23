<?php
$sup_title_section = get_sub_field( 'sup_title_section' );
$paragraph = get_sub_field( 'paragraph' );
$information_form = get_sub_field( 'information_form' );
?>
<section class="information">
	<div class="container">

		<?php if ( $sup_title_section ) : ?>
			<h5 class="section-sup-title"><?php echo $sup_title_section ?></h5>
		<?php endif; ?>

		<?php get_template_part( 'template-parts/builder/title' ) ?>

		<?php $paragraph = get_sub_field( 'paragraph' ); ?>
		<?php if ( $paragraph ) : ?>
			<h4 class="information-paragraph">
				<?php echo $paragraph ?>
			</h4>
		<?php endif; ?>

		<div class="row justify-content-center">
			<div class="col-lg-8">

				<?php if ( $information_form ) : ?>
					<?php echo do_shortcode( $information_form ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
