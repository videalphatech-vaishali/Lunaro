<?php

/**
 * Register the "Support and Resources" block pattern.
 */
if (!function_exists('apmwptheme_register_support_resources_pattern')) {
    function apmwptheme_register_support_resources_pattern()
    {
        register_block_pattern(
            'apmwptheme/support-and-resources',
            array(
                'title'       => __('Support and Resources', 'apmwptheme'),
                'description' => __('Simple section with heading, two-paragraph description, and a support link.'),
                'categories'  => array('text', 'featured'),
                'content'     => '
<!-- wp:group {"align":"full","className":"support-resources-section"} -->
<div class="wp-block-group alignfull support-resources-section">

    <!-- wp:heading {"level":2,"className":"support-heading"} -->
    <h2 class="support-heading">Support and resources</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"feature-description"} -->
    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"feature-description"} -->
    <p class="feature-description">Check out our guide for Indices trading.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"support-link"} -->
    <p class="support-link"><a href="#">Meta Trader 5 video tutorials</a></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_support_resources_pattern');
}
