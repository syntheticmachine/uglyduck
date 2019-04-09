<?php /* Template Name: Featured Listings */ ?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<main>
	<div class="container">
		<div class="row">
			<?php $loop = new WP_Query( array( 'post_type' => 'listing', 'per_page' => 999 ) ); if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<?php
					// Listing Information
						setlocale(LC_MONETARY, 'en_US.UTF-8');
						$location = get_field('location');
						$price = money_format('%.0n', preg_replace('/[^A-Za-z0-9\-]/', '', get_field('price'))) . "\n";
						$description = get_field('description');
						$featuredImage = get_field('featured_image');
						$gallery = get_field('gallery');
						$salesFlier = get_field('sales_flier');
						$stories = (get_field('number_of_stories') == 1 ? 'Two' : 'One');
						$propertyType = (get_field('property_type') == 1 ? 'Commercial' : 'Residential');
						$status = (get_field('status') == 1 ? 'Active' : 'Sold');
						$statusClass = strtolower($status);
						if($propertyType == 'Residential') { $pool = (get_field('pool') == 1 ? 'Yes' : 'No'); }
						$propertyInformation = array(
					// Residential Fields
							'Beds' => get_field('beds'),
							'Baths' => get_field('baths'),
							'SQFT' => get_field('sqft'),
							'Pool' => $pool,
							'Garage Spaces' => get_field('garage_spaces'),
					// Commercial Fields
							'Number Of Units' => get_field('number_of_units'),
							'Stories' => $stories,
							'Zoning Type' => get_field('zoning_type'),
							'Building Class' => get_field('building_class'),
							'Cap Rate' => get_field('cap_rate'),
							'Lot Size' => get_field('lot_size'),
							'Rentable Building Areas' => get_field('rentable_building_area'),
						);
					?>

					<div class="col-lg-4 col-md-6 col-sm-12 single__property">
						<a href="<?php the_permalink(); ?>" class="property__card">
							<div class="property__card-image" style="background-image: url(<?php echo $featuredImage; ?>);">
								<span class="status <?php echo $statusClass; ?>"><?php echo $status; ?></span>
							</div>
							<div class="property__card-detail">
								<p class="property__card-price"><?php echo $price; ?></p>
							</div>
							<div class="property__card-detail">
								<p class="property__card-title"><?php the_title(); ?></p>
								<p class="property__card-location">Bakersfield, CA 93301</p>
							</div>
						</a>
					</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</main>

<style>
body {
	background: #F9F9F9;
}
.single__property {
	margin-bottom: 2rem;
}
.property__card {
	border: 1px solid rgba(0,0,0,.1);
	display: block;
	color: var(--global_dark-color);
	transition: all .3s ease;
	background: white;
}
.property__card:hover {
	color: var(--global_dark-color);
	transform: translateY(-5px);
	box-shadow: 0 0 35px 0 rgba(0,0,0,.15);
}
.property__card-image {
	width: 100%;
	height: 250px;
	background-position: center;
	background-size: cover;
	position: relative;
	overflow: hidden;
}
.property__card-detail {
	padding: 1rem;
	border-top: 1px solid rgba(0,0,0,.1);
}
.property__card-price {
  margin-top: 0;
  margin-bottom: 0;
  font-weight: 600;
}
.property__card-title, .property__card-location {
  font-size: .95rem;
  font-weight: 500;
  margin-bottom: 0;
	color: rgba(0,0,0,.75);
}
footer {
	margin-top: 4.5rem;
}
.status {
  color: white;
  position: absolute;
  top: 10px;
  right: 10px;
  padding: 4px 16px;
  font-size: .9rem;
  border-radius: 100pc;
}
.sold {
	background: #EE2E23;
}
.active {
	background: #20c063;
}
</style>

<?php get_footer(); ?>
