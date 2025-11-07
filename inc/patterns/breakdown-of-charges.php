<?php

/**
 * Register the Ultimate FAQ UI block pattern (accordion with category filter).
 */
function register_faq_ui_pattern()
{
    register_block_pattern(
        'apmwptheme/faq-ui-pattern',
        array(
            'title'       => __('FAQ Accordion with Category Filter', 'apmwptheme'),
            'description' => __('A categorized FAQ section with accordion behavior, using Ultimate FAQ plugin.'),
            'categories'  => array('featured', 'widgets'),
            'content'     => '
<!-- wp:group {"className":"faq-ui-wrapper","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"}} -->
<div class="wp-block-group faq-ui-wrapper">

    <!-- wp:group {"className":"faq-ui-sidebar","layout":{"type":"constrained"}} -->
    <div class="wp-block-group faq-ui-sidebar">
        <!-- Optional placeholder text or instructions -->
        <p><strong>Categories will appear dynamically here.</strong></p>
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"faq-ui-content","layout":{"type":"constrained"}} -->
    <div class="wp-block-group faq-ui-content">
        <!-- wp:shortcode -->
        [ultimate_faq_ui]
        <!-- /wp:shortcode -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'register_faq_ui_pattern');
