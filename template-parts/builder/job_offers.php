<section class="job-offers">
	<div class="container">
		<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>
		<?php $paragraph_career = get_sub_field( 'paragraph_career' ); ?>
		<?php if ( $paragraph_career ) : ?>
			<p class="h4"><?php echo $paragraph_career ?></p>
		<?php endif; ?>
		<?php

		$job_offers = get_sub_field( 'job_offers' );

		if ( $job_offers ): ?>

			<?php foreach (
				$job_offers

				as $post
			): ?>
				<?php setup_postdata( $post ); ?>
				<div class="career-wrapper-extra">
					<div class="career-wrapper">
						<div class="title-career"><?php the_title(); ?></div>
						<?php the_content(); ?>
					</div>
				</div>
			<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>
</section>
