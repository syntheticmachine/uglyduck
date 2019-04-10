<?php $gallery = $gallery = get_field('gallery_images'); ?>
<?php if($gallery) : ?>
<section class="gallery__slider">
	<div class="variable-width-slider">
		<?php foreach($gallery as $img) {
			echo '<img src="' . $img['url'] . '"/>';
		} ?>
	</div>
</section>
<?php endif; ?>
