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
								<?php else : ?>
									<div class="col-auto">
										<div class="testimonial__container-image">
											<?php $smallName = get_the_title(); ?>
											<span><?php echo $smallName[0]; ?></span>
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


<script>
	jQuery(document).ready(function($) {

		$('.testimonial__section-one').slick({
			dots: false,
			infinite: true,
			speed: 500,
			slidesToShow: 2,
			centerMode: false,
			autoplay: true,
			autoplaySpeed: 4000,
			prevArrow: '<button type="button" class="slick-prev"><i class="ion-chevron-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="ion-chevron-right"></i></button>',
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					variableWidth: false,
				}
			}]
		});

		$(".testimonial__text").each(function() {
			if($(this).text().length > 195) {
				$(this).addClass('readmore');
				$(this).text(function(index, currentText) {
					return currentText.substr(0, 195) + '...';
				});
			}
		});
	});
</script>

<style>
.testimonial__section-one .job-title {
  color: #888;
  font-weight: 500;
  display: block;
  position: absolute;
  bottom: 2px;
  font-size: 14px;
}
.testimonial__section {
	background: #F4F8FB;
	padding: 2rem 0 !important;
}
.testimonial__section-one .testimonial__container {
	padding: 1rem;
}
.testimonial__section-one .testimonial__container i {
	display: block;
	font-size: 1.35rem;
	color: var(--primary);
	margin-bottom: 1.5rem;
	margin-top: .5rem;
}
.testimonial__section-one .testimonial__container h4 {
	font-size: 1.1rem;
}
.testimonial__section-one .testimonial__container-inner {
	border: 1px solid rgba(0,0,0,.1);
	background: white;
	padding: 1.5rem;
	padding-top: 2rem;
	padding-bottom: 2rem;
}
.testimonial__section-one .testimonial__container-image {
  width: 40px;
  height: 40px;
  border-radius: 100pc;
  position: relative;
  overflow: hidden;
  border: 2px solid #e2e2e2;
}
.testimonial__section-one .testimonial__text {
	font-size: 1.05rem;
	margin-bottom: 1.5rem;
	min-height: 125px;
}
.testimonial__section-one .slick-slide img {
  display: block;
  width: 38px;
}
.testimonial__section-one .readmore::after {
	content: 'Read Full Review';
	font-weight: 500;
	color: var(--primary);
}
.testimonial__container-image {
	background: var(--primary);
}
.testimonial__container-image span {
  color: white;
  font-weight: 700;
  text-align: center;
  padding-left: 12px;
  display: inline-block;
  font-size: 21px;
  padding-top: 3px;
}
.testimonial__section-one .testimonial__section .slick-next {
	right: -85px;
}
.testimonial__section-one .testimonial__section .slick-prev {
	left: -85px;
}
</style>
