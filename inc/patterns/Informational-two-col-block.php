<?php

/**
 * Register the Trading Resources block pattern.
 */
if (! function_exists('lr_register_trading_resources_pattern')) {
    function lr_register_trading_resources_pattern()
    {
        register_block_pattern(
            'apmwptheme/lr-trading-resources',
            array(
                'title'       => __('Trading Help Section', 'apmwptheme'),
                'description' => __('A two-row info section for beginner and expert traders.', 'apmwptheme'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"className":"lr-trading-section"} -->
<div class="wp-block-group lr-trading-section lr-trade">

    <!-- wp:group {"className":"lr-new-trading"} -->
    <div class="wp-block-group lr-new-trading">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%">
                <!-- wp:heading {"level":2} -->
                <h2>New to trading?</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"className":"lr-icon-text"} -->
                        <div class="wp-block-group lr-icon-text ">
                            <!-- wp:image {"className":"lr-icon jk"} -->
                            <figure class="wp-block-image lr-icon"><img src="/path/to/icon-circle.png" alt="Icon"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"lr-text-content"} -->
                            <div class="wp-block-group lr-text-content">
                                <!-- wp:paragraph -->
                                <p>Learning resources<br>Explore our introductory materials for smarter money management.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"lr-link"} -->
                                <p><a href="#" class="lr-no-underline-link">Go to our tutorials</a></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"className":"lr-icon-text"} -->
                        <div class="wp-block-group lr-icon-text">
                            <!-- wp:image {"className":"lr-icon"} -->
                            <figure class="wp-block-image lr-icon"><img src="/path/to/icon-circle.png" alt="Icon"/></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"className":"lr-text-content"} -->
                            <div class="wp-block-group lr-text-content">
                                <!-- wp:paragraph -->
                                <p>Guide and advice<br>Schedule a consultation with one of our specialists to address all your inquiries.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"lr-link"} -->
                                <p><a href="#" class="lr-no-underline-link">Book a consultation</a></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
'
            )
        );
    }
    add_action('init', 'lr_register_trading_resources_pattern');
}
