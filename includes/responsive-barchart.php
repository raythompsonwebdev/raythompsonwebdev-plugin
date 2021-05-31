<?php
/**
 * Plugin Name: Responsive Bar Chart!
 * Description: HTML Code.
 * Author: Raymond Thompson.
 * Version: 1.0.
 * Author URI: http://www.raythompsonwebdev.co.uk.
 *
 * @package Responsive Bar Char
 */

/**
 * Responsive Bar Chart Shortcode *
 *
 * @param array  $atts array of values.
 * @param string $src url for audio.
 * @return mixed
 *
 */

function raythompsonwebdev_com_enqueue_chart_style() {
	wp_enqueue_style( 'raythompsonwebdev_com_chart_style', plugins_url('/css/responsive-barchart.css',__FILE__ ) );
	wp_enqueue_script( 'raythompsonwebdev_com_chart_script', plugins_url('/js/responsive-barchart.js',__FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_enqueue_chart_style' );

function responsivechart_callback( $atts ) {

	
	$raythompsonwebdev_com_chart_bars = '[
		{
			"id": "1",
			"language":"HTML",
			"datapercentage": "75",
			"dataskill":"INTERMEDIATE"
		}, {
			"id": "2",
			"language":"CSS",
			"datapercentage": "75",
			"dataskill":"INTERMEDIATE"
		}, {
			"id": "3",
			"language":"JAVASCRIPT",
			"datapercentage": "80",
			"dataskill":"INTERMEDIATE"
		}, {
			"id": "4",
			"language":"PHP",
			"datapercentage": "80",
			"dataskill":"INTERMEDIATE"
		}, {
			"id": "5",
			"language":"MYSQL",
			"datapercentage": "70",
			"dataskill":"INTERMEDIATE"
		}
	]';
	
	$raythompsonwebdev_com_bars = json_decode( $raythompsonwebdev_com_chart_bars, true );

	ob_start();
	?>

	<section id="prof_cont">

		<h1><?php esc_html_e( 'Coding Languages', 'raythompsonwebdev-com' ); ?></h1>

		<article id="chart">

			<ul id="bars">

			<?php

			foreach ( $raythompsonwebdev_com_bars as $raythompsonwebdev_com_bar ) :

				?>

				<li>
					<div
						data-percentage="<?php	printf( '%s', esc_html( $raythompsonwebdev_com_bar['datapercentage'] ), 'raythompsonwebdev-com' ); ?>"	class="bar"	data-skill="<?php printf( '%s', esc_html( $raythompsonwebdev_com_bar['dataskill'] ), 'raythompsonwebdev-com' ); ?>" ></div>
					<span><?php printf( '%s', esc_html( $raythompsonwebdev_com_bar['language'] ), 'raythompsonwebdev-com' ); ?></span>
				</li>

			<?php endforeach; ?>

			</ul>

		</article>

	</section><!--end of prof cont-->

<?php
	return ob_get_clean();
}
add_shortcode( 'responsivechart', 'responsivechart_callback' );


