<section class="faq__section layout__one-section">
	<div class="container">
		<div class="row">
			<?php if(get_field('faq_eyebrow')) : ?>
				<span class="layout__one-section-eyebrow"><?php the_field('faq_eyebrow'); ?></span>
			<?php endif; ?>
			<?php if(get_field('faq_title')) : ?>
				<h2 class="layout__one-section-heading"><?php the_field('faq_title'); ?></h2>
			<?php endif; ?>

			<?php if( have_rows('faq_repeater') ): while ( have_rows('faq_repeater') ) : the_row(); ?>

						<div class="faq__section-container">
							<div class="faq__section-question">
								<h3><?php the_sub_field('faq_question'); ?></h3>
								<i class="ion-android-add"></i>
							</div>
							<div class="faq__section-answer">
								<?php the_sub_field('faq_answer'); ?>
							</div>
						</div>

			<?php endwhile; endif; ?>

		</div>
	</div>
</section>
