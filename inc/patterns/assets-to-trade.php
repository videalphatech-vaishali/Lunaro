<?php
function register_assets_to_trade_pattern()
{
    $content = <<<HTML
<!-- wp:group {"className":"assets-section-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group assets-section-wrapper">

    <!-- wp:heading {"level":2,"className":"assets-heading"} -->
    <h2 class="assets-heading">Assets to trade</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"assets-subtext"} -->
    <p class="assets-subtext">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"className":"assets-columns"} -->
    <div class="wp-block-columns assets-columns">

        <!-- wp:column {"className":"assets-column"} -->
        <div class="wp-block-column assets-column">
            <!-- wp:group {"className":"asset-card","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group asset-card">
                <!-- wp:paragraph {"className":"asset-title"} -->
                <p class="asset-title">Indices</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"asset-link"} -->
                <p class="asset-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"asset-card","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group asset-card">
                <!-- wp:paragraph {"className":"asset-title"} -->
                <p class="asset-title">Shares</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"asset-link"} -->
                <p class="asset-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"assets-column"} -->
        <div class="wp-block-column assets-column">
            <!-- wp:group {"className":"asset-card","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group asset-card">
                <!-- wp:paragraph {"className":"asset-title"} -->
                <p class="asset-title">Forex</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"asset-link"} -->
                <p class="asset-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"asset-card","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group asset-card">
                <!-- wp:paragraph {"className":"asset-title"} -->
                <p class="asset-title">ETFs</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"asset-link"} -->
                <p class="asset-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"assets-column"} -->
        <div class="wp-block-column assets-column">
            <!-- wp:group {"className":"asset-card","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group asset-card">
                <!-- wp:paragraph {"className":"asset-title"} -->
                <p class="asset-title">Commodities</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"asset-link"} -->
                <p class="asset-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"asset-card","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <div class="wp-block-group asset-card">
                <!-- wp:paragraph {"className":"asset-title"} -->
                <p class="asset-title">Treasuries</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"asset-link"} -->
                <p class="asset-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
HTML;

    register_block_pattern(
        'apmwptheme/assets-to-trade',
        array(
            'title'       => __('Assets to Trade Section', 'apmwptheme'),
            'description' => __('A grid layout of tradable assets with “Learn more” links.'),
            'categories'  => array('featured', 'columns'),
            'content'     => $content,
        )
    );
}
add_action('init', 'register_assets_to_trade_pattern');
