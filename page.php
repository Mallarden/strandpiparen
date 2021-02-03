<?php get_header(); ?>

	<main role="main">
		<!-- section -->
	
	<?php if ( has_post_thumbnail() ) {

	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="background-page-img" style="background-image: url('. $url.')"></div>';
		}
?>
	
		<section>
		
			<h1 class="section-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_footer();
