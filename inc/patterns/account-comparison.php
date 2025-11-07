<?php

function apmwptheme_register_account_comparison_pattern()
{
    register_block_pattern(
        'apmwptheme/account-comparison',
        array(
            'title'       => __('Account Comparison Table', 'apmwptheme'),
            'description' => __('Row-wise account feature comparison.'),
            'categories'  => array('columns', 'text'),
            'content'     => '
<!-- wp:group {"className":"account-comparison-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group account-comparison-wrapper">

    <!-- wp:heading {"level":2,"className":"account-comparison-title"} -->
    <h2 class="account-comparison-title">Account comparison</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"account-comparison-row heading-row"} -->
    <div class="wp-block-columns account-comparison-row heading-row">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-col-heading"} -->
            <p class="account-col-heading">Standard</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-col-heading"} -->
            <p class="account-col-heading">APM Pro</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"account-comparison-row"} -->
    <div class="wp-block-columns account-comparison-row">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item 1</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item A</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:separator {"className":"account-comparison-separator"} -->
    <hr class="wp-block-separator account-comparison-separator"/>
    <!-- /wp:separator -->

    <!-- wp:columns {"className":"account-comparison-row"} -->
    <div class="wp-block-columns account-comparison-row">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item 2</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item B</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:separator {"className":"account-comparison-separator"} -->
    <hr class="wp-block-separator account-comparison-separator"/>
    <!-- /wp:separator -->

    <!-- wp:columns {"className":"account-comparison-row"} -->
    <div class="wp-block-columns account-comparison-row">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item 3</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item C</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:separator {"className":"account-comparison-separator"} -->
    <hr class="wp-block-separator account-comparison-separator"/>
    <!-- /wp:separator -->

    <!-- wp:columns {"className":"account-comparison-row"} -->
    <div class="wp-block-columns account-comparison-row">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item 4</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"className":"account-feature"} -->
            <p class="account-feature">Item D</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:separator {"className":"account-comparison-separator"} -->
    <hr class="wp-block-separator account-comparison-separator"/>
    <!-- /wp:separator -->

</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'apmwptheme_register_account_comparison_pattern');
