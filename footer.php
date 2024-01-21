<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parla
 */
$logo          = get_field( 'logo', 'option' );
$enable_to_top = get_field( 'enable_to_top', 'option' );
?>

</main><!-- /.site-content -->

<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<?php $title_column = get_field( 'title_column', 'options' ); ?>
				<?php if ( $title_column ) : ?>
					<h5 class="title-column"><?php echo $title_column ?></h5>
				<?php endif; ?>
				<?php $address_footer = get_field( 'address_footer', 'options' ); ?>
				<?php if ( $address_footer ) : ?>
					<div class="address-footer">
						<svg>
							<use xlink:href="#local"></use>
						</svg>
						<p class="address-footer"><?php echo $address_footer ?></p>
					</div>
				<?php endif; ?>
				<?php $phone_footer = get_field( 'phone_footer', 'options' ); ?>
				<?php if ( $phone_footer ) : ?>
					<a class="phone-footer" href="tel:<?php echo it_phone_cleaner( $phone_footer ) ?>">
						<svg>
							<use xlink:href="#phone"></use>
						</svg>
						<?php echo esc_html( $phone_footer ); ?>
					</a>
				<?php endif; ?>
				<?php $email_footer = get_field( 'email_footer', 'options' ); ?>
				<?php if ( $email_footer ) : ?>
					<a class="email-footer" href="mailto:<?php echo $email_footer; ?>">
						<svg>
							<use xlink:href="#email"></use>
						</svg>
						<?php echo esc_html( $email_footer ); ?>
					</a>
				<?php endif; ?>

				<?php get_template_part( 'template-parts/socials' ); ?>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<?php $title_menu = get_field( 'title_menu', 'options' ); ?>
				<?php if ( $title_menu ) : ?>
					<h6 class="title-menu-footer"><?php echo $title_menu ?></h6>
				<?php endif; ?>

				<?php wp_nav_menu( array(
					'theme_location'  => 'footer',
					'container_class' => 'footer-links__container',
					'menu_class'      => 'footer-links',
					'fallback_cb'     => false
				) ); ?>
			</div>
			<div class="col-lg-4">
				<?php $title_form_footer = get_field( 'title_form_footer', 'options' ); ?>
				<?php if ( $title_form_footer ) : ?>
					<h5 class="title-form-footer"><?php echo $title_form_footer ?></h5>
				<?php endif; ?>
				<?php $paragraph_form_footer = get_field( 'paragraph_form_footer', 'options' ); ?>
				<?php if ( $paragraph_form_footer ) : ?>
					<h6 class="paragraph-form"><?php echo $paragraph_form_footer ?></h6>
				<?php endif; ?>
				<?php $footer_form_shortcode = get_field( 'footer_form_shortcode', 'options' ); ?>
				<?php if ( $footer_form_shortcode ) : ?>
					<div class="form-footer"><?php echo do_shortcode( $footer_form_shortcode ); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
		<div class="site-footer__copyright">
			<div class="link-copyright">
				<div class="link-info-copyright">
					<?php if ( have_rows( 'link_copyright', 'options' ) ) : ?>
						<?php while ( have_rows( 'link_copyright', 'options' ) ) : the_row(); ?>
							<?php if ( $link_info_copyright = get_sub_field( 'link_info_copyright' ) ) :
								$link_info_copyright_target = $link_info_copyright['target'] ? $link_info_copyright['target'] : '_self'; ?>

								<a target="<?php echo esc_attr( $link_info_copyright_target ); ?>"
								   href="<?php echo esc_url( $link_info_copyright['url'] ); ?>"><?php echo $link_info_copyright['title'] ?></a>

							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div>
					<span>© Copyright <?php echo date( 'Y' ) ?> <?php esc_html_e( 'PARLA GmbH & Co. KG', 'parla' ); ?></span>
				</div>
			</div>
		</div>
</footer>

<?php get_template_part( 'template-parts/svg' ); ?>

<?php if ( $enable_to_top && ! is_404() ) : ?>
	<a id="to-top" href="#top">
		<svg>
			<use xlink:href="#angle-up"></use>
		</svg>
		<span class="screen-reader-text"><?php esc_html_e( 'Scroll to top', 'parla' ); ?></span>
	</a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
