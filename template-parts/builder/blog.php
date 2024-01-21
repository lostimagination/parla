<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="all-blogs">
					<?php $sup_title_section = get_sub_field( 'sup_title_section' ); ?>
					<?php if ( $sup_title_section ) : ?>
						<h5 class="section-sup-title"><?php echo $sup_title_section ?></h5>
					<?php endif; ?>
					<?php get_template_part( 'template-parts/builder/components/title', null, array( 'class' => 'h2' ) ) ?>
					<a class="card-blog__link" href="<?php echo get_the_permalink( get_option( 'page_for_posts' ) ) ?>">
						<?php esc_html_e( 'alle Artikel', 'parla' ) ?>
						<svg>
							<use xlink:href="#arrow-inner-right"></use>
						</svg>
					</a>
				</div>
			</div>

			<?php
			$args = array(
				'post_type'      => 'post',
				'order'          => 'DESC',
				'orderby'        => 'date',
				'posts_per_page' => 5,

			);
			?>

			<?php $the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-md-6 col-lg-4">
						<div class="card-blog">
							<?php the_post_thumbnail( 'full', array( 'class' => 'flex-image' ) ); ?>
							<div class="card-blog__wrapper">
								<h4 class="card-blog__title"><?php the_title(); ?></h4>
								<a class="card-blog__link card-blog__link--border" href="<?php the_permalink(); ?>">
									<?php esc_html_e( 'weiterlesen', 'parla' ); ?>

									<svg>
										<use xlink:href="#arrow-inner-right"></use>
									</svg>

								</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>


			<?php endif; ?>

		</div>
	</div>
</section>
