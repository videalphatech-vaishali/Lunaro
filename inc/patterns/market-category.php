<?php

/**
 * Register the Market Categories block pattern with image icons.
 */
if (!function_exists('apmwptheme_register_market_category')) {
    function apmwptheme_register_market_category()
    {
        register_block_pattern(
            'apmwptheme/market-category',
            array(
                'title'       => __('Market Categories', 'apmwptheme'),
                'description' => __('Grid layout of market categories with icons and descriptions.', 'apmwptheme'),
                'categories'  => array('columns', 'text'),
                'content'     => <<<'HTML'
<!-- wp:group {"className":"mc-wrapper"} -->
<div class="wp-block-group mc-wrapper">

    <!-- wp:heading {"className":"mc-title"} -->
    <h2 class="mc-title">Market categories</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"mc-columns"} -->
    <div class="wp-block-columns mc-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"mc-card"} -->
            <div class="wp-block-group mc-card">
                <!-- wp:group {"className":"mc-icon"} -->
                <div class="wp-block-group mc-icon">
                    <!-- wp:image {"width":60,"height":60,"sizeSlug":"full","className":"mc-icon-img"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="/assets/icons/commodity.png" alt="Commodity" width="60" height="60" class="mc-icon-img"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:heading {"level":3,"className":"mc-heading"} -->
                <h3 class="mc-heading">Commodity</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"className":"mc-text"} -->
                <p class="mc-text">A commodity is a tangible asset that is traded in large quantities and is largely interchangeable with other items of the same type.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"mc-link"} -->
                <p class="mc-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"mc-card"} -->
            <div class="wp-block-group mc-card">
                <!-- wp:group {"className":"mc-icon"} -->
                <div class="wp-block-group mc-icon">
                    <!-- wp:image {"width":60,"height":60,"sizeSlug":"full","className":"mc-icon-img"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="/assets/icons/etf.png" alt="ETF" width="60" height="60" class="mc-icon-img"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:heading {"level":3,"className":"mc-heading"} -->
                <h3 class="mc-heading">ETF</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"className":"mc-text"} -->
                <p class="mc-text">ETFs offer instant diversification by holding a variety of assets, reducing risk compared to investing in a single stock.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"mc-link"} -->
                <p class="mc-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"mc-card"} -->
            <div class="wp-block-group mc-card">
                <!-- wp:group {"className":"mc-icon"} -->
                <div class="wp-block-group mc-icon">
                    <!-- wp:image {"width":60,"height":60,"sizeSlug":"full","className":"mc-icon-img"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="/assets/icons/forex.png" alt="Forex" width="60" height="60" class="mc-icon-img"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:heading {"level":3,"className":"mc-heading"} -->
                <h3 class="mc-heading">Forex</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"className":"mc-text"} -->
                <p class="mc-text">FX trading is the conversion of one currency into another.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"mc-link"} -->
                <p class="mc-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"mc-columns"} -->
    <div class="wp-block-columns mc-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"mc-card"} -->
            <div class="wp-block-group mc-card">
                <!-- wp:group {"className":"mc-icon"} -->
                <div class="wp-block-group mc-icon">
                    <!-- wp:image {"width":60,"height":60,"sizeSlug":"full","className":"mc-icon-img"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="/assets/icons/indices.png" alt="Indices" width="60" height="60" class="mc-icon-img"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:heading {"level":3,"className":"mc-heading"} -->
                <h3 class="mc-heading">Indices</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"className":"mc-text"} -->
                <p class="mc-text">A statistical measurement that tracks the performance of a specific segment or the entire market.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"mc-link"} -->
                <p class="mc-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"mc-card"} -->
            <div class="wp-block-group mc-card">
                <!-- wp:group {"className":"mc-icon"} -->
                <div class="wp-block-group mc-icon">
                    <!-- wp:image {"width":60,"height":60,"sizeSlug":"full","className":"mc-icon-img"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="/assets/icons/shares.png" alt="Shares" width="60" height="60" class="mc-icon-img"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:heading {"level":3,"className":"mc-heading"} -->
                <h3 class="mc-heading">Shares</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"className":"mc-text"} -->
                <p class="mc-text">Shares are traded on stock exchanges, which are marketplaces where buyers and sellers come together to transact.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"mc-link"} -->
                <p class="mc-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"mc-card"} -->
            <div class="wp-block-group mc-card">
                <!-- wp:group {"className":"mc-icon"} -->
                <div class="wp-block-group mc-icon">
                    <!-- wp:image {"width":60,"height":60,"sizeSlug":"full","className":"mc-icon-img"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="/assets/icons/treasuries.png" alt="Treasuries" width="60" height="60" class="mc-icon-img"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:heading {"level":3,"className":"mc-heading"} -->
                <h3 class="mc-heading">Treasuries</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"className":"mc-text"} -->
                <p class="mc-text">Generally refers to Treasury securities.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"mc-link"} -->
                <p class="mc-link"><a href="#">Learn more</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
HTML
            )
        );
    }
    add_action('init', 'apmwptheme_register_market_category');
}
