<main>
<!-- Default Content -->
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php if ( !empty( get_the_content() ) ) : ?>
	<div class="container" style="padding-top: 6.5rem; padding-bottom: 6.5rem;">
		<div class="row">
			<?php the_content(); ?>
		</div>
	</div>
<?php endif; ?>
<?php endwhile; endif; ?>
<!-- End Default Content -->

<!-- Elements -->

<?php if( have_rows('elements') ): while ( have_rows('elements') ) : the_row(); ?>
	<?php
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

		<?php if( have_rows('select_element') ) : while ( have_rows('select_element') ) : the_row(); ?>

		<?php if( get_row_layout() == 'vendor_logos' ) : ?>

			<div class="container">
				<div class="row">
					<?php
					$vendorLogos = get_sub_field('vendor_logos');
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

		<?php endif; ?>

		<?php if( get_row_layout() == 'content_block' ) : ?>

			<div class="container">
				<div class="row align-items-center">
					<?php if( have_rows('contents') ) : while ( have_rows('contents') ) : the_row(); ?>
						<div class="col content__block">
							<?php if(get_sub_field('eyebrow')) : ?>
								<span class="content__block-eyebrow"><?php the_sub_field('eyebrow'); ?></span>
							<?php endif; ?>
							<?php if(get_sub_field('heading')) : ?>
								<h1 class="content__block-heading"><?php the_sub_field('heading'); ?></h1>
							<?php endif; ?>
							<div class="content__block-content"><?php the_sub_field('content'); ?></div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>

		<?php endif; ?>

		<?php endwhile; endif; ?>

	</section>

 <?php endwhile; endif; ?>

<!-- End Elements -->

</main>

<style>
section {
	padding: 6.5rem 0;
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
}
.content__block-heading {
	font-weight: 600;
	display: block;
	margin-bottom: 1.5rem;
	max-width: 75%;
}
.content__block-content p {
	font-size: 1.2rem;
	line-height: 1.75;
	max-width: 85%;
}
</style>
