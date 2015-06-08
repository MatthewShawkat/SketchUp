<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SketchUp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>







                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<header class="entry-header">
                		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

                		<?php if ( 'post' == get_post_type() ) : ?>
                		<div class="entry-meta">
                			<?php sketchup_posted_on(); ?>
                		</div><!-- .entry-meta -->
                		<?php endif; ?>
                	</header><!-- .entry-header -->

                	<div class="entry-content">
                		<?php
                			/* translators: %s: Name of current post */
                			the_excerpt();
                		?>
                	</div><!-- .entry-content -->

                	<footer class="entry-footer">
                		<?php sketchup_entry_footer(); ?>
                	</footer><!-- .entry-footer -->
                </article><!-- #post-## -->







			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
