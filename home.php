<?php get_header(); ?>

	<?php
	if(get_field('blog_template', 'option')) {
		get_template_part( 'template-parts/blogs/blog-' . get_field('blog_template', 'option'));
	} else {
		get_template_part( 'template-parts/blogs/blog-one');
	}
	?>

<?php get_footer(); ?>
