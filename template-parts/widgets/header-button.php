<?php if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); } ?>
<div class="top__widget">
	<a
	href="<?php the_field('header_link', $headerID); ?>"
	class="btn cta__btn"
	style="background-color: <?php the_field('button_color', $headerID); ?>;"
	>

		<?php the_field('button_text', $headerID); ?>
		<?php if(get_field('show_icon', $headerID)) : ?>
			<i class="
			<?php if(get_field('icon', $headerID)) {
				the_field('icon', $headerID);
			} else {
				echo 'ion-android-arrow-forward';
			}
			?>"></i>
		<?php endif; ?>

	</a>
</div>
