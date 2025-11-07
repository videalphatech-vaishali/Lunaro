<?php

function apmwptheme_register_start_trading_cta()
{
    register_block_pattern(
        'apmwptheme/start-trading-now-container',
        array(
            'title'       => __('Start Trading CTA Section', 'apmwptheme'),
            'description' => __('A call-to-action section with heading, buttons, and USPs.'),
            'categories'  => array('cta', 'columns', 'buttons'),
            'content'     => '
<!-- wp:group {"className":"start-trading","layout":{"type":"constrained"}} -->
<div class="wp-block-group start-trading">

    <!-- wp:columns {"className":"start-trading-content","verticalAlignment":"center"} -->
    <div class="wp-block-columns start-trading-content are-vertically-aligned-center">

        <!-- wp:column {"className":"left-column","width":"50%"} -->
        <div class="wp-block-column left-column">
            <!-- wp:heading {"level":3} -->
            <h3>Start trading now</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Create an account and start trading with ABC.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"button-group"} -->
            <div class="wp-block-buttons button-group">
                <!-- wp:button {"className":"btn-primary"} -->
                <div class="wp-block-button"><a class="wp-block-button__link btn-primary">Start trading</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"btn-outline is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link btn-outline">Create demo account</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"right-column","width":"50%"} -->
        <div class="wp-block-column right-column">
            <!-- wp:group {"className":"usp-container"} -->
            <div class="wp-block-group usp-container">
                <!-- wp:paragraph {"className":"usp-item"} -->
                <p class="usp-item"><span class="usp-dot"></span><span class="usp-text">USP 1</span></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"usp-item"} -->
                <p class="usp-item"><span class="usp-dot"></span><span class="usp-text">USP 2</span></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"usp-item"} -->
                <p class="usp-item"><span class="usp-dot"></span><span class="usp-text">USP 3</span></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'apmwptheme_register_start_trading_cta');
