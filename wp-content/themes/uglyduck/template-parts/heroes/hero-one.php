<?php
global $post;
if(get_field('hero_override')) { $heroID = get_field('hero_override'); } else { $heroID = get_field('default_hero','options'); }
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="hero__one d-flex align-items-center">
	<div class="hero__one-overlay"></div>
	<div class="hero__one-image load-hidden" style="background-image: url(<?php echo $img[0]; ?>)"></div>
	<div class="container">
		<div class="row">
			<div class="contents load-hidden" id="contents__container">
				<?php if(get_field('eyebrow_text')) : ?>
					<small class="eyebrow"><?php the_field('eyebrow_text'); ?></small>
				<?php endif; ?>
				<?php if(get_field('title')) : ?>
					<h1><?php the_field('title'); ?></h1>
				<?php endif; ?>
				<?php if(get_field('description')) : ?>
					<p class="description"><?php the_field('description'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function($) {

	var $headerHeight = $('header').height();
	$('.hero__one .contents').css('padding-top', $headerHeight);

	window.sr = ScrollReveal({ reset: false, easing: 'cubic-bezier(0.23, 1, 0.32, 1)' });
	sr.reveal('.hero__one-image', {
		duration: 1500,
		scale: 1.5,
		delay: 150
	});
	sr.reveal('.hero__one .contents', {
		duration: 1500,
		scale: 1.5,
		delay: 300
	});
});
</script>
