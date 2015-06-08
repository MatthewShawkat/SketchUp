<?php function getSectionHtml ($title, $content) { ob_start(); ?>
    <div class="section">
        <h2 class="section_title"><?php echo ($title) ?></h2>
        <div class="section_content"><?php echo ($content) ?></div>
	</div>
<?php
    return ob_get_clean();
} ?>

<?php

/**
 */

function section_function($attrs, $content) {
	$title = $attrs['title'];

	return getSectionHtml($title, $content);
}
add_shortcode('section', 'section_function');
