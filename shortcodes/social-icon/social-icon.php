<?php function getIconHtml ($icon, $url) {
    ob_start(); ?>
<a class="social-icon" href="<?php echo $url ?>"><span class="fa-stack fa-lg icon-<?php echo $icon ?>">
      <i class="fa fa-stop fa-stack-2x"></i>
      <i class="fa fa-<?php echo $icon ?> fa-stack-1x"></i>
    </span></a>
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
