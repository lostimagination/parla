<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package parla
 */

get_header();
the_post();
?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	<section class="single-post-content">
		<div class="container">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<?php $paragraph_post = get_field( 'paragraph_post' ); ?>
			<?php if ( $paragraph_post ) : ?>
				<h4 class="paragraph-post"><?php echo $paragraph_post ?></h4>
			<?php endif; ?>
			<?php if ( $image_post = get_field( 'image_post' ) ) : ?>

				<?php echo wp_get_attachment_image( $image_post['id'], 'large', false, array( 'class' => 'image-post' ) ); ?>

			<?php endif; ?>
			<?php the_content(); ?>
			<div class="row justify-content-center">
				<div class="col-lg-9">


				</div>
			</div>


		</div>
	</section>
<?php
get_footer();
