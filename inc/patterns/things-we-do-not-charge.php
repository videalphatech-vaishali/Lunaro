<?php
/**
 * Register the "Things We Do Not Charge You For" block pattern.
 */
if (!function_exists('apmwptheme_register_no_charge_items_pattern')) {
	function apmwptheme_register_no_charge_items_pattern()
	{
		register_block_pattern(
			'apmwptheme/no-charge-items',
			array(
				'title'       => __('Things We Do Not Charge You For', 'apmwptheme'),
				'description' => __('Heading with icon-bulleted list items, styled via external CSS.', 'apmwptheme'),
				'content'     => '
<!-- wp:group {"className":"nocharge-wrapper","layout":{"type":"flex","orientation":"horizontal","gap":"40px","verticalAlignment":"top"}} -->
<div class="wp-block-group nocharge-wrapper">

	<!-- wp:heading {"level":3,"className":"nocharge-heading"} -->
	<h3 class="nocharge-heading">Things we do not charge<br>you for</h3>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"nocharge-list","layout":{"type":"flex","orientation":"vertical","gap":"20px"}} -->
	<div class="wp-block-group nocharge-list">

		<!-- wp:group {"className":"nocharge-item","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
		<div class="wp-block-group nocharge-item">
			<!-- wp:image {"width":25,"height":25,"className":"nocharge-icon"} -->
			<figure class="wp-block-image size-full is-resized nocharge-icon">
				<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Bullet Icon" width="25" height="25" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"nocharge-text"} -->
			<p class="nocharge-text">Item 1</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"nocharge-item","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
		<div class="wp-block-group nocharge-item">
			<!-- wp:image {"width":25,"height":25,"className":"nocharge-icon"} -->
			<figure class="wp-block-image size-full is-resized nocharge-icon">
				<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Bullet Icon" width="25" height="25" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"nocharge-text"} -->
			<p class="nocharge-text">Item 2</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"nocharge-item","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
		<div class="wp-block-group nocharge-item">
			<!-- wp:image {"width":25,"height":25,"className":"nocharge-icon"} -->
			<figure class="wp-block-image size-full is-resized nocharge-icon">
				<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Bullet Icon" width="25" height="25" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"nocharge-text"} -->
			<p class="nocharge-text">Item 3</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"nocharge-item","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
		<div class="wp-block-group nocharge-item">
			<!-- wp:image {"width":25,"height":25,"className":"nocharge-icon"} -->
			<figure class="wp-block-image size-full is-resized nocharge-icon">
				<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Bullet Icon" width="25" height="25" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"nocharge-text"} -->
			<p class="nocharge-text">Item 4</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
			)
		);
	}
	add_action('init', 'apmwptheme_register_no_charge_items_pattern');
}
