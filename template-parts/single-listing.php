<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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

<main>

	<div class="siema">
		<img src="<?php echo $featuredImage; ?>" />
		<?php foreach($gallery as $img) {
			echo '<img src="' . $img['url'] . '"/>';
		} ?>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-md-9 whitebox">
				<p class="<?php echo $statusClass; ?> status"><?php echo $status; ?></p>
				<h1><?php the_title(); ?></h1><br />
				<h3><?php echo $price; ?></h3><br />
				<p><strong>Property Type: </strong><?php echo $propertyType; ?></p>

				<p><strong>Description</strong></p><?php echo $description; ?><br />

				<br /><br />
				<div class="row">
					<?php foreach($propertyInformation as $key => $value) {
						if($value != null) {
							echo "<div class='col-6'><p class='" . strtolower($key) . "'><strong>" . $key .  ":</strong> " . $value . '</p><br /></div>';
						}
					} ?>
				</div>

				<div id="map"></div>
			</div>

			<div class="col-md-3 text-center whitebox border-left">
				<?php

				$agent_info = get_field('select_agent');

				if( $agent_info ):

					// override $post
					$post = $agent_info;
					setup_postdata( $post );

					?>

				    <div class="agent__info">
				    	<h3><?php the_title(); ?></h3>
				    	<img class="agent__info-headshot" src="<?php the_field('headshot'); ?>" />
				    </div>

				    <?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>


		</div>
	</div>
</main>

<style>
body {
	background-color: #F9F9F9;
}
main {
	overflow-x: hidden;
}
header, footer, header .container {
	position: relative;
}
.status {
  font-size: .75rem;
  color: white;
  display: inline-block;
  padding: 2px 14px;
  border-radius: 100px;
  text-transform: uppercase;
  letter-spacing: 2px;
	font-weight: 600;
}
.active {
	background: #20C063;
}
.sold {
	background: #EE2E23;
}
.lot::after, .sqft::after {
	content: ' sqft.'
}
.siema img {
	max-height: 550px;
	height: 550px;
	width: auto !important;
	padding-right: 5px;
}
#map {
  height: 420px;
  min-height: 420px;
  display: block;
  width: 100%;
	margin-top: 3rem;
}
.agent__info-headshot {
	border-radius: 100pc;
	width: 50%;
	margin-top: 2rem;
	border: 5px solid black;
}
.siema {
	margin-bottom: -2rem;
}
.slick-prev {
  display: inline-block;
  position: absolute;
  z-index: 2;
  top: 48%;
  left: 20px;
	display: block;
	width: 40px;
	height: 40px;
	border-radius: 100pc;
	padding-right: 9px;
	background: rgba(255,255,255,.7);
	border: none;
	cursor: pointer !important;
	transition: all .3s ease;
}
.slick-next {
  display: inline-block;
  position: absolute;
  z-index: 2;
  top: 48%;
  right: 20px;
	display: block;
	width: 40px;
	height: 40px;
	border-radius: 100pc;
	padding-left: 9px;
	background: rgba(255,255,255,.7);
	border: none;
	cursor: pointer !important;
	transition: all .3s ease;
}
.slick-next:hover, .slick-prev:hover {
	transform: translateY(-4px);
	box-shadow: 0 0 30px 0 rgba(0,0,0,.25);
	background: white;
}
.whitebox {
	background: white;
	padding: 2rem;
}
.fullwidth-hero-3 {
	display: none !important;
}
</style>

<script>
	function initMap() {
		var myLatLng = {lat: <?php echo $location['lat']; ?>, lng: <?php echo $location['lng']; ?>};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 18,
			center: myLatLng,
			styles: [
		    {
		        "featureType": "water",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#e9e9e9"
		            },
		            {
		                "lightness": 17
		            }
		        ]
		    },
		    {
		        "featureType": "landscape",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#f5f5f5"
		            },
		            {
		                "lightness": 20
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "geometry.fill",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 17
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 29
		            },
		            {
		                "weight": 0.2
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 18
		            }
		        ]
		    },
		    {
		        "featureType": "road.local",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 16
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#f5f5f5"
		            },
		            {
		                "lightness": 21
		            }
		        ]
		    },
		    {
		        "featureType": "poi.park",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#dedede"
		            },
		            {
		                "lightness": 21
		            }
		        ]
		    },
		    {
		        "elementType": "labels.text.stroke",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 16
		            }
		        ]
		    },
		    {
		        "elementType": "labels.text.fill",
		        "stylers": [
		            {
		                "saturation": 36
		            },
		            {
		                "color": "#333333"
		            },
		            {
		                "lightness": 40
		            }
		        ]
		    },
		    {
		        "elementType": "labels.icon",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "transit",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#f2f2f2"
		            },
		            {
		                "lightness": 19
		            }
		        ]
		    },
		    {
		        "featureType": "administrative",
		        "elementType": "geometry.fill",
		        "stylers": [
		            {
		                "color": "#fefefe"
		            },
		            {
		                "lightness": 20
		            }
		        ]
		    },
		    {
		        "featureType": "administrative",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "color": "#fefefe"
		            },
		            {
		                "lightness": 17
		            },
		            {
		                "weight": 1.2
		            }
		        ]
		    }
		]
		});
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
		});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUeHHiJuirgrgubX8ghvg4lhlVIayloDc&callback=initMap"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
jQuery(document).ready(function($) {
	$('.siema').slick({
		dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  centerMode: false,
	  variableWidth: true,
		autoplay: true,
  	autoplaySpeed: 4000,
		prevArrow: '<button type="button" class="slick-prev"><i class="ion-chevron-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="ion-chevron-right"></i></button>',
	});
});
</script>

<?php get_footer(); ?>
