<section class="intro">
	<?php if ( $background_image = get_sub_field( 'background_image' ) ) : ?>
		<?php echo wp_get_attachment_image( $background_image['id'], 'large', false, array( 'class' => 'flex-image' ) ); ?>
	<?php endif; ?>
	<div class="container">
		<div class="intro-wrapper">
			<?php get_template_part( 'template-parts/builder/title' ) ?>
			<?php $paragraph = get_sub_field( 'paragraph' ); ?>
			<?php if ( $paragraph ): ?>
				<p class="intro__paragraph"><?php echo $paragraph ?></p>
			<?php endif; ?>
			<?php if ( $section_link = get_sub_field( 'section_link' ) ) :
				$section_link_target = $section_link['target'] ? $section_link['target'] : '_self'; ?>
				<a class="btn" target="<?php echo esc_attr( $section_link_target ); ?>"
				   href="<?php echo esc_url( $section_link['url'] ); ?>"><?php echo $section_link['title'] ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>
