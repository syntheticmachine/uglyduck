<?php if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); } ?>
<div class="social__icons top__widget">

	<!-- Facebook -->
	<?php if(get_field('facebook_url', 'options')) : ?>
	<a href="<?php the_field('facebook_url', 'options'); ?>"><i class="ion-social-facebook"></i></a>
	<?php endif; ?>
	<!-- Instagram -->
	<?php if(get_field('instagram_url', 'options')) : ?>
	<a href="<?php the_field('instagram_url', 'options'); ?>"><i class="ion-social-instagram"></i></a>
	<?php endif; ?>
	<!-- Twitter -->
	<?php if(get_field('twitter_url', 'options')) : ?>
	<a href="<?php the_field('twitter_url', 'options'); ?>"><i class="ion-social-twitter"></i></a>
	<?php endif; ?>
	<!-- Youtube -->
	<?php if(get_field('youtube_url', 'options')) : ?>
	<a href="<?php the_field('youtube_url', 'options'); ?>"><i class="ion-social-youtube"></i></a>
	<?php endif; ?>
	<!-- Linkedin -->
	<?php if(get_field('linkedin_url', 'options')) : ?>
	<a href="<?php the_field('linkedin_url', 'options'); ?>"><i class="ion-social-linkedin"></i></a>
	<?php endif; ?>
	<!-- Pinterest -->
	<?php if(get_field('pinterest_url', 'options')) : ?>
	<a href="<?php the_field('pinterest_url', 'options'); ?>"><i class="ion-social-pinterest"></i></a>
	<?php endif; ?>

</div>
