<?php
$active = get_field('footer_cta_active', 'options');
$style = get_field('cta_style', 'options');
?>

<?php if($active && !is_single() && !is_home() && !get_field('hide_footer_cta')) : ?>
	<?php get_template_part( 'template-parts/cta/cta', $style ); ?>
<?php endif; ?>

<?php
if(get_field('footer_template', 'option')) {
	get_template_part( 'template-parts/footers/footer', get_field('footer_template', 'option'));
} else {
	get_template_part( 'template-parts/footers/footer-one');
}
?>

<?php wp_footer(); ?>
</body>
</html>
