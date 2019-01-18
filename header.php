<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
wp_head();
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
$headerTemplate = get_field('header_layout', $headerID);
?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/headers/header', $headerTemplate ); ?>
