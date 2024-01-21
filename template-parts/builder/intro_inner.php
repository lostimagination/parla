<?php
$paragraph = get_sub_field( 'paragraph' );
$margin_bottom = $paragraph ? 'intro-inner-mb' : '';
?>
<section class="intro-inner <?php echo esc_attr($margin_bottom); ?>">
	<?php if ( $background_image = get_sub_field( 'background_image' ) ) : ?>
			<?php echo wp_get_attachment_image( $background_image['id'], 'large', false, array( 'class' => 'flex-image' ) ); ?>
	<?php endif; ?>
	<?php
	if ( get_sub_field( 'background_color_inner' ) ) {
		$background = 'background-white';
	} else {
		$background = 'background-grey';
	}
	?>

	<?php if ( $paragraph ) : ?>
	<div class="container">
		<div class="intro-wrapper border-color <?php echo esc_attr($background);?>">

			<?php get_template_part( 'template-parts/builder/title' ) ?>

				<p class="intro__paragraph">
					<?php echo $paragraph ?>
				</p>

		</div>
	</div>
	<?php endif; ?>
</section>
