<?php
global $post;
if(get_field('hero_override')) { $heroID = get_field('hero_override'); } else { $heroID = get_field('default_hero','options'); }
$heroBackground = get_field('background_color', $heroID);
$textColor = get_field('text_color', $heroID);
?>

<div class="hero__basic">
	<div class="container">
		<div class="row">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<style>
<?php if($heroBackground) : ?> .hero__basic { background-color: <?php echo $heroBackground; ?> !important; } <?php endif; ?>
<?php if($textColor) : ?> .hero__basic h1 { color: <?php echo $textColor; ?> !important; } <?php endif; ?>
</style>

<script>
jQuery(document).ready(function($) {
	$headerOffset = $('header').height();
	$('.hero__basic').css('top', $headerOffset);
});
</script>
