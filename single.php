<?php get_header();
if(get_field('article_template', 'option')) {
	get_template_part( 'template-parts/singles/single-' . get_field('article_template', 'option'));
} else {
	get_template_part( 'template-parts/singles/single-one');
}
get_footer(); ?>
