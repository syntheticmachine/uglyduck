<?php get_header(); ?>
<?php

?>
<main class="blog__one">
	<div class="container">
		<div class="row">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); // Image SRC
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

<style>
main {
	padding: 3.5rem 0;
	padding-top: 9rem;
}
.blog__one-card {
	margin-bottom: 2.5rem;
}
.blog__one-container {
	height: 450px;
  display: block;
	background: #252525;
	position: relative;
	overflow: hidden;
	border-radius: 5px;
	transition: all .3s ease;
	box-shadow: 0 1px 0 rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.05), 0 5px 15px rgba(0,0,0,.05);
}
.blog__one-container:hover {
	cursor: pointer;
	box-shadow: 0 30px 60px -12px rgba(50,50,93,.15), 0 18px 36px -18px rgba(0,0,0,.25);
	transform: translateY(-0.5rem);
}
.blog__one-image {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-size: cover;
	background-position: center;
	transition: transform 8s, opacity .3s ease;
	z-index: 2;
	opacity: .65;
}
.blog__one-content {
	position: absolute;
	left: 2.45rem;
	bottom: 2.45rem;
	z-index: 3;
	transition: all .3s ease;
}
.blog__one-date {
	color: rgba(255,255,255,.85);
	font-size: .95rem;
  font-weight: 500;
  display: block;
  margin-bottom: .35rem;
}
.blog__one-read {
  color: var(--primary);
  font-size: 1rem;
  font-weight: 600;
  position: absolute;
  margin-top: 1rem;
  opacity: 0;
  transition: all .3s ease;
}
.blog__one-read i {
	margin-left: .25rem;
	display: inline-block;
	transition: all .3s ease;
	transition-delay: .075s;
	color: white;
}
.blog__one-title {
  color: white;
  max-width: 85%;
  font-weight: 600;
  font-size: 2rem;
}
.blog__one-container:hover .blog__one-image {
	transform: scale(1.1);
	opacity: .35;
}
.blog__one-container:hover .blog__one-content {
	bottom: 5rem;
}
.blog__one-container:hover .blog__one-read {
	opacity: 1;
}
.blog__one-container:hover .blog__one-read i {
	margin-left: 1rem;
}
.blog__one-card:nth-child(1), .blog__one-card:nth-child(7) {
	flex: 0 0 66.666667%;
	max-width: 66.666667%;
}
.blog__one-card:nth-child(1) .blog__one-title, .blog__one-card:nth-child(7) .blog__one-title {
  max-width: 70%;
  font-size: 2.25rem;
}
/* Blog One - Mobile
----------------------------------------- */
@media(max-width: 992px) {
	.blog__one-container {
		height: 350px;
	}
	.blog__one-card:nth-child(1) {
		flex: 0 0 100%;
		max-width: 100%;
	}
	.blog__one-card:nth-child(7) {
		flex: 0 0 50%;
		max-width: 50%;
	}
	.blog__one-card:nth-child(1) .blog__one-title, .blog__one-card:nth-child(7) .blog__one-title, .blog__one-title {
	  color: white;
	  max-width: 80%;
	  font-weight: 600;
	  font-size: 1.95rem;
	}
}
@media(max-width: 768px) {
	.blog__one-container {
		height: 275px;
	}
	.blog__one-card {
		margin-bottom: 1.75rem;
	}
	.blog__one-content {
	  position: absolute;
	  left: 2rem;
	  bottom: 2rem;
	}
	.blog__one-card:nth-child(7) {
		flex: 0 0 100%;
		max-width: 100%;
	}
	.blog__one-card:nth-child(1) .blog__one-title, .blog__one-card:nth-child(7) .blog__one-title, .blog__one-title {
	  max-width: 85%;
	  font-size: 1.75rem;
	  line-height: 1.2;
	}
	.blog__one-image {
		opacity: .5;
	}
	.blog__one-content {
		bottom: 5rem;
	}
	.blog__one-read {
		opacity: 1;
	}
	.blog__one-read i {
		margin-left: 1rem;
	}
}
</style>
<?php get_footer(); ?>
