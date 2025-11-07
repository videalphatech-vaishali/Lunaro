<?php

/**
 * Register the "Why Trade With Us" Section.
 */
function register_why_trade_with_us_block()
{
    register_block_pattern(
        'apmwptheme/why-trade-with-us',
        array(
            'title'       => __('Why Trade With Us', 'apmwptheme'),
            'description' => __('Three horizontal cards with icon, title, and description.'),
            'categories'  => array('featured', 'columns'),
            'content'     => '
<!-- wp:group {"className":"why-trade-with-us-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group why-trade-with-us-section">

    <!-- wp:heading {"level":2,"className":"why-trade-with-us-heading"} -->
    <h2 class="why-trade-with-us-heading">Why trade with us</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"why-trade-with-us-cards","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group why-trade-with-us-cards">

        <!-- wp:group {"className":"why-trade-with-us-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group why-trade-with-us-card">
            <div class="why-trade-with-us-card-header">
                <span class="why-trade-with-us-icon"></span>
                <h3 class="why-trade-with-us-card-title">Reason 1</h3>
            </div>
            <p class="why-trade-with-us-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"why-trade-with-us-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group why-trade-with-us-card">
            <div class="why-trade-with-us-card-header">
                <span class="why-trade-with-us-icon"></span>
                <h3 class="why-trade-with-us-card-title">Reason 2</h3>
            </div>
            <p class="why-trade-with-us-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"why-trade-with-us-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group why-trade-with-us-card">
            <div class="why-trade-with-us-card-header">
                <span class="why-trade-with-us-icon"></span>
                <h3 class="why-trade-with-us-card-title">Reason 3</h3>
            </div>
            <p class="why-trade-with-us-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'register_why_trade_with_us_block');
