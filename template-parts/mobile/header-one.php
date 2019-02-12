<?php
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
if(get_field('mobile_logo', 'options')) { $logo = get_field('mobile_logo', 'options'); } else { $logo = get_field('logo', $headerID); }
?>

<header class="d-lg-none mobile__header-one">
	<div class="container">
		<div class="row align-items-center">
			<div class="col mobile__logo">
				<a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo $logo; ?>" alt="Back To Homepage" />
        </a>
			</div>
			<div class="col text-right">
				<i class="ion-android-menu mobile__header-trigger"></i>
			</div>
		</div>
	</div>
</header>

<div class="d-lg-none mobile__navigation__one">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</div>

<script>
jQuery(document).ready(function($) {
	$('.mobile__header-trigger').click(function() {
		$('.mobile__navigation__one').toggleClass('mobile__navigation__one-visible');
		$(this).toggleClass('ion-android-close');
		$(this).toggleClass('ion-android-menu');
	});

	$('.mobile__navigation__one .sub-menu').prepend('<li class="mobile__title"><a>BACK</a></li>')
	$('.mobile__navigation__one .menu-item-has-children > a').click(function(e) {
		e.preventDefault();
		$('.mobile__title a').text($(this).text());
		$(this).next().addClass('visible__sub');
	});
	$('.mobile__title').click(function() {
		$('.sub-menu').removeClass('visible__sub');
	});

});
</script>
