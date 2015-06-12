<?php function getIconHtml ($icon, $url) {
    ob_start(); ?>
        <a class="social-icon" href="<?php echo $url ?>"><img class="social-icon_img" src="<?php echo $path ?>"></a>
<?php
    return ob_get_clean();
} ?>

<?php

/**
 */

function icon_function($attrs, $content) {
    $icon = $attrs['icon'];
    $url = $attrs['url'];

	return getIconHtml($icon, $url);
}
add_shortcode('social-icon', 'icon_function');
