<?php
/**
 * The template for displaying 404 pages (not found).
 * @package uglyduck
 */

get_header(); ?>

<main>
	<div class="container">
		<div class="row h-100 align-content-center">
			<div class="text-center">
				<h1>Oops, nothing to display here.</h1>
				<p>You might have better luck on the <a href="<?php bloginfo('url'); ?>">homepage</a>.
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
