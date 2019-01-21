<?php
get_header();
get_template_part( 'template-parts/content', 'hero' ); ?>
<main class="single__one">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<span class="single__one-category">Design</span>
				<h1 class="single__one-title">Essential Tools For Personal Home Landscaping.</h1>
        <div class="row align-items-center">
          <div class="col-6">
            <div class="row align-items-center">
              <div class="col-md-auto border-right">
                <div class="single__one-author-image">
                  <img src="http://genfkd.wpengine.netdna-cdn.com/wp-content/uploads/2018/05/shutterstock_793117360-503x518.jpg" />
                </div>
                <div class="single__one-author">
                  <span class="written-by">Written By</span><br />
                  <span class="name">Nick Campbell</span>
                </div>
              </div>
              <div class="col-md-auto">
                <strong>January 12th, 2018</strong><br />
                <span class="posted__in">Posted in <a href="#">Design</a></span>
              </div>
            </div>
          </div>
          <div class="col-6 text-right single__one-share">
            <a href="#"><i class="ion-social-facebook"></i></a>
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-android-mail"></i></a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="single__one-featured" style="background-image: url(../../assets/images/blog-9.jpg);"></div>
        <figure class="featured__image">
          <img src="../../assets/images/blog-6.jpg" alt="Landscaping Supplies" />
          <figcaption>Botanical Gardens - Trulli, Puglia, Italy.</figcaption>
        </figure>
      </div>
      <div class="col-lg-8 offset-lg-2">
				<div class="single__one-content">
          <h2>The right tools for the job.</h2>
					<p>
						Before last month, you’d be hard-pressed to find the curiously shaped letters you’re asked to name from charts at your optometrist’s office in font lists in Word or Docs. But if you’re a <a href="#">typeface nerd</a> who also appreciates mathematical precision, the newly minted “Optician Sans” is the font for you.
					</p>
					<p>
						<a href="#">Fast Company</a> spoke with the design firm ANTI Hamar, the creator of the font, about the neat typeface made available for free last month. The project began as a rebranding commission from the Norwegian family eyecare business Optician-K. According to Fast Company, the design firm used the history of optometry as a springboard for inspiration, leading them to the pioneering letter designs developed by Dutch eye doctor <a href="#">Hermann Snellen</a> in 1862 for his Snellen chart, which used mathematical precision to zero in on a patient’s visual acuity. Snellen did this by applying a 5 x 5 grid as the foundation for a total of 10 letters used in his tests.
					</p>
          <img src="../../assets/images/blog-7.jpg" />
          <h3>Take Climate Action by Transforming Your Lawn with Seasonal Landscaping.</h3>
					<p>
						In 1959, those 10 letters were given a reboot by American ophthalmologist Louise Sloan. She overhauled the letters to exclude Snellen’s serifs—those little protruding details like in the “E” shown above—giving them a much cleaner and contemporary feel. Those were later for developed for the <a href="#">standardized Logarithm of the Minimum Angle of Resolution (LogMAR) tests</a> now used by eye care professionals across the globe.
					</p>
					<p>
						ANTI Hamar aimed to revamp the Optician-K brand using Sloan’s designs, according to Fast Company, but there were only 10 to pull from—and only a single vowel. So they designed a comprehensive alphabet, with characters and numbers to boot, inspired by Snellen’s original 5 x 5 grid design.
					</p>
          <img src="../../assets/images/blog-4.jpg" />
          <p>
            In 1959, those 10 letters were given a reboot by American ophthalmologist Louise Sloan. She overhauled the letters to exclude Snellen’s serifs—those little protruding details like in the “E” shown above—giving them a much cleaner and contemporary feel. Those were later for developed for the <a href="#">standardized Logarithm of the Minimum Angle of Resolution (LogMAR) tests</a> now used by eye care professionals across the globe.
          </p>
          <p>
            ANTI Hamar aimed to revamp the Optician-K brand using Sloan’s designs, according to Fast Company, but there were only 10 to pull from—and only a single vowel. So they designed a comprehensive alphabet, with characters and numbers to boot, inspired by Snellen’s original 5 x 5 grid design.
          </p>
				</div>
			</div>
		</div>
	</div>
</main>

<style>
/* Single One
----------------------------------------- */
:root {
  --primary: #21CB5A; /* Temporary to test CSS variables */
  --secondary: #d2b589; /* Temporary to test CSS variables */
}
html, body {
  font-family: 'Barlow', sans-serif;
}
h1, h2, h3, h4, h5 {
  font-weight: 600;
  margin-bottom: 1.5rem;
}
a {
  color: var(--primary);
}
main {
	padding: 4.5rem 0;
}
.single__one-category {
	color: var(--primary);
	font-weight: 500;
	display: block;
	margin-bottom: .75rem;
}
.single__one-featured {
  display: block;
  height: 650px;
  width: 100%;
  background-position: center;
  background-size: cover;
  margin: 3.5rem 0;
  margin-bottom: 0;
}
.featured__image img {
  visibility: hidden;
  pointer-events: none;
  height: 0;
  width: 0;
}
.featured__image figcaption {
  margin-bottom: 3.5rem;
  display: block;
  margin-top: -14px;
  font-size: 12px;
  font-weight: 600;
  text-align: right;
}
.single__one-author-image {
  width: 50px;
  height: 50px;
  display: block;
  position: relative;
  overflow: hidden;
  border-radius: 100pc;
  border: 3px solid var(--primary);
  text-align: center;
  display: inline-block;
  margin-right: .5rem;
}
.single__one-author-image img {
  max-width: 50px;
  position: absolute;
  left: -2px;
  right: 0;
  margin: 0 auto;
  top: 55%;
  transform: translateY(-50%);
}
.single__one-author {
  display: inline-block;
  transform: translateY(-10px);
}
.single__one-author .written-by {
  font-size: 12px;
  color: #b1b1b1;
  font-weight: 500;
}
.single__one-author .name {
  font-weight: 600;
  font-size: 15px;
  margin-top: -4px;
  display: block;
}
.single__one-title {
	font-weight: 600;
  margin-bottom: 1.75rem;
}
.single__one-content p {
  color: #222;
  text-rendering: optimizeLegibility;
  font-family: 'Source Serif Pro', serif;
  font-size: 1.2rem;
  line-height: 1.75;
  margin-bottom: 2.5rem;
}
.single__one-content a {
	color: #222;
	box-shadow: inset 0 -2px 0 var(--primary);
	text-decoration: none;
	transition: all .3s ease;
}
.single__one-content a:hover {
	box-shadow: inset 0 -25px 0 var(--primary);
	text-decoration: none;
}
.single__one-content img {
	max-width: 100%;
	margin-bottom: 2.5rem;
}
.single__one-share a {
  border: 1px solid #dcdcdc;
  text-align: center;
  width: 45px;
  height: 45px;
  padding-top: 10px;
  display: inline-block;
  color: var(--primary);
  transition: all .3s ease;
}
.single__one-share a:hover {
  color: white;
  background: var(--primary);
}
.posted__in {
  display: block;
  font-size: .85rem;
  margin-top: 0;
}
/* Single One - Mobile
----------------------------------------- */
@media(max-width: 768px) {
	.single__one-featured {
	  height: 225px;
	}
}
</style>
<?php get_footer(); ?>
