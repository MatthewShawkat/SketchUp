<?php function getHtml ($company, $date) { ob_start(); ?>
    <div class="availability_card alignright">
		<div class="availability_header"><b>Currently At</b></div>
		<div class="availability_content"><?php echo ($company) ?></div>
		<hr class="availability_divider">
		<div class="availability_content">
			<div class="bold"><b>Next Available</b></div>
			<div><?php echo ($date) ?></div>
		</div>		
        <a href="/index.php/contact" class="main-button">Get in touch</a>
	</div>
<?php
    return ob_get_clean();
} ?>

<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package SketchUp
 */


function availability_function($attrs) {
	$company = $attrs['company'];
	$date = $attrs['date'];

	return getHtml($company, $date);
}
add_shortcode('availability', 'availability_function');
