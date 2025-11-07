<?php

/**
 * Register the "Benefits of Forex Trading" block pattern.
 */
if (!function_exists('apmwptheme_register_forex_benefits_pattern')) {
    function apmwptheme_register_forex_benefits_pattern()
    {
        register_block_pattern(
            'apmwptheme/forex-benefits',
            array(
                'title'       => __('Benefits of Forex Trading', 'apmwptheme'),
                'description' => __('Two-column layout listing four key features with icons and text.'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"align":"full","className":"forex-benefits-section"} -->
<div class="wp-block-group alignfull forex-benefits-section">

    <!-- wp:heading {"className":"forex-benefits-heading"} -->
    <h2 class="forex-benefits-heading">Benefits of Forex trading</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"forex-benefits-columns"} -->
    <div class="wp-block-columns forex-benefits-columns">

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"className":"feature-item"} -->
            <div class="wp-block-group feature-item">
                <!-- wp:image {"className":"feature-icon"} -->
                <figure class="wp-block-image feature-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=1" alt="Award 1" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"feature-text"} -->
                <div class="wp-block-group feature-text">
                    <!-- wp:heading {"level":4,"className":"feature-title"} -->
                    <h4 class="feature-title">Feature 1</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"feature-item"} -->
            <div class="wp-block-group feature-item">
                <!-- wp:image {"className":"feature-icon"} -->
                <figure class="wp-block-image feature-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=3" alt="Award 3" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"feature-text"} -->
                <div class="wp-block-group feature-text">
                    <!-- wp:heading {"level":4,"className":"feature-title"} -->
                    <h4 class="feature-title">Feature 3</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"className":"feature-item"} -->
            <div class="wp-block-group feature-item">
                <!-- wp:image {"className":"feature-icon"} -->
                <figure class="wp-block-image feature-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=2" alt="Award 2" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"feature-text"} -->
                <div class="wp-block-group feature-text">
                    <!-- wp:heading {"level":4,"className":"feature-title"} -->
                    <h4 class="feature-title">Feature 2</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"feature-item"} -->
            <div class="wp-block-group feature-item">
                <!-- wp:image {"className":"feature-icon"} -->
                <figure class="wp-block-image feature-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=4" alt="Award 4" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"feature-text"} -->
                <div class="wp-block-group feature-text">
                    <!-- wp:heading {"level":4,"className":"feature-title"} -->
                    <h4 class="feature-title">Feature 4</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"feature-description"} -->
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
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
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_forex_benefits_pattern');
}
