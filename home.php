<?php get_header();
get_template_part( 'template-parts/content', 'hero' ); ?>
<main class="wrapper" role="main">
	<section class="container">
		<div class="row">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			?>

			<div class="post__block col-sm-12">
				<div class="row">
					<div class="col-md-2">
						<?php if(get_field('date')) : ?>
						<span class="date__month"><?php echo date("M", strtotime(get_field('date'))); ?> </span>
						<span class="date__num"><?php echo date("d", strtotime(get_field('date'))); ?></span>
						<br /><hr />
						<span class="date__year"><?php echo date("Y", strtotime(get_field('date'))); ?></span>
						<?php endif; ?>
						</div>
					<div class="col-md-6 half__height">
						<a href="<?php the_permalink(); ?>" class="half__height-image" style="background-image: url(<?php echo $src[0]; ?>) !important; background-size: cover !important; background-position: center center !important; background-repeat: no-repeat !important;"></a>
					</div>
					<div class="col-md-4 half__height half__left">
						<div class="half__height-contents">
							<h2><?php the_title(); ?></h2>
							<h3><?php the_field('guest_name'); ?></h3>
							<h4><?php the_field('church_name'); ?></h4>
							<h4><?php the_field('city'); ?>, <?php the_field('state'); ?></h4>
							<div class="block">
								<a href="<?php the_permalink(); ?>" class="button">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; endif; ?>
		</div>
	</section>
</main>

<style>
html, body {
	background: white;
}
.block {
	display: block;
	padding: 2rem 0;
}
.half__height-image {
	width: 100%;
	display: block;
	height: 400px;
}
.post__block {
	padding: 8rem 0;
}
.date__num, .date__month {
  font-size: 2rem;
  font-weight: 600;
}
.date__year {
	font-size: 1.65rem;
	color: #666;
	font-weight: 600;
}
.half__height-contents h2 {
  font-weight: 600;
  font-size: 2.5rem;
  display: block;
  padding-bottom: 2rem;
  margin-bottom: 2rem;
  border-bottom: 1px solid rgba(0,0,0,.1);
}
.half__height-contents h3 {
  font-weight: 600;
  margin-bottom: 2rem;
}
.half__height-contents h4 {
  font-size: 18px;
  font-weight: 600;
  color: #828282;
}
@media(max-width: 1000px) {
	.date__year {
	  font-size: 1.25rem;
	  color: #666;
	  font-weight: 600;
	  padding-bottom: 2rem;
	  display: block;
	}
	.half__height-image {
	  width: 100%;
	  display: block;
	  height: 250px;
	  margin-bottom: 2rem;
	}
}
</style>

<?php get_footer(); ?>
