<section class="services">
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
		<?php

		$service = get_sub_field( 'service' );

		if ( $service ): ?>
			<div class="row">
				<?php foreach ( $service as $post ): ?>
					<div class="col-lg-4 col-md-6">
						<div class="service-wrapper">
							<h5 class="title-card"><?php the_title(); ?></h5>
							<?php the_post_thumbnail( 'medium', array( 'class' => 'flex-image' ) ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		  <?php if($link_service = get_sub_field('link_service')) :
		           $link_service_target = $link_service['target'] ? $link_service['target'] : '_self'; ?>
		  <div class="read-more-wrapper">
		    <a class="btn" target="<?php echo esc_attr( $link_service_target); ?>" href="<?php echo esc_url( $link_service['url']); ?>"><?php echo $link_service['title'] ?></a>
		  </div>
		    <?php endif; ?>
	</div>
</section>
