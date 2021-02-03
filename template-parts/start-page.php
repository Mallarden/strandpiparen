<?php 
/*
* Template Name: startpage
*/
get_header(); ?>
	<div id="primary" class="content">
		</div>
		<div class="first-page-wrapper">
		<!-- <div class="scroll-symbol"><i class="fas fa-certificate"></i></div> -->
		<div class="arrow-scroll">
        <div class="scroller"></div>
      </div>
			<div class="first-page-content foo">

			<h1 style="font-weight:700;"><?php the_title(); ?></h1>
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

		</div>
	</div><!-- #primary -->
	</div>
<?php get_footer();

