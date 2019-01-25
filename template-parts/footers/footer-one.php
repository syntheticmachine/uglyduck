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
				<div class="col">
					<?php dynamic_sidebar( 'footer_one' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_two' )) : ?>
				<div class="col">
					<?php dynamic_sidebar( 'footer_two' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_three' )) : ?>
				<div class="col">
					<?php dynamic_sidebar( 'footer_three' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_four' )) : ?>
				<div class="col">
					<?php dynamic_sidebar( 'footer_four' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_five' )) : ?>
				<div class="col">
					<?php dynamic_sidebar( 'footer_five' ); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar( 'footer_six' )) : ?>
				<div class="col">
					<?php dynamic_sidebar( 'footer_six' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="company__info">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<p>© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?><span>|</span>Created By <a href="https://uglyduckmarketing.com/" target="_blank">UDM</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<style>
footer {
	padding: 3.5rem 0;
	padding-bottom: 0;
	border-top: 1px solid rgba(0,0,0,.05);
}
footer img {
  max-height: 75px;
}
footer ul {
	padding: 0;
}
footer ul li {
	list-style: none;
}
footer ul li a {
	color: var(--global-dark);
	display: block;
	padding-bottom: .75rem;
	font-size: .865rem;
}
footer .widget__title {
  font-size: 1rem;
  color: var(--primary);
}
footer .company__info {
	border-top: 1px solid rgba(0,0,0,.05);
	padding: .75rem 0;
	font-size: .75rem;
	margin-top: 2.5rem;
}
footer .company__info p {
	margin-bottom: 0;
}
footer .company__info span {
	display: inline-block;
	margin: 0 .35rem;
	color: rgba(0,0,0,.165);
}
footer .company__info a {
	font-weight: 600;
	color: var(--primary);
}
</style>

<style>
<?php if($footerBackground) : ?> footer { background-color: <?php echo $footerBackground; ?> !important; } <?php endif; ?>
<?php if($textColor) : ?> footer p { color: <?php echo $textColor; ?> !important; } <?php endif; ?>
<?php if($linkColor) : ?> footer ul li a { color: <?php echo $linkColor; ?> !important; } <?php endif; ?>
<?php if($darkUI) : ?>
	footer .company__info { border-top: 1px solid rgba(255,255,255,.075) !important; }
	footer .company__info span { color: rgba(255,255,255,.35) !important; }
<?php endif; ?>
</style>
