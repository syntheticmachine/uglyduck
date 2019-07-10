<?php
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
$headerLogo = get_field('logo',$headerID);
$headerClasses = get_field('header_classes',$headerID);
$headerBackground = get_field('background_color',$headerID);
$navBackground = get_field('navigation_background_color', $headerID);
$submenuBackground = get_field('submenu_background_color', $headerID);
$submenuLink = get_field('submenu_link_color', $headerID);
$submenuLinkHover = get_field('submenu_link_hover_color', $headerID);
$headerLink = get_field('link_color',$headerID);
$headerLinkHover = get_field('link_hover_color',$headerID);
$headerWidgets = get_field('header_widgets', $headerID);
$navLocation = get_field('nav_location', $headerID);
if($navLocation) {$nav = 'right';} else { $nav = 'left';}
?>

<header class="d-none d-md-block header__four <?php foreach($headerClasses as $headerClass ): echo $headerClass . ' '; endforeach; ?>">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-auto logo">
				<a href="<?php bloginfo('url'); ?>">
					<?php if($headerLogo) : ?>
						<img src="<?php echo $headerLogo; ?>" alt="Back To Homepage" />
					<?php endif; ?>
				</a>
      </div>
      <div class="col text-right">
        <div class="topbar">
					<?php foreach($headerWidgets as $headerWidget ): get_template_part( 'template-parts/widgets/header', $headerWidget ); endforeach; ?>
        </div>
				<nav class="text-<?php echo $nav; ?>"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
      </div>
    </div>
  </div>
</header>

<style>
<?php if($headerBackground) : ?> header { background: <?php echo $headerBackground; ?> !important; } <?php endif; ?>
<?php if($navBackground) : ?> header.header__four .header__four-nav { background-color: <?php echo $navBackground; ?> !important; } <?php endif; ?>
<?php if($headerLink) : ?> header nav ul li a { color: <?php echo $headerLink; ?> !important; } <?php endif; ?>
<?php if($headerLinkHover) : ?> header nav ul li a:hover { color: <?php echo $headerLinkHover; ?> !important; } <?php endif; ?>
<?php if($submenuBackground) : ?> header.header__four .sub-menu { background: <?php echo $submenuBackground; ?> !important; } <?php endif; ?>
<?php if($submenuLink) : ?> header.header__four .sub-menu li a { color: <?php echo $submenuLink; ?> !important; } <?php endif; ?>
<?php if($submenuLinkHover) : ?> header.header__four .sub-menu li a:hover { color: <?php echo $submenuLinkHover; ?> !important; } <?php endif; ?>
<?php if(in_array("button", $headerWidgets)) : ?>
	header.header__four .topbar { margin-bottom: 0 !important; }
	header.header__four .logo img { transform: translateY(-5px) !important; }
<?php endif; ?>
</style>
