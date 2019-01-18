<?php
get_header();
get_template_part( 'template-parts/content', 'hero' ); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="row">
          <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
