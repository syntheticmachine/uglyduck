<?php
global $post;
if(get_field('hero_override')) { $heroID = get_field('hero_override'); } else { $heroID = get_field('default_hero','options'); }
$heroTemplate = get_field('hero_layout', $heroID);
get_template_part( 'template-parts/heroes/hero', $heroTemplate );
?>
