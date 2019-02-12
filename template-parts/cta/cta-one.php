<?php
$height = get_field('cta_height', 'options');
$heading = get_field('heading_text', 'options');
$headingColor = get_field('heading_color', 'options');
$content = get_field('content', 'options');
$contentColor = get_field('content_color', 'options');
$backgroundColor = get_field('background_color', 'options');
$backgroundImage = get_field('background_image', 'options');
$widget = get_field('cta_widget', 'options');
$buttonText = get_field('cta_button_text', 'options');
$buttonColor = get_field('cta_button_color', 'options');
$buttonLink = get_field('cta_button_link', 'options');
$phone = get_field('cta_phone_number', 'options');
if(!get_field('content_position', 'options')) { $position = 'centered'; }
?>

<section class="footer__cta-one">
	<div class="footer__cta-one-img"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="footer__cta-one-content <?php echo $position; ?>">
				<?php if($heading) : ?>
					<h2><?php echo $heading; ?></h2>
				<?php endif; ?>
				<?php if($content) : ?>
					<p><?php echo $content; ?></p>
				<?php endif; ?>
				<?php if($widget == 'button') : ?>
					<a href="<?php echo $buttonLink; ?>" class="btn"><?php echo $buttonText; ?></a>
				<?php elseif($widget == 'phone') : ?>
					<?php if($phone) : ?>
						<span class="footer__cta-one-phone"><?php echo $phone; ?></span>
					<?php else : ?>
						<span class="footer__cta-one-phone"><?php echo do_shortcode('[phone_number]'); ?></span>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<style>
<?php if($headingColor) : ?>.footer__cta-one h2 { color: <?php echo $headingColor; ?>; }<?php endif; ?>
<?php if($contentColor) : ?>.footer__cta-one p { color: <?php echo $contentColor; ?>; }<?php endif; ?>
<?php if($height) : ?>.footer__cta-one { height: <?php echo $height; ?>; }<?php endif; ?>
<?php if($backgroundColor) : ?>.footer__cta-one { background-color: <?php echo $backgroundColor; ?>; }<?php endif; ?>
<?php if($backgroundImage) : ?>.footer__cta-one-img {
	background-image: url(<?php echo $backgroundImage; ?>);
	display: block;
}<?php endif; ?>
<?php if($buttonColor) : ?>.footer__cta-one .btn { background-color: <?php echo $backgroundColor; ?>; }<?php endif; ?>
</style>
