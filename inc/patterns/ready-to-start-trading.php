<?php
function register_start_trading_pattern() {
	register_block_pattern(
		'apmwptheme/start-trading-section',
		array(
			'title'       => __('Ready to start trading', 'apmwptheme'),
			'description' => __('Two-column CTA section with image and text.', 'apmwptheme'),
			'categories'  => array('featured', 'cta'),
			'content'     => '
<!-- wp:group {"className":"start-trading-wrapper","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group start-trading-wrapper">

	<!-- wp:group {"className":"start-trading-content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group start-trading-content">
		
		<!-- wp:heading {"level":2,"className":"start-trading-heading"} -->
		<h2 class="start-trading-heading">Ready to start trading?</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"start-trading-text"} -->
		<p class="start-trading-text">Ready to join us? Sign up now and start trading safely!</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"start-trading-button"} -->
			<div class="wp-block-button start-trading-button">
				<a class="wp-block-button__link">Sign up</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"className":"start-trading-subtext"} -->
		<p class="start-trading-subtext">If you still have questions about our services, <a href="#">check out our FAQs</a> or <a href="#">contact our support team</a>.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:image {"className":"start-trading-image"} -->
	<figure class="wp-block-image start-trading-image">
		<img src="' . esc_url(get_template_directory_uri() . '/assets/img/start-trading-placeholder.png') . '" alt="Trading illustration"/>
	</figure>
	<!-- /wp:image -->

</div>
<!-- /wp:group -->
'
		)
	);
}
add_action('init', 'register_start_trading_pattern');
