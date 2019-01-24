<?php
if(get_field('footer_template', 'option')) {
	get_template_part( 'template-parts/footers/footer-' . get_field('footer_template', 'option'));
} else {
	get_template_part( 'template-parts/footers/footer-one');
}
?>
<?php wp_footer(); ?>
</body>
</html>
