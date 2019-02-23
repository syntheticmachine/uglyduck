<?php get_header(); ?>
<?php /* Template Name: IDX Search */ ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
<?php echo do_shortcode('[optima_express_search zoom="10"]'); ?>
<?php get_footer(); ?>
<style>
.ihf-powered-by {
	display: none !important;
}
.ihf-listings-container {
	overflow: scroll !important;
}
</style>
<script>
jQuery(document).ready(function() {
	$mapHeight = $('.ihf-mapboxgl-map').height();
	$('.ihf-listings-container').css({'max-height', '200px' })
});
</script>
