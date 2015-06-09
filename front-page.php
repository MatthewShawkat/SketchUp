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
				<?php the_content(); ?>
			<?php endwhile; // End of the loop. ?>



			<!-- Get the last 3 posts with the category 'portfilio'  -->
			<?php
				$portfolio_query_args = array('category_name'=>'portfolio', 'showposts'=>3);
				$query = new WP_Query($portfolio_query_args);
				while($query->have_posts()) : $query->the_post();
			?>

				<a href="<?php the_permalink() ?>" rel="bookmark">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail(array(350,300));
	                } ?>
				</a>

            <?php endwhile; ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
