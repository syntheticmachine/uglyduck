<?php if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); } ?>
<div class="secondary__nav top__widget">
	<ul>
		<?php if( have_rows('secondary_links_repeater', $headerID) ): while ( have_rows('secondary_links_repeater', $headerID) ) : the_row(); ?>
			<li><a href="<?php the_sub_field('secondary_link'); ?>"><?php the_sub_field('secondary_title'); ?></a></li>
		<?php endwhile; endif; ?>
	</ul>
</div>
