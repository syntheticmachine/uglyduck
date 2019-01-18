<?php if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); } ?>
<div class="top__widget">
	<a href="<?php the_field('header_link', $headerID); ?>" class="btn cta__btn">
		<?php the_field('button_text', $headerID); ?><i class="ion-android-arrow-forward"></i>
	</a>
</div>
