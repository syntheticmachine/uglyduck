<?php /* Template Name: Layout One */ ?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'hero' ); ?>
<main class="layout__one">

	<!-- Intro Section -->

	<?php if(get_field('intro_content')) : ?>
		<?php get_template_part( 'components/intros/intro', 'one' ); ?>
	<?php endif; ?>

	<!-- End Intro Section -->

	<!-- Left/Right Section -->

	<?php if(have_rows('content_section')) : ?>
		<?php get_template_part( 'components/left-right/lr', 'one' ); ?>
	<?php endif; ?>

	<!-- End Left/Right Section -->

	<!-- Gallery Section -->

	<?php if(get_field('gallery_images')) : ?>
		<?php get_template_part( 'components/galleries/gallery', 'variable' ); ?>
	<?php endif; ?>

	<!-- End Gallery Section -->

	<!-- Content Block Section -->

	<?php if(have_rows('content_section')) : ?>
		<?php get_template_part( 'components/content-block/block', 'one' ); ?>
	<?php endif; ?>

	<!-- End Content Block Section -->

	<!-- FAQ Section -->

	<?php if(have_rows('faq_repeater')) : ?>
		<?php get_template_part( 'components/faqs/faq', 'one' ); ?>
	<?php endif; ?>

	<!-- End FAQ Section -->

	<!-- Visual Composer Section -->

	<section class="vc__section">
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
		</div>
	</section>

	<!-- End Visual Composer Section -->

</main>

<script>
	jQuery(document).ready(function($) {

		$('.variable-width-slider').slick({
			dots: false,
		  infinite: true,
		  speed: 300,
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

		$('.faq__section-container').click(function() {
			$(this).find('.faq__section-answer').slideToggle('fast');
			$(this).toggleClass('toggled');
		});
	});
</script>

<?php get_footer(); ?>
