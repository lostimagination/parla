<?php if ( have_rows( 'list' ) ) : ?>
	<section class="m-faq c-block">
		<div class="container">
			<div class="js-accordion">
				<?php $faq = []; ?>
				<?php while ( have_rows( 'list' ) ) : the_row(); ?>
					<?php
					$question = get_sub_field( 'question' );
					$answer   = get_sub_field( 'answer' );

					$faq[] = [
						'@type'          => 'Question',
						'name'           => wp_strip_all_tags( $question ),
						'acceptedAnswer' => [
							'@type' => 'Answer',
							'text'  => wp_strip_all_tags( $answer )
						]
					]
					?>
					<div class="js-accordion-item m-faq__item">
						<div class="h5 js-accordion-title m-faq__item-title"><span><?php echo wp_strip_all_tags( $question ); ?></span>
							<svg width="21" height="21">
								<use xlink:href="#angle-down"></use>
							</svg>
						</div>
						<div class="js-accordion-content m-faq__item-content">
							<div class="editor"><?php echo wp_kses_post( $answer ); ?></div>
						</div>
					</div>
				<?php endwhile; ?>

				<script type="application/ld+json">
					{
						"@context": "https://schema.org",
						"@type": "FAQPage",
						"mainEntity": <?php echo wp_json_encode( $faq ); ?>
					}
				</script>
			</div>
		</div>
	</section>
<?php endif; ?>
