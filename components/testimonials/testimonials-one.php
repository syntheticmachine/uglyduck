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


<script>
	jQuery(document).ready(function($) {

		$('.variable-width-slider').slick({
			dots: false,
		  infinite: true,
		  speed: 500,
		  slidesToShow: 4,
		  centerMode: false,
		  variableWidth: true,
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

		$('.faq__section-container').click(function() {
			$(this).find('.faq__section-answer').slideToggle('fast');
			$(this).toggleClass('toggled');
		});
	});
</script>

<style>
.job-title {
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
.testimonial__container {
	padding: 1rem;
}
.testimonial__container i {
	display: block;
	font-size: 1.35rem;
	color: var(--primary);
	margin-bottom: 1.5rem;
	margin-top: .5rem;
}
.testimonial__container h4 {
	font-size: 1.1rem;
}
.testimonial__container-inner {
	border: 1px solid rgba(0,0,0,.1);
	background: white;
	padding: 1.5rem;
	padding-top: 2rem;
	padding-bottom: 2rem;
}
.testimonial__container-image {
	width: 40px;
	height: 40px;
	border-radius: 100pc;
	position: relative;
	overflow: hidden;
	border: 2px solid rgba(0,0,0,.1);
}
.testimonial__text {
	font-size: 1.05rem;
	margin-bottom: 1.5rem;
	min-height: 125px;
}
.readmore::after {
	content: 'Read Full Review';
	font-weight: 500;
	color: var(--primary);
}
.testimonial__section .slick-next {
	right: -85px;
}
.testimonial__section .slick-prev {
	left: -85px;
}
</style>
