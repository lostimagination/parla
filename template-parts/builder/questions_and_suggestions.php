<?php
$sup_title      = get_sub_field( 'sup_title' );
$paragraph      = get_sub_field( 'paragraph' );
$questions_form = get_sub_field( 'questions_form' );
?>

<section class="question">
	<div class="container">

		<?php if ( $sup_title ) : ?>
			<h5 class="section-sup-title"><?php echo $sup_title ?></h5>
		<?php endif; ?>

		<?php get_template_part( 'template-parts/builder/title' ) ?>

		<?php if ( $paragraph ) : ?>
			<h4 class="information-paragraph"><?php echo $paragraph ?></h4>
		<?php endif; ?>

		<div class="row justify-content-center">
			<div class="col-lg-8">

				<?php if ( $questions_form ) : ?>
					<?php echo do_shortcode( $questions_form ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
