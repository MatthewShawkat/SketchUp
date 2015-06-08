<?php function getSkillHtml ($content) { ob_start(); ?>
    <span class="skill"><?php echo (do_shortcode($content)) ?></span>
<?php
    return ob_get_clean();
} ?>

<?php

/**
 */

function skill_function($attrs, $content) {
	return getSkillHtml($content);
}
add_shortcode('skill', 'skill_function');
