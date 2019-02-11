<?php get_header(); ?>
<main class="blog__one">
	<div class="container">
		<div class="row">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			?>

			<div class="col-lg-4 col-md-6 blog__one-card">
				<a href="<?php the_permalink(); ?>" class="blog__one-container">
					<div class="blog__one-image" style="background-image: url(<?php echo $img[0]; ?>);"></div>
					<div class="blog__one-content">
						<span class="blog__one-date"><?php echo get_the_date( 'F j, Y' ); ?></span>
						<h2 class="blog__one-title"><?php the_title(); ?></h2>
						<span class="blog__one-read">Read More <i class="ion-ios-arrow-forward"></i></span>
					</div>
				</a>
			</div>

		<?php endwhile; endif; ?>

		</div>
	</div>
</main>
<?php get_footer(); ?>
