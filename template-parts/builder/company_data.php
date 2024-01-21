<?php $address = get_sub_field('address');
 $paragraph = get_sub_field('paragraph'); ?>
<section class="company-data">
	<div class="container">
		<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>

		<?php if($paragraph) : ?>
		 <h4><?php echo $paragraph ?></h4>
		<?php endif; ?>
		<div class="all-data">

<!--			--><?php //if($address) : ?>
<!--			 <p>--><?php //echo $address ?><!--</p>-->
<!--			--><?php //endif; ?>
			<?php if ( $address ) : ?>

				<div class="address__link"  >
					<svg class="team-member__phone">
						<use xlink:href="#local"></use>
					</svg>
					<?php echo $address ?>
				</div>

			<?php endif; ?>
		</div>
	</div>
</section>
