<?php
if(get_field('header_override')) { $headerID = get_field('header_override'); } else { $headerID = get_field('default_header','options'); }
$textColor = get_field('phone_number_text_color', $headerID);
$iconColor = get_field('phone_number_icon_color', $headerID);
?>
<div class="top__widget header__phone text-<?php echo get_field('header_phone_alignment', $headerID); ?>">
	<div class="row">
		<?php if(get_field('phone_number_icon', $headerID)) : ?>
			<div class="col-auto">
				<i class="ion-android-call"></i>
			</div>
		<?php endif; ?>
		<div class="col-auto">
			<?php if(get_field('phone_number_text', $headerID)) : ?>
				<small class="header__phone-top"><?php the_field('phone_number_text', $headerID); ?></small>
			<?php endif; ?>
			<span class="header__phone-number"><?php echo get_field('phone_number', 'options'); ?></span>
		</div>
	</div>
</div>

<style>
.header__phone-top {
  color: var(--primary);
  display: block;
  font-size: .9rem;
  font-weight: 600;
}
.header__phone-number {
  display: block;
  font-weight: 700;
  font-size: 1.2rem;
}
.transparent .header__phone-number {
	color: white;
}
.header__phone i {
  font-size: 2rem;
  border-right: 1px solid rgba(0,0,0,.1);
  display: inline-block;
  padding-right: 1rem;
  margin-right: -.75rem;
	color: var(--primary);
}
<?php if($textColor) : ?> .header__phone-top { color: <?php echo $textColor; ?>; } <?php endif; ?>
<?php if($iconColor) : ?> .header__phone i { color: <?php echo $iconColor; ?>; } <?php endif; ?>
</style>
