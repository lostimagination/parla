<section class="default-content">
	<div class="container">
		<?php
		if ( get_sub_field( 'border_grey' ) ) {
			$border = 'border-grey';
		} else {
			$border = 'no-border-grey';
		}
		?>
		<div class="<?php echo esc_attr( $border ); ?>">
			<?php $content = get_sub_field( 'content' ); ?>
			<?php if ( $content ) : ?>
				<div class="text-content"><?php echo $content ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>

