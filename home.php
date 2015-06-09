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
			<!-- Get all posts that are not in 'portfolio' category -->
                        <?php
                                $catId = get_category_by_slug('portfolio')->term_id;
                                $catquery = new WP_Query( array('category__not_in' => array($catId)));
                                while($catquery->have_posts()) : $catquery->the_post();
                        ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<header class="entry-header">
                		<?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
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
