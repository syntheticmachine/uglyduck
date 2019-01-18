<?php
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
$headerLogo = get_field('logo',$headerID);
$headerClasses = get_field('header_classes',$headerID);
$headerBackground = get_field('background_color',$headerID);
$headerLink = get_field('link_color',$headerID);
$headerLinkHover = get_field('link_hover_color',$headerID);
$headerWidgets = get_field('header_widgets', $headerID);
?>
<header class="d-none d-md-block header__stacked <?php foreach($headerClasses as $headerClass ): echo $headerClass . ' '; endforeach; ?>">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-auto logo">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo $headerLogo; ?>" alt="Back To Homepage" />
        </a>
      </div>
      <div class="col text-right">
        <div class="topbar">
          <?php foreach($headerWidgets as $headerWidget ): get_template_part( 'template-parts/widgets/header', $headerWidget ); endforeach; ?>
        </div>
        <nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
      </div>
    </div>
  </div>
</header>

<style>
<?php if($headerBackground) : ?> header { background: <?php echo $headerBackground; ?> !important; } <?php endif; ?>
<?php if($headerLink) : ?> header nav li a { color: <?php echo $headerLink; ?> !important; } <?php endif; ?>
<?php if($headerLinkHover) : ?> header nav li a:hover { color: <?php echo $headerLinkHover; ?> !important; } <?php endif; ?>
</style>
