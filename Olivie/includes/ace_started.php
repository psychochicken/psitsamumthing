<?php
function my_admin_menu() {
	add_theme_page( 'Getting Started', 'Getting Started', 'manage_options', 'ace_started.php', 'ace_started', '', 100  );
}
add_action( 'admin_menu', 'my_admin_menu' );

function ace_started() { ?>

	<style type="text/css">
	/********** Miscellaneous **********/
	.split-columns {width: 100%; margin: 20px 0; font-size: 1.8em; color: #444;}
	.split-columns:after {content: ''; height: 10px; display: block; clear: both;}
	.split-columns p {font-size: .9em;}
	.large-icon {text-align: center; font-size: 4.8em; width: 100px; height: 100px; display: block; margin: 0 auto;}
	.text-center {text-align: center;}

	/********** Shortcodes **********/
	.colleft,
	.colright {margin-bottom: 20px;}

	.colleft,
	.colright {width: 38%; line-height: 1.8em; display: inline-block; vertical-align: top; margin: 0 5%;}

	/********** @media **********/
	@media all and (max-width: 480px) {

		/********** Shortcodes **********/
		.colleft,
		.colright {float: none; width: 90%; clear: both; line-height: 1.8em;}

		.pullquote {width: 85%;}

		.sc-slide {position: relative; overflow: hidden; width: 100%; height: auto; margin: 0 0 20px 0; padding: 0;}

	}

	/********** @media **********/
	@media all and (min-width: 481px) and (max-width: 1199px) {

	}

	/********** @media **********/
	@media all and (min-width: 1200px) {

	}
	</style>

	<div class="wrap text-center">

		<h1>Getting started</h1>

		<section class="split-columns">
			<article class="colleft">
				<span class="dashicons dashicons-admin-page large-icon"></span>
				<h4>Documentation</h4>
				<p>Follow our <a href="<?php echo esc_url( 'http://help.bluchic.com/?utm_source=getting-started&utm_medium=theme-options&utm_campaign=theme-options-getting-started' ); ?>" target="_blank">documentation</a> to get your theme set up. With a little DIY, you could have your gorgeous new website looks like the demo.</p>
			</article><!-- .left -->
			<article class="colright">
				<span class="dashicons dashicons-sos large-icon"></span>
				<h4>Support Ticket</h4>
				<p>If you run into any difficulty, we're here to help with direct, personal support! Just <a href="<?php echo esc_url( 'http://help.bluchic.com/submit-a-ticket?utm_source=getting-started&utm_medium=theme-options&utm_campaign=theme-options-getting-started' ); ?>" target="_blank">submit a support ticket</a>.</p>
			</article><!-- .right -->
		</section><!-- .split-columns -->

	</div>

<?php }
