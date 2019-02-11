<?php get_header(); ?>
<?php
global $current_user;
get_currentuserinfo();
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
          <div class="col-md-6">
            <div class="row align-items-center">
              <div class="col-md-auto border-right">
                <div class="single__one-author-image">
                  <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                </div>
                <div class="single__one-author">
                  <span class="written-by">Written By</span><br />
									<?php if($current_user->user_firstname) {
										echo '<span class="name">' . $current_user->user_firstname . ' ' . $current_user->user_lastname . '</span> ';
									} else {
										echo '<span class="name">' . get_the_author() . '</span>';
									} ?>
                </div>
              </div>
              <div class="col-md-auto">
                <strong><?php the_time('F jS, Y') ?></strong><br />
                <span class="posted__in">Posted in <a href="#"><?php the_category(', ') ?></a></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-right single__one-share">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo bloginfo('url') . $_SERVER['REQUEST_URI']; ?>" target="_blank"><i class="ion-social-facebook"></i></a>
            <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank"><i class="ion-social-twitter"></i></a>
            <a href="mailto:?subject=<?php the_title(); ?>"><i class="ion-android-mail"></i></a>
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

<?php get_footer(); ?>
