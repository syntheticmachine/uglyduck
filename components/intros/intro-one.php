<section class="intro__section layout__one-section">
	<div class="container">
		<div class="row">

			<?php if(is_active_sidebar( 'left-sidebar' )) : ?>
				<div class="col-md-4 intro__sidebar">
					<?php dynamic_sidebar( 'left-sidebar' ); ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar( 'left-sidebar' ) || is_active_sidebar( 'right-sidebar' ) ) : ?>
				<div class="col-md-8">
			<?php endif; ?>

			<?php if(get_field('intro_eyebrow')) : ?>
				<span class="layout__one-section-eyebrow"><?php the_field('intro_eyebrow'); ?></span>
			<?php endif; ?>
			<?php if(get_field('intro_title')) : ?>
				<h2 class="layout__one-section-heading"><?php the_field('intro_title'); ?></h2>
			<?php endif; ?>
			<?php if(get_field('intro_content')) : ?>
				<div class="intro__section-content">
					<?php the_field('intro_content'); ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar( 'left-sidebar' ) || is_active_sidebar( 'left-sidebar' ) ) : ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if(is_active_sidebar( 'right-sidebar' )) : ?>
			<div class="col-md-4 intro__sidebar">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
			</div>
		<?php endif; ?>

	</div>
</section>
