<?php

/**
 * Register the Trading Options block pattern.
 */
function register_trading_options_pattern()
{
    $content = <<<HTML
<!-- wp:group {"className":"trading-options-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group trading-options-wrapper">

    <!-- wp:heading {"level":2,"className":"trading-options-heading"} -->
    <h2 class="trading-options-heading">Trading options</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"trading-options-columns"} -->
    <div class="wp-block-columns trading-options-columns">

        <!-- wp:column {"className":"trading-option"} -->
        <div class="wp-block-column trading-option">

<!-- wp:group {"className":"trading-icon-circle","style":{"color":{"background":"#d8e8ff"},"dimensions":{"width":"60px"},"layout":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group trading-icon-circle" style="background-color:#d8e8ff;width:60px;aspect-ratio:1;"></div>
<!-- /wp:group -->


            <!-- wp:heading {"level":4,"className":"trading-option-title"} -->
            <h4 class="trading-option-title">CFD Trading</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"trading-option-description"} -->
            <p class="trading-option-description">Explore our introductory materials for smarter money management.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"trading-option-link"} -->
            <p class="trading-option-link"><a href="#">Learn more about CFD Trading</a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"trading-option"} -->
        <div class="wp-block-column trading-option">
<!-- wp:group {"className":"trading-icon-circle","style":{"color":{"background":"#d8e8ff"},"dimensions":{"width":"60px"},"layout":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group trading-icon-circle" style="background-color:#d8e8ff;width:60px;aspect-ratio:1;"></div>
<!-- /wp:group -->

            <!-- wp:heading {"level":4,"className":"trading-option-title"} -->
            <h4 class="trading-option-title">Spread betting</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"trading-option-description"} -->
            <p class="trading-option-description">Schedule a consultation with one of our specialists to address all your inquiries.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"trading-option-link"} -->
            <p class="trading-option-link"><a href="#">Learn more about Spread betting</a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
HTML;

    register_block_pattern(
        'apmwptheme/trading-options',
        array(
            'title'       => __('Trading Options Section', 'apmwptheme'),
            'description' => __('Two-column layout with trading options and links.'),
            'categories'  => array('featured', 'columns'),
            'content'     => $content,
        )
    );
}
add_action('init', 'register_trading_options_pattern');
