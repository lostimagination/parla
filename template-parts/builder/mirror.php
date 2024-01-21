<?php
if ( true === get_sub_field( 'border_section' ) ) {
	$border_section = 'border-section-mirror';
} else {
	$border_section = '';
}
?>
<section class="mirror">
	<div class="container">
		<div class="border-section <?php echo $border_section; ?>">
			<?php if ( $title_section = get_sub_field( 'title_section' ) ) : ?>
				<h2 class="title-section"><?php echo $title_section ?></h2>
			<?php endif; ?>
			<?php if ( have_rows( 'mirror_list' ) ) : ?>
				<?php while ( have_rows( 'mirror_list' ) ) : the_row();
					$content        = get_sub_field( 'content' );
					$image_location = get_sub_field( 'image_location' );
					if ( true === get_sub_field( 'right__left' ) ) {
						$position = 'row-reverse';
					} else {
						$position = '';
					};
					?>
					<!--				<div class="mirror-wrapper">-->
					<div class="row <?php echo $position; ?>  align-middle">
						<?php
						if ( 'three' === get_sub_field( 'size_column' ) ) {
							$column_content = 'col-lg-9';
							$column_image   = 'col-lg-3';
						} else if ( 'six' === get_sub_field( 'size_column' ) ) {
							$column_content = 'col-lg-6 ';
							$column_image   = 'col-lg-6';
						} else if ( 'five' === get_sub_field( 'size_column' ) ) {
							$column_content = 'col-lg-6';
							$column_image   = 'col-lg-5 offset-lg-1 col-md-6';
						}
						?>
						<div class="<?php echo $column_content ?>">
							<?php if ( $content ) : ?>
								<div class="mirror-content">
									<?php echo $content ?>
									<div class="mirror-buttons">
									<?php if ( $link_arrow = get_sub_field( 'link_arrow' ) ) :
										$link_arrow_target = $link_arrow['target'] ? $link_arrow['target'] : '_self'; ?>
										<a class="text-uppercase" target="<?php echo esc_attr( $link_arrow_target ); ?>"
										   href="<?php echo esc_url( $link_arrow['url'] ); ?>"><?php echo $link_arrow['title'] ?>
											<svg class="arrow-right-blue">
												<use xlink:href="#arrow-right-b"></use>
											</svg>
										</a>
									<?php endif; ?>
									<?php if ( $link_button = get_sub_field( 'link_button' ) ) :
										$link_button_target = $link_button['target'] ? $link_button['target'] : '_self'; ?>
											<a class="btn text-uppercase"
											   target="<?php echo esc_attr( $link_button_target ); ?>"
											   href="<?php echo esc_url( $link_button['url'] ); ?>"><?php echo $link_button['title'] ?>
											</a>
									<?php endif; ?>
									<?php if ( $pdf_file = get_sub_field( 'pdf_file' ) ) :
										$pdf_file_target = $pdf_file['target'] ? $pdf_file['target'] : '_self'; ?>
											<a class="file-conditions" target="<?php echo esc_attr( $pdf_file_target ); ?>"
											   href="<?php echo esc_url( $pdf_file['url'] ); ?>">
												<svg class="pdf-white" width="40" height="40">
													<use xlink:href="#pdf"></use>
												</svg>
												<?php $pdf_file_title = get_sub_field( 'pdf_file_title' ); ?>
												<?php if ( $pdf_file_title ) : ?>
													<?php echo $pdf_file_title; ?>
												<?php endif; ?>
											</a>
									<?php endif; ?>
									<?php if ( $extra_button = get_sub_field( 'extra_button' ) ) :
										$extra_button_target = $extra_button['target'] ? $extra_button['target'] : '_self'; ?>
											<a class="btn text-uppercase"
											   target="<?php echo esc_attr( $extra_button_target ); ?>"
											   href="<?php echo esc_url( $extra_button['url'] ); ?>"><?php echo $extra_button['title'] ?></a>
									<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="<?php echo $column_image ?>">
							<?php if ( $image_location ) : ?>
								<div class="image-mirror">
									<?php echo wp_get_attachment_image( $image_location['id'], 'medium', false, array( 'class' => 'image-location' ) ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>


					<!--				</div>-->
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
