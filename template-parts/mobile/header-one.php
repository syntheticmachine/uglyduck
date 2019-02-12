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

<div class="d-lg-none mobile__navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</div>

<style>
.mobile__header-one {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background: white;
	padding: .75rem 0;
	z-index: 5;
	border-bottom: 1px solid rgba(0,0,0,.1);
	max-height: 61px;
	overflow: hidden;
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
.mobile__navigation {
  position: fixed;
  height: 100%;
  width: 100%;
  background: white;
  z-index: 7;
  top: 60px;
	right: 0%;
	overflow: scroll;
	padding: 0;
	background: #f9f9f9;
	opacity: 0;
	pointer-events: none;
}
.mobile__navigation-visible {
  right: 0px;
  opacity: 1;
	pointer-events: auto;
}
.mobile__navigation ul {
	padding: 0;
}
.mobile__navigation li {
  display: block;
  width: 100%;
}
.mobile__navigation li a {
  display: block;
  width: 100%;
  padding: 19px;
  border-bottom: 1px solid rgba(0,0,0,.1);
  font-size: 14px;
  color: #212944;
  background: white;
  font-weight: 600;
  position: relative;
}
.mobile__navigation .menu-item-has-children a::after {
  content: "\f30f";
  font-family: "Ionicons";
  vertical-align: middle;
  padding-left: 14px;
  display: inline-block;
  margin-right: -10px;
  font-size: 18px;
  opacity: 1;
  float: right;
  background: transparent;
  color: #000 !important;
  text-align: center;
  padding: 16px 14px;
  position: absolute;
  height: 100%;
  top: 1px;
  right: 11px;
  width: 63px;
  border-left: 1px solid rgba(0,0,0,.1);
}
.mobile__navigation .sub-menu a::after {
	display: none;
}
.mobile__navigation .sub-menu {
  padding-left: 0px;
  background: white;
  position: fixed;
  top: 61px;
  height: 100%;
  width: 100%;
  z-index: 9;
	right: -100%;
	transition: all 600ms cubic-bezier(0.075, 0.82, 0.165, 1);
}
.visible__sub {
	right: 0 !important;
}
.mobile__title a {
	background: var(--primary) !important;
	border-bottom: none;
	color: white !important;
	padding-left: 85px !important;
	font-size: 18px !important;
}
.mobile__title a::before {
  content: "\f2ca";
  font-family: "Ionicons";
  vertical-align: middle;
  padding-left: 14px;
  transform: translateY(-1px);
  display: inline-block;
  margin-right: -10px;
  font-size: 22px;
  opacity: 1;
  float: right;
  background: rgba(0,0,0,.1);
  color: white !important;
  text-align: center;
  padding: 17px 14px;
  position: absolute;
  height: 100%;
  top: 1px;
  left: 0;
  width: 63px;
}
</style>
<script>
jQuery(document).ready(function($) {
	$('.mobile__header-trigger').click(function() {
		$('.mobile__navigation').toggleClass('mobile__navigation-visible');
		$(this).toggleClass('ion-android-close');
		$(this).toggleClass('ion-android-menu');
	});

	$('.mobile__navigation .sub-menu').prepend('<li class="mobile__title"><a>BACK</a></li>')
	$('.mobile__navigation .menu-item-has-children > a').click(function(e) {
		e.preventDefault();
		$('.mobile__title a').text($(this).text());
		$(this).next().addClass('visible__sub');
	});
	$('.mobile__title').click(function() {
		$('.sub-menu').removeClass('visible__sub');
	});

});
</script>
