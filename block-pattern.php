<?php

function raythompsonwebdev_com_editor_style() {

	add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'raythompsonwebdev_com_editor_style' );

function raythompsonwebdev_com_enqueue_pattern_style() {
	wp_enqueue_style( 'raythompsonwebdev_com_pattern_style', plugins_url('css/blockpatterns.css',__FILE__ ) );
	
}
add_action( 'wp_enqueue_scripts', 'raythompsonwebdev_com_enqueue_pattern_style' );





function raythompsonwebdev_com_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern_category(
			'home-page-block-pattern',
			array(
				'label' => __( 'Home Page Pattern', 'raythompsonwebdev-com' ),
			)
		);
		
		register_block_pattern_category(
			'about-page-block-pattern',
			array(
				'label' => __( 'About Page Pattern', 'raythompsonwebdev-com' ),
			)
		);

		register_block_pattern(
			'raythompsonwebdev-com/home-page-pattern',
			array(
				'title'       => __( 'Home Page Pattern', 'raythompsonwebdev-com' ),
				'description' => _x( 'Columns for making lists with image and header. ', 'Block pattern description', 'raythompsonwebdev-com' ),
				'content'     => '<!-- wp:group {"align":"wide"} -->
				<div class="wp-block-group alignwide">
					<div class="wp-block-group__inner-container">

						<!-- wp:columns {"align":"wide"} -->
						<div class="wp-block-columns alignwide">
							<!-- wp:column -->
							<div class="wp-block-column">
							<!-- wp:html -->
							<span class="dashicons dashicons-html"></span>
							<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>Code</h4>
								<!-- /wp:heading -->

								<!-- wp:list -->
								<ul>
								<li>HTML & CSS</li>
								<li>PHP & MYSQL</li>
								<li>Javascript ES5/ES6</li>
								</ul>
								<!-- /wp:list -->
								
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
							<!-- wp:html -->
							<span class="dashicons dashicons-images-alt"></span>
							<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>Optimisation</h4>
								<!-- /wp:heading -->

								<!-- wp:list -->
								<ul>
								<li>Video, Audio & Image</li>
								<li>SQL Database</li>
								<li>On-Site SEO</li>
								</ul>
								<!-- /wp:list -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
							<!-- wp:html -->
							<span class="dashicons dashicons-wordpress"></span>
							<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>WordPress</h4>
								<!-- /wp:heading -->

								<!-- wp:list -->
								<ul>
								<li>Set Up & Installation</li>
								<li>Themes & Plugins</li>
								<li>Gutenberg Blocks</li>
								</ul>
								<!-- /wp:list -->
								
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">

							<!-- wp:html -->
								<span class="dashicons dashicons-admin-tools"></span>
								<!-- /wp:html -->

								<!-- wp:heading {"level":4} -->
								<h4>Maintenance</h4>
								<!-- /wp:heading -->

								<!-- wp:list -->
								<ul>
								<li>Web Security</li>
								<li>Database</li>
								<li>Code Debugging</li>
								</ul>
								<!-- /wp:list -->
								
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->

					</div>
				</div>
				<!-- /wp:group -->
				',
				'categories'  => array( 'profile-page-block-pattern' ),
			)
		);
		register_block_pattern(
			'raythompsonwebdev-com/about-page-pattern',
			array(
				'title'       => __( 'About Page Pattern', 'raythompsonwebdev-com' ),
				'description' => _x( 'Layout for raythompsonwebdev portfolio about page.', 'Block pattern description', 'raythompsonwebdev-com' ),
				'content'     => '<!-- wp:group {"align":"wide"} -->
				<div class="wp-block-group alignwide" id="profile-container">
					<div class="wp-block-group__inner-container">
						<!-- wp:html -->
						<article id="text-box-profile">
							
						</article>
						<!-- /wp:html -->

						<!-- wp:shortcode /-->

						<!-- wp:shortcode /-->

						<!-- wp:html -->
						<article id="text-box-profile-a">
							
						</article>
						<!-- /wp:html -->


					</div>
				</div>
				<!-- /wp:group -->',
				'categories'  => array( 'about-page-block-pattern' ),
			)
		);

	}

}
add_action( 'init', 'raythompsonwebdev_com_register_block_patterns' );