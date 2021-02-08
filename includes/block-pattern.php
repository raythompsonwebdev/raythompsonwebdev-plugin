<?php

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

function raythompsonwebdev_com_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

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
							<p>
								I have had a passion for web development since 2012 after attending a course
								in basic web design for beginners at a place called ELATT in Hackney,
								London. The experience of taking part in the course, learning the process of
								developing a website inspired me to learn more about web development.
							</p>

							<p>
								Since then I spend lots of my spare time learning coding languages,
								practising coding,&nbsp;<strong
									><a href="https://raythompsonwebdev.co.uk/projects"
										>building web applications</a
									></strong
								>, sharing what I have learned with friends, online and at events during my
								spare time while working full-time. I became more interested in programming
								around 2016 after completing online courses like&nbsp;<strong
									><a href="https://www.freecodecamp.org/raythompsonwebdev"
										>Free Code Camp</a
									></strong
								>&nbsp;that year and gained even more inspiration to learn more about coding
								languages like Javascipt, PHP, Ruby and Python and continue coding and
								building small applications.
							</p>

							<p>
								Keeping up with changes that have happended over the past few years in web
								development has been a challenge.
							</p>
						</article>
						<!-- /wp:html -->

						<!-- wp:shortcode /-->

						<!-- wp:shortcode /-->

						<!-- wp:html -->
						<article id="text-box-profile-a">
							<!-- wp:paragraph -->
							<p>
								I have been inspired enough to continue learning and mastering new coding
								techniques to solve problems I come across when coding.&nbsp;&nbsp;<strong
								></strong>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>
								I have gained valuable knowledge and experience meeting others interested
								in web development, online and at live events I have been able to attend.
								Events like&nbsp;<strong
									><a href="https://vimeo.com/232481032">Digital Futures 2017</a></strong
								>&nbsp;in Waterloo, London. and&nbsp;<strong
									><a href="https://2018.london.wordcamp.org/attendees/"
										>WordCamp 2018</a
									></strong
								>&nbsp;in London and attending pair programming sessions to solve coding
								problems like the one held by&nbsp;<strong
									><a href="https://makers.tech/">Makers Academy.</a></strong
								>
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>
								This has helped me with the confidence to put into practice what I have
								learned to create full stack web applications, wordpress themes and
								plugins and other web programs.
							</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>
								My aim is to continue improving my coding skills and workflow so that I am
								able to help in the creation of well designed and maintainable web
								applications and contribute towards improving the user experience,
								security and accessibility of web application on the web for all users.
							</p>
							<!-- /wp:paragraph -->
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