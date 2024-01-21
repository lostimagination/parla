<?php $section_background = get_sub_field( 'section_background' ); ?>
<section class="features" style="background-color: <?php echo $section_background ? $section_background : '#fff'; ?>">
	<div class="container">
		<?php $suptitle = get_sub_field( 'suptitle' ); ?>
		<?php if ( $suptitle ) : ?>
			<h5 class="section-sup-title"><?php echo $suptitle ?></h5>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/builder/title' ) ?>
		<?php $paragraph = get_sub_field( 'paragraph' ); ?>
		<?php if ( $paragraph ) : ?>
			<h4 class="paragraph"><?php echo $paragraph ?></h4>
		<?php endif; ?>
		<?php if ( have_rows( 'card_features' ) ) : ?>
			<div class="row">
				<?php while ( have_rows( 'card_features' ) ) : the_row(); ?>
					<div class="col-md-4">
						<?php if ( $card_image = get_sub_field( 'card_image' ) ) : ?>

								<?php echo wp_get_attachment_image( $card_image['id'], 'thumbnail', false, array( 'class' => 'card-image' ) ); ?>

						<?php endif; ?>
						<?php $card_title = get_sub_field( 'card_title' ); ?>
						<?php if ( $card_title ) : ?>
							<h3><?php echo $card_title ?></h3>
						<?php endif; ?>
						<?php $card_content = get_sub_field( 'card_content' ); ?>
						<?php if ( $card_content ) : ?>
							<article class="content-article"><?php echo $card_content ?></article>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php if ( $link = get_sub_field( 'link' ) ) :
			$link_target = $link['target'] ? $link['target'] : '_self'; ?>
			<div class="read-more-wrapper">
				<a class="btn" target="<?php echo esc_attr( $link_target ); ?>"
				   href="<?php echo esc_url( $link['url'] ); ?>"><?php echo $link['title'] ?></a>
			</div>
		<?php endif; ?>

		<div class="gallery features_gallery">
			<?php if ( $features_gallery = get_sub_field( 'features_gallery' ) ): ?>
				<?php foreach ( $features_gallery as $image ): ?>
						<img class="img-responsive" src="<?php echo $image['url']; ?>"
							 alt="<?php echo $image['alt']; ?>"/>
<!--						<p>--><?php //echo $image['caption']; ?><!--</p>-->
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

