<?php function getPortfolioHtml () { ob_start(); ?>

    <!-- Get the last 3 posts with the category 'portfilio'  -->
    			<div class="portfolio">
    			<?php
    				$portfolio_query_args = array('category_name'=>'portfolio', 'showposts'=>3);
    				$query = new WP_Query($portfolio_query_args);
    				while($query->have_posts()) : $query->the_post();
    			?>

    				<a href="<?php the_permalink() ?>" rel="bookmark">
    					<?php if ( has_post_thumbnail() ) {
    						the_post_thumbnail(array(361,300));
    	                } ?>
    				</a>

                <?php endwhile; ?>
                </div>


<?php
    return ob_get_clean();
} ?>

<?php

/**
 */

function portfolio_function() {
	return getPortfolioHtml();
}
add_shortcode('portfolio', 'portfolio_function');
