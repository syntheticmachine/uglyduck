<?php
	/* Template Name: Page Builder */
	get_header();
	get_template_part( 'template-parts/content', 'hero' );
?>

<main>
<?php if( have_rows('page_element') ): while ( have_rows('page_element') ) : the_row(); ?>

      <section style="background-color: <?php the_sub_field('background_color'); ?>; padding: 5rem 0;">
				<div class="container">
					<div class="row">
						<small><?php the_sub_field('eyebrow_text'); ?></small><br />
						<h1><?php the_sub_field('heading_title'); ?></h1><br />
						<p><?php the_sub_field('content'); ?></p>
					</div>
				</div>
			</section>

 <?php endwhile; endif; ?>
</main>

<style>
main {
	padding: 0 !important;
}
small, h1, p {
	display: block;
	width: 100%;
}
</style>
