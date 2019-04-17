<?php
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
$headerLogo = get_field('logo',$headerID);
$headerClasses = get_field('header_classes',$headerID);
$headerBackground = get_field('background_color',$headerID);
$headerLink = get_field('link_color',$headerID);
$headerLinkHover = get_field('link_hover_color',$headerID);
$submenuBackground = get_field('submenu_background_color', $headerID);
$submenuLink = get_field('submenu_link_color', $headerID);
$submenuLinkHover = get_field('submenu_link_hover_color', $headerID);
$headerWidgets = get_field('header_widgets', $headerID);
$navLocation = get_field('nav_location', $headerID);
if($navLocation) {$nav = 'right';} else { $nav = 'left';}
?>
<header class="d-none d-lg-block header__basic header__hamburger <?php foreach($headerClasses as $headerClass ): echo $headerClass . ' '; endforeach; ?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-auto logo">
        <a href="<?php bloginfo('url'); ?>">
          <?php if($headerLogo) : ?>
            <img src="<?php echo $headerLogo; ?>" alt="Back To Homepage" />
          <?php endif; ?>
        </a>
      </div>
			<div class="col text-right">
				<?php if($headerWidgets) : ?>
					<?php foreach($headerWidgets as $headerWidget ): get_template_part( 'template-parts/widgets/header', $headerWidget ); endforeach; ?>
				<?php endif; ?>
				<div id="header__hamburger-icon">
					<input type="checkbox" />
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
    </div>
  </div>
</header>

<div class="header__hamburger-filter"></div>

<div class="header__hamburger-menu">
	<nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
</div>

<style>
<?php if($headerBackground) : ?> header { background: <?php echo $headerBackground; ?> !important; } <?php endif; ?>
<?php if($headerLink) : ?> header nav li a { color: <?php echo $headerLink; ?> !important; } <?php endif; ?>
<?php if($headerLinkHover) : ?> header nav li a:hover { color: <?php echo $headerLinkHover; ?> !important; } <?php endif; ?>
<?php if($submenuBackground) : ?> header.header__basic .sub-menu { background: <?php echo $submenuBackground; ?> !important; } <?php endif; ?>
<?php if($submenuLink) : ?> header.header__basic .sub-menu li a { color: <?php echo $submenuLink; ?> !important; } <?php endif; ?>
<?php if($submenuLinkHover) : ?> header.header__basic .sub-menu li a:hover { color: <?php echo $submenuLinkHover; ?> !important; }
<?php else : ?>header.header__basic .sub-menu li a:hover { color: var(--primary) !important; } <?php endif; ?>

#header__hamburger-icon {
  display: block;
  position: relative;
  z-index: 1;
  -webkit-user-select: none;
  user-select: none;
  float: right;
  margin-left: 3rem;
  transform: translateY(3px);
}
#header__hamburger-icon input {
	display: block;
	width: 40px;
	height: 32px;
	position: absolute;
	top: -7px;
	left: -5px;
	cursor: pointer;
	opacity: 0;
	z-index: 2;
	-webkit-touch-callout: none;
}
#header__hamburger-icon span {
	display: block;
	width: 25px;
	height: 2px;
	margin-bottom: 5px;
	position: relative;
	background: #101010;
	z-index: 1;
	transform-origin: 4px 0px;
	transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0), background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0), opacity 0.55s ease;
}
#header__hamburger-icon span:first-child {
	transform-origin: 0% 0%;
}
#header__hamburger-icon span:nth-last-child(2) {
	transform-origin: 0% 100%;
}
#header__hamburger-icon input:checked~span {
	opacity: 1;
	transform: rotate(-45deg) translate(-2px, -1px);
	background: #101010 !important;
}
#header__hamburger-icon input:checked~span:nth-last-child(3) {
	opacity: 0;
	transform: rotate(0deg) scale(0.2, 0.2);
}
#header__hamburger-icon input:checked~span:nth-last-child(2) {
	transform: rotate(45deg) translate(-6px, -5px);
}
header.header__basic.transparent #header__hamburger-icon span {
	background: white;
}

.header__hamburger-menu {
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  z-index: 5;
  background: white;
  height: 100%;
	padding: 0;
  padding-top: 8.5rem;
	transition-timing-function: cubic-bezier(0.77, 0.2, 0.05, 1.0);
	transition: all .45s;
}
.header__hamburger-menu.toggled {
	right: 0;
}
.header__hamburger-menu .sub-menu {
  display: none;
  background: #f9f9f9;
  padding: 1.25rem 0;
  margin-left: -15%;
  margin-right: -15%;
  margin-bottom: 2rem;
  border-top: 1px solid rgba(0,0,0,.1);
  border-bottom: 1px solid rgba(0,0,0,.1);
  padding-bottom: 0;
}
.header__hamburger-menu ul {
	padding-left: 0;
}
.header__hamburger-menu ul li {
	list-style: none;
	display: block;
	width: 100%;
	padding: 0 3rem;
	position: relative;
}
.header__hamburger-menu ul .menu-item-has-children::after {
  content: "\f3d0";
  font-family: "Ionicons";
  position: absolute;
  right: 2.5rem;
  top: 0;
}
.header__hamburger-menu ul li a {
	color: #101010;
	font-size: 1.25rem;
	display: block;
	margin-bottom: 1.25rem;
	transition: all .3s ease;
}
.header__hamburger-menu .sub-menu li a {
	font-size: .9rem;
}
.header__hamburger-menu ul li a:hover {
	color: var(--primary);
	text-decoration: none;
}
.header__hamburger-menu ul li a.primary-color {
	color: var(--primary);
}

.header__hamburger-filter {
	background: rgba(0,0,0,.75);
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 4;
	display: none;
}

body.noverflow {
	overflow: hidden;
}



</style>

<script>
jQuery(document).ready(function($) {
	$('#header__hamburger-icon').click(function() {
		$('.header__hamburger-filter').fadeToggle();
		$('body').toggleClass('noverflow');
		$('.header__hamburger-menu').toggleClass('toggled');
	});
	$('.header__hamburger-menu ul .menu-item-has-children').click(function() {
		$(this).find('.sub-menu').slideToggle();
		$(this).children('a').toggleClass('primary-color');
	});
});
</script>
