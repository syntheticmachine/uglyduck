<?php
if(get_field('mobile_template', 'option')) {
	get_template_part( 'template-parts/mobile/header-' . get_field('mobile_template', 'option'));
} else {
	get_template_part( 'template-parts/mobile/header-one');
}
?>
