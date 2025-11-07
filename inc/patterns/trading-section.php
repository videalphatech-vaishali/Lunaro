<?php
/**
 * Register the "Trading Sections" Pattern.
 */
function register_trading_sections_block() {
    register_block_pattern(
        'apmwptheme/trading-sections',
        array(
            'title'       => __('Trading Sections', 'apmwptheme'),
            'description' => __('Trading intro section with heading on left and cards on right'),
            'categories'  => array('featured', 'columns'),
            'content'     => '
<!-- wp:group {"className":"trading-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group trading-section">

    <!-- wp:group {"className":"trading-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
    <div class="wp-block-group trading-row">

        <!-- wp:group {"className":"trading-title","layout":{"type":"constrained"}} -->
        <div class="wp-block-group trading-title">
            <h2>New to trading?</h2>
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"trading-cards","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"}} -->
        <div class="wp-block-group trading-cards">

            <!-- wp:group {"className":"trading-card","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group trading-card">
                <div class="trading-icon"></div>
                <div class="trading-content">
                    <h3>Learning resources</h3>
                    <p>Explore our introductory materials for smarter money management.</p>
                    <p class="trading-link"><a href="#">Go to our tutorials</a></p>
                </div>
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"trading-card","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group trading-card">
                <div class="trading-icon"></div>
                <div class="trading-content">
                    <h3>Guidance and advice</h3>
                    <p>Schedule a consultation with one of our specialists to address all your inquiries.</p>
                    <p class="trading-link"><a href="#">Book a consultation</a></p>
                </div>
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:separator -->
<hr class="wp-block-separator divider"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"trading-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group trading-section">

    <!-- wp:group {"className":"trading-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
    <div class="wp-block-group trading-row">

        <!-- wp:group {"className":"trading-title","layout":{"type":"constrained"}} -->
        <div class="wp-block-group trading-title">
            <h2>For expert traders</h2>
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"trading-cards","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"}} -->
        <div class="wp-block-group trading-cards">

            <!-- wp:group {"className":"trading-card","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group trading-card">
                <div class="trading-icon"></div>
                <div class="trading-content">
                    <h3>Our platforms</h3>
                    <p>Learn about our platforms and their advantages.</p>
                    <p class="trading-link"><a href="#">Go to our tutorials</a></p>
                </div>
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"trading-card","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group trading-card">
                <div class="trading-icon"></div>
                <div class="trading-content">
                    <h3>APM Pro</h3>
                    <p>Second point to attract expert traders, TBD</p>
                    <p class="trading-link"><a href="#">Register as professional trader</a></p>
                </div>
            </div>
            <!-- /wp:group -->

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
add_action('init', 'register_trading_sections_block');
