<section class="testimonial__section layout__one-section">
	<div class="container">

		<div class="testimonial__section-one">
			<?php $loop = new WP_Query( array( 'post_type' => 'testimonials' ) ); ?>
			<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="testimonial__container">
					<div class="testimonial__container-inner">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-12">
									<i class="ion-quote"></i>
									<div class="testimonial__text">
										<?php the_field('testimonial_text'); ?>
									</div>
								</div>
								<?php if ( get_field('user_photo') ) : ?>
									<div class="col-auto">
										<div class="testimonial__container-image">
											<img src="<?php the_field('user_photo'); ?>" />
										</div>
									</div>
								<?php endif; ?>
								<div class="col">
									<h4><?php the_title(); ?></h4>
									<?php if(get_field('job_title')) : ?>
										<span class="job-title"><?php the_field('job_title'); ?></span>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>

	</div>
</section>
