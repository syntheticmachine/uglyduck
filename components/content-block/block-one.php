<section class="content-block__section layout__one-section">
	<div class="container">
		<div class="row">

			<?php if(get_field('block_eyebrow')) : ?>
				<span class="layout__one-section-eyebrow"><?php the_field('block_eyebrow'); ?></span>
			<?php endif; ?>
			<?php if(get_field('block_title')) : ?>
				<h2 class="layout__one-section-heading"><?php the_field('block_title'); ?></h2>
			<?php endif; ?>
			<?php if(get_field('block_content')) : ?>
				<div class="intro__section-content">
					<?php the_field('block_content'); ?>
				</div>
			<?php endif; ?>

	</div>
</section>
