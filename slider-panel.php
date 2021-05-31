<?php
/**
 * Plugin Name: Slider Panel!
 * Description: HTML Code.
 * Author: Raymond Thompson.
 * Version: 1.0.
 * Author URI: http://www.raythompsonwebdev.co.uk.
 *
 * @package Slider Panel
 */

/**
 * Slider Panel Shortcode *
 *
 * @param array  $atts array of values.
 * @return mixed
 *
 */

function raythompsonwebdev_com_slider_enqueue_style() {

	wp_enqueue_style( 'raythompsonwebdev_com_slider_style', plugins_url('/css/slider-panel.css',__FILE__ ) );
	
	
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_slider_enqueue_style' );




function sliderpanel_callback( $atts ) {		
	wp_enqueue_script( 'raythompsonwebdev_com_slider_script', plugins_url('/js/slider-panel-ES6.js', __FILE__ ) );
			

			$raythompsonwebdev_com_slider_panel_text = '[
				{
					"id": "0",
					"hash":"panel-1" ,
					"title": "Adobe Certified Associates",
					"header": "Visual Communication: Photoshop CS4",
					"subheader": "Topics",
					"task1": "Setting project requirements",
					"task2": "Identifying Design Elements",
					"task3": "Understanding Photoshop Interface",
					"task4": "Manipulating Images",
					"task5": "Evaluating Digital Images",
					"buttonname": "Adobe",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/Large-Photoshop-Certicate.webp"
				}, {
					"id": "1",
					"hash":"panel-2" ,
					"title": "ELATT",
					"header": "City & Guilds ITQ Level 1,2,3 Web Design",
					"subheader": "Topics",
					"task1": "Improving productivity using IT",
					"task2": "IT Communication Fundementals",
					"task3": "Adding Content",
					"task4": "IT User fundementals",
					"task5": "Organizing Content",
					"buttonname": "ELATT",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/ITQ-USERS-LEVEL3-LARGE.webp"
				}, {
					"id": "2",
					"hash":"panel-3" ,
					"title": "Codepen",
					"header": "Various",
					"subheader": "Topics",
					"task1": "Product Landing Page",
					"task2": "Technical Documentation Page",
					"task3": "WeatherApp",
					"task4": "Random Quote Generator",
					"task5": "Personal Portfolio",
					"buttonname": "Codepen",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/codepen-io-your-work-2020-10-17-22.webp"
				}, {
					"id": "3",
					"hash":"panel-4" ,
					"title": "FreeCodeCamp",
					"header": "Frontend Developer Certificate",
					"subheader": "Topics",
					"task1": "Basic HTML and HTML 5",
					"task2": "Basic CSS",
					"task3": "CSS Flexbox",
					"task4": "CSS Grids",
					"task5": "Responsive Web Design Principles",
					"buttonname": "FreeCodeCamp",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/freecodecamp-org-certification-raythompsonwebdev-javascript-algorithms-and-data-structures-2020-09-30-13_44_12.webp"
				}, {
					"id": "4",
					"hash":"panel-5" ,
					"title": "Lynda.com",
					"header": "Lynda.com",
					"subheader": "Topics",
					"task1": "Become a Front-End Web Developer",
					"task2": "Become a Junior Developer",
					"task3": "Programming Fundementals",
					"task4": "CSS Fundementals",
					"task5": "Javascript Essentials",
					"buttonname": "Lynda.com",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/CertificateOfCompletion_Javascript-Essential-Training-2011.webp"
				}, {
					"id": "5",
					"hash":"panel-6" ,
					"title": "Codewars",
					"header": "Codewars",
					"subheader": "Topics",
					"task1": "Ruby",
					"task2": "8th Kyu",
					"task3": "5th Kyu ",
					"task4": "6th Kyu ",
					"task5": "7th Kyu ",
					"buttonname": "Codewars",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/py4e-badges.webp"
				}, {
					"id": "6",
					"hash":"panel-7" ,
					"title": "Code Academy",
					"header": "Various",
					"subheader": "Topics",
					"task1": "Learn Ruby",
					"task2": "Learn HTML",
					"task3": "Learn Javascript",
					"task4": "Learn PHP",
					"task5": " ",
					"buttonname": "Code Academy",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/codecademy-profiles-raythompsonwebdev-certificates.webp"
				}, {
					"id": "7",
					"hash":"panel-8" ,
					"title": "FreeCode Camp",
					"header": "JavaScript Algorithms and Data Structures",
					"subheader": "Topics",
					"task1": "Basic Javascript",
					"task2": "ES6",
					"task3": "Regular Expressions",
					"task4": "Basic Data Structures",
					"task5": "Basic Algorithim Scripting",
					"buttonname": "Udacity",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/Udacity_logo.webp"
				}, {
					"id": "8",
					"hash":"panel-9" ,
					"title": "Digital Futures 2017",
					"header": "Interactive Programming",
					"subheader": "Topics",
					"task1": "Debate Skills with DebateMate.",
					"task2": "Musical Composition.",
					"task3": "Block programming using Crumble.",
					"task4": "Negotiation skills with CitizenUK.",
					"task5": "Music creation using Sonic Pi",
					"buttonname": "Digital Futures",
					"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/Digital-Futures-2017-Certificate-of-Participation-large.webp"
				}
			]';
			
			$raythompsonwebdev_com_slider_buttons = '[
				{
					"id": "1",
					"buttonname": "Adobe"
				}, {
					"id": "2",
					"buttonname": "ELATT"
				}, {
					"id": "3",
					"buttonname": "Codepen"
				}, {
					"id": "4",
					"buttonname": "FreeCodeCamp"
				}, {
					"id": "5",
					"buttonname": "Lynda.com"
				}, {
					"id": "6",
					"buttonname": "Codewars"
				}, {
					"id": "7",
					"buttonname": "Code Academy"
				}, {
					"id": "8",
					"buttonname": "Udacity"
				}, {
					"id": "9",
					"buttonname": "Digital Futures"
				}
			]';
			
			$raythompsonwebdev_com_slider_panels = json_decode( $raythompsonwebdev_com_slider_panel_text, true );
			$raythompsonwebdev_com_courses_tabs  = json_decode( $raythompsonwebdev_com_slider_buttons, true );


	ob_start();
	?>

		<section id="prof_cont-a">

			<h1><?php esc_html_e( 'Web Development Activities', 'raythompsonwebdev-com' ); ?></h1>

			<!-- #hero-slider -->
			<article class="hero-slider">
				<!-- <ul id="list">
					<?php foreach ( $raythompsonwebdev_com_courses_tabs as $raythompsonwebdev_com_courses_tab ) : ?>
					<li>
						<a href="#" rel="#panel-<?php printf( '%s', esc_html( $raythompsonwebdev_com_courses_tab['id'] ), 'raythompsonwebdev-com' ); ?>" class="hero-btn active" title="<?php printf( '%s', esc_html( $raythompsonwebdev_com_courses_tab['buttonname'] ), 'raythompsonwebdev-com' ); ?>" ><?php printf( '%s', esc_html( $raythompsonwebdev_com_courses_tab['buttonname'] ), 'raythompsonwebdev-com' ); ?></a>
					</li>
					<?php endforeach; ?>

				</ul> -->
				<!--mask-->
				<div class="mask">
					<!--slider body -->
					<div class="slider-body">

						<?php foreach ( $raythompsonwebdev_com_slider_panels as $raythompsonwebdev_com_slider_panel ) : ?>

						<article class="panel" id="<?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['hash'] ), 'raythompsonwebdev-com' ); ?>">

							<h2><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['title'] ), 'raythompsonwebdev-com' ); ?> </h2>

							<figure class="slider-panel">

								<a
									href="<?php echo esc_url( home_url( '/' ) ); ?><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['bgimage'] ), 'raythompsonwebdev-com' ); ?>"
									class="fancybox"
									title="<?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['title'] ), 'raythompsonwebdev-com' ); ?>">
									<span style="background-image: url('<?php echo esc_url( home_url( '/' ) ); ?><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['bgimage'] ), 'raythompsonwebdev-com' ); ?>') " > </span>
								</a>

								<figcaption>
									<h3><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['header'] ), 'raythompsonwebdev-com' ); ?></h3>
									<h4><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['subheader'] ), 'raythompsonwebdev-com' ); ?></h4>

									<ul>
										<li class="dashicons-before"><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task1'] ), 'raythompsonwebdev-com' ); ?></li>
										<li class="dashicons-before"><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task2'] ), 'raythompsonwebdev-com' ); ?></li>
										<li class="dashicons-before"><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task3'] ), 'raythompsonwebdev-com' ); ?></li>
										<li class="dashicons-before"><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task4'] ), 'raythompsonwebdev-com' ); ?></li>
										<li class="dashicons-before"><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task5'] ), 'raythompsonwebdev-com' ); ?></li>
									</ul>

									<div class="clearfix"></div>

								</figcaption>

							</figure>

						</article>
						<?php endforeach; ?>

					</div>
					<!--slider body end-->
					
				</div>
				<!-- .mask end -->

			

			</article>
			<!-- hero-slider end -->
	<div id="slids"><a href="#" id="next">Next</a><a href="#" id="prev">Prev</a></div>
		</section>

<?php
	return ob_get_clean();
}
add_shortcode( 'sliderpanel', 'sliderpanel_callback' );
