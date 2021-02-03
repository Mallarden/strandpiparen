<?php 
/*
* Template Name: nyhetsbrev
*/
get_header(); ?>
	<div id="primary" class="content">
    <div class="container">
        <div class="boka-tvattstuga">
            <? echo do_shortcode('[display-posts posts_per_page="100" image_size="thumbnail" include_excerpt="true"]'); ?>
        </div>
    </div>
	</div><!-- #primary -->
<?php get_footer();

