<section class="trainings">
	<div class="container">
		<?php $sup_title = get_sub_field( 'sup_title' ); ?>
		<?php if ( $sup_title ) : ?>
			<h5 class="section-sup-title"><?php echo $sup_title ?></h5>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/builder/title' ) ?>
		<?php $paragraph = get_sub_field( 'paragraph' ); ?>
		<?php if ( $paragraph ) : ?>
			<p class="trainings-paragraph"><?php echo $paragraph ?> </p>
		<?php endif; ?>

		<?php if ( have_rows( 'conditions' ) ) : ?>
			<div class="trainings-conditions">
				<?php while ( have_rows( 'conditions' ) ) : the_row(); ?>

					<?php
					$image_fale = get_sub_field( 'image_fale' );
					$title      = get_sub_field( 'title_conditions' );

					if ( $image_fale ): ?>
						<a class="file-conditions" href="<?php echo $image_fale['url']; ?>">
							<svg class="pdf-white" width="40" height="40">
								<use xlink:href="#pdf"></use>
							</svg>
							<?php echo $title; ?>
						</a>
					<?php endif; ?>

				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php

		$trainings = get_sub_field( 'trainings' );
		if ( $trainings ): ?>
			<div class="row all-trainings-row">
				<?php foreach ( $trainings as $post ): ?>
					<div class="col-lg-6">
						<div class="training-wrapper">
							<?php setup_postdata( $post ); ?>
							<?php $label = get_field( 'label' ); ?>
							<?php if ( $label ) : ?>
								<p class="label-trainings"><?php echo $label ?></p>
							<?php endif; ?>
							<div class="price-wrapper">
								<a class="price-wrapper__title"
								   href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="price-wrapper__all-pdf">
									<?php
									$file = get_field( 'file' );
									if ( $file ): ?>
										<a href="<?php echo $file['url']; ?>">
											<svg>
												<use xlink:href="#pdf"></use>
											</svg>
										</a>
									<?php endif; ?>
									<?php $price = get_field( 'price' ); ?>
									<?php if ( $price ) : ?>
										<p class="price-wrapper__price"><?php echo $price ?></p>
									<?php endif; ?>
								</div>
							</div>
							<?php if ( have_rows( 'dates' ) ) : ?>
								<div class="event-dates">
									<?php while ( have_rows( 'dates' ) ) : the_row(); ?>
										<?php
										$date_string = get_sub_field( 'date' );
										$date        = DateTime::createFromFormat( 'Ymd', $date_string );
										?>
										<p class="date"> <?php echo $date->format( 'd.m' ); ?></p>

									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>
</section>

