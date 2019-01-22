<?php get_header(); ?>
<?php
$thumbnail_id = get_post_thumbnail_id( $post->ID ); // Post Image ID
$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); // Image SRC
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); // The Alt Tag
$title = get_post(get_post_thumbnail_id())->post_title; //The Title
$caption = get_post(get_post_thumbnail_id())->post_excerpt; //The Caption
$description = get_post(get_post_thumbnail_id())->post_content; // The Description
?>

<main class="single__one mt-5">
	<div class="container">
		<div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-lg-8 offset-lg-2">
				<span class="single__one-category"><?php the_category(', ') ?></span>
				<h1 class="single__one-title"><?php the_title(); ?></h1>
        <div class="row align-items-center">
          <div class="col-6">
            <div class="row align-items-center">
              <div class="col-md-auto border-right">
                <div class="single__one-author-image">
                  <img src="http://genfkd.wpengine.netdna-cdn.com/wp-content/uploads/2018/05/shutterstock_793117360-503x518.jpg" />
                </div>
                <div class="single__one-author">
                  <span class="written-by">Written By</span><br />
                  <span class="name"><?php the_author(); ?></span>
                </div>
              </div>
              <div class="col-md-auto">
                <strong><?php the_time('F jS, Y') ?></strong><br />
                <span class="posted__in">Posted in <a href="#"><?php the_category(', ') ?></a></span>
              </div>
            </div>
          </div>
          <div class="col-6 text-right single__one-share">
            <a href="#"><i class="ion-social-facebook"></i></a>
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-android-mail"></i></a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="single__one-featured" style="background-image: url(<?php echo $img[0]; ?>);"></div>
        <figure class="featured__image">
          <img src="<?php echo isset($img[0]) ? $img[0] : ''; ?>" alt="<?php echo isset($alt) ? $alt : ''; ?>" title="<?php echo isset($title) ? $title : ''; ?>" />
          <figcaption><?php echo isset($caption) ? $caption : ''; ?></figcaption>
        </figure>
      </div>
      <div class="col-lg-8 offset-lg-2">
				<div class="single__one-content">
          <?php the_content(); ?>
				</div>
			</div>
      <?php endwhile; endif; ?>
		</div>
	</div>
</main>

<style>
/* Single One
----------------------------------------- */

h1, h2, h3, h4, h5 {
  font-weight: 600;
  margin-bottom: 1.5rem;
}
a {
  color: var(--primary);
}
main {
	padding: 4.5rem 0;
  padding-top: 6rem;
}
.single__one-category {
	color: var(--primary);
	font-weight: 500;
	display: block;
	margin-bottom: .75rem;
}
.single__one-featured {
  display: block;
  height: 650px;
  width: 100%;
  background-position: center;
  background-size: cover;
  margin: 3.5rem 0;
  margin-bottom: 0;
}
.featured__image img {
  visibility: hidden;
  pointer-events: none;
  height: 0;
  width: 0;
}
.featured__image figcaption {
  margin-bottom: 3.5rem;
  display: block;
  margin-top: -14px;
  font-size: 12px;
  font-weight: 600;
  text-align: right;
}
.single__one-author-image {
  width: 50px;
  height: 50px;
  display: block;
  position: relative;
  overflow: hidden;
  border-radius: 100pc;
  border: 3px solid var(--primary);
  text-align: center;
  display: inline-block;
  margin-right: .5rem;
}
.single__one-author-image img {
  max-width: 50px;
  position: absolute;
  left: -2px;
  right: 0;
  margin: 0 auto;
  top: 55%;
  transform: translateY(-50%);
}
.single__one-author {
  display: inline-block;
  transform: translateY(-10px);
}
.single__one-author .written-by {
  font-size: 12px;
  color: #b1b1b1;
  font-weight: 500;
}
.single__one-author .name {
  font-weight: 600;
  font-size: 15px;
  margin-top: -4px;
  display: block;
}
.single__one-title {
	font-weight: 600;
  margin-bottom: 1.75rem;
}
.single__one-content p {
  color: #222;
  text-rendering: optimizeLegibility;
  font-family: 'Source Serif Pro', serif;
  font-size: 1.2rem;
  line-height: 1.75;
  margin-bottom: 2.5rem;
}
.single__one-content a {
	color: #222;
	box-shadow: inset 0 -2px 0 var(--primary);
	text-decoration: none;
	transition: all .3s ease;
}
.single__one-content a:hover {
	box-shadow: inset 0 -25px 0 var(--primary);
	text-decoration: none;
}
.single__one-content img {
	max-width: 100%;
	margin-bottom: 2.5rem;
}
.single__one-share a {
  border: 1px solid #dcdcdc;
  text-align: center;
  width: 45px;
  height: 45px;
  padding-top: 10px;
  display: inline-block;
  color: var(--primary);
  transition: all .3s ease;
}
.single__one-share a:hover {
  color: white;
  background: var(--primary);
}
.posted__in {
  display: block;
  font-size: .85rem;
  margin-top: 0;
}
/* Single One - Mobile
----------------------------------------- */
@media(max-width: 768px) {
	.single__one-featured {
	  height: 225px;
	}
}
</style>
<?php get_footer(); ?>
