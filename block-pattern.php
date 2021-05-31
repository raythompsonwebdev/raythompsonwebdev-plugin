<?php


function raythompsonwebdev_com_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern_category(
			'profile-page-block-pattern',
			array(
				'label' => __( 'Profile Page Pattern', 'raythompsonwebdev-com' ),
			)
		);
		
		register_block_pattern_category(
			'about-page-block-pattern',
			array(
				'label' => __( 'About Page Pattern', 'raythompsonwebdev-com' ),
			)
		);

		register_block_pattern(
			'raythompsonwebdev-com/profile-page-pattern',
			array(
				'title'       => __( 'Profile Page Pattern', 'raythompsonwebdev-com' ),
				'description' => _x( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'raythompsonwebdev-com' ),
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

								<!-- wp:paragraph -->
								<p>HTML & CSS</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>PHP & MYSQL</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Javascript ES5/ES6</p>
								<!-- /wp:paragraph -->
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

								<!-- wp:paragraph -->
								<p>Video, Audio & Image</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>SQL Database</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>On-Site SEO</p>
								<!-- /wp:paragraph -->
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

								<!-- wp:paragraph -->
								<p>Set Up & Installation</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Themes & Plugins</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Gutenberg Blocks</p>
								<!-- /wp:paragraph -->
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

								<!-- wp:paragraph -->
								<p>Web Security</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Database</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Code Debugging</p>
								<!-- /wp:paragraph -->
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
				'title'       => __( 'about Page Pattern', 'raythompsonwebdev-com' ),
				'description' => _x( 'about page layout.', 'Block pattern description', 'raythompsonwebdev-com' ),
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