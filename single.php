<?php
/**
 * The template for displaying all single posts.
 *
 * @package SketchUp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
            <?php 
                $catId = get_category_by_slug('portfolio')->term_id;
                if(in_array($catId , wp_get_post_categories(get_the_ID()))){
                    echo get_template_part( 'template-parts/content', 'portfolio' );
                } else {
                    echo get_template_part( 'template-parts/content', 'single' );
                }
            ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
