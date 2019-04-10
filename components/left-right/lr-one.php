<section class="lr__section layout__one-section">
	<div class="container">
		<div class="row">
			<div class="col-12 p-0 text-center">
				<?php if(get_field('lr_eyebrow')) : ?>
					<span class="layout__one-section-eyebrow"><?php the_field('lr_eyebrow'); ?></span>
				<?php endif; ?>
				<?php if(get_field('lr_title')) : ?>
					<h2 class="layout__one-section-heading"><?php the_field('lr_title'); ?></h2>
				<?php endif; ?>
			</div>

			<?php if( have_rows('content_section') ): while ( have_rows('content_section') ) : the_row(); ?>

				<div class="row align-items-center lr__row <?php the_field('leftright_image_position', 'options'); ?>">
					<div class="col-md-6">
						<?php if(get_sub_field('content_section_eyebrow')) : ?>
							<span class="layout__one-section-eyebrow"><?php the_sub_field('content_section_eyebrow'); ?></span>
						<?php endif; ?>
						<?php if(get_sub_field('content_section_title')) : ?>
							<h3 class="layout__one-section-secondary"><?php the_sub_field('content_section_title'); ?></h3>
						<?php endif; ?>
						<?php if(get_sub_field('content_section_content')) : ?>
							<?php the_sub_field('content_section_content'); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-6 lr__section-image">
						<?php if(get_sub_field('content_section_image')) : ?>
							<img src="<?php the_sub_field('content_section_image'); ?>" />
						<?php endif; ?>
					</div>
				</div>

			<?php endwhile; endif; ?>

		</div>
	</div>
</section>
