<?php $background_section = get_sub_field( 'background_section' ); ?>
<section class="all-progress"
		 style="background-color: <?php echo $background_section ? $background_section : '#fff'; ?>">

	<?php if ( have_rows( 'progress' ) ) : ?>
		<div class="row">

			<?php while ( have_rows( 'progress' ) ) : the_row(); ?>
				<div class="col-lg-4">
					<div class="progress-wrapper">
						<?php the_sub_field( 'sub_field_name' ); ?>
						<div class="number-wrapper">
							<?php $number = get_sub_field( 'number' ); ?>
							<?php if ( $number ) : ?>
								<div class="progress-number"><?php echo $number ?></div>
							<?php endif; ?>
							<?php $plus = get_sub_field( 'plus' ); ?>
							<?php if ( $plus ) : ?>
								<div class="progress-plus"><?php echo $plus ?></div>
							<?php endif; ?>
						</div>
						<?php $title_card = get_sub_field( 'title_card' ); ?>
						<?php if ( $title_card ) : ?>
							<h2 class="text-uppercase"><?php echo $title_card ?></h2>
						<?php endif; ?>
						<?php $paragraph_card = get_sub_field( 'paragraph_card' ); ?>
						<?php if ( $paragraph_card ) : ?>
							<h5 class="paragraph-card"><?php echo $paragraph_card ?></h5>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</section>
