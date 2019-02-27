<main>

<!-- Default Content -->

<?php if (have_posts()) : while (have_posts()) : the_post(); if ( !empty( get_the_content() ) ) : ?>
<section>
	<div class="container">
		<div class="row">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php endif; endwhile; endif; ?>

<!-- End Default Content -->

<!-- Elements -->

<?php if( have_rows('elements') ): while ( have_rows('elements') ) : the_row();
$backgroundType = get_sub_field('background_type');
$backgroundColor = get_sub_field('background_color');
$backgroundImage = get_sub_field('background_image');
$backgroundPosition = get_sub_field('background_position');
if($backgroundType == 'color') {
	$background = 'background-color: ' . $backgroundColor;
} elseif($backgroundType == 'image') {
	$background = 'background-image: url(' . $backgroundImage . '); background-attachment: ' . $backgroundPosition;
}
?>


	<section style="<?php echo $background; ?>;">

		<!-- Fullwidth Content -->

		<?php if( have_rows('fullwidth_content') ): while( have_rows('fullwidth_content') ): the_row(); ?>

			<div class="container">
				<div class="row align-items-center">
					<div class="w-100">
						<div class="w-<?php the_sub_field('content_width'); ?> <?php the_sub_field('content_position'); ?>">
							<span class="content__block-eyebrow"><?php the_sub_field('eyebrow'); ?></span>
							<h1><?php the_sub_field('title'); ?></h1>
							<?php echo wpautop(get_sub_field('content')); ?>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; endif; ?>

		<!-- End Fullwidth Content -->

		<!-- Vendor Gallery -->

		<?php if( have_rows('vendor_gallery') ): while( have_rows('vendor_gallery') ): the_row(); ?>

			<div class="container">
				<div class="row">
					<?php $vendorLogos = get_sub_field('vendor_logos');
					if( $vendorLogos ): ?>
					<?php foreach( $vendorLogos as $vendorLogo ): ?>
						<div class="col-lg-3 col-md-4 col-6">
							<div class="vendor__grid">
								<img src="<?php echo $vendorLogo['url']; ?>" alt="<?php echo $vendorLogo['alt']; ?>" />
							</div>
						</div>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

		<?php endwhile; endif; ?>

		<!-- End Vendor Gallery -->

		<!-- FAQs -->

		<?php if( have_rows('faqs') ): ?>
			<div class="container faqs__one">
				<div class="row align-items-center">
					<div class="col-lg-8 offset-lg-2">
						<?php while( have_rows('faqs') ): the_row(); ?>

							<div class="faq__question">
								<h2><?php the_sub_field('question'); ?></h2>
							</div>
							<div class="faq__answer">
								<?php echo wpautop(get_sub_field('answer')); ?>
							</div>

						<?php endwhile; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<!-- End FAQs -->

	</section>

 <?php endwhile; endif; ?>

<!-- End Elements -->

</main>

<script>
jQuery(document).ready(function($) {
	$('.faq__question').click(function() {
		$(this).toggleClass('faqs__clicked');
		$(this).next().slideToggle();
	});
});
</script>

<style>
.faqs__one h2 {
  font-size: 1.5rem;
	margin-bottom: 0;
	transition: all .3s ease;
	max-width: 80%;
	line-height: 1.35;
	font-weight: 600;
}
.faqs__one .faq__question {
  border: 1px solid rgba(0,0,0,.1);
  padding: 1.5rem;
	margin-top: 1.5rem;
	position: relative;
	overflow: hidden;
	cursor: pointer;
	transition: all .3s ease;
	background: white;
}
.faqs__one .faq__question:nth-child(1) {
	margin-top: 0;
}
.faqs__one .faq__question::after {
  content: '+';
  color: var(--primary);
  position: absolute;
  right: 2rem;
  top: 50%;
  transform: translateY(-55%);
  font-size: 2rem;
  font-weight: 600;
	transition: all .3s ease;
}
.faqs__one .faq__question:hover, .faqs__clicked {
	background: var(--primary) !important;
}
.faqs__one .faq__question:hover > h2, .faqs__clicked h2 {
	color: white;
}
.faqs__one .faq__question:hover::after {
	color: white;
}
.faq__question.faqs__clicked::after {
	color: white;
	transform: translateY(-45%) rotate(135deg);
}
.faqs__one .faq__answer {
	border: 1px solid rgba(0,0,0,.1);
	border-top: none;
	background: #f9f9f9;
	padding: 1.5rem;
	display: none;
}
.centered {
	margin: 0 auto;
  text-align: center;
}
section {
	padding: 3.5rem 0;
	background-size: cover;
	background-position: center;
}
main {
	padding: 0 !important;
}
.vendor__grid {
	display: block;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
	width: 100%;
}
.vendor__grid:before{
  content: "";
  display: block;
  padding-top: 80%;
}
.vendor__grid img {
	position: absolute;
	max-width: 65%;
	top: 50%;
	transform: translateY(-50%);
	left: 0;
	right: 0;
	margin: 0 auto;
}
.content__block-eyebrow {
	color: var(--primary);
	font-weight: 600;
	display: block;
	margin-bottom: 1rem;
	width: 100%;
}
.content__block-heading {
	display: block;
	margin-bottom: 1.5rem;
	max-width: 75%;
}
.content__block-content p {
	max-width: 85%;
}
</style>
