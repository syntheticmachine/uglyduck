<?php
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
$headerLogo = get_field('logo',$headerID);
?>
<header class="d-lg-none mobile__header-one">
	<div class="container">
		<div class="row align-items-center">
			<div class="col mobile__logo">
				<a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo $headerLogo; ?>" alt="Back To Homepage" />
        </a>
			</div>
			<div class="col text-right">
				<i class="ion-android-menu mobile__header-trigger"></i>
			</div>
		</div>
	</div>
</header>

<style>
.mobile__header-one {
	position: relative;
	top: 0;
	left: 0;
	width: 100%;
	background: white;
	padding: .75rem 0;
	z-index: 5;
	border-bottom: 1px solid rgba(0,0,0,.1);
}
.mobile__header-one i {
	font-size: 2rem;
	line-height: 1;
}
.mobile__logo img {
	max-height: 35px;
}
.mobile__header-one .container {
	max-width: 100%;
	padding: 0 1.5rem;
}
</style>
<script>
jQuery(document).ready(function($) {
	$('.mobile__header-trigger').click(function() {
		$(this).toggleClass('ion-android-close');
		$(this).toggleClass('ion-android-menu');
	});
});
</script>
