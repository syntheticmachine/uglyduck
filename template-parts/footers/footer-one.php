<?php
$footerBackground = get_field('background_color', 'options');
$textColor = get_field('text_color', 'options');
$linkColor = get_field('link_color', 'options');
$darkUI = get_field('dark_ui', 'options');
?>

<footer class="footer__one">
	<div class="container">
		<div class="row">
			<?php if(is_active_sidebar( 'footer_one' )) : ?>
				<div class="col-md footer__block">
					<?php dynamic_sidebar( 'footer_one' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_two' )) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer_two' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_three' )) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer_three' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_four' )) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer_four' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_five' )) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer_five' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_six' )) : ?>
				<div class="col-md">
					<?php dynamic_sidebar( 'footer_six' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="company__info">
		<div class="container">
			<div class="row">
				<div class="col col-sm text-center">
					<p>© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?><span>|</span>Created By <a href="https://uglyduckmarketing.com/" target="_blank">UDM</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<style>
<?php if($footerBackground) : ?> footer { background-color: <?php echo $footerBackground; ?> !important; } <?php endif; ?>
<?php if($textColor) : ?> footer p { color: <?php echo $textColor; ?> !important; } <?php endif; ?>
<?php if($linkColor) : ?> footer ul li a { color: <?php echo $linkColor; ?> !important; } <?php endif; ?>
<?php if($darkUI) : ?>
	footer .company__info { border-top: 1px solid rgba(255,255,255,.075) !important; }
	footer .company__info span { color: rgba(255,255,255,.35) !important; }
<?php endif; ?>
</style>
